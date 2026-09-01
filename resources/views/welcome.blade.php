<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Andhika Pratama — Web Developer and Information Systems Student. Explore my projects, skills, experience, and technology journey.">

    <title>Andhika Pratama — Web Developer</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* =========================================================
   EXTRA FEATURES
========================================================= */

        /* ---------------------------------------------------------
   THEME
--------------------------------------------------------- */

        html {
            transition: background-color .3s ease, color .3s ease;
        }

        body {
            transition:
                background-color .3s ease,
                color .3s ease;
        }

        /* Light mode */
        body.light-mode {
            background: #f8fafc !important;
            color: #0f172a !important;
        }

        body.light-mode #navbar.scrolled {
            background: rgba(248, 250, 252, .82);
            border-color: rgba(15, 23, 42, .08);
            box-shadow: 0 10px 40px rgba(15, 23, 42, .08);
        }

        body.light-mode .light-card {
            background: rgba(255, 255, 255, .75);
            border-color: rgba(15, 23, 42, .08);
        }

        body.light-mode .light-text {
            color: #475569 !important;
        }

        body.light-mode .light-heading {
            color: #0f172a !important;
        }

        body.light-mode .light-border {
            border-color: rgba(15, 23, 42, .1) !important;
        }

        body.light-mode .mobile-light {
            background: rgba(255, 255, 255, .95);
        }

        body.light-mode .project-card {
            background: rgba(255, 255, 255, .75);
            border-color: rgba(15, 23, 42, .08);
        }

        body.light-mode footer {
            border-color: rgba(15, 23, 42, .08);
        }


        /* ---------------------------------------------------------
   THEME BUTTON
--------------------------------------------------------- */

        .theme-toggle {
            width: 42px;
            height: 42px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 999px;
            border: 1px solid rgba(255, 255, 255, .1);
            background: rgba(255, 255, 255, .03);
            transition:
                transform .25s ease,
                background-color .25s ease,
                border-color .25s ease;
        }

        .theme-toggle:hover {
            transform: translateY(-2px) rotate(8deg);
            background: rgba(255, 255, 255, .08);
            border-color: rgba(255, 255, 255, .2);
        }

        body.light-mode .theme-toggle {
            border-color: rgba(15, 23, 42, .1);
            background: rgba(15, 23, 42, .04);
        }


        /* ---------------------------------------------------------
   STATUS BADGE
--------------------------------------------------------- */

        .project-status {
            position: absolute;
            top: 16px;
            left: 16px;
            z-index: 10;

            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 7px 11px;

            border-radius: 999px;

            font-size: 11px;
            font-weight: 600;

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            border: 1px solid rgba(255, 255, 255, .1);
        }

        .status-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
        }

        .status-live {
            color: #86efac;
            background: rgba(34, 197, 94, .12);
            border-color: rgba(34, 197, 94, .2);
        }

        .status-live .status-dot {
            background: #4ade80;
            box-shadow: 0 0 10px rgba(74, 222, 128, .7);
        }

        .status-development {
            color: #fcd34d;
            background: rgba(234, 179, 8, .12);
            border-color: rgba(234, 179, 8, .2);
        }

        .status-development .status-dot {
            background: #facc15;
        }

        .status-completed {
            color: #93c5fd;
            background: rgba(59, 130, 246, .12);
            border-color: rgba(59, 130, 246, .2);
        }

        .status-completed .status-dot {
            background: #60a5fa;
        }


        /* ---------------------------------------------------------
   LIKE BUTTON
--------------------------------------------------------- */

        .project-like {
            position: absolute;
            top: 16px;
            right: 16px;
            z-index: 20;

            display: inline-flex;
            align-items: center;
            gap: 6px;

            min-width: 46px;
            height: 36px;

            padding: 0 10px;

            border-radius: 999px;

            border: 1px solid rgba(255, 255, 255, .1);
            background: rgba(8, 9, 13, .65);

            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);

            color: #9ca3af;

            transition:
                transform .25s ease,
                color .25s ease,
                background-color .25s ease,
                border-color .25s ease;
        }

        .project-like:hover {
            transform: scale(1.06);
            color: #fda4af;
            border-color: rgba(244, 63, 94, .3);
        }

        .project-like.liked {
            color: #fb7185;
            background: rgba(244, 63, 94, .12);
            border-color: rgba(244, 63, 94, .25);
        }

        .project-like.liked svg {
            fill: currentColor;
        }

        .like-count {
            font-size: 11px;
            font-weight: 600;
        }


        /* ---------------------------------------------------------
   TOAST
--------------------------------------------------------- */

        #toast-container {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 10000;

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

            padding: 13px 16px;

            border: 1px solid rgba(255, 255, 255, .1);
            border-radius: 14px;

            background: rgba(15, 17, 24, .92);

            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);

            box-shadow: 0 20px 50px rgba(0, 0, 0, .25);

            font-size: 13px;

            animation:
                toastIn .4s cubic-bezier(.22, 1, .36, 1) forwards;
        }

        .toast.hide {
            animation: toastOut .35s ease forwards;
        }

        .toast-success {
            color: #86efac;
        }

        .toast-info {
            color: #93c5fd;
        }

        .toast-icon {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateY(15px) scale(.95);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes toastOut {
            from {
                opacity: 1;
                transform: translateY(0) scale(1);
            }

            to {
                opacity: 0;
                transform: translateY(15px) scale(.95);
            }
        }


        /* ---------------------------------------------------------
   SCROLL PROGRESS
--------------------------------------------------------- */

        #scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10001;

            width: 0;
            height: 3px;

            background: linear-gradient(90deg,
                    #60a5fa,
                    #8b5cf6,
                    #a855f7);

            box-shadow: 0 0 12px rgba(96, 165, 250, .4);

            transition: width .08s linear;
        }


        /* ---------------------------------------------------------
   BACK TO TOP
--------------------------------------------------------- */

        #back-to-top {
            position: fixed;
            right: 24px;
            bottom: 24px;
            z-index: 9000;

            width: 46px;
            height: 46px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 999px;

            border: 1px solid rgba(255, 255, 255, .1);
            background: rgba(15, 17, 24, .8);

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            color: white;

            opacity: 0;
            visibility: hidden;
            transform: translateY(15px);

            transition:
                opacity .3s ease,
                visibility .3s ease,
                transform .3s ease,
                background-color .25s ease;
        }

        #back-to-top.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        #back-to-top:hover {
            background: rgba(255, 255, 255, .1);
            transform: translateY(-3px);
        }


        /* ---------------------------------------------------------
   CURRENTLY BUILDING
--------------------------------------------------------- */

        .building-card {
            position: relative;
            overflow: hidden;
        }

        .building-card::before {
            content: "";

            position: absolute;
            inset: 0;

            background:
                radial-gradient(circle at 80% 20%,
                    rgba(96, 165, 250, .12),
                    transparent 35%);

            pointer-events: none;
        }

        .building-pulse {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #60a5fa;

            box-shadow:
                0 0 0 0 rgba(96, 165, 250, .5);

            animation: buildingPulse 2s infinite;
        }

        @keyframes buildingPulse {
            0% {
                box-shadow: 0 0 0 0 rgba(96, 165, 250, .5);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(96, 165, 250, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(96, 165, 250, 0);
            }
        }


        /* ---------------------------------------------------------
   CERTIFICATE
--------------------------------------------------------- */

        .certificate-card {
            transition:
                transform .35s cubic-bezier(.22, 1, .36, 1),
                border-color .3s ease,
                box-shadow .35s ease;
        }

        .certificate-card:hover {
            transform: translateY(-6px);
            border-color: rgba(96, 165, 250, .25);
            box-shadow: 0 20px 60px rgba(59, 130, 246, .08);
        }

        .certificate-icon {
            transition: transform .35s ease;
        }

        .certificate-card:hover .certificate-icon {
            transform: scale(1.08) rotate(-4deg);
        }


        /* ---------------------------------------------------------
   EXPERIENCE CARD
--------------------------------------------------------- */

        .experience-card {
            transition:
                transform .35s ease,
                border-color .3s ease;
        }

        .experience-card:hover {
            transform: translateX(5px);
            border-color: rgba(255, 255, 255, .18);
        }


        /* ---------------------------------------------------------
   DOWNLOAD CV
--------------------------------------------------------- */

        .cv-button {
            position: relative;
            overflow: hidden;
        }

        .cv-button::after {
            content: "";

            position: absolute;
            top: 0;
            left: -100%;

            width: 60%;
            height: 100%;

            background: linear-gradient(90deg,
                    transparent,
                    rgba(255, 255, 255, .2),
                    transparent);

            transform: skewX(-20deg);

            transition: left .6s ease;
        }

        .cv-button:hover::after {
            left: 140%;
        }


        /* ---------------------------------------------------------
   MOBILE
--------------------------------------------------------- */

        @media (max-width: 767px) {

            #toast-container {
                right: 16px;
                left: 16px;
                bottom: 16px;
            }

            .toast {
                min-width: 0;
                width: 100%;
            }

            #back-to-top {
                right: 16px;
                bottom: 76px;
            }

        }

        /* =========================================================
           GLOBAL
        ========================================================= */

        html {
            scroll-behavior: smooth;
        }

        body {
            overflow-x: hidden;
        }


        /* =========================================================
           STEP 1 — SCROLL REVEAL
        ========================================================= */

        .reveal {
            opacity: 0;
            transform: translateY(35px);
            transition:
                opacity 0.8s ease,
                transform 0.8s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal.show {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-45px);
            transition:
                opacity 0.8s ease,
                transform 0.8s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal-left.show {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(45px);
            transition:
                opacity 0.8s ease,
                transform 0.8s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal-right.show {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-scale {
            opacity: 0;
            transform: scale(.94);
            transition:
                opacity 0.8s ease,
                transform 0.8s cubic-bezier(.22, 1, .36, 1);
        }

        .reveal-scale.show {
            opacity: 1;
            transform: scale(1);
        }

        .stagger-1 {
            transition-delay: .08s;
        }

        .stagger-2 {
            transition-delay: .16s;
        }

        .stagger-3 {
            transition-delay: .24s;
        }

        .stagger-4 {
            transition-delay: .32s;
        }

        .stagger-5 {
            transition-delay: .40s;
        }

        .stagger-6 {
            transition-delay: .48s;
        }


        /* =========================================================
           STEP 2 — NAVBAR
        ========================================================= */

        #navbar {
            transition:
                background-color .35s ease,
                backdrop-filter .35s ease,
                border-color .35s ease,
                box-shadow .35s ease;
        }

        #navbar.scrolled {
            background: rgba(8, 9, 13, .72);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, .06);
            box-shadow: 0 10px 40px rgba(0, 0, 0, .15);
        }

        .nav-link {
            position: relative;
            transition: color .25s ease;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -8px;
            width: 0;
            height: 2px;
            border-radius: 999px;
            background: #60a5fa;
            transform: translateX(-50%);
            transition: width .3s ease;
        }

        .nav-link.active {
            color: white;
        }

        .nav-link.active::after {
            width: 18px;
        }


        /* =========================================================
           STEP 3 — PROJECT HOVER
        ========================================================= */

        .project-card {
            position: relative;
            transition:
                transform .45s cubic-bezier(.22, 1, .36, 1),
                border-color .35s ease,
                box-shadow .45s ease;
        }

        .project-card:hover {
            transform: translateY(-7px);
        }

        .project-image {
            transition:
                transform .7s cubic-bezier(.22, 1, .36, 1),
                filter .5s ease;
        }

        .project-card:hover .project-image {
            transform: scale(1.055);
        }

        .project-card:hover .project-image-container {
            transform: scale(1.02);
        }

        .project-overlay {
            opacity: 0;
            transform: translateY(12px);
            transition:
                opacity .4s ease,
                transform .4s cubic-bezier(.22, 1, .36, 1);
        }

        .project-card:hover .project-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .project-glow {
            position: absolute;
            width: 180px;
            height: 180px;
            border-radius: 999px;
            filter: blur(80px);
            opacity: 0;
            pointer-events: none;
            transition: opacity .5s ease;
        }

        .project-card:hover .project-glow {
            opacity: .18;
        }

        .project-card[data-color="red"]:hover {
            box-shadow: 0 25px 70px rgba(239, 68, 68, .08);
        }

        .project-card[data-color="violet"]:hover {
            box-shadow: 0 25px 70px rgba(139, 92, 246, .08);
        }

        .project-card[data-color="purple"]:hover {
            box-shadow: 0 25px 70px rgba(168, 85, 247, .08);
        }

        .project-card[data-color="cyan"]:hover {
            box-shadow: 0 25px 70px rgba(6, 182, 212, .08);
        }

        .project-card[data-color="pink"]:hover {
            box-shadow: 0 25px 70px rgba(236, 72, 153, .08);
        }

        .project-card[data-color="blue"]:hover {
            box-shadow: 0 25px 70px rgba(59, 130, 246, .08);
        }


        /* =========================================================
           STEP 4 — ANIMATED BACKGROUND
        ========================================================= */

        .background-orb {
            position: absolute;
            border-radius: 999px;
            pointer-events: none;
            will-change: transform;
        }

        .orb-one {
            animation: orbFloatOne 18s ease-in-out infinite;
        }

        .orb-two {
            animation: orbFloatTwo 22s ease-in-out infinite;
        }

        .orb-three {
            animation: orbFloatThree 20s ease-in-out infinite;
        }

        @keyframes orbFloatOne {

            0%,
            100% {
                transform: translate3d(0, 0, 0) scale(1);
            }

            50% {
                transform: translate3d(35px, -25px, 0) scale(1.08);
            }
        }

        @keyframes orbFloatTwo {

            0%,
            100% {
                transform: translate3d(0, 0, 0) scale(1);
            }

            50% {
                transform: translate3d(-30px, 30px, 0) scale(.94);
            }
        }

        @keyframes orbFloatThree {

            0%,
            100% {
                transform: translate3d(0, 0, 0);
            }

            50% {
                transform: translate3d(20px, -20px, 0);
            }
        }

        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            border-radius: 50%;
            background: rgba(255, 255, 255, .35);
            pointer-events: none;
            animation: particleFloat linear infinite;
        }

        @keyframes particleFloat {

            0% {
                opacity: 0;
                transform: translateY(0);
            }

            20% {
                opacity: .7;
            }

            80% {
                opacity: .7;
            }

            100% {
                opacity: 0;
                transform: translateY(-80px);
            }
        }


        /* =========================================================
           STEP 5 — HERO TYPING
        ========================================================= */

        .typing-cursor {
            display: inline-block;
            width: 3px;
            height: .85em;
            margin-left: 5px;
            vertical-align: -2px;
            border-radius: 999px;
            background: #60a5fa;
            animation: cursorBlink .9s infinite;
        }

        @keyframes cursorBlink {

            0%,
            45% {
                opacity: 1;
            }

            46%,
            100% {
                opacity: 0;
            }
        }

        .soft-pulse {
            animation: softPulse 2s ease-in-out infinite;
        }

        @keyframes softPulse {

            0%,
            100% {
                opacity: .5;
                transform: scale(.9);
            }

            50% {
                opacity: 1;
                transform: scale(1.15);
            }
        }


        /* =========================================================
           STEP 6 — SKILL PROGRESS
        ========================================================= */

        .skill-progress {
            width: 0;
            transition:
                width 1.3s cubic-bezier(.22, 1, .36, 1);
        }

        .skill-progress.animate {
            width: var(--progress);
        }


        /* =========================================================
           STEP 7 — PROJECT FILTER / LOAD MORE
        ========================================================= */

        .filter-button {
            transition:
                background-color .25s ease,
                color .25s ease,
                border-color .25s ease,
                transform .25s ease;
        }

        .filter-button:hover {
            transform: translateY(-1px);
        }

        .filter-button.active {
            background: white;
            color: #08090D;
            border-color: white;
        }

        .project-hidden {
            display: none;
        }

        .project-card.filter-enter {
            animation: projectEnter .5s cubic-bezier(.22, 1, .36, 1) both;
        }

        @keyframes projectEnter {

            from {
                opacity: 0;
                transform: translateY(25px) scale(.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }


        /* =========================================================
           STEP 8 — CUSTOM CURSOR
        ========================================================= */

        @media (min-width: 768px) {

            body.custom-cursor-active {
                cursor: none;
            }

            body.custom-cursor-active a,
            body.custom-cursor-active button {
                cursor: none;
            }

            #custom-cursor {
                position: fixed;
                left: 0;
                top: 0;
                z-index: 9999;
                width: 12px;
                height: 12px;
                border: 1px solid rgba(255, 255, 255, .7);
                border-radius: 50%;
                pointer-events: none;
                opacity: 0;
                transform: translate(-50%, -50%);
                transition:
                    width .25s ease,
                    height .25s ease,
                    background-color .25s ease,
                    border-color .25s ease,
                    opacity .25s ease;
                mix-blend-mode: difference;
            }

            #custom-cursor.visible {
                opacity: 1;
            }

            #custom-cursor.hover {
                width: 38px;
                height: 38px;
                border-color: rgba(255, 255, 255, .9);
                background: rgba(255, 255, 255, .05);
            }

            #custom-cursor.project-hover {
                width: 58px;
                height: 58px;
                border-color: rgba(255, 255, 255, .85);
                background: rgba(255, 255, 255, .04);
            }

            #custom-cursor::after {
                content: "";
                position: absolute;
                left: 50%;
                top: 50%;
                width: 3px;
                height: 3px;
                border-radius: 50%;
                background: white;
                transform: translate(-50%, -50%);
            }

            #cursor-label {
                position: absolute;
                left: 50%;
                top: 50%;
                font-size: 8px;
                font-weight: 600;
                letter-spacing: .08em;
                color: white;
                opacity: 0;
                transform: translate(-50%, -50%);
                transition: opacity .2s ease;
            }

            #custom-cursor.project-hover #cursor-label {
                opacity: 1;
            }
        }

        @media (max-width: 767px) {
            #custom-cursor {
                display: none;
            }
        }


        /* =========================================================
           ACCESSIBILITY
        ========================================================= */

        @media (prefers-reduced-motion: reduce) {

            html {
                scroll-behavior: auto;
            }

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: .01ms !important;
            }

            .reveal,
            .reveal-left,
            .reveal-right,
            .reveal-scale {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>


<body class="bg-[#08090D] text-white antialiased custom-cursor-active">

    <!-- SCROLL PROGRESS -->
    <div id="scroll-progress"></div>


    <!-- TOAST CONTAINER -->
    <div id="toast-container"></div>


    <!-- BACK TO TOP -->
    <button id="back-to-top" type="button" aria-label="Back to top">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8"
            stroke="currentColor" class="h-5 w-5">

            <path stroke-linecap="round" stroke-linejoin="round" d="m5 15 7-7 7 7" />

        </svg>

    </button>


    <!-- =========================================================
         CUSTOM CURSOR — STEP 8
    ========================================================= -->

    <div id="custom-cursor">
        <span id="cursor-label">VIEW</span>
    </div>


    <!-- =========================================================
         NAVBAR — STEP 2
    ========================================================= -->

    <header id="navbar" class="fixed left-0 right-0 top-0 z-50 border-b border-transparent">

        <nav class="mx-auto flex max-w-6xl items-center justify-between px-6 py-5">

            <!-- Logo -->

            <a href="/" class="text-xl font-bold tracking-tight">

                Andhika<span class="text-blue-500">.</span>

            </a>


            <!-- Desktop Navigation -->

            <div class="hidden items-center gap-8 md:flex">

                <a href="#about" data-section="about" class="nav-link text-sm text-gray-400">
                    About
                </a>

                <a href="#skills" data-section="skills" class="nav-link text-sm text-gray-400">
                    Skills
                </a>

                <a href="#projects" data-section="projects" class="nav-link text-sm text-gray-400">
                    Projects
                </a>

                <a href="#experience" data-section="experience" class="nav-link text-sm text-gray-400">
                    Experience
                </a>

                <a href="#certificates" data-section="certificates" class="nav-link text-sm text-gray-400">
                    Certificates
                </a>

            </div>


            <!-- Contact -->

            <!-- Navbar Actions -->

            <div class="hidden items-center gap-3 md:flex">

                <!-- Theme Toggle -->

                <button id="theme-toggle" type="button" class="theme-toggle" aria-label="Toggle dark and light mode">

                    <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="h-5 w-5">

                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 3v1.5m0 15V21m9-9h-1.5M4.5 12H3m15.364-6.364-1.06 1.06M6.697 17.303l-1.06 1.061m12.728 0-1.06-1.061M6.697 6.697l-1.06-1.06M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z" />

                    </svg>

                </button>


                <!-- Download CV -->

                <a href="{{ asset('cv/Andhika-Pratama-CV.pdf') }}" download
                    class="cv-button rounded-full border border-white/10 px-5 py-2.5 text-sm font-medium transition hover:border-white/30 hover:bg-white/5">

                    <span class="inline-flex items-center gap-2">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="h-4 w-4">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M7.5 12l4.5 4.5m0 0 4.5-4.5M12 16.5V3" />

                        </svg>

                        CV

                    </span>

                </a>


                <!-- Contact -->

                <a href="#contact"
                    class="rounded-full border border-white/10 px-5 py-2.5 text-sm font-medium transition hover:border-white/30 hover:bg-white/5">

                    Contact

                </a>

            </div>


            <!-- Mobile Menu Button -->

            <button id="mobile-menu-button" type="button"
                class="rounded-lg border border-white/10 p-2 text-gray-300 transition hover:bg-white/5 md:hidden"
                aria-label="Open navigation menu">

                <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6">

                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />

                </svg>

            </button>

        </nav>


        <!-- Mobile Menu -->

        <div id="mobile-menu"
            class="mx-4 hidden rounded-2xl border border-white/10 bg-[#0d0f14]/95 p-4 shadow-2xl backdrop-blur-xl md:hidden">

            <div class="flex flex-col gap-1">

                <a href="#about"
                    class="mobile-link rounded-xl px-4 py-3 text-sm text-gray-400 transition hover:bg-white/5 hover:text-white">
                    About
                </a>

                <a href="#skills"
                    class="mobile-link rounded-xl px-4 py-3 text-sm text-gray-400 transition hover:bg-white/5 hover:text-white">
                    Skills
                </a>

                <a href="#projects"
                    class="mobile-link rounded-xl px-4 py-3 text-sm text-gray-400 transition hover:bg-white/5 hover:text-white">
                    Projects
                </a>

                <a href="#experience"
                    class="mobile-link rounded-xl px-4 py-3 text-sm text-gray-400 transition hover:bg-white/5 hover:text-white">
                    Experience
                </a>

                <a href="#certificates"
                    class="mobile-link rounded-xl px-4 py-3 text-sm text-gray-400 transition hover:bg-white/5 hover:text-white">
                    Certificates
                </a>

                <a href="#contact"
                    class="mobile-link mt-2 rounded-xl bg-white px-4 py-3 text-center text-sm font-medium text-black">
                    Contact
                </a>


            </div>

        </div>

    </header>



    <main>


        <!-- =========================================================
             HERO
        ========================================================= -->

        <section id="hero" class="relative flex min-h-screen items-center overflow-hidden px-6">


            <!-- Animated Background -->

            <div class="pointer-events-none absolute inset-0 overflow-hidden">

                <div
                    class="background-orb orb-one absolute left-[20%] top-[20%] h-[450px] w-[450px] rounded-full bg-blue-600/10 blur-[130px]">
                </div>

                <div
                    class="background-orb orb-two absolute right-[5%] top-[10%] h-[350px] w-[350px] rounded-full bg-violet-600/7 blur-[120px]">
                </div>

                <div
                    class="background-orb orb-three absolute bottom-[5%] left-[10%] h-[250px] w-[250px] rounded-full bg-cyan-500/7 blur-[110px]">
                </div>


                <!-- Particles -->

                <span class="particle left-[15%] top-[55%]" style="animation-duration: 7s;"></span>

                <span class="particle left-[28%] top-[35%]"
                    style="animation-duration: 9s; animation-delay: 2s;"></span>

                <span class="particle left-[42%] top-[70%]"
                    style="animation-duration: 8s; animation-delay: 1s;"></span>

                <span class="particle left-[60%] top-[25%]"
                    style="animation-duration: 10s; animation-delay: 3s;"></span>

                <span class="particle left-[72%] top-[60%]"
                    style="animation-duration: 8s; animation-delay: 1.5s;"></span>

                <span class="particle left-[85%] top-[40%]"
                    style="animation-duration: 11s; animation-delay: 2.5s;"></span>

                <span class="particle left-[92%] top-[75%]"
                    style="animation-duration: 9s; animation-delay: 4s;"></span>

            </div>


            <div class="mx-auto w-full max-w-6xl pt-24">

                <div class="max-w-4xl reveal">


                    <!-- Availability -->

                    <div
                        class="reveal stagger-1 mb-6 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/[0.03] px-4 py-2 text-sm text-gray-400">

                        <span class="soft-pulse h-2 w-2 rounded-full bg-green-400"></span>

                        Open to opportunities

                    </div>


                    <!-- Heading -->

                    <h1 class="text-5xl font-bold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">

                        Hi, I'm

                        <span
                            class="bg-gradient-to-r from-blue-400 via-violet-400 to-purple-500 bg-clip-text text-transparent">

                            Andhika Pratama.

                        </span>

                        <br>

                        <span class="text-white">

                            <span id="typing-text">
                                Web Developer
                            </span>

                            <span class="typing-cursor"></span>

                        </span>

                    </h1>


                    <!-- Description -->

                    <p class="reveal stagger-2 mt-8 max-w-2xl text-lg leading-8 text-gray-400">

                        I build modern and functional web applications,
                        explore information systems, and turn real-world
                        problems into practical digital solutions.

                    </p>


                    <!-- CTA -->

                    <div class="reveal stagger-3 mt-10 flex flex-wrap gap-4">

                        <a href="#projects"
                            class="rounded-full bg-white px-6 py-3 font-medium text-black transition hover:-translate-y-0.5 hover:bg-gray-200">

                            View My Projects

                        </a>

                        <a href="#contact"
                            class="rounded-full border border-white/10 px-6 py-3 font-medium text-white transition hover:-translate-y-0.5 hover:border-white/30 hover:bg-white/5">

                            Let's Connect

                        </a>

                    </div>


                    <!-- Quick Info -->

                    <div class="reveal stagger-4 mt-12 flex flex-wrap gap-x-8 gap-y-3 text-sm text-gray-500">

                        <span>
                            📍 Indonesia
                        </span>

                        <span>
                            🎓 Universitas Gunadarma
                        </span>

                        <span>
                            💻 Web Development
                        </span>

                    </div>

                </div>

            </div>

        </section>

        <!-- =========================================================
     CURRENTLY BUILDING
========================================================= -->

        <section class="px-6 pb-20">

            <div class="mx-auto max-w-6xl">

                <div class="building-card reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                    <div class="relative flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">

                        <div class="flex items-start gap-4">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-blue-500/10 text-blue-400">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 6.75 21 10.5m0 0-3.75 3.75M21 10.5H3m3.75-3.75L3 10.5m0 0 3.75 3.75" />

                                </svg>

                            </div>


                            <div>

                                <div class="flex items-center gap-2">

                                    <span class="building-pulse"></span>

                                    <p class="text-xs font-medium uppercase tracking-[0.2em] text-blue-400">
                                        Currently Building
                                    </p>

                                </div>

                                <h3 class="mt-2 text-lg font-semibold">
                                    Personal Portfolio & Developer Platform
                                </h3>

                                <p class="mt-1 text-sm leading-6 text-gray-500">
                                    Improving my portfolio, building new web applications,
                                    and exploring modern technologies.
                                </p>

                            </div>

                        </div>


                        <div class="flex flex-wrap gap-2">

                            <span class="rounded-full bg-blue-500/10 px-3 py-1.5 text-xs text-blue-300">
                                Laravel
                            </span>

                            <span class="rounded-full bg-violet-500/10 px-3 py-1.5 text-xs text-violet-300">
                                Tailwind
                            </span>

                            <span class="rounded-full bg-cyan-500/10 px-3 py-1.5 text-xs text-cyan-300">
                                JavaScript
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             ABOUT
        ========================================================= -->

        <section id="about" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">

                <div class="grid gap-16 lg:grid-cols-2 lg:items-center">


                    <!-- Text -->

                    <div class="reveal-left">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                            About Me
                        </p>


                        <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                            Building,

                            <span class="text-gray-400">
                                learning & growing.
                            </span>

                        </h2>


                        <div class="mt-6 space-y-5 text-base leading-8 text-gray-400">

                            <p>

                                I'm
                                <span class="text-gray-200">
                                    Andhika Pratama
                                </span>,
                                an Information Systems student at
                                <span class="text-gray-200">
                                    Universitas Gunadarma
                                </span>
                                with a strong interest in web development
                                and information technology.

                            </p>


                            <p>

                                My journey in software development started
                                through vocational education and continued
                                through personal projects and practical
                                web applications.

                            </p>


                            <p>

                                I enjoy working with both frontend and backend
                                technologies, designing interfaces, managing
                                databases, and building systems that solve
                                real-world problems.

                            </p>

                        </div>


                        <div class="mt-8">

                            <a href="#projects" class="text-sm font-medium text-white transition hover:text-blue-400">

                                Explore my work →

                            </a>

                        </div>

                    </div>


                    <!-- Highlights -->

                    <div class="grid grid-cols-2 gap-4 reveal-right">

                        <div
                            class="stagger-1 reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:-translate-y-1 hover:border-blue-500/30">

                            <p class="text-3xl font-bold">
                                Web
                            </p>

                            <p class="mt-2 text-sm text-gray-400">
                                Development
                            </p>

                        </div>


                        <div
                            class="stagger-2 reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:-translate-y-1 hover:border-violet-500/30">

                            <p class="text-3xl font-bold">
                                UI/UX
                            </p>

                            <p class="mt-2 text-sm text-gray-400">
                                Design
                            </p>

                        </div>


                        <div
                            class="stagger-3 reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:-translate-y-1 hover:border-cyan-500/30">

                            <p class="text-3xl font-bold">
                                Backend
                            </p>

                            <p class="mt-2 text-sm text-gray-400">
                                Development
                            </p>

                        </div>


                        <div
                            class="stagger-4 reveal rounded-2xl border border-white/10 bg-white/[0.03] p-6 transition hover:-translate-y-1 hover:border-green-500/30">

                            <p class="text-3xl font-bold">
                                Always
                            </p>

                            <p class="mt-2 text-sm text-gray-400">
                                Learning
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             SKILLS — STEP 6
        ========================================================= -->

        <section id="skills" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">


                <div class="max-w-2xl reveal">

                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                        Tech Stack
                    </p>


                    <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                        Tools I use to

                        <span class="text-gray-400">
                            build things.
                        </span>

                    </h2>


                    <p class="mt-6 leading-8 text-gray-400">

                        Technologies and tools I use while designing,
                        developing, and managing web applications.

                    </p>

                </div>



                <div class="mt-16 grid gap-6 md:grid-cols-3">


                    <!-- Frontend -->

                    <div
                        class="reveal stagger-1 rounded-2xl border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-blue-500/30">

                        <div class="flex items-center justify-between">

                            <h3 class="text-xl font-semibold">
                                Frontend
                            </h3>

                            <span class="text-blue-400">
                                01
                            </span>

                        </div>


                        <div class="mt-8 space-y-5">


                            <!-- HTML -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        HTML
                                    </span>

                                    <span class="text-gray-500">
                                        90%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-blue-400"
                                        style="--progress: 90%;">
                                    </div>

                                </div>

                            </div>


                            <!-- CSS -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        CSS
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-blue-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>


                            <!-- JavaScript -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        JavaScript
                                    </span>

                                    <span class="text-gray-500">
                                        80%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-blue-400"
                                        style="--progress: 80%;">
                                    </div>

                                </div>

                            </div>


                            <!-- Tailwind -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        Tailwind CSS
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-blue-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Backend -->

                    <div
                        class="reveal stagger-2 rounded-2xl border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-violet-500/30">

                        <div class="flex items-center justify-between">

                            <h3 class="text-xl font-semibold">
                                Backend
                            </h3>

                            <span class="text-violet-400">
                                02
                            </span>

                        </div>


                        <div class="mt-8 space-y-5">


                            <!-- PHP -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        PHP
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-violet-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>


                            <!-- Laravel -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        Laravel
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-violet-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>


                            <!-- REST API -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        REST API
                                    </span>

                                    <span class="text-gray-500">
                                        70%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-violet-400"
                                        style="--progress: 70%;">
                                    </div>

                                </div>

                            </div>


                            <!-- Authentication -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        Authentication
                                    </span>

                                    <span class="text-gray-500">
                                        75%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-violet-400"
                                        style="--progress: 75%;">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- Tools -->

                    <div
                        class="reveal stagger-3 rounded-2xl border border-white/10 bg-white/[0.03] p-7 transition duration-300 hover:-translate-y-1 hover:border-cyan-500/30">

                        <div class="flex items-center justify-between">

                            <h3 class="text-xl font-semibold">
                                Tools
                            </h3>

                            <span class="text-cyan-400">
                                03
                            </span>

                        </div>


                        <div class="mt-8 space-y-5">


                            <!-- MySQL -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        MySQL
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-cyan-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>


                            <!-- Git -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        Git
                                    </span>

                                    <span class="text-gray-500">
                                        80%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-cyan-400"
                                        style="--progress: 80%;">
                                    </div>

                                </div>

                            </div>


                            <!-- GitHub -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        GitHub
                                    </span>

                                    <span class="text-gray-500">
                                        85%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-cyan-400"
                                        style="--progress: 85%;">
                                    </div>

                                </div>

                            </div>


                            <!-- VS Code -->

                            <div>

                                <div class="mb-2 flex justify-between text-sm">

                                    <span class="text-gray-300">
                                        VS Code
                                    </span>

                                    <span class="text-gray-500">
                                        95%
                                    </span>

                                </div>

                                <div class="h-1.5 overflow-hidden rounded-full bg-white/5">

                                    <div class="skill-progress h-full rounded-full bg-cyan-400"
                                        style="--progress: 95%;">
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- =========================================================
     CERTIFICATES
========================================================= -->

        <section id="certificates" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">

                <div class="max-w-2xl reveal">

                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                        Certifications
                    </p>

                    <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                        Certificates &

                        <span class="text-gray-400">
                            achievements.
                        </span>

                    </h2>

                    <p class="mt-6 leading-8 text-gray-400">

                        Certifications, courses, and achievements that
                        support my technical and professional development.

                    </p>

                </div>


                <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-3">


                    <!-- Certificate 1 -->

                    <div
                        class="certificate-card reveal stagger-1 rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                        <div
                            class="certificate-icon flex h-12 w-12 items-center justify-center rounded-xl bg-blue-500/10 text-2xl">

                            🏆

                        </div>

                        <p class="mt-6 text-xs uppercase tracking-[0.15em] text-blue-400">
                            Certification
                        </p>

                        <h3 class="mt-2 text-lg font-semibold">
                            Web Development
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Web development certification or course.
                        </p>

                        <div class="mt-5 flex items-center justify-between">

                            <span class="text-xs text-gray-600">
                                2026
                            </span>

                            <a href="#" class="text-xs font-medium text-gray-400 transition hover:text-white">

                                View Certificate →

                            </a>

                        </div>

                    </div>


                    <!-- Certificate 2 -->

                    <div
                        class="certificate-card reveal stagger-2 rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                        <div
                            class="certificate-icon flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/10 text-2xl">

                            📜

                        </div>

                        <p class="mt-6 text-xs uppercase tracking-[0.15em] text-violet-400">
                            Course
                        </p>

                        <h3 class="mt-2 text-lg font-semibold">
                            Laravel Development
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Laravel and backend development learning.
                        </p>

                        <div class="mt-5 flex items-center justify-between">

                            <span class="text-xs text-gray-600">
                                2026
                            </span>

                            <a href="#" class="text-xs font-medium text-gray-400 transition hover:text-white">

                                View Certificate →

                            </a>

                        </div>

                    </div>


                    <!-- Certificate 3 -->

                    <div
                        class="certificate-card reveal stagger-3 rounded-2xl border border-white/10 bg-white/[0.03] p-6">

                        <div
                            class="certificate-icon flex h-12 w-12 items-center justify-center rounded-xl bg-cyan-500/10 text-2xl">

                            🎓

                        </div>

                        <p class="mt-6 text-xs uppercase tracking-[0.15em] text-cyan-400">
                            Achievement
                        </p>

                        <h3 class="mt-2 text-lg font-semibold">
                            Software Development
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-gray-500">
                            Achievement related to software development.
                        </p>

                        <div class="mt-5 flex items-center justify-between">

                            <span class="text-xs text-gray-600">
                                2026
                            </span>

                            <a href="#" class="text-xs font-medium text-gray-400 transition hover:text-white">

                                View Certificate →

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             PROJECTS — STEP 3 + STEP 7
        ========================================================= -->

        <section id="projects" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">


                <!-- Heading -->

                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-end">

                    <div class="max-w-2xl reveal">

                        <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                            Featured Projects
                        </p>


                        <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                            Things I've

                            <span class="text-gray-400">
                                built.
                            </span>

                        </h2>


                        <p class="mt-6 leading-8 text-gray-400">

                            A selection of projects I've developed while
                            learning, experimenting, and solving real-world
                            problems through technology.

                        </p>

                    </div>


                    <a href="/projects"
                        class="whitespace-nowrap text-sm font-medium text-gray-400 transition hover:text-white">

                        View all projects →

                    </a>

                </div>



                <!-- Filters -->

                <div class="reveal mt-10 flex flex-wrap gap-2">

                    <button type="button"
                        class="filter-button active rounded-full border border-white/10 px-4 py-2 text-sm"
                        data-filter="all">

                        All

                    </button>

                    <button type="button"
                        class="filter-button rounded-full border border-white/10 px-4 py-2 text-sm text-gray-400"
                        data-filter="web">

                        Web

                    </button>

                    <button type="button"
                        class="filter-button rounded-full border border-white/10 px-4 py-2 text-sm text-gray-400"
                        data-filter="ai">

                        AI

                    </button>

                    <button type="button"
                        class="filter-button rounded-full border border-white/10 px-4 py-2 text-sm text-gray-400"
                        data-filter="management">

                        Management

                    </button>

                    <button type="button"
                        class="filter-button rounded-full border border-white/10 px-4 py-2 text-sm text-gray-400"
                        data-filter="system">

                        Smart

                    </button>

                </div>



                <!-- Project Grid -->

                <div id="project-grid" class="mt-12 grid gap-6 lg:grid-cols-2">


                    <!-- =================================================
                         PROJECT 1 — APAR
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-1 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="management" data-color="red">

                        <div class="project-glow bg-red-500 right-0 top-0"></div>


                        <div class="project-image-container relative aspect-video overflow-hidden bg-[#111217]">

                            <img src="{{ asset('images/projects/apar&hydrant.png') }}"
                                alt="APAR & Hydrant Management System"
                                class="project-image h-full w-full object-cover">

                            <!-- Project Status -->

                            <div class="project-status status-live">

                                <span class="status-dot"></span>

                                Live

                            </div>


                            <!-- Like Button -->

                            <button type="button" class="project-like" data-project-id="apar-hydrant"
                                aria-label="Like APAR & Hydrant Management System">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.7" stroke="currentColor" class="h-4 w-4">

                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733C11.285 4.876 9.623 3.75 7.688 3.75 5.099 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />

                                </svg>

                                <span class="like-count">0</span>

                            </button>


                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#08090D] via-transparent to-transparent">
                            </div>


                            <!-- View Button -->

                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="{{ route('projects.show', 'apar-hydrant') }}"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black shadow-xl transition hover:bg-gray-200">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-red-400">
                                Management System
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                APAR & Hydrant Management System
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A web-based system for digitizing
                                inspection and monitoring of fire
                                extinguishers and hydrant equipment.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full bg-red-500/10 px-3 py-1.5 text-xs text-red-300">
                                    Laravel
                                </span>

                                <span class="rounded-full bg-blue-500/10 px-3 py-1.5 text-xs text-blue-300">
                                    PHP
                                </span>

                                <span class="rounded-full bg-cyan-500/10 px-3 py-1.5 text-xs text-cyan-300">
                                    MySQL
                                </span>

                                <span class="rounded-full bg-violet-500/10 px-3 py-1.5 text-xs text-violet-300">
                                    Tailwind CSS
                                </span>

                            </div>

                        </div>

                    </article>



                    <!-- =================================================
                         PROJECT 2 — AFINANCE
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-2 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="management" data-color="violet">

                        <div class="project-glow bg-violet-500 right-0 top-0"></div>


                        <div
                            class="relative aspect-video overflow-hidden bg-gradient-to-br from-violet-950 via-[#111217] to-[#08090D]">

                            <div class="absolute inset-0 flex items-center justify-center">

                                <div class="text-center">

                                    <p class="text-5xl font-bold text-white/10">
                                        AFinance
                                    </p>

                                    <p class="mt-2 text-sm text-white/40">
                                        Financial Management
                                    </p>

                                </div>

                            </div>


                            <div
                                class="absolute inset-0 bg-gradient-to-t from-[#08090D] via-transparent to-transparent">
                            </div>


                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="/projects"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black shadow-xl">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-violet-400">
                                Web Application
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                AFinance
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A financial management application
                                designed to organize, record, and
                                monitor personal financial activity.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    Laravel
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    PHP
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    MySQL
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    Tailwind
                                </span>

                            </div>

                        </div>

                    </article>



                    <!-- =================================================
                         PROJECT 3 — AI
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-3 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="ai" data-color="purple">

                        <div class="project-glow bg-purple-500 right-0 top-0"></div>


                        <div
                            class="relative aspect-video overflow-hidden bg-gradient-to-br from-purple-950 via-[#111217] to-[#08090D]">

                            <div class="absolute inset-0 flex items-center justify-center">

                                <div class="text-center">

                                    <p class="text-5xl font-bold text-white/10">
                                        AI
                                    </p>

                                    <p class="mt-2 text-sm text-white/40">
                                        AI-Powered Website
                                    </p>

                                </div>

                            </div>


                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="/projects"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-purple-400">
                                Artificial Intelligence
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                AI-Powered Website
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A web platform exploring the integration
                                of artificial intelligence into modern
                                web experiences and digital workflows.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    AI
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    JavaScript
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    API
                                </span>

                            </div>

                        </div>

                    </article>



                    <!-- =================================================
                         PROJECT 4 — INVENTORY
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-4 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="management" data-color="cyan">

                        <div class="project-glow bg-cyan-500 right-0 top-0"></div>


                        <div
                            class="relative aspect-video overflow-hidden bg-gradient-to-br from-cyan-950 via-[#111217] to-[#08090D]">

                            <div class="absolute inset-0 flex items-center justify-center">

                                <p class="text-4xl font-bold text-white/10">
                                    INVENTORY
                                </p>

                            </div>


                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="/projects"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-cyan-400">
                                Management System
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                Inventory Management System
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A digital inventory system for managing
                                item data, stock levels, transactions,
                                and inventory records.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    Laravel
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    MySQL
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    Tailwind
                                </span>

                            </div>

                        </div>

                    </article>



                    <!-- =================================================
                         PROJECT 5 — ECOMMERCE
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-5 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="web" data-color="pink">

                        <div class="project-glow bg-pink-500 right-0 top-0"></div>


                        <div
                            class="relative aspect-video overflow-hidden bg-gradient-to-br from-pink-950 via-[#111217] to-[#08090D]">

                            <div class="absolute inset-0 flex items-center justify-center">

                                <p class="text-4xl font-bold text-white/10">
                                    E-COMMERCE
                                </p>

                            </div>


                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="/projects"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-pink-400">
                                Fullstack Development
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                E-Commerce Fullstack
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A fullstack commerce platform covering
                                products, shopping carts, user accounts,
                                orders, and transaction workflows.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    Laravel
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    MySQL
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    JavaScript
                                </span>

                            </div>

                        </div>

                    </article>



                    <!-- =================================================
                         PROJECT 6 — SIS
                    ================================================== -->

                    <article
                        class="project-card reveal stagger-6 overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03]"
                        data-category="system" data-color="blue">

                        <div class="project-glow bg-blue-500 right-0 top-0"></div>


                        <div
                            class="relative aspect-video overflow-hidden bg-gradient-to-br from-blue-950 via-[#111217] to-[#08090D]">

                            <div class="absolute inset-0 flex items-center justify-center">

                                <p class="text-4xl font-bold text-white/10">
                                    SIS
                                </p>

                            </div>


                            <div class="project-overlay absolute bottom-5 right-5">

                                <a href="/projects"
                                    class="inline-flex items-center rounded-full bg-white px-4 py-2 text-sm font-medium text-black">

                                    View Project

                                    <span class="ml-2">
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>


                        <div class="p-7">

                            <p class="text-sm text-blue-400">
                                Information System
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                Student Information System
                            </h3>


                            <p class="mt-4 leading-7 text-gray-400">

                                A centralized system for managing student
                                profiles, academic data, schedules,
                                and educational information.

                            </p>


                            <div class="mt-6 flex flex-wrap gap-2">

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    PHP
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    MySQL
                                </span>

                                <span class="rounded-full border border-white/10 px-3 py-1 text-xs text-gray-400">
                                    JavaScript
                                </span>

                            </div>

                        </div>

                    </article>


                </div>


                <!-- Load More -->

                <div class="mt-10 text-center">

                    <button id="load-more-projects" type="button"
                        class="inline-flex items-center rounded-full border border-white/10 px-6 py-3 text-sm font-medium text-gray-300 transition hover:border-white/30 hover:bg-white/5 hover:text-white">

                        Load More

                        <span class="ml-2">
                            ↓
                        </span>

                    </button>

                </div>


                <div class="mt-4 text-center">

                    <a href="/projects" class="text-sm text-gray-500 transition hover:text-white">

                        Explore All Projects →

                    </a>

                </div>

            </div>

        </section>



        <!-- =========================================================
             EXPERIENCE
        ========================================================= -->

        <section id="experience" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">


                <div class="max-w-2xl reveal">

                    <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                        My Journey
                    </p>


                    <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                        Learning,

                        <span class="text-gray-400">
                            building & growing.
                        </span>

                    </h2>


                    <p class="mt-6 leading-8 text-gray-400">

                        The journey that continues to shape my skills
                        and perspective as a developer.

                    </p>

                </div>



                <div class="relative mt-16">


                    <!-- Timeline Line -->

                    <div class="absolute left-[7px] top-2 hidden h-[calc(100%-8px)] w-px bg-white/10 md:block">
                    </div>



                    <!-- Education -->

                    <div class="reveal relative grid gap-8 pb-16 md:grid-cols-[180px_1fr]">

                        <div
                            class="absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-[#08090D] bg-blue-500 md:block">
                        </div>


                        <div class="text-sm text-gray-500 md:pl-8">
                            2026 — Present
                        </div>


                        <div class="md:pl-8">

                            <p class="text-sm text-blue-400">
                                Education
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                Information Systems
                            </h3>


                            <p class="mt-1 text-gray-500">
                                Universitas Gunadarma
                            </p>


                            <p class="mt-4 max-w-2xl leading-7 text-gray-400">

                                Studying Information Systems while
                                developing practical skills in programming,
                                web development, databases, and digital
                                technology.

                            </p>

                        </div>

                    </div>



                    <!-- Development -->

                    <div class="reveal stagger-2 relative grid gap-8 pb-16 md:grid-cols-[180px_1fr]">

                        <div
                            class="absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-[#08090D] bg-violet-500 md:block">
                        </div>


                        <div class="text-sm text-gray-500 md:pl-8">
                            2024 — 2026
                        </div>


                        <div class="md:pl-8">

                            <p class="text-sm text-violet-400">
                                Development
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                Building Real-World Projects
                            </h3>


                            <p class="mt-4 max-w-2xl leading-7 text-gray-400">

                                Developed various web-based projects
                                while exploring backend development,
                                database management, UI design,
                                deployment, and system development.

                            </p>

                        </div>

                    </div>



                    <!-- Foundation -->

                    <div class="reveal stagger-3 relative grid gap-8 md:grid-cols-[180px_1fr]">

                        <div
                            class="absolute left-0 top-1 hidden h-4 w-4 rounded-full border-4 border-[#08090D] bg-cyan-500 md:block">
                        </div>


                        <div class="text-sm text-gray-500 md:pl-8">
                            Previous
                        </div>


                        <div class="md:pl-8">

                            <p class="text-sm text-cyan-400">
                                Foundation
                            </p>


                            <h3 class="mt-2 text-2xl font-semibold">
                                Software Development
                            </h3>


                            <p class="mt-4 max-w-2xl leading-7 text-gray-400">

                                Built a foundation in programming,
                                software development, databases,
                                and problem solving through vocational
                                education and personal projects.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <!-- =========================================================
             CONTACT
        ========================================================= -->

        <section id="contact" class="border-t border-white/5 px-6 py-32">

            <div class="mx-auto max-w-6xl">

                <div
                    class="reveal relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.03] px-8 py-16 sm:px-12 lg:px-16">


                    <!-- Glow -->

                    <div
                        class="background-orb orb-three absolute -right-32 -top-32 h-80 w-80 rounded-full bg-blue-600/10 blur-[100px]">
                    </div>


                    <div class="relative grid gap-12 lg:grid-cols-2 lg:items-end">


                        <!-- Text -->

                        <div>

                            <p class="text-sm font-medium uppercase tracking-[0.3em] text-blue-400">
                                Get In Touch
                            </p>


                            <h2 class="mt-4 text-4xl font-bold tracking-tight sm:text-5xl">

                                Let's connect

                                <span class="text-gray-400">
                                    and build something.
                                </span>

                            </h2>


                            <p class="mt-6 max-w-xl leading-8 text-gray-400">

                                I'm open to connecting, discussing
                                opportunities, collaborating on projects,
                                and learning something new.

                            </p>

                        </div>



                        <!-- Contact Links -->

                        <div class="space-y-3">


                            <!-- Email -->

                            <div
                                class="group flex items-center justify-between rounded-2xl border border-white/10 bg-black/20 p-5 transition hover:border-blue-500/30 hover:bg-white/[0.05]">

                                <div>

                                    <p class="text-sm text-gray-500">
                                        Email
                                    </p>

                                    <p class="mt-1 text-gray-200">
                                        andhika176.prtma@gmail.com
                                    </p>

                                </div>


                                <div class="flex items-center gap-2">

                                    <button id="copy-email" type="button"
                                        class="rounded-xl border border-white/10 p-2.5 text-gray-400 transition hover:border-blue-500/30 hover:bg-white/5 hover:text-white"
                                        aria-label="Copy email">

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-4 w-4">

                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 7.5V6A2.25 2.25 0 0 1 10.5 3.75h7.5A2.25 2.25 0 0 1 20.25 6v7.5a2.25 2.25 0 0 1-2.25 2.25h-1.5M8.25 7.5h-1.5A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-1.5M8.25 7.5h4.5" />

                                        </svg>

                                    </button>


                                    <a href="mailto:andhika176.prtma@gmail.com"
                                        class="rounded-xl border border-white/10 p-2.5 text-gray-400 transition hover:border-blue-500/30 hover:bg-white/5 hover:text-white">

                                        →

                                    </a>

                                </div>

                            </div>

                            <span class="text-gray-500 transition group-hover:translate-x-1 group-hover:text-white">
                                →
                            </span>

                            </a>



                            <!-- GitHub -->

                            <a href="https://github.com/pratamadikzz/pratamadikzz" target="_blank"
                                rel="noopener noreferrer"
                                class="group flex items-center justify-between rounded-2xl border border-white/10 bg-black/20 p-5 transition hover:border-violet-500/30 hover:bg-white/[0.05]">

                                <div>

                                    <p class="text-sm text-gray-500">
                                        GitHub
                                    </p>

                                    <p class="mt-1 text-gray-200">
                                        @pratamadikzz
                                    </p>

                                </div>

                                <span
                                    class="text-gray-500 transition group-hover:translate-x-1 group-hover:text-white">
                                    ↗
                                </span>

                            </a>



                            <!-- LinkedIn -->

                            <a href="https://www.linkedin.com/in/andhika-pratama-105aa442b" target="_blank"
                                rel="noopener noreferrer"
                                class="group flex items-center justify-between rounded-2xl border border-white/10 bg-black/20 p-5 transition hover:border-cyan-500/30 hover:bg-white/[0.05]">

                                <div>

                                    <p class="text-sm text-gray-500">
                                        LinkedIn
                                    </p>

                                    <p class="mt-1 text-gray-200">
                                        Andhika Pratama
                                    </p>

                                </div>

                                <span
                                    class="text-gray-500 transition group-hover:translate-x-1 group-hover:text-white">
                                    ↗
                                </span>

                            </a>



                            <!-- Instagram -->

                            <a href="https://www.instagram.com/__dhkprtma" target="_blank" rel="noopener noreferrer"
                                class="group flex items-center justify-between rounded-2xl border border-white/10 bg-black/20 p-5 transition hover:border-pink-500/30 hover:bg-white/[0.05]">

                                <div>

                                    <p class="text-sm text-gray-500">
                                        Instagram
                                    </p>

                                    <p class="mt-1 text-gray-200">
                                        @__dhkprtma
                                    </p>

                                </div>

                                <span
                                    class="text-gray-500 transition group-hover:translate-x-1 group-hover:text-white">
                                    ↗
                                </span>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>



    <!-- =========================================================
         FOOTER
    ========================================================= -->

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



    <!-- =========================================================
         JAVASCRIPT
    ========================================================= -->

    <script>
        document.addEventListener('DOMContentLoaded', () => {


            /* =====================================================
               STEP 1 — SCROLL REVEAL
            ===================================================== */

            const revealElements = document.querySelectorAll(
                '.reveal, .reveal-left, .reveal-right, .reveal-scale'
            );

            const revealObserver = new IntersectionObserver(
                (entries, observer) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            entry.target.classList.add('show');

                            observer.unobserve(entry.target);

                        }

                    });

                }, {
                    threshold: 0.12,
                    rootMargin: '0px 0px -50px 0px'
                }
            );


            revealElements.forEach(element => {
                revealObserver.observe(element);
            });



            /* =====================================================
               STEP 2 — NAVBAR SCROLL EFFECT
            ===================================================== */

            const navbar = document.getElementById('navbar');

            const handleNavbar = () => {

                if (window.scrollY > 30) {

                    navbar.classList.add('scrolled');

                } else {

                    navbar.classList.remove('scrolled');

                }

            };


            window.addEventListener('scroll', handleNavbar, {
                passive: true
            });


            handleNavbar();



            /* =====================================================
               STEP 2 — ACTIVE SECTION
            ===================================================== */

            const sections = document.querySelectorAll(
                'main section[id]'
            );

            const navLinks = document.querySelectorAll(
                '.nav-link'
            );


            const sectionObserver = new IntersectionObserver(
                (entries) => {

                    entries.forEach(entry => {

                        if (entry.isIntersecting) {

                            navLinks.forEach(link => {
                                link.classList.remove('active');
                            });


                            const activeLink =
                                document.querySelector(
                                    `.nav-link[data-section="${entry.target.id}"]`
                                );


                            if (activeLink) {
                                activeLink.classList.add('active');
                            }

                        }

                    });

                }, {
                    threshold: 0.25,
                    rootMargin: '-20% 0px -60% 0px'
                }
            );


            sections.forEach(section => {
                sectionObserver.observe(section);
            });



            /* =====================================================
               STEP 5 — HERO TYPING EFFECT
            ===================================================== */

            const typingElement =
                document.getElementById('typing-text');


            const typingWords = [
                'Web Developer',
                'Fullstack Developer',
                'Information Systems Student'
            ];


            let wordIndex = 0;
            let characterIndex = 0;
            let deleting = false;


            function typeEffect() {

                const currentWord =
                    typingWords[wordIndex];


                if (!deleting) {

                    characterIndex++;

                    typingElement.textContent =
                        currentWord.substring(
                            0,
                            characterIndex
                        );


                    if (characterIndex === currentWord.length) {

                        deleting = true;

                        setTimeout(typeEffect, 1800);

                        return;

                    }

                } else {

                    characterIndex--;

                    typingElement.textContent =
                        currentWord.substring(
                            0,
                            characterIndex
                        );


                    if (characterIndex === 0) {

                        deleting = false;

                        wordIndex =
                            (wordIndex + 1) %
                            typingWords.length;

                    }

                }


                const speed =
                    deleting ? 45 : 80;


                setTimeout(typeEffect, speed);

            }


            setTimeout(typeEffect, 900);



            /* =====================================================
               STEP 6 — SKILL PROGRESS
            ===================================================== */

            const skillBars =
                document.querySelectorAll(
                    '.skill-progress'
                );


            const skillObserver =
                new IntersectionObserver(
                    (entries, observer) => {

                        entries.forEach(entry => {

                            if (entry.isIntersecting) {

                                entry.target.classList.add(
                                    'animate'
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        });

                    }, {
                        threshold: .4
                    }
                );


            skillBars.forEach(bar => {
                skillObserver.observe(bar);
            });



            /* =====================================================
               STEP 7 — PROJECT FILTER
            ===================================================== */

            const filterButtons =
                document.querySelectorAll(
                    '.filter-button'
                );


            const projectCards =
                document.querySelectorAll(
                    '.project-card'
                );


            const loadMoreButton =
                document.getElementById(
                    'load-more-projects'
                );


            let currentFilter = 'all';

            let showAllProjects = false;


            function updateProjects() {

                let visibleCount = 0;

                const maxVisible =
                    showAllProjects ? Infinity : 4;


                projectCards.forEach(card => {

                    const category =
                        card.dataset.category;


                    const matchesFilter =
                        currentFilter === 'all' ||
                        category === currentFilter;


                    if (
                        matchesFilter &&
                        visibleCount < maxVisible
                    ) {

                        card.classList.remove(
                            'project-hidden'
                        );


                        card.classList.remove(
                            'filter-enter'
                        );


                        void card.offsetWidth;


                        card.classList.add(
                            'filter-enter'
                        );


                        visibleCount++;

                    } else {

                        card.classList.add(
                            'project-hidden'
                        );

                    }

                });


                const matchingProjects =
                    Array.from(projectCards)
                    .filter(card => {

                        return currentFilter === 'all' ||
                            card.dataset.category === currentFilter;

                    });


                if (
                    matchingProjects.length <= 4 ||
                    showAllProjects
                ) {

                    loadMoreButton.classList.add(
                        'hidden'
                    );

                } else {

                    loadMoreButton.classList.remove(
                        'hidden'
                    );

                }

            }


            filterButtons.forEach(button => {

                button.addEventListener(
                    'click',
                    () => {

                        filterButtons.forEach(
                            item => {

                                item.classList.remove(
                                    'active'
                                );

                            }
                        );


                        button.classList.add(
                            'active'
                        );


                        currentFilter =
                            button.dataset.filter;


                        showAllProjects = false;


                        updateProjects();

                    }
                );

            });


            loadMoreButton.addEventListener(
                'click',
                () => {

                    showAllProjects = true;

                    updateProjects();

                }
            );


            updateProjects();



            /* =====================================================
               STEP 8 — CUSTOM CURSOR
            ===================================================== */

            const cursor =
                document.getElementById(
                    'custom-cursor'
                );


            const cursorLabel =
                document.getElementById(
                    'cursor-label'
                );


            const isDesktop =
                window.matchMedia(
                    '(min-width: 768px)'
                ).matches;


            if (isDesktop) {

                let mouseX = 0;
                let mouseY = 0;

                let cursorX = 0;
                let cursorY = 0;


                document.addEventListener(
                    'mousemove',
                    event => {

                        mouseX = event.clientX;
                        mouseY = event.clientY;

                        cursor.classList.add(
                            'visible'
                        );

                    }
                );


                function animateCursor() {

                    cursorX +=
                        (mouseX - cursorX) * .18;

                    cursorY +=
                        (mouseY - cursorY) * .18;


                    cursor.style.left =
                        `${cursorX}px`;

                    cursor.style.top =
                        `${cursorY}px`;


                    requestAnimationFrame(
                        animateCursor
                    );

                }


                animateCursor();


                const interactiveElements =
                    document.querySelectorAll(
                        'a, button'
                    );


                interactiveElements.forEach(
                    element => {

                        element.addEventListener(
                            'mouseenter',
                            () => {

                                cursor.classList.add(
                                    'hover'
                                );

                            }
                        );


                        element.addEventListener(
                            'mouseleave',
                            () => {

                                cursor.classList.remove(
                                    'hover'
                                );

                            }
                        );

                    }
                );


                projectCards.forEach(
                    project => {

                        project.addEventListener(
                            'mouseenter',
                            () => {

                                cursor.classList.add(
                                    'project-hover'
                                );

                                cursor.classList.remove(
                                    'hover'
                                );

                                cursorLabel.textContent =
                                    'VIEW';

                            }
                        );


                        project.addEventListener(
                            'mouseleave',
                            () => {

                                cursor.classList.remove(
                                    'project-hover'
                                );

                                cursorLabel.textContent =
                                    'VIEW';

                            }
                        );

                    }
                );


                document.addEventListener(
                    'mouseleave',
                    () => {

                        cursor.classList.remove(
                            'visible'
                        );

                    }
                );


                document.addEventListener(
                    'mouseenter',
                    () => {

                        cursor.classList.add(
                            'visible'
                        );

                    }
                );

            }



            /* =====================================================
               MOBILE MENU
            ===================================================== */

            const menuButton =
                document.getElementById(
                    'mobile-menu-button'
                );


            const mobileMenu =
                document.getElementById(
                    'mobile-menu'
                );


            const menuIcon =
                document.getElementById(
                    'menu-icon'
                );


            const mobileLinks =
                document.querySelectorAll(
                    '.mobile-link'
                );


            menuButton.addEventListener(
                'click',
                () => {

                    mobileMenu.classList.toggle(
                        'hidden'
                    );


                    const isOpen = !mobileMenu.classList.contains(
                        'hidden'
                    );


                    if (isOpen) {

                        menuIcon.innerHTML = `
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18 18 6M6 6l12 12"
                            />
                        `;

                    } else {

                        menuIcon.innerHTML = `
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        `;

                    }

                }
            );


            mobileLinks.forEach(
                link => {

                    link.addEventListener(
                        'click',
                        () => {

                            mobileMenu.classList.add(
                                'hidden'
                            );


                            menuIcon.innerHTML = `
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                />
                            `;

                        }
                    );

                }
            );

            /* =========================================================
           EXTRA FEATURES
        ========================================================= */


            /* =====================================================
               THEME TOGGLE
            ===================================================== */

            const themeToggle =
                document.getElementById('theme-toggle');

            const themeIcon =
                document.getElementById('theme-icon');


            function updateThemeIcon() {

                if (!themeIcon) return;


                const isLight =
                    document.body.classList.contains('light-mode');


                if (isLight) {

                    themeIcon.innerHTML = `
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M21.752 15.002A9.718 9.718 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.598.748-3.752A9.753 9.753 0 1 0 21.752 15.002Z"
            />
        `;

                } else {

                    themeIcon.innerHTML = `
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M12 3v1.5m0 15V21m9-9h-1.5M4.5 12H3m15.364-6.364-1.06 1.06M6.697 17.303l-1.06 1.061m12.728 0-1.06-1.061M6.697 6.697l-1.06-1.06M16.5 12a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0Z"
            />
        `;

                }

            }


            const savedTheme =
                localStorage.getItem('portfolio-theme');


            if (savedTheme === 'light') {

                document.body.classList.add('light-mode');

            }


            updateThemeIcon();


            if (themeToggle) {

                themeToggle.addEventListener('click', () => {

                    document.body.classList.toggle(
                        'light-mode'
                    );


                    const isLight =
                        document.body.classList.contains(
                            'light-mode'
                        );


                    localStorage.setItem(
                        'portfolio-theme',
                        isLight ? 'light' : 'dark'
                    );


                    updateThemeIcon();


                    showToast(
                        isLight ?
                        '☀️ Light mode activated' :
                        '🌙 Dark mode activated',
                        'info'
                    );

                });

            }


            /* =====================================================
               TOAST
            ===================================================== */

            function showToast(message, type = 'success') {

                const container =
                    document.getElementById(
                        'toast-container'
                    );


                if (!container) return;


                const toast =
                    document.createElement('div');


                toast.className =
                    `toast toast-${type}`;


                toast.innerHTML = `

        <span class="toast-icon">

            ${type === 'success'
                ? `
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m4.5 12.75 6 6 9-13.5"
                                />

                            </svg>
                        `
                : `
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.7"
                                stroke="currentColor"
                                class="h-5 w-5">

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 3v18m9-9H3"
                                />

                            </svg>
                        `
            }

        </span>

        <span>${message}</span>

    `;


                container.appendChild(toast);


                setTimeout(() => {

                    toast.classList.add('hide');

                    setTimeout(() => {

                        toast.remove();

                    }, 350);

                }, 2800);

            }


            /* =====================================================
               COPY EMAIL
            ===================================================== */

            const copyEmailButton =
                document.getElementById(
                    'copy-email'
                );


            if (copyEmailButton) {

                copyEmailButton.addEventListener(
                    'click',
                    async () => {

                        const email =
                            'andhika176.prtma@gmail.com';


                        try {

                            await navigator.clipboard.writeText(
                                email
                            );


                            showToast(
                                '📋 Email copied to clipboard'
                            );


                        } catch (error) {

                            showToast(
                                'Unable to copy email',
                                'info'
                            );

                        }

                    }
                );

            }


            /* =====================================================
               SCROLL PROGRESS
            ===================================================== */

            const scrollProgress =
                document.getElementById(
                    'scroll-progress'
                );


            function updateScrollProgress() {

                if (!scrollProgress) return;


                const scrollTop =
                    window.scrollY;


                const documentHeight =
                    document.documentElement.scrollHeight -
                    window.innerHeight;


                const progress =
                    documentHeight > 0 ?
                    (scrollTop / documentHeight) * 100 :
                    0;


                scrollProgress.style.width =
                    `${progress}%`;

            }


            window.addEventListener(
                'scroll',
                updateScrollProgress, {
                    passive: true
                }
            );


            updateScrollProgress();


            /* =====================================================
               BACK TO TOP
            ===================================================== */

            const backToTop =
                document.getElementById(
                    'back-to-top'
                );


            function handleBackToTop() {

                if (!backToTop) return;


                if (window.scrollY > 500) {

                    backToTop.classList.add(
                        'show'
                    );

                } else {

                    backToTop.classList.remove(
                        'show'
                    );

                }

            }


            window.addEventListener(
                'scroll',
                handleBackToTop, {
                    passive: true
                }
            );


            handleBackToTop();


            if (backToTop) {

                backToTop.addEventListener(
                    'click',
                    () => {

                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth'
                        });

                    }
                );

            }


            /* =====================================================
               PROJECT LIKES
            ===================================================== */

            const likeButtons =
                document.querySelectorAll(
                    '.project-like'
                );


            likeButtons.forEach(button => {

                const projectId =
                    button.dataset.projectId;


                const storageKey =
                    `project-like-${projectId}`;


                const countKey =
                    `project-like-count-${projectId}`;


                let liked =
                    localStorage.getItem(
                        storageKey
                    ) === 'true';


                let count =
                    parseInt(
                        localStorage.getItem(
                            countKey
                        ) || '0'
                    );


                const countElement =
                    button.querySelector(
                        '.like-count'
                    );


                function updateLikeUI() {

                    button.classList.toggle(
                        'liked',
                        liked
                    );


                    if (countElement) {

                        countElement.textContent =
                            count;

                    }

                }


                updateLikeUI();


                button.addEventListener(
                    'click',
                    event => {

                        event.preventDefault();

                        event.stopPropagation();


                        if (liked) {

                            liked = false;

                            count =
                                Math.max(
                                    0,
                                    count - 1
                                );


                            showToast(
                                '💔 Project removed from likes',
                                'info'
                            );

                        } else {

                            liked = true;

                            count++;


                            showToast(
                                '❤️ Thanks for liking this project'
                            );

                        }


                        localStorage.setItem(
                            storageKey,
                            liked
                        );


                        localStorage.setItem(
                            countKey,
                            count
                        );


                        updateLikeUI();

                    }
                );

            });

        });
    </script>

</body>

</html>
