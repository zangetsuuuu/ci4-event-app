<!DOCTYPE html>
<html lang="en" data-theme="light" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('css/output.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header start -->
    <?php if ($title != 'Welcome to Eventiqo') : ?>
        <header class="fixed top-0 left-0 w-full bg-transparent z-50">
            <div id="navbar" class="container mx-auto navbar border-b border-neutral/20">
                <div class="navbar-start">
                    <div class="dropdown">
                        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </div>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                            <li><a class="py-2">Beranda</a></li>
                            <li><a class="py-2">Jelajahi</a></li>
                            <li><a class="py-2">Kategori</a></li>
                            <li><a class="py-2">Event Saya</a></li>
                        </ul>
                    </div>
                    <a href="<?= base_url('home'); ?>" class="btn btn-ghost text-xl">
                        <div class="flex items-center space-x-2">
                            <svg class="w-5 h-5 mt-0.5" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_26)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0351 0.377655C8.38405 0.377655 6.80071 1.03351 5.63328 2.20094L0 7.83418V10.4127C0 12.2345 0.782517 13.8734 2.02976 15.0118C0.782517 16.1502 0 17.7891 0 19.6109V22.1894L5.63328 27.8227C6.80071 28.9901 8.38405 29.6459 10.0351 29.6459C11.8568 29.6459 13.4958 28.8635 14.6341 27.6162C15.7725 28.8635 17.4115 29.6459 19.2332 29.6459C20.8842 29.6459 22.4676 28.9901 23.635 27.8227L29.2683 22.1894V19.6109C29.2683 17.7891 28.4858 16.1502 27.2385 15.0118C28.4858 13.8734 29.2683 12.2345 29.2683 10.4127V7.83418L23.635 2.20094C22.4676 1.03351 20.8842 0.377655 19.2332 0.377655C17.4115 0.377655 15.7725 1.16017 14.6341 2.40742C13.4958 1.16017 11.8568 0.377655 10.0351 0.377655ZM18.8479 15.0118C18.7777 14.9478 18.7089 14.882 18.6414 14.8145L14.6341 10.8073L10.6269 14.8145C10.5594 14.882 10.4906 14.9478 10.4204 15.0118C10.4906 15.0758 10.5594 15.1416 10.6269 15.2091L14.6341 19.2163L18.6414 15.2091C18.7089 15.1416 18.7777 15.0758 18.8479 15.0118ZM16.2601 22.1894V23.4209C16.2601 25.0628 17.5913 26.3939 19.2332 26.3939C20.0217 26.3939 20.7779 26.0807 21.3355 25.5231L26.0163 20.8423V19.6109C26.0163 17.9689 24.6852 16.6378 23.0432 16.6378C22.2547 16.6378 21.4985 16.951 20.941 17.5086L16.2601 22.1894ZM13.0081 22.1894L8.32734 17.5086C7.76978 16.951 7.01359 16.6378 6.22509 16.6378C4.58311 16.6378 3.25203 17.9689 3.25203 19.6109V20.8423L7.93281 25.5231C8.49037 26.0807 9.24658 26.3939 10.0351 26.3939C11.677 26.3939 13.0081 25.0628 13.0081 23.4209V22.1894ZM13.0081 6.60274V7.83418L8.32734 12.515C7.76978 13.0725 7.01359 13.3858 6.22509 13.3858C4.58311 13.3858 3.25203 12.0547 3.25203 10.4127V9.18126L7.93281 4.50047C8.49037 3.94292 9.24658 3.62969 10.0351 3.62969C11.677 3.62969 13.0081 4.96077 13.0081 6.60274ZM20.941 12.515L16.2601 7.83418V6.60274C16.2601 4.96077 17.5913 3.62969 19.2332 3.62969C20.0217 3.62969 20.7779 3.94292 21.3355 4.50047L26.0163 9.18126V10.4127C26.0163 12.0547 24.6852 13.3858 23.0432 13.3858C22.2547 13.3858 21.4985 13.0725 20.941 12.515Z" fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_26">
                                        <rect width="29.2683" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span class="text-xl font-semibold">Eventiqo</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-center hidden lg:flex">
                    <nav>
                        <div class="flex items-center justify-center space-x-8">
                            <a href="<?= base_url('home'); ?>" class="nav-link <?= ($title == 'Home | Eventiqo' ? 'active' : ''); ?>">Beranda</a>
                            <a href="<?= base_url('explore'); ?>" class="nav-link <?= ($title == 'Explore | Eventiqo' ? 'active' : ''); ?>">Jelajahi</a>
                            <a href="<?= base_url('category'); ?>" class="nav-link <?= ($title == 'category' ? 'active' : ''); ?>">Kategori</a>
                            <a href="<?= base_url('my-events'); ?>" class="nav-link <?= ($title == 'my-events' ? 'active' : ''); ?>">Kelola Event</a>
                        </div>
                    </nav>
                </div>
                <div class="navbar-end space-x-2">
                    <div class="dropdown dropdown-end">
                        <button tabindex="0" role="button" class="btn btn-sm btn-ghost btn-circle border">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </button>
                        <div tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-lg w-52">
                            <form action="<?= base_url('search'); ?>" method="get" class="flex items-center space-x-2">
                                <input type="text" name="q" class="input input-sm input-bordered w-full rounded-md" placeholder="Cari event..." />
                                <button type="submit" class="btn btn-sm btn-primary rounded-md">Cari</button>
                            </form>
                        </div>
                    </div>
                    <div class="dropdown dropdown-end">
                        <button tabindex="0" role="button" class="btn btn-sm btn-ghost btn-circle border">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-lg w-52 divide-y">
                            <li class="menu-title">Notification</li>
                            <li class="py-2"><a>Undangan acara "FotoFest 2022" diterima</a></li>
                            <li class="py-2"><a>Konfirmasi pembayaran tiket acara "Musik Festival" diterima</a></li>
                            <li class="py-2"><a>Pengingat acara "Festival Lagu Kampung" besok</a></li>
                        </ul>
                    </div>
                    <div class="dropdown dropdown-end">
                        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <img alt="Tailwind CSS Navbar component" src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                            </div>
                        </div>
                        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-lg w-52">
                            <li><a class="py-2">Profile</a></li>
                            <li><a class="py-2">Settings</a></li>
                            <li><a class="py-2" onclick="logoutModal.showModal()">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    <?php endif; ?>
    <!-- Header end -->