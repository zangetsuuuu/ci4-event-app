<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<main id="explore">
    <div class="container mx-auto">
        <!-- Search & Filters start -->
        <section id="search-&-filters">
            <div class="pt-24 pb-2 px-4 md:px-0">
                <form action="" class="">
                    <label class="input input-bordered flex items-center w-full">
                        <input type="text" class="grow" placeholder="Cari event, penyelenggara, kategori, lokasi..." />
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                            <path fill-rule="evenodd" d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z" clip-rule="evenodd" />
                        </svg>
                    </label>
                </form>
            </div>
        </section>
        <!-- Search & Filters end -->

        <!-- Event List start -->
        <section id="event-list">
            <div class="py-4 md:py-8 px-4 md:px-0">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold">Daftar Event</h2>
                    <div class="dropdown dropdown-end">
                        <button tabindex="0" role="button" class="btn btn-sm btn-ghost btn-circle border">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                            </svg>
                        </button>
                        <div tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-lg w-52">
                            <h1 class="menu-title">Urutkan berdasarkan</h1>
                            <form action="">
                                <label class="label">
                                    <select name="sort" class="select select-bordered w-full">
                                        <option value="" selected>Terbaru</option>
                                        <option value="">Terpopuler</option>
                                        <option value="">Termurah</option>
                                        <option value="">Termahal</option>
                                    </select>
                                </label>
                            </form>
                        </div>
                    </div>
                </div>
                <div role="tablist" class="tabs tabs-bordered mb-6">
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Semua" checked />

                    <!-- All Tab -->
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 gap-y-4 md:gap-y-8">
                            <?php foreach ($events as $event) : ?>
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
                                                <i class="fa-solid fa-xs fa-<?= $event['location'] == 'Online' ? 'video' : 'location-dot'; ?>"></i>
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

                    <!-- Recommended Tab -->
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Rekomendasi" />
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php $i = 1; foreach ($events as $event) : ?>
                                <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer hover:shadow-lg ease-in-out duration-300">
                                    <figure class="h-48 md:h-32 relative">
                                        <img src="https://picsum.photos/id/23<?= $i++; ?>/200/300" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
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

                    <!-- Trending Tab -->
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Trending" />
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php $i = 1; foreach ($events as $event) : ?>
                                <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer hover:shadow-lg ease-in-out duration-300">
                                    <figure class="h-48 md:h-32 relative">
                                        <img src="https://picsum.photos/id/14<?= $i++; ?>/200/300" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
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

                    <!-- Online Tab -->
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Online" />
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php $i = 1; foreach ($events as $event) : ?>
                                <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer hover:shadow-lg ease-in-out duration-300">
                                    <figure class="h-48 md:h-32 relative">
                                        <img src="https://picsum.photos/id/26<?= $i++; ?>/200/300" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
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

                    <!-- Free Tab -->
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Gratis" />
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php $i = 1; foreach ($events as $event) : ?>
                                <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer hover:shadow-lg ease-in-out duration-300">
                                    <figure class="h-48 md:h-32 relative">
                                        <img src="https://picsum.photos/id/33<?= $i++; ?>/200/300" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
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

                    <!-- Nearest Tab -->
                    <input type="radio" name="event-tabs" role="tab" class="tab" aria-label="Terdekat" />
                    <div role="tabpanel" class="tab-content pt-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
                            <?php $i = 1; foreach ($events as $event) : ?>
                                <div class="card card-compact w-full bg-white rounded-lg group cursor-pointer hover:shadow-lg ease-in-out duration-300">
                                    <figure class="h-48 md:h-32 relative">
                                        <img src="https://picsum.photos/id/43<?= $i++; ?>/200/300" class="object-cover w-full h-full" alt="<?= $event['title']; ?>">
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
                </div>
                <div class="flex items-center justify-center">
                    <div class="join shadow-lg">
                        <button class="join-item btn btn-sm btn-primary">1</button>
                        <button class="join-item btn btn-sm">2</button>
                        <button class="join-item btn btn-sm">3</button>
                        <button class="join-item btn btn-sm">4</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event List end -->
    </div>
</main>
<?= $this->endSection(); ?>