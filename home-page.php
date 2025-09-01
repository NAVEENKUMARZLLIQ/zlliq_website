<?php
$page_title = "Zlliq | Official Website of Zlliq Technology";
$page_description = "Zlliq Technology (Zlliq Technologies) – Official website for email marketing & managed services.";
include 'header.php';
?>

<style>
/* EMAIL MARKETING HOME PAGE DESIGN */
* { 
    box-sizing: border-box !important; 
    margin: 0;
    padding: 0;
}

body {
    background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: #ffffff;
    overflow-x: hidden;
}

/* Main Container */
.email-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 32px;
}

/* Hero Section */
.email-hero {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 80px;
    align-items: center;
    min-height: 100vh;
    padding: 60px 0 100px 0;
}

.email-hero-content h1 {
    font-size: 4.5rem;
    font-weight: 900;
    line-height: 1.1;
    margin-bottom: 32px;
    background: linear-gradient(135deg, #60a5fa, #c084fc, #f472b6);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.email-hero-content .preheader {
    font-size: 1.3rem;
    color: #cbd5e1;
    line-height: 1.6;
    margin-bottom: 48px;
    font-weight: 400;
}

.email-cta-button {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: #ffffff;
    font-size: 18px;
    font-weight: 700;
    padding: 20px 40px;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 10px 30px rgba(59, 130, 246, 0.4);
}

.email-cta-button:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 40px rgba(59, 130, 246, 0.6);
}

/* Unique Hero Image */
.email-hero-image {
    width: 100%;
    height: 400px;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.2), rgba(147, 51, 234, 0.2));
    border: 2px solid rgba(59, 130, 246, 0.3);
    border-radius: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

.email-visual-content {
    text-align: center;
    color: #60a5fa;
    position: relative;
    z-index: 2;
}

.email-visual-icon {
    width: 120px;
    height: 120px;
    margin: 0 auto 24px;
    background: linear-gradient(135deg, #3b82f6, #8b5cf6);
    border-radius: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 20px 60px rgba(59, 130, 246, 0.5);
    animation: floatMove 4s ease-in-out infinite;
    position: relative;
}

@keyframes floatMove {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    25% { transform: translateY(-10px) translateX(5px); }
    50% { transform: translateY(-5px) translateX(-5px); }
    75% { transform: translateY(-15px) translateX(3px); }
}

.email-hero-image::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 30% 30%, rgba(59, 130, 246, 0.3) 0%, transparent 50%),
        radial-gradient(circle at 70% 70%, rgba(147, 51, 234, 0.3) 0%, transparent 50%);
}

/* Platform Section */
.email-platform-section {
    padding: 120px 0;
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
}

.email-platform-title {
    text-align: center;
    font-size: 3.5rem;
    font-weight: 900;
    margin-bottom: 80px;
    background: linear-gradient(135deg, #60a5fa, #c084fc);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.email-services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    gap: 32px;
    margin-bottom: 60px;
}

.email-service-card {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
    border: 2px solid rgba(59, 130, 246, 0.3);
    border-radius: 20px;
    padding: 40px;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
}

.email-service-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.1), transparent);
    transition: left 0.6s;
}

.email-service-card:hover::before {
    left: 100%;
}

.email-service-card:hover {
    border-color: rgba(59, 130, 246, 0.6);
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(59, 130, 246, 0.3);
}

.email-service-icon {
    width: 70px;
    height: 70px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    box-shadow: 0 8px 24px rgba(59, 130, 246, 0.4);
}

.email-service-card h3 {
    font-size: 1.5rem;
    font-weight: 800;
    margin-bottom: 16px;
    color: #ffffff;
}

.email-service-card p {
    color: #94a3b8;
    line-height: 1.6;
    font-size: 16px;
}

/* Privacy Section */
.email-privacy-section {
    padding: 80px 0;
    text-align: center;
}

.email-privacy-card {
    background: linear-gradient(135deg, rgba(34, 197, 94, 0.1), rgba(59, 130, 246, 0.1));
    border: 2px solid rgba(34, 197, 94, 0.4);
    border-radius: 24px;
    padding: 60px;
    max-width: 800px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
}

.email-privacy-icons {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin: 0 auto 32px;
}

.email-privacy-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #22c55e, #16a34a);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 50px rgba(34, 197, 94, 0.4);
    animation: pulse 2s ease-in-out infinite;
}

.email-star-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #f59e0b, #d97706);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 50px rgba(245, 158, 11, 0.4);
    animation: pulse 2s ease-in-out infinite 0.5s;
}

.email-review-icon {
    width: 70px;
    height: 70px;
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    border-radius: 18px;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 15px 50px rgba(59, 130, 246, 0.4);
    animation: pulse 2s ease-in-out infinite 1s;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); box-shadow: 0 15px 50px rgba(34, 197, 94, 0.4); }
    50% { transform: scale(1.05); box-shadow: 0 20px 60px rgba(34, 197, 94, 0.6); }
}

