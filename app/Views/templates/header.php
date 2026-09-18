<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= esc($title) ?> | SimplePOS</title>

    <link
        rel="stylesheet"
        href="<?= base_url('css/style.css') ?>"
    >
</head>

<body>
    <header class="site-header">
        <div class="container navigation">
            <a href="<?= base_url('/') ?>" class="brand">
                <span class="brand-logo">SP</span>
                <span>SimplePOS</span>
            </a>

            <nav class="nav-links">
                <a href="<?= base_url('/') ?>">Home</a>

                <a href="<?= base_url('about') ?>">
                    About
                </a>

                <a href="<?= base_url('customers') ?>">
                    Customers
                </a>

                <a href="<?= base_url('users') ?>">
                    Users
                </a>
            </nav>
        </div>
    </header>

    <main>