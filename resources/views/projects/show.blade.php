<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $project['title'] }} — {{ $project['description'] }}">

    <title>{{ $project['title'] }} — Andhika Pratama</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }

        /* =========================================
           REVEAL
        ========================================= */

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition:
                opacity .8s ease,
                transform .8s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        /* =========================================
           HERO GLOW
        ========================================= */

        .hero-glow {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 999px;
            background: rgba(59, 130, 246, .08);
            filter: blur(130px);
            pointer-events: none;
        }

        /* =========================================
           IMAGE
        ========================================= */

        .project-cover {
            transition:
                transform .7s cubic-bezier(.22, 1, .36, 1),
                filter .5s ease;
        }

        .project-cover:hover {
            transform: scale(1.02);
        }

        /* =========================================
           GLASS CARD
        ========================================= */

        .glass-card {
            background: rgba(255, 255, 255, .025);
            border: 1px solid rgba(255, 255, 255, .08);
            transition:
                border-color .3s ease,
                transform .3s ease,
                background .3s ease;
        }

        .glass-card:hover {
            border-color: rgba(255, 255, 255, .15);
            background: rgba(255, 255, 255, .04);
        }

        /* =========================================
           TECH BADGE
        ========================================= */

        .tech-badge {
            transition:
                transform .25s ease,
                border-color .25s ease,
                background .25s ease;
        }

        .tech-badge:hover {
            transform: translateY(-2px);
            border-color: rgba(96, 165, 250, .35);
            background: rgba(96, 165, 250, .08);
        }

        /* =========================================
           LIKE BUTTON
        ========================================= */

        .like-button {
            transition:
                transform .25s ease,
                border-color .25s ease,
                background .25s ease;
        }

        .like-button:hover {
            transform: translateY(-2px);
        }

        .like-button.liked {
            border-color: rgba(244, 63, 94, .4);
            background: rgba(244, 63, 94, .08);
        }

        .like-button.liked svg {
            fill: currentColor;
        }

        /* =========================================
           SCREENSHOT
        ========================================= */

        .screenshot-card {
            overflow: hidden;
        }

        .screenshot-card img {
            transition: transform .5s ease;
        }

        .screenshot-card:hover img {
            transform: scale(1.035);
        }

        /* =========================================
           BACK BUTTON
        ========================================= */

        .back-button {
            transition:
                transform .25s ease,
                color .25s ease;
        }

        .back-button:hover {
            transform: translateX(-4px);
        }

        /* =========================================
           REDUCED MOTION
        ========================================= */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>


