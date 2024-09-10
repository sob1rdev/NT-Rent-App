<?php
declare(strict_types=1);
loadPartials('header');
loadPartials('navbar');

/**
 * @var $branch
 * @var $branches
 */

$uri = explode('/', $_SERVER['REQUEST_URI']);
if (in_array('create', $uri)) {
    $action = '/branch/create';
    $branch    = null;
} else {
    $action = "/branch/update/$branch->id";
}

?>

<div class="page-wrapper toggled">
    <main class="page-content bg-gray-50 dark:bg-slate-800">
        <div class="top-header">
            <div class="header-bar flex justify-between">
                <div class="flex items-center space-x-1">
                    <!-- Logo -->
                    <a href="#" class="xl:hidden block me-2">
                        <img src="assets/images/logo-icon-32.png" class="md:hidden block" alt="">
                        <span class="md:block hidden">
                            <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                            <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                        </span>
                    </a>
                    <!-- Logo -->
                    <!-- Sidebar Toggler -->
                    <a id="close-sidebar" class="size-8 inline-flex items-center justify-center text-[20px] bg-gray-50 dark:bg-slate-800 hover:bg-gray-100 dark:hover:bg-slate-700 border border-gray-100 dark:border-gray-800 text-slate-900 dark:text-white rounded-md" href="javascript:void(0)">
                        <i data-feather="menu" class="size-4"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Branch Create Form -->
        <?php if (in_array('create', $uri) || in_array('update', $uri)): ?>
            <section class="relative lg:py-24 py-16">
                <div class="container relative">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-6 mt-6">
                        <div class="rounded-md shadow dark:shadow-gray-700 p-6 bg-white dark:bg-slate-900 h-fit content-center">
                            <form id="branch-create" action="<?=$action?>" method="post" enctype="multipart/form-data">
                                <input name="_method" value="patch" hidden>
                                <div class="grid grid-cols-12 gap-5">
                                    <div class="col-span-12">
                                        <label for="name" class="font-medium">Fillial nomi</label>
                                        <input name="name" id="name" type="text" class="form-input mt-2" placeholder="Nomi:" value="<?=$branch?->name ?>">
                                    </div>
                                    <div class="col-span-12">
                                        <label for="address" class="font-medium">Fillial addressi</label>
                                        <input name="address" id="address" type="text" class="form-input mt-2" placeholder="Manzili:" value="<?=$branch?->address ?? '' ?>">
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md mt-5">Saqlash</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <!-- Branch Listings -->
        <section class="relative lg:py-24 py-16">
            <div class="container relative">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    <?php foreach ($branches as $branch): ?>
                        <div class="relative group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="p-6">
                                <div class="flex justify-between items-center pb-6">
                                    <a href="/branch/update/<?=$branch->id ?>" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500"><?=$branch->name ?></a>
                                    <div class="flex space-x-4">
                                        <a href="/branch/update/<?=$branch->id ?>"
                                           class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">
                                            <i class="mdi mdi-pencil text-[20px]"></i>
                                        </a>
                                        <a href="/branch/delete/<?=$branch->id ?>"
                                           class="btn btn-icon bg-red-600 dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600">
                                            <i class="mdi mdi-delete text-[20px]"></i>
                                        </a>
                                    </div>
                                </div>
                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Manzil</span>
                                        <p class="text-lg font-medium"><?=$branch->address ?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
</div>

<?php
loadPartials('footer');
?>
