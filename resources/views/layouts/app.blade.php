<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('css/verification.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.5/jquery-jvectormap.css">
        @yield('style')
    </head>
    <body class="font-sans antialiased">
        <div class="header-top-warning">
            <div class="warning-container">
                <div class="warning-content">
                    <p>WARNING: This product contains nicotine. <br> Nicotine is an addictive chemical. </p>
                </div>
            </div>
        </div>
        <div id="header_topBarPromotion">
            <div class="container">
                <div class="topBarPromotion-carousel slick-vertical slick-initialized slick-slider">
                    <button type="button" data-role="none" class="slick-prev slick-arrow" aria-label="Go to slide 2 of 2" role="button" style="">Previous <span data-carousel-tooltip="" class="carousel-tooltip" aria-label="Go to slide 2 of 2"></span>
                    </button>
                    <button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Go to slide 2 of 2" role="button" style="">Next <span data-carousel-tooltip="" class="carousel-tooltip" aria-label="Go to slide 2 of 2"></span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header-top-right-links">
            <div class="header-top-right-links-container">
                <ul>
                    <li class="usa-de-switcher">
        <span class="current-website">
          <img class="switcher-flag-icon" src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/image-manager/us-icon.png"> $USD </span>
                        <div class="switch-website">
                            <a href="">
                                <img class="switcher-flag-icon" src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/image-manager/de-icon4.png"> €EUR </a>
                        </div>
                    </li>
                    <li>
                        <a href="our-craft/">Our Craft</a>
                    </li>
                    <li>
                        <a href="hookah-wholesale/">Wholesale</a>
                    </li>
                    <li>
                        <a href="blog/">Blog</a>
                    </li>
                    <li>
                        <a href="reward-points/">Rewards</a>
                    </li>
                </ul>
            </div>
        </div>
        <header class="header" role="banner">
            <div class="header-center header__desktop">
                <div class="header__desktop--left">
                    <h2 class="header-logo header-logo--center">
                        <a href="" class="header-logo__link">
                            <img class="header-logo-image-unknown-size" src="{{ asset('images/white-logo.png') }}" alt="fiero Inc" title="fiero Inc">
                        </a>
                    </h2>
                </div>
                <div class="header__desktop--center">
                    <div class="navPages-container" id="menu" data-menu="">
                        <nav class="navPages">
                            <ul class="navPages-list navPages-list-depth-max">
                                @foreach(App\Models\Category::with('children')->whereNull('parent_id')->get() as $category)
                                    <li class="navPages-item has-dropdown">
                                        <a class="navPages-action navPages-action-depth-max @if(!empty($category['children'])) has-subMenu @endif  is-root" href="/{{ $category['slug'] }}" aria-label="{{ $category['name'] }}">
                                            <span>{{ $category['name'] }}</span>
                                            <i class="icon navPages-action-moreIcon" aria-hidden="true">
                                                <svg>
                                                    <use xlink:href="#icon-chevron-down"></use>
                                                </svg>
                                            </i>
                                        </a>
                                        @if(!empty($category['children']))
                                            <div class="navPage-subMenu navPage-subMenu-horizontal" id="navPages-18" aria-hidden="true" tabindex="-1">
                                                <ul class="navPage-subMenu-list">
                                                    <li class="navPage-subMenu-item-parent">
                                                        <a class="navPage-subMenu-action navPages-action navPages-action-depth-max" href="/{{ $category['slug'] }}">
                                                            <span>All {{ $category['name'] }}</span>
                                                        </a>
                                                    </li>
                                                    @foreach($category['children'] as $child)
                                                        <li class="navPage-subMenu-item-child">
                                                            <a class="navPage-subMenu-action navPages-action" href="/{{ $category['slug'] }}/{{ $child['slug'] }}">
                                                                <span>{{ $child['name'] }}</span>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            <ul class="navPages-list navPages-list--user">
                                <!--<li class="navPages-item"><a class="navPages-action" href="/wishlist.php"><svg class="icon"><use xlink:href="#icon-wishlist"/></svg><span class="text">Wish Lists</span></a></li><li class="navPages-item"><a class="navPages-action" href="/contact-us/"><svg class="icon icon-location"><use xlink:href="#icon-location"/></svg><span class="text">Store Locator</span></a></li><li class="navPages-item"><a class="navPages-action" href="tel:(619) 331-3535"><svg class="icon icon-telephone"><use xlink:href="#icon-phone"/></svg><span class="text">Contact us: (619) 331-3535</span></a></li><li class="navPages-item"><ul class="socialLinks socialLinks--alt"><li class="socialLinks-item"><a class="icon icon--youtube" href="https://www.youtube.com/c/fieroofficial" target="_blank" rel="noopener" aria-label="Open youtube in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-youtube" /></svg></a></li><li class="socialLinks-item"><a class="icon icon--instagram" href="https://www.instagram.com/fiero/" target="_blank" rel="noopener" aria-label="Open instagram in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-instagram" /></svg></a></li><li class="socialLinks-item"><a class="icon icon--facebook" href="https://www.facebook.com/fieroofficial/" target="_blank" rel="noopener" aria-label="Open facebook in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-facebook" /></svg></a></li></ul></li>-->
                                <li class="navPages-item">do not delete me</li>
                                <li class="navPages-item">
                                    <a class="navPages-action" href="reward-points/">
                                        <span class="text">Rewards</span>
                                    </a>
                                </li>
                                <li class="navPages-item">
                                    <a class="navPages-action" href="our-craft/">
                                        <span class="text">Our Craft</span>
                                    </a>
                                </li>
                                <li class="navPages-item">
                                    <a class="navPages-action" href="hookah-wholesale/">
                                        <span class="text">Wholesale</span>
                                    </a>
                                </li>
                                <li class="navPages-item">
                                    <a class="navPages-action" href="blog/">
                                        <span class="text">Blog</span>
                                    </a>
                                </li>
                                <li class="navPages-item">
                                    <a class="navPages-action" href="#">
                <span class="text">
                  <img class="switcher-flag-icon" src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/image-manager/us-icon.png"> $USD </span>
                                    </a>
                                    <br>
                                    <a class="navPages-action" href="">
                <span class="text">
                  <img class="switcher-flag-icon" src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/image-manager/de-icon4.png"> €EUR </span>
                                    </a>
                                </li>
                                <li class="navPages-item">do not delete me</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="header__desktop--right">
                    <nav class="navUser">
                        <ul class="navUser-section navUser-section--alt">
                            <li class="navUser-item navUser-itemBlock--compare">
                                <a class="navUser-action navUser-item--compare" href="/compare" data-compare-nav="" aria-label="Compare">
                                    <span class="navUser-compare--title">Compare</span>
                                    <span class="countPill countPill--positive countPill--alt"></span>
                                </a>
                            </li>
                            <li class="navUser-item navUser-item--account">
                                <a class="navUser-action navUserAction-login" href="/login.php" aria-label="Sign in"> Sign in </a>
                            </li>
                            <li class="navUser-item">
                                <button class="navUser-action navUser-action--quickSearch" type="button" id="quick-search-expand" data-search="quickSearch" aria-controls="quickSearch" aria-label="Search">
                                    <i style="font-size:2vw" class="fa-solid fa-magnifying-glass"></i>
                                    <span>Search</span>
                                </button>
                            </li>
                            <li class="navUser-item navUser-item--cart">
                                <a class="navUser-action navUser-actionCart navUser-item--cart__hidden-s" data-cart-preview="" data-options="align:right" href="/cart.php" aria-label="Cart with 0 items">
                                    <i  style="font-size:2vw" class="fa-solid fa-cart-shopping"></i>
{{--                                    <span class="navUser-item-cartLabel">Cart</span>--}}
{{--                                    <span class="countPill cart-quantity">0</span>--}}
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="header__mobile">
                <div class="haloHeaderMobile">
                    <div class="haloHeaderMobile__item haloHeaderMobile__item--left">
                        <a href="#" class="mobileMenu-toggle" data-mobile-menu-toggle="menu" aria-controls="menu" aria-expanded="false">
                            <span class="mobileMenu-toggleIcon">Toggle menu</span>
                        </a>
                        <button class="navUser-action navUser-action--quickSearch" type="button" id="quick-search-expand" data-search="quickSearch" aria-controls="quickSearch" aria-label="Search">
                            <svg aria-hidden="true">
                                <use xlink:href="#icon-search"></use>
                            </svg>
                            <span>Search</span>
                        </button>
                    </div>
                    <div class="haloHeaderMobile__item haloHeaderMobile__item--center">
                        <h2 class="header-logo header-logo--center">
                            <a href="" class="header-logo__link">
                                <img class="header-logo-image-unknown-size" src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/fiero-logo_1656113565__75920.original.png" alt="fiero Inc" title="fiero Inc">
                            </a>
                        </h2>
                    </div>
                    <div class="haloHeaderMobile__item haloHeaderMobile__item--right">
                        <a class="navUser-action navUserAction-login" href="/login.php" aria-label="Sign in">
                            <svg aria-hidden="true">
                                <use xlink:href="#icon-user"></use>
                            </svg>
                        </a>
                        <a class="navUser-action navUser-actionCart navUser-item--cart__hidden-s" data-cart-preview="" data-options="align:right" href="/cart.php" aria-label="Cart with 0 items">
                            <svg aria-hidden="true">
                                <use xlink:href="#icon-cart"></use>
                            </svg>
                            <span class="countPill cart-quantity">0</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="dropdown dropdown--quickSearch" id="quickSearch" aria-hidden="true" data-prevent-quick-search-close="">
                <div class="quickSearch-form">
                    <div class="container">
                        <button class="modal-close" type="button" title="Close" aria-label="Close" data-drop-down-close="">
                            <span class="aria-description--hidden">Close</span>
                            <svg class="icon" aria-hidden="true">
                                <use xlink:href="#icon-close"></use>
                            </svg>
                        </button>
                        <form class="form" onsubmit="return false" data-url="/search.php" data-quick-search-form="">
                            <fieldset class="form-fieldset">
                                <div class="form-field">
                                    <label class="is-srOnly" for="nav-quick-search">Search</label>
                                    <input class="form-input" data-search-quick="" name="nav-quick-search" id="nav-quick-search" data-error-message="Search field cannot be empty." placeholder="Search entire store here" autocomplete="off">
                                    <button class="quickSearch-btn" type="submit" aria-label="Submit Quick Search">
                                        <svg aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="container">
                    <section class="quickSearchResults" data-bind="html: results"></section>
                    <p role="status" aria-live="polite" class="aria-description--hidden" data-search-aria-message-predefined-text="product results for"></p>
                    <div class="quickSearch-recommended">
                        <div class="qsRecommended-topSearches">
                            <h3 class="topSearches-title">Top Searches</h3>
                            <ul class="topSearches-list">
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Watermelon Sugamint</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Lemon Mint</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Blueberry N'ice</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Coconut Charcoal</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Phunnel Bowl</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>White Gummi Bear</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a class="topSearches-btn">
                                        <span>Mint</span>
                                        <svg class="icon" aria-hidden="true">
                                            <use xlink:href="#icon-search"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        @extends('layouts.verification')
        <footer class="footer" role="contentinfo">
            <div class="footer-before-container">
                <div class="pre-footer">
                    <div class="pre-footer-block pre-footer-social">
                        <div class="block-title">Follow Us</div>
                        <div class="footer-info-col--social">
                            <ul class="socialLinks socialLinks--alt">
                                <li class="socialLinks-item">
                                    <a class="icon icon--youtube" href="https://www.youtube.com/c/fieroofficial" target="_blank" rel="noopener" aria-label="Open youtube in a new tab">
                                        <i class="fa-brands fa-youtube" style="
                                            font-size: 2.5vw;
                                        "></i>
                                    </a>
                                </li>
                                <li class="socialLinks-item">
                                    <a class="icon icon--instagram" href="https://www.instagram.com/fiero/" target="_blank" rel="noopener" aria-label="Open instagram in a new tab">
                                        <i class="fa-brands fa-instagram" style="
                                            font-size: 2.5vw;
                                        "></i>
                                    </a>
                                </li>
                                <li class="socialLinks-item">
                                    <a class="icon icon--facebook" style="color: white" href="https://www.facebook.com/fieroofficial/" target="_blank" rel="noopener" aria-label="Open facebook in a new tab">
                                        <i class="fa-brands fa-facebook-f" style="
                                            font-size: 2.5vw;
                                        "></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container container-custom">
                <section class="footer-info">
                    <article class="footer-info-col footer-info-col--small" data-section-type="storeInfo">
                        <div class="footer-info__logo">
{{--                            <img class=" lazyloaded" src="{{ asset('images/white-logo.png') }}" alt="Logo">--}}
                            <img class=" lazyloaded" src="/images/white-logo.png" alt="Logo">
                        </div>
                        <address>720 Gateway Center Dr., Suite C <br> San Diego, CA 92102 </address>
                        <p class="footer-info__phone">
                            <a href="tel:(619) 331-3535">Call us: (619) 331-3535</a>
                        </p>
                        <p class="footer-info__phone">
                            <a href="mailto:contactus@fiero.com">Email: contactus@fiero.com</a>
                        </p>
                        <!--<div class="footer-info-col--social"><ul class="socialLinks socialLinks--alt"><li class="socialLinks-item"><a class="icon icon--youtube" href="https://www.youtube.com/c/fieroofficial" target="_blank" rel="noopener" aria-label="Open youtube in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-youtube" /></svg></a></li><li class="socialLinks-item"><a class="icon icon--instagram" href="https://www.instagram.com/fiero/" target="_blank" rel="noopener" aria-label="Open instagram in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-instagram" /></svg></a></li><li class="socialLinks-item"><a class="icon icon--facebook" href="https://www.facebook.com/fieroofficial/" target="_blank" rel="noopener" aria-label="Open facebook in a new tab"><svg aria-hidden="true"><use xlink:href="#icon-facebook" /></svg></a></li></ul></div>-->
                        <ul class="footer-info-list">
                            <li>
                                <a href="/contact-us/" aria-label="Contact Us">Contact Us</a>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-info-col footer-info-col--small" data-section-type="footer-categories">
                        <h3 class="footer-info-heading footer-info-heading--toggle">Shop</h3>
                        <ul class="footer-info-list">
                            <li>
                                <a href="/staff-picks/">Staff Picks</a>
                            </li>
                            <li>
                                <a href="/hookah-tobacco/">Hookah Tobacco</a>
                            </li>
                            <li>
                                <a href="/hookah-coal/">Coal</a>
                            </li>
                            <li>
                                <a href="/hookahs/">Hookahs</a>
                            </li>
                            <li>
                                <a href="/hookah-parts/">Parts</a>
                            </li>
                            <li>
                                <a href="/gear/">Gear</a>
                            </li>
                            <li>
                                <a href="/top-sellers/">Top Sellers</a>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                        <h3 class="footer-info-heading footer-info-heading--toggle">ABOUT fiero</h3>
                        <ul class="footer-info-list">
                            <li>
                                <a href="/authorized-distributors/" aria-label="Authorized Distributors">Authorized Distributors</a>
                            </li>
                            <li>
                                <a href="/careers/" aria-label="Careers">Careers</a>
                            </li>
                            <li>
                                <a href="/faq/" aria-label="Frequently Asked Questions">Frequently Asked Questions</a>
                            </li>
                            <li>
                                <a href="/official-hookah-flavors/" aria-label="Official fiero Hookah Flavors">Official fiero Hookah Flavors</a>
                            </li>
                            <li>
                                <a href="/our-craft/" aria-label="Our Craft">Our Craft</a>
                            </li>
                            <li>
                                <a href="/guarantee/" aria-label="Our Guarantee">Our Guarantee</a>
                            </li>
                            <li>
                                <a href="/hookah-wholesale/" aria-label="Wholesale">Wholesale</a>
                            </li>
                            <li>
                                <a href="/blog/" aria-label="Hookah Blog">Hookah Blog</a>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-info-col footer-info-col--small" data-section-type="footer-webPages">
                        <h3 class="footer-info-heading footer-info-heading--toggle">WEBSITE SUPPORT</h3>
                        <ul class="footer-info-list">
                            <li>
                                <a href="/login.php">My Account</a>
                            </li>
                            <li>
                                <a href="/shipping-returns/">Shipping &amp; Returns</a>
                            </li>
                            <li>
                                <a href="/shipping-returns#international-orders">International Orders</a>
                            </li>
                            <li>
                                <a href="/reward-points/">Reward Points</a>
                            </li>
                            <li>
                                <a href="https://www.affiliatly.com/af-1065925/?mode=register">Affiliate Program</a>
                            </li>
                            <li>
                                <a href="/age-verification/">Age Verification</a>
                            </li>
                            <li>
                                <a href="/accessibility-statement/">Accessibility</a>
                            </li>
                        </ul>
                    </article>
                    <article class="footer-info-col" data-section-type="newsletterSubscription">
                        <h3 class="footer-info-heading">YOU MUST BE OF LEGAL AGE TO BUY TOBACCO PRODUCTS IN YOUR COUNTRY AND TO USE THIS WEBSITE. (AT LEAST 21 YEARS OF AGE IN THE USA).</h3>
                        <ul class="footer-info-list">
                            <li>
                                <a href="/privacy-policy/">Privacy</a>
                            </li>
                            <li>
                                <a href="/legal-info/">Terms of Use</a>
                            </li>
                        </ul>
                        <ul class="footer-info-list">
                            <li>
                                <a href="https://nationalhookah.com/" target="_blank">
                                    <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/original/image-manager/nhca-member.png" alt="National Hookah Community Association Member">
                                </a>
                            </li>
                        </ul>
                        <!--<h3 class="footer-info-heading">Newsletter Sign Up</h3><p>Receive our latest updates about our products and promotions.</p><form class="form" action="/subscribe.php" method="post"><fieldset class="form-fieldset"><input type="hidden" name="action" value="subscribe"><input type="hidden" name="nl_first_name" value="bc"><input type="hidden" name="check" value="1"><div class="form-field"><label class="form-label is-srOnly" for="nl_email">Email Address</label><div class="form-prefixPostfix wrap"><input class="form-input"
                                       id="nl_email"
                                       name="nl_email"
                                       type="email"
                                       value=""
                                       placeholder="Enter your email address"
                                       aria-describedby="alertBox-message-text"
                                       aria-required="true"
                                ><input class="button button--primary form-prefixPostfix-button--postfix"
                                       type="submit"
                                       value="Submit"
                                ></div></div></fieldset></form>
                -->
                    </article>
                </section>
                <div class="footer-bottom-about">
                    <h3>
                        <span>fiero -</span> Making minds tingle with taste since 02.02.2025
                    </h3>
                    <p>Born and raised in San Diego, California. fiero produces premium hookah tobacco in small batches that are replenished daily and packed in flavor-lock pouches. Smoke it fresh, every time, as it should be.</p>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container footer-bottom__container container-custom">
                    <div class="footer-bottom__left">
                        <div class="footer-copyright">
                            <p class="powered-by">© 2025 fiero Inc. </p>
                        </div>
                    </div>
                    <div class="footer-bottom__right">
                        <div class="footer-payment-icons">
                            <svg class="footer-payment-icon footer-payment-icon--visa">
                                <use xlink:href="#icon-logo-visa"></use>
                            </svg>
                            <svg class="footer-payment-icon footer-payment-icon--mastercard">
                                <use xlink:href="#icon-logo-mastercard"></use>
                            </svg>
                            <svg class="footer-payment-icon footer-payment-icon--americanExpress">
                                <use xlink:href="#icon-logo-american-express"></use>
                            </svg>
                            <svg class="footer-payment-icon footer-payment-icon--discover">
                                <use xlink:href="#icon-logo-discover"></use>
                            </svg>
                            <svg class="footer-payment-icon footer-payment-icon--paypal">
                                <use xlink:href="#icon-logo-paypal"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div data-content-region="ssl_site_seal--global"></div>
        </footer>
    </body>
    
    @yield('scripts')
</html>
