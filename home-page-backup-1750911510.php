<?php
$page_title = "Futuristic AI Marketing Solutions | ZlliQ Technology";
$page_description = "Experience futuristic AI-powered marketing solutions that drive exceptional results. Join 7000+ successful businesses achieving remarkable growth through advanced automation.";
include 'header.php';
?>

<style>
/* FUTURISTIC HOME PAGE DESIGN - NO TEXT ANIMATIONS */
* { 
    box-sizing: border-box !important; 
    margin: 0;
    padding: 0;
}

/* Futuristic Card System */
.futuristic-card {
    background: linear-gradient(165deg, rgba(15, 23, 42, 0.97), rgba(30, 27, 75, 0.93));
    border: 3px solid transparent;
    border-radius: 40px;
    padding: 64px;
    position: relative;
    overflow: hidden;
    transition: all 0.7s cubic-bezier(0.23, 1, 0.32, 1);
}

.futuristic-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 40px;
    padding: 3px;
    background: linear-gradient(45deg, #3b82f6, #8b5cf6, #ec4899, #f59e0b);
    mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
    mask-composite: xor;
    -webkit-mask-composite: xor;
}

.futuristic-card::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
    transform: translate(-50%, -50%) scale(0);
    transition: transform 0.7s ease;
    border-radius: 50%;
}

.futuristic-card:hover::after {
    transform: translate(-50%, -50%) scale(1);
}

.futuristic-card:hover {
    transform: translateY(-16px) scale(1.03);
    box-shadow: 0 50px 150px rgba(59, 130, 246, 0.4);
}

/* Futuristic Layout System */
.futuristic-hero {
    display: grid;
    grid-template-columns: 1.3fr 0.7fr;
    gap: 120px;
    align-items: center;
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 40px;
    min-height: 100vh;
}

.futuristic-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
    gap: 48px;
    max-width: 1600px;
    margin: 0 auto;
    padding: 0 40px;
}

/* Futuristic Typography */
.futuristic-heading {
    font-size: 5rem;
    font-weight: 900;
    color: #ffffff;
    margin-bottom: 48px;
    line-height: 1.02;
    letter-spacing: -0.03em;
    text-shadow: 0 0 30px rgba(59, 130, 246, 0.5);
}

