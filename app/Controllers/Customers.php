<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Customer Accounts',

            'customers' => [
                [
                    'full_name' => 'Paula Virtudazo',
                    'email'     => 'paulavirtudazo06@gmail.com',
                    'phone'     => '0917 123 4567',
                ],
                [
                    'full_name' => 'Charlize Ornedo',
                    'email'     => 'macharlize@gmail.com',
                    'phone'     => '0918 234 5678',
                ],
                [
                    'full_name' => 'Charles Joaquin',
                    'email'     => 'charles.joaquin@gmail.com',
                    'phone'     => '0919 345 6789',
                ],
                [
                    'full_name' => 'Naia Ferrer',
                    'email'     => 'naiamaya@gmail.com',
                    'phone'     => '0920 456 7890',
                ],
                [
                    'full_name' => 'Freya Zamora',
                    'email'     => 'freyazam1990@gmail.com',
                    'phone'     => '0921 567 8901',
                ],
            ],
        ];

        return view('templates/header', $data)
            . view('customers/index', $data)
            . view('templates/footer');
    }
}