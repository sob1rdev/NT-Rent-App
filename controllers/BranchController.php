<?php

namespace Controller;

use App\Branch;
use App\Session;
use App\Status;

class BranchController
{
    public function listBranches()
    {
        $branches = (new Branch())->getBranches();
        loadView("/dashboard/create-branch", ['branches' => $branches]);
    }

    public function createBranch()
    {
        loadView("/dashboard/create-branch");
    }

    public function storeBranch(): void
    {
        $branch_name = $_POST['name'];
        $branch_address = $_POST['address'];
        $newBranch = (new Branch())->createBranch(
            name: $branch_name,
            address: $branch_address
        );

        redirect("/branch/listBranches");
    }

    public function updateBranch($id): void
    {
        $branch = (new Branch())->getBranch($id);
        loadView("/dashboard/create-branch", ['branch' => $branch]);
    }

    public function editBranch($id): void
    {
        $branch = new Branch();
        $branch->updateBranch(
            id: $id,
            name: $_POST['name'],
            address: $_POST['address']
        );

        redirect("/admin");
    }

    public function deleteBranch(int $id): void
    {
        $branch = new Branch();
        $branch->deleteBranch($id);
        redirect("/admin");
    }

}
