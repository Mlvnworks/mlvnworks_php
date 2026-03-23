<?php
$guideFiles = [
    [
        'title' => 'Start Here',
        'path' => './development-guide/00_START_HERE.md',
        'description' => 'Entry point for the project documentation and reading order.',
    ],
    [
        'title' => 'Setup And Environment',
        'path' => './development-guide/01_SETUP_AND_ENVIRONMENT.md',
        'description' => 'Environment variables, local setup, and development rules.',
    ],
    [
        'title' => 'Structure And Runtime',
        'path' => './development-guide/02_STRUCTURE_AND_RUNTIME.md',
        'description' => 'Bootstrap flow, folder responsibilities, and runtime behavior.',
    ],
    [
        'title' => 'Extension And Examples',
        'path' => './development-guide/03_EXTENSION_AND_EXAMPLES.md',
        'description' => 'Reference patterns for pages, handlers, helpers, and components.',
    ],
    [
        'title' => 'Custom Setting Priority',
        'path' => './development-guide/CUSTOM_SETTING_PRIORITY.md',
        'description' => 'Default engineering principles plus a custom section for extra project rules.',
    ],
];

$workingRules = [
    [
        'step' => '01',
        'title' => 'Configure first',
        'description' => 'Use config.php and .env for app, database, and mail behavior. Keep runtime secrets out of page files.',
    ],
    [
        'step' => '02',
        'title' => 'Place code by responsibility',
        'description' => 'Put shared logic in classes/, request handling in submissions/, page rendering in pages/, and shared UI in components/.',
    ],
    [
        'step' => '03',
        'title' => 'Check project priorities',
        'description' => 'Review CUSTOM_SETTING_PRIORITY.md before expanding the app so new work stays DRY, simple, modular, and minimal.',
    ],
];

$quickStartSteps = [
    'Read development-guide/00_START_HERE.md.',
    'Configure .env only if database or mail features are needed.',
    'Use development-guide/02_STRUCTURE_AND_RUNTIME.md before moving files or adding runtime code.',
    'Use development-guide/03_EXTENSION_AND_EXAMPLES.md before adding pages or request handlers.',
    'Write extra rules in development-guide/CUSTOM_SETTING_PRIORITY.md when the project needs stronger conventions.',
];
?>

