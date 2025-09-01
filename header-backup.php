<!-- Professional IT Startup Header -->
<nav style="background: #000000 !important; position: fixed !important; top: 0 !important; left: 0 !important; right: 0 !important; z-index: 1000 !important; border-bottom: 1px solid rgba(59, 130, 246, 0.3) !important; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5) !important;" data-version="<?php echo time() . rand(1000, 9999); ?>">
    <div style="max-width: 1400px !important; margin: 0 auto !important; padding: 0 24px !important;">
        <div style="display: flex !important; align-items: center !important; justify-content: space-between !important; height: 72px !important;">
            
            <!-- Logo Section -->
            <div style="display: flex !important; align-items: center !important; gap: 20px !important;">
                <a href="home-page.php" style="display: flex !important; align-items: center !important; text-decoration: none !important;">
                    <img src="favicons.png" alt="ZlliQ Technology" style="width: 64px !important; height: 64px !important; border-radius: 16px !important; box-shadow: 0 8px 20px rgba(147, 51, 234, 0.5) !important;">
                </a>
                <a href="home-page.php" style="color: #ffffff !important; font-size: 32px !important; font-weight: 900 !important; text-decoration: none !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; letter-spacing: -0.02em !important;">
                    ZlliQ<span style="color: #9333ea !important;">.tech</span>
                </a>
            </div>
            
            <!-- Desktop Navigation -->
            <div id="desktop-nav" style="display: flex !important; align-items: center !important; gap: 8px !important; visibility: visible !important; opacity: 1 !important;">
                <a href="home-page.php" style="color: #e2e8f0 !important; font-size: 19px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 14px 22px !important; border-radius: 12px !important; transition: all 0.2s ease !important; position: relative !important; display: inline-block !important;" onmouseover="this.style.color='#ffffff'; this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.color='#e2e8f0'; this.style.background='transparent'">Home</a>
                
                <a href="services.php" style="color: #e2e8f0 !important; font-size: 19px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 14px 22px !important; border-radius: 12px !important; transition: all 0.2s ease !important; position: relative !important; display: inline-block !important;" onmouseover="this.style.color='#ffffff'; this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.color='#e2e8f0'; this.style.background='transparent'">Services</a>
                
                <a href="portfolio.php" style="color: #e2e8f0 !important; font-size: 19px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 14px 22px !important; border-radius: 12px !important; transition: all 0.2s ease !important; position: relative !important; display: inline-block !important;" onmouseover="this.style.color='#ffffff'; this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.color='#e2e8f0'; this.style.background='transparent'">Portfolio</a>
                
                <a href="careers.php" style="color: #e2e8f0 !important; font-size: 19px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 14px 22px !important; border-radius: 12px !important; transition: all 0.2s ease !important; position: relative !important; display: inline-block !important;" onmouseover="this.style.color='#ffffff'; this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.color='#e2e8f0'; this.style.background='transparent'">Careers</a>
                
                <a href="about.php" style="color: #e2e8f0 !important; font-size: 19px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 14px 22px !important; border-radius: 12px !important; transition: all 0.2s ease !important; position: relative !important; display: inline-block !important;" onmouseover="this.style.color='#ffffff'; this.style.background='rgba(59, 130, 246, 0.1)'" onmouseout="this.style.color='#e2e8f0'; this.style.background='transparent'">About</a>
                
                <div style="width: 1px !important; height: 24px !important; background: rgba(226, 232, 240, 0.2) !important; margin: 0 8px !important;"></div>
                
                <button onclick="document.getElementById('value-showcase').scrollIntoView({behavior: 'smooth'})" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8) !important; color: #ffffff !important; font-size: 18px !important; font-weight: 800 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; padding: 14px 28px !important; border: none !important; border-radius: 12px !important; cursor: pointer !important; transition: all 0.2s ease !important; box-shadow: 0 6px 16px rgba(59, 130, 246, 0.4) !important; display: inline-flex !important; align-items: center !important; gap: 10px !important;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 24px rgba(59, 130, 246, 0.5)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 16px rgba(59, 130, 246, 0.4)'">
                    Get Started
                    <span style="font-size: 16px !important;">→</span>
                </button>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="mobile-toggle" onclick="toggleMobileMenu()" style="display: none !important; background: rgba(59, 130, 246, 0.1) !important; border: 1px solid rgba(59, 130, 246, 0.2) !important; color: #e2e8f0 !important; width: 40px !important; height: 40px !important; border-radius: 8px !important; cursor: pointer !important; align-items: center !important; justify-content: center !important; transition: all 0.2s ease !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.2)'" onmouseout="this.style.background='rgba(59, 130, 246, 0.1)'">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" style="display: none !important; background: #000000 !important; border: 1px solid rgba(59, 130, 246, 0.3) !important; border-radius: 12px !important; margin: 12px 0 20px 0 !important; padding: 16px !important; box-shadow: 0 8px 32px rgba(0, 0, 0, 0.8) !important;">
            <div style="display: flex !important; flex-direction: column !important; gap: 4px !important;">
                <a href="home-page.php" style="color: #e2e8f0 !important; font-size: 20px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 16px 20px !important; border-radius: 12px !important; transition: all 0.2s ease !important; display: block !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.color='#e2e8f0'">Home</a>
                
                <a href="services.php" style="color: #e2e8f0 !important; font-size: 20px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 16px 20px !important; border-radius: 12px !important; transition: all 0.2s ease !important; display: block !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.color='#e2e8f0'">Services</a>
                
                <a href="portfolio.php" style="color: #e2e8f0 !important; font-size: 20px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 16px 20px !important; border-radius: 12px !important; transition: all 0.2s ease !important; display: block !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.color='#e2e8f0'">Portfolio</a>
                
                <a href="careers.php" style="color: #e2e8f0 !important; font-size: 20px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 16px 20px !important; border-radius: 12px !important; transition: all 0.2s ease !important; display: block !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.color='#e2e8f0'">Careers</a>
                
                <a href="about.php" style="color: #e2e8f0 !important; font-size: 20px !important; font-weight: 700 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; text-decoration: none !important; padding: 16px 20px !important; border-radius: 12px !important; transition: all 0.2s ease !important; display: block !important;" onmouseover="this.style.background='rgba(59, 130, 246, 0.1)'; this.style.color='#ffffff'" onmouseout="this.style.background='transparent'; this.style.color='#e2e8f0'">About</a>
                
                <div style="height: 1px !important; background: rgba(226, 232, 240, 0.1) !important; margin: 8px 0 !important;"></div>
                
                <button onclick="document.getElementById('value-showcase').scrollIntoView({behavior: 'smooth'}); toggleMobileMenu()" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8) !important; color: #ffffff !important; font-size: 20px !important; font-weight: 800 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Inter', sans-serif !important; padding: 16px 20px !important; border: none !important; border-radius: 12px !important; cursor: pointer !important; transition: all 0.2s ease !important; width: 100% !important; text-align: center !important; margin-top: 16px !important;" onmouseover="this.style.transform='translateY(-3px)'" onmouseout="this.style.transform='translateY(0)'">
                    Get Started →
                </button>
            </div>
        </div>
    </div>