.email-privacy-card h2 {
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 24px;
    color: #ffffff;
}

.email-privacy-card p {
    font-size: 1.2rem;
    color: #94a3b8;
    line-height: 1.7;
}

/* Integrations Section */
.email-integrations-section {
    padding: 120px 0;
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
}

.email-integrations-title {
    text-align: center;
    font-size: 3rem;
    font-weight: 900;
    margin-bottom: 60px;
    color: #ffffff;
}

.email-integrations-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-bottom: 60px;
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;
}

.email-integration-item {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
    border: none;
    border-radius: 16px;
    padding: 24px;
    text-align: center;
    transition: all 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.email-integration-item:hover {
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.15), rgba(147, 51, 234, 0.15));
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(59, 130, 246, 0.2);
}

.email-integration-logo {
    width: 90px;
    height: 90px;
    object-fit: contain;
    margin: 0 auto 16px;
    border-radius: 0;
    background: none;
    padding: 0;
}

.email-integration-item h4 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #ffffff;
}

/* Company Partnerships */
.email-partnerships-section {
    padding: 80px 0;
    overflow: hidden;
}

.email-partnerships-title {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 900;
    margin-bottom: 60px;
    color: #ffffff;
}

.email-partners-container {
    position: relative;
    overflow: hidden;
    height: 120px;
    mask: linear-gradient(90deg, transparent 0%, white 10%, white 90%, transparent 100%);
    -webkit-mask: linear-gradient(90deg, transparent 0%, white 10%, white 90%, transparent 100%);
}

.email-partners-scroll {
    display: flex;
    gap: 100px;
    animation: scroll-right-to-left 20s linear infinite;
    align-items: center;
    height: 100%;
    white-space: nowrap;
}

.email-partners-scroll:hover {
    animation-play-state: paused;
}

@keyframes scroll-right-to-left {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

.email-partner-item {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 80px;
    min-width: 160px;
}

.email-partner-logo {
    max-width: 140px;
    max-height: 70px;
    object-fit: contain;
    filter: brightness(0.8) contrast(1.2);
    transition: all 0.3s ease;
}

.email-partner-logo:hover {
    filter: brightness(1) contrast(1);
    transform: scale(1.1);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .email-hero {
        grid-template-columns: 1fr;
        gap: 60px;
        text-align: center;
    }
    
    .email-hero-content h1 {
        font-size: 3.5rem;
    }
    
    .email-services-grid {
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    }
}

@media (max-width: 768px) {
    .email-container {
        padding: 0 24px;
    }
    
    .email-hero-content h1 {
        font-size: 2.8rem;
    }
    
    .email-platform-title {
        font-size: 2.5rem;
    }
    
    .email-services-grid {
        grid-template-columns: 1fr;
        gap: 24px;
    }
    
    .email-service-card {
        padding: 32px;
    }
    
    .email-integrations-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 32px;
    }
    
    .email-partners-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 24px;
    }
}
</style>

<!-- HERO SECTION -->
<section style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 0;">
    <div class="email-container">
        <div class="email-hero">
            
            <!-- Left Side Content -->
            <div class="email-hero-content">
                <h1>Grow with Smarter<br>Email Marketing</h1>
                <p class="preheader">All-in-one AI-enabled platform to manage your customer relationships via Email, SMS, WhatsApp, Chat, and more.</p>
                <button onclick="window.location.href='services.php'" class="email-cta-button">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                    Get Started Today
                </button>
            </div>
            
            <!-- Right Side Unique Image -->
            <div class="email-hero-image">
                <div class="email-visual-content">
                    <div class="email-visual-icon">
                        <svg width="60" height="60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p style="font-size: 22px; font-weight: 700; color: #60a5fa;">Smart Email Marketing</p>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- PLATFORM SECTION -->
<section class="email-platform-section">
    <div class="email-container">
        <h2 class="email-platform-title">One platform, five ways to grow</h2>
        
        <div class="email-services-grid">
            
            <!-- Campaign Management -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3>Campaign Management</h3>
                <p>Create, manage, and optimize multi-channel marketing campaigns with advanced automation and real-time analytics for maximum ROI.</p>
            </div>
            
            <!-- Email Marketing -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #8b5cf6, #7c3aed);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3>Email Marketing</h3>
                <p>Advanced email automation, personalization, and segmentation tools to deliver the right message at the right time to drive conversions.</p>
            </div>
            
            <!-- Web Development -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #ec4899, #db2777);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3>Web Development</h3>
                <p>Custom web development solutions with modern technologies, responsive design, and seamless integration with your marketing stack.</p>
            </div>
            
            <!-- UI/UX Design -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3>UI/UX Design</h3>
                <p>User-centered design solutions that create engaging experiences, improve conversion rates, and enhance customer satisfaction.</p>
            </div>
            
            <!-- SEO & Analytics -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #10b981, #059669);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3>SEO & Analytics</h3>
                <p>Comprehensive SEO optimization and advanced analytics to improve search rankings, track performance, and drive organic growth.</p>
            </div>
            
            <!-- Performance Marketing -->
            <div class="email-service-card">
                <div class="email-service-icon" style="background: linear-gradient(135deg, #ef4444, #dc2626);">
                    <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <h3>Performance Marketing</h3>
                <p>Data-driven performance marketing strategies that optimize ad spend, maximize ROI, and scale your business growth effectively.</p>
            </div>
            
        </div>
        
    </div>
