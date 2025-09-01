<?php
$page_title = "Portfolio - ZlliQ Technology Digital Marketing Projects";
$page_description = "Explore our successful digital marketing projects and case studies. See how we've helped businesses achieve remarkable growth through innovative digital solutions.";
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
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
        
        .animate-fadeInUp,
        *[class*="animate-fadeInUp"] {
            animation: fadeInUp 0.8s ease-out !important;
            -webkit-animation: fadeInUp 0.8s ease-out !important;
        }
        
        .animate-slideInLeft,
        *[class*="animate-slideInLeft"] {
            animation: slideInLeft 0.8s ease-out !important;
            -webkit-animation: slideInLeft 0.8s ease-out !important;
        }
        
        .animate-pulse,
        *[class*="animate-pulse"] {
            animation: pulse 2s ease-in-out infinite !important;
            -webkit-animation: pulse 2s ease-in-out infinite !important;
        }
        
        .hover-scale,
        *[class*="hover-scale"] {
            transition: transform 0.3s ease !important;
            -webkit-transition: transform 0.3s ease !important;
        }
        
        .hover-scale:hover,
        *[class*="hover-scale"]:hover {
            transform: scale(1.05) !important;
            -webkit-transform: scale(1.05) !important;
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
                    <span class="text-blue-300 text-sm font-medium">Portfolio</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6" style="animation: slideInLeft 0.8s ease-out; -webkit-animation: slideInLeft 0.8s ease-out;">
                    <span class="text-white" style="color: #ffffff !important;">Success Stories & </span>
                    <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent" style="background: linear-gradient(to right, #60a5fa, #c084fc) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important; animation: gradient 3s ease infinite; -webkit-animation: gradient 3s ease infinite;">
                        Case Studies
                    </span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Discover how we've helped businesses transform their digital presence and achieve remarkable growth through innovative marketing strategies.
                </p>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Filter Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mb-16">
                <button onclick="filterPortfolio('all')" class="filter-btn active px-6 py-3 rounded-full bg-blue-600 text-white font-medium hover:bg-blue-700 transition-all duration-300">
                    All Projects
                </button>
                <button onclick="filterPortfolio('ecommerce')" class="filter-btn px-6 py-3 rounded-full bg-gray-800 text-gray-300 font-medium hover:bg-gray-700 transition-all duration-300">
                    E-commerce
                </button>
                <button onclick="filterPortfolio('saas')" class="filter-btn px-6 py-3 rounded-full bg-gray-800 text-gray-300 font-medium hover:bg-gray-700 transition-all duration-300">
                    SaaS
                </button>
                <button onclick="filterPortfolio('healthcare')" class="filter-btn px-6 py-3 rounded-full bg-gray-800 text-gray-300 font-medium hover:bg-gray-700 transition-all duration-300">
                    Healthcare
                </button>
                <button onclick="filterPortfolio('fintech')" class="filter-btn px-6 py-3 rounded-full bg-gray-800 text-gray-300 font-medium hover:bg-gray-700 transition-all duration-300">
                    Fintech
                </button>
            </div>

            <!-- Portfolio Items -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden transition-all duration-300" data-category="ecommerce" style="background: rgba(17, 24, 39, 0.5) !important; border: 1px solid #374151 !important; animation: fadeInUp 0.8s ease-out 0.1s both; -webkit-animation: fadeInUp 0.8s ease-out 0.1s both; transition: all 0.3s ease; -webkit-transition: all 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)'; this.style.borderColor='rgba(59, 130, 246, 0.5)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151';">
                    <div class="aspect-video bg-gradient-to-br from-blue-500/20 to-purple-500/20 p-8 flex items-center justify-center" style="background: linear-gradient(to bottom right, rgba(59, 130, 246, 0.2), rgba(168, 85, 247, 0.2)) !important;">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2" style="color: #ffffff !important;">TechMart E-commerce</h3>
                            <p class="text-gray-300 text-sm" style="color: #d1d5db !important;">E-commerce Platform</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">300% Revenue Growth</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            Complete digital transformation for a tech retailer, including SEO optimization, PPC campaigns, and conversion rate optimization.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">SEO</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-xs rounded-full">PPC</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-xs rounded-full">CRO</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2024</div>
                            <a href="#" class="text-blue-400 hover:text-blue-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden hover:border-green-500/50 transition-all duration-300 hover:transform hover:scale-105" data-category="saas">
                    <div class="aspect-video bg-gradient-to-br from-green-500/20 to-blue-500/20 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2">CloudSync SaaS</h3>
                            <p class="text-gray-300 text-sm">Project Management Tool</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">500% User Acquisition</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            Comprehensive digital marketing strategy that increased user signups by 500% through targeted content marketing and social media campaigns.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Content Marketing</span>
                            <span class="px-3 py-1 bg-green-500/20 text-green-400 text-xs rounded-full">Social Media</span>
                            <span class="px-3 py-1 bg-orange-500/20 text-orange-400 text-xs rounded-full">Email Marketing</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2024</div>
                            <a href="#" class="text-green-400 hover:text-green-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden hover:border-purple-500/50 transition-all duration-300 hover:transform hover:scale-105" data-category="healthcare">
                    <div class="aspect-video bg-gradient-to-br from-purple-500/20 to-pink-500/20 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2">HealthCare Plus</h3>
                            <p class="text-gray-300 text-sm">Medical Services Platform</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">250% Lead Generation</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            Local SEO and targeted advertising campaign that increased patient inquiries by 250% for a healthcare provider network.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Local SEO</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-xs rounded-full">Google Ads</span>
                            <span class="px-3 py-1 bg-pink-500/20 text-pink-400 text-xs rounded-full">Landing Pages</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2024</div>
                            <a href="#" class="text-purple-400 hover:text-purple-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 4 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden hover:border-orange-500/50 transition-all duration-300 hover:transform hover:scale-105" data-category="fintech">
                    <div class="aspect-video bg-gradient-to-br from-orange-500/20 to-red-500/20 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2">FinanceFlow</h3>
                            <p class="text-gray-300 text-sm">Financial Management App</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">400% App Downloads</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            Mobile-first marketing strategy that boosted app downloads by 400% through ASO, influencer partnerships, and performance marketing.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-orange-500/20 text-orange-400 text-xs rounded-full">ASO</span>
                            <span class="px-3 py-1 bg-red-500/20 text-red-400 text-xs rounded-full">Influencer Marketing</span>
                            <span class="px-3 py-1 bg-yellow-500/20 text-yellow-400 text-xs rounded-full">Performance Marketing</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2023</div>
                            <a href="#" class="text-orange-400 hover:text-orange-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 5 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden hover:border-cyan-500/50 transition-all duration-300 hover:transform hover:scale-105" data-category="ecommerce">
                    <div class="aspect-video bg-gradient-to-br from-cyan-500/20 to-blue-500/20 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2">FashionHub</h3>
                            <p class="text-gray-300 text-sm">Fashion E-commerce</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">600% Social Engagement</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            Social media marketing campaign that increased brand engagement by 600% and drove significant traffic to the e-commerce platform.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-cyan-500/20 text-cyan-400 text-xs rounded-full">Social Media</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Influencer Marketing</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-xs rounded-full">UGC</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2023</div>
                            <a href="#" class="text-cyan-400 hover:text-cyan-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>

                <!-- Project 6 -->
                <div class="portfolio-item group bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl overflow-hidden hover:border-indigo-500/50 transition-all duration-300 hover:transform hover:scale-105" data-category="saas">
                    <div class="aspect-video bg-gradient-to-br from-indigo-500/20 to-purple-500/20 p-8 flex items-center justify-center">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-white mb-2">DataViz Pro</h3>
                            <p class="text-gray-300 text-sm">Analytics Platform</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-3">350% MRR Growth</h4>
                        <p class="text-gray-300 text-sm mb-4">
                            B2B marketing strategy focused on thought leadership and demo-driven campaigns that increased monthly recurring revenue by 350%.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="px-3 py-1 bg-indigo-500/20 text-indigo-400 text-xs rounded-full">B2B Marketing</span>
                            <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-xs rounded-full">Lead Nurturing</span>
                            <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-xs rounded-full">Webinars</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <div class="text-sm text-gray-400">2023</div>
                            <a href="#" class="text-indigo-400 hover:text-indigo-300 text-sm font-medium">View Case Study →</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-16">
                <button class="px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-gray-900/50 to-gray-800/50 backdrop-blur border border-gray-700 rounded-3xl p-12 text-center max-w-4xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                    Ready to Be Our Next Success Story?
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Let's create a customized digital marketing strategy that delivers the same exceptional results for your business.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/php-website/home-page.php#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        Start Your Project
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="/php-website/services.php" class="inline-flex items-center px-8 py-4 border border-gray-600 text-white font-semibold rounded-2xl hover:border-blue-500 hover:bg-blue-500/10 transition-all duration-300 backdrop-blur-sm">
                        Explore Services
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
            console.log('PORTFOLIO PAGE V2 LOADED - With refresh functionality');
            
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
            
            console.log('Portfolio page V2 fully loaded with all fixes applied');
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

        // Portfolio Filter Functionality
        function filterPortfolio(category, element) {
            const items = document.querySelectorAll('.portfolio-item');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Update active button
            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-600', 'text-white');
                btn.classList.add('bg-gray-800', 'text-gray-300');
                btn.style.background = '#1f2937';
                btn.style.color = '#d1d5db';
            });
            
            element.classList.add('active', 'bg-blue-600', 'text-white');
            element.classList.remove('bg-gray-800', 'text-gray-300');
            element.style.background = '#2563eb';
            element.style.color = '#ffffff';
            
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.opacity = '1';
                    }, 100);
                } else {
                    item.style.opacity = '0';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        }

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