</nav>

<script>
// Professional navigation with responsive behavior
function initializeNavigation() {
    const nav = document.getElementById('desktop-nav');
    const mobileToggle = document.getElementById('mobile-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    function updateNavigation() {
        if (window.innerWidth >= 768) {
            // Desktop view
            if (nav) {
                nav.style.display = 'flex';
                nav.style.visibility = 'visible';
                nav.style.opacity = '1';
            }
            if (mobileToggle) {
                mobileToggle.style.display = 'none';
            }
            if (mobileMenu) {
                mobileMenu.style.display = 'none';
            }
        } else {
            // Mobile view
            if (nav) {
                nav.style.display = 'none';
            }
            if (mobileToggle) {
                mobileToggle.style.display = 'flex';
            }
        }
    }
    
    // Initial setup
    updateNavigation();
    
    // Update on resize
    window.addEventListener('resize', updateNavigation);
}

// Mobile menu toggle with smooth animation
function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    if (menu) {
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
            menu.style.opacity = '0';
            menu.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                menu.style.transition = 'all 0.2s ease';
                menu.style.opacity = '1';
                menu.style.transform = 'translateY(0)';
            }, 10);
        } else {
            menu.style.transition = 'all 0.2s ease';
            menu.style.opacity = '0';
            menu.style.transform = 'translateY(-10px)';
            setTimeout(() => {
                menu.style.display = 'none';
            }, 200);
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', initializeNavigation);
window.addEventListener('load', initializeNavigation);

// Close mobile menu when clicking outside
document.addEventListener('click', function(event) {
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileToggle = document.getElementById('mobile-toggle');
    
    if (mobileMenu && mobileToggle) {
        if (!mobileMenu.contains(event.target) && !mobileToggle.contains(event.target)) {
            if (mobileMenu.style.display === 'block') {
                toggleMobileMenu();
            }
        }
    }
});

// Smooth scroll behavior for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>