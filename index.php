<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moreh Global Innovative College | Portal</title>

    <!-- Tailwind CSS CDN for modern and clean utility styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        mgicBlue: '#1e3a8a', // Deep royal blue from logo
                        mgicOrange: '#f97316', // Vibrant orange from logo
                        mgicDark: '#0f172a',
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Premium Google Fonts for modern tech typography -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for clean, modern interface icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.75);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .bento-glow:hover {
            box-shadow: 0 20px 40px -15px rgba(30, 58, 138, 0.08);
            transform: translateY(-2px);
        }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-mgicOrange selection:text-white overflow-x-hidden">

    <!-- TOP ANNOUNCEMENT BAR -->
    <div
        class="bg-mgicOrange text-white text-center py-2.5 px-4 text-xs font-semibold tracking-wider uppercase relative z-50">
        <span class="bg-white/20 px-2 py-0.5 rounded text-[10px] font-black mr-2 tracking-normal">Notice</span>
        Welcome to the official informational portal of MGIC Victoria, Laguna.
    </div>

    <!-- FLOATING FIXED HEADER HUB -->
    <div class="fixed top-12 left-0 right-0 z-40 px-4 sm:px-6 lg:px-8">
        <header
            class="max-w-7xl mx-auto glass-card rounded-2xl px-6 h-20 flex items-center justify-between shadow-lg shadow-slate-200/50 relative">

            <!-- Logo / Title Area -->
            <div class="flex items-center space-x-3 select-none">
                <img src="354264045_643093787844317_3677144960425737849_n.jpg" alt="MGIC Logo"
                    class="w-10 h-10 rounded-full object-cover border-2 border-mgicOrange shadow-sm">
                <div>
                    <h1 class="text-xs font-black text-mgicBlue tracking-wider leading-none uppercase">Moreh Global</h1>
                    <span class="text-[9px] font-bold text-mgicOrange uppercase tracking-widest block mt-0.5">Innovative
                        College</span>
                </div>
            </div>

            <!-- Desktop Navigation Links & Campus Badge Bundle -->
            <div class="hidden md:flex items-center space-x-4">
                <nav
                    class="flex items-center space-x-1 bg-slate-100/80 p-1 rounded-xl border border-slate-200/40 text-xs font-bold text-slate-600">
                    <a href="#home"
                        class="px-4 py-2 rounded-lg hover:text-mgicBlue hover:bg-white transition-all duration-200">Home</a>
                    <a href="#announcements"
                        class="px-4 py-2 rounded-lg hover:text-mgicBlue hover:bg-white transition-all duration-200">Announcements</a>
                    <a href="#programs"
                        class="px-4 py-2 rounded-lg hover:text-mgicBlue hover:bg-white transition-all duration-200">Programs</a>
                    <a href="#about"
                        class="px-4 py-2 rounded-lg hover:text-mgicBlue hover:bg-white transition-all duration-200">About
                        Us</a>
                    <a href="inquiry.php"
                        class="ml-2 px-4 py-2 rounded-lg text-white bg-mgicOrange hover:bg-orange-600 shadow-sm shadow-mgicOrange/10 transition-all duration-200">Inquiry</a>
                </nav>

                <!-- Campus Badge Location -->
                <div
                    class="flex items-center space-x-2 text-[11px] font-bold uppercase tracking-wider text-mgicOrange bg-mgicOrange/10 px-3 py-2 rounded-xl border border-mgicOrange/20">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>Victoria, Laguna</span>
                </div>
            </div>

            <!-- Premium Hamburger Interactive Button (Visible on Mobile Only) -->
            <button id="mobileMenuBtn"
                class="group flex md:hidden flex-col items-center justify-center space-y-1 w-10 h-10 rounded-xl bg-slate-50 border border-slate-200/60 hover:bg-white transition-all duration-300 focus:outline-none z-50"
                aria-label="Toggle Navigation">
                <span id="line1"
                    class="w-5 h-0.5 bg-slate-600 rounded-full transition-all duration-300 transform origin-center group-hover:bg-mgicBlue"></span>
                <span id="line2"
                    class="w-5 h-0.5 bg-slate-600 rounded-full transition-all duration-300 group-hover:bg-mgicBlue"></span>
                <span id="line3"
                    class="w-5 h-0.5 bg-slate-600 rounded-full transition-all duration-300 transform origin-center group-hover:bg-mgicBlue"></span>
            </button>

            <!-- Modern Overlay Dropdown Menu (Hidden by default) -->
            <div id="mobileMenu"
                class="hidden absolute top-full left-0 right-0 md:hidden mt-3 p-3 bg-white/95 backdrop-blur-xl rounded-2xl border border-slate-200/80 shadow-xl shadow-slate-200/30 flex flex-col space-y-1 text-xs font-bold text-slate-600 z-50 transform origin-top opacity-0 scale-95 transition-all duration-300 ease-out">
                <a href="#home"
                    class="mobile-link flex items-center px-4 py-3.5 rounded-xl hover:text-mgicBlue hover:bg-slate-50 transition-all">
                    <span class="w-7 h-7 rounded-lg bg-blue-50 text-mgicBlue flex items-center justify-center mr-3"><i
                            class="fa-solid fa-house"></i></span> Home
                </a>
                <a href="#announcements"
                    class="mobile-link flex items-center px-4 py-3.5 rounded-xl hover:text-mgicBlue hover:bg-slate-50 transition-all">
                    <span
                        class="w-7 h-7 rounded-lg bg-orange-50 text-mgicOrange flex items-center justify-center mr-3"><i
                            class="fa-solid fa-bullhorn"></i></span> Announcements
                </a>
                <a href="#programs"
                    class="mobile-link flex items-center px-4 py-3.5 rounded-xl hover:text-mgicBlue hover:bg-slate-50 transition-all">
                    <span
                        class="w-7 h-7 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center mr-3"><i
                            class="fa-solid fa-graduation-cap"></i></span> Programs
                </a>
                <a href="#about"
                    class="mobile-link flex items-center px-4 py-3.5 rounded-xl hover:text-mgicBlue hover:bg-slate-50 transition-all">
                    <span
                        class="w-7 h-7 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center mr-3"><i
                            class="fa-solid fa-circle-info"></i></span> About Us
                </a>

                <div class="pt-2 border-t border-slate-100 mt-1">
                    <a href="inquiry.php"
                        class="mobile-link flex items-center justify-center w-full py-3.5 rounded-xl text-white bg-mgicOrange hover:bg-orange-600 shadow-md shadow-mgicOrange/10 transition-all">
                        <i class="fa-solid fa-paper-plane mr-2"></i> Submit Academic Inquiry
                    </a>
                </div>
            </div>
        </header>
    </div>

    <!-- Toggle Script Logic -->
    <script>
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        const line1 = document.getElementById('line1');
        const line2 = document.getElementById('line2');
        const line3 = document.getElementById('line3');

        function toggleMenu() {
            const isHidden = mobileMenu.classList.contains('hidden');

            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenu.classList.remove('opacity-0', 'scale-95');
                    mobileMenu.classList.add('opacity-100', 'scale-100');
                }, 10);

                // Morph Hamburger to "X"
                line1.style.transform = "translateY(6px) rotate(45deg)";
                line2.style.opacity = "0";
                line3.style.transform = "translateY(-6px) rotate(-45deg)";
            } else {
                mobileMenu.classList.remove('opacity-100', 'scale-100');
                mobileMenu.classList.add('opacity-0', 'scale-95');

                // Revert "X" to Hamburger
                line1.style.transform = "none";
                line2.style.opacity = "1";
                line3.style.transform = "none";

                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300);
            }
        }

        mobileMenuBtn.addEventListener('click', toggleMenu);

        // Close menu when clicking links
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (!mobileMenu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });
        });
    </script>

    <!-- HERO GRID HUB (BENTO LAYOUT) -->
    <section id="home" class="pt-48 pb-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <!-- Structural Background Accent Blobs -->
        <div
            class="absolute top-20 left-1/2 -translate-x-1/2 w-[70vw] h-[350px] bg-gradient-to-tr from-mgicBlue/5 to-mgicOrange/5 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 relative z-10">

            <!-- Bento Box 1: Large Core Heading Frame -->
            <div
                class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/80 flex flex-col justify-between shadow-sm bento-glow transition-all duration-300 min-h-[400px]">
                <div>
                    <span
                        class="inline-flex items-center px-3 py-1 rounded-md text-[10px] font-bold bg-blue-50 text-mgicBlue border border-blue-100 uppercase tracking-widest mb-6">
                        Established 2019 • MMXIX
                    </span>
                    <h2
                        class="text-3xl sm:text-5xl font-black tracking-tight text-mgicDark uppercase leading-none mb-4">
                        School of <br><span class="text-mgicOrange">Righteousness</span> <br>and Excellence
                    </h2>
                    <p class="text-slate-500 text-sm sm:text-base max-w-md leading-relaxed font-normal">
                        Empowering students through global standards and innovative learning pathways. Explore school
                        circulars, schedules, and curricular program layouts.
                    </p>
                </div>
                <div class="mt-8 flex flex-wrap gap-4 items-center">
                    <a href="#announcements"
                        class="inline-flex items-center justify-center px-5 py-3 text-xs font-bold uppercase tracking-wider rounded-xl text-white bg-mgicBlue hover:bg-blue-800 shadow-md shadow-mgicBlue/10 transition-all">
                        View Bulletins <i class="fa-solid fa-arrow-down ml-2"></i>
                    </a>
                    <a href="#programs"
                        class="inline-flex items-center justify-center px-5 py-3 text-xs font-bold uppercase tracking-wider rounded-xl text-slate-700 bg-slate-100 hover:bg-slate-200 transition-all">
                        Academic Offerings
                    </a>
                </div>
            </div>

            <!-- Bento Box 2: Premium Image Frame & Real-time Status Card -->
            <div class="lg:col-span-5 grid grid-cols-1 sm:grid-cols-2 gap-4">
                <!-- Sub-component: Logo Feature Header -->
                <div
                    class="sm:col-span-2 bg-gradient-to-br from-mgicBlue to-slate-900 rounded-3xl p-6 text-white flex items-center justify-between shadow-md relative overflow-hidden group">
                    <div class="absolute -right-10 -bottom-10 w-32 h-32 bg-mgicOrange/10 rounded-full blur-xl"></div>
                    <div class="space-y-1 z-10">
                        <p class="text-[10px] font-bold text-mgicOrange uppercase tracking-widest">Official Seal</p>
                        <h3 class="text-base font-extrabold tracking-tight leading-tight">Moreh Global Innovative
                            College</h3>
                        <p class="text-[11px] text-slate-300 font-medium"><i
                                class="fa-solid fa-layer-group text-mgicOrange mr-1"></i> Public Display Module</p>
                    </div>
                    <img src="354264045_643093787844317_3677144960425737849_n.jpg" alt="MGIC Crest Image"
                        class="w-20 h-20 rounded-2xl object-cover border-2 border-white/20 shadow-lg z-10 transition-transform duration-500 group-hover:scale-105">
                </div>

                <!-- Sub-component: Quick Live Dashboard Counter 1 -->
                <div
                    class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm bento-glow transition-all duration-300 flex flex-col justify-between">
                    <div
                        class="w-10 h-10 rounded-xl bg-mgicOrange/10 text-mgicOrange flex items-center justify-center text-sm">
                        <i class="fa-solid fa-calendar-day"></i>
                    </div>
                    <div class="mt-8">
                        <span class="text-xs text-slate-400 block font-medium">Current Semester</span>
                        <span class="text-sm font-bold text-mgicDark block mt-0.5">A.Y. 2026-2027</span>
                    </div>
                </div>

                <!-- Sub-component: Quick Live Dashboard Counter 2 -->
                <div
                    class="bg-white rounded-2xl p-5 border border-slate-200/80 shadow-sm bento-glow transition-all duration-300 flex flex-col justify-between">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-mgicBlue flex items-center justify-center text-sm">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <div class="mt-8">
                        <span class="text-xs text-slate-400 block font-medium">Latest Update</span>
                        <span class="text-sm font-bold text-mgicDark block mt-0.5 truncate">Enrollment Open</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ANNOUNCEMENTS BOARD SECTION -->
    <section id="announcements" class="py-20 bg-slate-100 border-y border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-bold text-mgicOrange uppercase tracking-widest block mb-2">Notice
                        Stream</span>
                    <h2 class="text-3xl font-black text-mgicDark uppercase tracking-tight">
                        <i class="fa-solid fa-bullhorn text-mgicOrange mr-2"></i>Campus Bulletins
                    </h2>
                </div>
                <p class="mt-2 md:mt-0 text-xs text-slate-500 font-medium max-w-xs">
                    Stay informed with the latest public structural updates direct from institutional administration.
                </p>
            </div>

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Announcement Card 1 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/60 flex flex-col justify-between transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-400 mb-4">
                            <span><i class="fa-regular fa-calendar-check text-mgicOrange mr-1"></i> May 25, 2026</span>
                            <span
                                class="text-mgicOrange uppercase bg-mgicOrange/10 px-2 py-0.5 rounded tracking-wider text-[9px]">Registrar</span>
                        </div>
                        <h3 class="text-base font-extrabold text-mgicBlue mb-2 leading-snug">Regular Enrollment Period
                            Guidelines</h3>
                        <p class="text-xs text-slate-500 font-normal leading-relaxed">Documentary requirements checklist
                            and evaluation phases for returning students and upcoming freshmen applicants for the next
                            incoming school year term.</p>
                    </div>
                    <div
                        class="pt-4 mt-6 border-t border-slate-100 flex items-center justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <span>Information Desk Advisory</span>
                        <i class="fa-solid fa-circle-nodes text-mgicOrange"></i>
                    </div>
                </div>

                <!-- Announcement Card 2 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/60 flex flex-col justify-between transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-400 mb-4">
                            <span><i class="fa-regular fa-calendar-check text-mgicBlue mr-1"></i> May 18, 2026</span>
                            <span
                                class="text-mgicBlue uppercase bg-blue-50 px-2 py-0.5 rounded tracking-wider text-[9px]">Events</span>
                        </div>
                        <h3 class="text-base font-extrabold text-mgicBlue mb-2 leading-snug">Upcoming Academic Year
                            Foundations Week</h3>
                        <p class="text-xs text-slate-500 font-normal leading-relaxed">Preview list of collaborative
                            activities, sports events, exhibit booths, and seminar series scheduled to showcase
                            innovative student outputs.</p>
                    </div>
                    <div
                        class="pt-4 mt-6 border-t border-slate-100 flex items-center justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <span>Information Desk Advisory</span>
                        <i class="fa-solid fa-circle-nodes text-mgicBlue"></i>
                    </div>
                </div>

                <!-- Announcement Card 3 -->
                <div
                    class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/60 flex flex-col justify-between transition-all duration-300 hover:shadow-md">
                    <div>
                        <div class="flex items-center justify-between text-[11px] font-bold text-slate-400 mb-4">
                            <span><i class="fa-regular fa-calendar-check text-amber-600 mr-1"></i> May 10, 2026</span>
                            <span
                                class="text-amber-700 uppercase bg-amber-50 px-2 py-0.5 rounded tracking-wider text-[9px]">Academic
                                Affairs</span>
                        </div>
                        <h3 class="text-base font-extrabold text-mgicBlue mb-2 leading-snug">Midterm Review and Resource
                            Access</h3>
                        <p class="text-xs text-slate-500 font-normal leading-relaxed">Open library viewing schedules and
                            reference manual listings available for students accessing digital materials inside campus
                            systems.</p>
                    </div>
                    <div
                        class="pt-4 mt-6 border-t border-slate-100 flex items-center justify-between text-[10px] font-bold text-slate-400 uppercase tracking-wider">
                        <span>Information Desk Advisory</span>
                        <i class="fa-solid fa-circle-nodes text-amber-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACADEMIC PROGRAM OVERVIEW -->
    <section id="programs" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-xs font-bold text-mgicOrange uppercase tracking-widest block mb-2">Curricular
                    Tracks</span>
                <h2 class="text-3xl font-black text-mgicDark uppercase tracking-tight">
                    <i class="fa-solid fa-graduation-cap text-mgicOrange mr-2"></i>Institutional Frameworks
                </h2>
                <p class="mt-2 text-xs sm:text-sm text-slate-500 font-medium">Public layout overview of institutional
                    program structures and focus competencies.</p>
            </div>

            <div class="grid gap-8 lg:grid-cols-2">
                <!-- Track 1 -->
                <div
                    class="flex flex-col sm:flex-row bg-slate-50 rounded-2xl overflow-hidden border border-slate-200/60 transition-all duration-300 hover:shadow-lg hover:shadow-slate-100 hover:border-slate-300 group">
                    <div
                        class="sm:w-1/3 bg-mgicBlue p-8 flex flex-col justify-between text-white text-center sm:text-left relative">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-xl text-mgicOrange shadow-sm">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h3 class="text-lg font-black mt-12 uppercase leading-tight tracking-wide">Information
                            Technology</h3>
                    </div>
                    <div class="p-6 sm:w-2/3 flex flex-col justify-between bg-white">
                        <div>
                            <span class="text-[10px] font-bold text-mgicOrange uppercase tracking-widest">Higher
                                Education</span>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed font-normal">
                                Focused on web systems, development architectures, database migrations, processing
                                administration, and modern interactive system layout environments.
                            </p>
                        </div>
                        <div
                            class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] font-semibold text-slate-400">
                            <span>Status</span>
                            <span
                                class="text-emerald-600 font-bold bg-emerald-50 px-2 py-0.5 rounded flex items-center"><span
                                    class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span>Active
                                Curricular Track</span>
                        </div>
                    </div>
                </div>

                <!-- Track 2 -->
                <div
                    class="flex flex-col sm:flex-row bg-slate-50 rounded-2xl overflow-hidden border border-slate-200/60 transition-all duration-300 hover:shadow-lg hover:shadow-slate-100 hover:border-slate-300 group">
                    <div
                        class="sm:w-1/3 bg-mgicBlue p-8 flex flex-col justify-between text-white text-center sm:text-left relative">
                        <div
                            class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center text-xl text-mgicOrange shadow-sm">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h3 class="text-lg font-black mt-12 uppercase leading-tight tracking-wide">Business
                            Administration</h3>
                    </div>
                    <div class="p-6 sm:w-2/3 flex flex-col justify-between bg-white">
                        <div>
                            <span class="text-[10px] font-bold text-mgicOrange uppercase tracking-widest">Higher
                                Education</span>
                            <p class="text-xs text-slate-500 mt-3 leading-relaxed font-normal">
                                Program tracks dealing with structural enterprise setup, operations management, asset
                                administration protocols, and public resource strategies.
                            </p>
                        </div>
                        <div
                            class="mt-6 pt-4 border-t border-slate-100 flex items-center justify-between text-[11px] font-semibold text-slate-400">
                            <span>Status</span>
                            <span
                                class="text-emerald-600 font-bold bg-emerald-50 px-2 py-0.5 rounded flex items-center"><span
                                    class="w-1.5 h-1.5 rounded-full bg-emerald-500 mr-1.5 animate-pulse"></span>Active
                                Curricular Track</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS / QUICK FACT METRICS -->
    <div class="bg-gradient-to-br from-mgicBlue to-slate-900 text-white py-16 relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_bottom_left,rgba(249,115,22,0.08),transparent)] pointer-events-none">
        </div>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-4 gap-8 text-center relative z-10">
            <div class="space-y-1">
                <p class="text-4xl font-black text-mgicOrange tracking-tight">2019</p>
                <p class="text-[10px] uppercase tracking-widest text-slate-300 font-bold">Founded Year (MMXIX)</p>
            </div>
            <div class="space-y-1">
                <p class="text-4xl font-black text-mgicOrange tracking-tight">100%</p>
                <p class="text-[10px] uppercase tracking-widest text-slate-300 font-bold">Verified Display Access</p>
            </div>
            <div class="space-y-1">
                <p class="text-4xl font-black text-mgicOrange tracking-tight">4+</p>
                <p class="text-[10px] uppercase tracking-widest text-slate-300 font-bold">Active Departments</p>
            </div>
            <div class="space-y-1">
                <p class="text-4xl font-black text-mgicOrange tracking-tight">Laguna</p>
                <p class="text-[10px] uppercase tracking-widest text-slate-300 font-bold">Regional Branch Hub</p>
            </div>
        </div>
    </div>

    <!-- ABOUT / HERITAGE METADATA SECTION -->
    <section id="about" class="py-20 bg-slate-50">
        <div class="max-w-3xl mx-auto px-4 text-center">
            <div
                class="w-12 h-12 bg-white rounded-2xl border border-slate-200 shadow-sm flex items-center justify-center text-mgicOrange mx-auto mb-4">
                <i class="fa-solid fa-landmark text-sm"></i>
            </div>
            <h2 class="text-xl font-black text-mgicDark uppercase tracking-wider mb-1">Moreh Global Innovative College
            </h2>
            <p class="text-[11px] font-bold text-mgicOrange tracking-widest uppercase mb-6">School of Righteousness and
                Excellence</p>
            <div class="w-12 h-0.5 bg-mgicOrange mx-auto mb-8 rounded-full"></div>
            <p class="text-slate-500 leading-relaxed text-xs sm:text-sm font-medium">
                Established under the pillars of structural progression and moral guidance (MMXIX), MGIC serves as a
                primary center for informational growth and student excellence located in Victoria, Laguna. This viewing
                portal provides transparent, read-only information layout resources for general public viewers and
                registered student checkers alike.
            </p>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="bg-mgicDark text-slate-400 py-12 border-t border-slate-800 text-[11px] font-medium relative z-10">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div>
                <p class="font-extrabold text-slate-200 tracking-wide text-xs">Moreh Global Innovative College</p>
                <p class="mt-1 text-slate-500">© 2026 MGIC Portal. All rights reserved. Configured exclusively for
                    responsive read-only presentation.</p>
            </div>
            <div class="flex space-x-6 text-sm text-slate-400">
                <a href="#" class="hover:text-mgicOrange transition-colors"><i class="fa-brands fa-facebook"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-solid fa-globe"></i></a>
                <a href="#" class="hover:text-white transition-colors"><i class="fa-solid fa-envelope"></i></a>
            </div>
        </div>
    </footer>

</body>

</html>
