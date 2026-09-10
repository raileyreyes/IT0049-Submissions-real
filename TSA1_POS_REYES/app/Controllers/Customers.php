<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Angela Cruz', 'email' => 'angela.cruz@example.com', 'phone' => '0917 123 4501'],
            ['full_name' => 'Miguel Santos', 'email' => 'miguel.santos@example.com', 'phone' => '0918 234 5602'],
            ['full_name' => 'Patricia Lim', 'email' => 'patricia.lim@example.com', 'phone' => '0919 345 6703'],
            ['full_name' => 'Daniel Reyes', 'email' => 'daniel.reyes@example.com', 'phone' => '0920 456 7804'],
            ['full_name' => 'Sofia Mendoza', 'email' => 'sofia.mendoza@example.com', 'phone' => '0921 567 8905'],
        ];

        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}