<section class="relative overflow-hidden bg-slate-950 text-slate-100">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(34,211,238,0.18),transparent_28%),radial-gradient(circle_at_85%_15%,rgba(56,189,248,0.16),transparent_24%),linear-gradient(180deg,rgba(2,6,23,0.42),rgba(2,6,23,0.97))]"></div>

    <section class="relative flex min-h-screen items-center pt-28 pb-16">
        <div class="container">
            <div class="mx-auto max-w-5xl">
                <span class="inline-flex rounded-full border border-cyan-400/30 bg-cyan-400/10 px-4 py-2 text-[11px] font-semibold uppercase tracking-[0.28em] text-cyan-300">
                    PHVN Development Guide
                </span>
                <h1 class="mt-6 max-w-4xl text-5xl font-semibold leading-[0.95] tracking-tight text-white md:text-7xl">
                    Build from the guide first, then extend the codebase with clear boundaries.
                </h1>
                <p class="mt-6 max-w-3xl text-lg leading-8 text-slate-300 md:text-xl">
                    PHVN is a minimal PHP starter built around a config-first bootstrap, route-like pages, shared
                    components, and a dedicated development guide folder that defines how the project should evolve.
                </p>
                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#guide-map" class="rounded-2xl bg-cyan-400 px-6 py-3 text-sm font-semibold text-slate-950 no-underline shadow-[0_18px_50px_rgba(34,211,238,0.2)] transition hover:-translate-y-0.5 hover:bg-cyan-300">
                        Open Guide Map
                    </a>
                    <a href="#working-rules" class="rounded-2xl border border-cyan-400/35 px-6 py-3 text-sm font-semibold text-cyan-200 no-underline transition hover:border-cyan-300 hover:bg-cyan-400/10">
                        View Working Rules
                    </a>
                </div>

                <div class="mt-12 grid gap-4 md:grid-cols-3">
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-cyan-300">Bootstrap</p>
                        <p class="mt-3 text-sm leading-7 text-slate-300">index.php starts the runtime, config.php owns environment setup, and submission.php loads shared logic.</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-cyan-300">Structure</p>
                        <p class="mt-3 text-sm leading-7 text-slate-300">Pages, components, classes, and submissions are separated so each area keeps one clear responsibility.</p>
                    </div>
                    <div class="rounded-3xl border border-white/10 bg-white/5 p-5 backdrop-blur">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-cyan-300">Priority</p>
                        <p class="mt-3 text-sm leading-7 text-slate-300">The custom priority file defines how to keep the project simple, reusable, modern, and minimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="guide-map" class="relative py-20">
        <div class="container">
            <div class="mx-auto max-w-3xl">
                <span class="text-[11px] font-semibold uppercase tracking-[0.28em] text-cyan-300">Documentation</span>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-white md:text-5xl">Guide map</h2>
                <p class="mt-4 text-base leading-8 text-slate-300">
                    Open these files before changing structure, adding features, or defining stronger project rules.
                </p>
            </div>

            <div class="mt-10 grid gap-5 lg:grid-cols-2">
                <?php foreach ($guideFiles as $guideFile) : ?>
                    <article class="rounded-[28px] border border-white/10 bg-slate-900/80 p-6 shadow-[0_22px_60px_rgba(2,6,23,0.28)] backdrop-blur">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-cyan-300"><?= htmlspecialchars($guideFile['title'], ENT_QUOTES, 'UTF-8') ?></p>
                        <p class="mt-4 text-base leading-8 text-slate-300"><?= htmlspecialchars($guideFile['description'], ENT_QUOTES, 'UTF-8') ?></p>
                        <a class="mt-6 inline-flex rounded-2xl border border-cyan-400/30 px-4 py-3 text-sm font-semibold text-cyan-200 no-underline transition hover:border-cyan-300 hover:bg-cyan-400/10" href="<?= htmlspecialchars($guideFile['path'], ENT_QUOTES, 'UTF-8') ?>">
                            Open <?= htmlspecialchars($guideFile['title'], ENT_QUOTES, 'UTF-8') ?>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="working-rules" class="relative py-20">
        <div class="container">
            <div class="mx-auto max-w-3xl">
                <span class="text-[11px] font-semibold uppercase tracking-[0.28em] text-cyan-300">Working Rules</span>
                <h2 class="mt-4 text-4xl font-semibold tracking-tight text-white md:text-5xl">Core development flow</h2>
                <p class="mt-4 text-base leading-8 text-slate-300">
                    These are the practical rules that the current structure expects you to follow when you add or refactor code.
                </p>
            </div>

            <div class="mt-10 grid gap-5 md:grid-cols-3">
                <?php foreach ($workingRules as $workingRule) : ?>
                    <article class="rounded-[28px] border border-white/10 bg-white/5 p-6 backdrop-blur">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.24em] text-cyan-300"><?= htmlspecialchars($workingRule['step'], ENT_QUOTES, 'UTF-8') ?></p>
                        <h3 class="mt-4 text-2xl font-semibold text-white"><?= htmlspecialchars($workingRule['title'], ENT_QUOTES, 'UTF-8') ?></h3>
                        <p class="mt-4 text-sm leading-7 text-slate-300"><?= htmlspecialchars($workingRule['description'], ENT_QUOTES, 'UTF-8') ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="quick-start" class="relative py-20">
        <div class="container">
            <div class="rounded-[32px] border border-cyan-400/15 bg-slate-900/80 p-8 shadow-[0_24px_70px_rgba(2,6,23,0.3)] backdrop-blur md:p-10">
                <div class="max-w-3xl">
                    <span class="text-[11px] font-semibold uppercase tracking-[0.28em] text-cyan-300">Quick Start</span>
                    <h2 class="mt-4 text-4xl font-semibold tracking-tight text-white md:text-5xl">Suggested order for working on the project</h2>
                    <p class="mt-4 text-base leading-8 text-slate-300">
                        Keep the app lean. Start with the guide, configure only what is needed, and extend the runtime through the existing structure.
                    </p>
                </div>
                <ol class="mt-8 space-y-4 pl-5 text-slate-200">
                    <?php foreach ($quickStartSteps as $quickStartStep) : ?>
                        <li class="pl-2 text-sm leading-7 text-slate-300"><?= htmlspecialchars($quickStartStep, ENT_QUOTES, 'UTF-8') ?></li>
                    <?php endforeach; ?>
                </ol>
            </div>
        </div>
    </section>
</section>
