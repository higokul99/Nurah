<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>MYOP - India's First Perfume Bar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }

        :root {
            --black: #000000;
            --white: #ffffff;
            --gold: #d4a574;
            --dark-gold: #b8915f;
            --text: #333333;
            --text-light: #666666;
            --bg-light: #f8f8f8;
            --border: #e0e0e0;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            color: var(--text);
            line-height: 1.5;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Mobile First - Promo Bar */
        .promo-bar {
            background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 100%);
            color: var(--white);
            padding: 12px 15px;
            text-align: center;
            font-size: 12px;
            font-weight: 600;
            position: sticky;
            top: 0;
            z-index: 1001;
            animation: slideDown 0.5s ease;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        .promo-bar span {
            color: var(--gold);
            font-weight: 700;
        }

        /* Mobile Header */
        .mobile-header {
            background: var(--white);
            position: sticky;
            top: 40px;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            padding: 12px 15px;
        }

        .header-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-btn {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            padding: 5px;
        }

        .logo {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 900;
            color: var(--black);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .header-icons {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .icon-btn {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
            position: relative;
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -8px;
            background: var(--gold);
            color: var(--white);
            width: 16px;
            height: 16px;
            border-radius: 50%;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
        }

        /* Mobile Menu */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: -100%;
            width: 85%;
            max-width: 320px;
            height: 100vh;
            background: var(--white);
            z-index: 2000;
            transition: left 0.3s ease;
            overflow-y: auto;
            box-shadow: 2px 0 20px rgba(0,0,0,0.1);
        }

        .mobile-menu.active {
            left: 0;
        }

        .menu-header {
            padding: 20px 15px;
            background: var(--black);
            color: var(--white);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-close {
            background: none;
            border: none;
            color: var(--white);
            font-size: 28px;
            cursor: pointer;
        }

        .menu-list {
            list-style: none;
            padding: 20px 0;
        }

        .menu-item {
            border-bottom: 1px solid var(--border);
        }

        .menu-link {
            display: block;
            padding: 15px 20px;
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(0,0,0,0.6);
            z-index: 1999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }

        .menu-overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        /* Hero Slider - Mobile Optimized */
        .hero-slider {
            position: relative;
            height: 280px;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slider-dots {
            position: absolute;
            bottom: 15px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255,255,255,0.5);
            border: 1.5px solid var(--white);
            cursor: pointer;
            transition: all 0.3s;
        }

        .dot.active {
            background: var(--white);
            width: 24px;
            border-radius: 4px;
        }

        /* Section Headers - Mobile */
        .section {
            padding: 40px 15px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .section-title em {
            font-style: italic;
            color: var(--gold);
        }

        .section-subtitle {
            font-size: 14px;
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Product Cards - Mobile Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 20px;
        }

        .product-card {
            background: var(--white);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            position: relative;
        }

        .product-image-wrapper {
            position: relative;
            width: 100%;
            aspect-ratio: 1;
            overflow: hidden;
            background: var(--bg-light);
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-badge {
            position: absolute;
            top: 8px;
            left: 8px;
            background: var(--gold);
            color: var(--white);
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 9px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.3px;
        }

        .product-info {
            padding: 12px;
        }

        .product-name {
            font-family: 'Playfair Display', serif;
            font-size: 15px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 6px;
            line-height: 1.3;
        }

        .product-price {
            font-size: 14px;
            font-weight: 700;
            color: var(--text);
        }

        .product-price span {
            font-size: 11px;
            font-weight: 500;
            color: var(--text-light);
        }

        /* View All Button */
        .view-all-btn {
            display: block;
            width: 100%;
            max-width: 300px;
            margin: 20px auto 0;
            padding: 14px;
            background: var(--black);
            color: var(--white);
            border: none;
            border-radius: 25px;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }

        /* Store Section - Mobile */
        .store-section {
            background: linear-gradient(135deg, var(--black) 0%, #1a1a1a 100%);
            color: var(--white);
            padding: 50px 20px;
            text-align: center;
        }

        .store-count {
            font-family: 'Playfair Display', serif;
            font-size: 52px;
            font-weight: 700;
            color: var(--gold);
            line-height: 1;
            margin-bottom: 10px;
        }

        .store-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .store-subtitle {
            font-size: 14px;
            margin-bottom: 25px;
            opacity: 0.9;
        }

        .store-btn {
            display: inline-block;
            background: var(--gold);
            color: var(--white);
            padding: 14px 35px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: 2px solid var(--gold);
        }

        .store-description {
            margin-top: 30px;
            font-size: 13px;
            line-height: 1.7;
            opacity: 0.85;
        }

        /* Category Cards - Mobile */
        .category-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .category-card {
            position: relative;
            height: 200px;
            border-radius: 16px;
            overflow: hidden;
        }

        .category-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .category-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, transparent 60%);
            display: flex;
            align-items: flex-end;
            padding: 20px;
        }

        .category-name {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 5px;
        }

        .category-desc {
            font-size: 13px;
            color: rgba(255,255,255,0.9);
        }

        /* Cosmopolitan Section - Mobile */
        .cosmopolitan-section {
            background: linear-gradient(135deg, #1a1a1a 0%, var(--black) 100%);
            padding: 50px 15px;
        }

        .cosmo-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .cosmo-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 10px;
        }

        .cosmo-title em {
            color: var(--gold);
            font-style: italic;
        }

        .cosmo-subtitle {
            font-size: 14px;
            color: rgba(255,255,255,0.85);
            line-height: 1.6;
        }

        /* Video Section - Mobile */
        .video-section {
            position: relative;
            height: 250px;
            overflow: hidden;
        }

        .video-section video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .video-text {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
            text-align: center;
            line-height: 1.3;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.5);
        }

        /* Gender Section - Mobile */
        .gender-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 15px;
        }

        .gender-card {
            position: relative;
            height: 220px;
            border-radius: 16px;
            overflow: hidden;
        }

        .gender-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gender-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, transparent 60%);
            display: flex;
            align-items: flex-end;
            padding: 25px;
        }

        .gender-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--white);
        }

        /* Testimonials - Mobile Slider */
        .testimonials {
            background: var(--bg-light);
            padding: 50px 0;
            overflow: hidden;
        }

        .testimonial-slider {
            display: flex;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            gap: 15px;
            padding: 0 15px 20px;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .testimonial-slider::-webkit-scrollbar {
            display: none;
        }

        .testimonial-card {
            min-width: 85%;
            background: var(--white);
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            scroll-snap-align: start;
        }

        .testimonial-text {
            font-size: 14px;
            line-height: 1.7;
            color: var(--text);
            margin-bottom: 15px;
        }

        .testimonial-text em {
            font-weight: 700;
            font-style: italic;
            color: var(--black);
        }

        .testimonial-author {
            font-weight: 700;
            color: var(--gold);
            font-size: 13px;
            margin-bottom: 3px;
        }

        .testimonial-location {
            font-size: 12px;
            color: var(--text-light);
        }

        /* Press Logos - Mobile */
        .press-section {
            padding: 40px 15px;
            text-align: center;
        }

        .press-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .press-title em {
            color: var(--gold);
            font-style: italic;
        }

        .press-slider {
            display: flex;
            overflow-x: auto;
            gap: 30px;
            padding: 10px 0;
            scrollbar-width: none;
        }

        .press-slider::-webkit-scrollbar {
            display: none;
        }

        .press-logo {
            height: 30px;
            min-width: 80px;
            opacity: 0.5;
            filter: grayscale(100%);
        }

        /* About Section - Mobile */
        .about-section {
            padding: 50px 15px;
        }

        .about-image {
            margin-bottom: 25px;
            border-radius: 16px;
            overflow: hidden;
        }

        .about-image img {
            width: 100%;
            display: block;
        }

        .about-title {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .about-title em {
            color: var(--gold);
            font-style: italic;
        }

        .about-text {
            font-size: 14px;
            line-height: 1.8;
            color: var(--text);
            margin-bottom: 15px;
        }

        .about-btn {
            display: inline-block;
            background: var(--black);
            color: var(--white);
            padding: 13px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 10px;
        }

        /* Blog Cards - Mobile */
        .blog-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .blog-card {
            background: var(--white);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .blog-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .blog-content {
            padding: 20px;
        }

        .blog-date {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 8px;
        }

        .blog-title {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--black);
            margin-bottom: 12px;
            line-height: 1.4;
        }

        .blog-link {
            color: var(--gold);
            text-decoration: none;
            font-weight: 700;
            font-size: 13px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        /* Features - Mobile */
        .features {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 40px 15px;
            background: var(--bg-light);
        }

        .feature {
            text-align: center;
        }

        .feature-icon {
            font-size: 36px;
            margin-bottom: 12px;
        }

        .feature-title {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .feature-text {
            font-size: 13px;
            color: var(--text-light);
            line-height: 1.6;
        }

        /* Footer - Mobile */
        footer {
            background: var(--black);
            color: var(--white);
            padding: 40px 20px 20px;
        }

        .footer-logo {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 900;
            margin-bottom: 15px;
        }

        .footer-description {
            font-size: 13px;
            line-height: 1.7;
            color: rgba(255,255,255,0.75);
            margin-bottom: 20px;
        }

        .footer-social {
            display: flex;
            gap: 12px;
            margin-bottom: 30px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 18px;
        }

        .footer-section {
            margin-bottom: 30px;
        }

        .footer-heading {
            font-family: 'Playfair Display', serif;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links a {
            display: block;
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 10px;
        }

        .newsletter-form {
            display: flex;
            margin-top: 15px;
            border-radius: 25px;
            overflow: hidden;
            background: rgba(255,255,255,0.1);
        }

        .newsletter-input {
            flex: 1;
            padding: 12px 15px;
            background: transparent;
            border: none;
            color: var(--white);
            font-size: 13px;
            outline: none;
        }

        .newsletter-input::placeholder {
            color: rgba(255,255,255,0.5);
        }

        .newsletter-btn {
            padding: 12px 20px;
            background: var(--gold);
            border: none;
            color: var(--white);
            font-weight: 700;
            font-size: 13px;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.1);
            font-size: 12px;
            color: rgba(255,255,255,0.6);
        }

        /* Popup - Mobile */
        .popup-newsletter {
            position: fixed;
            bottom: -100%;
            left: 0;
            right: 0;
            background: var(--white);
            padding: 30px 20px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -5px 30px rgba(0,0,0,0.3);
            z-index: 2001;
            transition: bottom 0.4s ease;
        }

        .popup-newsletter.active {
            bottom: 0;
        }

        .popup-close {
            position: absolute;
            top: 15px;
            right: 15px;
            background: none;
            border: none;
            font-size: 28px;
            color: var(--text-light);
            cursor: pointer;
        }

        .popup-tag {
            font-size: 12px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .popup-title {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .popup-title em {
            color: var(--gold);
            font-style: italic;
        }

        .popup-subtitle {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .popup-code {
            text-align: center;
            padding: 12px;
            background: var(--bg-light);
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .popup-code-text {
            font-size: 12px;
            color: var(--text-light);
            margin-bottom: 5px;
        }

        .popup-code-value {
            font-size: 20px;
            font-weight: 700;
            color: var(--gold);
            letter-spacing: 2px;
        }

        /* Quick Action Button - Mobile */
        .quick-action {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        .action-btn {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--gold);
            color: var(--white);
            border: none;
            font-size: 24px;
            box-shadow: 0 4px 20px rgba(212, 165, 116, 0.4);
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            animation: fadeIn 0.6s ease forwards;
        }

        /* Tablet Adjustments */
        @media (min-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .section-title {
                font-size: 36px;
            }

            .hero-slider {
                height: 400px;
            }

            .category-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .gender-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .testimonial-card {
                min-width: 45%;
            }
        }

        /* Desktop Adjustments */
        @media (min-width: 1024px) {
            .mobile-header {
                display: none;
            }

            .product-grid {
                grid-template-columns: repeat(4, 1fr);
            }

            .category-grid,
            .gender-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .hero-slider {
                height: 600px;
            }
        }
    </style>
</head>
<body>
    <!-- Promo Bar -->
    <div class="promo-bar">
        🎄 Get <span>25% OFF</span> on orders ₹1500+ · Code: <span>MERRY25</span>
    </div>

    <!-- Mobile Header -->
    <div class="mobile-header">
        <div class="header-top">
            <button class="menu-btn" onclick="toggleMenu()">☰</button>
            <a href="/" class="logo">MYOP</a>
            <div class="header-icons">
                <button class="icon-btn">🔍</button>
                <button class="icon-btn">
                    🛒
                    <span class="cart-count">0</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="menu-overlay" id="menuOverlay" onclick="toggleMenu()"></div>
    <div class="mobile-menu" id="mobileMenu">
        <div class="menu-header">
            <span class="logo">MYOP</span>
            <button class="menu-close" onclick="toggleMenu()">×</button>
        </div>
        <ul class="menu-list">
            <li class="menu-item"><a href="/" class="menu-link">Home</a></li>
            <li class="menu-item"><a href="#signature" class="menu-link">Signature Perfume</a></li>
            <li class="menu-item"><a href="#personalized" class="menu-link">Personalized</a></li>
            <li class="menu-item"><a href="#cosmopolitan" class="menu-link">Cosmopolitan</a></li>
            <li class="menu-item"><a href="#accessories" class="menu-link">Accessories</a></li>
            <li class="menu-item"><a href="#about" class="menu-link">About Us</a></li>
            <li class="menu-item"><a href="#stores" class="menu-link">Our Stores</a></li>
            <li class="menu-item"><a href="#faq" class="menu-link">FAQ</a></li>
        </ul>
    </div>

    <!-- Hero Slider -->
    <div class="hero-slider">
        <div class="slide active">
            <img src="https://myop.in/cdn/shop/files/Christmas_banner_website_copy_2.webp?v=1765369190&width=5760" alt="Christmas Sale">
        </div>
        <div class="slide">
            <img src="https://myop.in/cdn/shop/files/banner_elante_chandigarh_copy.webp?v=1764662226&width=5760" alt="New Store">
        </div>
        <div class="slide">
            <img src="https://myop.in/cdn/shop/files/banner_desktop.webp?v=1763701093&width=5760" alt="Featured">
        </div>
        <div class="slide">
            <img src="https://myop.in/cdn/shop/files/marshamallow_desktop.webp?v=1753949875&width=1420" alt="Marshmallow">
        </div>
        <div class="slide">
            <img src="https://myop.in/cdn/shop/files/b2g1_6e47992a-e85f-4019-89d5-179ac74e931d.webp?v=1740730153&width=5760" alt="Buy 2 Get 1">
        </div>
        <div class="slider-dots">
            <div class="dot active" data-slide="0"></div>
            <div class="dot" data-slide="1"></div>
            <div class="dot" data-slide="2"></div>
            <div class="dot" data-slide="3"></div>
            <div class="dot" data-slide="4"></div>
        </div>
    </div>

    <!-- Bestsellers -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Discover <em>Our Bestsellers</em></h2>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <span class="product-badge">New</span>
                    <img src="https://myop.in/cdn/shop/files/Sandal_Veer_Product_Thumbnail.webp?v=1764918274&width=1080" alt="Sandal Veer" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Sandal Veer</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <span class="product-badge">New</span>
                    <img src="https://myop.in/cdn/shop/files/marshamallow_fluff_thumbnail.webp?v=1753800557&width=1080" alt="Marshmallow Fluff" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Marshmallow Fluff</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/purple_mystique_157c687d-d1f0-4b6a-bce9-aa8db40162b8.webp?v=1752146267&width=1080" alt="Purple Mystique" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Purple Mystique</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/bangalore_bloom.webp?v=1752146312&width=1080" alt="Bangalore Bloom" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Bangalore Bloom</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/fruit_punch_e6f7349a-384a-4764-ac3b-354b8aec8894.webp?v=1752146412&width=1080" alt="Fruit Punch" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Fruit Punch</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/one_of_a_kind_9c41c1b7-c0fb-459a-b874-26f064cee7d6.webp?v=1752146251&width=1080" alt="One of a Kind" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">One of a Kind</h3>
                    <p class="product-price"><span>From</span> ₹1,129</p>
                </div>
            </div>
        </div>
        <a href="/products" class="view-all-btn">View All Products</a>
    </section>

    <!-- Store Section -->
    <div class="store-section" id="stores">
        <div class="store-count">60</div>
        <h2 class="store-title">Stores Across India</h2>
        <p class="store-subtitle">Find a store near you</p>
        <a href="/stores" class="store-btn">Locate Stores</a>
        <p class="store-description">
            Make Your Own Perfume (MYOP) is India's pioneering perfume bar offering top-notch, value for money fragrances with exceptional expertise in the art & science of perfumery.
        </p>
    </div>

    <!-- Our Fragrances -->
    <section class="section" id="signature">
        <div class="section-header">
            <h2 class="section-title">Our <em>Fragrances</em></h2>
        </div>
        <div class="category-grid">
            <div class="category-card">
                <img src="https://myop.in/cdn/shop/files/fresh_1.webp?v=1714048533&width=1195" alt="Fresh">
                <div class="category-overlay">
                    <div>
                        <h3 class="category-name">FRESH</h3>
                        <p class="category-desc">Energize. Vitalize. Awaken.</p>
                    </div>
                </div>
            </div>

            <div class="category-card">
                <img src="https://myop.in/cdn/shop/files/woody__oriental_1.webp?v=1714048563&width=1195" alt="Oriental/Woody">
                <div class="category-overlay">
                    <div>
                        <h3 class="category-name">ORIENTAL/WOODY</h3>
                        <p class="category-desc">Exotic. Sensual. Subtle.</p>
                    </div>
                </div>
            </div>

            <div class="category-card">
                <img src="https://myop.in/cdn/shop/files/floral_1.webp?v=1714048608&width=1195" alt="Floral">
                <div class="category-overlay">
                    <div>
                        <h3 class="category-name">FLORAL</h3>
                        <p class="category-desc">Fruity. Bloom. Candylicious.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cosmopolitan -->
    <div class="cosmopolitan-section" id="cosmopolitan">
        <div class="cosmo-header">
            <h2 class="cosmo-title"><em>Introducing Cosmopolitan</em></h2>
            <p class="cosmo-subtitle">Embark On a Sensory Voyage with the All-New Cosmopolitan Collection.</p>
        </div>
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/oud_de_beirut_e46c1f48-205a-4534-bdb7-4a2b35e8ba0a.webp?v=1752146209&width=1080" alt="Oud De Beirut" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Oud De Beirut</h3>
                    <p class="product-price"><span>From</span> ₹3,499</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/california.webp?v=1752146216&width=1080" alt="California Sunshine" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">California Sunshine</h3>
                    <p class="product-price"><span>From</span> ₹3,499</p>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image-wrapper">
                    <img src="https://myop.in/cdn/shop/files/MOROCCAN_ROSE.webp?v=1752146213&width=1080" alt="Moroccan Rose" class="product-image">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Moroccan Rose</h3>
                    <p class="product-price"><span>From</span> ₹3,499</p>
                </div>
            </div>
        </div>
        <a href="/cosmopolitan" class="view-all-btn" style="background: var(--gold);">Shop Collection</a>
    </div>

    <!-- Video Section -->
    <div class="video-section">
        <video autoplay loop muted playsinline>
            <source src="https://myop.in/cdn/shop/videos/c/vp/d3c4018982b7463b856b22c551804e7d/d3c4018982b7463b856b22c551804e7d.HD-1080p-3.3Mbps-48643562.mp4?v=0" type="video/mp4">
        </video>
        <div class="video-overlay">
            <h2 class="video-text">A gift that lasts a lifetime</h2>
        </div>
    </div>

    <!-- Shop By Gender -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">Shop By <em>Gender</em></h2>
        </div>
        <div class="gender-grid">
            <div class="gender-card">
                <img src="https://myop.in/cdn/shop/files/For_Him.webp?v=1715237737&width=1165" alt="For Him">
                <div class="gender-overlay">
                    <h3 class="gender-title">FOR HIM</h3>
                </div>
            </div>

            <div class="gender-card">
                <img src="https://myop.in/cdn/shop/files/For_Her.webp?v=1714541130&width=1165" alt="For Her">
                <div class="gender-overlay">
                    <h3 class="gender-title">FOR HER</h3>
                </div>
            </div>

            <div class="gender-card">
                <img src="https://myop.in/cdn/shop/files/Unisex_copy.webp?v=1718107909&width=3837" alt="Unisex">
                <div class="gender-overlay">
                    <h3 class="gender-title">UNISEX</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <div class="testimonials">
        <div class="section-header">
            <h2 class="section-title">What Our <em>Customers Say</em></h2>
        </div>
        <div class="testimonial-slider">
            <div class="testimonial-card">
                <p class="testimonial-text">Their perfumes are really good as well as their service. Hats off to the team, they are very knowledgeable and friendly. <em>It was a great experience!</em></p>
                <p class="testimonial-author">— Dilsha Amina</p>
                <p class="testimonial-location">MYOP Store | Hilite Mall Calicut</p>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">Educated me with their <em>vast varieties of perfumes</em> and how they make them. Altogether, good perfume and great purchase.</p>
                <p class="testimonial-author">— Shama Ahmed</p>
                <p class="testimonial-location">MYOP Store | Fiza by Nexus Mangalore</p>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">The MYOP perfume really has a good fragrance and long lasting. <em>Trust me, perfume lasts long properly for 5-6 hrs.</em></p>
                <p class="testimonial-author">— Swapnil Parab</p>
                <p class="testimonial-location">MYOP Store | Viviana Mall Thane</p>
            </div>

            <div class="testimonial-card">
                <p class="testimonial-text">Got party flavor. <em>Nice smell for a good price.</em> will try their leather also.</p>
                <p class="testimonial-author">— Marshal Jose</p>
                <p class="testimonial-location">MYOP Store | Lulu Mall Kochi</p>
            </div>
        </div>
    </div>

    <!-- Press -->
    <div class="press-section">
        <h2 class="press-title">As <em>seen</em> on</h2>
        <div class="press-slider">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Elle_Magazine.svg/1200px-Elle_Magazine.svg.png" alt="Elle" class="press-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4f/Times_of_India_logo.svg/1200px-Times_of_India_logo.svg.png" alt="TOI" class="press-logo">
            <img src="https://cdn.worldvectorlogo.com/logos/vogue-logo.svg" alt="Vogue" class="press-logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Elle_Magazine.svg/1200px-Elle_Magazine.svg.png" alt="Magazine" class="press-logo">
        </div>
    </div>

    <!-- About -->
    <div class="about-section" id="about">
        <div class="about-image">
            <img src="https://myop.in/cdn/shop/files/Storekurla.jpg?v=1715596487&width=2500" alt="MYOP Store">
        </div>
        <div>
            <h2 class="about-title"><em>Why We Do,</em> What We Do</h2>
            <p class="about-text">Make Your Own Perfume, MYOP is India's first perfume bar known for <strong>high-quality, long-lasting</strong> fragrances with unparalleled expertise in the art and science of perfumery.</p>
            <p class="about-text">MYOP perfumes, reformulated with <strong>50% fragrance oil concentration</strong> last longer in tropical weather conditions.</p>
            <a href="/about" class="about-btn">Learn More</a>
        </div>
    </div>

    <!-- Blog -->
    <section class="section">
        <div class="section-header">
            <h2 class="section-title">From the <em>Journal</em></h2>
        </div>
        <div class="blog-grid">
            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?w=800&q=80" alt="Blog" class="blog-image">
                <div class="blog-content">
                    <p class="blog-date">Dec 03, 2025</p>
                    <h3 class="blog-title">Green Apple Used in Perfumes</h3>
                    <a href="/blog/green-apple" class="blog-link">Read more →</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=800&q=80" alt="Blog" class="blog-image">
                <div class="blog-content">
                    <p class="blog-date">Nov 26, 2025</p>
                    <h3 class="blog-title">Sandalwood - The Instant Wood Fragrance</h3>
                    <a href="/blog/sandalwood" class="blog-link">Read more →</a>
                </div>
            </div>

            <div class="blog-card">
                <img src="https://images.unsplash.com/photo-1587556930832-5e67d85c8f05?w=800&q=80" alt="Blog" class="blog-image">
                <div class="blog-content">
                    <p class="blog-date">Nov 22, 2025</p>
                    <h3 class="blog-title">October Newsletter</h3>
                    <a href="/blog/newsletter" class="blog-link">Read more →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features -->
    <div class="features">
        <div class="feature">
            <div class="feature-icon">🚚</div>
            <h3 class="feature-title">Free Shipping</h3>
            <p class="feature-text">Free shipping on orders above ₹399 across India</p>
        </div>

        <div class="feature">
            <div class="feature-icon">↩️</div>
            <h3 class="feature-title">Easy Returns</h3>
            <p class="feature-text">Simple return process with the perfumes</p>
        </div>

        <div class="feature">
            <div class="feature-icon">🔒</div>
            <h3 class="feature-title">Secure Payment</h3>
            <p class="feature-text">Your payment information is processed securely</p>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-logo">MYOP</div>
        <p class="footer-description">India's first perfume bar offering high-quality, long-lasting fragrances with exceptional expertise.</p>
        <div class="footer-social">
            <a href="#" class="social-btn">📘</a>
            <a href="#" class="social-btn">📷</a>
            <a href="#" class="social-btn">▶️</a>
            <a href="#" class="social-btn">📌</a>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Quick Links</h3>
            <ul class="footer-links">
                <li><a href="/about">About Us</a></li>
                <li><a href="/stores">Store Locator</a></li>
                <li><a href="/faq">FAQ</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Contact</h3>
            <ul class="footer-links">
                <li><a href="tel:+917306900600">+91 730 690 0600</a></li>
                <li><a href="mailto:support@myop.in">support@myop.in</a></li>
            </ul>
        </div>

        <div class="footer-section">
            <h3 class="footer-heading">Newsletter</h3>
            <p class="footer-description">Stay updated with offers & new launches</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email" class="newsletter-input">
                <button type="submit" class="newsletter-btn">→</button>
            </form>
        </div>

        <div class="footer-bottom">
            <p>© 2025 Make Your Own Perfume. All rights reserved.</p>
        </div>
    </footer>

    <!-- Popup Newsletter -->
    <div class="menu-overlay" id="popupOverlay"></div>
    <div class="popup-newsletter" id="popup">
        <button class="popup-close" onclick="closePopup()">×</button>
        <p class="popup-tag">First Time?</p>
        <h2 class="popup-title">JOIN THE <em>#SCENTSQUAD</em></h2>
        <p class="popup-subtitle">AND GET 20% OFF!</p>
        <div class="popup-code">
            <p class="popup-code-text">USE CODE:</p>
            <p class="popup-code-value">FIRSTSCENT20</p>
        </div>
        <form class="newsletter-form" style="background: var(--bg-light); border-radius: 25px;">
            <input type="email" placeholder="Enter your email" class="newsletter-input" style="color: var(--text);">
            <button type="submit" class="newsletter-btn">JOIN</button>
        </form>
    </div>

    <!-- Quick Action Button -->
    <div class="quick-action">
        <button class="action-btn" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">↑</button>
    </div>

    <script>
        // Mobile Menu Toggle
        function toggleMenu() {
            const menu = document.getElementById('mobileMenu');
            const overlay = document.getElementById('menuOverlay');
            menu.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        // Hero Slider
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            slides.forEach(s => s.classList.remove('active'));
            dots.forEach(d => d.classList.remove('active'));
            slides[index].classList.add('active');
            dots[index].classList.add('active');
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 4000);

        dots.forEach((dot, i) => {
            dot.addEventListener('click', () => {
                currentSlide = i;
                showSlide(i);
            });
        });

        // Popup
        setTimeout(() => {
            document.getElementById('popup').classList.add('active');
            document.getElementById('popupOverlay').classList.add('active');
        }, 5000);

        function closePopup() {
            document.getElementById('popup').classList.remove('active');
            document.getElementById('popupOverlay').classList.remove('active');
        }

        document.getElementById('popupOverlay').addEventListener('click', closePopup);

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    toggleMenu();
                }
            });
        });

        // Lazy Loading Animation
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.section, .product-card, .category-card').forEach(el => {
            observer.observe(el);
        });

        // Prevent body scroll when menu is open
        const mobileMenu = document.getElementById('mobileMenu');
        const menuObserver = new MutationObserver(() => {
            if (mobileMenu.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        menuObserver.observe(mobileMenu, { attributes: true, attributeFilter: ['class'] });
    </script>
</body>
</html>