<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin.reyes', 'full_name' => 'Railey Reyes', 'role' => 'Administrator'],
            ['username' => 'cashier.rose', 'full_name' => 'Hannah Rose', 'role' => 'Cashier'],
            ['username' => 'cashier.garcia', 'full_name' => 'Miguel Garcia', 'role' => 'Cashier'],
            ['username' => 'inventory.frayna', 'full_name' => 'Miguel Frayna', 'role' => 'Inventory Staff'],
            ['username' => 'manager.raymundo', 'full_name' => 'Miguel Raymundo', 'role' => 'Store Manager'],
        ];

        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}
