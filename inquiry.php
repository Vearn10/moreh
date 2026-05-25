<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGIC | Academic Admissions Inquiry</title>
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
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .form-input:focus {
            border-color: #f97316;
            box-shadow: 0 0 0 3px rgba(249, 115, 22, 0.1);
        }
    </style>
</head>

<body
    class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-mgicOrange selection:text-white min-h-screen flex flex-col justify-between overflow-x-hidden">

    <!-- FLOATING FIXED HEADER -->
    <div class="w-full px-4 sm:px-6 lg:px-8 pt-6 relative z-50">
        <header
            class="max-w-7xl mx-auto glass-card rounded-2xl px-6 h-20 flex items-center justify-between shadow-md shadow-slate-200/40">
            <!-- Logo & Title Area -->
            <div class="flex items-center space-x-3">
                <img src="354264045_643093787844317_3677144960425737849_n.jpg" alt="MGIC Logo"
                    class="w-11 h-11 rounded-full object-cover border-2 border-mgicOrange shadow-sm">
                <div>
                    <h1 class="text-sm font-black text-mgicBlue tracking-wider leading-none">MOREH GLOBAL</h1>
                    <span
                        class="text-[10px] font-bold text-mgicOrange uppercase tracking-widest block mt-0.5">Innovative
                        College</span>
                </div>
            </div>

            <!-- Action Return Link -->
            <a href="index.php"
                class="inline-flex items-center space-x-2 text-xs font-bold uppercase tracking-wider text-mgicBlue hover:text-blue-800 transition-colors bg-blue-50 px-4 py-2 rounded-xl border border-blue-100">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back to Portal</span>
            </a>
        </header>
    </div>

    <!-- MAIN INQUIRY INTERFACE (SPLIT BENTO GRID) -->
    <main class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 flex-grow relative">
        <div
            class="absolute top-1/4 right-1/4 w-[50vw] h-[400px] bg-gradient-to-br from-mgicOrange/5 to-mgicBlue/5 rounded-full blur-3xl pointer-events-none">
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch relative z-10">

            <!-- LEFT PANEL: HERITAGE & CONTACT CHANNELS -->
            <div
                class="lg:col-span-5 bg-gradient-to-br from-mgicBlue to-slate-900 text-white rounded-3xl p-8 sm:p-10 flex flex-col justify-between shadow-xl relative overflow-hidden">
                <div class="absolute -right-16 -bottom-16 w-48 h-48 bg-mgicOrange/10 rounded-full blur-2xl"></div>

                <div class="space-y-6">
                    <div class="flex items-center justify-between">
                        <span
                            class="inline-flex items-center px-3 py-1 rounded-md text-[10px] font-bold bg-white/10 border border-white/10 text-slate-300 uppercase tracking-widest">
                            Admissions 2026
                        </span>
                        <img src="354264045_643093787844317_3677144960425737849_n.jpg" alt="MGIC Crest Image"
                            class="w-12 h-12 rounded-xl object-cover border border-white/20 shadow-md">
                    </div>

                    <div class="space-y-2">
                        <h2 class="text-2xl sm:text-4xl font-black uppercase tracking-tight leading-none">
                            Begin Your <br><span class="text-mgicOrange">Innovative</span> Journey
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 font-normal leading-relaxed max-w-sm pt-2">
                            Have questions regarding academic paths, enrollment schedules, or tracking validation?
                            Submit your formal inquiry framework right here.
                        </p>
                    </div>
                </div>

                <!-- Contact Channels Block -->
                <div class="space-y-4 mt-12 lg:mt-0 pt-6 border-t border-white/10">
                    <div class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-mgicOrange border border-white/10 shrink-0">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Campus Address</p>
                            <p class="text-xs font-semibold text-white">Victoria, Laguna, Philippines</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div
                            class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center text-mgicOrange border border-white/10 shrink-0">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <div>
                            <p class="text-[10px] uppercase font-bold text-slate-400 tracking-wider">Direct Email
                                Address</p>
                            <p class="text-xs font-semibold text-white">admissions@mgic.edu.ph</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- RIGHT PANEL: MODERNIZE INQUIRY FORM MODULE -->
            <div
                class="lg:col-span-7 bg-white rounded-3xl p-8 sm:p-10 border border-slate-200/80 shadow-sm flex flex-col justify-between">

                <!-- STATUS ALERT MESSAGE SYSTEM -->
                <?php if (isset($_GET['status'])): ?>
                    <?php if ($_GET['status'] == 'success'): ?>
                        <div
                            class="mb-6 p-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-emerald-50 text-emerald-800 border border-emerald-200 block">
                            <i class="fa-solid fa-circle-check mr-2"></i> Inquiry submitted successfully directly to the
                            institution!
                        </div>
                    <?php elseif ($_GET['status'] == 'error'): ?>
                        <div
                            class="mb-6 p-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-rose-50 text-rose-800 border border-rose-200 block">
                            <i class="fa-solid fa-circle-xmark mr-2"></i> Transmission failed. Please try again later.
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <form id="inquiryForm" action="send_email.php" method="POST" class="space-y-6">
                    <div>
                        <h3 class="text-lg font-black text-mgicDark uppercase tracking-tight">Inquiry Submission Form
                        </h3>
                        <p class="text-xs text-slate-400 mt-1">Please provide accurate contact metrics below. Our
                            registrar team processes inquiries sequentially.</p>
                    </div>

                    <!-- Input Grid Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-[10px] uppercase font-bold tracking-wider text-slate-500 block"><i
                                    class="fa-solid fa-user text-mgicBlue mr-1"></i> Full Legal Name</label>
                            <input type="text" name="name" placeholder="e.g., Juan Dela Cruz"
                                class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-medium text-mgicDark focus:outline-none transition-all"
                                required>
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-[10px] uppercase font-bold tracking-wider text-slate-500 block"><i
                                    class="fa-solid fa-envelope text-mgicBlue mr-1"></i> Email Address</label>
                            <input type="email" name="email" placeholder="name@domain.com"
                                class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-medium text-mgicDark focus:outline-none transition-all"
                                required>
                        </div>
                    </div>

                    <!-- Input Grid Row -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="space-y-1.5">
                            <label class="text-[10px] uppercase font-bold tracking-wider text-slate-500 block"><i
                                    class="fa-solid fa-phone text-mgicBlue mr-1"></i> Contact Number</label>
                            <input type="tel" name="phone" placeholder="0912 345 6789"
                                class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-medium text-mgicDark focus:outline-none transition-all"
                                required>
                        </div>
                        <div class="space-y-1.5">
                            <label class="text-[10px] uppercase font-bold tracking-wider text-slate-500 block"><i
                                    class="fa-solid fa-graduation-cap text-mgicBlue mr-1"></i> Academic Track of
                                Interest</label>
                            <select name="track"
                                class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-medium text-slate-600 focus:outline-none transition-all cursor-pointer">
                                <option value="Information Technology">Information Technology Track</option>
                                <option value="Business Administration">Business Administration Track</option>
                                <option value="General Inquiry">General Institutional Inquiries</option>
                            </select>
                        </div>
                    </div>

                    <!-- Message Block -->
                    <div class="space-y-1.5">
                        <label class="text-[10px] uppercase font-bold tracking-wider text-slate-500 block"><i
                                class="fa-solid fa-pen-to-square text-mgicBlue mr-1"></i> Message / Specific Inquiry
                            Details</label>
                        <textarea name="message" rows="4"
                            placeholder="Type the structural details of your inquiry here..."
                            class="form-input w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-xs font-medium text-mgicDark focus:outline-none transition-all resize-none"
                            required></textarea>
                    </div>

                    <!-- Action Submit Button -->
                    <div class="pt-2">
                        <button type="submit" id="submitBtn"
                            class="w-full inline-flex items-center justify-center px-6 py-3.5 text-xs font-bold uppercase tracking-wider rounded-xl text-white bg-mgicOrange hover:bg-orange-600 shadow-md shadow-mgicOrange/10 transition-all cursor-pointer">
                            <span>Submit Inquiry Matrix</span>
                            <i class="fa-solid fa-paper-plane ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

    <!-- FOOTER SECTION -->
    <footer class="bg-mgicDark text-slate-400 py-10 border-t border-slate-800 text-[11px] font-medium w-full">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
            <div>
                <p class="font-extrabold text-slate-200 tracking-wide text-xs">Moreh Global Innovative College</p>
                <p class="mt-1 text-slate-500">© 2026 MGIC Portal. Powered by secure administration network channels.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>