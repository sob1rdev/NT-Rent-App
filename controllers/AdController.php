<?php

declare(strict_types=1);

namespace Controller;

use App\Branch;
use App\Session;
use App\Status;

class AdController
{
    private Session $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function show(int $id): void
    {
        $ad = (new \App\Ads())->getAd($id);
        $ad->image = "../assets/images/ads/$ad->image";
        loadView('single-ad', ['ad' => $ad]);
    }

    public function create(): void
    {
        $branches = (new Branch())->getBranches();
        $statuses = (new Status())->getStatuses();
        loadView('dashboard/create-ad', ['branches' => $branches, 'statuses' => $statuses]);
    }

    public function store(): void
    {
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING) ?? '';
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING) ?? '';
        $price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT) ?? 0.0;
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING) ?? '';
        $rooms = filter_input(INPUT_POST, 'rooms', FILTER_VALIDATE_INT) ?? 0;

        if ($title && $description && $price > 0 && $address && $rooms > 0) {
            $newAdsId = (new \App\Ads())->createAds(
                title: $title,
                description: $description,
                user_id: $this->session->getId(),
                status_id: (int)$_POST['status_id'],
                branch_id: (int)$_POST['branch_id'],
                address: $address,
                price: $price,
                rooms: $rooms
            );

            if ($newAdsId) {
                $imageHandler = new \App\Image();
                $fileName = $imageHandler->handleUpload();

                if (!$fileName) {
                    exit('Rasm yuklanmadi!');
                }

                $imageHandler->addImage((int)$newAdsId, $fileName);

                header('Location: /');
                exit();
            }

            return;
        }

        echo "Iltimos, barcha maydonlarni to'ldiring!";
    }

    public function update(int $id): void
    {
        $branches = (new Branch())->getBranches();
        $statuses = (new Status())->getStatuses();
        loadView('dashboard/create-ad', ['ad' => (new \App\Ads())->getAd($id), 'branches' => $branches, 'statuses' => $statuses]);
    }

    public function edit(int $id): void
    {
        $ad = new \App\Ads();
        if ($_FILES['image']['error'] != 4) {
            $uploadPath = basePath("/public_html/assets/images/ads/");
            $image = new \App\Image();
            $image_name = $image->getImageByAdId($id);
            unlink(basePath($uploadPath . "/" . $image_name->name));
            $newFileName = $image->handleUpload();
            $image->updateImage($image_name->id, $newFileName);
        }
        $ad->updateAds(
            id: $id,
            title: $_POST['title'],
            description: $_POST['description'],
            user_id: $this->session->getId(),
            status_id: (int)$_POST['status_id'],
            branch_id: (int)($_POST['branch_id']),
            price: (float)$_POST['price'],
            address: $_POST['address'],
            rooms: (int)$_POST['rooms']
        );
        redirect('/profile');
    }

    public function delete(int $id): void
    {
        $ads = new \App\Ads();
        $imageHandler = new \App\Image();
        $image = $imageHandler->getImageByAdId($id);

        if ($image) {
            $uploadPath = basePath("/public/assets/images/ads/");
            $imageName = $image->name;
            $filePath = $uploadPath . $imageName;

            if ($imageName !== 'default.jpg' && file_exists($filePath)) {
                unlink($filePath);
                $imageHandler->deleteImage($image->id);
            }
        }

        $ads->deleteAd($id);
        redirect('/profile');
    }
}