<body class="bg-[#08090D] text-white antialiased">


    <!-- =========================================
         NAVBAR
    ========================================= -->

    <header class="fixed left-0 right-0 top-0 z-50 border-b border-white/5 bg-[#08090D]/75 backdrop-blur-xl">

        <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">

            <a href="/" class="text-xl font-bold tracking-tight">

                Andhika<span class="text-blue-500">.</span>

            </a>


            <a href="/projects" class="text-sm text-gray-400 transition hover:text-white">

                All Projects

            </a>

        </nav>

    </header>



    <main>


        <!-- =========================================
             HERO
        ========================================= -->

        <section class="relative overflow-hidden px-6 pb-20 pt-36">

            <div class="hero-glow -left-32 top-20"></div>

            <div class="hero-glow -right-32 top-40"></div>


            <div class="relative mx-auto max-w-6xl">


                <!-- Back -->

                <div class="reveal">

                    <a href="/projects"
                        class="back-button inline-flex items-center gap-2 text-sm text-gray-500 hover:text-white">

                        <span>
                            ←
                        </span>

                        Back to Projects

                    </a>

                </div>



                <!-- Category -->

                <div class="reveal mt-12">

                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">


                        {{ $project['category'] }}

                    </p>

                </div>



                <!-- Title -->

                <div class="reveal mt-4 max-w-4xl">

                    <h1 class="text-4xl font-bold leading-tight tracking-tight sm:text-5xl lg:text-7xl">

                        {{ $project['title'] }}

                    </h1>

                </div>



                <!-- Description -->

                <div class="reveal mt-6 max-w-3xl">

                    <p class="text-lg leading-8 text-gray-400">

                        {{ $project['description'] }}

                    </p>

                </div>



                <!-- Meta -->

                <div class="reveal mt-8 flex flex-wrap items-center gap-3">


                    <!-- Status -->

                    <span
                        class="inline-flex items-center gap-2 rounded-full border border-green-500/20 bg-green-500/10 px-4 py-2 text-sm text-green-300">

                        <span class="h-2 w-2 rounded-full bg-green-400"></span>

                        {{ $project['status'] }}

                    </span>



                    @if ($project['year'])
                        <span
                            class="rounded-full border border-white/10 bg-white/[0.03] px-4 py-2 text-sm text-gray-400">

                            {{ $project['year'] }}

                        </span>
                    @endif



                    <div class="flex flex-wrap gap-2">
                        @foreach ($project['role'] as $role)
                            <span class="rounded-full border border-white/10 px-3 py-2 text-sm text-gray-300">
                                {{ $role }}
                            </span>
                        @endforeach
                    </div>

                </div>



                <!-- Actions -->

                <div class="reveal mt-8 flex flex-wrap gap-3">


                    @if ($project['demo'])
                        <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center rounded-full bg-white px-6 py-3 text-sm font-medium text-black transition hover:-translate-y-0.5 hover:bg-gray-200">

                            Live Demo

                            <span class="ml-2">
                                ↗
                            </span>

                        </a>
                    @endif



                    @if ($project['github'])
                        <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center rounded-full border border-white/10 px-6 py-3 text-sm font-medium text-white transition hover:-translate-y-0.5 hover:border-white/30 hover:bg-white/5">

                            GitHub

                            <span class="ml-2">
                                ↗
                            </span>

                        </a>
                    @endif

                </div>

            </div>

        </section>



        <!-- =========================================
             COVER IMAGE
        ========================================= -->

        <section class="px-6 pb-24">

            <div class="mx-auto max-w-6xl reveal">

                <div class="overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03] shadow-2xl">

                    @if ($project['image'])
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}"
                            class="project-cover aspect-video w-full object-cover">
                    @else
                        <div
                            class="flex aspect-video items-center justify-center bg-gradient-to-br from-blue-950 via-[#111217] to-[#08090D]">

                            <div class="text-center">

                                <p class="text-5xl font-bold text-white/10 sm:text-7xl">

                                    {{ $project->title }}

                                </p>

                                <p class="mt-3 text-sm text-white/30">

                                    Project Preview

                                </p>

                            </div>

                        </div>
                    @endif

                </div>

            </div>

        </section>



        <!-- =========================================
             OVERVIEW + INFORMATION
        ========================================= -->

        <section class="border-t border-white/5 px-6 py-24">

            <div class="mx-auto grid max-w-6xl gap-16 lg:grid-cols-[1fr_320px]">


                <!-- Overview -->

                <div class="reveal">

                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                        Overview

                    </p>


                    <h2 class="mt-4 text-3xl font-bold sm:text-4xl">

                        About this project

                    </h2>


                    <div class="mt-6 max-w-3xl text-base leading-8 text-gray-400">

                        {!! nl2br(e($project['overview'])) !!}

                    </div>

                </div>



                <!-- Project Information -->

                <div class="reveal">

                    <div class="glass-card rounded-2xl p-6">

                        <p class="text-sm font-medium text-gray-300">

                            Project Information

                        </p>


                        <div class="mt-6 space-y-5">


                            <div>

                                <p class="text-xs uppercase tracking-wider text-gray-600">
                                    Role
                                </p>

                                <p class="mt-1 text-sm text-gray-300">
                                    {{ $project->role ?? '—' }}
                                </p>

                            </div>


                            <div>

                                <p class="text-xs uppercase tracking-wider text-gray-600">
                                    Category
                                </p>

                                <p class="mt-1 text-sm text-gray-300">
                                    {{ $project['category'] }}
                                </p>

                            </div>


                            <div>

                                <p class="text-xs uppercase tracking-wider text-gray-600">
                                    Status
                                </p>

                                <p class="mt-1 text-sm text-gray-300">
                                    {{ $project['status'] }}
                                </p>

                            </div>


                            <div>

                                <p class="text-xs uppercase tracking-wider text-gray-600">
                                    Year
                                </p>

                                <p class="mt-1 text-sm text-gray-300">
                                    {{ $project->year ?? '—' }}
                                </p>

                            </div>


                            <div>

                                <p class="text-xs uppercase tracking-wider text-gray-600">
                                    Likes
                                </p>

                                <p id="like-count" class="mt-1 text-sm text-gray-300">

                                    {{ $project['likes'] }}

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================
             PROBLEM & SOLUTION
        ========================================= -->

        @if ($project['problem'] || $project->solution)

            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">

                    <div class="grid gap-6 md:grid-cols-2">


                        @if ($project['problem'])
                            <div class="glass-card reveal rounded-3xl p-8">

                                <div class="flex items-center gap-3">

                                    <span
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-red-500/10 text-red-400">

                                        !

                                    </span>

                                    <h2 class="text-2xl font-semibold">

                                        The Problem

                                    </h2>

                                </div>


                                <p class="mt-6 leading-8 text-gray-400">

                                    {!! nl2br(e($project['problem'])) !!}

                                </p>

                            </div>
                        @endif



                        @if ($project['solution'])
                            <div class="glass-card reveal rounded-3xl p-8">

                                <div class="flex items-center gap-3">

                                    <span
                                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                        ✓

                                    </span>

                                    <h2 class="text-2xl font-semibold">

                                        The Solution

                                    </h2>

                                </div>


                                <p class="mt-6 leading-8 text-gray-400">

                                    {!! nl2br(e($project['solution'])) !!}

                                </p>

                            </div>
                        @endif


                    </div>

                </div>

            </section>

        @endif



        <!-- =========================================
             FEATURES
        ========================================= -->

        @if ($project['features'])

            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">


                    <div class="reveal max-w-2xl">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                            Capabilities

                        </p>


                        <h2 class="mt-4 text-3xl font-bold sm:text-4xl">

                            Key Features

                        </h2>

                    </div>



                    <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                        @foreach ($project['features'] as $index => $feature)
                            <div class="glass-card reveal rounded-2xl p-6">

                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/10 text-sm font-semibold text-blue-400">

                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                </div>


                                <h3 class="mt-5 text-lg font-semibold">

                                    {{ is_array($feature) ? $feature['title'] : $feature }}

                                </h3>


                                @if (is_array($feature) && isset($feature['description']))
                                    <p class="mt-2 text-sm leading-6 text-gray-500">

                                        {{ $feature['description'] }}

                                    </p>
                                @endif

                            </div>
                        @endforeach

                    </div>

                </div>

            </section>

        @endif



        <!-- =========================================
             TECH STACK
        ========================================= -->

        @if ($project['technologies'])

            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">

                    <div class="reveal">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                            Technologies

                        </p>


                        <h2 class="mt-4 text-3xl font-bold sm:text-4xl">

                            Tech Stack

                        </h2>

                    </div>


                    <div class="reveal mt-10 flex flex-wrap gap-3">

                        @foreach ($project['technologies'] as $tech)
                            <span
                                class="tech-badge rounded-full border border-white/10 bg-white/[0.03] px-5 py-2.5 text-sm text-gray-300">

                                {{ $tech }}

                            </span>
                        @endforeach

                    </div>

                </div>

            </section>

        @endif



        <!-- =========================================
             SCREENSHOTS
        ========================================= -->

        @if ($project['screenshots'])

            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">


                    <div class="reveal">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                            Visuals

                        </p>


                        <h2 class="mt-4 text-3xl font-bold sm:text-4xl">

                            Project Screenshots

                        </h2>

                    </div>



                    <div class="mt-12 grid gap-6 md:grid-cols-2">

                        @foreach ($project['screenshots'] as $screenshot)
                            <div
                                class="screenshot-card reveal overflow-hidden rounded-2xl border border-white/10 bg-white/[0.03]">

                                <img src="{{ asset($screenshot) }}" alt="{{ $project['title'] }} screenshot"
                                    class="w-full object-cover">

                            </div>
                        @endforeach

                    </div>

                </div>

            </section>

        @endif



        <!-- =========================================
             MY ROLE
        ========================================= -->

        @if (!empty($project['role']))
            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">

                    <div class="glass-card reveal rounded-3xl p-8 sm:p-10">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                            My Contribution
                        </p>

                        <h2 class="mt-4 text-3xl font-bold sm:text-4xl">
                            My Role
                        </h2>

                        <div class="mt-6 flex flex-wrap gap-3">

                            @foreach ($project['role'] as $role)
                                <span
                                    class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-gray-300">
                                    {{ $role }}
                                </span>
                            @endforeach

                        </div>

                        <p class="mt-6 max-w-3xl leading-8 text-gray-500">
                            Responsible for designing, developing,
                            testing, and improving the project while
                            focusing on functionality, usability,
                            and overall system quality.
                        </p>

                    </div>

                </div>

            </section>
        @endif



        <!-- =========================================
             CHALLENGES
        ========================================= -->

        @if (!empty($project['challenges']))

            <section class="border-t border-white/5 px-6 py-24">

                <div class="mx-auto max-w-6xl">

                    <div class="reveal max-w-2xl">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                            Development Process

                        </p>


                        <h2 class="mt-4 text-3xl font-bold sm:text-4xl">

                            Challenges & Solutions

                        </h2>

                    </div>



                    <div class="mt-12 space-y-4">

                        @foreach ($project['challenges'] as $index => $challenge)
                            <div class="glass-card reveal rounded-2xl p-6">

                                <div class="flex gap-5">

                                    <span class="text-sm font-medium text-blue-400">

                                        {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                    </span>


                                    <div>

                                        @if (is_array($challenge))
                                            <h3 class="font-semibold text-gray-200">

                                                {{ $challenge['title'] ?? 'Challenge' }}

                                            </h3>


                                            @if (isset($challenge['description']))
                                                <p class="mt-2 leading-7 text-gray-500">

                                                    {{ $challenge['description'] }}

                                                </p>
                                            @endif
                                        @else
                                            <p class="leading-7 text-gray-400">

                                                {{ $challenge }}

                                            </p>
                                        @endif

                                    </div>

                                </div>

                            </div>
                        @endforeach

                    </div>

                </div>

            </section>

        @endif



        <!-- =========================================
             LIKE
        ========================================= -->

        <section class="border-t border-white/5 px-6 py-24">

            <div class="mx-auto max-w-6xl">

                <div class="flex flex-col items-center text-center">


                    <p class="text-sm uppercase tracking-[0.3em] text-gray-600">

                        Enjoyed this project?

                    </p>


                    <button id="like-button" type="button"
                        class="like-button mt-5 inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.03] px-6 py-3 text-gray-300">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.8" class="h-5 w-5">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78L12 21.23l8.84-8.84a5.5 5.5 0 0 0 0-7.78Z" />

                        </svg>


                        <span>

                            Like this project

                        </span>


                        <span id="like-count-button" class="text-gray-500">

                            {{ $project['likes'] }}

                        </span>

                    </button>

                </div>

            </div>

        </section>



        <!-- =========================================
             MORE PROJECTS
        ========================================= -->

        <section class="border-t border-white/5 px-6 py-24">

            <div class="mx-auto max-w-6xl">


                <div class="flex flex-col justify-between gap-6 sm:flex-row sm:items-end">

                    <div>

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">

                            Continue Exploring

                        </p>


                        <h2 class="mt-4 text-3xl font-bold">

                            More Projects

                        </h2>

                    </div>


                    <a href="/projects" class="text-sm text-gray-500 transition hover:text-white">

                        View all projects →

                    </a>

                </div>


                <div class="mt-10">

                    <a href="/projects" class="glass-card flex items-center justify-between rounded-2xl p-6">

                        <div>

                            <p class="text-sm text-gray-500">
                                Portfolio
                            </p>

                            <p class="mt-1 font-medium">
                                Explore more projects
                            </p>

                        </div>


                        <span class="text-xl text-gray-500">
                            →
                        </span>

                    </a>

                </div>

            </div>

        </section>


    </main>



    <!-- =========================================
         FOOTER
    ========================================= -->

    <footer class="border-t border-white/5 px-6 py-8">

        <div
            class="mx-auto flex max-w-6xl flex-col gap-3 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between">

            <p>
                © {{ date('Y') }} Andhika Pratama.
            </p>

            <p>
                Built with Laravel & Tailwind CSS.
            </p>

        </div>

    </footer>



    <!-- =========================================
         JAVASCRIPT
    ========================================= -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* =========================================
               REVEAL
            ========================================= */

            const revealElements =
                document.querySelectorAll('.reveal');

            const revealObserver =
                new IntersectionObserver(
                    (entries, observer) => {

                        entries.forEach(entry => {

                            if (entry.isIntersecting) {

                                entry.target.classList.add('show');

                                observer.unobserve(entry.target);

                            }

                        });

                    }, {
                        threshold: .12,
                        rootMargin: '0px 0px -50px 0px'
                    }
                );


            revealElements.forEach(element => {

                revealObserver.observe(element);

            });



            /* =========================================
               LIKE
            ========================================= */

            const likeButton =
                document.getElementById('like-button');

            const likeCount =
                document.getElementById('like-count');

            const likeCountButton =
                document.getElementById('like-count-button');


            let liked =
                localStorage.getItem(
                    'project-liked-{{ $project['slug'] }}'
                );


            if (liked) {

                likeButton.classList.add('liked');

            }


            likeButton.addEventListener('click', async () => {

                if (liked) {
                    return;
                }


                try {

                    const response =
                        await fetch(
                            '{{ route('projects.like', $project['slug']) }}', {
                                method: 'POST',

                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',

                                    'Accept': 'application/json'
                                }
                            }
                        );


                    if (!response.ok) {
                        throw new Error('Like failed');
                    }


                    const data =
                        await response.json();


                    likeCount.textContent =
                        data.likes;

                    likeCountButton.textContent =
                        data.likes;


                    likeButton.classList.add(
                        'liked'
                    );


                    localStorage.setItem(
                        'project-liked-{{ $project['slug'] }}',
                        'true'
                    );


                    liked = true;

                } catch (error) {

                    console.error(error);

                }

            });

        });
    </script>

</body>

</html>
