<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Andhika Pratama — Web Developer and Information Systems Student. Explore my projects, skills, education, experience, and technology journey.">

    <title>Andhika Pratama — Web Developer & Information Systems</title>

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
        /* =========================================================
           GLOBAL THEME & CONTRAST
        ========================================================= */
        html {
            scroll-behavior: smooth;
        }

        body {
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

        body.light-mode .bg-white\/\[0\.02\],
        body.light-mode .bg-white\/\[0\.03\],
        body.light-mode .bg-white\/\[0\.04\],
        body.light-mode .bg-white\/5 {
            background-color: #ffffff !important;
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.04), 0 2px 6px -1px rgba(15, 23, 42, 0.02) !important;
            border-color: rgba(15, 23, 42, 0.08) !important;
        }

        body.light-mode .bg-\[\#08090D\],
        body.light-mode .bg-\[\#111217\] {
            background-color: #f8fafc !important;
        }

        body.light-mode #navbar {
            background-color: rgba(255, 255, 255, 0.85) !important;
            border-color: rgba(15, 23, 42, 0.08) !important;
        }

        body.light-mode #navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06) !important;
            border-color: rgba(15, 23, 42, 0.1) !important;
        }

        body.light-mode .mobile-menu-panel {
            background-color: rgba(255, 255, 255, 0.98) !important;
            border-color: rgba(15, 23, 42, 0.1) !important;
        }

        body.light-mode .theme-toggle {
            border-color: rgba(15, 23, 42, 0.12) !important;
            background: rgba(15, 23, 42, 0.04) !important;
            color: #0f172a !important;
        }

        body.light-mode .theme-toggle:hover {
            background: rgba(15, 23, 42, 0.08) !important;
        }

        body.light-mode .status-live {
            color: #15803d !important;
            background: rgba(34, 197, 94, 0.12) !important;
            border-color: rgba(34, 197, 94, 0.25) !important;
        }

        body.light-mode .status-development {
            color: #b45309 !important;
            background: rgba(245, 158, 11, 0.12) !important;
            border-color: rgba(245, 158, 11, 0.25) !important;
        }

        body.light-mode .status-completed {
            color: #1d4ed8 !important;
            background: rgba(59, 130, 246, 0.12) !important;
            border-color: rgba(59, 130, 246, 0.25) !important;
        }

        body.light-mode footer {
            background-color: #f1f5f9 !important;
            border-color: rgba(15, 23, 42, 0.08) !important;
        }

        /* =========================================================
           2. DARK MODE (EXPLICIT STYLING)
        ========================================================= */
        html.dark-mode body,
        body.dark-mode {
            background-color: #08090D !important;
            color: #f8fafc !important;
        }

        body.dark-mode .text-slate-900,
        body.dark-mode .text-slate-800,
        body.dark-mode .text-slate-700 {
            color: #ffffff !important;
        }

        body.dark-mode .text-slate-600,
        body.dark-mode .text-slate-500 {
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
        body.dark-mode .bg-white\/95,
        body.dark-mode .bg-white\/80,
        body.dark-mode .bg-white\/70 {
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
        body.dark-mode #navbar {
            background-color: rgba(8, 9, 13, 0.85) !important;
            border-color: rgba(255, 255, 255, 0.06) !important;
        }

        body.dark-mode #navbar.scrolled {
            background-color: rgba(8, 9, 13, 0.96) !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5) !important;
        }

        body.dark-mode .mobile-menu-panel {
            background-color: rgba(8, 9, 13, 0.98) !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
        }

        body.dark-mode .education-card,
        body.dark-mode .certificate-card,
        body.dark-mode .skill-card,
        body.dark-mode .project-card,
        body.dark-mode .glass-card {
            background-color: rgba(255, 255, 255, 0.03) !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3) !important;
        }

        body.dark-mode .education-card:hover,
        body.dark-mode .certificate-card:hover,
        body.dark-mode .skill-card:hover,
        body.dark-mode .project-card:hover,
        body.dark-mode .glass-card:hover {
            background-color: rgba(255, 255, 255, 0.06) !important;
            border-color: rgba(59, 130, 246, 0.4) !important;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6) !important;
        }

        body.dark-mode .theme-toggle {
            border-color: rgba(255, 255, 255, 0.15) !important;
            background: rgba(255, 255, 255, 0.05) !important;
            color: #ffffff !important;
        }

        body.dark-mode .theme-toggle:hover {
            background: rgba(255, 255, 255, 0.1) !important;
        }

        body.dark-mode footer {
            background-color: #050608 !important;
            border-color: rgba(255, 255, 255, 0.08) !important;
        }

        body.dark-mode .timeline-base-line {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }

        body.dark-mode .timeline-node {
            border-color: #08090D !important;
        }

        body.dark-mode input,
        body.dark-mode textarea {
            background-color: rgba(255, 255, 255, 0.04) !important;
            color: #ffffff !important;
            border-color: rgba(255, 255, 255, 0.12) !important;
        }

        body.dark-mode input::placeholder,
        body.dark-mode textarea::placeholder {
            color: #64748b !important;
        }

        body.dark-mode .hero-float-badge {
            background-color: rgba(15, 23, 42, 0.95) !important;
            border-color: rgba(255, 255, 255, 0.1) !important;
            color: #ffffff !important;
        }

        /* ---------------------------------------------------------
           HERO BRUSH & PHOTO STYLING
        --------------------------------------------------------- */
        .hero-photo-wrapper {
            perspective: 1000px;
        }

        .hero-float-badge {
            animation: floatSlow 6s ease-in-out infinite;
        }

        .hero-float-delay {
            animation-delay: 2.5s;
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
        }

        /* ---------------------------------------------------------
           TOAST
        --------------------------------------------------------- */
        #toast-container {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 100000;
            display: flex;
            flex-direction: column;
            gap: 10px;
            pointer-events: none;
        }

        .toast {
            display: flex;
            align-items: center;
            gap: 10px;
            min-width: 260px;
            padding: 13px 18px;
            border: 1px solid rgba(15, 23, 42, 0.1);
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.95);
            color: #0f172a;
            backdrop-filter: blur(16px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.1);
            font-size: 13px;
            font-weight: 500;
            animation: toastIn 0.35s cubic-bezier(0.22, 1, 0.36, 1) forwards;
        }

        body:not(.light-mode) .toast {
            border-color: rgba(255, 255, 255, 0.1);
            background: rgba(15, 17, 24, 0.95);
            color: #ffffff;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35);
        }

        .toast.hide {
            animation: toastOut 0.3s ease forwards;
        }

        @keyframes toastIn {
            from { opacity: 0; transform: translateY(15px) scale(0.95); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        @keyframes toastOut {
            from { opacity: 1; transform: translateY(0) scale(1); }
            to { opacity: 0; transform: translateY(15px) scale(0.95); }
        }

        /* ---------------------------------------------------------
           SCROLL PROGRESS & BACK TO TOP
        --------------------------------------------------------- */
        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 99999;
            height: 3px;
            width: 0;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6, #ec4899);
            transition: width 0.1s linear;
        }

        #back-to-top {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 900;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid rgba(15, 23, 42, 0.12);
            background: rgba(255, 255, 255, 0.85);
            color: #0f172a;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.1);
            backdrop-filter: blur(12px);
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        body:not(.light-mode) #back-to-top {
            border-color: rgba(255, 255, 255, 0.1);
            background: rgba(15, 17, 24, 0.85);
            color: #ffffff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }

        #back-to-top.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }

        #back-to-top:hover {
            transform: translateY(-3px);
        }

        /* ---------------------------------------------------------
           CERTIFICATE LIGHTBOX MODAL
        --------------------------------------------------------- */
        .lightbox-modal {
            transition: opacity 0.3s cubic-bezier(0.22, 1, 0.36, 1), visibility 0.3s;
        }

        .lightbox-modal.active {
            opacity: 1;
            visibility: visible;
        }

        .cert-drag-surface {
            cursor: grab;
            touch-action: none;
        }

        .cert-drag-surface.is-dragging {
            cursor: grabbing;
        }

        .cert-preview-img {
            transition: transform 0.15s ease-out;
            max-width: 90vw;
            max-height: 75vh;
            user-select: none;
            -webkit-user-drag: none;
        }

        /* ---------------------------------------------------------
           TYPING CURSOR
        --------------------------------------------------------- */
        .typing-cursor {
            display: inline-block;
            width: 2px;
            height: 1.1em;
            margin-left: 3px;
            vertical-align: -0.15em;
            background-color: #3b82f6;
            animation: cursorBlink 0.9s infinite;
        }

        @keyframes cursorBlink {
            0%, 49% { opacity: 1; }
            50%, 100% { opacity: 0; }
        }

        /* ---------------------------------------------------------
           PARTICLES & ORBS
        --------------------------------------------------------- */
        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.4);
            animation: floatParticle 8s infinite ease-in-out;
        }

        @keyframes floatParticle {
            0%, 100% { transform: translateY(0) scale(1); opacity: 0.3; }
            50% { transform: translateY(-30px) scale(1.4); opacity: 0.8; }
        }
    </style>
</head>

