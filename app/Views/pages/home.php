<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<main id="home">
    <div class="container mx-auto">
        <!-- Jumbotron start  -->
        <section id="jumbotron">
            <div class="pt-16 pb-4 md:pt-24 md:pb-6">
                <div class="relative h-56 md:h-96 rounded-none md:rounded-xl overflow-hidden">
                    <img src="<?= base_url('img/event-1.jpg'); ?>" class="object-cover w-full h-full" alt="Header image">
                    <div class="absolute inset-0 bg-neutral h-full bg-opacity-60 backdrop-filter backdrop-blur-sm flex items-center p-4">
                        <div class="w-full px-4 flex flex-col items-center justify-center text-center">
                            <h1 class="text-xl md:text-3xl font-bold text-white">Beri Ruang Untuk Kreativitasmu</h1>
                            <p class="text-sm md:text-xl text-white opacity-80">Bergabung dan buat event sendiri untuk mengembangkan kreativitasmu</p>
                            <div class="flex items-center justify-center space-x-3 mt-4">
                                <a href="<?= base_url('explore'); ?>" class="btn btn-xs md:btn-sm btn-primary">
                                    <i class="fa-solid fa-compass me-1"></i>Jelajahi
                                </a>
                                <a href="<?= base_url('create-event'); ?>" class="btn btn-xs md:btn-sm">
                                    <i class="fa-solid fa-plus me-1"></i>Buat Event
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Jumbotron end -->

        <!-- Categories start -->
        <section id="categories">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="grid grid-cols-4 lg:grid-cols-8 gap-4">
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-music text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Musik</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-palette text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Seni & Visual</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-basketball text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Olahraga</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-graduation-cap text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Pendidikan</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-first-aid text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Kesehatan</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-coins text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Bisnis</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-microchip text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Teknologi</p>
                    </div>
                    <div class="flex flex-col items-center space-y-3 md:space-y-4">
                        <div class="btn btn-md md:btn-lg btn-outline btn-circle p-4">
                            <i class="fa-solid fa-ellipsis-h text-lg md:text-2xl"></i>
                        </div>
                        <p class="text-xs md:text-sm font-medium text-center">Lainnya</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Trending Events start -->
        <section id="trending-events">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="flex items-center justify-between mb-4 md:mb-6">
                    <h2 class="text-xl md:text-2xl font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-arrow-trend-up"></i>
                        <span>Sedang Trending</span>
                    </h2>
                    <a href="<?= base_url('explore'); ?>" class="btn btn-ghost btn-xs md:btn-sm">
                        <span>Lihat lainnya</span>
                        <i class="fa-solid fa-xs fa-arrow-right ms-0.5"></i>
                    </a>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <?php $i = 0; foreach ($events as $event) : ?>
                        <?php if ($i++ >= 4) break; ?>
                        <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer shadow hover:shadow-lg ease-in-out duration-300">
                            <figure class="h-48 md:h-32 relative">
                                <img src="<?= $event['image']; ?>" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
                                <a href="#" class="absolute top-0 right-0">
                                    <div class="btn btn-xs md:btn-sm glass btn-circle p-1 m-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i class="fa-solid fa-share-nodes text-xs"></i>
                                    </div>
                                </a>
                            </figure>
                            <div class="card-body px-4 md:px-0">
                                <h2 title="<?= $event['title']; ?>" class="card-title text-lg line-clamp-2"><?= $event['title']; ?></h2>
                                <div class="flex flex-wrap items-center gap-2 mb-2">
                                    <div class="badge badge-sm flex items-center space-x-1.5">
                                        <i class="fa-solid fa-xs fa-calendar"></i>
                                        <p class="text-xs"><?= date('d M Y', strtotime($event['date'])); ?></p>
                                    </div>
                                    <div class="badge badge-sm flex items-center space-x-1.5">
                                        <i class="fa-solid fa-xs fa-wallet"></i>
                                        <p class="text-xs"><?= $event['price'] == 0 ? 'Gratis' : $event['price']; ?></p>
                                    </div>
                                    <div class="badge badge-sm flex items-center space-x-1.5">
                                        <i class="fa-solid fa-xs fa-location-dot"></i>
                                        <p class="text-xs"><?= $event['location']; ?></p>
                                    </div>
                                    <div class="badge badge-sm flex items-center space-x-1.5">
                                        <i class="fa-solid fa-xs fa-user-group"></i>
                                        <p class="text-xs"><?= $event['participants'] . '/' . $event['capacity']; ?></p>
                                    </div>
                                    <div class="badge badge-sm flex items-center space-x-1.5">
                                        <i class="fa-solid fa-xs fa-briefcase"></i>
                                        <p class="text-xs line-clamp-1"><?= $event['organizer']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Trending Events end -->

        <!-- Featured Organizer start -->
        <section id="featured-organizer">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="flex items-center justify-between mb-4 md:mb-6">
                    <h2 class="text-xl md:text-2xl font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-award"></i>
                        <span>Penyelenggara Unggulan</span>
                    </h2>
                    <a href="<?= base_url('explore'); ?>" class="btn btn-ghost btn-xs md:btn-sm">
                        <span>Lihat lainnya</span>
                        <i class="fa-solid fa-xs fa-arrow-right ms-0.5"></i>
                    </a>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                    <?php foreach ($organizers as $organizer) : ?>
                        <div class="card card-compact bg-white rounded-lg shadow hover:shadow-lg ease-in-out duration-300">
                            <div class="card-body">
                                <figure class="w-20 h-20 md:w-24 md:h-24 border rounded-full p-0.5 mx-auto">
                                    <img class="w-full h-full object-cover rounded-full" src="<?= $organizer['avatar']; ?>" alt="<?= $organizer['name']; ?>">
                                </figure>
                                <div class="flex flex-col items-center space-y-2">
                                    <h3 title="<?= $organizer['name']; ?>" class="text-base line-clamp-2 font-bold text-center mt-4">
                                        <?= $organizer['name']; ?>
                                    </h3>
                                    <p class="text-xs text-neutral/60 line-clamp-1 text-center mt-1">
                                        <?= $organizer['followers'] . ' pengikut'; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="card-actions p-3">
                                <button class="btn btn-block btn-xs md:btn-sm btn-primary rounded-md">
                                    <i class="fa-regular fa-plus me-1"></i>Ikuti
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Featured Organizer end -->

        <!-- Top Destination start -->
        <section id="top-destinations">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="flex items-center justify-between mb-4 md:mb-6">
                    <h2 class="text-xl md:text-2xl font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-map-location"></i>
                        <span>Destinasi Teratas</span>
                    </h2>
                    <p class="text-xs md:text-sm font-medium">Geser<i class="fa-solid fa-xs fa-arrow-right ms-2"></i></p>
                </div>
                <div class="carousel h-60 mb-4 md:mb-6 space-x-4">
                    <?php foreach ($destinations as $destination) : ?>
                        <div class="carousel-item max-w-52 w-full relative rounded-lg hover:scale-95 transition-all">
                            <img src="<?= $destination['image']; ?>" class="object-cover w-full h-full rounded-lg" alt="<?= $destination['name']; ?>">
                            <div class="absolute bottom-0 left-0 w-full">
                                <div class="bg-gradient-to-t from-neutral to-transparent px-4 py-4 rounded-b-lg">
                                    <h1 class="text-base md:text-lg font-semibold text-white"><?= $destination['name']; ?></h1>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Top Destination end -->

        <!-- Trending Searches start -->
        <section id="trending-searches">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="flex items-center mb-4 md:mb-6">
                    <h2 class="text-xl md:text-2xl font-bold flex items-center space-x-3">
                        <i class="fa-solid fa-fire"></i>
                        <span>Pencarian Populer</span>
                    </h2>
                </div>
                <div class="flex flex-wrap items-center gap-4">
                    <?php foreach ($searchs as $search) : ?>
                        <a href="#" class="btn btn-outline btn-xs md:btn-sm rounded-full">
                            <i class="fa-solid fa-magnifying-glass me-1"></i><?= $search['search']; ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Trending Searches end -->
    </div>
</main>

<!-- Logout modal -->
<?= $this->include('components/logout.php'); ?>

<?= $this->endSection(); ?>