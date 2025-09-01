<?php
$page_title = "ZlliQ Technology - Premier Digital Marketing Agency";
$page_description = "Transform your digital presence with AI-powered marketing strategies. Join 500+ companies scaling with our enterprise-grade solutions.";
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="favicon.png">
    <script src="https://cdn.tailwindcss.com?v=3.4.0"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'secondary': '#3b82f6',
                        'primary': '#3b82f6',
                    },
                    animation: {
                        'pulse-glow': 'pulse 2s infinite',
                        'gradient': 'gradient 3s ease infinite',
                        'spin': 'spin 20s linear infinite',
                    }
                }
            }
        }
    </script>
    <style>
        /* Enhanced keyframes with webkit prefixes */
        @keyframes gradient {
            0%, 100% { 
                background-position: 0% 50%; 
                -webkit-background-position: 0% 50%;
            }
            50% { 
                background-position: 100% 50%; 
                -webkit-background-position: 100% 50%;
            }
        }
        
        @-webkit-keyframes gradient {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        @keyframes spin {
            from { 
                transform: rotate(0deg); 
                -webkit-transform: rotate(0deg);
            }
            to { 
                transform: rotate(360deg); 
                -webkit-transform: rotate(360deg);
            }
        }
        
        @-webkit-keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        @keyframes float {
            0%, 100% { 
                transform: translateY(0px); 
                -webkit-transform: translateY(0px);
            }
            50% { 
                transform: translateY(-20px); 
                -webkit-transform: translateY(-20px);
            }
        }
        
        @-webkit-keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        @-webkit-keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
                -webkit-transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
                -webkit-transform: translateY(0);
            }
        }
        
        @-webkit-keyframes fadeInUp {
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
                -webkit-transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
                -webkit-transform: translateX(0);
            }
        }
        
        @-webkit-keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
                -webkit-transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
                -webkit-transform: translateX(0);
            }
        }
        
        @-webkit-keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        /* Force animations to work with high specificity */
        .animate-gradient,
        *[class*="animate-gradient"] {
            background-size: 200% 200% !important;
            animation: gradient 3s ease infinite !important;
            -webkit-animation: gradient 3s ease infinite !important;
        }
        
        .animate-spin-slow,
        *[class*="animate-spin-slow"] {
            animation: spin 20s linear infinite !important;
            -webkit-animation: spin 20s linear infinite !important;
        }
        
        .animate-float,
        *[class*="animate-float"] {
            animation: float 6s ease-in-out infinite !important;
            -webkit-animation: float 6s ease-in-out infinite !important;
        }
        
        .animate-pulse,
        *[class*="animate-pulse"] {
            animation: pulse 2s ease-in-out infinite !important;
            -webkit-animation: pulse 2s ease-in-out infinite !important;
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
        
        .animate-slideInRight,
        *[class*="animate-slideInRight"] {
            animation: slideInRight 0.8s ease-out !important;
            -webkit-animation: slideInRight 0.8s ease-out !important;
        }
        
        /* Hover animations with high specificity */
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
        
        .hover-glow,
        *[class*="hover-glow"] {
            transition: box-shadow 0.3s ease !important;
            -webkit-transition: box-shadow 0.3s ease !important;
        }
        
        .hover-glow:hover,
        *[class*="hover-glow"]:hover {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.5) !important;
            -webkit-box-shadow: 0 0 20px rgba(59, 130, 246, 0.5) !important;
        }
        
        /* Force enable animations globally */
        * {
            animation-play-state: running !important;
            -webkit-animation-play-state: running !important;
        }
        
        body {
            background: #000000 !important;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }
        
        html {
            background: #000000 !important;
        }
        
        /* Force dark theme styles */
        * {
            box-sizing: border-box;
        }
        
        /* Ensure all gradients work */
        .bg-gradient-to-br {
            background: linear-gradient(to bottom right, var(--tw-gradient-stops)) !important;
        }
        
        .bg-gradient-to-r {
            background: linear-gradient(to right, var(--tw-gradient-stops)) !important;
        }
        
        .from-slate-900 {
            --tw-gradient-from: #0f172a !important;
            --tw-gradient-to: rgb(15 23 42 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important;
        }
        
        .via-purple-900 {
            --tw-gradient-to: rgb(88 28 135 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), #581c87, var(--tw-gradient-to) !important;
        }
        
        .to-slate-900 {
            --tw-gradient-to: #0f172a !important;
        }
        
        /* Force backdrop blur */
        .backdrop-blur, .backdrop-blur-sm, .backdrop-blur-md, .backdrop-blur-2xl {
            backdrop-filter: blur(12px) !important;
            -webkit-backdrop-filter: blur(12px) !important;
        }
        
        /* Glassmorphism effects */
        .bg-white\/5 {
            background-color: rgba(255, 255, 255, 0.05) !important;
        }
        
        .bg-white\/10 {
            background-color: rgba(255, 255, 255, 0.1) !important;
        }
        
        .border-white\/10 {
            border-color: rgba(255, 255, 255, 0.1) !important;
        }
        
        .border-white\/20 {
            border-color: rgba(255, 255, 255, 0.2) !important;
        }
        
        /* Animated background elements */
        .animate-pulse {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite !important;
        }
        
        /* Override any potential conflicts */
        .text-white {
            color: #ffffff !important;
        }
        
        .text-gray-300 {
            color: #d1d5db !important;
        }
        
        .text-gray-400 {
            color: #9ca3af !important;
        }
        
        /* Gradient text effects - Fixed for better compatibility */
        .gradient-text-primary {
            background: linear-gradient(to right, #c084fc, #f472b6, #60a5fa) !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            color: transparent !important;
        }
        
        .gradient-text-secondary {
            background: linear-gradient(to right, #60a5fa, #c084fc) !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            color: transparent !important;
        }
        
        /* Fallback for browsers that don't support background-clip */
        @supports not (-webkit-background-clip: text) {
            .gradient-text-primary {
                color: #60a5fa !important;
            }
            .gradient-text-secondary {
                color: #c084fc !important;
            }
        }
        
        /* Button gradients */
        .bg-gradient-to-r.from-purple-600.to-blue-600 {
            background: linear-gradient(to right, #9333ea, #2563eb) !important;
        }
        
        .bg-gradient-to-r.from-blue-600.to-purple-600 {
            background: linear-gradient(to right, #2563eb, #9333ea) !important;
        }
        
        /* Ensure mobile menu works */
        .hidden {
            display: none !important;
        }
        
        /* Cache busting for styles */
        .force-reload {
            animation: none !important;
            animation-delay: 0s !important;
            animation-fill-mode: both !important;
        }
    </style>
</head>
<body class="bg-black text-white force-reload" style="background: #000000 !important; color: #ffffff !important;">
    <?php include 'header.php'; ?>

    <!-- Hero Section - Modern UI -->
    <section id="home" class="relative min-h-screen flex items-center bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-20 left-10 w-72 h-72 bg-purple-500/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-purple-500/5 via-blue-500/5 to-purple-500/5 rounded-full blur-3xl" style="animation: spin 20s linear infinite; -webkit-animation: spin 20s linear infinite; background: linear-gradient(to right, rgba(168, 85, 247, 0.05), rgba(59, 130, 246, 0.05), rgba(168, 85, 247, 0.05)) !important;"></div>
        </div>
        
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 opacity-40" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZGVmcz48cGF0dGVybiBpZD0iZ3JpZCIgd2lkdGg9IjYwIiBoZWlnaHQ9IjYwIiBwYXR0ZXJuVW5pdHM9InVzZXJTcGFjZU9uVXNlIj48cGF0aCBkPSJNIDYwIDAgTCAwIDAgMCA2MCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDI1NSwgMjU1LCAyNTUsIDAuMDMpIiBzdHJva2Utd2lkdGg9IjEiLz48L3BhdHRlcm4+PC9kZWZzPjxyZWN0IHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JpZCkiLz48L3N2Zz4=');"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <!-- Compact Hero Card -->
                    <div class="animate-fadeInUp" style="background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1)) !important; backdrop-filter: blur(20px) !important; -webkit-backdrop-filter: blur(20px) !important; border: 1px solid rgba(59, 130, 246, 0.2) !important; border-radius: 16px !important; padding: 24px !important; max-width: 480px !important;">
                        <!-- Badge -->
                        <div style="display: inline-flex !important; align-items: center !important; padding: 6px 12px !important; border-radius: 20px !important; background: rgba(168, 85, 247, 0.15) !important; border: 1px solid rgba(168, 85, 247, 0.3) !important; margin-bottom: 16px !important;">
                            <span style="color: #d8b4fe !important; font-size: 12px !important; font-weight: 600 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important;">🚀 #1 Digital Marketing Agency</span>
                        </div>
                        
                        <!-- Compact Heading -->
                        <h1 class="animate-slideInLeft" style="font-size: 32px !important; font-weight: 800 !important; line-height: 1.2 !important; margin-bottom: 12px !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; animation-delay: 0.2s !important;">
                            <span style="color: #ffffff !important;">Transform Your</span>
                            <br />
                            <span class="animate-gradient" style="background: linear-gradient(135deg, #c084fc, #3b82f6) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important;">
                                Digital Presence
                            </span>
                        </h1>
                        
                        <!-- Compact Description -->
                        <p class="animate-slideInLeft" style="color: #e2e8f0 !important; font-size: 14px !important; line-height: 1.5 !important; margin-bottom: 16px !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; animation-delay: 0.4s !important;">
                            AI-powered marketing strategies that deliver 3x faster growth. Join 500+ companies scaling with enterprise solutions.
                        </p>
                        
                        <!-- Compact CTA -->
                        <button onclick="document.getElementById('value-showcase').scrollIntoView({behavior: 'smooth'})" style="background: linear-gradient(135deg, #3b82f6, #8b5cf6) !important; color: #ffffff !important; font-size: 16px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; padding: 12px 24px !important; border: none !important; border-radius: 10px !important; cursor: pointer !important; transition: all 0.2s ease !important; box-shadow: 0 6px 16px rgba(59, 130, 246, 0.3) !important; display: inline-flex !important; align-items: center !important; gap: 8px !important;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 24px rgba(59, 130, 246, 0.4)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 16px rgba(59, 130, 246, 0.3)'">
                            Discover Solutions
                            <span style="font-size: 14px !important;">→</span>
                        </button>
                    </div>
                    
                    <!-- Stats -->
                    <div class="flex gap-8" style="animation: slideInLeft 0.8s ease-out 0.8s both; -webkit-animation: slideInLeft 0.8s ease-out 0.8s both;">
                        <div class="text-center" style="transition: transform 0.3s ease; -webkit-transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)';">
                            <div class="text-3xl font-bold text-white" style="color: #ffffff !important; animation: pulse 2s ease-in-out infinite; -webkit-animation: pulse 2s ease-in-out infinite;">500+</div>
                            <div class="text-sm text-gray-400" style="color: #9ca3af !important;">Projects</div>
                        </div>
                        <div class="text-center" style="transition: transform 0.3s ease; -webkit-transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)';">
                            <div class="text-3xl font-bold text-white" style="color: #ffffff !important; animation: pulse 2s ease-in-out infinite; -webkit-animation: pulse 2s ease-in-out infinite; animation-delay: 0.5s; -webkit-animation-delay: 0.5s;">98%</div>
                            <div class="text-sm text-gray-400" style="color: #9ca3af !important;">Success Rate</div>
                        </div>
                        <div class="text-center" style="transition: transform 0.3s ease; -webkit-transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)';">
                            <div class="text-3xl font-bold text-white" style="color: #ffffff !important; animation: pulse 2s ease-in-out infinite; -webkit-animation: pulse 2s ease-in-out infinite; animation-delay: 1s; -webkit-animation-delay: 1s;">24/7</div>
                            <div class="text-sm text-gray-400" style="color: #9ca3af !important;">Support</div>
                        </div>
                    </div>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="group relative px-8 py-4 rounded-2xl bg-gradient-to-r from-purple-600 to-blue-600 text-white font-semibold transition-all duration-300 hover:shadow-2xl hover:scale-105 border-0 text-center">
                            <span class="relative z-10">Start Free Consultation</span>
                            <div class="absolute inset-0 rounded-2xl bg-gradient-to-r from-purple-400 to-blue-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300 blur-xl"></div>
                        </a>
                        
                        <a href="portfolio.php" class="group px-8 py-4 rounded-2xl border border-gray-600 text-white font-semibold transition-all duration-300 hover:border-purple-400 hover:bg-purple-500/10 backdrop-blur-sm text-center flex items-center justify-center gap-2">
                            <span>Watch Demo</span>
                            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Modern Contact Form -->
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-blue-500/20 rounded-3xl blur-2xl"></div>
                    <div class="relative bg-white/5 backdrop-blur-2xl rounded-3xl p-8 border border-white/10 shadow-2xl">
                        <div class="text-center mb-8">
                            <h3 class="text-2xl font-bold text-white mb-2">Get Your Free Growth Plan</h3>
                            <p class="text-gray-300">Book a 30-min strategy session worth $500</p>
                        </div>
                        
                        <form id="contact" action="contact_process.php" method="POST" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="relative">
                                    <input 
                                        type="text" 
                                        name="name"
                                        placeholder="Full Name" 
                                        required
                                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-gray-300 focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300"
                                        style="background: rgba(255, 255, 255, 0.1) !important; color: #ffffff !important; border: 1px solid rgba(255, 255, 255, 0.2) !important;"
                                    />
                                </div>
                                
                                <div class="relative">
                                    <input 
                                        type="email" 
                                        name="email"
                                        placeholder="Business Email" 
                                        required
                                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-gray-300 focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300"
                                        style="background: rgba(255, 255, 255, 0.1) !important; color: #ffffff !important; border: 1px solid rgba(255, 255, 255, 0.2) !important;"
                                    />
                                </div>
                                
                                <div class="relative md:col-span-2">
                                    <select 
                                        name="service" 
                                        required
                                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300"
                                        style="background: rgba(255, 255, 255, 0.1) !important; color: #ffffff !important; border: 1px solid rgba(255, 255, 255, 0.2) !important;"
                                    >
                                        <option value="" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">Select Service Interest</option>
                                        <option value="Digital Marketing" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">Digital Marketing</option>
                                        <option value="SEO & Analytics" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">SEO & Analytics</option>
                                        <option value="Web Development" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">Web Development</option>
                                        <option value="UI/UX Design" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">UI/UX Design</option>
                                        <option value="Email Marketing" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">Email Marketing</option>
                                        <option value="Performance Marketing" class="bg-gray-800" style="background: #1f2937 !important; color: #ffffff !important;">Performance Marketing</option>
                                    </select>
                                </div>
                                
                                <div class="relative md:col-span-2">
                                    <textarea 
                                        name="message" 
                                        placeholder="Tell us about your business goals..."
                                        rows="4" 
                                        required
                                        class="w-full px-6 py-4 bg-white/10 border border-white/20 rounded-2xl text-white placeholder-gray-300 focus:ring-2 focus:ring-purple-400 focus:border-transparent backdrop-blur-sm transition-all duration-300 resize-none"
                                        style="background: rgba(255, 255, 255, 0.1) !important; color: #ffffff !important; border: 1px solid rgba(255, 255, 255, 0.2) !important;"
                                    ></textarea>
                                </div>
                            </div>
                            
                            <button 
                                type="submit" 
                                class="w-full bg-gradient-to-r from-purple-600 to-blue-600 text-white px-8 py-4 rounded-2xl font-semibold hover:from-purple-700 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 shadow-lg"
                                style="background: linear-gradient(to right, #9333ea, #2563eb) !important; color: #ffffff !important;"
                            >
                                Book Free Consultation
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Preview Section -->
    <section class="py-20 bg-black relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-gradient-to-r from-blue-500/20 to-purple-500/20 border border-blue-500/30 backdrop-blur-sm mb-6" style="background: linear-gradient(to right, rgba(59, 130, 246, 0.2), rgba(168, 85, 247, 0.2)); border: 1px solid rgba(59, 130, 246, 0.3);">
                    <span class="text-blue-300 text-sm font-medium" style="color: #93c5fd !important;">Our Services</span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6" style="color: #ffffff !important;">
                    Our <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent" style="background: linear-gradient(to right, #60a5fa, #c084fc) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important; animation: gradient 3s ease infinite; -webkit-animation: gradient 3s ease infinite;">Digital Solutions</span>
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" style="color: #d1d5db !important;">
                    From strategy to execution, we deliver comprehensive digital marketing solutions that transform your business.
                </p>
            </div>
            
            <div style="display: grid !important; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)) !important; gap: 24px !important; justify-items: center !important; max-width: 1200px !important; margin: 0 auto !important;">
                <!-- Digital Marketing -->
                <div style="background: rgba(17, 24, 39, 0.8) !important; border: 1px solid #374151 !important; border-radius: 12px !important; padding: 16px !important; width: 280px !important; height: 220px !important; box-sizing: border-box !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)'; this.style.borderColor='rgba(59, 130, 246, 0.5)'; this.style.boxShadow='0 0 20px rgba(59, 130, 246, 0.5)'; this.style.webkitBoxShadow='0 0 20px rgba(59, 130, 246, 0.5)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(59, 130, 246, 0.2) !important; width: 32px !important; height: 32px !important; border-radius: 8px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <svg style="width: 16px !important; height: 16px !important; color: #60a5fa !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a1 1 0 01-1-1V9a1 1 0 011-1h1a2 2 0 100-4H4a1 1 0 01-1-1V4a1 1 0 011-1h3a1 1 0 001-1v-1a2 2 0 114 0z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, sans-serif !important;">Digital Marketing</h3>
                    <p style="color: #d1d5db !important; font-size: 13px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, sans-serif !important;">Strategic campaigns that drive engagement and conversions across all digital channels.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 12px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            PPC Management
                        </li>
                        <li style="color: #9ca3af !important; font-size: 12px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            Social Media Marketing
                        </li>
                    </ul>
                </div>

                <!-- SEO & Analytics -->
                <div style="background: rgba(17, 24, 39, 0.8) !important; border: 1px solid #374151 !important; border-radius: 12px !important; padding: 16px !important; width: 280px !important; height: 220px !important; box-sizing: border-box !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)'; this.style.borderColor='rgba(34, 197, 94, 0.5)'; this.style.boxShadow='0 0 20px rgba(34, 197, 94, 0.5)'; this.style.webkitBoxShadow='0 0 20px rgba(34, 197, 94, 0.5)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(34, 197, 94, 0.2) !important; width: 32px !important; height: 32px !important; border-radius: 8px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <svg style="width: 16px !important; height: 16px !important; color: #22c55e !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, sans-serif !important;">SEO & Analytics</h3>
                    <p style="color: #d1d5db !important; font-size: 13px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, sans-serif !important;">Boost your search rankings and track performance with advanced analytics.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 12px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            Keyword Research
                        </li>
                        <li style="color: #9ca3af !important; font-size: 12px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            Performance Tracking
                        </li>
                    </ul>
                </div>

                <!-- Web Development -->
                <div style="background: rgba(17, 24, 39, 0.8) !important; border: 1px solid #374151 !important; border-radius: 12px !important; padding: 16px !important; width: 280px !important; height: 220px !important; box-sizing: border-box !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.05)'; this.style.webkitTransform='scale(1.05)'; this.style.borderColor='rgba(168, 85, 247, 0.5)'; this.style.boxShadow='0 0 20px rgba(168, 85, 247, 0.5)'; this.style.webkitBoxShadow='0 0 20px rgba(168, 85, 247, 0.5)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(168, 85, 247, 0.2) !important; width: 32px !important; height: 32px !important; border-radius: 8px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <svg style="width: 16px !important; height: 16px !important; color: #a855f7 !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, sans-serif !important;">Web Development</h3>
                    <p style="color: #d1d5db !important; font-size: 13px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, sans-serif !important;">Custom websites and applications built with modern technologies.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 12px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            Responsive Design
                        </li>
                        <li style="color: #9ca3af !important; font-size: 12px !important; display: flex !important; align-items: center !important; font-family: Arial, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 8px !important;">✓</span>
                            E-commerce Solutions
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="services.php" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                    View All Services
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Value Showcase Section -->
    <section id="value-showcase" class="py-20 bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-20">
                <div class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-r from-purple-500/20 to-blue-500/20 border border-purple-500/30 backdrop-blur-sm mb-8 animate-fadeInUp">
                    <span class="text-purple-300 text-lg font-semibold">🎯 Why Choose ZlliQ</span>
                </div>
                <h2 class="text-5xl lg:text-6xl font-bold text-white mb-8 animate-slideInLeft">
                    Your Success is <span class="bg-gradient-to-r from-purple-400 to-blue-400 bg-clip-text text-transparent animate-gradient">Our Mission</span>
                </h2>
                <p class="text-2xl text-gray-300 max-w-4xl mx-auto animate-slideInLeft" style="animation-delay: 0.2s;">
                    Experience the difference with our proven track record and innovative approach to digital marketing excellence.
                </p>
            </div>
            
            <!-- Value Cards Grid -->
            <div class="grid lg:grid-cols-2 gap-12 mb-20">
                <!-- Primary Value Card -->
                <div class="bg-gradient-to-br from-blue-900/40 to-purple-900/40 backdrop-blur border border-blue-500/30 rounded-3xl p-10 transform hover:scale-105 transition-all duration-500 animate-fadeInUp">
                    <div class="flex items-center mb-8">
                        <div class="w-20 h-20 bg-blue-500/20 rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-10 h-10 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white mb-2">Lightning Fast Results</h3>
                            <p class="text-xl text-blue-300">See measurable improvements in 30 days</p>
                        </div>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            AI-powered campaign optimization
                        </li>
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            Real-time performance tracking
                        </li>
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            Instant strategy adjustments
                        </li>
                    </ul>
                </div>
                
                <!-- Secondary Value Card -->
                <div class="bg-gradient-to-br from-purple-900/40 to-pink-900/40 backdrop-blur border border-purple-500/30 rounded-3xl p-10 transform hover:scale-105 transition-all duration-500 animate-fadeInUp" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-8">
                        <div class="w-20 h-20 bg-purple-500/20 rounded-2xl flex items-center justify-center mr-6">
                            <svg class="w-10 h-10 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-3xl font-bold text-white mb-2">Guaranteed ROI Growth</h3>
                            <p class="text-xl text-purple-300">Average 300% return on investment</p>
                        </div>
                    </div>
                    <ul class="space-y-4">
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            Data-driven decision making
                        </li>
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            Conversion rate optimization
                        </li>
                        <li class="flex items-center text-lg text-gray-300">
                            <span class="text-green-400 text-2xl mr-4">✓</span>
                            Revenue growth strategies
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Success Metrics -->
            <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-3xl p-12 animate-fadeInUp" style="animation-delay: 0.4s;">
                <div class="text-center mb-12">
                    <h3 class="text-4xl font-bold text-white mb-4">Proven Track Record</h3>
                    <p class="text-xl text-gray-300">Numbers that speak for themselves</p>
                </div>
                
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-5xl font-bold text-blue-400 mb-2">500+</div>
                        <div class="text-lg text-gray-400">Successful Projects</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-bold text-purple-400 mb-2">3x</div>
                        <div class="text-lg text-gray-400">Average ROI</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-bold text-green-400 mb-2">95%</div>
                        <div class="text-lg text-gray-400">Client Retention</div>
                    </div>
                    <div class="text-center">
                        <div class="text-5xl font-bold text-yellow-400 mb-2">24/7</div>
                        <div class="text-lg text-gray-400">Support Available</div>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="text-center mt-16">
                <div class="inline-flex flex-col sm:flex-row gap-6 items-center">
                    <button onclick="window.location.href='services.php'" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white font-bold py-5 px-10 rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-2xl text-xl">
                        Start Your Success Story
                    </button>
                    <button onclick="window.location.href='portfolio.php'" class="bg-gray-800 border-2 border-gray-600 text-white font-bold py-5 px-10 rounded-2xl hover:bg-gray-700 hover:border-gray-500 transition-all duration-300 transform hover:scale-105 text-xl">
                        View Case Studies
                    </button>
                </div>
                
                <p class="text-lg text-gray-400 mt-8">
                    ✨ Free consultation available &nbsp;&nbsp;•&nbsp;&nbsp; 🚀 No long-term contracts &nbsp;&nbsp;•&nbsp;&nbsp; 💯 Results guaranteed
                </p>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script>
        // Force reload styles on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Apply force styles
            document.body.style.background = '#000000';
            document.body.style.color = '#ffffff';
            document.documentElement.style.background = '#000000';
            
            // Force dark theme
            document.documentElement.classList.add('dark');
            
            // Re-apply Tailwind classes and force text visibility
            setTimeout(function() {
                const elements = document.querySelectorAll('*');
                elements.forEach(el => {
                    if (el.classList.contains('bg-black')) {
                        el.style.background = '#000000';
                    }
                    if (el.classList.contains('text-white')) {
                        el.style.color = '#ffffff';
                    }
                    if (el.classList.contains('text-gray-300')) {
                        el.style.color = '#d1d5db';
                    }
                    if (el.classList.contains('text-gray-400')) {
                        el.style.color = '#9ca3af';
                    }
                });
                
                // Force gradient text visibility
                const gradientTexts = document.querySelectorAll('.gradient-text-primary, .gradient-text-secondary');
                gradientTexts.forEach(el => {
                    el.style.background = 'linear-gradient(to right, #c084fc, #f472b6, #60a5fa)';
                    el.style.webkitBackgroundClip = 'text';
                    el.style.backgroundClip = 'text';
                    el.style.webkitTextFillColor = 'transparent';
                    el.style.color = 'transparent';
                });
            }, 100);
        });

        // Mobile menu toggle function
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
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

        // Form success/error handling
        window.addEventListener('load', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.get('success')) {
                alert('Thank you! Your message has been sent successfully. We\'ll get back to you within 24 hours.');
                // Clean URL
                window.history.replaceState({}, document.title, window.location.pathname);
            } else if (urlParams.get('error')) {
                const error = urlParams.get('error');
                if (error === 'missing_fields') {
                    alert('Please fill in all required fields.');
                } else if (error === 'invalid_email') {
                    alert('Please enter a valid email address.');
                } else {
                    alert('Sorry, there was an error sending your message. Please try again.');
                }
                // Clean URL
                window.history.replaceState({}, document.title, window.location.pathname);
            }
        });

        // FORCE UPDATE - Cache busting and style reload
        (function() {
            const timestamp = Date.now() + Math.random();
            
            // Clear browser cache
            if ('caches' in window) {
                caches.keys().then(names => {
                    names.forEach(name => caches.delete(name));
                });
            }
            
            // Force reload all stylesheets with unique timestamp
            const links = document.querySelectorAll('link[rel="stylesheet"]');
            links.forEach(link => {
                const href = link.href.split('?')[0];
                link.href = href + '?v=' + timestamp;
            });
            
            // Add cache-busting meta tags
            const meta1 = document.createElement('meta');
            meta1.httpEquiv = 'cache-control';
            meta1.content = 'no-cache, no-store, must-revalidate';
            document.head.appendChild(meta1);
            
            const meta2 = document.createElement('meta');
            meta2.httpEquiv = 'pragma';
            meta2.content = 'no-cache';
            document.head.appendChild(meta2);
            
            const meta3 = document.createElement('meta');
            meta3.httpEquiv = 'expires';
            meta3.content = '0';
            document.head.appendChild(meta3);
            
            // Force DOM reflow
            document.body.style.display = 'none';
            document.body.offsetHeight;
            document.body.style.display = '';
            
            console.log('FORCED UPDATE APPLIED - Version: ' + timestamp);
        })();
    </script>
</body>
</html>