</section>

<!-- PRIVACY SECTION -->
<section class="email-privacy-section">
    <div class="email-container">
        <div class="email-privacy-card">
            <div class="email-privacy-icons">
                <div class="email-privacy-icon">
                    <svg width="35" height="35" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <div class="email-star-icon">
                    <svg width="35" height="35" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="email-review-icon">
                    <svg width="35" height="35" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
            </div>
            <h2>Privacy is the priority</h2>
            <p>ZlliQ Campaigns secures your personal data with enterprise-grade encryption and is fully compliant with GDPR, CCPA, and international privacy laws. Our platform ensures complete data protection while helping you perform ethical, permission-based marketing that builds trust with your customers. Every interaction is monitored and secured, giving you peace of mind while you focus on growing your business through responsible marketing practices.</p>
        </div>
    </div>
</section>

<!-- INTEGRATIONS SECTION -->
<section class="email-integrations-section">
    <div class="email-container">
        <h2 class="email-integrations-title">Bring in more data, drive more growth with our integrations</h2>
        
        <div class="email-integrations-grid">
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/egMxvwdsj41K5eESLhWBO/cf823adbd311e33919f97ffc5bf3181d/Canva.jpg?w=196&fm=avif&q=60" alt="Canva" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>Canva</h4>
            </div>
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/67trWJLKtKcvrqlKYSlskE/696ad499e0cc60aa7392521a6a7cfd90/Instagram__1_.jpg?w=196&fm=avif&q=60" alt="Instagram" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>Instagram</h4>
            </div>
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/44dW9Z4hibyDYi0qggfets/b01884985e996ffb5dc133556b92bb7a/Shopify__1_.jpg?w=196&q=70" alt="Shopify" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>Shopify</h4>
            </div>
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/2uruOq31Y1FKdghFWn5zMg/c931da8bac7dd9608cbfbbd49342d705/Logo_Woo_color.png?w=196&q=70" alt="WooCommerce" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>WooCommerce</h4>
            </div>
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/2klSrOoLZKmLuGKZjKT9o3/ca400f60c2f3673f3ab9b52f4d03360d/Squarespace.jpg?w=196&q=70" alt="Squarespace Commerce" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>Squarespace Commerce</h4>
            </div>
            
            <div class="email-integration-item">
                <img src="https://mailchimp.com/ctf/images/yzco4xsimv0y/1rFHUX2VBmsu6YCkYS0CsM/5ea7100c6fb456d07e1b9aa348fee19f/logo_black.png?w=300&q=70" alt="Zapier" class="email-integration-logo" onerror="this.style.display='none'">
                <h4>Zapier</h4>
            </div>
            
        </div>
        
    </div>
</section>

<!-- COMPANY PARTNERSHIPS -->
<section class="email-partnerships-section">
    <div class="email-container">
        <h2 class="email-partnerships-title">Trusted by Industry Leaders</h2>
        
        <div class="email-partners-container">
            <div class="email-partners-scroll">
                
                <div class="email-partner-item">
                    <img src="https://hoppscotch.io/icon.png" alt="Hoppscotch" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.genrobotics.com/logoGenRobo.svg" alt="Genrobotics" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://neysa.ai/wp-content/uploads/2024/10/1a1a1a1-2.png" alt="Neysa" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.haptik.ai/hs-fs/hubfs/haptik-logo-2.webp?width=394&height=180&name=haptik-logo-2.webp" alt="Haptik" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.keralajewellers.in/image/catalog/logo.png" alt="Kerala Jewellers" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://kollamsupremeonline.com/img/kollam-supreme-logo-1612762547.jpg" alt="Kollam Supreme" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <!-- Second set for seamless loop -->
                <div class="email-partner-item">
                    <img src="https://hoppscotch.io/icon.png" alt="Hoppscotch" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.genrobotics.com/logoGenRobo.svg" alt="Genrobotics" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://neysa.ai/wp-content/uploads/2024/10/1a1a1a1-2.png" alt="Neysa" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.haptik.ai/hs-fs/hubfs/haptik-logo-2.webp?width=394&height=180&name=haptik-logo-2.webp" alt="Haptik" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://www.keralajewellers.in/image/catalog/logo.png" alt="Kerala Jewellers" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
                <div class="email-partner-item">
                    <img src="https://kollamsupremeonline.com/img/kollam-supreme-logo-1612762547.jpg" alt="Kollam Supreme" class="email-partner-logo" onerror="this.style.display='none'">
                </div>
                
            </div>
        </div>
        
    </div>
</section>

<?php include 'footer.php'; ?>