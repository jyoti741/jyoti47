<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detailed Engineering Profile & Technical Specifications | Mst. Farjana Yasmin Jyoti</title>

    <meta name="description" content="Comprehensive engineering portfolio, detailed ECE academic curriculum, senior capstone thesis architecture, and full-stack software specifications for Mst. Farjana Yasmin Jyoti.">
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
    <div class="fixed top-0 left-1/2 -translate-x-1/2 w-[55rem] h-[35rem] bg-gradient-to-b from-indigo-500/10 dark:from-indigo-900/20 via-cyan-500/5 dark:via-cyan-900/10 to-transparent blur-3xl pointer-events-none z-0"></div>
    <div class="fixed top-1/3 -right-40 w-96 h-96 bg-violet-500/10 dark:bg-violet-900/15 rounded-full blur-3xl pointer-events-none z-0"></div>
    <div class="fixed bottom-0 -left-40 w-[30rem] h-[30rem] bg-cyan-500/10 dark:bg-cyan-950/30 rounded-full blur-3xl pointer-events-none z-0"></div>

    <!-- Glass Header -->
    <header class="sticky top-0 z-50 glass-panel border-b border-slate-200/80 dark:border-slate-800/80 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
            
            <!-- Brand Identity -->
            <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                <div class="relative w-11 h-11 rounded-xl bg-gradient-to-tr from-indigo-600 via-indigo-500 to-cyan-400 p-[2px] shadow-lg shadow-indigo-500/20 group-hover:scale-105 transition-transform duration-300">
                    <img src="/images/avatar.jpg" alt="Mst. Farjana Yasmin Jyoti" class="w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-base tracking-tight leading-tight group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">Mst. Farjana Yasmin Jyoti</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">B.Sc. Engineer in ECE • Detailed Profile</span>
                </div>
            </a>

            <!-- Navigation Links -->
            <nav class="hidden md:flex items-center gap-1 bg-slate-200/60 dark:bg-slate-900/80 p-1.5 rounded-full border border-slate-300/60 dark:border-slate-800 text-sm font-medium">
                <a href="{{ route('home') }}" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all flex items-center gap-1">
                    <span>← Home</span>
                </a>
                <a href="#curriculum" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Curriculum</a>
                <a href="#capstone" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Capstone Thesis</a>
                <a href="#architecture" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Architecture</a>
                <a href="#tooling" class="px-4 py-1.5 rounded-full text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-white/80 dark:hover:bg-slate-800/80 transition-all">Tooling</a>
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

                <!-- Return Home Button -->
                <a href="{{ route('home') }}" class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-xs font-semibold uppercase tracking-wider bg-indigo-600 text-white hover:bg-indigo-500 shadow-md shadow-indigo-600/20 transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                    <span>Main Portfolio</span>
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24 py-12">

        <!-- DETAILED PROFILE HERO -->
        <section class="pt-6 sm:pt-10 space-y-6 max-w-4xl">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 text-cyan-600 dark:text-cyan-400 text-xs font-semibold font-mono">
                <span class="w-2 h-2 rounded-full bg-cyan-500 animate-pulse"></span>
                TECHNICAL DEEP-DIVE & DETAILED SPECIFICATIONS
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-[1.12]">
                Detailed Technical Profile & <span class="bg-gradient-to-r from-cyan-500 via-indigo-500 to-violet-500 bg-clip-text text-transparent">Engineering Specifications</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 dark:text-slate-300 font-normal leading-relaxed">
                An exhaustive breakdown of academic background, core course competencies, senior capstone thesis architecture, software project telemetry, and hardware engineering stack for <strong>Mst. Farjana Yasmin Jyoti</strong>.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4">
                <div class="p-4 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800">
                    <div class="text-xs font-mono text-slate-500 dark:text-slate-400">DEGREE</div>
                    <div class="text-xl font-extrabold text-indigo-600 dark:text-indigo-400 mt-1">B.Sc. ECE</div>
                </div>
                <div class="p-4 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800">
                    <div class="text-xs font-mono text-slate-500 dark:text-slate-400">FOCUS</div>
                    <div class="text-xl font-extrabold text-violet-600 dark:text-violet-400 mt-1">Laravel & IoT</div>
                </div>
                <div class="p-4 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800">
                    <div class="text-xs font-mono text-slate-500 dark:text-slate-400">THESIS DEFENSE</div>
                    <div class="text-xl font-extrabold text-cyan-600 dark:text-cyan-400 mt-1">Completed</div>
                </div>
                <div class="p-4 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800">
                    <div class="text-xs font-mono text-slate-500 dark:text-slate-400">LOCATION</div>
                    <div class="text-xl font-extrabold text-emerald-600 dark:text-emerald-400 mt-1">Bangladesh</div>
                </div>
            </div>
        </section>

        <!-- SECTION 1: ACADEMIC CURRICULUM -->
        <section id="curriculum" class="scroll-mt-28 space-y-8">
            <div class="max-w-3xl">
                <span class="text-xs font-bold tracking-widest text-indigo-600 dark:text-indigo-400 uppercase font-mono">01 // ACADEMIC RIGOR</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">B.Sc. Electronics & Communication Engineering Curriculum</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm mt-2">Comprehensive coursework establishing rigorous foundational knowledge in hardware engineering, signal analysis, microcontrollers, and modern computer science.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Course 1 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-indigo-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-mono w-max font-bold border border-indigo-500/20">ECE-4101</div>
                    <h3 class="text-lg font-bold">Digital Signal Processing (DSP)</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Discrete-time signals, Z-transforms, Fast Fourier Transforms (FFT), FIR and IIR digital filter design, spectral estimation, and audio/image signal processing algorithms.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Tools: MATLAB, Signal Processing Toolbox</div>
                </div>

                <!-- Course 2 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-cyan-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-mono w-max font-bold border border-cyan-500/20">ECE-3205</div>
                    <h3 class="text-lg font-bold">Microcontrollers & Embedded Systems</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Architecture of 8-bit and 32-bit microcontrollers (ESP32, ATmega328P), assembly & C programming, timers, interrupts, ADC/DAC peripherals, I2C/SPI/UART protocol interfacing.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Tools: ESP-IDF, Arduino C++, Proteus VSM</div>
                </div>

                <!-- Course 3 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-violet-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-violet-500/10 text-violet-600 dark:text-violet-400 text-xs font-mono w-max font-bold border border-violet-500/20">ECE-3103</div>
                    <h3 class="text-lg font-bold">Telecommunication & Wireless Networks</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Analog & digital modulation schemes (AM, FM, QAM, BPSK), cellular mobile communications (4G/5G), optical fiber transmission, and IoT wireless communication standards.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Tools: Wireshark, MATLAB SimuLink</div>
                </div>

                <!-- Course 4 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-emerald-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-mono w-max font-bold border border-emerald-500/20">CSE-2201</div>
                    <h3 class="text-lg font-bold">Object-Oriented Software Engineering</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Object-oriented programming principles (Encapsulation, Inheritance, Polymorphism), SOLID design patterns, UML class modeling, software testing, and clean code refactoring.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Languages: PHP 8.3, C++</div>
                </div>

                <!-- Course 5 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-indigo-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-mono w-max font-bold border border-indigo-500/20">CSE-3107</div>
                    <h3 class="text-lg font-bold">Database Management Systems</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Relational database architecture, ER diagramming, SQL schema design, normalization (1NF-3NF), indexing optimization, transactions (ACID principles), and ORM mappings.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Engines: MySQL, SQLite</div>
                </div>

                <!-- Course 6 -->
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3 hover:border-cyan-500/50 transition-all shadow-sm">
                    <div class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-mono w-max font-bold border border-cyan-500/20">ECE-2101</div>
                    <h3 class="text-lg font-bold">Electronic Circuits & VLSI Fundamentals</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Operational amplifiers, semiconductor physics, diode/transistor biasing, CMOS digital logic design, circuit frequency response, and basic Verilog HDL simulation.
                    </p>
                    <div class="pt-2 text-xs font-mono text-slate-500 dark:text-slate-400">Key Simulators: LTSpice, Multisim</div>
                </div>

            </div>
        </section>

        <!-- SECTION 2: SENIOR CAPSTONE THESIS DEEP-DIVE -->
        <section id="capstone" class="scroll-mt-28 space-y-8">
            <div class="max-w-3xl">
                <span class="text-xs font-bold tracking-widest text-cyan-600 dark:text-cyan-400 uppercase font-mono">02 // RESEARCH CAPSTONE THESIS</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">IoT Telemetry & Microcontroller Analytics Platform</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm mt-2">Senior Engineering Defense Project bridging hardware sensors with cloud application architecture.</p>
            </div>

            <!-- Banner Image -->
            <div class="relative rounded-3xl overflow-hidden border border-slate-200 dark:border-slate-800 shadow-2xl bg-slate-950 aspect-[21/9]">
                <img src="/images/project_research.jpg" alt="High Tech Electronics & Microcontrollers Research Lab" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 flex flex-col sm:flex-row items-start sm:items-end justify-between gap-4">
                    <div>
                        <div class="text-xs font-mono text-cyan-400 uppercase font-bold tracking-wider mb-1">Capstoned Thesis Architecture</div>
                        <h3 class="text-2xl font-bold text-white">ESP32 Sensor Array → MQTT Broker → Laravel Livewire 4 Dashboard</h3>
                    </div>
                    <div class="flex gap-2">
                        <span class="px-3 py-1 rounded-lg bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-mono">MQTT Standard</span>
                        <span class="px-3 py-1 rounded-lg bg-cyan-500/20 text-cyan-300 border border-cyan-500/30 text-xs font-mono">Real-time WebSockets</span>
                    </div>
                </div>
            </div>

            <!-- Architecture Breakdown Grid -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                
                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3">
                    <div class="w-8 h-8 rounded-lg bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-bold text-sm">1</div>
                    <h4 class="font-bold text-base">Hardware & Sensors</h4>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        ESP32 microcontroller connected to analog/digital sensor modules (temperature, humidity, voltage telemetry, vibration sensors) operating on low-power C++ firmware.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3">
                    <div class="w-8 h-8 rounded-lg bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 flex items-center justify-center font-bold text-sm">2</div>
                    <h4 class="font-bold text-base">Transport & MQTT Broker</h4>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Telemetry payloads packaged as compact JSON strings and transmitted over Wi-Fi using lightweight MQTT publish/subscribe topics to a central Mosquitto broker.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3">
                    <div class="w-8 h-8 rounded-lg bg-violet-500/10 text-violet-600 dark:text-violet-400 flex items-center justify-center font-bold text-sm">3</div>
                    <h4 class="font-bold text-base">Laravel Backend & Queues</h4>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        PHP 8.3 background listeners parse sensor payloads, evaluate anomaly threshold rules, persist time-series logs into SQLite/MySQL, and broadcast event updates.
                    </p>
                </div>

                <div class="p-6 rounded-2xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-3">
                    <div class="w-8 h-8 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-bold text-sm">4</div>
                    <h4 class="font-bold text-base">Livewire 4 Dashboard</h4>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed">
                        Reactive web interface displaying live metric charts, active alarm notifications, interactive control relays, and historical telemetry log exports without page reloads.
                    </p>
                </div>

            </div>
        </section>

        <!-- SECTION 3: SYSTEM ARCHITECTURE & PROJECTS SPECIFICATION -->
        <section id="architecture" class="scroll-mt-28 space-y-8">
            <div class="max-w-3xl">
                <span class="text-xs font-bold tracking-widest text-violet-600 dark:text-violet-400 uppercase font-mono">03 // SOFTWARE SPECIFICATIONS</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Engineering Projects & Technical Architecture</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm mt-2">Deep dive into software design patterns, authentication models, and data pipelines built across projects.</p>
            </div>

            <div class="space-y-8">
                
                <!-- Project Specs 1 -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center shadow-sm">
                    <div class="lg:col-span-5 rounded-2xl overflow-hidden aspect-video bg-slate-950">
                        <img src="/images/project_analytics.jpg" alt="Telemetry Platform" class="w-full h-full object-cover">
                    </div>
                    <div class="lg:col-span-7 space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-mono font-bold border border-indigo-500/20">TELEMETRY PLATFORM</span>
                            <span class="px-2.5 py-1 rounded-md bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 text-xs font-mono font-bold border border-emerald-500/20">PRODUCTION READY</span>
                        </div>
                        <h3 class="text-2xl font-bold">IoT Telemetry & Analytics Dashboard System</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            Built with Laravel 13 and Livewire 4 to monitor hardware telemetry streams. Key achievements include sub-second reactivity, automatic sensor disconnect detection, and responsive dark/light UI using Tailwind CSS v4.
                        </p>
                        <div class="grid grid-cols-2 gap-3 text-xs font-mono pt-2 border-t border-slate-200/80 dark:border-slate-800">
                            <div><span class="text-slate-500">Backend:</span> Laravel 13 / PHP 8.3</div>
                            <div><span class="text-slate-500">Protocol:</span> MQTT & WebSockets</div>
                            <div><span class="text-slate-500">Database:</span> SQLite / MySQL</div>
                            <div><span class="text-slate-500">Frontend:</span> Livewire 4 + Tailwind v4</div>
                        </div>
                    </div>
                </div>

                <!-- Project Specs 2 -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center shadow-sm">
                    <div class="lg:col-span-5 rounded-2xl overflow-hidden aspect-video bg-slate-950 lg:order-2">
                        <img src="/images/project_ecommerce.jpg" alt="Nexus Storefront" class="w-full h-full object-cover">
                    </div>
                    <div class="lg:col-span-7 space-y-4 lg:order-1">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-violet-500/10 text-violet-600 dark:text-violet-400 text-xs font-mono font-bold border border-violet-500/20">FULL-STACK WEB STORE</span>
                            <span class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-mono font-bold border border-cyan-500/20">WEBAUTHN PASSKEYS</span>
                        </div>
                        <h3 class="text-2xl font-bold">Nexus E-Commerce Storefront Architecture</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            A modern web commerce application featuring passwordless WebAuthn / Passkeys authentication via Laravel Fortify, dynamic cart management with Alpine.js, and structured relational product schema.
                        </p>
                        <div class="grid grid-cols-2 gap-3 text-xs font-mono pt-2 border-t border-slate-200/80 dark:border-slate-800">
                            <div><span class="text-slate-500">Auth:</span> Passkeys & Fortify</div>
                            <div><span class="text-slate-500">Reactivity:</span> Alpine.js</div>
                            <div><span class="text-slate-500">Bundler:</span> Vite 6</div>
                            <div><span class="text-slate-500">Styling:</span> Tailwind CSS v4</div>
                        </div>
                    </div>
                </div>

                <!-- Project Specs 3 -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center shadow-sm">
                    <div class="lg:col-span-5 rounded-2xl overflow-hidden aspect-video bg-slate-950">
                        <img src="/images/project_workflow.jpg" alt="Signal Automation Engine" class="w-full h-full object-cover">
                    </div>
                    <div class="lg:col-span-7 space-y-4">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-1 rounded-md bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 text-xs font-mono font-bold border border-cyan-500/20">AUTOMATION ENGINE</span>
                            <span class="px-2.5 py-1 rounded-md bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 text-xs font-mono font-bold border border-indigo-500/20">EVENT QUEUES</span>
                        </div>
                        <h3 class="text-2xl font-bold">Signal Processing & Event Automation Engine</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed">
                            Event-driven engine that processes incoming signal events asynchronously. Features automated queue retry mechanisms, email/webhook alert dispatches, and granular execution logging.
                        </p>
                        <div class="grid grid-cols-2 gap-3 text-xs font-mono pt-2 border-t border-slate-200/80 dark:border-slate-800">
                            <div><span class="text-slate-500">Queues:</span> Laravel Database Queues</div>
                            <div><span class="text-slate-500">Language:</span> PHP 8.3 Strict Types</div>
                            <div><span class="text-slate-500">Logging:</span> Monolog / Event Loggers</div>
                            <div><span class="text-slate-500">Testing:</span> PHPUnit / Pest</div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- SECTION 4: TECHNICAL TOOLING & SKILLS MATRIX -->
        <section id="tooling" class="scroll-mt-28 space-y-8">
            <div class="max-w-3xl">
                <span class="text-xs font-bold tracking-widest text-emerald-600 dark:text-emerald-400 uppercase font-mono">04 // STACK MATRIX</span>
                <h2 class="text-3xl sm:text-4xl font-bold mt-2">Tools, Frameworks & Development Stack</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Card: Web Software Stack -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-6">
                    <h3 class="text-xl font-bold text-indigo-600 dark:text-indigo-400 flex items-center gap-2">
                        <span>💻</span> Software Development Stack
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">LANGUAGES & BACKEND</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">PHP 8.3</span>
                                <span class="px-3 py-1.5 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20 text-xs font-semibold">Laravel 13</span>
                                <span class="px-3 py-1.5 rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 border border-violet-500/20 text-xs font-semibold">Livewire 4</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">JavaScript (ES6+)</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">SQL</span>
                            </div>
                        </div>

                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">FRONTEND & STYLING</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 border border-cyan-500/20 text-xs font-semibold">Tailwind CSS v4</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Alpine.js</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">HTML5 / Blade</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Responsive Design</span>
                            </div>
                        </div>

                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">DATABASES & INFRASTRUCTURE</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">MySQL</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">SQLite</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Redis</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Laravel Herd</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Vite 6</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card: ECE & Hardware Stack -->
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900/60 border border-slate-200/80 dark:border-slate-800 space-y-6">
                    <h3 class="text-xl font-bold text-cyan-600 dark:text-cyan-400 flex items-center gap-2">
                        <span>📡</span> ECE & Hardware Engineering Stack
                    </h3>

                    <div class="space-y-4">
                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">EMBEDDED HARDWARE & C++</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 border border-cyan-500/20 text-xs font-semibold">ESP32</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Arduino MCU</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Embedded C++</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">I2C / SPI / UART</span>
                            </div>
                        </div>

                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">TELEMETRY & PROTOCOLS</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 border border-indigo-500/20 text-xs font-semibold">MQTT Protocol</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">WebSockets</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">HTTP REST APIs</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Wireshark</span>
                            </div>
                        </div>

                        <div>
                            <div class="text-xs font-mono text-slate-500 mb-2">ENGINEERING SIMULATION TOOLS</div>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1.5 rounded-xl bg-violet-500/10 text-violet-600 dark:text-violet-400 border border-violet-500/20 text-xs font-semibold">MATLAB</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Proteus VSM</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">LTSpice</span>
                                <span class="px-3 py-1.5 rounded-xl bg-slate-100 dark:bg-slate-800 text-xs font-semibold">Git / GitHub</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-200/80 dark:border-slate-800 py-8 relative z-10 bg-slate-100 dark:bg-slate-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-slate-400 font-medium">
            <div>
                © {{ date('Y') }} Mst. Farjana Yasmin Jyoti (B.Sc. Engineer in ECE). Detailed Profile Specifications Page.
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">Return to Home ←</a>
            </div>
        </div>
    </footer>

    <!-- Theme Toggle Script -->
    <script>
        const themeToggle = document.getElementById('themeToggle');
        const themeSun = document.getElementById('themeSun');
        const themeMoon = document.getElementById('themeMoon');

        function updateThemeUI(isDark) {
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

        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark' || (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            updateThemeUI(true);
        } else {
            updateThemeUI(false);
        }

        themeToggle.addEventListener('click', () => {
            const isDark = document.documentElement.classList.contains('dark');
            updateThemeUI(!isDark);
        });
    </script>
</body>
</html>
