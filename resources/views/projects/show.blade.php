<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="{{ $project['title'] }} — {{ $project['description'] }}">

    <title>{{ $project['title'] }} — Andhika Pratama</title>

    <!-- Theme Initialization Script: Default to Light Mode -->
    <script>
        (function() {
            try {
                const savedTheme = localStorage.getItem('portfolio-theme');
                if (savedTheme === 'dark') {
                    document.documentElement.classList.add('dark-mode');
                    document.documentElement.classList.remove('light-mode');
                } else {
                    document.documentElement.classList.add('light-mode');
                    document.documentElement.classList.remove('dark-mode');
                }
            } catch (e) {}
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        /* =========================================================
           1. LIGHT MODE (DEFAULT)
        ========================================================= */
        html.light-mode body,
        body.light-mode {
            background-color: #f8fafc !important;
            color: #0f172a !important;
        }

        body.light-mode .text-white {
            color: #0f172a !important;
        }

        body.light-mode .text-gray-300 {
            color: #334155 !important;
        }

        body.light-mode .text-gray-400 {
            color: #475569 !important;
        }

        body.light-mode .text-gray-500 {
            color: #64748b !important;
        }

        body.light-mode .border-white\/5,
        body.light-mode .border-white\/10,
        body.light-mode .border-white\/15,
        body.light-mode .border-white\/20 {
            border-color: rgba(15, 23, 42, 0.08) !important;
        }

        body.light-mode .bg-\[\#08090D\],
        body.light-mode .bg-\[\#08090D\]\/80 {
            background-color: rgba(255, 255, 255, 0.88) !important;
        }

        body.light-mode .glass-card {
            background-color: #ffffff !important;
            border-color: rgba(15, 23, 42, 0.08) !important;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04), 0 2px 6px -1px rgba(15, 23, 42, 0.02) !important;
        }

        body.light-mode .glass-card:hover {
            box-shadow: 0 20px 35px -5px rgba(15, 23, 42, 0.08) !important;
            border-color: rgba(59, 130, 246, 0.35) !important;
        }

        body.light-mode .tech-badge {
            background-color: #f1f5f9 !important;
            color: #1e293b !important;
            border-color: rgba(15, 23, 42, 0.1) !important;
        }

        body.light-mode .tech-badge:hover {
            background-color: #e2e8f0 !important;
            border-color: rgba(59, 130, 246, 0.4) !important;
        }

        body.light-mode footer {
            background-color: #f1f5f9 !important;
            border-color: rgba(15, 23, 42, 0.08) !important;
        }

        /* =========================================================
           2. DARK MODE
        ========================================================= */
        html.dark-mode body,
        body.dark-mode {
            background-color: #08090D !important;
            color: #f8fafc !important;
        }

        body.dark-mode .text-slate-900,
        body.dark-mode .text-slate-800 {
            color: #ffffff !important;
        }

        body.dark-mode .text-slate-600,
        body.dark-mode .text-slate-500,
        body.dark-mode .text-slate-700 {
            color: #94a3b8 !important;
        }

        body.dark-mode .border-slate-200,
        body.dark-mode .border-slate-300,
        body.dark-mode .border-slate-200\/80,
        body.dark-mode .border-slate-200\/90,
        body.dark-mode .border-slate-100 {
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        body.dark-mode .bg-white,
        body.dark-mode .bg-white\/90,
        body.dark-mode .bg-white\/85 {
            background-color: rgba(255, 255, 255, 0.03) !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        body.dark-mode .bg-slate-50,
        body.dark-mode .bg-slate-100 {
            background-color: rgba(255, 255, 255, 0.05) !important;
        }

        body.dark-mode .bg-slate-50\/50 {
            background-color: transparent !important;
        }

        body.dark-mode header,
        body.dark-mode header nav {
            background-color: rgba(8, 9, 13, 0.85) !important;
            border-color: rgba(255, 255, 255, 0.06) !important;
        }

        body.dark-mode .glass-card {
            background-color: rgba(255, 255, 255, 0.03) !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
        }

        body.dark-mode .glass-card:hover {
            background-color: rgba(255, 255, 255, 0.06) !important;
            border-color: rgba(59, 130, 246, 0.4) !important;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6) !important;
        }

        body.dark-mode .tech-badge {
            background-color: rgba(255, 255, 255, 0.05) !important;
            color: #cbd5e1 !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        body.dark-mode .theme-toggle {
            border-color: rgba(255, 255, 255, 0.15) !important;
            background: rgba(255, 255, 255, 0.05) !important;
            color: #ffffff !important;
        }

        body.dark-mode footer {
            background-color: #050608 !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        /* Cover Image Hover */
        .project-cover {
            transition: transform 0.7s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .project-cover:hover {
            transform: scale(1.02);
        }
    </style>
</head>

<body class="light-mode min-h-screen bg-[#f8fafc] text-[#0f172a] antialiased custom-cursor-active transition-colors duration-300">

    <!-- UNIVERSAL CUSTOM CURSOR (Req 9) -->
    <div id="custom-cursor">
        <span id="cursor-label">VIEW</span>
    </div>

    <!-- Ambient Hero Glow -->
    <div class="pointer-events-none fixed inset-0 -z-10 overflow-hidden">
        <div class="absolute left-1/2 top-0 h-[500px] w-[700px] -translate-x-1/2 rounded-full bg-blue-500/[0.08] blur-[140px]"></div>
    </div>

    <!-- Navbar -->
    <header id="navbar" class="fixed left-0 right-0 top-0 z-50 border-b border-slate-200/80 bg-white/85 backdrop-blur-xl transition-all duration-300 dark:border-white/5 dark:bg-[#08090D]/80">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">
            <a href="/" class="text-xl font-bold tracking-tight text-slate-900 transition hover:opacity-80 dark:text-white">
                Andhika<span class="text-blue-600 dark:text-blue-500">.</span>
            </a>

            <div class="flex items-center gap-3">
                <a href="{{ route('projects') }}"
                    class="hidden sm:inline-flex rounded-full border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-white/5 px-4 py-2 text-xs font-semibold text-slate-700 dark:text-white shadow-sm transition hover:border-slate-300 hover:bg-slate-100 dark:hover:bg-white/10">
                    ← All Projects
                </a>

                <!-- Theme Toggle Button -->
                {{-- <button id="theme-toggle" type="button" class="theme-toggle" aria-label="Toggle theme">
                    <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.598.748-3.752A9.753 9.753 0 1 0 21.752 15.002Z" />
                    </svg>
                </button> --}}

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 dark:border-white/10 bg-white/80 dark:bg-white/5 text-slate-700 dark:text-white shadow-sm transition hover:border-slate-300 dark:hover:border-white/20 sm:hidden" aria-label="Toggle menu" aria-expanded="false">
                    <!-- Hamburger Icon -->
                    <svg id="menu-icon-hamburger" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Close (X) Icon -->
                    <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="mobile-menu-panel border-t border-slate-200 dark:border-white/10 px-6 py-5 sm:hidden">
            <nav class="flex flex-col gap-3">
                <a href="/" class="mobile-link text-sm font-semibold text-slate-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition py-1">Home</a>
                <a href="{{ route('projects') }}" class="mobile-link text-sm font-semibold text-blue-600 dark:text-blue-400 transition py-1">← Back to All Projects</a>
                <a href="/#contact" class="mobile-link text-sm font-semibold text-slate-700 dark:text-gray-200 hover:text-blue-600 dark:hover:text-blue-400 transition py-1">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Project Hero Header -->
        <section class="relative overflow-hidden px-6 pb-16 pt-36">
            <div class="mx-auto max-w-6xl">

                <!-- Breadcrumbs & Category Badge -->
                <div class="reveal flex flex-wrap items-center gap-2 text-xs font-semibold">
                    <a href="{{ route('projects') }}" class="text-slate-500 dark:text-gray-400 hover:text-blue-600">Projects</a>
                    <span class="text-slate-400">/</span>
                    <span class="text-blue-600 dark:text-blue-400 font-bold uppercase tracking-wider">{{ $project['category'] }}</span>
                </div>

                <!-- Title & Meta -->
                <div class="reveal stagger-1 mt-6 max-w-4xl">
                    <h1 class="text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl md:text-5xl lg:text-6xl">
                        {{ $project['title'] }}
                    </h1>
                    <p class="mt-4 text-base sm:text-lg leading-relaxed text-slate-600 dark:text-gray-400">
                        {{ $project['description'] }}
                    </p>
                </div>

                <!-- Quick Attributes & Actions -->
                <div class="reveal stagger-2 mt-8 flex flex-wrap items-center justify-between gap-6 border-t border-slate-200 dark:border-white/5 pt-6">
                    <div class="flex flex-wrap gap-6 text-xs">
                        <div>
                            <span class="font-semibold text-slate-400 uppercase tracking-wider text-[10px]">Timeline</span>
                            <p class="mt-0.5 font-bold text-slate-800 dark:text-white">{{ $project['year'] ?? '2026' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-400 uppercase tracking-wider text-[10px]">Status</span>
                            <p class="mt-0.5 font-bold text-emerald-600 dark:text-emerald-400">{{ $project['status'] ?? 'Completed' }}</p>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-400 uppercase tracking-wider text-[10px]">Link Website</span>
                            <a href="{{ $project['link'] ?? 'Completed' }}" target="_BLANK"><p class="mt-0.5 font-bold text-emerald-600 dark:text-emerald-400 underline">{{ $project['link'] ?? 'Visit Site' }}</p></a>
                        </div>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        @if (!empty($project['github']) && $project['github'] !== '#')
                            <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 rounded-full border border-slate-300 dark:border-white/10 bg-white dark:bg-white/5 px-4 py-2 text-xs font-semibold text-slate-800 dark:text-white shadow-sm transition hover:border-slate-400 hover:bg-slate-50">
                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                                <span>Source Code</span>
                            </a>
                        @endif

                        @if (!empty($project['demo']) && $project['demo'] !== '#')
                            <a href="{{ $project['demo'] }}" target="_blank" rel="noopener noreferrer"
                                class="inline-flex items-center gap-2 rounded-full bg-blue-600 px-5 py-2 text-xs font-semibold text-white shadow-md transition hover:bg-blue-700">
                                <span>Live Preview ↗</span>
                            </a>
                        @endif
                    </div>
                </div>

            </div>
        </section>

        <!-- Project Hero Image / Banner -->
        @if (!empty($project['image']))
            <section class="px-6 pb-20">
                <div class="mx-auto max-w-6xl">
                    <div class="reveal overflow-hidden rounded-3xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-slate-900 shadow-2xl">
                        <img src="{{ asset($project['image']) }}" 
                             alt="{{ $project['title'] }}" 
                             class="project-cover w-full h-auto object-cover max-h-[560px]">
                    </div>
                </div>
            </section>
        @endif

        <!-- Project Overview & Solution -->
        <section class="border-t border-slate-200/80 dark:border-white/5 px-6 py-20 bg-slate-50/50 dark:bg-transparent">
            <div class="mx-auto max-w-6xl">
                <div class="grid gap-8 lg:grid-cols-12">
                    
                    <div class="reveal lg:col-span-8 space-y-8">
                        @if (!empty($project['overview']))
                            <div>
                                <h2 class="text-xs font-bold uppercase tracking-widest text-blue-600 dark:text-blue-400">Overview</h2>
                                <p class="mt-3 text-base leading-relaxed text-slate-700 dark:text-gray-300">
                                    {{ $project['overview'] }}
                                </p>
                            </div>
                        @endif

                        @if (!empty($project['problem']))
                            <div class="glass-card rounded-2xl p-7 border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] shadow-sm">
                                <h3 class="text-xs font-bold uppercase tracking-widest text-rose-600 dark:text-rose-400 flex items-center gap-2">
                                    <span>⚠️ The Challenge</span>
                                </h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                                    {{ $project['problem'] }}
                                </p>
                            </div>
                        @endif

                        @if (!empty($project['solution']))
                            <div class="glass-card rounded-2xl p-7 border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] shadow-sm">
                                <h3 class="text-xs font-bold uppercase tracking-widest text-emerald-600 dark:text-emerald-400 flex items-center gap-2">
                                    <span>💡 The Engineered Solution</span>
                                </h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                                    {{ $project['solution'] }}
                                </p>
                            </div>
                        @endif
                    </div>

                    <!-- Sidebar Info -->
                    <div class="reveal stagger-1 lg:col-span-4 space-y-6">
                        <!-- Technologies -->
                        @if (!empty($project['technologies']))
                            <div class="glass-card rounded-2xl p-6 border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] shadow-sm">
                                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white">Technologies Used</h3>
                                <div class="mt-4 flex flex-wrap gap-2">
                                    @foreach ($project['technologies'] as $tech)
                                        <span class="tech-badge rounded-lg bg-slate-100 dark:bg-white/5 px-3 py-1 text-xs font-medium text-slate-800 dark:text-gray-300 border border-slate-200 dark:border-white/10">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- Responsibilities / Role -->
                        @if (!empty($project['role']))
                            <div class="glass-card rounded-2xl p-6 border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] shadow-sm">
                                <h3 class="text-xs font-bold uppercase tracking-widest text-slate-900 dark:text-white">Responsibilities</h3>
                                <ul class="mt-4 space-y-2 text-xs font-medium text-slate-600 dark:text-gray-400">
                                    @foreach ($project['role'] as $role)
                                        <li class="flex items-center gap-2">
                                            <span class="text-blue-500">✓</span>
                                            <span>{{ $role }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </section>

        <!-- Features Section -->
        @if (!empty($project['features']))
            <section class="border-t border-slate-200/80 dark:border-white/5 px-6 py-20">
                <div class="mx-auto max-w-6xl">
                    <div class="max-w-2xl reveal">
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">Key Capabilities</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-slate-900 dark:text-white">Core System Features</h2>
                    </div>

                    <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                        @foreach ($project['features'] as $feature)
                            <div class="glass-card reveal stagger-1 flex items-start gap-3.5 rounded-2xl border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] p-5 shadow-sm">
                                <span class="flex h-7 w-7 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-xs font-bold text-blue-600 dark:text-blue-400">
                                    ✓
                                </span>
                                <div>
                                    <p class="text-sm font-bold text-slate-800 dark:text-white">{{ $feature }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- Technical Challenges & Solutions -->
        @if (!empty($project['challenges']))
            <section class="border-t border-slate-200/80 dark:border-white/5 px-6 py-20 bg-slate-50/50 dark:bg-transparent">
                <div class="mx-auto max-w-6xl">
                    <div class="max-w-2xl reveal">
                        <p class="text-sm font-semibold uppercase tracking-[0.25em] text-indigo-600 dark:text-indigo-400">Engineering</p>
                        <h2 class="mt-3 text-3xl font-extrabold text-slate-900 dark:text-white">Technical Challenges Solved</h2>
                    </div>

                    <div class="mt-10 grid gap-6 md:grid-cols-3">
                        @foreach ($project['challenges'] as $challenge)
                            <div class="glass-card reveal stagger-1 rounded-2xl border border-slate-200/90 bg-white dark:border-white/10 dark:bg-white/[0.03] p-6 shadow-sm">
                                <h3 class="text-base font-bold text-slate-900 dark:text-white">{{ $challenge['title'] }}</h3>
                                <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">{{ $challenge['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <!-- Navigation Footer to Next Projects -->
        <section class="border-t border-slate-200/80 dark:border-white/5 px-6 py-20">
            <div class="mx-auto max-w-6xl flex flex-col sm:flex-row items-center justify-between gap-6">
                <div>
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Explore More Work</h2>
                    <p class="text-xs text-slate-500 dark:text-gray-400 mt-1">Discover other web engineering and software systems.</p>
                </div>

                <a href="{{ route('projects') }}"
                    class="inline-flex items-center gap-2 rounded-full bg-slate-500 px-7 py-3.5 text-xs font-bold text-white shadow-md transition hover:bg-purple-700 dark:bg-white dark:text-slate-900 dark:hover:bg-slate-100">
                    <span>View All Projects</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200 bg-slate-50 px-6 py-12 dark:border-white/5 dark:bg-[#08090D]">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-4 text-center sm:flex-row sm:text-left">
            <div>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Andhika Pratama</p>
                <p class="mt-0.5 text-xs text-slate-500 dark:text-gray-400">Web Developer & Information Systems</p>
            </div>
            <p class="text-xs text-slate-500 dark:text-gray-500">© {{ date('Y') }} All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* =====================================================
               THEME TOGGLE & PERSISTENCE (Light default + Full Dark)
            ===================================================== */
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');

            function applyTheme(theme) {
                if (theme === 'dark') {
                    document.documentElement.classList.add('dark-mode');
                    document.documentElement.classList.remove('light-mode');
                    document.body.classList.add('dark-mode');
                    document.body.classList.remove('light-mode');
                } else {
                    document.documentElement.classList.add('light-mode');
                    document.documentElement.classList.remove('dark-mode');
                    document.body.classList.add('light-mode');
                    document.body.classList.remove('dark-mode');
                }
                updateThemeIcon();
            }

            function updateThemeIcon() {
                if (!themeIcon) return;
                const isDark = document.body.classList.contains('dark-mode');
                if (isDark) {
                    themeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1.5m0 15V21m9-9h-1.5M4.5 12H3m15.364-6.364-1.06 1.06M6.697 17.303l-1.06 1.061m12.728 0-1.06-1.061M6.697 6.697l-1.06-1.06M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                    `;
                } else {
                    themeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.598.748-3.752A9.753 9.753 0 1 0 21.752 15.002Z" />
                    `;
                }
            }

            const savedTheme = localStorage.getItem('portfolio-theme') || 'light';
            applyTheme(savedTheme);

            if (themeToggle) {
                themeToggle.addEventListener('click', () => {
                    const isCurrentlyDark = document.body.classList.contains('dark-mode');
                    const nextTheme = isCurrentlyDark ? 'light' : 'dark';
                    localStorage.setItem('portfolio-theme', nextTheme);
                    applyTheme(nextTheme);
                });
            }

            /* Custom Cursor (Req 9) */
            const cursor = document.getElementById('custom-cursor');
            const isDesktop = window.matchMedia('(min-width: 768px)').matches;

            if (isDesktop && cursor) {
                let mouseX = 0;
                let mouseY = 0;
                let cursorX = 0;
                let cursorY = 0;

                document.addEventListener('mousemove', (e) => {
                    mouseX = e.clientX;
                    mouseY = e.clientY;
                    cursor.classList.add('visible');
                });

                function animateCursor() {
                    cursorX += (mouseX - cursorX) * 0.18;
                    cursorY += (mouseY - cursorY) * 0.18;
                    cursor.style.left = `${cursorX}px`;
                    cursor.style.top = `${cursorY}px`;
                    requestAnimationFrame(animateCursor);
                }
                animateCursor();

                document.querySelectorAll('a, button, input').forEach(el => {
                    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
                    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
                });

                document.addEventListener('mouseleave', () => cursor.classList.remove('visible'));
                document.addEventListener('mouseenter', () => cursor.classList.add('visible'));
            }

            /* Reveal on Scroll */
            const reveals = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(e => {
                        if (e.isIntersecting) e.target.classList.add('show');
                    });
                }, { threshold: 0.08 });
                reveals.forEach(r => observer.observe(r));
            } else {
                reveals.forEach(r => r.classList.add('show'));
            }


            /* =====================================================
               MOBILE MENU TOGGLE
            ===================================================== */
            const mobileBtn = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('menu-icon-hamburger');
            const closeIcon = document.getElementById('menu-icon-close');

            function toggleMobileMenu(forceClose = false) {
                if (!mobileMenu) return;
                const isOpen = forceClose ? false : !mobileMenu.classList.contains('open');

                if (isOpen) {
                    mobileMenu.classList.add('open');
                    if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'true');
                    if (hamburgerIcon) hamburgerIcon.classList.add('hidden');
                    if (closeIcon) closeIcon.classList.remove('hidden');
                } else {
                    mobileMenu.classList.remove('open');
                    if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'false');
                    if (hamburgerIcon) hamburgerIcon.classList.remove('hidden');
                    if (closeIcon) closeIcon.classList.add('hidden');
                }
            }

            if (mobileBtn) {
                mobileBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    toggleMobileMenu();
                });
            }

            document.querySelectorAll('.mobile-link').forEach(link => {
                link.addEventListener('click', () => {
                    toggleMobileMenu(true);
                });
            });

            // Close on click outside navbar
            document.addEventListener('click', (e) => {
                const navbar = document.getElementById('navbar');
                if (navbar && !navbar.contains(e.target) && mobileMenu && mobileMenu.classList.contains('open')) {
                    toggleMobileMenu(true);
                }
            });

        });
    </script>

</body>

</html>
