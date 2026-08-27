<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mst. Farjana Yasmin Jyoti | ECE Engineer & Software Developer</title>

    <meta name="description" content="Professional portfolio of Mst. Farjana Yasmin Jyoti — B.Sc. Engineer in Electronics & Communication Engineering (ECE) and Full-Stack Software Developer specializing in Laravel, Livewire, Tailwind CSS, and IoT Systems.">
    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
        code, pre {
            font-family: 'JetBrains Mono', monospace;
        }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 transition-colors duration-300 selection:bg-indigo-500 selection:text-white relative overflow-x-hidden min-h-screen antialiased">

    <!-- Ambient Background Gradients -->
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[50rem] h-[30rem] bg-gradient-to-b from-indigo-500/10 dark:from-indigo-900/20 via-violet-500/5 dark:via-violet-900/10 to-transparent blur-3xl pointer-events-none z-0"></div>
    <div class="fixed top-1/2 -right-40 w-96 h-96 bg-cyan-500/10 dark:bg-cyan-900/15 rounded-full blur-3xl pointer-events-none z-0"></div>
    <div class="fixed bottom-0 -left-40 w-[30rem] h-[30rem] bg-indigo-500/10 dark:bg-indigo-950/30 rounded-full blur-3xl pointer-events-none z-0"></div>

    <!-- Glass Header -->
    <header class="sticky top-0 z-50 glass-panel border-b border-slate-200/80 dark:border-slate-800/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Brand Identity -->
            <a href="#hero" class="flex items-center gap-3.5 group">
                <div class="relative w-11 h-11 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-cyan-400 p-[2px] shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                    <img src="/images/avatar.jpg" alt="Mst. Farjana Yasmin Jyoti" class="w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base tracking-tight leading-tight group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Mst. Farjana Yasmin Jyoti</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">B.Sc. Engineer in ECE • Full-Stack Developer</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 bg-slate-200/60 dark:bg-slate-900/80 p-1.5 rounded-full border border-slate-300/60 dark:border-slate-800 text-sm font-medium">
                <a href="#about" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">About</a>
                <a href="#skills" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Competencies</a>
                <a href="#projects" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Projects</a>
                <a href="#education" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Education</a>
                <a href="#contact" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Contact</a>
            </nav>

            <!-- Actions & Theme Toggle -->
            <div class="flex items-center gap-3">
                <!-- Theme Switcher Button -->
                <button id="themeToggle" type="button" aria-label="Toggle Bright/Dark Mode" class="p-2.5 rounded-xl bg-slate-200/80 dark:bg-slate-800/80 text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 border border-slate-300/70 dark:border-slate-700/80 transition-all">
                    <!-- Sun Icon (shown in dark mode) -->
                    <svg id="themeSun" class="w-5 h-5 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                    <!-- Moon Icon (shown in light mode) -->
                    <svg id="themeMoon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>

                <!-- CV Modal Trigger -->
                <button onclick="openResumeModal()" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-semibold uppercase tracking-wider bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 border border-slate-300 dark:border-slate-700/80 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all shadow-sm">
                    <svg class="w-4 h-4 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    <span>View CV</span>
                </button>

                <!-- Laravel Auth Navigation -->
                @if (Route::has('login'))
                    @auth
                        <a href="{{ route('dashboard') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold bg-indigo-600 text-white hover:bg-indigo-500 shadow-md shadow-indigo-600/20 transition-all">
                            <span>Dashboard</span>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hidden sm:inline-flex text-sm font-medium text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white px-3 py-2">
                            Log in
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24 py-12">

        <!-- HERO SECTION -->
        <section id="hero" class="pt-6 sm:pt-14 pb-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <!-- Status Badge -->
                <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-600 dark:text-indigo-300 text-xs font-semibold">
                    <span class="relative flex h-2 w-2">
                      <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                      <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                    </span>
                    B.Sc. in ECE Graduate • Seeking Entry-Level Software Engineer & Technical Roles
                </div>

                <!-- Main Heading -->
                <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-[1.12]">
                    Bridging <span class="bg-gradient-to-r from-indigo-600 via-violet-600 to-cyan-500 dark:from-indigo-400 dark:via-violet-400 dark:to-cyan-400 bg-clip-text text-transparent">Hardware Intelligence</span> & Scalable Web Systems.
                </h1>

                <!-- Subtitle -->
                <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 max-w-2xl font-normal leading-relaxed">
                    Engineering graduate specializing in Electronics & Communication Engineering (ECE). Experienced in developing high-performance web applications with <strong>Laravel 13</strong>, <strong>Livewire 4</strong>, <strong>Tailwind CSS v4</strong>, <strong>MySQL</strong>, and embedded IoT communication systems.
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-wrap items-center gap-4 pt-2">
                    <a href="#projects" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-indigo-600 text-white font-semibold text-base shadow-xl shadow-indigo-600/25 hover:bg-indigo-500 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        <span>Explore Engineering Projects</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <button onclick="openResumeModal()" class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-white dark:bg-slate-900 text-slate-800 dark:text-slate-200 font-semibold text-base border border-slate-300 dark:border-slate-700/80 hover:bg-slate-100 dark:hover:bg-slate-800 transition-all shadow-sm">
                        <svg class="w-5 h-5 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Download CV</span>
                    </button>
                </div>

                <!-- Professional Metrics -->
                <div class="pt-8 grid grid-cols-3 gap-6 border-t border-slate-200/80 dark:border-slate-800/80">
                    <div>
                        <div class="text-3xl font-extrabold text-indigo-600 dark:text-indigo-400">B.Sc. ECE</div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Engineering Degree</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-violet-600 dark:text-violet-400">10+</div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Software & Capstones</div>
                    </div>
                    <div>
                        <div class="text-3xl font-extrabold text-cyan-600 dark:text-cyan-400">100%</div>
                        <div class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 font-medium mt-1">Engineering Rigor</div>
                    </div>
                </div>
            </div>

            <!-- Profile Portrait Container -->
            <div class="lg:col-span-5 relative flex justify-center">
                <div class="relative w-full max-w-md aspect-square rounded-3xl p-3 bg-gradient-to-b from-indigo-500/20 via-slate-200/50 dark:via-slate-800/50 to-transparent border border-slate-200 dark:border-slate-800 shadow-2xl shadow-indigo-950/20 dark:shadow-indigo-950/40">
                    <img src="/images/avatar.jpg" alt="Mst. Farjana Yasmin Jyoti Profile" class="w-full h-full object-cover rounded-2xl shadow-inner">
                    
                    <!-- Floating Professional Badges -->
                    <div class="absolute -bottom-4 -left-4 glass-panel px-4 py-2.5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl flex items-center gap-2.5">
                        <div class="w-3 h-3 rounded-full bg-indigo-500"></div>
                        <span class="text-xs font-semibold font-mono text-slate-800 dark:text-slate-200">ECE Graduate Engineer</span>
                    </div>
                    <div class="absolute -top-4 -right-4 glass-panel px-4 py-2.5 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-xl flex items-center gap-2.5">
                        <div class="w-3 h-3 rounded-full bg-cyan-500"></div>
                        <span class="text-xs font-semibold font-mono text-slate-800 dark:text-slate-200">Laravel 13 & Livewire Developer</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT & PHILOSOPHY SECTION -->
        <section id="about" class="scroll-mt-28 space-y-8">
            <div class="max-w-3xl">
                <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">01 // PROFESSIONAL OVERVIEW</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Engineering Background & Core Focus</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-4 hover:border-indigo-500/50 transition-all shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xl border border-indigo-500/20">⚡</div>
                    <h3 class="text-lg font-bold">Full-Stack Web Architecture</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Designing reliable web applications using PHP 8.3, Laravel 13 MVC patterns, Livewire reactive components, relational database schemas, and clean RESTful API design.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-4 hover:border-violet-500/50 transition-all shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 flex items-center justify-center font-bold text-xl border border-violet-500/20">📡</div>
                    <h3 class="text-lg font-bold">Electronics & Communication</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Comprehensive B.Sc. training in Communication Theory, Wireless Signal Processing, Microcontroller Architectures, Embedded C/C++, and Circuit Analysis.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-4 hover:border-cyan-500/50 transition-all shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 flex items-center justify-center font-bold text-xl border border-cyan-500/20">🌐</div>
                    <h3 class="text-lg font-bold">IoT Hardware & Cloud Telemetry</h3>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                        Bridging physical sensors with cloud dashboards via MQTT protocols, WebSockets, and real-time data visualization interfaces.
                    </p>
                </div>
            </div>
        </section>

        <!-- SKILLS & COMPETENCIES SECTION -->
        <section id="skills" class="scroll-mt-28 space-y-8">
            <div>
                <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">02 // TECHNICAL MATRIX</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Core Engineering Skills</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Column 1: Web Development -->
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-5 shadow-sm">
                    <h3 class="text-xl font-bold flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded-full bg-indigo-500"></span> Software & Web Engineering
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>PHP 8.3 / Laravel 13 Framework</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-mono">92%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-violet-500 w-[92%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>Livewire 4, Flux UI & Alpine.js</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-mono">94%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-violet-500 to-cyan-500 w-[94%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>Tailwind CSS v4 & Responsive Layouts</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-mono">96%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-cyan-500 to-indigo-500 w-[96%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>MySQL / SQLite Relational Databases</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-mono">90%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-emerald-500 w-[90%]"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Column 2: ECE & Embedded Stack -->
                <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-5 shadow-sm">
                    <h3 class="text-xl font-bold flex items-center gap-2.5">
                        <span class="w-3 h-3 rounded-full bg-cyan-500"></span> ECE & Embedded Hardware
                    </h3>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>Microcontroller Interfacing (ESP32 / Arduino / C++)</span>
                                <span class="text-cyan-600 dark:text-cyan-400 font-mono">88%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-cyan-500 to-indigo-500 w-[88%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>Telecommunications & Signal Systems</span>
                                <span class="text-cyan-600 dark:text-cyan-400 font-mono">86%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-violet-500 to-indigo-500 w-[86%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>IoT Communication (MQTT, WebSockets, HTTP APIs)</span>
                                <span class="text-cyan-600 dark:text-cyan-400 font-mono">89%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-indigo-500 to-cyan-400 w-[89%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-sm font-semibold mb-1.5">
                                <span>Git, Vite, Linux & Circuit Simulation Tools</span>
                                <span class="text-cyan-600 dark:text-cyan-400 font-mono">85%</span>
                            </div>
                            <div class="h-2 rounded-full bg-slate-200 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-indigo-500 w-[85%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURED PROJECTS SECTION -->
        <section id="projects" class="scroll-mt-28 space-y-8">
            <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4">
                <div>
                    <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">03 // FEATURED WORK</span>
                    <h2 class="text-3xl sm:text-4xl font-bold mt-2">Engineering Projects & Capstones</h2>
                </div>
                <p class="text-sm text-slate-500 dark:text-slate-400 max-w-md">Production web applications, ECE capstone engineering implementations, and telemetry systems.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 overflow-hidden hover:border-indigo-500/60 hover:shadow-2xl transition-all duration-300 shadow-sm">
                    <div class="relative overflow-hidden aspect-video bg-slate-950">
                        <img src="/images/project_analytics.jpg" alt="IoT Telemetry & Analytics Dashboard" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-semibold font-mono border border-indigo-500/20">ECE Senior Capstone</span>
                            <span class="px-2.5 py-1 rounded-md bg-violet-500/10 text-violet-600 dark:text-violet-400 text-xs font-semibold font-mono border border-violet-500/20">IoT Telemetry</span>
                        </div>
                        <h3 class="text-xl font-bold group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">IoT Telemetry Dashboard</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            End-to-end telemetry system capturing sensor streams from ESP32 microcontrollers over MQTT and displaying telemetry metrics on a real-time Laravel Livewire dashboard.
                        </p>
                        <div class="pt-3">
                            <button onclick="openModal('IoT Telemetry Dashboard', 'Real-time telemetry monitoring platform connecting ESP32 microcontrollers with a Laravel Livewire backend dashboard via MQTT protocols.', '/images/project_analytics.jpg', ['Laravel 13', 'Livewire 4', 'ESP32 / MQTT', 'Tailwind CSS v4', 'SQLite'])" class="inline-flex items-center gap-1.5 text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 group-hover:translate-x-1 transition-all">
                                <span>View Engineering Details</span>
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 overflow-hidden hover:border-violet-500/60 hover:shadow-2xl transition-all duration-300 shadow-sm">
                    <div class="relative overflow-hidden aspect-video bg-slate-950">
                        <img src="/images/project_ecommerce.jpg" alt="Nexus E-Commerce Platform" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-violet-500/10 text-violet-600 dark:text-violet-400 text-xs font-semibold font-mono border border-violet-500/20">Full-Stack</span>
                            <span class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-semibold font-mono border border-cyan-500/20">Passkeys</span>
                        </div>
                        <h3 class="text-xl font-bold group-hover:text-violet-600 dark:group-hover:text-violet-400 transition-colors">Nexus E-Commerce Store</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Modern high-performance web storefront built with Laravel Fortify, WebAuthn Passkeys authentication, Alpine.js reactive cart, and responsive interface.
                        </p>
                        <div class="pt-3">
                            <button onclick="openModal('Nexus E-Commerce Store', 'Modern responsive web store application featuring Passkey passwordless login, cart management, and SQLite database storage.', '/images/project_ecommerce.jpg', ['Laravel Fortify', 'Passkeys', 'Alpine.js', 'Vite', 'Tailwind CSS'])" class="inline-flex items-center gap-1.5 text-sm font-semibold text-violet-600 dark:text-violet-400 hover:text-violet-500 group-hover:translate-x-1 transition-all">
                                <span>View Engineering Details</span>
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 overflow-hidden hover:border-cyan-500/60 hover:shadow-2xl transition-all duration-300 shadow-sm">
                    <div class="relative overflow-hidden aspect-video bg-slate-950">
                        <img src="/images/project_workflow.jpg" alt="Signal Automation Engine" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6 space-y-3">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-semibold font-mono border border-cyan-500/20">Communication</span>
                            <span class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-semibold font-mono border border-indigo-500/20">Automation</span>
                        </div>
                        <h3 class="text-xl font-bold group-hover:text-cyan-600 dark:group-hover:text-cyan-400 transition-colors">Signal Processing Engine</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed">
                            Event-driven workflow system processing incoming telemetry signal events, generating automated alerts, and executing background queue handlers.
                        </p>
                        <div class="pt-3">
                            <button onclick="openModal('Signal Processing Engine', 'Event-driven logic automation system designed for processing incoming telemetry signals and dispatching asynchronous alerts.', '/images/project_workflow.jpg', ['PHP 8.3', 'Livewire', 'WebSockets', 'Tailwind CSS v4'])" class="inline-flex items-center gap-1.5 text-sm font-semibold text-cyan-600 dark:text-cyan-400 hover:text-cyan-500 group-hover:translate-x-1 transition-all">
                                <span>View Engineering Details</span>
                                <span>→</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EDUCATION & ACADEMIC ACHIEVEMENTS -->
        <section id="education" class="scroll-mt-28 space-y-8">
            <div>
                <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">04 // EDUCATION & QUALIFICATIONS</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Academic Background</h2>
            </div>

            <div class="relative border-l-2 border-slate-300 dark:border-slate-800 ml-4 sm:ml-6 space-y-10">
                <!-- Degree Entry -->
                <div class="relative pl-6 sm:pl-8 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-indigo-600 ring-4 ring-slate-50 dark:ring-slate-950"></div>
                    <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 shadow-sm">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-xl font-bold">Bachelor of Science in Electronics & Communication Engineering (ECE)</h3>
                            <span class="px-3.5 py-1 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-semibold font-mono border border-indigo-500/20">Graduated B.Sc. Engineer</span>
                        </div>
                        <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Department of Electronics & Communication Engineering</div>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed pt-2">
                            Comprehensive engineering curriculum covering Digital Signal Processing, Wireless & Optical Communications, Microprocessor Architectures, Object-Oriented Software Engineering, Database Systems, and Network Protocols.
                        </p>
                    </div>
                </div>

                <!-- Capstone Entry -->
                <div class="relative pl-6 sm:pl-8 group">
                    <div class="absolute -left-[9px] top-1.5 w-4 h-4 rounded-full bg-violet-500 ring-4 ring-slate-50 dark:ring-slate-950"></div>
                    <div class="p-7 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 shadow-sm">
                        <div class="flex flex-wrap items-center justify-between gap-2">
                            <h3 class="text-xl font-bold">Senior Engineering Capstone & Defense</h3>
                            <span class="px-3.5 py-1 rounded-full bg-violet-500/10 text-violet-600 dark:text-violet-400 text-xs font-semibold font-mono border border-violet-500/20">Graduation Thesis Project</span>
                        </div>
                        <div class="text-sm font-medium text-slate-500 dark:text-slate-400">Integrated Hardware & Web Cloud Dashboard</div>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed pt-2">
                            Successfully presented and defended capstone project integrating microcontrollers with a cloud-hosted Laravel web interface over MQTT for real-time telemetry tracking and fault detection.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="scroll-mt-28 space-y-8">
            <div>
                <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">05 // PROFESSIONAL INQUIRIES</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Get in Touch</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Contact Card -->
                <div class="lg:col-span-5 p-8 rounded-2xl bg-gradient-to-br from-indigo-900 via-indigo-950 to-slate-950 border border-indigo-800/60 text-white space-y-6 shadow-2xl">
                    <h3 class="text-2xl font-bold">Open to Software Engineering & Technical Opportunities</h3>
                    <p class="text-indigo-100 text-sm leading-relaxed">
                        I am seeking full-time roles as an Entry-Level / Junior Software Engineer, Full-Stack Developer, or ECE Engineering Specialist.
                    </p>

                    <div class="space-y-4 pt-4 border-t border-indigo-800/80">
                        <div class="flex items-center gap-3.5 text-sm">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 flex items-center justify-center font-bold">📧</div>
                            <div>
                                <div class="text-xs text-indigo-300">Direct Email</div>
                                <a href="mailto:farjana@example.com" class="font-semibold text-white hover:text-indigo-300 transition-colors">farjana@example.com</a>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5 text-sm">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 flex items-center justify-center font-bold">🎓</div>
                            <div>
                                <div class="text-xs text-indigo-300">Qualification</div>
                                <div class="font-semibold text-white">B.Sc. Engineering in ECE</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5 text-sm">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 flex items-center justify-center font-bold">🌐</div>
                            <div>
                                <div class="text-xs text-indigo-300">Professional Networks</div>
                                <div class="font-semibold flex items-center gap-3 mt-1">
                                    <a href="https://github.com" target="_blank" class="text-white hover:text-indigo-300 transition-colors">GitHub</a>
                                    <span class="text-indigo-400">•</span>
                                    <a href="https://linkedin.com" target="_blank" class="text-white hover:text-indigo-300 transition-colors">LinkedIn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Professional Form -->
                <div class="lg:col-span-7 p-8 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 shadow-sm space-y-6">
                    <form id="contactForm" onsubmit="handleContactSubmit(event)" class="space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1.5">Your Name</label>
                                <input type="text" id="name" required placeholder="Hiring Manager / Team Lead" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 text-sm text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1.5">Work Email</label>
                                <input type="email" id="email" required placeholder="recruiter@company.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 text-sm text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1.5">Subject</label>
                            <input type="text" id="subject" required placeholder="Software Engineer Position Inquiry" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 text-sm text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all">
                        </div>
                        <div>
                            <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-1.5">Message</label>
                            <textarea id="message" rows="4" required placeholder="Provide role overview or interview schedule details..." class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 text-sm text-slate-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-all"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3.5 px-6 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-semibold text-sm shadow-lg shadow-indigo-600/20 active:scale-[0.99] transition-all">
                            Send Communication
                        </button>
                    </form>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200/80 dark:border-slate-800 py-8 relative z-10 bg-slate-100 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-slate-400 font-medium">
            <div>
                © {{ date('Y') }} Mst. Farjana Yasmin Jyoti (B.Sc. Engineer in ECE). Built with Laravel 13 & Livewire 4.
            </div>
            <div class="flex items-center gap-4">
                <a href="#hero" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Back to top ↑</a>
            </div>
        </div>
    </footer>

    <!-- Interactive Resume Modal -->
    <div id="resumeModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md transition-opacity">
        <div class="relative w-full max-w-3xl bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-2xl space-y-6 p-6 sm:p-8 animate-in fade-in zoom-in duration-200">
            <button onclick="closeResumeModal()" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center justify-center">✕</button>

            <div class="flex items-center gap-4 border-b border-slate-200 dark:border-slate-800 pb-4">
                <div class="w-12 h-12 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-xl border border-indigo-500/20">📄</div>
                <div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white">Curriculum Vitae Summary</h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400">Mst. Farjana Yasmin Jyoti • B.Sc. Engineer in ECE</p>
                </div>
            </div>

            <div class="space-y-4 text-sm text-slate-700 dark:text-slate-300 max-h-[60vh] overflow-y-auto pr-2">
                <div>
                    <h4 class="font-bold text-indigo-600 dark:text-indigo-400 uppercase text-xs font-mono mb-1">Academic Degree</h4>
                    <p>B.Sc. in Electronics & Communication Engineering (ECE)</p>
                </div>
                <div>
                    <h4 class="font-bold text-indigo-600 dark:text-indigo-400 uppercase text-xs font-mono mb-1">Key Software Skills</h4>
                    <p>PHP 8.3, Laravel 13, Livewire 4, Tailwind CSS v4, MySQL, SQLite, JavaScript (ES6+), Alpine.js, REST APIs.</p>
                </div>
                <div>
                    <h4 class="font-bold text-indigo-600 dark:text-indigo-400 uppercase text-xs font-mono mb-1">ECE Engineering Skills</h4>
                    <p>Embedded Systems, Microcontrollers (ESP32/Arduino), Wireless Telecommunication, MQTT Protocols, MATLAB, Signals & Systems.</p>
                </div>
                <div>
                    <h4 class="font-bold text-indigo-600 dark:text-indigo-400 uppercase text-xs font-mono mb-1">Senior Capstone Thesis</h4>
                    <p>IoT Telemetry Dashboard System (Real-time hardware sensor stream monitoring via MQTT to Laravel Livewire dashboard).</p>
                </div>
            </div>

            <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex justify-end gap-3">
                <button onclick="closeResumeModal()" class="px-5 py-2.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 text-xs font-semibold hover:bg-slate-200 dark:hover:bg-slate-700">Close Window</button>
            </div>
        </div>
    </div>

    <!-- Interactive Project Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md transition-opacity">
        <div class="relative w-full max-w-2xl bg-white dark:bg-slate-900 rounded-3xl border border-slate-200 dark:border-slate-800 overflow-hidden shadow-2xl space-y-4 p-6 sm:p-8 animate-in fade-in zoom-in duration-200">
            <button onclick="closeModal()" class="absolute top-4 right-4 w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-500 hover:text-slate-900 dark:hover:text-white flex items-center justify-center">✕</button>
            <div class="aspect-video w-full rounded-2xl overflow-hidden bg-slate-950">
                <img id="modalImg" src="" alt="" class="w-full h-full object-cover">
            </div>
            <h3 id="modalTitle" class="text-2xl font-bold text-slate-900 dark:text-white"></h3>
            <p id="modalDesc" class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed"></p>
            <div id="modalTags" class="flex flex-wrap gap-2 pt-2"></div>
        </div>
    </div>

    <!-- Contact Toast -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 hidden items-center gap-3 px-5 py-3.5 rounded-2xl bg-emerald-600 text-white shadow-2xl font-medium text-sm animate-bounce">
        <span>✨ Communication received successfully! I will respond promptly.</span>
    </div>

    <!-- Theme Toggle & Interactivity Script -->
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const themeSun = document.getElementById('themeSun');
        const themeMoon = document.getElementById('themeMoon');

        function setTheme(isDark) {
            if (isDark) {
                document.documentElement.classList.add('dark');
                themeSun.classList.remove('hidden');
                themeMoon.classList.add('hidden');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                themeSun.classList.add('hidden');
                themeMoon.classList.remove('hidden');
                localStorage.setItem('theme', 'light');
            }
        }

        // Initialize Theme from localStorage or default to Dark
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'light') {
            setTheme(false);
        } else {
            setTheme(true);
        }

        themeToggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            setTheme(!isDark);
        });

        // Resume Modal Handlers
        function openResumeModal() {
            const modal = document.getElementById('resumeModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeResumeModal() {
            const modal = document.getElementById('resumeModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Project Modal Handlers
        function openModal(title, desc, img, tags) {
            document.getElementById('modalTitle').textContent = title;
            document.getElementById('modalDesc').textContent = desc;
            document.getElementById('modalImg').src = img;
            
            const tagsContainer = document.getElementById('modalTags');
            tagsContainer.innerHTML = '';
            tags.forEach(t => {
                const tagSpan = document.createElement('span');
                tagSpan.className = 'px-3 py-1 rounded-full bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-semibold font-mono border border-indigo-500/20';
                tagSpan.textContent = t;
                tagsContainer.appendChild(tagSpan);
            });

            const modal = document.getElementById('projectModal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeModal() {
            const modal = document.getElementById('projectModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Contact Form Handlers
        function handleContactSubmit(e) {
            e.preventDefault();
            const toast = document.getElementById('toast');
            toast.classList.remove('hidden');
            toast.classList.add('flex');

            document.getElementById('contactForm').reset();

            setTimeout(() => {
                toast.classList.add('hidden');
                toast.classList.remove('flex');
            }, 4000);
        }
    </script>
</body>
</html>
