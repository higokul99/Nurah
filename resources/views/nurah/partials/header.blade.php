<!-- Promo Bar -->
<div class="promo-bar">
    Free Shipping on all orders above <span>₹399</span>
</div>

<!-- Mobile Header -->
<div class="mobile-header">
    <div class="header-top">
        <button class="menu-btn" onclick="toggleMenu()"><i class="fas fa-bars"></i></button>
        <a href="{{ route('home') }}" class="logo">Nurah Perfumes</a>
        <div class="header-icons">
            <button class="icon-btn" onclick="openSearch()"><i class="fas fa-search"></i></button>
            <button class="icon-btn">
                <i class="fas fa-shopping-cart"></i>
                <span class="cart-count">0</span>
            </button>
        </div>
    </div>
    <div class="header-search-inline" id="inlineSearch">
        <form action="{{ route('collection') }}" method="GET" class="inline-search-form">
            <button type="submit" class="inline-search-icon"><i class="fas fa-search"></i></button>
            <input type="text" name="q" placeholder="Search..." class="inline-search-input" id="inlineSearchInput">
            <button type="button" class="inline-search-close" onclick="closeSearch()"><i class="fas fa-times"></i></button>
        </form>
    </div>
</div>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="menu-header">
        <span>MENU</span>
        <button class="menu-close" onclick="toggleMenu()"><i class="fas fa-times"></i></button>
    </div>
    <ul class="menu-list">
        <li class="menu-item"><a href="{{ route('home') }}" class="menu-link">Home</a></li>
        <li class="menu-item"><a href="{{ route('collection') }}" class="menu-link">Shop All</a></li>
        <!-- <li class="menu-item"><a href="#" class="menu-link">Best Sellers</a></li> -->
        <!-- <li class="menu-item"><a href="#" class="menu-link">New Arrivals</a></li> -->
        <!-- <li class="menu-item"><a href="#" class="menu-link">Gift Sets</a></li> -->
        <li class="menu-item"><a href="{{ route('about') }}" class="menu-link">About Us</a></li>
        <li class="menu-item"><a href="{{ route('contact') }}" class="menu-link">Contact</a></li>
    </ul>
</div>
<div class="menu-overlay" id="menuOverlay" onclick="toggleMenu()"></div>

<style>
    /* Inline Search Styles */
    .header-search-inline {
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background: var(--white);
        z-index: 20;
        display: flex;
        align-items: center;
        padding: 0; /* Padding handled by child or dynamically */
        overflow: hidden;
        transition: width 0.3s cubic-bezier(0.4, 0.0, 0.2, 1);
    }
    
    /* No longer hiding header-top, search bar will cover it */
    
    .mobile-header.search-active .header-search-inline {
        width: calc(100% - 130px);
        padding: 0 10px; /* Restore padding when open */
    }

    .inline-search-form {
        width: 100%;
        display: flex;
        align-items: center;
        gap: 10px;
        min-width: 300px; /* Prevent layout squashing during anim */
    }
    
    .inline-search-input {
        flex: 1;
        border: none;
        background: #f8f8f8;
        padding: 10px 15px;
        border-radius: 20px;
        font-size: 14px;
        outline: none;
        color: var(--black);
    }
    
    .inline-search-icon, .inline-search-close {
        background: none;
        border: none;
        font-size: 18px;
        color: var(--black);
        cursor: pointer;
        padding: 5px;
    }
</style>

<script>
    function toggleMenu() {
        const menu = document.getElementById('mobileMenu');
        const overlay = document.getElementById('menuOverlay');
        menu.classList.toggle('active');
        overlay.classList.toggle('active');
        
        if (menu.classList.contains('active')) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    }

    function openSearch() {
        const header = document.querySelector('.mobile-header');
        header.classList.add('search-active');
        const input = document.getElementById('inlineSearchInput');
        if (input) setTimeout(() => input.focus(), 100);
    }

    function closeSearch() {
        const header = document.querySelector('.mobile-header');
        header.classList.remove('search-active');
    }
</script>
