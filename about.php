<?php
$page_title = "About ZlliQ Technology - Digital Marketing Experts";
$page_description = "Learn about ZlliQ Technology's mission, values, and expert team dedicated to transforming businesses through innovative digital marketing solutions.";
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">

    <!-- Primary SEO Meta Tags -->
    <title>Zlliq - Email Marketing, Zoho Tie-up, Campaign Management Services</title>

    <meta name="description" content="Welcome to Zlliq - A leading Email Marketing and Campaign Management platform. Official partner with Zoho for email campaigns. Automate and manage your email marketing with Zlliq.">

    <meta name="keywords" content="Zlliq, Email Marketing, Zoho Tie-up, Email Campaign Sending, Managed Email Services, Zoho Campaign Integration, Bulk Email, Zlliq Email Tool">

    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://zlliq.com/" />

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Zlliq - Email Marketing & Zoho Campaign Partner">
    <meta property="og:description" content="Official Zlliq Email Marketing Tool with Zoho Tie-up. Manage and send email campaigns easily.">
    <meta property="og:url" content="https://zlliq.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://zlliq.com/images/zlliq-logo.png"> <!-- Update image path -->

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zlliq - Email Marketing Automation">
    <meta name="twitter:description" content="Automate and manage your email campaigns with Zlliq. Zoho Campaign Integration Partner.">
    <meta name="twitter:image" content="https://zlliq.com/images/zlliq-logo.png"> <!-- Update image path -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicons.png">
    <link rel="shortcut icon" type="image/png" href="favicons.png">
    <link rel="apple-touch-icon" href="favicons.png">
    
    <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'secondary': '#3b82f6',
                        'primary': '#3b82f6',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out !important;
        }
        
        .animate-slideInLeft {
            animation: slideInLeft 0.8s ease-out !important;
        }
        
        .animate-pulse {
            animation: pulse 2s ease-in-out infinite !important;
        }
        
        .hover-scale {
            transition: transform 0.3s ease !important;
        }
        
        .hover-scale:hover {
            transform: scale(1.05) !important;
        }
        
        body {
            background: #000000 !important;
            color: #ffffff !important;
            margin: 0;
            padding: 0;
        }
        html {
            background: #000000 !important;
        }
        .bg-black { background: #000000 !important; }
        .text-white { color: #ffffff !important; }
        .text-gray-300 { color: #d1d5db !important; }
        .text-gray-400 { color: #9ca3af !important; }
        .bg-gradient-to-br { background: linear-gradient(to bottom right, var(--tw-gradient-stops)) !important; }
        .bg-gradient-to-r { background: linear-gradient(to right, var(--tw-gradient-stops)) !important; }
        .backdrop-blur { backdrop-filter: blur(12px) !important; -webkit-backdrop-filter: blur(12px) !important; }
    </style>
</head>
<body class="bg-black text-white" style="background: #000000 !important; color: #ffffff !important;">
    <?php include 'header.php'; ?>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-500/30 backdrop-blur-sm mb-6">
                    <span class="text-blue-300 text-sm font-medium">About Us</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6" style="animation: slideInLeft 0.8s ease-out; -webkit-animation: slideInLeft 0.8s ease-out;">
                    <span class="text-white" style="color: #ffffff !important;">Transforming Businesses Through </span>
                    <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent" style="background: linear-gradient(to right, #60a5fa, #c084fc) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important; animation: gradient 3s ease infinite; -webkit-animation: gradient 3s ease infinite;">
                        Digital Innovation
                    </span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    At ZlliQ Technology, we combine cutting-edge technology with strategic thinking to deliver digital marketing solutions that drive real business growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Our Mission</h2>
                    <p class="text-lg text-gray-300 mb-8">
                        To empower businesses of all sizes with innovative digital marketing solutions that drive measurable growth, enhance brand visibility, and create lasting customer relationships in an increasingly digital world.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="text-gray-300">Data-driven strategies that deliver measurable results</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="text-gray-300">Cutting-edge technology and innovative solutions</p>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-6 h-6 bg-blue-500/20 rounded-full flex items-center justify-center mt-1">
                                <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <p class="text-gray-300">Transparent communication and collaborative partnerships</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8">
                    <h3 class="text-2xl font-bold text-white mb-6">Our Values</h3>
                    <div class="space-y-6">
                        <div>
                            <h4 class="text-lg font-semibold text-blue-400 mb-2">Innovation</h4>
                            <p class="text-gray-300">Constantly pushing boundaries to deliver cutting-edge solutions that give our clients a competitive advantage.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-green-400 mb-2">Excellence</h4>
                            <p class="text-gray-300">Committed to delivering exceptional quality in every project, exceeding expectations at every turn.</p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-purple-400 mb-2">Integrity</h4>
                            <p class="text-gray-300">Building trust through transparent communication, honest reporting, and ethical business practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Meet Our Expert Team</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Our diverse team of digital marketing professionals brings together decades of experience and a passion for driving business growth.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 text-center hover:border-blue-500/50 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">SK</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Suresh Kumar</h3>
                    <p class="text-blue-400 mb-4">Founder & CEO</p>
                    <p class="text-gray-300 text-sm">
                        15+ years of experience in digital marketing and business strategy. Passionate about helping businesses achieve their digital transformation goals.
                    </p>
                </div>

                <!-- Team Member 2 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 text-center hover:border-green-500/50 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-green-500 to-blue-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">PS</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Priya Sharma</h3>
                    <p class="text-green-400 mb-4">Head of Digital Strategy</p>
                    <p class="text-gray-300 text-sm">
                        Expert in SEO, PPC, and content marketing with a track record of delivering 300% ROI improvements for clients across various industries.
                    </p>
                </div>

                <!-- Team Member 3 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 text-center hover:border-purple-500/50 transition-all duration-300">
                    <div class="w-24 h-24 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full mx-auto mb-6 flex items-center justify-center">
                        <span class="text-2xl font-bold text-white">AR</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Arun Raj</h3>
                    <p class="text-purple-400 mb-4">Lead Developer</p>
                    <p class="text-gray-300 text-sm">
                        Full-stack developer specializing in modern web technologies and e-commerce solutions. Expert in React, Node.js, and cloud architecture.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Our Impact in Numbers</h2>
                <p class="text-xl text-gray-300">
                    Real results from real partnerships
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-blue-400 mb-2">500+</div>
                    <div class="text-gray-300">Projects Completed</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-green-400 mb-2">98%</div>
                    <div class="text-gray-300">Client Satisfaction</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-purple-400 mb-2">5+</div>
                    <div class="text-gray-300">Years Experience</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl lg:text-5xl font-bold text-orange-400 mb-2">24/7</div>
                    <div class="text-gray-300">Support Available</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-gray-900/50 to-gray-800/50 backdrop-blur border border-gray-700 rounded-3xl p-12 text-center max-w-4xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                    Ready to Work With Us?
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Let's discuss how we can help transform your digital presence and drive measurable business growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/php-website/home-page.php#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="/php-website/services.php" class="inline-flex items-center px-8 py-4 border border-gray-600 text-white font-semibold rounded-2xl hover:border-blue-500 hover:bg-blue-500/10 transition-all duration-300 backdrop-blur-sm">
                        View Our Services
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Refresh handling function
        function handleRefresh(event, url) {
            if (event) {
                event.preventDefault();
            }
            
            // Clear all caches
            if ('caches' in window) {
                caches.keys().then(names => {
                    names.forEach(name => caches.delete(name));
                });
            }
            
            // Clear storage
            try {
                localStorage.clear();
                sessionStorage.clear();
            } catch(e) {}
            
            // Force reload with timestamp
            window.location.href = url + '?t=' + new Date().getTime();
        }

        // Enhanced loading effects
        document.addEventListener('DOMContentLoaded', function() {
            console.log('ABOUT PAGE V2 LOADED - With refresh functionality');
            
            // Force clear all caches
            if ('caches' in window) {
                caches.keys().then(names => {
                    names.forEach(name => caches.delete(name));
                });
            }
            
            // Force dark theme
            document.body.style.background = '#000000';
            document.body.style.color = '#ffffff';
            document.documentElement.style.background = '#000000';
            document.documentElement.classList.add('dark');
            
            console.log('About page V2 fully loaded with all fixes applied');
        });
    </script>

    <script>
        // Force reload styles on page load
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.background = '#000000';
            document.body.style.color = '#ffffff';
            document.documentElement.style.background = '#000000';
            document.documentElement.classList.add('dark');
        });

        // Smooth scrolling for anchor links
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                });
            });
        });
    </script>
</body>
</html>