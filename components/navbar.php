<?php
$navLinks = [
    ['label' => 'Home', 'href' => './'],
    ['label' => 'Guide Map', 'href' => '#guide-map'],
    ['label' => 'Rules', 'href' => '#working-rules'],
    ['label' => 'Quick Start', 'href' => '#quick-start'],
];
?>
<nav class="fixed inset-x-0 top-0 z-50">
    <div class="container pt-4">
        <div class="flex items-center justify-between rounded-[24px] border border-white/10 bg-slate-950/75 px-4 py-3 shadow-[0_18px_60px_rgba(2,6,23,0.35)] backdrop-blur md:px-5">
            <a class="text-sm font-semibold uppercase tracking-[0.26em] text-cyan-300 no-underline md:text-base" href="./">
                <?= htmlspecialchars(APP_NAME, ENT_QUOTES, 'UTF-8') ?>
            </a>

            <button
                class="navbar-toggler rounded-xl border border-cyan-400/30 px-3 py-2 text-cyan-200 md:hidden"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
                aria-controls="navMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse md:!block md:!basis-auto" id="navMenu">
                <ul class="mt-4 flex flex-col gap-2 md:mt-0 md:flex-row md:items-center md:gap-2">
                    <?php foreach ($navLinks as $navLink) : ?>
                        <li>
                            <a
                                class="block rounded-xl px-4 py-2 text-sm font-medium text-slate-300 no-underline transition hover:bg-white/5 hover:text-cyan-200"
                                href="<?= htmlspecialchars($navLink['href'], ENT_QUOTES, 'UTF-8') ?>">
                                <?= htmlspecialchars($navLink['label'], ENT_QUOTES, 'UTF-8') ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</nav>
