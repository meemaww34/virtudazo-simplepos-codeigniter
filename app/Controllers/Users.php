<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'User Accounts',

            'users' => [
                [
                    'username'  => 'admin01',
                    'full_name' => 'Paula Virtudazo',
                    'role'      => 'Administrator',
                ],
                [
                    'username'  => 'cashier01',
                    'full_name' => 'Susan Reyes',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'cashier02',
                    'full_name' => 'Natalie Austria',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'staff01',
                    'full_name' => 'Jake Santos',
                    'role'      => 'Inventory Staff',
                ],
                [
                    'username'  => 'manager01',
                    'full_name' => 'Lorenzo Batumbakal',
                    'role'      => 'Store Manager',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('users/index', $data)
            . view('templates/footer');
    }
}