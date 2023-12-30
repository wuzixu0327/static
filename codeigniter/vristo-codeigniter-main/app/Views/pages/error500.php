<?= $this->extend('components/layout/auth.php') ?>

<?= $this->section('content') ?>

<div class="relative flex min-h-screen items-center justify-center overflow-hidden">
    <div class="px-6 py-16 text-center font-semibold before:container before:absolute before:left-1/2 before:-translate-x-1/2 before:rounded-full before:bg-[linear-gradient(180deg,#4361EE_0%,rgba(67,97,238,0)_50.73%)] before:aspect-square before:opacity-10 md:py-20">
        <div class="relative">
            <img :src="$store.app.theme === 'dark' || $store.app.isDarkMode ? '<?php echo base_url('assets/images/error/500-dark.svg') ?>' : '<?php echo base_url('assets/images/error/500-light.svg') ?>'" alt="500" class="mx-auto -mt-10 w-full max-w-xs object-cover md:-mt-14 md:max-w-xl" />
            <p class="mt-5 text-base dark:text-white">Internal server error!</p>
            <a href="/" class="btn btn-gradient mx-auto !mt-7 w-max border-0 uppercase shadow-none">Home</a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