.futuristic-gradient-text {
    background: linear-gradient(45deg, #60a5fa 0%, #c084fc 25%, #ec4899 50%, #f59e0b 75%, #10b981 100%);
    background-size: 300% 300%;
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: futuristicGradient 8s ease infinite;
}

@keyframes futuristicGradient {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

.futuristic-subtext {
    font-size: 1.5rem;
    color: #cbd5e1;
    line-height: 1.8;
    margin-bottom: 64px;
    font-weight: 300;
    text-shadow: 0 0 20px rgba(203, 213, 225, 0.3);
}

/* Futuristic Button System */
.futuristic-btn {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: #ffffff;
    font-size: 22px;
    font-weight: 800;
    padding: 28px 56px;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 20px;
    transition: all 0.5s cubic-bezier(0.23, 1, 0.32, 1);
    box-shadow: 0 15px 50px rgba(59, 130, 246, 0.5);
    position: relative;
    overflow: hidden;
}

.futuristic-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.8s;
}

.futuristic-btn:hover::before {
    left: 100%;
}

.futuristic-btn:hover {
    transform: translateY(-8px) scale(1.06);
    box-shadow: 0 25px 80px rgba(59, 130, 246, 0.7);
}

.futuristic-btn-outline {
    background: transparent;
    border: 4px solid #3b82f6;
    color: #60a5fa;
    box-shadow: 0 15px 50px rgba(59, 130, 246, 0.3);
}

.futuristic-btn-outline:hover {
    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
    color: #ffffff;
    border-color: transparent;
}

/* Futuristic Stats Display */
.futuristic-stats {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 80px;
}

.futuristic-stat {
    background: linear-gradient(145deg, rgba(59, 130, 246, 0.2), rgba(147, 51, 234, 0.2));
    border: 3px solid rgba(59, 130, 246, 0.4);
    border-radius: 30px;
    padding: 48px;
    text-align: center;
    transition: all 0.6s ease;
    position: relative;
    overflow: hidden;
}

.futuristic-stat::before {
    content: '';
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(180deg, transparent, rgba(59, 130, 246, 0.2), transparent);
    transition: top 0.8s ease;
}

.futuristic-stat:hover::before {
    top: 100%;
}

.futuristic-stat:hover {
    background: linear-gradient(145deg, rgba(59, 130, 246, 0.3), rgba(147, 51, 234, 0.3));
    border-color: rgba(147, 51, 234, 0.7);
    transform: translateY(-12px) scale(1.08);
    box-shadow: 0 30px 90px rgba(59, 130, 246, 0.4);
}

.futuristic-stat-number {
    font-size: 4.5rem;
    font-weight: 900;
    background: linear-gradient(45deg, #60a5fa, #c084fc, #ec4899);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 16px;
    position: relative;
    z-index: 2;
    text-shadow: 0 0 40px rgba(59, 130, 246, 0.6);
}

.futuristic-stat-label {
    color: #e2e8f0;
    font-weight: 700;
    font-size: 1.2rem;
    position: relative;
    z-index: 2;
    text-shadow: 0 0 20px rgba(226, 232, 240, 0.4);
}

/* Futuristic Feature Cards */
.futuristic-feature {
    background: linear-gradient(155deg, rgba(59, 130, 246, 0.1), rgba(147, 51, 234, 0.1));
    border: 3px solid rgba(59, 130, 246, 0.25);
    border-radius: 35px;
    padding: 56px;
    transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
    height: 100%;
    position: relative;
    overflow: hidden;
}

.futuristic-feature::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, transparent 48%, rgba(59, 130, 246, 0.05) 50%, transparent 52%);
    background-size: 40px 40px;
    opacity: 0;
    transition: opacity 0.6s ease;
}

.futuristic-feature:hover::before {
    opacity: 1;
}

.futuristic-feature:hover {
    background: linear-gradient(155deg, rgba(59, 130, 246, 0.18), rgba(147, 51, 234, 0.18));
    border-color: rgba(147, 51, 234, 0.6);
    transform: translateY(-14px) scale(1.04);
    box-shadow: 0 35px 100px rgba(59, 130, 246, 0.3);
}

.futuristic-feature-icon {
    width: 100px;
    height: 100px;
    border-radius: 28px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 48px;
    box-shadow: 0 15px 60px rgba(59, 130, 246, 0.5);
    position: relative;
    z-index: 2;
}

.futuristic-feature-title {
    font-size: 2rem;
    font-weight: 900;
    color: #ffffff;
    margin-bottom: 24px;
    position: relative;
    z-index: 2;
    text-shadow: 0 0 25px rgba(255, 255, 255, 0.3);
}

.futuristic-feature-text {
    font-size: 18px;
    color: #94a3b8;
    line-height: 1.9;
    margin-bottom: 40px;
    position: relative;
    z-index: 2;
}

.futuristic-feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
    position: relative;
    z-index: 2;
}

.futuristic-feature-list li {
    color: #94a3b8;
    margin-bottom: 20px;
    display: flex;
    align-items: center;
    font-size: 17px;
}

.futuristic-feature-list li::before {
    content: '◆';
    color: #22c55e;
    margin-right: 20px;
    font-size: 16px;
    text-shadow: 0 0 15px rgba(34, 197, 94, 0.6);
}

/* Futuristic Visual Element */
.futuristic-visual {
    width: 100%;
    height: 550px;
    background: linear-gradient(155deg, rgba(59, 130, 246, 0.25), rgba(147, 51, 234, 0.25));
    border: 4px solid rgba(59, 130, 246, 0.5);
    border-radius: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    overflow: hidden;
}

