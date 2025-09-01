<?php
$page_title = "Careers at ZlliQ Technology - Join Our Digital Marketing Team";
$page_description = "Join ZlliQ Technology's dynamic team of digital marketing professionals. Explore exciting career opportunities and grow your skills in a collaborative environment.";
?>
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">

    <title>Careers at Zlliq - Join Our Email Marketing & Campaign Management Team</title>

    <meta name="description" content="Explore exciting career opportunities at Zlliq. Join our growing team in Email Marketing, Zoho Campaign Management, and Automation Services. Apply today!">

    <meta name="keywords" content="Zlliq Careers, Email Marketing Jobs, Zoho Campaign Jobs, Digital Marketing Careers, Campaign Manager Jobs, Marketing Automation Jobs, Work at Zlliq">

    <meta name="author" content="Zlliq HR Team">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://zlliq.com/careers.php" />

    <!-- Open Graph (For Social Sharing) -->
    <meta property="og:title" content="Careers at Zlliq - Join Our Email Marketing Team">
    <meta property="og:description" content="Looking for a career in Email Marketing and Campaign Management? Zlliq is hiring! Apply now and be part of our fast-growing team.">
    <meta property="og:url" content="https://zlliq.com/careers.php">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://zlliq.com/images/careers-banner.png"> <!-- Update with your careers page image -->

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zlliq Careers - Email Marketing & Campaign Jobs">
    <meta name="twitter:description" content="Join Zlliq for exciting opportunities in Email Marketing, Zoho Campaign Management, and more. Apply today.">
    <meta name="twitter:image" content="https://zlliq.com/images/careers-banner.png"> <!-- Update image URL -->


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
                    <span class="text-blue-300 text-sm font-medium">Careers</span>
                </div>
                <h1 class="text-4xl lg:text-6xl font-bold text-white mb-6" style="animation: slideInLeft 0.8s ease-out; -webkit-animation: slideInLeft 0.8s ease-out;">
                    <span class="text-white" style="color: #ffffff !important;">Build Your Career in </span>
                    <span class="bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text text-transparent" style="background: linear-gradient(to right, #60a5fa, #c084fc) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important; animation: gradient 3s ease infinite; -webkit-animation: gradient 3s ease infinite;">
                        Digital Marketing
                    </span>
                </h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Join our passionate team of digital marketing experts and help shape the future of businesses through innovative marketing strategies and cutting-edge technology.
                </p>
            </div>
        </div>
    </section>

    <!-- Why Join Us Section -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Why Work With Us?</h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    We believe in creating an environment where creativity thrives, innovation is encouraged, and every team member can reach their full potential.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Growth Opportunities -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Growth Opportunities</h3>
                    <p class="text-gray-300">
                        Advance your career with continuous learning opportunities, skill development programs, and clear progression paths.
                    </p>
                </div>

                <!-- Flexible Work -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-green-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Flexible Work Environment</h3>
                    <p class="text-gray-300">
                        Enjoy work-life balance with flexible hours, remote work options, and a supportive team culture that values well-being.
                    </p>
                </div>

                <!-- Innovative Projects -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-purple-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-purple-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Innovative Projects</h3>
                    <p class="text-gray-300">
                        Work on cutting-edge digital marketing campaigns and innovative solutions that make a real impact on business growth.
                    </p>
                </div>

                <!-- Competitive Benefits -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-orange-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Competitive Benefits</h3>
                    <p class="text-gray-300">
                        Enjoy competitive salaries, health benefits, performance bonuses, and professional development allowances.
                    </p>
                </div>

                <!-- Team Culture -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-pink-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-pink-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Collaborative Culture</h3>
                    <p class="text-gray-300">
                        Be part of a diverse, inclusive team that values collaboration, creativity, and mutual support in achieving common goals.
                    </p>
                </div>

                <!-- Learning & Development -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-cyan-500/50 transition-all duration-300">
                    <div class="w-12 h-12 bg-cyan-500/20 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4">Learning & Development</h3>
                    <p class="text-gray-300">
                        Access to industry certifications, conferences, workshops, and training programs to keep your skills current and competitive.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section class="py-20 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Open Positions</h2>
                <p class="text-xl text-gray-300">
                    Join our team and help us deliver exceptional digital marketing solutions
                </p>
            </div>
            
            <div class="space-y-6">
                <!-- Job 1 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-blue-500/50 transition-all duration-300">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-2xl font-bold text-white">Senior Digital Marketing Strategist</h3>
                                <span class="px-3 py-1 bg-blue-500/20 text-blue-400 text-sm rounded-full">Full-time</span>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Lead comprehensive digital marketing strategies for our enterprise clients. Develop and execute campaigns across multiple channels to drive growth and ROI.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">5+ years experience</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Remote-friendly</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Strategy & Analytics</span>
                            </div>
                        </div>
                        <div class="lg:ml-8 mt-4 lg:mt-0">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300">
                                Apply Now
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 2 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-green-500/50 transition-all duration-300">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-2xl font-bold text-white">SEO Specialist</h3>
                                <span class="px-3 py-1 bg-green-500/20 text-green-400 text-sm rounded-full">Full-time</span>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Drive organic growth through technical SEO, content optimization, and strategic link building. Help our clients dominate search engine results.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">3+ years experience</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Technical SEO</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Analytics Expert</span>
                            </div>
                        </div>
                        <div class="lg:ml-8 mt-4 lg:mt-0">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-green-600 to-blue-600 text-white font-semibold rounded-xl hover:from-green-700 hover:to-blue-700 transition-all duration-300">
                                Apply Now
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 3 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-purple-500/50 transition-all duration-300">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-2xl font-bold text-white">Frontend Developer</h3>
                                <span class="px-3 py-1 bg-purple-500/20 text-purple-400 text-sm rounded-full">Full-time</span>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Create stunning web experiences using modern frontend technologies. Build responsive, high-performance websites and applications for our clients.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">React & TypeScript</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">2+ years experience</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">UI/UX Focus</span>
                            </div>
                        </div>
                        <div class="lg:ml-8 mt-4 lg:mt-0">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300">
                                Apply Now
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job 4 -->
                <div class="bg-gray-900/50 backdrop-blur border border-gray-700 rounded-2xl p-8 hover:border-orange-500/50 transition-all duration-300">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-4 mb-4">
                                <h3 class="text-2xl font-bold text-white">Content Marketing Manager</h3>
                                <span class="px-3 py-1 bg-orange-500/20 text-orange-400 text-sm rounded-full">Full-time</span>
                            </div>
                            <p class="text-gray-300 mb-4">
                                Develop and execute content strategies that engage audiences and drive conversions. Create compelling content across multiple formats and channels.
                            </p>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Content Strategy</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">4+ years experience</span>
                                <span class="px-3 py-1 bg-gray-800 text-gray-300 text-sm rounded-full">Creative Writing</span>
                            </div>
                        </div>
                        <div class="lg:ml-8 mt-4 lg:mt-0">
                            <a href="#" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-orange-600 to-red-600 text-white font-semibold rounded-xl hover:from-orange-700 hover:to-red-700 transition-all duration-300">
                                Apply Now
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="py-20 bg-black">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">Our Hiring Process</h2>
                <p class="text-xl text-gray-300">
                    A transparent and efficient process designed to find the best fit for both you and our team
                </p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-blue-400">1</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-4">Application Review</h3>
                    <p class="text-gray-300 text-sm">We review your application and portfolio to understand your experience and skills.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-green-400">2</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-4">Initial Interview</h3>
                    <p class="text-gray-300 text-sm">A friendly conversation about your background, interests, and career goals.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-purple-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-purple-400">3</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-4">Skills Assessment</h3>
                    <p class="text-gray-300 text-sm">A practical assessment to evaluate your technical skills and problem-solving abilities.</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-orange-500/20 rounded-full flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-orange-400">4</span>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-4">Team Interview</h3>
                    <p class="text-gray-300 text-sm">Meet the team you'll be working with and discuss how you'll contribute to our projects.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-950 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-br from-gray-900/50 to-gray-800/50 backdrop-blur border border-gray-700 rounded-3xl p-12 text-center max-w-4xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold text-white mb-6">
                    Don't See the Right Position?
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    We're always looking for talented individuals to join our team. Send us your resume and tell us how you'd like to contribute to ZlliQ Technology.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/php-website/home-page.php#contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-purple-600 text-white font-semibold rounded-2xl hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                        Send Your Resume
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                    <a href="/php-website/about.php" class="inline-flex items-center px-8 py-4 border border-gray-600 text-white font-semibold rounded-2xl hover:border-blue-500 hover:bg-blue-500/10 transition-all duration-300 backdrop-blur-sm">
                        Learn More About Us
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
            console.log('CAREERS PAGE V2 LOADED - With refresh functionality');
            
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
            
            console.log('Careers page V2 fully loaded with all fixes applied');
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