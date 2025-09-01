<?php
// Main index file for Hostinger deployment
// This file serves as the homepage and includes all home-page content
?>
<?php
// Automatic redirect to home-page.php for all index access
if (!headers_sent()) {
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /home-page.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">

    <title>Zlliq - Email Marketing, Zoho Campaign Tie-up, Managed Email Services</title>

    <meta name="description" content="Zlliq is a leading email marketing and campaign management platform. Partnered with Zoho for bulk email campaigns, managed service campaigns, and automation. Contact Zlliq today for powerful email solutions.">

    <meta name="keywords" content="Zlliq, Email Marketing, Zoho Campaign Partner, Managed Email Services, Bulk Email Sending, Email Campaign Management, Campaign Automation, Zlliq Email Platform">

    <meta name="robots" content="index, follow">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://zlliq.com/" />

    <!-- Open Graph Meta Tags for Social Media Sharing -->
    <meta property="og:title" content="Zlliq - Email Marketing & Zoho Campaign Management">
    <meta property="og:description" content="Zlliq provides Email Marketing Automation, Zoho Campaign tie-up, and Managed Email Campaign Services.">
    <meta property="og:url" content="https://zlliq.com/">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://zlliq.com/images/zlliq-logo.png"> <!-- Replace with your logo image URL -->

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Zlliq - Email Marketing Automation Tool">
    <meta name="twitter:description" content="AI-powered Email Marketing, Zoho Campaign tie-up, and Managed Email Campaign services from Zlliq.">
    <meta name="twitter:image" content="https://zlliq.com/images/zlliq-logo.png"> <!-- Replace with your logo image URL -->

</head>
<body>

    <h1>Welcome to Zlliq - Email Marketing and Zoho Campaign Management</h1>

    <p>Zlliq is your trusted partner for Email Marketing, Zoho Campaign tie-ups, campaign sending, and fully managed email services. With Zlliq, automate your email campaigns and reach your customers effectively.</p>

    <h2>Our Services at Zlliq:</h2>
    <ul>
        <li>Bulk Email Marketing Campaigns</li>
        <li>Zoho Campaign Integration and Tie-up</li>
        <li>Managed Email Service Campaigns</li>
        <li>Email Automation Tools</li>
        <li>Performance Tracking and Reporting</li>
    </ul>

    <p>Contact Zlliq today for all your Email Marketing needs.</p>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicons.png">
    <link rel="shortcut icon" type="image/png" href="favicons.png">
    <link rel="apple-touch-icon" href="favicons.png">
    <meta name="description" content="ZlliQ Technology offers comprehensive digital marketing, web development, SEO, and analytics services. Transform your business with innovative digital solutions.">
    <meta name="keywords" content="digital marketing, web development, SEO, analytics, online marketing, website design">
    <meta name="author" content="ZlliQ Technology">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="ZlliQ Technology - Digital Marketing Solutions">
    <meta property="og:description" content="Transform your business with our comprehensive digital marketing and web development services.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://zlliq.com">
    
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #000000 !important;
            color: #ffffff !important;
            font-family: Arial, sans-serif !important;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        html {
            background: #000000 !important;
            scroll-behavior: smooth;
        }
        
        /* Animation keyframes */
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @-webkit-keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes slideInLeft {
            from { transform: translateX(-100px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        
        @-webkit-keyframes slideInLeft {
            from { -webkit-transform: translateX(-100px); opacity: 0; }
            to { -webkit-transform: translateX(0); opacity: 1; }
        }
        
        @keyframes fadeInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @-webkit-keyframes fadeInUp {
            from { -webkit-transform: translateY(30px); opacity: 0; }
            to { -webkit-transform: translateY(0); opacity: 1; }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        @-webkit-keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        /* Utility classes */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .section {
            padding: 80px 0;
        }
        
        .text-center {
            text-align: center;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background: linear-gradient(to right, #3b82f6, #2563eb) !important;
            color: #ffffff !important;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }
        
        /* Responsive grid */
        .grid {
            display: grid;
            gap: 24px;
        }
        
        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
        
        /* Mobile responsive */
        @media (max-width: 768px) {
            .section {
                padding: 60px 0;
            }
            
            .container {
                padding: 0 16px;
            }
            
            h1 {
                font-size: 2.5rem !important;
            }
            
            h2 {
                font-size: 2rem !important;
            }
        }
    </style>
</head>
<body>
    <!-- Header Navigation -->
    <div style="background: #000000 !important; position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; z-index: 1000 !important; padding: 16px 0 !important; border-bottom: 1px solid #374151 !important;">
        <div style="max-width: 1200px !important; margin: 0 auto !important; padding: 0 20px !important;">
            <div style="display: flex !important; align-items: center !important; justify-content: space-between !important;">
                <!-- Logo -->
                <div style="display: flex !important; align-items: center !important;">
                    <a href="home-page.php" style="color: #ffffff !important; font-size: 24px !important; font-weight: 700 !important; text-decoration: none !important; font-family: Arial, Helvetica, sans-serif !important;">
                        ZlliQ
                    </a>
                </div>
                
                <!-- Desktop Navigation - Triple Backup Method -->
                <div id="desktop-nav">
                    <span onclick="window.location.href='home-page.php'">Home</span>
                    <span onclick="window.location.href='services.php'">Services</span>
                    <span onclick="window.location.href='portfolio.php'">Portfolio</span>
                    <span onclick="window.location.href='careers.php'">Careers</span>
                    <span onclick="window.location.href='about.php'">About</span>
                    <span style="background: #3b82f6 !important; border: 1px solid #ffffff !important;" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Get Started</span>
                </div>
                
                <!-- Backup Navigation (Always Visible) -->
                <div style="display: none; position: absolute; top: 80px; left: 50%; transform: translateX(-50%); background: #333333; padding: 10px; border-radius: 8px; z-index: 999;" id="backup-nav">
                    <a href="home-page.php" style="color: #ffffff; padding: 8px 12px; margin: 0 5px; background: #555555; border-radius: 4px; text-decoration: none; font-size: 14px;">Home</a>
                    <a href="services.php" style="color: #ffffff; padding: 8px 12px; margin: 0 5px; background: #555555; border-radius: 4px; text-decoration: none; font-size: 14px;">Services</a>
                    <a href="portfolio.php" style="color: #ffffff; padding: 8px 12px; margin: 0 5px; background: #555555; border-radius: 4px; text-decoration: none; font-size: 14px;">Portfolio</a>
                    <a href="careers.php" style="color: #ffffff; padding: 8px 12px; margin: 0 5px; background: #555555; border-radius: 4px; text-decoration: none; font-size: 14px;">Careers</a>
                    <a href="about.php" style="color: #ffffff; padding: 8px 12px; margin: 0 5px; background: #555555; border-radius: 4px; text-decoration: none; font-size: 14px;">About</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div id="mobile-toggle" style="display: none !important; background: none !important; border: none !important; color: #ffffff !important; font-size: 24px !important; cursor: pointer !important; padding: 8px !important;" onclick="toggleMobileMenu()">☰</div>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" style="display: none !important; background: #111827 !important; padding: 16px !important; border-radius: 8px !important; margin-top: 16px !important;">
                <div style="color: #d1d5db !important; font-weight: 600 !important; display: block !important; padding: 12px !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; border-bottom: 1px solid #374151 !important; cursor: pointer !important;" onclick="window.location.href='home-page.php'">Home</div>
                <div style="color: #d1d5db !important; font-weight: 600 !important; display: block !important; padding: 12px !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; border-bottom: 1px solid #374151 !important; cursor: pointer !important;" onclick="window.location.href='services.php'">Services</div>
                <div style="color: #d1d5db !important; font-weight: 600 !important; display: block !important; padding: 12px !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; border-bottom: 1px solid #374151 !important; cursor: pointer !important;" onclick="window.location.href='portfolio.php'">Portfolio</div>
                <div style="color: #d1d5db !important; font-weight: 600 !important; display: block !important; padding: 12px !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; border-bottom: 1px solid #374151 !important; cursor: pointer !important;" onclick="window.location.href='careers.php'">Careers</div>
                <div style="color: #d1d5db !important; font-weight: 600 !important; display: block !important; padding: 12px !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; border-bottom: 1px solid #374151 !important; cursor: pointer !important;" onclick="window.location.href='about.php'">About</div>
                <div style="background: #3b82f6 !important; color: #ffffff !important; padding: 12px 24px !important; border-radius: 8px !important; font-weight: 600 !important; font-size: 18px !important; font-family: Arial, Helvetica, sans-serif !important; cursor: pointer !important; margin-top: 16px !important; text-align: center !important;" onclick="document.getElementById('contact').scrollIntoView({behavior: 'smooth'})">Get Started</a></div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%) !important; padding: 120px 0 80px !important; position: relative !important; overflow: hidden !important;">
        <!-- Background Effects -->
        <div style="position: absolute !important; top: 0 !important; left: 0 !important; right: 0 !important; bottom: 0 !important; opacity: 0.1 !important;">
            <div style="position: absolute !important; top: 20% !important; left: 10% !important; width: 300px !important; height: 300px !important; background: radial-gradient(circle, #3b82f6 0%, transparent 70%) !important; border-radius: 50% !important; animation: pulse 3s ease-in-out infinite !important; -webkit-animation: pulse 3s ease-in-out infinite !important;"></div>
            <div style="position: absolute !important; bottom: 20% !important; right: 10% !important; width: 400px !important; height: 400px !important; background: radial-gradient(circle, #8b5cf6 0%, transparent 70%) !important; border-radius: 50% !important; animation: pulse 3s ease-in-out infinite 1s !important; -webkit-animation: pulse 3s ease-in-out infinite 1s !important;"></div>
        </div>
        
        <div class="container text-center" style="position: relative !important; z-index: 10 !important;">
            <h1 style="font-size: 3.5rem !important; font-weight: 700 !important; margin-bottom: 24px !important; animation: slideInLeft 0.8s ease-out !important; -webkit-animation: slideInLeft 0.8s ease-out !important;">
                <span style="color: #ffffff !important;">Transform Your Business with </span>
                <span style="background: linear-gradient(to right, #60a5fa, #c084fc) !important; background-size: 200% 200% !important; -webkit-background-clip: text !important; background-clip: text !important; -webkit-text-fill-color: transparent !important; color: transparent !important; animation: gradient 3s ease infinite !important; -webkit-animation: gradient 3s ease infinite !important;">
                    Digital Solutions
                </span>
            </h1>
            
            <p style="font-size: 1.25rem !important; color: #d1d5db !important; max-width: 600px !important; margin: 0 auto 40px !important; animation: fadeInUp 0.8s ease-out 0.3s both !important; -webkit-animation: fadeInUp 0.8s ease-out 0.3s both !important;">
                We deliver comprehensive digital marketing, web development, and SEO services that drive real results for your business.
            </p>
            
            <div style="animation: fadeInUp 0.8s ease-out 0.6s both !important; -webkit-animation: fadeInUp 0.8s ease-out 0.6s both !important;">
                <a href="#contact" class="btn btn-primary" style="font-size: 1.1rem !important; padding: 16px 32px !important;">
                    Start Your Digital Journey
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" style="background: #000000 !important;">
        <div class="container">
            <div class="text-center" style="margin-bottom: 60px !important;">
                <h2 style="font-size: 2.5rem !important; font-weight: 700 !important; color: #ffffff !important; margin-bottom: 16px !important;">
                    Our Services
                </h2>
                <p style="font-size: 1.1rem !important; color: #d1d5db !important; max-width: 600px !important; margin: 0 auto !important;">
                    From strategy to execution, we deliver comprehensive digital marketing solutions that transform your business.
                </p>
            </div>
            
            <div class="grid grid-3" style="justify-items: center !important;">
                <!-- Digital Marketing -->
                <div style="background: rgba(17, 24, 39, 0.9) !important; border: 2px solid #374151 !important; border-radius: 12px !important; padding: 20px !important; width: 260px !important; height: 200px !important; max-width: 260px !important; max-height: 200px !important; box-sizing: border-box !important; overflow: hidden !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.02)'; this.style.webkitTransform='scale(1.02)'; this.style.borderColor='rgba(59, 130, 246, 0.5)'; this.style.boxShadow='0 0 15px rgba(59, 130, 246, 0.3)'; this.style.webkitBoxShadow='0 0 15px rgba(59, 130, 246, 0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(59, 130, 246, 0.2) !important; width: 40px !important; height: 40px !important; border-radius: 10px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <span style="color: #60a5fa !important; font-size: 20px !important;">📱</span>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, Helvetica, sans-serif !important;">Digital Marketing</h3>
                    <p style="color: #d1d5db !important; font-size: 12px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, Helvetica, sans-serif !important;">Strategic campaigns that drive engagement and conversions.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 11px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            PPC Management
                        </li>
                        <li style="color: #9ca3af !important; font-size: 11px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            Social Media Marketing
                        </li>
                    </ul>
                </div>

                <!-- SEO & Analytics -->
                <div style="background: rgba(17, 24, 39, 0.9) !important; border: 2px solid #374151 !important; border-radius: 12px !important; padding: 20px !important; width: 260px !important; height: 200px !important; max-width: 260px !important; max-height: 200px !important; box-sizing: border-box !important; overflow: hidden !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.02)'; this.style.webkitTransform='scale(1.02)'; this.style.borderColor='rgba(34, 197, 94, 0.5)'; this.style.boxShadow='0 0 15px rgba(34, 197, 94, 0.3)'; this.style.webkitBoxShadow='0 0 15px rgba(34, 197, 94, 0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(34, 197, 94, 0.2) !important; width: 40px !important; height: 40px !important; border-radius: 10px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <span style="color: #22c55e !important; font-size: 20px !important;">🔍</span>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, Helvetica, sans-serif !important;">SEO & Analytics</h3>
                    <p style="color: #d1d5db !important; font-size: 12px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, Helvetica, sans-serif !important;">Boost your search rankings and track performance.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 11px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            Keyword Research
                        </li>
                        <li style="color: #9ca3af !important; font-size: 11px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            Performance Tracking
                        </li>
                    </ul>
                </div>

                <!-- Web Development -->
                <div style="background: rgba(17, 24, 39, 0.9) !important; border: 2px solid #374151 !important; border-radius: 12px !important; padding: 20px !important; width: 260px !important; height: 200px !important; max-width: 260px !important; max-height: 200px !important; box-sizing: border-box !important; overflow: hidden !important; transition: all 0.3s ease !important; -webkit-transition: all 0.3s ease !important;" onmouseover="this.style.transform='scale(1.02)'; this.style.webkitTransform='scale(1.02)'; this.style.borderColor='rgba(168, 85, 247, 0.5)'; this.style.boxShadow='0 0 15px rgba(168, 85, 247, 0.3)'; this.style.webkitBoxShadow='0 0 15px rgba(168, 85, 247, 0.3)';" onmouseout="this.style.transform='scale(1)'; this.style.webkitTransform='scale(1)'; this.style.borderColor='#374151'; this.style.boxShadow='none'; this.style.webkitBoxShadow='none';">
                    <div style="background: rgba(168, 85, 247, 0.2) !important; width: 40px !important; height: 40px !important; border-radius: 10px !important; display: flex !important; align-items: center !important; justify-content: center !important; margin-bottom: 12px !important;">
                        <span style="color: #a855f7 !important; font-size: 20px !important;">💻</span>
                    </div>
                    <h3 style="color: #ffffff !important; font-size: 16px !important; font-weight: 600 !important; margin-bottom: 8px !important; font-family: Arial, Helvetica, sans-serif !important;">Web Development</h3>
                    <p style="color: #d1d5db !important; font-size: 12px !important; line-height: 1.4 !important; margin-bottom: 12px !important; font-family: Arial, Helvetica, sans-serif !important;">Custom websites built with modern technologies.</p>
                    <ul style="list-style: none !important; padding: 0 !important; margin: 0 !important;">
                        <li style="color: #9ca3af !important; font-size: 11px !important; margin-bottom: 4px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            Responsive Design
                        </li>
                        <li style="color: #9ca3af !important; font-size: 11px !important; display: flex !important; align-items: center !important; font-family: Arial, Helvetica, sans-serif !important;">
                            <span style="color: #22c55e !important; margin-right: 6px !important;">✓</span>
                            E-commerce Solutions
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%) !important;">
        <div class="container text-center">
            <h2 style="font-size: 2.5rem !important; font-weight: 700 !important; color: #ffffff !important; margin-bottom: 16px !important;">
                Ready to Get Started?
            </h2>
            <p style="font-size: 1.1rem !important; color: #d1d5db !important; max-width: 600px !important; margin: 0 auto 40px !important;">
                Contact us today to discuss your project and see how we can help transform your digital presence.
            </p>
            
            <div style="background: rgba(17, 24, 39, 0.8) !important; border: 1px solid #374151 !important; border-radius: 12px !important; padding: 40px !important; max-width: 500px !important; margin: 0 auto !important;">
                <form action="contact_process.php" method="POST" style="display: flex !important; flex-direction: column !important; gap: 20px !important;">
                    <input type="text" name="name" placeholder="Your Name" required style="background: rgba(31, 41, 55, 0.8) !important; border: 1px solid #374151 !important; border-radius: 8px !important; padding: 12px 16px !important; color: #ffffff !important; font-size: 16px !important; font-family: Arial, sans-serif !important;" onfocus="this.style.borderColor='#60a5fa'" onblur="this.style.borderColor='#374151'">
                    
                    <input type="email" name="email" placeholder="Your Email" required style="background: rgba(31, 41, 55, 0.8) !important; border: 1px solid #374151 !important; border-radius: 8px !important; padding: 12px 16px !important; color: #ffffff !important; font-size: 16px !important; font-family: Arial, sans-serif !important;" onfocus="this.style.borderColor='#60a5fa'" onblur="this.style.borderColor='#374151'">
                    
                    <select name="service" required style="background: rgba(31, 41, 55, 0.8) !important; border: 1px solid #374151 !important; border-radius: 8px !important; padding: 12px 16px !important; color: #ffffff !important; font-size: 16px !important; font-family: Arial, sans-serif !important;" onfocus="this.style.borderColor='#60a5fa'" onblur="this.style.borderColor='#374151'">
                        <option value="">Select Service</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="SEO & Analytics">SEO & Analytics</option>
                        <option value="Web Development">Web Development</option>
                        <option value="Consultation">Free Consultation</option>
                    </select>
                    
                    <textarea name="message" placeholder="Tell us about your project..." rows="4" required style="background: rgba(31, 41, 55, 0.8) !important; border: 1px solid #374151 !important; border-radius: 8px !important; padding: 12px 16px !important; color: #ffffff !important; font-size: 16px !important; font-family: Arial, sans-serif !important; resize: vertical !important;" onfocus="this.style.borderColor='#60a5fa'" onblur="this.style.borderColor='#374151'"></textarea>
                    
                    <button type="submit" class="btn btn-primary" style="font-size: 16px !important; font-weight: 600 !important;">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer style="background: #111827 !important; padding: 40px 0 !important; border-top: 1px solid #374151 !important;">
        <div class="container text-center">
            <div style="margin-bottom: 24px !important;">
                <h3 style="color: #ffffff !important; font-size: 24px !important; font-weight: 700 !important; margin-bottom: 16px !important;">ZlliQ Technology</h3>
                <p style="color: #9ca3af !important; max-width: 500px !important; margin: 0 auto !important;">
                    Connect Hive, Technopark Campus, Thiruvananthapuram, Kerala, India 695581
                </p>
            </div>
            
            <div style="border-top: 1px solid #374151 !important; padding-top: 24px !important;">
                <p style="color: #6b7280 !important; font-size: 14px !important;">
                    © 2024 ZlliQ Technology. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Debug logging
        console.log('Index.php loaded successfully');
        
        // Mobile menu toggle
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const isHidden = mobileMenu.style.display === 'none' || mobileMenu.style.display === '';
            mobileMenu.style.display = isHidden ? 'block' : 'none';
            console.log('Mobile menu toggled');
        }
        
        // Show desktop navigation on larger screens
        function updateNavigation() {
            const desktopNav = document.getElementById('desktop-nav');
            const mobileToggle = document.getElementById('mobile-toggle');
            
            console.log('Updating navigation for width:', window.innerWidth);
            
            if (window.innerWidth >= 768) {
                desktopNav.style.display = 'flex';
                desktopNav.style.visibility = 'visible';
                desktopNav.style.opacity = '1';
                mobileToggle.style.display = 'none';
                document.getElementById('mobile-menu').style.display = 'none';
                console.log('Desktop navigation shown');
            } else {
                desktopNav.style.display = 'none';
                mobileToggle.style.display = 'block';
                console.log('Mobile navigation shown');
            }
        }
        
        // Multiple methods to ensure navigation visibility
        function forceNavigationVisible() {
            const desktopNav = document.getElementById('desktop-nav');
            const backupNav = document.getElementById('backup-nav');
            
            if (desktopNav) {
                // Method 1: Direct style setting
                desktopNav.style.display = 'flex';
                desktopNav.style.visibility = 'visible';
                desktopNav.style.opacity = '1';
                
                // Method 2: Check if nav items are visible
                const navItems = desktopNav.querySelectorAll('span');
                let visibleCount = 0;
                navItems.forEach(item => {
                    const rect = item.getBoundingClientRect();
                    if (rect.width > 0 && rect.height > 0) visibleCount++;
                });
                
                console.log('Visible nav items:', visibleCount, 'of', navItems.length);
                
                // Method 3: Show backup navigation if main nav fails
                if (visibleCount < navItems.length) {
                    console.log('Main navigation not fully visible, showing backup');
                    backupNav.style.display = 'block';
                }
            }
        }
        
        // Force show navigation on load
        document.addEventListener('DOMContentLoaded', function() {
            console.log('DOM loaded, forcing navigation visibility');
            forceNavigationVisible();
            updateNavigation();
            
            // Double-check after 2 seconds
            setTimeout(forceNavigationVisible, 2000);
        });
        
        // Initialize navigation on load and resize
        window.addEventListener('load', function() {
            console.log('Window loaded');
            updateNavigation();
        });
        window.addEventListener('resize', updateNavigation);
        
        // Test function for debugging
        function testNavigation() {
            console.log('Testing navigation elements:');
            const nav = document.getElementById('desktop-nav');
            if (nav) {
                console.log('Desktop nav found, current display:', nav.style.display);
                nav.style.display = 'flex';
                nav.style.visibility = 'visible';
                nav.style.opacity = '1';
                console.log('Navigation forced visible');
            } else {
                console.log('Desktop nav not found');
            }
        }
        
        // Run test after 1 second
        setTimeout(testNavigation, 1000);
    </script>
</body>
</html>