.futuristic-visual::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.4) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(147, 51, 234, 0.4) 0%, transparent 50%),
        radial-gradient(circle at 50% 50%, rgba(236, 72, 153, 0.3) 0%, transparent 50%);
    animation: futuristicPulse 6s ease-in-out infinite;
}

@keyframes futuristicPulse {
    0%, 100% { opacity: 0.6; }
    50% { opacity: 1; }
}

.futuristic-visual-content {
    text-align: center;
    color: #60a5fa;
    position: relative;
    z-index: 2;
}

/* Futuristic Sections */
.futuristic-section {
    padding: 140px 0;
}

.futuristic-section-alt {
    background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
}

/* Futuristic Responsive */
@media (max-width: 1200px) {
    .futuristic-hero {
        grid-template-columns: 1fr;
        gap: 100px;
        text-align: center;
    }
    
    .futuristic-heading {
        font-size: 4rem;
    }
}

@media (max-width: 768px) {
    .futuristic-grid {
        grid-template-columns: 1fr;
        gap: 40px;
        padding: 0 24px;
    }
    
    .futuristic-card {
        padding: 48px;
    }
    
    .futuristic-feature {
        padding: 40px;
    }
    
    .futuristic-heading {
        font-size: 3.2rem;
    }
    
    .futuristic-stats {
        grid-template-columns: 1fr;
        gap: 32px;
    }
    
    .futuristic-btn {
        font-size: 20px;
        padding: 24px 48px;
    }
}