<body class="light-mode bg-[#f8fafc] text-[#0f172a] antialiased custom-cursor-active transition-colors duration-300">

    <!-- UNIVERSAL CUSTOM CURSOR (Req 9) -->
    <div id="custom-cursor">
        <span id="cursor-label">VIEW</span>
    </div>

    <!-- SCROLL PROGRESS -->
    <div id="scroll-progress"></div>

    <!-- TOAST CONTAINER -->
    <div id="toast-container"></div>

    <!-- BACK TO TOP -->
    <button id="back-to-top" type="button" aria-label="Back to top">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-5 w-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="m5 15 7-7 7 7" />
        </svg>
    </button>


    <!-- =========================================================
         NAVBAR
    ========================================================= -->
    <header id="navbar" class="fixed left-0 right-0 top-0 z-50 border-b border-slate-200/80 bg-white/80 backdrop-blur-xl transition-all duration-300 dark:border-white/5 dark:bg-[#08090D]/80">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-6 py-4">

            <!-- Logo -->
            <a href="#" class="text-xl font-bold tracking-tight text-slate-900 transition hover:opacity-80 dark:text-white">
                Andhika<span class="text-blue-600 dark:text-blue-500">.</span>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden items-center gap-8 md:flex">
                <a href="#about" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">About</a>
                <a href="#education" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Education</a>
                <a href="#skills" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Skills</a>
                <a href="#certificates" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Certificates</a>
                <a href="#projects" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Projects</a>
                <a href="#experience" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Journey</a>
                <a href="#contact" class="text-sm font-medium text-slate-600 transition hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">Contact</a>
            </nav>

            <!-- Actions -->
            <div class="flex items-center gap-3">

                <!-- Theme Toggle Button (Light / Dark) -->
                <button id="theme-toggle" type="button" class="theme-toggle" aria-label="Toggle theme">
                    <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.598.748-3.752A9.753 9.753 0 1 0 21.752 15.002Z" />
                    </svg>
                </button>

                <!-- CV Button -->
                <a href="{{ asset('cv/CV ATS ANDHIKA PRATAMA.pdf') }}" target="_blank" rel="noopener noreferrer"
                    class="hidden rounded-full border border-slate-300 dark:border-white/10 bg-white dark:bg-white/5 px-4 py-2 text-xs font-semibold text-slate-700 dark:text-white shadow-sm transition hover:border-slate-400 hover:bg-slate-50 dark:hover:bg-white/10 sm:inline-flex items-center gap-1.5">
                    <span>Download CV</span>
                    <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                </a>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" type="button" class="inline-flex h-10 w-10 items-center justify-center rounded-full border border-slate-200 dark:border-white/10 text-slate-700 dark:text-white transition md:hidden" aria-label="Open menu">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>

            </div>

        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="mobile-menu-panel hidden border-t border-slate-200 dark:border-white/10 px-6 py-5 md:hidden">
            <nav class="flex flex-col gap-4">
                <a href="#about" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">About</a>
                <a href="#education" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Education & Bootcamp</a>
                <a href="#skills" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Skills</a>
                <a href="#certificates" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Certificates</a>
                <a href="#projects" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Projects</a>
                <a href="#experience" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Journey</a>
                <a href="#contact" class="mobile-link text-sm font-medium text-slate-700 dark:text-gray-300 hover:text-blue-600">Contact</a>
                <a href="{{ asset('cv/CV ATS ANDHIKA PRATAMA.pdf') }}" target="_blank" rel="noopener noreferrer" class="mt-2 inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 py-2.5 text-xs font-semibold text-white">
                    <span>Download CV</span>
                </a>
            </nav>
        </div>
    </header>


    <!-- =========================================================
         HERO SECTION (Req 8: Photo with Brush Stroke Background)
    ========================================================= -->
    <section id="hero" class="relative flex min-h-screen items-center overflow-hidden px-6 pt-20">

        <!-- Ambient Background Orbs -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden">
            <div class="background-orb orb-one absolute left-[15%] top-[15%] h-[400px] w-[400px] rounded-full bg-blue-500/10 blur-[130px]"></div>
            <div class="background-orb orb-two absolute right-[10%] top-[10%] h-[350px] w-[350px] rounded-full bg-indigo-500/10 blur-[120px]"></div>
            <div class="background-orb orb-three absolute bottom-[5%] left-[5%] h-[300px] w-[300px] rounded-full bg-cyan-500/10 blur-[110px]"></div>

            <!-- Floating Particles -->
            <span class="particle left-[15%] top-[55%]" style="animation-duration: 7s;"></span>
            <span class="particle left-[28%] top-[35%]" style="animation-duration: 9s; animation-delay: 2s;"></span>
            <span class="particle left-[45%] top-[70%]" style="animation-duration: 8s; animation-delay: 1s;"></span>
            <span class="particle left-[65%] top-[25%]" style="animation-duration: 10s; animation-delay: 3s;"></span>
            <span class="particle left-[80%] top-[60%]" style="animation-duration: 8s; animation-delay: 1.5s;"></span>
        </div>

        <div class="mx-auto w-full max-w-6xl py-16">
            <div class="grid items-center gap-12 lg:grid-cols-12">

                <!-- Left Column: Hero Text & CTAs -->
                <div class="max-w-3xl reveal lg:col-span-7">

                    <!-- Availability Badge -->
                    <div class="reveal stagger-1 mb-6 inline-flex items-center gap-2 rounded-full border border-slate-200 dark:border-white/10 bg-white/90 dark:bg-white/[0.04] px-4 py-2 text-xs sm:text-sm font-medium text-slate-700 dark:text-gray-300 shadow-sm backdrop-blur-md">
                        <span class="h-2 w-2 rounded-full bg-emerald-500 shadow-[0_0_8px_#10b981]"></span>
                        <span>Open to opportunities</span>
                    </div>

                    <!-- Heading -->
                    <h1 class="text-4xl font-extrabold leading-[1.12] tracking-tight text-slate-900 dark:text-white sm:text-5xl lg:text-6xl xl:text-7xl">
                        Hi, I'm
                        <span class="bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                            Andhika Pratama.
                        </span>
                        <br>
                        <span class="text-slate-800 dark:text-white inline-block mt-2">
                            <span id="typing-text">Web Developer</span>
                            <span class="typing-cursor"></span>
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="reveal stagger-2 mt-6 max-w-2xl text-base sm:text-lg leading-relaxed text-slate-600 dark:text-gray-400">
                        I build modern, scalable web applications, explore information systems, and craft intuitive digital experiences that solve real-world problems.
                    </p>

                    <!-- CTAs -->
                    <div class="reveal stagger-3 mt-8 flex flex-wrap items-center gap-4">
                        <a href="#projects"
                            class="inline-flex items-center gap-2 rounded-full bg-slate-900 px-7 py-3.5 text-sm font-semibold text-white shadow-lg transition hover:-translate-y-0.5 hover:bg-slate-800 hover:shadow-xl dark:bg-white dark:text-slate-900 dark:hover:bg-slate-100">
                            <span>View My Projects</span>
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>

                        <a href="#contact"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-300 dark:border-white/10 bg-white/80 dark:bg-white/5 px-6 py-3.5 text-sm font-semibold text-slate-700 dark:text-white backdrop-blur transition hover:-translate-y-0.5 hover:border-slate-400 hover:bg-slate-100 dark:hover:bg-white/10">
                            <span>Let's Connect</span>
                        </a>
                    </div>

                    <!-- Quick Info -->
                    <div class="reveal stagger-4 mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm font-medium text-slate-600 dark:text-gray-500">
                        <span class="inline-flex items-center gap-1.5">
                            <span class="text-base">📍</span> Indonesia
                        </span>
                        <span class="inline-flex items-center gap-1.5">
                            <span class="text-base">🎓</span> Universitas Gunadarma
                        </span>
                        <span class="inline-flex items-center gap-1.5">
                            <span class="text-base">💻</span> Web Development
                        </span>
                    </div>

                </div>

                <!-- Right Column: Profile Photo with Brush Background Effect (Req 8) -->
                <div class="reveal stagger-2 flex justify-center lg:col-span-5 lg:justify-end">
                    <div class="hero-photo-wrapper relative flex items-center justify-center">

                        <!-- Artistic Multi-layer Organic Brush Stroke SVG -->
                        <div class="hero-brush-backdrop absolute inset-0 -m-10 pointer-events-none flex items-center justify-center">
                            <svg class="w-[360px] h-[360px] sm:w-[420px] sm:h-[420px] transform scale-110 rotate-2 opacity-85 dark:opacity-75 transition-transform duration-700 hover:rotate-6 hover:scale-115" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="heroBrushGrad1" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.85"/>
                                        <stop offset="50%" stop-color="#8b5cf6" stop-opacity="0.8"/>
                                        <stop offset="100%" stop-color="#ec4899" stop-opacity="0.75"/>
                                    </linearGradient>
                                    <linearGradient id="heroBrushGrad2" x1="100%" y1="0%" x2="0%" y2="100%">
                                        <stop offset="0%" stop-color="#06b6d4" stop-opacity="0.7"/>
                                        <stop offset="60%" stop-color="#3b82f6" stop-opacity="0.6"/>
                                        <stop offset="100%" stop-color="#6366f1" stop-opacity="0.5"/>
                                    </linearGradient>
                                    <filter id="brushTexture" x="-20%" y="-20%" width="140%" height="140%">
                                        <feTurbulence type="fractalNoise" baseFrequency="0.035" numOctaves="3" result="noise" />
                                        <feDisplacementMap in="SourceGraphic" in2="noise" scale="18" xChannelSelector="R" yChannelSelector="G" />
                                    </filter>
                                </defs>
                                <!-- Splash Paths with Artistic Distortion -->
                                <path d="M410,210 C435,300 380,400 300,425 C210,450 120,410 75,335 C30,260 45,150 110,95 C175,40 300,55 365,105 C405,138 395,165 410,210 Z" fill="url(#heroBrushGrad1)" filter="url(#brushTexture)"/>
                                <path d="M380,170 C410,250 360,350 280,380 C200,410 130,370 80,300 C35,230 60,130 130,80 C200,30 300,50 355,100 C385,128 365,135 380,170 Z" fill="url(#heroBrushGrad2)" filter="url(#brushTexture)" opacity="0.65"/>
                                <path d="M50,180 Q170,110 370,150 Q450,170 420,270 Q380,370 240,410 Q90,420 60,290 Q40,220 50,180 Z" fill="none" stroke="url(#heroBrushGrad1)" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" opacity="0.35" filter="url(#brushTexture)"/>
                            </svg>
                            <!-- Glow Halo -->
                            <div class="absolute inset-0 rounded-full bg-blue-500/15 blur-[50px] dark:bg-blue-600/20"></div>
                        </div>

                        <!-- Portrait Photo Container -->
                        <div class="relative z-10 p-2.5 rounded-[30px] bg-white/80 dark:bg-slate-900/70 backdrop-blur-md border border-slate-200/90 dark:border-white/15 shadow-2xl transition-all duration-500 hover:scale-[1.02] hover:shadow-blue-500/15">
                            <div class="relative w-64 h-64 sm:w-72 sm:h-72 lg:w-80 lg:h-80 overflow-hidden rounded-[24px]">
                                <img src="{{ asset('images/andhika-photo.jpg') }}" 
                                     alt="Andhika Pratama — Web Developer" 
                                     class="w-full h-full object-cover object-top transition-transform duration-700 hover:scale-105"
                                     loading="eager">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/30 via-transparent to-transparent opacity-60"></div>
                            </div>
                        </div>

                        <!-- Floating Skill Badge (Top Right) -->
                        <div class="hero-float-badge absolute -right-3 -top-3 z-20 flex items-center gap-2 rounded-2xl border border-slate-200 dark:border-white/10 bg-white/95 dark:bg-slate-900/95 px-3.5 py-2 text-xs font-bold text-slate-800 dark:text-white shadow-lg backdrop-blur-md">
                            <span class="flex h-5 w-5 items-center justify-center rounded-lg bg-blue-500/15 text-blue-600 dark:text-blue-400">⚡</span>
                            <span>Fullstack Dev</span>
                        </div>

                        <!-- Floating Education Badge (Bottom Left) -->
                        <div class="hero-float-badge hero-float-delay absolute -bottom-4 -left-4 z-20 flex items-center gap-2.5 rounded-2xl border border-slate-200 dark:border-white/10 bg-white/95 dark:bg-slate-900/95 px-4 py-2.5 text-xs font-semibold text-slate-800 dark:text-white shadow-lg backdrop-blur-md">
                            <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-indigo-500/15 text-indigo-600 dark:text-indigo-400 text-sm">🎓</span>
                            <div>
                                <p class="font-bold text-[11px] leading-none text-indigo-600 dark:text-indigo-400">Gunadarma</p>
                                <p class="text-[10px] text-slate-500 dark:text-gray-400 mt-0.5 leading-none">Information Systems</p>
                            </div>
                        </div>

                        <!-- Floating Project Counter Badge (Bottom Right) -->
                        <div class="hero-float-badge absolute -bottom-2 -right-2 z-20 hidden sm:flex items-center gap-2 rounded-xl border border-slate-200 dark:border-white/10 bg-white/95 dark:bg-slate-900/95 px-3 py-1.5 text-xs font-medium text-slate-700 dark:text-gray-300 shadow-md backdrop-blur-md">
                            <span class="h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span>10+ Projects Built</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </section>


    <!-- =========================================================
         CURRENTLY BUILDING
    ========================================================= -->
    <section class="px-6 pb-20">
        <div class="mx-auto max-w-6xl">
            <div class="reveal rounded-3xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-8 shadow-sm backdrop-blur-xl">
                <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-blue-600 dark:text-blue-400">
                            Currently Building
                        </span>
                        <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                            APAR & Hydrant Management System
                        </h2>
                        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-600 dark:text-gray-400">
                            Digitizing fire protection inspections, QR Code asset tracking, and maintenance reporting into a unified web dashboard.
                        </p>
                    </div>

                    <a href="{{ route('projects.show', 'apar-hydrant') }}"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-blue-600 px-6 py-3 text-sm font-semibold text-white shadow-md transition hover:bg-blue-700 hover:shadow-lg">
                        <span>Explore Project</span>
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- =========================================================
         ABOUT ME
    ========================================================= -->
    <section id="about" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28">
        <div class="mx-auto max-w-6xl">

            <div class="max-w-2xl reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                    About Me
                </p>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Driven by curiosity,
                    <span class="text-slate-500 dark:text-gray-400">learning & growing.</span>
                </h2>
            </div>

            <div class="mt-12 grid gap-10 lg:grid-cols-2">
                <div class="reveal space-y-6 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                    <p>
                        I am an Information Systems student at Universitas Gunadarma with a passionate interest in modern web development, software engineering, and database systems.
                    </p>
                    <p>
                        I enjoy creating clean, functional, and user-centered web applications that translate complex workflows into simple, intuitive interfaces. Constantly exploring new technologies, I keep expanding my capabilities in fullstack development and AI tooling.
                    </p>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-4 sm:gap-6">
                    <div class="reveal stagger-1 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                        <p class="text-3xl font-extrabold text-blue-600 dark:text-blue-400">10+</p>
                        <p class="mt-2 text-sm font-medium text-slate-600 dark:text-gray-400">Projects Built</p>
                    </div>

                    <div class="reveal stagger-2 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                        <p class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">UG</p>
                        <p class="mt-2 text-sm font-medium text-slate-600 dark:text-gray-400">Information Systems</p>
                    </div>

                    <div class="reveal stagger-3 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                        <p class="text-3xl font-extrabold text-emerald-600 dark:text-emerald-400">2026</p>
                        <p class="mt-2 text-sm font-medium text-slate-600 dark:text-gray-400">Active Developer</p>
                    </div>

                    <div class="reveal stagger-4 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                        <p class="text-3xl font-extrabold text-purple-600 dark:text-purple-400">100%</p>
                        <p class="mt-2 text-sm font-medium text-slate-600 dark:text-gray-400">Passion to Learn</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- =========================================================
         EDUCATION & BOOTCAMP (Req 7: Monochrome to Color on Hover)
    ========================================================= -->
    <section id="education" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28 bg-slate-50/50 dark:bg-transparent">
        <div class="mx-auto max-w-6xl">

            <div class="max-w-2xl reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                    Academic & Training
                </p>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Education &
                    <span class="text-slate-500 dark:text-gray-400">Bootcamps.</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                    Formal institutions, academy partners, and intensive bootcamps that continue to shape my technical foundation.
                </p>
            </div>

            <!-- Logo Grid -->
            <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- 1. Universitas Gunadarma -->
                <a href="https://www.gunadarma.ac.id/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-1 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-purple-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo with Grayscale to Color Effect -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-purple-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-10 w-10 text-purple-700" viewBox="0 0 48 48" fill="currentColor">
                                <circle cx="24" cy="24" r="22" fill="#7e22ce" opacity="0.15"/>
                                <path d="M24 6L6 16L24 26L42 16L24 6Z" fill="#7e22ce"/>
                                <path d="M12 21.5V31.5C12 36.5 24 41 24 41C24 41 36 36.5 36 31.5V21.5L24 28.5L12 21.5Z" fill="#a855f7"/>
                                <circle cx="42" cy="18" r="3" fill="#eab308"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-purple-600 dark:text-purple-400">
                                University • S1
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                                Universitas Gunadarma
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                Information Systems (Sistem Informasi)
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Studying core information systems, programming, database design, software engineering, and business analytics.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>2024 — Present</span>
                        <span class="flex items-center gap-1 font-semibold text-purple-600 dark:text-purple-400 group-hover:underline">
                            gunadarma.ac.id ↗
                        </span>
                    </div>
                </a>

                <!-- 2. Dicoding Indonesia -->
                <a href="https://www.dicoding.com/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-2 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-cyan-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-cyan-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-10 w-10 text-cyan-600" viewBox="0 0 48 48" fill="none">
                                <rect width="48" height="48" rx="12" fill="#0891b2" fill-opacity="0.15"/>
                                <path d="M14 12H26C33.732 12 40 18.268 40 26C40 33.732 33.732 40 26 40H14V12Z" fill="#0891b2"/>
                                <path d="M22 20H26C29.3137 20 32 22.6863 32 26C32 29.3137 29.3137 32 26 32H22V20Z" fill="white"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">
                                Tech Academy • Partner
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">
                                Dicoding Indonesia
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                AI & Microsoft Fabric Learning Path
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Certified in Data Science with Microsoft Fabric and Artificial Intelligence Fundamentals by Dicoding Academy.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>2025</span>
                        <span class="flex items-center gap-1 font-semibold text-cyan-600 dark:text-cyan-400 group-hover:underline">
                            dicoding.com ↗
                        </span>
                    </div>
                </a>

                <!-- 3. Hacktiv8 Indonesia -->
                <a href="https://www.hacktiv8.com/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-3 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-10 w-10 text-blue-600" viewBox="0 0 48 48" fill="none">
                                <rect width="48" height="48" rx="12" fill="#2563eb" fill-opacity="0.15"/>
                                <path d="M12 12V36M36 12V36M12 24H36" stroke="#2563eb" stroke-width="6" stroke-linecap="round"/>
                                <circle cx="36" cy="14" r="3" fill="#f59e0b"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                                Intensive Bootcamp • Google AI
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                                Hacktiv8 Indonesia
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                AI for Work & Career Readiness
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Google AI products mastery, prompt engineering, and career readiness program for modern tech industry.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>2026</span>
                        <span class="flex items-center gap-1 font-semibold text-blue-600 dark:text-blue-400 group-hover:underline">
                            hacktiv8.com ↗
                        </span>
                    </div>
                </a>

                <!-- 4. Vocational Software Engineering -->
                <a href="https://psmk.kemdikbud.go.id/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-1 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-emerald-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-emerald-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-10 w-10 text-emerald-600" viewBox="0 0 48 48" fill="none">
                                <rect width="48" height="48" rx="12" fill="#059669" fill-opacity="0.15"/>
                                <path d="M14 16L24 10L34 16L24 22L14 16Z" fill="#059669"/>
                                <path d="M14 24L24 30L34 24" stroke="#059669" stroke-width="3" stroke-linecap="round"/>
                                <path d="M14 32L24 38L34 32" stroke="#059669" stroke-width="3" stroke-linecap="round"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-emerald-600 dark:text-emerald-400">
                                Vocational Education • Foundation
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-emerald-600 dark:group-hover:text-emerald-400 transition-colors">
                                Rekayasa Perangkat Lunak
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                Software Engineering Foundation (RPL)
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Built core programming foundations in algorithms, OOP, databases, HTML/CSS, and structured software development.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>Foundation</span>
                        <span class="flex items-center gap-1 font-semibold text-emerald-600 dark:text-emerald-400 group-hover:underline">
                            kemdikbud.go.id ↗
                        </span>
                    </div>
                </a>

                <!-- 5. Microsoft Learn -->
                <a href="https://learn.microsoft.com/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-2 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-amber-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-amber-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-9 w-9" viewBox="0 0 24 24">
                                <rect x="1" y="1" width="10" height="10" fill="#f25022"/>
                                <rect x="13" y="1" width="10" height="10" fill="#7fba00"/>
                                <rect x="1" y="13" width="10" height="10" fill="#00a4ef"/>
                                <rect x="13" y="13" width="10" height="10" fill="#ffb900"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">
                                Cloud & Data • Microsoft
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                                Microsoft Learn
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                Microsoft Fabric & Data Science
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Cloud data workflows, Lakehouse concepts, Power BI analytics, and Machine Learning operations in Microsoft Fabric.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>2025</span>
                        <span class="flex items-center gap-1 font-semibold text-amber-600 dark:text-amber-400 group-hover:underline">
                            learn.microsoft.com ↗
                        </span>
                    </div>
                </a>

                <!-- 6. Google for Developers -->
                <a href="https://developers.google.com/" target="_blank" rel="noopener noreferrer"
                    class="education-card group reveal stagger-3 relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-red-500/40 hover:shadow-xl">
                    
                    <div>
                        <!-- Logo -->
                        <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-red-500/10 p-3 transition-all duration-300 filter grayscale contrast-125 opacity-70 group-hover:grayscale-0 group-hover:opacity-100 group-hover:scale-105">
                            <svg class="h-9 w-9" viewBox="0 0 24 24">
                                <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17Z"/>
                                <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24Z"/>
                                <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15Z"/>
                                <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98Z"/>
                            </svg>
                        </div>

                        <div class="mt-6">
                            <span class="inline-block text-[11px] font-bold uppercase tracking-wider text-red-600 dark:text-red-400">
                                Developer Ecosystem
                            </span>
                            <h3 class="mt-1 text-lg font-bold text-slate-900 dark:text-white group-hover:text-red-600 dark:group-hover:text-red-400 transition-colors">
                                Google for Developers
                            </h3>
                            <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                                Google AI & Web Technologies
                            </p>
                            <p class="mt-3 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                                Implementing modern web standards, developer tools, and Google AI ecosystem integrations.
                            </p>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4 text-xs font-medium text-slate-500 dark:text-gray-400">
                        <span>2026</span>
                        <span class="flex items-center gap-1 font-semibold text-red-600 dark:text-red-400 group-hover:underline">
                            developers.google.com ↗
                        </span>
                    </div>
                </a>

            </div>

        </div>
    </section>


    <!-- =========================================================
         SKILLS SECTION
    ========================================================= -->
    <section id="skills" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28">
        <div class="mx-auto max-w-6xl">

            <div class="max-w-2xl reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                    Tech Stack
                </p>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Skills &
                    <span class="text-slate-500 dark:text-gray-400">technologies.</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                    Tools, languages, and frameworks I use to bring digital products to life.
                </p>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-4">

                <!-- Frontend -->
                <div class="skill-card reveal stagger-1 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-xl font-bold text-blue-600 dark:text-blue-400">
                        🎨
                    </div>
                    <h3 class="mt-4 text-lg font-bold text-slate-900 dark:text-white">Frontend</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-500 dark:text-gray-400">Responsive, performant, and interactive UI engineering.</p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">HTML5</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">CSS3</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">JavaScript</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Tailwind CSS</span>
                    </div>
                </div>

                <!-- Backend -->
                <div class="skill-card reveal stagger-2 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-xl font-bold text-indigo-600 dark:text-indigo-400">
                        ⚙️
                    </div>
                    <h3 class="mt-4 text-lg font-bold text-slate-900 dark:text-white">Backend</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-500 dark:text-gray-400">Robust server logic, RESTful APIs, and authentication.</p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Laravel</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">PHP</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">REST API</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Blade</span>
                    </div>
                </div>

                <!-- Database -->
                <div class="skill-card reveal stagger-3 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/10 text-xl font-bold text-cyan-600 dark:text-cyan-400">
                        🗄️
                    </div>
                    <h3 class="mt-4 text-lg font-bold text-slate-900 dark:text-white">Database</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-500 dark:text-gray-400">Relational data modeling, indexing, and query optimization.</p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">MySQL</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Eloquent ORM</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Relational DB</span>
                    </div>
                </div>

                <!-- Tools & AI -->
                <div class="skill-card reveal stagger-4 rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-6 shadow-sm">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/10 text-xl font-bold text-purple-600 dark:text-purple-400">
                        🚀
                    </div>
                    <h3 class="mt-4 text-lg font-bold text-slate-900 dark:text-white">Tools & AI</h3>
                    <p class="mt-2 text-xs leading-relaxed text-slate-500 dark:text-gray-400">Version control, deployment, and AI workflow integration.</p>
                    <div class="mt-5 flex flex-wrap gap-2">
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Git & GitHub</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Vite</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Google AI</span>
                        <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Fabric</span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         CERTIFICATES (Req 3: Rich Lightbox Modal with Zoom/Pan)
    ========================================================= -->
    <section id="certificates" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28 bg-slate-50/50 dark:bg-transparent">
        <div class="mx-auto max-w-6xl">

            <div class="max-w-2xl reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                    Certifications
                </p>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Certificates &
                    <span class="text-slate-500 dark:text-gray-400">achievements.</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                    Click any certificate to inspect full credentials, zoom in/out, pan, and verify authenticity.
                </p>
            </div>

            <!-- Certificates Grid -->
            <div class="mt-14 grid gap-6 md:grid-cols-2 lg:grid-cols-2">

                <!-- Cert 1: Hacktiv8 AI -->
                <div class="certificate-card reveal stagger-1 group relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-500/40 hover:shadow-xl">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-2xl">
                                📜
                            </span>
                            <span class="rounded-full bg-blue-50 dark:bg-blue-500/10 px-3 py-1 text-xs font-bold text-blue-600 dark:text-blue-400">
                                2026
                            </span>
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                            Course & Workshop
                        </p>

                        <h3 class="mt-2 text-xl font-bold text-slate-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            AI for Work & Career Readiness with Google AI Products
                        </h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                            Issued by Hacktiv8 Indonesia in partnership with Google AI
                        </p>

                        <p class="mt-4 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                            Pelatihan komprehensif implementasi teknologi Artificial Intelligence, prompt engineering, generative AI workflows, dan otomatisasi produktivitas digital.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4">
                        <span class="text-xs font-medium text-slate-500 dark:text-gray-400">Hacktiv8 • Google AI</span>
                        <button type="button" 
                                class="open-cert-modal inline-flex items-center gap-1.5 text-xs font-bold text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300 transition"
                                data-cert-index="0">
                            <span>View Certificate</span>
                            <span class="text-sm">🔍</span>
                        </button>
                    </div>
                </div>

                <!-- Cert 2: Dicoding Microsoft Fabric -->
                <div class="certificate-card reveal stagger-2 group relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-cyan-500/40 hover:shadow-xl">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/10 text-2xl">
                                📊
                            </span>
                            <span class="rounded-full bg-cyan-50 dark:bg-cyan-500/10 px-3 py-1 text-xs font-bold text-cyan-600 dark:text-cyan-400">
                                2025
                            </span>
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">
                            Course & Certification
                        </p>

                        <h3 class="mt-2 text-xl font-bold text-slate-900 dark:text-white group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">
                            Belajar Penerapan Data Science dengan Microsoft Fabric
                        </h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                            Issued by Dicoding Indonesia x Microsoft Fabric
                        </p>

                        <p class="mt-4 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                            Mempelajari alur end-to-end data science dengan Microsoft Fabric: eksplorasi data, pembuatan model machine learning, deployment, hingga monitoring dalam satu platform.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4">
                        <span class="text-xs font-medium text-slate-500 dark:text-gray-400">Dicoding • Microsoft</span>
                        <button type="button" 
                                class="open-cert-modal inline-flex items-center gap-1.5 text-xs font-bold text-cyan-600 dark:text-cyan-400 hover:text-cyan-700 dark:hover:text-cyan-300 transition"
                                data-cert-index="1">
                            <span>View Certificate</span>
                            <span class="text-sm">🔍</span>
                        </button>
                    </div>
                </div>

                <!-- Cert 3: Dicoding Dasar AI -->
                <div class="certificate-card reveal stagger-1 group relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-indigo-500/40 hover:shadow-xl">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-500/10 text-2xl">
                                🤖
                            </span>
                            <span class="rounded-full bg-indigo-50 dark:bg-indigo-500/10 px-3 py-1 text-xs font-bold text-indigo-600 dark:text-indigo-400">
                                2025
                            </span>
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-wider text-indigo-600 dark:text-indigo-400">
                            Course
                        </p>

                        <h3 class="mt-2 text-xl font-bold text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                            Belajar Dasar AI (Artificial Intelligence)
                        </h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                            Issued by Dicoding Academy Indonesia
                        </p>

                        <p class="mt-4 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                            Fundamental konsep Artificial Intelligence, subbidang Machine Learning & Deep Learning, evaluasi model kecerdasan buatan, dan implementasi aplikatif.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4">
                        <span class="text-xs font-medium text-slate-500 dark:text-gray-400">Dicoding Academy</span>
                        <button type="button" 
                                class="open-cert-modal inline-flex items-center gap-1.5 text-xs font-bold text-indigo-600 dark:text-indigo-400 hover:text-indigo-700 dark:hover:text-indigo-300 transition"
                                data-cert-index="2">
                            <span>View Certificate</span>
                            <span class="text-sm">🔍</span>
                        </button>
                    </div>
                </div>

                <!-- Cert 4: Software Development -->
                <div class="certificate-card reveal stagger-2 group relative flex flex-col justify-between rounded-2xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-7 shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-purple-500/40 hover:shadow-xl">
                    <div>
                        <div class="flex items-center justify-between">
                            <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/10 text-2xl">
                                🏆
                            </span>
                            <span class="rounded-full bg-purple-50 dark:bg-purple-500/10 px-3 py-1 text-xs font-bold text-purple-600 dark:text-purple-400">
                                2026
                            </span>
                        </div>

                        <p class="mt-6 text-xs font-bold uppercase tracking-wider text-purple-600 dark:text-purple-400">
                            Achievement & Competency
                        </p>

                        <h3 class="mt-2 text-xl font-bold text-slate-900 dark:text-white group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors">
                            Software Development & Fullstack Web Engineering
                        </h3>
                        <p class="mt-1 text-xs font-semibold text-slate-500 dark:text-gray-400">
                            Prestigious Tech Credential
                        </p>

                        <p class="mt-4 text-xs leading-relaxed text-slate-600 dark:text-gray-400">
                            Kompetensi arsitektur aplikasi perangkat lunak web mencakup frontend modern, backend Laravel, database relational modeling, dan system deployment.
                        </p>
                    </div>

                    <div class="mt-6 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-4">
                        <span class="text-xs font-medium text-slate-500 dark:text-gray-400">Global Tech Academy</span>
                        <button type="button" 
                                class="open-cert-modal inline-flex items-center gap-1.5 text-xs font-bold text-purple-600 dark:text-purple-400 hover:text-purple-700 dark:hover:text-purple-300 transition"
                                data-cert-index="3">
                            <span>View Certificate</span>
                            <span class="text-sm">🔍</span>
                        </button>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         PROJECTS SECTION (Req 5: Likes Removed)
    ========================================================= -->
    <section id="projects" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28">
        <div class="mx-auto max-w-6xl">

            <div class="flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                <div class="max-w-2xl reveal">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                        Selected Work
                    </p>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Featured
                        <span class="text-slate-500 dark:text-gray-400">projects.</span>
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                        A curated selection of web systems and digital products I have engineered.
                    </p>
                </div>

                <a href="{{ route('projects') }}"
                    class="reveal inline-flex items-center gap-2 rounded-full border border-slate-300 dark:border-white/10 bg-white dark:bg-white/5 px-6 py-3 text-sm font-semibold text-slate-800 dark:text-white shadow-sm transition hover:border-slate-400 hover:bg-slate-50 dark:hover:bg-white/10">
                    <span>Explore All Projects</span>
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>

            <!-- Featured Project Cards -->
            <div class="mt-14 grid gap-8 md:grid-cols-2">

                <!-- Project 1: APAR & Hydrant -->
                <div class="project-card reveal stagger-1 group relative overflow-hidden rounded-3xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-blue-500/40 hover:shadow-2xl">
                    <div class="relative h-64 overflow-hidden bg-slate-100 dark:bg-slate-900 sm:h-72">
                        <img src="{{ asset('images/projects/apar&hydrant.png') }}"
                             alt="APAR & Hydrant Management System"
                             class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                        
                        <div class="status-live project-status">
                            <span class="status-dot"></span>
                            <span>Completed</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                            Management System • 2026
                        </p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors">
                            APAR & Hydrant Management System
                        </h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                            A centralized web application for digitizing fire extinguisher and hydrant inspections, QR code scanning, tracking expiration dates, and generating maintenance reports.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Laravel</span>
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">PHP</span>
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">MySQL</span>
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Tailwind CSS</span>
                        </div>

                        <div class="mt-8 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-5">
                            <a href="{{ route('projects.show', 'apar-hydrant') }}"
                                class="inline-flex items-center gap-1.5 text-sm font-bold text-blue-600 dark:text-blue-400 hover:text-blue-700 dark:hover:text-blue-300">
                                <span>View Project Details</span>
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project 2: AFinance -->
                <div class="project-card reveal stagger-2 group relative overflow-hidden rounded-3xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] shadow-sm transition-all duration-300 hover:-translate-y-1.5 hover:border-violet-500/40 hover:shadow-2xl">
                    <div class="relative flex h-64 items-center justify-center bg-gradient-to-br from-violet-600/10 via-indigo-600/10 to-purple-600/10 dark:from-violet-950/40 dark:to-slate-900 sm:h-72">
                        <div class="flex flex-col items-center gap-3">
                            <span class="flex h-20 w-20 items-center justify-center rounded-3xl bg-violet-600/20 text-3xl font-extrabold text-violet-600 dark:text-violet-400 shadow-inner">
                                AF
                            </span>
                            <span class="text-sm font-bold text-violet-700 dark:text-violet-300">AFinance Platform</span>
                        </div>

                        <div class="status-development project-status">
                            <span class="status-dot"></span>
                            <span>In Development</span>
                        </div>
                    </div>

                    <div class="p-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-violet-600 dark:text-violet-400">
                            Web Application • 2026
                        </p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white group-hover:text-violet-600 dark:group-hover:text-violet-400 transition-colors">
                            AFinance
                        </h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                            A personal financial management and bookkeeping platform designed to organize, monitor, and visualize daily income, expense workflows, and savings targets.
                        </p>

                        <div class="mt-6 flex flex-wrap gap-2">
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Laravel</span>
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">MySQL</span>
                            <span class="rounded-lg bg-slate-100 dark:bg-white/5 px-2.5 py-1 text-xs font-medium text-slate-700 dark:text-gray-300">Tailwind CSS</span>
                        </div>

                        <div class="mt-8 flex items-center justify-between border-t border-slate-100 dark:border-white/5 pt-5">
                            <a href="{{ route('projects.show', 'afinance') }}"
                                class="inline-flex items-center gap-1.5 text-sm font-bold text-violet-600 dark:text-violet-400 hover:text-violet-700 dark:hover:text-violet-300">
                                <span>View Project Details</span>
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         JOURNEY / TIMELINE (Req 4: Live Animated Scroll Line)
    ========================================================= -->
    <section id="experience" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28 bg-slate-50/50 dark:bg-transparent">
        <div class="mx-auto max-w-6xl">

            <div class="max-w-2xl reveal">
                <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                    My Journey
                </p>
                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                    Learning,
                    <span class="text-slate-500 dark:text-gray-400">building & growing.</span>
                </h2>
                <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                    The milestones that continue to shape my perspective and discipline as a software developer.
                </p>
            </div>

            <!-- Interactive Scroll-Driven Timeline Track (Req 4) -->
            <div id="timeline-wrapper" class="relative mt-16">

                <!-- Base Muted Line -->
                <div class="timeline-base-line absolute left-[7px] top-2 hidden h-[calc(100%-16px)] w-[2px] bg-slate-200 dark:bg-white/10 md:block rounded-full">
                </div>

                <!-- Live Animated Gradient Fill Line -->
                <div id="timeline-progress-line" class="absolute left-[7px] top-2 hidden w-[2px] bg-gradient-to-b from-blue-500 via-indigo-500 to-purple-500 md:block rounded-full shadow-[0_0_12px_rgba(59,130,246,0.6)]" style="height: 0px;">
                </div>

                <!-- Live Glowing Head Dot -->
                <div id="timeline-progress-head" class="absolute left-[3px] top-2 hidden h-3 w-3 -translate-y-1/2 rounded-full bg-blue-500 ring-4 ring-blue-500/30 shadow-[0_0_15px_#3b82f6] md:block opacity-0 transition-transform duration-75">
                </div>

                <!-- Milestone 1: Education -->
                <div class="timeline-item reveal relative grid gap-8 pb-16 md:grid-cols-[180px_1fr]">
                    <div class="timeline-node absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-slate-100 dark:border-[#08090D] bg-blue-500 md:block transition-all duration-300">
                    </div>

                    <div class="text-sm font-semibold text-slate-500 dark:text-gray-500 md:pl-8">
                        2026 — Present
                    </div>

                    <div class="md:pl-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-blue-600 dark:text-blue-400">
                            Education
                        </p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white">
                            Information Systems
                        </h3>
                        <p class="mt-1 font-semibold text-slate-600 dark:text-gray-400">
                            Universitas Gunadarma
                        </p>
                        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                            Studying Information Systems while actively developing practical skills in web development, database management, software design, and modern technologies.
                        </p>
                    </div>
                </div>

                <!-- Milestone 2: Development -->
                <div class="timeline-item reveal stagger-2 relative grid gap-8 pb-16 md:grid-cols-[180px_1fr]">
                    <div class="timeline-node absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-slate-100 dark:border-[#08090D] bg-violet-500 md:block transition-all duration-300">
                    </div>

                    <div class="text-sm font-semibold text-slate-500 dark:text-gray-500 md:pl-8">
                        2024 — 2026
                    </div>

                    <div class="md:pl-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-violet-600 dark:text-violet-400">
                            Development
                        </p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white">
                            Building Real-World Projects
                        </h3>
                        <p class="mt-1 font-semibold text-slate-600 dark:text-gray-400">
                            Fullstack Web Solutions
                        </p>
                        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                            Developed fullstack web applications exploring backend architecture, REST API design, relational databases, responsive frontend interfaces, and server deployment.
                        </p>
                    </div>
                </div>

                <!-- Milestone 3: Foundation -->
                <div class="timeline-item reveal stagger-3 relative grid gap-8 md:grid-cols-[180px_1fr]">
                    <div class="timeline-node absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-slate-100 dark:border-[#08090D] bg-cyan-500 md:block transition-all duration-300">
                    </div>

                    <div class="text-sm font-semibold text-slate-500 dark:text-gray-500 md:pl-8">
                        Previous
                    </div>

                    <div class="md:pl-8">
                        <p class="text-xs font-bold uppercase tracking-wider text-cyan-600 dark:text-cyan-400">
                            Foundation
                        </p>
                        <h3 class="mt-2 text-2xl font-bold text-slate-900 dark:text-white">
                            Software Development Foundations
                        </h3>
                        <p class="mt-1 font-semibold text-slate-600 dark:text-gray-400">
                            Vocational Software Engineering
                        </p>
                        <p class="mt-4 max-w-2xl text-sm leading-relaxed text-slate-600 dark:text-gray-400">
                            Built a strong technical foundation in computer programming, logic, algorithms, databases, and problem solving through vocational software engineering education.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         CONTACT SECTION
    ========================================================= -->
    <section id="contact" class="border-t border-slate-200/80 dark:border-white/5 px-6 py-28">
        <div class="mx-auto max-w-6xl">

            <div class="grid gap-12 lg:grid-cols-2">

                <!-- Left Column -->
                <div class="reveal">
                    <p class="text-sm font-semibold uppercase tracking-[0.25em] text-blue-600 dark:text-blue-400">
                        Get In Touch
                    </p>
                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl lg:text-5xl">
                        Let's build something
                        <span class="text-slate-500 dark:text-gray-400">meaningful.</span>
                    </h2>
                    <p class="mt-4 text-base leading-relaxed text-slate-600 dark:text-gray-400">
                        Whether you have an interesting project idea, a collaboration proposal, or just want to chat about web technology and software engineering, feel free to reach out.
                    </p>

                    <!-- Contact Details -->
                    <div class="mt-8 space-y-4 text-sm">
                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-500/10 text-blue-600 dark:text-blue-400 font-bold">
                                ✉️
                            </span>
                            <div>
                                <p class="text-xs font-bold text-slate-500 dark:text-gray-400">Email Address</p>
                                <p class="font-semibold text-slate-900 dark:text-white">andhika176.prtma@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-3">
                            <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 font-bold">
                                📍
                            </span>
                            <div>
                                <p class="text-xs font-bold text-slate-500 dark:text-gray-400">Location</p>
                                <p class="font-semibold text-slate-900 dark:text-white">Indonesia</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-3">
                        <button id="copy-email" type="button"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-300 dark:border-white/10 bg-white dark:bg-white/5 px-5 py-2.5 text-xs font-semibold text-slate-700 dark:text-white shadow-sm transition hover:border-slate-400 hover:bg-slate-50 dark:hover:bg-white/10">
                            <span>Copy Email</span>
                            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3"/></svg>
                        </button>

                        <a href="https://github.com/" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center gap-2 rounded-full border border-slate-300 dark:border-white/10 bg-white dark:bg-white/5 px-5 py-2.5 text-xs font-semibold text-slate-700 dark:text-white shadow-sm transition hover:border-slate-400 hover:bg-slate-50 dark:hover:bg-white/10">
                            <span>GitHub</span>
                            <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Interactive Contact Form -->
                <div class="reveal stagger-1 rounded-3xl border border-slate-200/90 dark:border-white/10 bg-white dark:bg-white/[0.03] p-8 shadow-sm backdrop-blur-xl">
                    <form onsubmit="event.preventDefault(); showToast('✨ Message received! Thanks for reaching out.'); this.reset();" class="space-y-5">
                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-gray-300">Your Name</label>
                            <input type="text" required placeholder="John Doe"
                                class="mt-2 w-full rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-white/5 px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-gray-500 outline-none transition focus:border-blue-500 focus:bg-white dark:focus:bg-white/10">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-gray-300">Your Email</label>
                            <input type="email" required placeholder="john@example.com"
                                class="mt-2 w-full rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-white/5 px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-gray-500 outline-none transition focus:border-blue-500 focus:bg-white dark:focus:bg-white/10">
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-gray-300">Message</label>
                            <textarea rows="4" required placeholder="Tell me about your project or inquiry..."
                                class="mt-2 w-full rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-white/5 px-4 py-3 text-sm text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-gray-500 outline-none transition focus:border-blue-500 focus:bg-white dark:focus:bg-white/10"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full rounded-xl bg-blue-600 py-3.5 text-sm font-bold text-white shadow-md transition hover:bg-blue-700 hover:shadow-lg">
                            Send Message
                        </button>
                    </form>
                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         FOOTER
    ========================================================= -->
    <footer class="border-t border-slate-200/80 bg-slate-50 px-6 py-12 dark:border-white/5 dark:bg-[#08090D]">
        <div class="mx-auto flex max-w-6xl flex-col items-center justify-between gap-6 text-center sm:flex-row sm:text-left">
            <div>
                <p class="text-sm font-bold text-slate-900 dark:text-white">
                    Andhika Pratama
                </p>
                <p class="mt-1 text-xs text-slate-500 dark:text-gray-400">
                    Web Developer & Information Systems Student
                </p>
            </div>

            <p class="text-xs text-slate-500 dark:text-gray-500">
                © {{ date('Y') }} Andhika Pratama. Built with Laravel & Tailwind CSS.
            </p>
        </div>
    </footer>


    <!-- =========================================================
         CERTIFICATE LIGHTBOX MODAL (Req 3)
    ========================================================= -->
    <div id="certificate-modal" class="lightbox-modal fixed inset-0 z-[100000] hidden items-center justify-center p-3 sm:p-6 md:p-8 bg-slate-950/85 backdrop-blur-2xl transition-all duration-300">
        
        <div class="relative flex flex-col w-full max-w-5xl max-h-[92vh] rounded-3xl bg-slate-900/95 border border-white/15 text-white shadow-2xl overflow-hidden backdrop-blur-3xl">

            <!-- Top Header Bar -->
            <div class="flex items-center justify-between border-b border-white/10 px-6 py-4 bg-slate-950/60">
                <div class="flex items-center gap-3">
                    <span id="modal-cert-badge" class="rounded-full bg-blue-500/20 text-blue-400 border border-blue-500/30 px-3 py-0.5 text-xs font-bold">
                        Certification
                    </span>
                    <h3 id="modal-cert-title" class="text-sm sm:text-base font-bold text-white truncate max-w-md">
                        Certificate Title
                    </h3>
                    <span id="modal-cert-counter" class="text-xs font-medium text-gray-400 hidden sm:inline">
                        1 / 4
                    </span>
                </div>

                <!-- Action Controls -->
                <div class="flex items-center gap-2">
                    <!-- Zoom Out -->
                    <button id="modal-zoom-out" type="button" class="flex h-8 w-8 items-center justify-center rounded-lg bg-white/10 text-gray-300 hover:bg-white/20 hover:text-white transition" title="Zoom Out (-)">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/></svg>
                    </button>
                    <!-- Zoom Indicator -->
                    <span id="modal-zoom-val" class="text-xs font-bold text-gray-300 min-w-[42px] text-center">
                        100%
                    </span>
                    <!-- Zoom In -->
                    <button id="modal-zoom-in" type="button" class="flex h-8 w-8 items-center justify-center rounded-lg bg-white/10 text-gray-300 hover:bg-white/20 hover:text-white transition" title="Zoom In (+)">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    </button>
                    <!-- Reset Zoom -->
                    <button id="modal-zoom-reset" type="button" class="hidden sm:flex px-2.5 py-1 text-xs font-bold rounded-lg bg-white/10 text-gray-300 hover:bg-white/20 hover:text-white transition" title="Fit to Screen (0)">
                        Fit
                    </button>
                    <!-- Fullscreen Toggle -->
                    <button id="modal-fullscreen-btn" type="button" class="hidden sm:flex h-8 w-8 items-center justify-center rounded-lg bg-white/10 text-gray-300 hover:bg-white/20 hover:text-white transition" title="Fullscreen (F)">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/></svg>
                    </button>
                    <!-- Download Link -->
                    <a id="modal-download-link" href="#" download="Certificate.jpg" class="flex h-8 w-8 items-center justify-center rounded-lg bg-white/10 text-gray-300 hover:bg-white/20 hover:text-white transition" title="Download Certificate">
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                    </a>
                    <!-- Direct Verification URL -->
                    <a id="modal-verify-link" href="#" target="_blank" rel="noopener noreferrer" class="hidden md:flex items-center gap-1 px-3 py-1 text-xs font-bold rounded-lg bg-blue-600 hover:bg-blue-500 text-white transition" title="Verify Online">
                        <span>Verify</span>
                        <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                    </a>
                    <!-- Close Button -->
                    <button id="modal-close-btn" type="button" class="ml-2 flex h-8 w-8 items-center justify-center rounded-full bg-white/15 text-white hover:bg-rose-600 transition" title="Close (Esc)">
                        ✕
                    </button>
                </div>
            </div>

            <!-- Viewport Container with Pan & Zoom -->
            <div id="modal-viewport" class="cert-drag-surface relative flex-1 min-h-[380px] sm:min-h-[460px] md:min-h-[520px] flex items-center justify-center overflow-hidden bg-slate-950 p-4 select-none">
                
                <!-- Main Image Element -->
                <img id="modal-cert-image" 
                     src="{{ asset('images/certificates/cert-hacktiv8-ai.jpg') }}" 
                     alt="Certificate Preview" 
                     class="cert-preview-img rounded-xl shadow-2xl pointer-events-none">

                <!-- Navigation Previous Arrow -->
                <button id="modal-prev-btn" type="button" class="absolute left-4 top-1/2 -translate-y-1/2 flex h-11 w-11 items-center justify-center rounded-full bg-slate-900/80 hover:bg-blue-600 text-white border border-white/20 shadow-xl backdrop-blur transition" title="Previous (←)">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>

                <!-- Navigation Next Arrow -->
                <button id="modal-next-btn" type="button" class="absolute right-4 top-1/2 -translate-y-1/2 flex h-11 w-11 items-center justify-center rounded-full bg-slate-900/80 hover:bg-blue-600 text-white border border-white/20 shadow-xl backdrop-blur transition" title="Next (→)">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>

                <!-- Floating Pan Hint -->
                <div id="modal-pan-hint" class="absolute bottom-4 left-1/2 -translate-x-1/2 px-3 py-1 rounded-full bg-black/60 text-[11px] text-gray-300 backdrop-blur pointer-events-none opacity-0 transition-opacity">
                    Drag to pan • Scroll to zoom
                </div>
            </div>

            <!-- Bottom Details Bar -->
            <div class="border-t border-white/10 px-6 py-4 bg-slate-950/80 flex flex-col md:flex-row md:items-center md:justify-between gap-3 text-xs">
                <div>
                    <p id="modal-cert-issuer" class="font-bold text-white">Issued by Hacktiv8 Indonesia</p>
                    <p id="modal-cert-desc" class="text-gray-400 mt-0.5 line-clamp-1">AI for Work & Career Readiness</p>
                </div>

                <div id="modal-skills-list" class="flex flex-wrap gap-1.5">
                    <span class="rounded bg-white/10 px-2 py-0.5 text-[11px] text-gray-300">Prompt Engineering</span>
                    <span class="rounded bg-white/10 px-2 py-0.5 text-[11px] text-gray-300">Google AI</span>
                </div>
            </div>

        </div>

    </div>


    <!-- =========================================================
         SCRIPTS
    ========================================================= -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {

            /* =====================================================
               CERTIFICATES DATA FOR RICH MODAL
            ===================================================== */
            const certificatesData = [
                {
                    title: "AI for Work & Career Readiness with Google AI Products",
                    category: "Course & Workshop",
                    badgeColor: "blue",
                    issuer: "Hacktiv8 Indonesia in partnership with Google AI",
                    year: "2026",
                    image: "{{ asset('images/certificates/cert-hacktiv8-ai.jpg') }}",
                    verifyUrl: "https://verify.hacktiv8.com/",
                    description: "Pelatihan intensif pemanfaatan Google AI tools, prompt engineering, generative AI workflows, dan kesiapan karir industri digital.",
                    skills: ["Google AI", "Prompt Engineering", "Generative AI", "Work Productivity", "Machine Learning"]
                },
                {
                    title: "Belajar Penerapan Data Science dengan Microsoft Fabric",
                    category: "Course & Certification",
                    badgeColor: "cyan",
                    issuer: "Dicoding Indonesia x Microsoft Fabric",
                    year: "2025",
                    image: "{{ asset('images/certificates/cert-dicoding-fabric.jpg') }}",
                    verifyUrl: "https://www.dicoding.com/certificates/98XW04G29XM3",
                    description: "Mempelajari alur end-to-end data science dengan Microsoft Fabric: eksplorasi data, pembuatan model machine learning, deployment, hingga monitoring dalam satu platform.",
                    skills: ["Microsoft Fabric", "Data Science", "Machine Learning", "Dataflows", "Power BI", "Analytics"]
                },
                {
                    title: "Belajar Dasar AI (Artificial Intelligence)",
                    category: "Course",
                    badgeColor: "indigo",
                    issuer: "Dicoding Academy Indonesia",
                    year: "2025",
                    image: "{{ asset('images/certificates/cert-dicoding-ai.jpg') }}",
                    verifyUrl: "https://www.dicoding.com/certificates/JMZVVO41RZN9",
                    description: "Fundamental konsep Artificial Intelligence, subbidang Machine Learning & Deep Learning, evaluasi model kecerdasan buatan, dan implementasi aplikatif.",
                    skills: ["Artificial Intelligence", "Machine Learning", "Neural Networks", "Model Evaluation", "Python"]
                },
                {
                    title: "Software Development & Fullstack Web Engineering",
                    category: "Achievement",
                    badgeColor: "purple",
                    issuer: "Global Tech Academy & Certification Body",
                    year: "2026",
                    image: "{{ asset('images/certificates/cert-software-dev.jpg') }}",
                    verifyUrl: "#",
                    description: "Kompetensi arsitektur aplikasi perangkat lunak web mencakup frontend modern, backend Laravel, database relational modeling, RESTful API, dan system deployment.",
                    skills: ["Laravel", "Fullstack Web", "REST API", "MySQL Database", "UI/UX Architecture", "Git"]
                }
            ];

            let activeCertIndex = 0;
            let currentZoom = 1;
            let panX = 0;
            let panY = 0;
            let isDragging = false;
            let startX = 0;
            let startY = 0;

            const certModal = document.getElementById('certificate-modal');
            const modalImage = document.getElementById('modal-cert-image');
            const modalTitle = document.getElementById('modal-cert-title');
            const modalBadge = document.getElementById('modal-cert-badge');
            const modalCounter = document.getElementById('modal-cert-counter');
            const modalIssuer = document.getElementById('modal-cert-issuer');
            const modalDesc = document.getElementById('modal-cert-desc');
            const modalSkills = document.getElementById('modal-skills-list');
            const modalZoomVal = document.getElementById('modal-zoom-val');
            const modalDownload = document.getElementById('modal-download-link');
            const modalVerify = document.getElementById('modal-verify-link');
            const modalPanHint = document.getElementById('modal-pan-hint');
            const modalViewport = document.getElementById('modal-viewport');

            function updateModalUI() {
                const cert = certificatesData[activeCertIndex];
                if (!cert) return;

                modalImage.src = cert.image;
                modalTitle.textContent = cert.title;
                modalBadge.textContent = cert.category;
                modalCounter.textContent = `${activeCertIndex + 1} / ${certificatesData.length}`;
                modalIssuer.textContent = `Issued by ${cert.issuer} • ${cert.year}`;
                modalDesc.textContent = cert.description;
                modalDownload.href = cert.image;
                modalVerify.href = cert.verifyUrl;

                if (cert.verifyUrl === '#') {
                    modalVerify.classList.add('hidden');
                } else {
                    modalVerify.classList.remove('hidden');
                }

                modalSkills.innerHTML = cert.skills.map(s => 
                    `<span class="rounded bg-white/10 px-2 py-0.5 text-[11px] text-gray-300">${s}</span>`
                ).join('');

                resetZoom();
            }

            function applyTransform() {
                modalImage.style.transform = `translate(${panX}px, ${panY}px) scale(${currentZoom})`;
                modalZoomVal.textContent = `${Math.round(currentZoom * 100)}%`;
                
                if (currentZoom > 1) {
                    modalPanHint.style.opacity = '1';
                } else {
                    modalPanHint.style.opacity = '0';
                }
            }

            function resetZoom() {
                currentZoom = 1;
                panX = 0;
                panY = 0;
                applyTransform();
            }

            function zoomIn() {
                currentZoom = Math.min(3.5, currentZoom + 0.25);
                applyTransform();
            }

            function zoomOut() {
                currentZoom = Math.max(0.6, currentZoom - 0.25);
                if (currentZoom <= 1) {
                    panX = 0;
                    panY = 0;
                }
                applyTransform();
            }

            function openCertificateModal(index) {
                activeCertIndex = index;
                updateModalUI();
                certModal.classList.remove('hidden');
                certModal.classList.add('flex', 'active');
                document.body.style.overflow = 'hidden';
            }

            function closeCertificateModal() {
                certModal.classList.add('hidden');
                certModal.classList.remove('flex', 'active');
                document.body.style.overflow = '';
                resetZoom();
            }

            function nextCertificate() {
                activeCertIndex = (activeCertIndex + 1) % certificatesData.length;
                updateModalUI();
            }

            function prevCertificate() {
                activeCertIndex = (activeCertIndex - 1 + certificatesData.length) % certificatesData.length;
                updateModalUI();
            }

            // Trigger Buttons
            document.querySelectorAll('.open-cert-modal').forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    const index = parseInt(button.dataset.certIndex || '0');
                    openCertificateModal(index);
                });
            });

            // Modal Controls
            document.getElementById('modal-close-btn').addEventListener('click', closeCertificateModal);
            document.getElementById('modal-next-btn').addEventListener('click', nextCertificate);
            document.getElementById('modal-prev-btn').addEventListener('click', prevCertificate);
            document.getElementById('modal-zoom-in').addEventListener('click', zoomIn);
            document.getElementById('modal-zoom-out').addEventListener('click', zoomOut);
            document.getElementById('modal-zoom-reset').addEventListener('click', resetZoom);

            document.getElementById('modal-fullscreen-btn').addEventListener('click', () => {
                if (!document.fullscreenElement) {
                    certModal.requestFullscreen().catch(() => {});
                } else {
                    document.exitFullscreen().catch(() => {});
                }
            });

            // Close on backdrop click
            certModal.addEventListener('click', (e) => {
                if (e.target === certModal) {
                    closeCertificateModal();
                }
            });

            // Pan by Dragging
            modalViewport.addEventListener('mousedown', (e) => {
                if (currentZoom <= 1) return;
                isDragging = true;
                startX = e.clientX - panX;
                startY = e.clientY - panY;
                modalViewport.classList.add('is-dragging');
            });

            window.addEventListener('mousemove', (e) => {
                if (!isDragging) return;
                panX = e.clientX - startX;
                panY = e.clientY - startY;
                applyTransform();
            });

            window.addEventListener('mouseup', () => {
                isDragging = false;
                modalViewport.classList.remove('is-dragging');
            });

            // Mouse wheel zoom inside viewport
            modalViewport.addEventListener('wheel', (e) => {
                e.preventDefault();
                if (e.deltaY < 0) {
                    zoomIn();
                } else {
                    zoomOut();
                }
            }, { passive: false });

            // Keyboard Shortcuts
            window.addEventListener('keydown', (e) => {
                if (certModal.classList.contains('hidden')) return;

                if (e.key === 'Escape') closeCertificateModal();
                if (e.key === 'ArrowRight') nextCertificate();
                if (e.key === 'ArrowLeft') prevCertificate();
                if (e.key === '+' || e.key === '=') zoomIn();
                if (e.key === '-' || e.key === '_') zoomOut();
                if (e.key === '0') resetZoom();
            });


            /* =====================================================
               LIVE SCROLL-DRIVEN TIMELINE ANIMATION (Req 4)
            ===================================================== */
            const timelineWrapper = document.getElementById('timeline-wrapper');
            const timelineProgressLine = document.getElementById('timeline-progress-line');
            const timelineProgressHead = document.getElementById('timeline-progress-head');
            const timelineItems = document.querySelectorAll('.timeline-item');

            function updateTimeline() {
                if (!timelineWrapper || !timelineProgressLine) return;

                const rect = timelineWrapper.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                const triggerPoint = windowHeight * 0.65; // Trigger at 65% of screen

                const totalHeight = timelineWrapper.offsetHeight - 16;
                let scrollOffset = triggerPoint - rect.top;
                let progressHeight = Math.max(0, Math.min(totalHeight, scrollOffset));

                timelineProgressLine.style.height = `${progressHeight}px`;

                if (timelineProgressHead) {
                    timelineProgressHead.style.transform = `translateY(${progressHeight}px)`;
                    timelineProgressHead.style.opacity = progressHeight > 10 ? '1' : '0';
                }

                timelineItems.forEach(item => {
                    const node = item.querySelector('.timeline-node');
                    const itemRect = item.getBoundingClientRect();
                    const itemOffset = triggerPoint - itemRect.top;

                    if (itemOffset >= 0) {
                        if (node) {
                            node.style.transform = 'scale(1.25)';
                            node.style.boxShadow = '0 0 15px rgba(59, 130, 246, 0.7)';
                        }
                    } else {
                        if (node) {
                            node.style.transform = 'scale(1)';
                            node.style.boxShadow = 'none';
                        }
                    }
                });
            }

            window.addEventListener('scroll', updateTimeline, { passive: true });
            window.addEventListener('resize', updateTimeline, { passive: true });
            updateTimeline();


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
                    // Sun icon (click to switch to light)
                    themeIcon.innerHTML = `
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1.5m0 15V21m9-9h-1.5M4.5 12H3m15.364-6.364-1.06 1.06M6.697 17.303l-1.06 1.061m12.728 0-1.06-1.061M6.697 6.697l-1.06-1.06M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />
                    `;
                } else {
                    // Moon icon (click to switch to dark)
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

                    showToast(
                        nextTheme === 'dark' ? '🌙 Dark mode activated' : '☀️ Light mode activated',
                        'info'
                    );
                });
            }


            /* =====================================================
               UNIVERSAL CUSTOM CURSOR (Req 9)
            ===================================================== */
            const cursor = document.getElementById('custom-cursor');
            const cursorLabel = document.getElementById('cursor-label');
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

                // Links & Buttons
                document.querySelectorAll('a, button, input, textarea').forEach(el => {
                    el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
                    el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
                });

                // Project Cards
                document.querySelectorAll('.project-card').forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        cursor.classList.add('project-hover');
                        cursor.classList.remove('hover');
                        if (cursorLabel) cursorLabel.textContent = 'VIEW';
                    });
                    card.addEventListener('mouseleave', () => {
                        cursor.classList.remove('project-hover');
                    });
                });

                // Certificate Cards
                document.querySelectorAll('.certificate-card').forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        cursor.classList.add('project-hover');
                        cursor.classList.remove('hover');
                        if (cursorLabel) cursorLabel.textContent = 'ZOOM';
                    });
                    card.addEventListener('mouseleave', () => {
                        cursor.classList.remove('project-hover');
                    });
                });

                // Education Cards
                document.querySelectorAll('.education-card').forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        cursor.classList.add('project-hover');
                        cursor.classList.remove('hover');
                        if (cursorLabel) cursorLabel.textContent = 'VISIT';
                    });
                    card.addEventListener('mouseleave', () => {
                        cursor.classList.remove('project-hover');
                    });
                });

                document.addEventListener('mouseleave', () => cursor.classList.remove('visible'));
                document.addEventListener('mouseenter', () => cursor.classList.add('visible'));
            }


            /* =====================================================
               TYPING EFFECT IN HERO
            ===================================================== */
            const typingText = document.getElementById('typing-text');
            if (typingText) {
                const words = [
                    'Web Developer',
                    'Information Systems Student',
                    'Problem Solver',
                    'Fullstack Enthusiast'
                ];
                let wordIndex = 0;
                let charIndex = 0;
                let isDeleting = false;

                function typeEffect() {
                    const currentWord = words[wordIndex];
                    if (isDeleting) {
                        typingText.textContent = currentWord.substring(0, charIndex - 1);
                        charIndex--;
                    } else {
                        typingText.textContent = currentWord.substring(0, charIndex + 1);
                        charIndex++;
                    }

                    let speed = isDeleting ? 40 : 90;

                    if (!isDeleting && charIndex === currentWord.length) {
                        speed = 1800; // Pause at end of word
                        isDeleting = true;
                    } else if (isDeleting && charIndex === 0) {
                        isDeleting = false;
                        wordIndex = (wordIndex + 1) % words.length;
                        speed = 400;
                    }

                    setTimeout(typeEffect, speed);
                }
                typeEffect();
            }


            /* =====================================================
               SCROLL REVEAL OBSERVER
            ===================================================== */
            const reveals = document.querySelectorAll('.reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('show');
                        }
                    });
                }, { threshold: 0.1 });

                reveals.forEach(r => observer.observe(r));
            } else {
                reveals.forEach(r => r.classList.add('show'));
            }


            /* =====================================================
               NAVBAR SCROLL SHADOW
            ===================================================== */
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 20) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }, { passive: true });


            /* =====================================================
               SCROLL PROGRESS BAR
            ===================================================== */
            const scrollProgress = document.getElementById('scroll-progress');
            function updateScrollProgress() {
                if (!scrollProgress) return;
                const scrollTop = window.scrollY;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const progress = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
                scrollProgress.style.width = `${progress}%`;
            }
            window.addEventListener('scroll', updateScrollProgress, { passive: true });
            updateScrollProgress();


            /* =====================================================
               BACK TO TOP BUTTON
            ===================================================== */
            const backToTop = document.getElementById('back-to-top');
            function handleBackToTop() {
                if (!backToTop) return;
                if (window.scrollY > 400) {
                    backToTop.classList.add('show');
                } else {
                    backToTop.classList.remove('show');
                }
            }
            window.addEventListener('scroll', handleBackToTop, { passive: true });
            handleBackToTop();

            if (backToTop) {
                backToTop.addEventListener('click', () => {
                    window.scrollTo({ top: 0, behavior: 'smooth' });
                });
            }


            /* =====================================================
               COPY EMAIL
            ===================================================== */
            const copyEmailButton = document.getElementById('copy-email');
            if (copyEmailButton) {
                copyEmailButton.addEventListener('click', async () => {
                    try {
                        await navigator.clipboard.writeText('andhika176.prtma@gmail.com');
                        showToast('📋 Email copied to clipboard!');
                    } catch (e) {
                        showToast('Unable to copy email', 'info');
                    }
                });
            }


            /* =====================================================
               MOBILE MENU
            ===================================================== */
            const mobileBtn = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');
                });
                document.querySelectorAll('.mobile-link').forEach(l => {
                    l.addEventListener('click', () => mobileMenu.classList.add('hidden'));
                });
            }

        });


        /* =====================================================
           GLOBAL TOAST FUNCTION
        ===================================================== */
        function showToast(message, type = 'success') {
            const container = document.getElementById('toast-container');
            if (!container) return;

            const toast = document.createElement('div');
            toast.className = `toast toast-${type}`;
            toast.innerHTML = `
                <span>${message}</span>
            `;
            container.appendChild(toast);

            setTimeout(() => {
                toast.classList.add('hide');
                setTimeout(() => toast.remove(), 320);
            }, 2600);
        }
    </script>

</body>

</html>
