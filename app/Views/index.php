<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<main id="welcome">
    <section class="hero min-h-screen overflow-hidden">
        <div class="hero-content text-center">
            <div class="absolute inset-x-0 mx-auto container px-4 md:px-0 top-8">
                <div class="flex items-center justify-center space-x-2">
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
            </div>
            <div class="max-w-md md:max-w-2xl">
                <div class="space-y-5 mb-12">
                    <h1 class="text-4xl md:text-5xl font-bold text-balanced">Temukan dan Bergabung dalam Event yang Menarik!</h1>
                    <p class="text-sm md:text-base text-balanced">Jelajahi berbagai pengalaman yang sesuai dengan minatmu dan temukan keseruan bersama teman-teman. Dari konser, seminar, hingga eksposisi seni, ada banyak pilihan untuk menarik dirimu.</p>
                    <div class="flex flex-wrap md:flex-nowrap items-center justify-center space-x-0 space-y-3 md:space-x-3 md:space-y-0">
                        <a href="/signup" class="btn btn-primary w-full md:w-auto">
                            <i class="fa-solid fa-user-plus"></i>
                            <span class="ms-1">Daftar</span>
                        </a>
                        <a href="/login" class="btn btn-outline w-full md:w-auto">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            <span class="ms-1">Masuk</span>
                        </a>
                    </div>
                </div>
                <div class="w-full h-60 hidden md:block">
                    <img src="https://plus.unsplash.com/premium_photo-1663051210654-0c8a835dad1f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="object-cover rounded-t-lg" alt="">
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection(); ?>