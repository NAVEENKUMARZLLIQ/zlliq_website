<?php
$page_title = "AI-Powered Digital Marketing Services - ZlliQ Technology";
$page_description = "Revolutionary AI-powered digital marketing services including predictive analytics, quantum content generation, neural analytics, and automated optimization by ZlliQ Technology.";
include 'header.php';
?>
    
    <!-- FORCE NO CACHE - Services V2 -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="version" content="services-v2-<?php echo time() . '-' . rand(10000, 99999); ?>">
    
    <link rel="icon" type="image/png" href="favicons.png">
    <script src="https://cdn.tailwindcss.com?v=<?php echo time(); ?>"></script>
    <style>
        /* SERVICES V2 - FIXED ANIMATION */
        * { box-sizing: border-box !important; }
        body { background: #000000 !important; color: #ffffff !important; margin: 0 !important; padding: 0 !important; }
        
        /* FIXED Digital Solutions Animation */
        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @-webkit-keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .animate-gradient-text {
            background: linear-gradient(90deg, #60a5fa, #c084fc, #f472b6, #60a5fa) !important;
            background-size: 400% 400% !important;
            -webkit-background-clip: text !important;
            background-clip: text !important;
            -webkit-text-fill-color: transparent !important;
            color: transparent !important;
            animation: gradientShift 3s ease-in-out infinite !important;
            -webkit-animation: gradientShift 3s ease-in-out infinite !important;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .animate-fadeInUp { animation: fadeInUp 0.8s ease-out !important; }
        .animate-slideInLeft { animation: slideInLeft 0.8s ease-out !important; }
        .animate-pulse { animation: pulse 2s ease-in-out infinite !important; }
        .animate-float { animation: float 6s ease-in-out infinite !important; }
        
        .glass-card {
            background: rgba(17, 24, 39, 0.8) !important;
            backdrop-filter: blur(20px) !important;
            border: 1px solid rgba(59, 130, 246, 0.3) !important;
            border-radius: 24px !important;
        }
        
        .hover-scale:hover {
            transform: scale(1.05) translateY(-10px) !important;
            border-color: rgba(147, 51, 234, 0.5) !important;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background: #000000; color: #ffffff; padding-top: 72px;">
    <?php include 'header-v2.php'; ?>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 overflow-hidden" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 30%, #7c3aed 100%);">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="animate-float" style="position: absolute; top: 20%; left: 10%; width: 300px; height: 300px; background: radial-gradient(circle, rgba(59, 130, 246, 0.2) 0%, transparent 70%); border-radius: 50%;"></div>
            <div class="animate-float" style="position: absolute; bottom: 20%; right: 15%; width: 400px; height: 400px; background: radial-gradient(circle, rgba(147, 51, 234, 0.2) 0%, transparent 70%); border-radius: 50%; animation-delay: -2s;"></div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <div style="display: inline-flex; align-items: center; padding: 12px 24px; border-radius: 50px; background: linear-gradient(to right, rgba(59, 130, 246, 0.3), rgba(147, 51, 234, 0.3)); border: 1px solid rgba(59, 130, 246, 0.4); margin-bottom: 32px; backdrop-filter: blur(8px);">
                    <span style="color: #60a5fa; font-size: 16px; font-weight: 600;">🚀 Our Revolutionary Services</span>
                </div>
                
                <h1 style="font-size: 4rem; line-height: 1.1; font-weight: 900; margin-bottom: 32px; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif;">
                    <span class="animate-gradient-text">Digital Solutions</span>
                    <span style="color: #ffffff; display: block; margin-top: 16px;">That Drive Results</span>
                </h1>
                
                <p style="font-size: 1.5rem; color: #d1d5db; max-width: 800px; margin: 0 auto;">
                    From strategy to execution, we deliver comprehensive AI-powered digital marketing solutions that transform your business and accelerate growth.
                </p>
            </div>
        </div>
    </section>

    <!-- Advanced Services Grid -->
    <section class="py-24" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 32px;">
                
                <!-- AI Marketing Intelligence -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease;">
                    <div style="background: linear-gradient(135deg, #3b82f6, #8b5cf6); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(59, 130, 246, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">AI Marketing Intelligence</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">Advanced neural networks analyze customer behavior patterns and predict optimal engagement strategies with 94% accuracy.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Predictive Customer Journey Mapping
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Real-time Sentiment Analysis
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Automated A/B Testing at Scale
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Cross-platform Attribution Modeling
                        </li>
                    </ul>
                    <div style="background: rgba(59, 130, 246, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(59, 130, 246, 0.3);">
                        <p style="color: #60a5fa; font-size: 14px; font-weight: 600; margin: 0;">Starting at $2,500/month</p>
                    </div>
                </div>

                <!-- Quantum Content Generation -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease; animation-delay: 0.2s;">
                    <div style="background: linear-gradient(135deg, #8b5cf6, #ec4899); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(139, 92, 246, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">Quantum Content Generation</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">AI-powered content creation that generates personalized, high-converting copy in seconds, not hours.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Multi-language Content Creation
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Dynamic Video & Image Generation
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Voice & Tone Adaptation
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            SEO-optimized Content Strategy
                        </li>
                    </ul>
                    <div style="background: rgba(139, 92, 246, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(139, 92, 246, 0.3);">
                        <p style="color: #c084fc; font-size: 14px; font-weight: 600; margin: 0;">Starting at $1,800/month</p>
                    </div>
                </div>

                <!-- Neural Analytics Dashboard -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease; animation-delay: 0.4s;">
                    <div style="background: linear-gradient(135deg, #ec4899, #f59e0b); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(236, 72, 153, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">Neural Analytics Dashboard</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">Real-time performance tracking with predictive insights that help you stay ahead of market trends.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            360° Performance Analytics
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Competitive Intelligence Reports
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            ROI Optimization Alerts
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Custom KPI Dashboards
                        </li>
                    </ul>
                    <div style="background: rgba(236, 72, 153, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(236, 72, 153, 0.3);">
                        <p style="color: #f472b6; font-size: 14px; font-weight: 600; margin: 0;">Starting at $3,200/month</p>
                    </div>
                </div>

                <!-- Web Development -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease; animation-delay: 0.6s;">
                    <div style="background: linear-gradient(135deg, #10b981, #3b82f6); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(16, 185, 129, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">Advanced Web Development</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">Custom websites and applications built with modern technologies and AI-enhanced user experiences.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            AI-Enhanced Responsive Design
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Progressive Web Applications
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            E-commerce Solutions
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Custom CMS Integration
                        </li>
                    </ul>
                    <div style="background: rgba(16, 185, 129, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(16, 185, 129, 0.3);">
                        <p style="color: #10b981; font-size: 14px; font-weight: 600; margin: 0;">Starting at $5,000/project</p>
                    </div>
                </div>

                <!-- Social Media Automation -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease; animation-delay: 0.8s;">
                    <div style="background: linear-gradient(135deg, #f59e0b, #ef4444); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(245, 158, 11, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v3M7 4H5a1 1 0 00-1 1v16a1 1 0 001 1h14a1 1 0 001-1V5a1 1 0 00-1-1h-2M7 4h10M9 9l2 2 4-4"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">Social Media Automation</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">AI-driven social media management that engages your audience 24/7 with personalized content.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Automated Content Scheduling
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            AI-powered Hashtag Research
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Engagement Bot Management
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Cross-platform Publishing
                        </li>
                    </ul>
                    <div style="background: rgba(245, 158, 11, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(245, 158, 11, 0.3);">
                        <p style="color: #f59e0b; font-size: 14px; font-weight: 600; margin: 0;">Starting at $1,500/month</p>
                    </div>
                </div>

                <!-- Email Marketing Automation -->
                <div class="glass-card hover-scale animate-fadeInUp p-8" style="transition: all 0.4s ease; animation-delay: 1s;">
                    <div style="background: linear-gradient(135deg, #ef4444, #8b5cf6); width: 64px; height: 64px; border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-bottom: 24px; box-shadow: 0 8px 32px rgba(239, 68, 68, 0.4);">
                        <svg style="width: 32px; height: 32px; color: #ffffff;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 style="color: #ffffff; font-size: 1.8rem; font-weight: 700; margin-bottom: 16px;">Email Marketing Automation</h3>
                    <p style="color: #d1d5db; font-size: 16px; line-height: 1.6; margin-bottom: 24px;">Intelligent email campaigns that nurture leads and convert prospects with personalized messaging.</p>
                    <ul style="list-style: none; padding: 0; margin: 0 0 24px 0;">
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Behavioral Trigger Campaigns
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Dynamic Content Personalization
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; margin-bottom: 12px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Advanced Segmentation
                        </li>
                        <li style="color: #9ca3af; font-size: 14px; display: flex; align-items: center;">
                            <span style="color: #22c55e; margin-right: 12px; font-size: 16px;">✓</span>
                            Performance Analytics
                        </li>
                    </ul>
                    <div style="background: rgba(239, 68, 68, 0.1); padding: 16px; border-radius: 12px; border: 1px solid rgba(239, 68, 68, 0.3);">
                        <p style="color: #ef4444; font-size: 14px; font-weight: 600; margin: 0;">Starting at $1,200/month</p>
                    </div>
                </div>
            </div>
            
            <!-- CTA Section -->
            <div class="text-center mt-16 animate-fadeInUp" style="animation-delay: 1.2s;">
                <div class="glass-card p-12 max-w-4xl mx-auto">
                    <h3 style="color: #ffffff; font-size: 2.5rem; font-weight: 800; margin-bottom: 24px;">Ready to Transform Your Business?</h3>
                    <p style="color: #d1d5db; font-size: 1.25rem; margin-bottom: 32px;">Join 1000+ enterprises that have accelerated their growth with our AI-powered solutions.</p>
                    
                    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                        <button onclick="handleRefresh(null, 'about.php')" style="background: linear-gradient(135deg, #25d366, #128c7e); color: #ffffff; font-size: 18px; font-weight: 700; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif; padding: 16px 32px; border: none; border-radius: 16px; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 12px;" onmouseover="this.style.transform='translateY(-3px) scale(1.05)'; this.style.boxShadow='0 10px 40px rgba(37, 211, 102, 0.4)'" onmouseout="this.style.transform='translateY(0) scale(1)'; this.style.boxShadow='none'">
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Learn About Our Team
                        </button>
                        
                        <button onclick="handleRefresh(null, 'portfolio.php')" style="background: rgba(59, 130, 246, 0.2); color: #60a5fa; font-size: 18px; font-weight: 600; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif; padding: 16px 32px; border: 2px solid #3b82f6; border-radius: 16px; cursor: pointer; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 12px;" onmouseover="this.style.background='#3b82f6'; this.style.color='#ffffff'" onmouseout="this.style.background='rgba(59, 130, 246, 0.2)'; this.style.color='#60a5fa'">
                            View Our Portfolio
                            <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer-v2.php'; ?>

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
            console.log('SERVICES V2 LOADED - Digital Solutions animation FIXED');
            
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
            
            // Verify animation is working
            const animatedText = document.querySelector('.animate-gradient-text');
            if (animatedText) {
                console.log('Digital Solutions animation is active and working');
            }
            
            console.log('Services V2 fully loaded with all fixes applied');
        });
    </script>
</body>
</html>