/* Futuristic Backgrounds */
.futuristic-bg-1 {
    background: linear-gradient(155deg, #0f172a 0%, #1e1b4b 100%);
}

.futuristic-bg-2 {
    background: linear-gradient(155deg, #1e1b4b 0%, #0f172a 100%);
}

/* Futuristic Animations - NO TEXT ANIMATIONS */
.futuristic-fade {
    opacity: 0;
    animation: futuristicFade 1.5s ease-out forwards;
}

.futuristic-slide {
    opacity: 0;
    transform: translateY(80px);
    animation: futuristicSlide 1.5s ease-out forwards;
}

@keyframes futuristicFade {
    to { opacity: 1; }
}

@keyframes futuristicSlide {
    to { 
        opacity: 1; 
        transform: translateY(0); 
    }
}
</style>

<!-- FUTURISTIC HERO SECTION -->
<section class="futuristic-section futuristic-bg-1" style="min-height: 100vh; display: flex; align-items: center;">
    <div class="futuristic-hero">
        
        <!-- Hero Content -->
        <div class="futuristic-fade">
            <div class="futuristic-card">
                
                <!-- Status Badge -->
                <div style="display: inline-block; padding: 20px 40px; background: linear-gradient(135deg, rgba(59, 130, 246, 0.3), rgba(147, 51, 234, 0.3)); border: 3px solid rgba(59, 130, 246, 0.6); border-radius: 80px; margin-bottom: 56px;">
                    <span style="color: #60a5fa; font-size: 18px; font-weight: 800;">🚀 Futuristic AI Marketing Platform</span>
                </div>
                
                <!-- Main Headline -->
                <h1 class="futuristic-heading">
                    Futuristic AI Marketing
                    <span class="futuristic-gradient-text">Innovation</span>
                </h1>
                
                <!-- Value Proposition -->
                <p class="futuristic-subtext">
                    Transform your business with futuristic AI technology that delivers extraordinary results. Join 7000+ visionary companies experiencing unprecedented growth through next-generation marketing automation.
                </p>
                
                <!-- Action Buttons -->
                <div style="display: flex; gap: 40px; flex-wrap: wrap; margin-bottom: 80px;">
                    <button onclick="window.location.href='services.php'" class="futuristic-btn">
                        <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Launch Future
                    </button>
                    
                    <button onclick="window.location.href='portfolio.php'" class="futuristic-btn futuristic-btn-outline">
                        <svg width="28" height="28" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                        Explore Vision
                    </button>
                </div>
                
                <!-- Statistics -->
                <div class="futuristic-stats">
                    <div class="futuristic-stat">
                        <div class="futuristic-stat-number">7000+</div>
                        <p class="futuristic-stat-label">Future Businesses</p>
                    </div>
                    
                    <div class="futuristic-stat">
                        <div class="futuristic-stat-number">1500%</div>
                        <p class="futuristic-stat-label">Growth Acceleration</p>
                    </div>
                    
                    <div class="futuristic-stat">
                        <div class="futuristic-stat-number">24/7</div>
                        <p class="futuristic-stat-label">AI Intelligence</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Hero Visual -->
        <div class="futuristic-slide">
            <div class="futuristic-visual">
                <div class="futuristic-visual-content">
                    <svg width="180" height="180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <p style="margin-top: 40px; font-size: 26px; font-weight: 800;">Futuristic Intelligence</p>
                </div>
            </div>
        </div>
        
    </div>
</section>

<!-- FUTURISTIC FEATURES SECTION -->
<section class="futuristic-section futuristic-bg-2">
    <div style="max-width: 1600px; margin: 0 auto; padding: 0 40px;">
        
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 120px;" class="futuristic-fade">
            <h2 class="futuristic-heading" style="font-size: 4rem;">
                Futuristic <span class="futuristic-gradient-text">Capabilities</span>
            </h2>
            <p class="futuristic-subtext" style="max-width: 800px; margin: 0 auto;">
                Discover our futuristic suite of AI-powered marketing solutions designed to accelerate unprecedented business transformation and market leadership.
            </p>
        </div>
        
        <!-- Features Grid -->
        <div class="futuristic-grid">
            
            <!-- Feature 1 -->
            <div class="futuristic-feature futuristic-slide">
                <div class="futuristic-feature-icon" style="background: linear-gradient(135deg, #3b82f6, #8b5cf6);">
                    <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="futuristic-feature-title">Hyper Intelligence</h3>
                <p class="futuristic-feature-text">Futuristic AI algorithms that automate your entire marketing universe with hyper-intelligent precision, delivering consistent results that scale infinitely across all dimensions.</p>
                <ul class="futuristic-feature-list">
                    <li>Hyper Campaign Orchestration</li>
                    <li>Real-time Performance Evolution</li>
                    <li>Predictive Intelligence Engine</li>
                    <li>Autonomous Decision Matrix</li>
                    <li>Multi-dimensional Scaling</li>
                </ul>
            </div>
            
            <!-- Feature 2 -->
            <div class="futuristic-feature futuristic-slide">
                <div class="futuristic-feature-icon" style="background: linear-gradient(135deg, #8b5cf6, #ec4899);">
                    <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path>
                    </svg>
                </div>
                <h3 class="futuristic-feature-title">Quantum Content Creation</h3>
                <p class="futuristic-feature-text">AI-powered content generation that creates high-converting materials while maintaining perfect brand consistency across unlimited channels and future platforms.</p>
                <ul class="futuristic-feature-list">
                    <li>Quantum Content Generation</li>
                    <li>Brand Voice Perfection</li>
                    <li>Performance-driven Evolution</li>
                    <li>Cross-dimensional Adaptation</li>
                    <li>Future-ready Optimization</li>
                </ul>
            </div>
            
            <!-- Feature 3 -->
            <div class="futuristic-feature futuristic-slide">
                <div class="futuristic-feature-icon" style="background: linear-gradient(135deg, #ec4899, #f59e0b);">
                    <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v4a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="futuristic-feature-title">Cosmic Analytics</h3>
                <p class="futuristic-feature-text">Comprehensive analytics platform providing deep insights into customer behavior, market trends, and campaign performance with cosmic-level intelligence.</p>
                <ul class="futuristic-feature-list">
                    <li>360° Cosmic Monitoring</li>
                    <li>Competitive Intelligence Matrix</li>
                    <li>Custom ROI Universes</li>
                    <li>Predictive Market Evolution</li>
                    <li>Future Trend Analysis</li>
                </ul>
            </div>
            
            <!-- Feature 4 -->
            <div class="futuristic-feature futuristic-slide">
                <div class="futuristic-feature-icon" style="background: linear-gradient(135deg, #f59e0b, #10b981);">
                    <svg width="48" height="48" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="futuristic-feature-title">Quantum Security</h3>
                <p class="futuristic-feature-text">Enterprise-grade security architecture ensuring your data and campaigns are protected with quantum-level security protocols and futuristic certifications.</p>
                <ul class="futuristic-feature-list">
                    <li>Quantum Data Encryption</li>
                    <li>GDPR & Future Compliance</li>
                    <li>24/7 Quantum Monitoring</li>
                    <li>Zero-Trust Universe</li>
                    <li>Cosmic Protection Shield</li>
                </ul>
            </div>
            
        </div>
        
    </div>
</section>

<!-- FUTURISTIC CTA SECTION -->
<section class="futuristic-section futuristic-bg-1">
    <div style="max-width: 1600px; margin: 0 auto; padding: 0 40px;">
        <div class="futuristic-hero" style="min-height: auto;">
            
            <!-- CTA Content -->
            <div class="futuristic-fade">
                <div class="futuristic-card">
                    <h2 class="futuristic-heading" style="font-size: 3.5rem;">
                        Ready to Enter the Future?
                    </h2>
                    <p class="futuristic-subtext">
                        Join thousands of visionary businesses already using our futuristic AI-powered marketing platform to achieve unprecedented growth and market transformation.
                    </p>
                    <div style="display: flex; gap: 40px; flex-wrap: wrap;">
                        <button onclick="window.location.href='services.php'" class="futuristic-btn" style="font-size: 28px; padding: 32px 64px;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                            Enter Future
                        </button>
                        
                        <button onclick="window.location.href='about.php'" class="futuristic-btn futuristic-btn-outline" style="font-size: 28px; padding: 32px 64px;">
                            <svg width="32" height="32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Discover Vision
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- CTA Visual -->
            <div class="futuristic-slide">
                <div class="futuristic-visual">
                    <div class="futuristic-visual-content">
                        <svg width="180" height="180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <p style="margin-top: 40px; font-size: 26px; font-weight: 800;">Futuristic Growth</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script>
// Futuristic counter animation
function futuristicCounterAnimation() {
    const counters = document.querySelectorAll('.futuristic-stat-number');
    
    counters.forEach(counter => {
        const target = counter.textContent;
        const numericValue = parseInt(target.replace(/\D/g, ''));
        const suffix = target.replace(/\d/g, '');
        let current = 0;
        const increment = numericValue / 150;
        
        const timer = setInterval(() => {
            current += increment;
            if (current >= numericValue) {
                current = numericValue;
                clearInterval(timer);
            }
            counter.textContent = Math.floor(current) + suffix;
        }, 18);
    });
}

// Futuristic scroll animations
function initializeFuturisticAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -120px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animationPlayState = 'running';
            }
        });
    }, observerOptions);
    
    document.querySelectorAll('.futuristic-fade, .futuristic-slide').forEach(el => {
        el.style.animationPlayState = 'paused';
        observer.observe(el);
    });
}

// Initialize futuristic features
document.addEventListener('DOMContentLoaded', function() {
    console.log('Futuristic home page loaded');
    
    // Start counter animations
    setTimeout(futuristicCounterAnimation, 2000);
    
    // Initialize scroll animations
    initializeFuturisticAnimations();
    
    // Staggered animation delays
    const elements = document.querySelectorAll('.futuristic-slide');
    elements.forEach((element, index) => {
        element.style.animationDelay = `${index * 0.4}s`;
    });
});
</script>

<?php include 'footer.php'; ?>