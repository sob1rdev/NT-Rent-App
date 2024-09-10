<?php

declare(strict_types=1);

namespace Controller;

use App\Ads;
use App\Session;
use App\User;

class UserController
{
    public function loadProfile(): void
    {
        $ads = (new Ads())->getUsersAds((new Session())->getId());
        loadView('profile', ['ads' => $ads], false);
    }

    public function listUsers(): void
    {

    }

    public function updateUser(): void
    {

    }

    public function editUser(): void
    {

    }

    public function deleteUser(): void
    {

    }

    public function profileSetting(): void
    {
        $userId = (new Session())->getId();
        $user = (new User())->getUserById($userId);
        loadView('dashboard/profile-setting', ['user' => $user]);
    }


    public function accountSetting(): void
    {
        $userId = (new Session())->getId();

        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $position = $_POST['position'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $password = $_POST['password'] ?? '';
        $phone = $_POST['phone'] ?? '';

        $user = new User();
        $user->updateUser(
            id: $userId,
            username: $username,
            email: $email,
            position: $position,
            gender: $gender,
            password: $password,
            phone: $phone
        );
    }

}
