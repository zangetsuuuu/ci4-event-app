<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="min-h-screen flex items-center justify-center">
    <div class="max-w-lg w-full p-6 md:p-8 rounded-none md:rounded-md border-0 md:border shadow-none md:shadow-lg bg-base-100">
        <div class="flex-1 mb-6">
            <span class="flex items-center justify-center border rounded-md w-12 h-12 p-3 mb-4">
                <i class="fa-solid fa-arrow-right-to-bracket text-base md:text-lg"></i>
            </span>
            <h2 class="text-2xl font-semibold tracking-wide mb-1.5">Masuk</h2>
            <p class="text-sm tracking-wide opacity-70">Silakan isi formulir di bawah ini.</p>
        </div>
        <form action="#" method="POST" class="space-y-6">
            <div>
                <label class="input input-bordered flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                    </svg>
                    <input type="text" class="grow" placeholder="Username" />
                </label>
            </div>
            <div>
                <label class="input input-bordered flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4 opacity-70">
                        <path fill-rule="evenodd" d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z" clip-rule="evenodd" />
                    </svg>
                    <input type="password" class="grow" placeholder="Password" />
                </label>
                <div class="flex items-center justify-between mt-2">
                    <div class="form-control">
                        <label class="label cursor-pointer">
                            <input type="checkbox" class="checkbox checkbox-xs me-2" />
                            <span class="label-text opacity-70 hover:opacity-100 transition-opacity duration-300">Ingat saya</span>
                        </label>
                    </div>
                    <a href="#" class="text-sm opacity-70 hover:opacity-100 transition-opacity duration-300">Lupa password?</a>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary w-full uppercase">Masuk</button>
            </div>
            <div class="text-sm text-center">
                <span class="opacity-70">Belum punya akun?</span>
                <span>
                    <a href="<?= base_url('signup') ?>" class="link opacity-70 hover:opacity-100 transition-opacity duration-300">Daftar</a>
                </span>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>