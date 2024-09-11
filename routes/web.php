<?php

declare(strict_types=1);

use App\Router;
use Controller\AdController;
use Controller\BranchController;
use Controller\UserController;

// Home route
Router::get('/', fn() => loadController('home'));

// Ads routes
Router::get('/ads/{id}', fn(int $id) => (new AdController())->show($id));
Router::get('/ads/create', fn() => (new AdController())->create());
Router::post('/ads/create', fn() => (new AdController())->store());


Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));

Router::get('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));


Router::get('/ads/update/{id}', fn(int $id) => (new AdController())->update($id));
Router::patch('/ads/update/{id}', fn(int $id) => (new AdController())->edit($id));

Router::get('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));
Router::delete('/ads/delete/{id}', fn(int $id) => (new AdController())->delete($id));

// Branch routes
Router::get('/branch/list', fn() => (new BranchController())->listBranches());

Router::get('/branch/create', fn() => (new BranchController())->createBranch());
Router::post('/branch/create', fn () => (new BranchController())->storeBranch());

Router::get('/branch/update/{id}', fn(int $id) => (new BranchController())->updateBranch($id));
Router::patch('/branch/update/{id}', fn (int $id) => (new BranchController())->editBranch($id));

Router::delete('/branch/delete/{id}', fn(int $id) => (new BranchController())->deleteBranch($id));
Router::get('/branch/delete/{id}', fn(int $id) => (new BranchController())->deleteBranch($id));

// Statuses routes
Router::get('/status/create', fn() => loadView('dashboard/create-status'));
Router::post('/status/create', fn() => loadController('createStatus'));

// Users routes

Router::get('/user/lists', fn() => (new \Controller\UserController())->listUsers());

Router::get('/user/update/{id}', fn(int $id) => (new UserController())->updateUser($id));
Router::patch('/user/update/{id}', fn (int $id) => (new UserController())->editUser($id));

Router::get('/admin/create', fn () => loadView('auth/createUser'));

Router::delete('/user/delete/{id}', fn(int $id) => (new UserController())->deleteUser($id));
Router::get('/user/delete/{id}', fn(int $id) => (new UserController())->deleteUser($id));

Router::get('/profile/setting', fn() => (new UserController())->profileSetting());
Router::patch('/profile/setting', fn() => (new UserController())->accountSetting());

// Auth routes
Router::get('/user/login', fn() => loadView('auth/login'), 'guest');
Router::post('/user/login', fn() => (new \Controller\AuthController())->login());

Router::get('/logout', fn() => (new \Controller\AuthController())->logout());

Router::get('/admin', fn() => loadView('dashboard/home'), 'auth');
Router::get('/profile', fn() => (new \Controller\UserController())->loadProfile(), 'auth');

Router::get('/register', fn() => loadView('auth/createUser'));
Router::post('/register', fn() => (new \Controller\AuthController())->register());

Router::get('/search', fn() => (new AdController())->search());

Router::errorResponse(404, "Not Found");