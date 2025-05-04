@extends('layouts.app')

@section('content')
    <main class="body" id="main-content" role="main" data-currency-code="USD">
        <div class="container categoryHeader__container">
            <div class="categoryHeader">
                <div data-content-region="category_below_top_banner"></div>
                <div class="categoryHeader__content">
                    <nav aria-label="Breadcrumb">
                        <ol class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                            <li class="breadcrumb " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a class="breadcrumb-label" itemprop="item" href="/">
                                    <span itemprop="name">Home</span>
                                </a>
                                <meta itemprop="position" content="1">
                            </li>
                            <li class="breadcrumb " itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a class="breadcrumb-label" itemprop="item" href="/hookah-tobacco/">
                                    <span itemprop="name">Hookah Tobacco</span>
                                </a>
                                <meta itemprop="position" content="2">
                            </li>
                            <li class="breadcrumb is-active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a class="breadcrumb-label" itemprop="item" href="/hookah-tobacco/mix-series/" aria-current="page">
                                    <span itemprop="name">Mix Series</span>
                                </a>
                                <meta itemprop="position" content="3">
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-heading">Mix Series</h1>
                    <div class="categoryHeader__des">
                        <p>Introducing the new fiero Mix Series shopping experience. Get all the flavors you need, with one just one click, to make popular fiero hookah tobacco mixes crafted and approved by Hookah Experts from around the world.</p>
                    </div>
                </div>
            </div>
            <div data-content-region="category_below_header"></div>
        </div>
        <div class="container product-category">
            <div class="page">
                <div class="halo-category-toolbar">
                    <div class="column-left">
                        <div class="sidebar-label"></div>
                    </div>
                    <div class="column-right">
                        <div class="view-as-btn">
                            <label class="form-label">View As</label>
                            <div class="btn-group">
                                <div class="btn-select">
                                    <a href="javascript:void(0);" id="grid-view" title="Grid View" class="btn-view grid-view current-view">
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="list-view" title="List View" class="btn-view list-view">
                                        <div class="icon-view">
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="btn-dropdown sidebar-hide">
                                    <a href="javascript:void(0);" id="grid-view2" data-grid="2" title="Grid View" class="btn-view grid-view grid-view2">
                                        <div class="icon-view icon-view-2">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-2">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="grid-view3" data-grid="3" title="Grid View" class="btn-view grid-view grid-view3">
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-3">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="grid-view4" data-grid="4" title="Grid View" class="btn-view grid-view grid-view4 current-view">
                                        <div class="icon-view icon-view-4">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-4">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-4">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-4">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="grid-view5" data-grid="5" title="Grid View" class="btn-view grid-view grid-view5">
                                        <div class="icon-view icon-view-5">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-5">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-5">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-5">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-5">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0);" id="grid-view6" data-grid="6" title="Grid View" class="btn-view grid-view grid-view6">
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                        <div class="icon-view icon-view-6">
                                            <div class="icon-bar"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <form class="actionBar show-product" method="get" data-sort-by="" data-show-products="">
                            <fieldset class="form-fieldset actionBar-section">
                                <div class="form-field">
                                    <label class="form-label" for="limit">Show</label>
                                    <select class="form-select form-select--small" name="limit" id="limit">
                                        <option value="8">8 products per page</option>
                                        <option value="12">12 products per page</option>
                                        <option value="20">20 products per page</option>
                                        <option value="32">32 products per page</option>
                                        <option value="60" selected="">60 products per page</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                        <form class="actionBar" method="get" data-sort-by="product">
                            <fieldset class="form-fieldset actionBar-section">
                                <div class="form-field">
                                    <label class="form-label" for="sort">Sort By</label>
                                    <select class="form-select form-select--small " name="sort" id="sort" role="listbox">
                                        <option value="featured">Featured Items</option>
                                        <option value="newest">Newest Items</option>
                                        <option value="bestselling">Best Selling</option>
                                        <option value="alphaasc" selected="">A to Z</option>
                                        <option value="alphadesc">Z to A</option>
                                        <option value="avgcustomerreview">By Review</option>
                                        <option value="priceasc">Price: Ascending</option>
                                        <option value="pricedesc">Price: Descending</option>
                                    </select>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <main class="page-content" id="product-listing-container">
                    <form action="/compare" method="POST" data-product-compare="">
                        <ul class="productGrid" data-column="4">
                            <li class="product">
                                <article class="card
    " data-product-id="204" data-test="card-204">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/alwayz-sunny-mix/" class="card-figure__link" aria-label="Alwayz Sunny,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/204/557/always-sunny-mix__06136.1656720228.png?c=1" alt="Alwayz Sunny Hookah Mix" title="Alwayz Sunny Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/204/557/always-sunny-mix__06136.1656720228.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1" alt="Alwayz Sunny Hookah Mix Ratios" title="Alwayz Sunny Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/204/637/always-sunny-ratios__37079.1661977358.png?c=1 2560w" class="card-image img-responsive lazyautosizes ls-is-cached lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=204" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=204" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="204" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Alwayz Sunny,$25.00
" href="/alwayz-sunny-mix/">
                                                <span>Alwayz Sunny</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Alwayz Sunny rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY JAY BRAND AMBASSADOR fiero fan and brand ambassador, Jay, has entered the scene straight from the sandy, sun-soaked beaches of Miami. His mix of 60% Watermelon, 20% Lemon Mint, and 20% White Peach will remind you that "regardless the season.…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=204" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="204" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="205" data-test="card-205">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/baja-bowl-mix/" class="card-figure__link" aria-label="Baja Bowl,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1" alt="Baja Bowl Hookah Mix" title="Baja Bowl Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/205/561/baja-Bowl-mix__50159.1657052230.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1" alt="Baja Bowl Hookah Mix Ratios" title="Baja Bowl Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/205/560/baja-bowl-ratios__65110.1657052663.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=205" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=205" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="205" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Baja Bowl,$25.00
" href="/baja-bowl-mix/">
                                                <span>Baja Bowl</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Baja Bowl rating is 5 of 5">
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ILO MUSK Brand Model @ilomusk In the mood for an exotic getaway? Baja Bowl is the perfect fusion of RGB’s wild berries and Lemon Mint’s zesty freshness, with Prickly Pear giving it that final kick that’ll send your tastebuds…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=205" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="205" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="206" data-test="card-206">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/bakers-special-mix/" class="card-figure__link" aria-label="Baker's Special,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1" alt="Baker's Special Hookah Mix" title="Baker's Special Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/206/564/Bakers-Special-mix__30974.1657052610.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1" alt="Baker's Special Hookah Mix Ratios" title="Baker's Special Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/206/563/bakers-specials-ratios__47500.1657052715.png?c=1 2560w" class="card-image img-responsive lazyautosizes ls-is-cached lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=206" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=206" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="206" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Baker's Special,$17.00
" href="/bakers-special-mix/">
                                                <span>Baker's Special</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Baker's Special rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;"> BY OSCAR ERDEM fiero San Diego, USA Oscar Erdem, fiero’s Head of Research and Development, is sharing one of his favorite hookah mixes he calls the Baker’s Special. Mix 50% Blueberry Muffin with 50% Limoncello for a hookah...</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=206" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="206" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="207" data-test="card-207">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/cali-cruisin-mix/" class="card-figure__link" aria-label="Cali Cruisin',$33.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1" alt="Cali Cruisin' Hookah Mix" title="Cali Cruisin' Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/207/566/Cali-Cruisin-Mix__04817.1657053033.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1" alt="Cali Cruisin' Hookah Mix Ratios" title="Cali Cruisin' Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/207/704/cali-cruisin-ratios__53638.1696287693.png?c=1 2560w" class="card-image img-responsive lazyautosizes ls-is-cached lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=207" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=207" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="207" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Cali Cruisin',$33.00
" href="/cali-cruisin-mix/">
                                                <span>Cali Cruisin'</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Cali Cruisin' rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY WENDY LOUTHANOVA Tabac Cafe &amp; Hookah, San Diego, CA, USA California hookahified, Cali Cruisin' comes straight outta Tabac San Diego from Hookah Master Wendy Louthanova. This energetic and summery hookah mix is "guaranteed to give the...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$33.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=207" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="207" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="211" data-test="card-211">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/cherilla-mocha-mix/" class="card-figure__link" aria-label="Cherilla Mocha,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1" alt="Cherilla Mocha Hookah Mix" title="Cherilla Mocha Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/211/582/cherilla-mocha-mix__03380.1657054915.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1" alt="Cherilla Mocha Hookah Mix Ratios" title="Cherilla Mocha Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/211/581/cherilla-mocha-ratios__37991.1657056541.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=211" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=211" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="211" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Cherilla Mocha,$25.00
" href="/cherilla-mocha-mix/">
                                                <span>Cherilla Mocha</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Cherilla Mocha rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ALEX BRATKOV Art Hookah Lounge San Diego, CA, USA Hookah Master, Alex Bratkov of Art Hookah Lounge in San Diego, CA, USA, brings us a new flavorful blend, Cherrilla Mocha. This mix of 50% Sour Cherry, 25% Mochaccino, and 25% French Vanilla is…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=211" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="211" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="210" data-test="card-210">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/chiefs-choice-mix/" class="card-figure__link" aria-label="Chief's Choice,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1" alt="Chief's Choice Hookah Mix" title="Chief's Choice Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/210/579/chief-s-choice-mix__56035.1657054685.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1" alt="Chief's Choice Hookah Mix Ratios" title="Chief's Choice Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/210/578/chief-s-choice-ratios__94569.1657056466.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=210" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=210" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="210" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Chief's Choice,$25.00
" href="/chiefs-choice-mix/">
                                                <span>Chief's Choice</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Chief's Choice rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY J.ROB THE CHIEF Rapper, Glendale, AZ, USA Arizona rapper and friend of the house, J.Rob The Chief, swung by to fix us up with one of his favorite fiero hookah mixes - Chief's Choice. The mix, which features equal parts of Orange Cream,...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=210" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="210" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="230" data-test="card-230">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/chill-potion-mix/" class="card-figure__link" aria-label="Chill Potion,$33.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1" alt="Chill Potion Hookah Flavor Mix" title="Chill Potion Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/230/644/Chill-Potion-Mix__03805.1676404211.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1" alt="Chill Potion Hookah Flavor Mix Ratios" title="Chill Potion Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/230/679/Chill_Potion_ratios__40140.1691436593.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=230" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=230" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="230" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Chill Potion,$33.00
" href="/chill-potion-mix/">
                                                <span>Chill Potion</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Chill Potion rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY WENDY LOUTHANOVA Tabac Cafe &amp; Hookah, San Diego, CA, USA Wendy Louthanova of Tabac Cafe &amp; Hookah is back in the fiero Lab mastering a new flavor mix for all you hookah lovers out there. Mix 20% Passionfruit Sangria, 30% Watermelon,..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$33.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=230" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="230" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="254" data-test="card-254">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/chill-potion-v2-mix/" class="card-figure__link" aria-label="Chill Potion v2,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1" alt="Chill Potion v2 Hookah Flavor Mix" title="Chill Potion v2 Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/254/762/Mix-Chill-Potion-2__60728.1706312346.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1" alt="Chill Potion v2 Hookah Flavor Mix Ratios" title="Chill Potion v2 Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/254/763/Chill_Potion2-ratios__56749.1706312346.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=254" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=254" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="254" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Chill Potion v2,$25.00
" href="/chill-potion-v2-mix/">
                                                <span>Chill Potion v2</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Chill Potion v2 rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY JABBAR Business Development, fiero San Diego, CA, USA Some mixes simply happen by accident. While we sent our Chill Potion mix to be served at the Sunset Smokes Fest in Phoenix, AZ, we had a hiccup in the shipment. The result was a slight...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=254" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="254" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="212" data-test="card-212">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/citrus-nights-mix/" class="card-figure__link" aria-label="Citrus Nights,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1" alt="Citrus Nights Hookah Mix" title="Citrus Nights Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/212/585/citrus-nights-mix__56390.1657055759.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1" alt="Citrus Nights Hookah Mix Ratios" title="Citrus Nights Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/212/583/citrus-nights-ratios__58116.1657055758.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=212" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=212" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="212" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Citrus Nights,$25.00
" href="/citrus-nights-mix/">
                                                <span>Citrus Nights</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Citrus Nights rating is 5 of 5">
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ALEX BRATKOV Art Hookah Lounge San Diego, CA, USA We bring you Citrus Nights from Alex Bratkov of Art Hookah Lounge in San Diego, CA, USA. This mix is 50% Citrus Tea, 25% Lemon Mint and 25% Mandarin Zest. When we asked Alex what his lounge...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=212" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="212" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="246" data-test="card-246">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/dont-be-chai/" class="card-figure__link" aria-label="Don't Be Chai,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1" alt="Don't Be Chai Hookah Flavor Mix" title="Don't Be Chai Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/246/685/dont-be-chai-hookah-mix__41221.1691691489.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1" alt="Don't Be Chai Hookah Flavor Mix Ratios" title="Don't Be Chai Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/246/683/dont-be-chai-hookah-mix-ration__32479.1691691488.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=246" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=246" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="246" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Don't Be Chai,$25.00
" href="/dont-be-chai/">
                                                <span>Don't Be Chai</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Don't Be Chai rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;"> BY JABBAR Business Development, fiero San Diego, CA, USA Don't be chai, say yes to dessert. That's what Jabbar from fiero was thinking when he crafted this crowd-pleasing, indulgent mix of 50% Caramel Kiss, 40% Spiced Chai, and 10% Mint...</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=246" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="246" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="256" data-test="card-256">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/fakh-utopia-mix/" class="card-figure__link" aria-label="Fakh Utopia,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1" alt="Fakh Utopia Mix" title="Fakh Utopia Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/256/767/Mix-Fakh-Utopia__32650.1706643588.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1" alt="Fakh Utopia Mix Ratios" title="Fakh Utopia Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/256/769/fakh_Utopia_ratios__82160.1706643588.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=256" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=256" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="256" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Fakh Utopia,$25.00
" href="/fakh-utopia-mix/">
                                                <span>Fakh Utopia</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Fakh Utopia rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY HEVE MOHI fiero San Diego, CA, USA This Staff Pick by Heve in our Sales Dept is perfect for all you fruit lovers out there. The mix of Fakh N' Mint, Hola Peaches and Tropical Punch (all 1/3s) tastes like you’re on a utopian beach...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=256" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="256" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="253" data-test="card-253">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/forever-summer-mix/" class="card-figure__link" aria-label="Forever Summer,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1" alt="Forever Summer Hookah Mix" title="Forever Summer Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/253/760/mix-alwayz-summer__67950.1706639669.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1" alt="Forever Summer Hookah Mix Ratio" title="Forever Summer Hookah Mix Ratio" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/253/770/forever-summer-ratios__26588.1706651429.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=253" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=253" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="253" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Forever Summer,$25.00
" href="/forever-summer-mix/">
                                                <span>Forever Summer</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Forever Summer rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ANDRE ROMERO fiero San Diego, CA, USA This fiero Staff Pick, by Andre in our Customer Service Department, is a peachy twist to a time-tested mix of Lemon Mint and White Gummi Bear. Forever Summer is a combo of three customer favorites (50%.…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=253" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="253" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="208" data-test="card-208">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/funky-monkey-mix/" class="card-figure__link" aria-label="Funky Monkey,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1" alt="Funky Monkey Mix" title="Funky Monkey Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/208/568/Funky-Monkey-mix__77462.1657053709.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1" alt="Funky Monkey Mix Ratios" title="Funky Monkey Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/208/570/funky-monkey-ratios__10795.1657053709.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=208" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=208" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="208" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Funky Monkey,$25.00
" href="/funky-monkey-mix/">
                                                <span>Funky Monkey</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Funky Monkey rating is 4 of 5">
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingFull">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY HEVE MOHI fiero San Diego, CA, USA Who’s ready for another fiero Staff Pick hookah mix that will hit the sweet spot? This time our Sales Rep, Heve Mohi, hooks it up with this cool and creamy twist on the ice cream classic, Funky...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=208" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="208" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="213" data-test="card-213">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/good-mornin-sugah-mix/" class="card-figure__link" aria-label="Good Mornin', Sugah!,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1" alt="Good Mornin', Sugah! Mix" title="Good Mornin', Sugah! Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/213/588/good-mornin-sugah-mix__67598.1657056041.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1" alt="Good Mornin', Sugah! Mix Ratios" title="Good Mornin', Sugah! Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/213/587/good-mornin-sugah-ratios__71897.1657056041.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=213" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=213" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="213" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Good Mornin', Sugah!,$25.00
" href="/good-mornin-sugah-mix/">
                                                <span>Good Mornin', Sugah!</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Good Mornin', Sugah! rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ROB PECORARO fiero San Diego, CA, USA A little sugar in the mornings is what we all need. Good Mornin', Sugah!, this hookah mix staff pick from marketing specialist Rob Pecoraro pays homage to just that with 40% Lemon Loaf, 40% Watermelon,..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=213" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="213" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="261" data-test="card-261">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/gummi-rush-mix/" class="card-figure__link" aria-label="Gummi Rush,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1" alt="Gummi Rush Hookah Flavor Mix" title="Gummi Rush Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/261/786/Mix-gummi-rush__48302.1706741790.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1" alt="Gummi Rush Hookah Flavor Mix Ratios" title="Gummi Rush Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/261/784/gummi-rush-ratios__44676.1706741790.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=261" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=261" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="261" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Gummi Rush,$17.00
" href="/gummi-rush-mix/">
                                                <span>Gummi Rush</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Gummi Rush rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Abraham fiero San Diego, CA, USA Back in the days of the fiero Hookah Lounge, two gummi flavors joined forces to create a mix we like to call Gummi Rush. This Staff Pick by Abraham in our Sales Department delivers everything that your sweet…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=261" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="261" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="214" data-test="card-214">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/holiday-harvest-mix/" class="card-figure__link" aria-label="Holiday Harvest,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1" alt="Holiday Harvest Hookah Mix" title="Holiday Harvest Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/214/590/holiday-harvest-mix__66523.1657056428.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1" alt="Holiday Harvest Hookah Mix Ratios" title="Holiday Harvest Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/214/591/holiday-harvest-ratios__83502.1657056314.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=214" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=214" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="214" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Holiday Harvest,$25.00
" href="/holiday-harvest-mix/">
                                                <span>Holiday Harvest</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Holiday Harvest rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY VICTORIA YUKHNO Shangri-La Hookah Lounge San Diego, CA, USA Hookah Master, Victoria Yukhno of Shangri-La Hookah Lounge in San Diego, CA, USA, is serving major festive vibes with this refreshing Thanksgiving blend, Holiday Harvest. This mix of…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=214" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="214" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="209" data-test="card-209">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/holly-berry-mix/" class="card-figure__link" aria-label="Holly-Berry,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1" alt="Holly Berry Hookah Mix" title="Holly Berry Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/209/573/Holly-Berry-Mix__79314.1657054001.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1" alt="Holly Berry Hookah Mix Ratios" title="Holly Berry Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/209/572/holly-berry-ratios__63055.1657054001.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=209" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=209" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="209" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Holly-Berry,$25.00
" href="/holly-berry-mix/">
                                                <span>Holly-Berry</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Holly-Berry rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY BAYRAM ALIYEV HookahBattle Hall-Of-Famer, Saint Petersburg, RU Looking for that hookah mix to make you feel all Holly and Jolly any time of year? Hookah Battle Hall-Of-Famer&nbsp;Bayram Aliyev is back with Holly-Berry, a unique play on a...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=209" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="209" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="215" data-test="card-215">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/jamaican-me-crazy-mix/" class="card-figure__link" aria-label="Jamaican Me Crazy,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1" alt="Jamaican Me Crazy Hookah Mix" title="Jamaican Me Crazy Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/215/594/Jamaican-Me-Crazy-mix__70309.1657056766.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1" alt="Jamaican Me Crazy Hookah Mix Ratios" title="Jamaican Me Crazy Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/215/592/jamaican-me-crazy-ratios__90260.1657056765.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=215" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=215" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="215" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Jamaican Me Crazy,$25.00
" href="/jamaican-me-crazy-mix/">
                                                <span>Jamaican Me Crazy</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Jamaican Me Crazy rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY SAL KHAN @doseofshisha Looking to bring the beach vibes home? Well, you can courtesy of a new hookah mix named Jamaica Me Crazy by hookah enthusiast Sal Khan, also known as Dose Of Shisha. Mix 50% Orange Cream, 25% Caribbean Colada, and 25%..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=215" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="215" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="216" data-test="card-216">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/just-cozy-mix/" class="card-figure__link" aria-label="Just Cozy,$33.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1" alt="Just Cozy Hookah Mix" title="Just Cozy Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/216/596/Just-Cozy-Mix__50390.1657056977.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1" alt="Just Cozy Hookah Mix Ratios" title="Just Cozy Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/216/595/just-cozy-ratios__73104.1657056977.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=216" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=216" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="216" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Just Cozy,$33.00
" href="/just-cozy-mix/">
                                                <span>Just Cozy</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Just Cozy rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY WENDY LOUTHANOVA Tabac Cafe &amp; Hookah, San Diego, CA, USA Wendy Louthanova of Tabac Cafe &amp; Hookah came up with this cozy and delicious dessert hookah mix during a rainy Spring day here in the fiero office and now we are bringing it to…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$33.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=216" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="216" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="257" data-test="card-257">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/livin-in-paradise-mix/" class="card-figure__link" aria-label="Livin' in Paradise,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1" alt="Livin' in Paradise Mix" title="Livin' in Paradise Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/257/773/Mix-Living-in-Paradise__47510.1706658579.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1" alt="Livin' in Paradise Mix Ratios" title="Livin' in Paradise Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/257/772/living_in_paradise_ratios__04136.1706658579.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=257" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=257" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="257" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Livin' in Paradise,$25.00
" href="/livin-in-paradise-mix/">
                                                <span>Livin' in Paradise</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Livin' in Paradise rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY HEVE MOHI fiero San Diego, CA, USA Here's a flavorful way to getaway from everyday stress that costs just a couple bucks per bowl. Sure, it may not be that week in Bali you needed, but it's a thousand times cheaper. This Staff Pick comes...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=257" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="257" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="217" data-test="card-217">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/ll-cool-beignet-mix/" class="card-figure__link" aria-label="LL-Cool Beignet,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1" alt="LL-Cool Beignet Hookah Mix" title="LL-Cool Beignet Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/217/599/LL-Cool-beignet-mix__79076.1657057620.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1" alt="LL-Cool Beignet Hookah Mix Ratios" title="LL-Cool Beignet Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/217/701/LL-Cool-beignet-ratios__91174.1696287497.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=217" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=217" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="217" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="LL-Cool Beignet,$25.00
" href="/ll-cool-beignet-mix/">
                                                <span>LL-Cool Beignet</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="LL-Cool Beignet rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ROB PECORARO fiero San Diego, CA, USA This hookah flavor mix comes from Marketing Specialist, Rob Pecoraro, who states: "To me, Southern hospitality tastes like lemon beignets with a minty nectarine jam to dip them in which is absolutely...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=217" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="217" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="251" data-test="card-251">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/malibu-bliss-mix/" class="card-figure__link" aria-label="Malibu Bliss,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1" alt="Malibu Bliss Hookah Mix" title="Malibu Bliss Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/251/714/Mix-Malibu-Bliss__97537.1701815905.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1" alt="Malibu Bliss Hookah Mix Ratio" title="Malibu Bliss Hookah Mix Ratio" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/251/712/malibu-bliss-ratios__43410.1701815905.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=251" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=251" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="251" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Malibu Bliss,$25.00
" href="/malibu-bliss-mix/">
                                                <span>Malibu Bliss</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Malibu Bliss rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY PATRICK ANDRIASIAN Puffin O's, Los Angeles, CA, USA Patrick Andriasian from Puffin O's Hookah Catering in Los Angeles, CA is making his first appearance on the fiero Mix Series with a bowl that will send warm, tropical vibes no matter what..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=251" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="251" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="218" data-test="card-218">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/nimbus-nights-mix/" class="card-figure__link" aria-label="Nimbus Nights,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1" alt="Nimbus Nights Hookah Mix" title="Nimbus Nights Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/218/603/Nimbus-Nights-mix__69486.1657057817.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1" alt="Nimbus Nights Hookah Mix Ratios" title="Nimbus Nights Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/218/602/nimbus-nights-ratios__08166.1657057817.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=218" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=218" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="218" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Nimbus Nights,$25.00
" href="/nimbus-nights-mix/">
                                                <span>Nimbus Nights</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Nimbus Nights rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY TAZ HASHEMEE Nimbus Hookahs, Orange County, CA ,USA Taz Hashemee, from the premier Southern California hookah catering company, Nimbus Hookahs, is brewing up a flavor storm with their mix, Nimbus Nights. According to Taz, it is “the...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=218" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="218" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="263" data-test="card-263">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/northern-lights-mix/" class="card-figure__link" aria-label="Northern Lights,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1" alt="Northern Lights Hookah Flavor Mix" title="Northern Lights Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/263/792/Mix-Northern-Lights__02490.1706814240.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1" alt="Northern Lights Hookah Flavor Mix Ratios" title="Northern Lights Hookah Flavor Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/263/791/northern_lights-ratios__23618.1706814241.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=263" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=263" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="263" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Northern Lights,$17.00
" href="/northern-lights-mix/">
                                                <span>Northern Lights</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Northern Lights rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Andre fiero San Diego, CA, USA We saw this Staff Pick coming from a mile away! This mix uses two of Andre's favorite fiero flavors, 50% White Gummi Bear with 50% Lemon Mint . Northern Lights hit our radar many years back when our catering..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=263" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="263" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="219" data-test="card-219">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/october-cream-mix/" class="card-figure__link" aria-label="October Cream,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/219/606/October-Cream-mix__10082.1657058100.png?c=1" alt="October Cream Hookah Mix" title="October Cream Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/219/606/October-Cream-mix__10082.1657058100.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1" alt="October Cream Hookah Mix Ratios" title="October Cream Hookah Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/219/604/october-cream-ratios__08408.1657058038.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=219" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=219" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="219" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="October Cream,$25.00
" href="/october-cream-mix/">
                                                <span>October Cream</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="October Cream rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ROB PECORARO Hookah Reviewer, Las Vegas, NV, USA Hookah Reviewer Rob Pecoraro, also known as Instagram’s @DudeWheresMyHookah, is in the hookah kitchen whipping up a mix he calls October Cream. For this mix, add a heaping base layer of..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=219" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="219" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="255" data-test="card-255">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/oh-she-nice-mix/" class="card-figure__link" aria-label="Oh She N'ice,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1" alt="Oh She N'ice Hookah Flavor Mix" title="Oh She N'ice Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/255/766/Mix-Oh-She-Nice__27083.1706314669.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1" alt="Oh She N'ice Hookah Flavor Mix Ratios" title="Oh She N'ice Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/255/765/oh_she_nice_ratios__58230.1706314669.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=255" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=255" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="255" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Oh She N'ice,$25.00
" href="/oh-she-nice-mix/">
                                                <span>Oh She N'ice</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Oh She N'ice rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Tracie Palmz Hookah Lounge Huntington Beach, CA, USA Tracie from Palmz Hookah Lounge in Huntington Beach, CA, and dear friend of fiero, is finally on our Mix Series with nothing less than a jaw-dropping mix that you would expect from this...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=255" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="255" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="250" data-test="card-250">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/purple-ice-mix/" class="card-figure__link" aria-label="Purple Ice,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1" alt="Purple Ice Hookah Mix" title="Purple Ice Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/250/707/purple-ice-hookah-mix__80438.1699645441.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1" alt="Purple Ice Hookah Mix Ratios" title="Purple Ice Hookah Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/250/706/purple-ice-hookah-mix-ratios__66244.1699645441.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=250" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=250" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="250" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Purple Ice,$25.00
" href="/purple-ice-mix/">
                                                <span>Purple Ice</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Purple Ice rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY J.ROB THE CHIEF Rapper, Glendale, AZ, USA J.Rob The Chief is hanging out at Empire Hookah Lounge in Phoenix, AZ and he’s feeling good with another one of his favorite fiero Mixes. This time, it’s one he calls Purple Ice. A mix of…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=250" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="250" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="258" data-test="card-258">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/rgbreezy-mix/" class="card-figure__link" aria-label="RGBreezy,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1" alt="RGBreezy Hookah Flavor Mix" title="RGBreezy Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/258/777/Mix-RGBreezy__74968.1706726033.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1" alt="RGBreezy Hookah Flavor Mix Ratios" title="RGBreezy Hookah Flavor Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/258/775/rgbreezy-pouches__53146.1706726033.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=258" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=258" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="258" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="RGBreezy,$17.00
" href="/rgbreezy-mix/">
                                                <span>RGBreezy</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="RGBreezy rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Alejandro fiero San Diego, CA, USA We love it when two fiero flavors come together to make an even wilder flavor experience. Alejandro from our Graphic Design Department believes RGBreezy is no exception. Sour citrus and cool mint elevate..…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=258" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="258" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="247" data-test="card-247">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/secret-oasis-mix/" class="card-figure__link" aria-label="Secret Oasis,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1" alt="Secret Oasis Hookah Flavor Mix" title="Secret Oasis Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/247/688/secret-oasis-hookah-mix__04630.1691693390.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1" alt="Secret Oasis Hookah Flavor Mix Ratios" title="Secret Oasis Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/247/692/SECRET_OASIS-ratios__66302.1691776547.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=247" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=247" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="247" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Secret Oasis,$25.00
" href="/secret-oasis-mix/">
                                                <span>Secret Oasis</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Secret Oasis rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY FATMA SAKKAR Tabac Cafe &amp; Hookah, San Diego, CA, USA Summer is in session and Fatma from Tabac Cafe &amp; Hookah in San Diego, CA is on the scene with a mix that will quench your desire for a hookah that's sweet and refreshing. All you...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=247" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="247" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="233" data-test="card-233">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/shangri-love-mix/" class="card-figure__link" aria-label="Shangri-Love,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/233/651/shangri-love_1__06719.1676597799.png?c=1" alt="Shangri-Love Hookah Flavor Mix" title="Shangri-Love Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/233/651/shangri-love_1__06719.1676597799.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1" alt="Shangri-Love Hookah Flavor Mix Rations" title="Shangri-Love Hookah Flavor Mix Rations" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/233/652/shangri-love_ratios_3_1__37023.1676597799.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=233" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=233" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="233" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Shangri-Love,$25.00
" href="/shangri-love-mix/">
                                                <span>Shangri-Love</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Shangri-Love rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY VICTORIA YUKHNO Shangri-La Hookah Lounge San Diego, CA ,USA We bring you Shangri-Love from Hookah Master Victoria Yukhno of Shangri-La Hookah Lounge in San Diego, CA, USA. This is mix is 33% Tangelo, 33% WGB and 33% Ambrosia paired perfectly.…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=233" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="233" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="259" data-test="card-259">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/southern-squeeze-mix/" class="card-figure__link" aria-label="Southern Squeeze,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1" alt="Southern Squeeze Hookah Flavor Mix" title="Southern Squeeze Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/259/779/Mix-Southern-Squeeze__52559.1706727553.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1" alt="Southern Squeeze Hookah Flavor Mix Ratios" title="Southern Squeeze Hookah Flavor Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/259/780/southern_squeeze-pouches__97009.1706727553.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=259" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=259" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="259" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Southern Squeeze,$17.00
" href="/southern-squeeze-mix/">
                                                <span>Southern Squeeze</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Southern Squeeze rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Alejandro fiero San Diego, CA, USA Classics like this are the type of mixes you can't ever go wrong with. We first tried this mix after our friends at Hookah-Shisha.com casually mentioned how it's one of their top fiero mixes. We've put...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=259" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="259" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="220" data-test="card-220">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/spiced-punch-mix/" class="card-figure__link" aria-label="Spiced Punch,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1" alt="Spiced Punch Hookah Mix" title="Spiced Punch Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/220/609/Spiced-Punch-mix__24127.1657058342.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1" alt="Spiced Punch Hookah Mix Ratios" title="Spiced Punch Hookah Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/220/607/spiced-punch-ratios__58554.1657058342.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=220" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=220" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="220" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Spiced Punch,$25.00
" href="/spiced-punch-mix/">
                                                <span>Spiced Punch</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Spiced Punch rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY DANIIL VOLODARSKIY HookahBattle Hall-Of-Famer, Saint Petersburg, RU HookahBattle Hall-Of-Famer Daniil Volodarkskiy is turning up the heat with this flavorful three-way mix that is sure to get you all warmed up for the weekend. Mix 1/3 Purple.…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=220" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="220" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="221" data-test="card-221">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/spring-mix/" class="card-figure__link" aria-label="Spring Mix,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/221/612/spring-mix__48124.1657060123.png?c=1" alt="Spring Mix Hookah Mix" title="Spring Mix Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/221/612/spring-mix__48124.1657060123.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/221/612/spring-mix__48124.1657060123.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/221/612/spring-mix__48124.1657060123.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/221/612/spring-mix__48124.1657060123.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/221/612/spring-mix__48124.1657060123.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/221/612/spring-mix__48124.1657060123.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/221/612/spring-mix__48124.1657060123.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/221/612/spring-mix__48124.1657060123.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/221/612/spring-mix__48124.1657060123.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/221/612/spring-mix__48124.1657060123.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/221/612/spring-mix__48124.1657060123.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/221/612/spring-mix__48124.1657060123.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/221/612/spring-mix__48124.1657060123.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/221/612/spring-mix__48124.1657060123.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/221/612/spring-mix__48124.1657060123.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/221/612/spring-mix__48124.1657060123.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1" alt="Spring Mix Hookah Mix Ratios" title="Spring Mix Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/221/611/spring-mix-ratios__96934.1657058562.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=221" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=221" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="221" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Spring Mix,$25.00
" href="/spring-mix/">
                                                <span>Spring Mix</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Spring Mix rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY BAYRAM ALIYEV HookahBattle Hall-Of-Famer, Saint Petersburg, RU HookahBattle Hall-Of-Famer and fiero Ambassador, Bayram Aliyev, is capturing the essence of Spring with his hookah mix named…you guessed it, Spring Mix. Bayram’s...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=221" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="221" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="234" data-test="card-234">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/summer-kiss-mix/" class="card-figure__link" aria-label="Summer Kiss,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/234/655/summer-kiss_1__71120.1676598523.png?c=1" alt="Summer Kiss Hookah Flavor Mix" title="Summer Kiss Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/234/655/summer-kiss_1__71120.1676598523.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1" alt="Summer Kiss Hookah Flavor Mix Ratios" title="Summer Kiss Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/234/653/summer-kiss-ratios_1_1__99425.1676598522.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=234" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=234" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="234" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Summer Kiss,$25.00
" href="/summer-kiss-mix/">
                                                <span>Summer Kiss</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Summer Kiss rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY YAZAN "Z" KHUDARI Cloudz Hookah Lounge Millbrae &amp; San Jose, CA, USA Here’s a new and exciting combination of flavor for your bowl that will remind you of a tropical refreshment. Summer Kiss, by Hookah Master Yazan "Z" Khudari of...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=234" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="234" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="260" data-test="card-260">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/sweet-n-breezy-mix/" class="card-figure__link" aria-label="Sweet N' Breezy,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1" alt="Sweet N' Breezy Hookah Mix" title="Sweet N' Breezy Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/260/782/Mix-sweet-n-breezy__89862.1706732213.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1" alt="Sweet N' Breezy Hookah Mix Ratios" title="Sweet N' Breezy Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/260/783/sweet_n_breezy-ratios__65531.1706732213.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=260" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=260" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="260" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Sweet N' Breezy,$25.00
" href="/sweet-n-breezy-mix/">
                                                <span>Sweet N' Breezy</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Sweet N' Breezy rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Sam fiero San Diego, CA, USA Sam at fiero chose this Staff Pick as it's one of his all-time favorites to share. The combination of 50% Mandarin Mint, 25% White Gummi Bear and 25% Red Gummi Bear pops off with bright fruit flavor and has a...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=260" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="260" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="265" data-test="card-265">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/trilogy-mix/" class="card-figure__link" aria-label="Trilogy Mix,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1" alt="Trilogy Hookah Mix" title="Trilogy Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/265/807/Trilogy_Mix__94095.1718319440.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1" alt="Trilogy Hookah Mix Ratios" title="Trilogy Hookah Mix Ratios" data-sizes="auto" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/265/808/TRILOGY_MIX-scream-ratios__91896.1718319440.png?c=1 2560w" class="lazyload card-image img-responsive">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=265" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=265" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="265" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Trilogy Mix,$25.00
" href="/trilogy-mix/">
                                                <span>Trilogy Mix</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Trilogy Mix rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;"> BY Tim&nbsp; Trilogy Hookah Lounge Glendale, AZ, USA Good things come in threes when you’re in Trilogy’s house. Located in Glendale, AZ, Trilogy Hookah Lounge is serving up a 3-way berry combo of 40% Blueberry N’ice, 40%...</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=265" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="265" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="267" data-test="card-267">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/twisted-peach-mix/" class="card-figure__link" aria-label="Twisted Peach,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1" alt="Twisted Peach Hookah Flavor Mix" title="Twisted Peach Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/267/804/mix_twisted_peach__66982.1718314418.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1" alt="Twisted Peach Hookah Flavor Mix Ratios" title="Twisted Peach Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/267/806/TWISTED_PEACH-scream-ratios__07696.1718314418.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=267" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=267" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="267" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Twisted Peach,$17.00
" href="/twisted-peach-mix/">
                                                <span>Twisted Peach</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Twisted Peach rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY Michael Minelli Newington, CT, USA Powerhouse singer from Newington, CT, Michael Minelli, is channeling the creativity while puffing on his mix Twisted Peach. Blend 40% Lemon Mint with 60% Peaches N’ Honey to create a perfect session of…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=267" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="267" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="222" data-test="card-222">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/weekend-sunset-mix/" class="card-figure__link" aria-label="Weekend Sunset,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1" alt="Weekend Sunset Hookah Mix" title="Weekend Sunset Hookah Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/222/615/Weekend-Sunset-mix__56391.1657058730.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1" alt="Weekend Sunset Hookah Mix Ratios" title="Weekend Sunset Hookah Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/222/613/weekend-sunset-ratios__49891.1657058729.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=222" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=222" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="222" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Weekend Sunset,$25.00
" href="/weekend-sunset-mix/">
                                                <span>Weekend Sunset</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Weekend Sunset rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY MR. JERSEY Instagram: @iam_mrjersey Introducing a featured hookah tobacco fan mix by Instagrammer and fiero Fan, Mr. Jersey, that he calls the Weekend Sunset! We tested this mix in our R&amp;D lab and it was an immediate winner. Combining...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=222" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="222" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="235" data-test="card-235">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/wgbreezy-mix/" class="card-figure__link" aria-label="WGBreezy,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1" alt="WGBreezy Hookah Flavor Mix" title="WGBreezy Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/235/658/wgbreezy-mix_1__81346.1676599245.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1" alt="WGBreezy Hookah Flavor Mix Ratios" title="WGBreezy Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/235/702/wgbreezy-pouches__71921.1696287580.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=235" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=235" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="235" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="WGBreezy,$17.00
" href="/wgbreezy-mix/">
                                                <span>WGBreezy</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="WGBreezy rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY SAM HANHAN fiero San Diego, CA, USA This Staff-Pick hookah mix is by Sam Hanhan, fiero's Head of Marketing. We're amplifying the pineapple-orange notes of WGB with the cool, refreshingly tart flavors of Mandarin Mint (Citrus Mint). Sam says…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=235" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="235" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="248" data-test="card-248">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/what-the-fakh-mix/" class="card-figure__link" aria-label="What the Fakh?!,$25.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1" alt="What The Fakh?! Hookah Flavor Mix" title="What The Fakh?! Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/248/690/what-the-fakh-mix__95054.1691694584.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1" alt="What The Fakh?! Hookah Flavor Mix Ratios" title="What The Fakh?! Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/248/691/what-the-fakh-mix-ratios__54367.1691694585.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=248" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=248" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="248" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="What the Fakh?!,$25.00
" href="/what-the-fakh-mix/">
                                                <span>What the Fakh?!</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="What the Fakh?! rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;">BY ROB PECORARO Hookah Reviewer, Las Vegas, NV, USA Hookah Reviewer, Rob Pecoraro of Las Vegas, NV, USA, describes this hookah mix as the fall season forever immortalized through smoke!". What The Fakh is endless apple and mint, a splash of...…</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$25.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=248" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="248" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            <li class="product">
                                <article class="card
    " data-product-id="262" data-test="card-262">
                                    <figure class="card-figure">
                                        <div class="halo-product-badge"></div>
                                        <a href="/whatta-peach-mix/" class="card-figure__link" aria-label="Whatta Peach,$17.00
">
                                            <div class="card-img-container card-img-hover">
                                                <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/570x633/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1" alt="Whatta Peach Hookah Flavor Mix" title="Whatta Peach Hookah Flavor Mix" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/262/789/Mix-Whatta-Peach__45238.1706812774.png?c=1 2560w" class="card-image lazyautosizes lazyloaded" loading="lazy" sizes="258px">
                                                <span class="product-additional">
                        <img src="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1" alt="Whatta Peach Hookah Flavor Mix Ratios" title="Whatta Peach Hookah Flavor Mix Ratios" data-sizes="auto" srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 2560w" data-srcset="https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/80w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 80w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/160w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 160w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/320w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 320w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/640w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 640w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/960w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 960w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1280w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 1280w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/1920w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 1920w, https://cdn11.bigcommerce.com/s-jpzrvmsc69/images/stencil/2560w/products/262/788/whatta_peach-ratios__25266.1706812773.png?c=1 2560w" class="card-image img-responsive lazyautosizes lazyloaded" sizes="258px">
                      </span>
                                            </div>
                                        </a>
                                        <figcaption class="card-figcaption">
                                            <div class="card-figcaption-top">
                                                <button href="/wishlist.php?action=add&amp;product_id=262" class="wishlist button">
                        <span class="icon-action">
                          <svg class="icon">
                            <use xlink:href="#icon-wishlist"></use>
                          </svg>
                        </span>
                                                    <span class="text">Add Wish List</span>
                                                </button>
                                            </div>
                                            <div class="card-figcaption-bottom">
                                                <a href="/cart.php?action=add&amp;product_id=262" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="262" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                                <span class="product-status-message aria-description--hidden">The item has been added</span>
                                            </div>
                                        </figcaption>
                                    </figure>
                                    <div class="card-body">
                                        <h3 class="card-title card-ellipsis">
                                            <a aria-label="Whatta Peach,$17.00
" href="/whatta-peach-mix/">
                                                <span>Whatta Peach</span>
                                            </a>
                                        </h3>
                                        <p class="card-text" data-test-info-type="productRating">
                    <span class="rating--small">
                      <span class="product-ratings" role="img" aria-label="Whatta Peach rating is 0 of 5">
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                        <span class="icon icon--ratingEmpty">
                          <svg>
                            <use xlink:href="#icon-star"></use>
                          </svg>
                        </span>
                      </span>
                    </span>
                                        </p>
                                        <div class="card-desc">
                                            <p style="-webkit-box-orient: vertical;"> BY Abraham fiero San Diego, CA, USA The Hookah Lounge in Clearwater, Florida gave Abraham in our Sales Dept this mixing tip which is a favorite among their staff and customers. The flavors of 50% Hola Peaches and 50% Red Gummi Bear come...</p>
                                        </div>
                                        <div class="card-text" data-test-info-type="price">
                                            <div class="price-section price-section--withoutTax rrp-price--withoutTax" style="display: none;"> MSRP: <span data-product-rrp-price-without-tax="" class="price price--rrp"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax non-sale-price--withoutTax price-none no-retail-price" style="display: none;">
                                                <span class="non-sale-price-label">Was:</span>
                                                <span data-product-non-sale-price-without-tax="" class="price price--non-sale"></span>
                                            </div>
                                            <div class="price-section price-section--withoutTax no-retail-price">
                                                <span class="price-label"></span>
                                                <span class="price-now-label" style="display: none;"> Now: </span>
                                                <span data-product-price-without-tax="" class="price price--withoutTax">$17.00</span>
                                            </div>
                                        </div>
                                        <div class="card-figcaption-bottom">
                                            <a href="/cart.php?action=add&amp;product_id=262" data-event-type="product-click" data-button-type="add-cart" class="button button--small card-figcaption-button halo-add-to-cart" data-product-id="262" data-wait-message="Adding to cart…">+ Add to Cart</a>
                                            <span class="product-status-message aria-description--hidden">The item has been added</span>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </form>
                    <div class="category__showMoreBtn">
                        <a href="javascript:void(0)" class="button">Show More</a>
                    </div>
                    <div class="category__pagination">
                        <nav class="pagination" aria-label="pagination" data-products="" data-total="41">
                            <ul class="pagination-list u-hidden"></ul>
                        </nav>
                    </div>
                    <div data-content-region="category_below_content">
                        <div data-layout-id="899246f3-cc86-4bc8-b40c-ac4a26553c7b">
                            <div data-sub-layout-container="032120b6-8f9b-4f73-82d6-a6d3e07ad265" data-layout-name="Layout">
                                <style data-container-styling="032120b6-8f9b-4f73-82d6-a6d3e07ad265">
                                    [data-sub-layout-container="032120b6-8f9b-4f73-82d6-a6d3e07ad265"] {
                                        box-sizing: border-box;
                                        display: flex;
                                        flex-wrap: wrap;
                                        z-index: 0;
                                        position: relative;
                                    }

                                    [data-sub-layout-container="032120b6-8f9b-4f73-82d6-a6d3e07ad265"]:after {
                                        background-position: center center;
                                        background-size: cover;
                                        z-index: auto;
                                        display: block;
                                        position: absolute;
                                        top: 0;
                                        left: 0;
                                        bottom: 0;
                                        right: 0;
                                    }
                                </style>
                                <div data-sub-layout="311cb3c6-8bf5-4c85-961c-31d490c731d6">
                                    <style data-column-styling="311cb3c6-8bf5-4c85-961c-31d490c731d6">
                                        [data-sub-layout="311cb3c6-8bf5-4c85-961c-31d490c731d6"] {
                                            display: flex;
                                            flex-direction: column;
                                            box-sizing: border-box;
                                            flex-basis: 100%;
                                            max-width: 100%;
                                            z-index: 0;
                                            justify-content: center;
                                            padding-right: 10.5px;
                                            padding-left: 10.5px;
                                            position: relative;
                                        }

                                        [data-sub-layout="311cb3c6-8bf5-4c85-961c-31d490c731d6"]:after {
                                            background-position: center center;
                                            background-size: cover;
                                            z-index: auto;
                                            display: block;
                                            position: absolute;
                                            top: 0;
                                            left: 0;
                                            bottom: 0;
                                            right: 0;
                                        }

                                        @media only screen and (max-width: 700px) {
                                            [data-sub-layout="311cb3c6-8bf5-4c85-961c-31d490c731d6"] {
                                                flex-basis: 100%;
                                                max-width: 100%;
                                            }
                                        }
                                    </style>
                                    <div data-widget-id="51856468-5f0d-4a60-b589-3c67bbc69bf0" data-placement-id="2467e9f8-7a97-4706-a337-fcf0cbca6aa4" data-placement-status="ACTIVE">
                                        <div class="categoryFAQ">
                                            <h2>MIX SERIES FAQ</h2>
                                            <p>
                                                <strong>Do the hookah mixes come pre-mixed?</strong>
                                                <br> No, each mix is comprised of separate fiero hookah tobacco flavors and should be used as a template when mixing in your own hookah practices. These flavors will come in individual 100g pouches of the corresponding flavor that is featured in each mix.
                                            </p>
                                            <p>
                                                <strong>How do I mix hookah flavors?</strong>
                                                <br> The easiest way to mix flavors is by sectioning. Think of your bowl as a pie, making up 100% inside of it. Each flavor is a slice, or section of your bowl. If you add half Watermelon, then you have 50% remaining. Add a touch of mint and now there is 30% remaining. Finally, in the last open section, add in Guava. That's all there is to it!
                                            </p>
                                            <p>
                                                <strong>I made an awesome mix! How can I share it with fiero?</strong>
                                                <br> The best way to submit a flavor mix is by tagging us on Instagram or if you do not have an <a href="https://www.instagram.com/fiero/" target="_blank">Instagram</a> account you can <a href="/contact-us">email us</a> your mix.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <div data-content-region="category_below_bottom_banner"></div>
        <div data-content-region="category_below_reviews_block"></div>
        <div id="modal" class="modal" data-reveal="" data-prevent-quick-search-close="">
            <button class="modal-close" type="button" title="Close" aria-label="Close">
                <span class="aria-description--hidden">Close</span>
                <svg class="icon" aria-hidden="true">
                    <use xlink:href="#icon-close"></use>
                </svg>
            </button>
            <div class="modal-content"></div>
            <div class="loadingOverlay" style="display: none;"></div>
        </div>
        <div id="alert-modal" class="modal modal--alert modal--small" data-reveal="" data-prevent-quick-search-close="">
            <div class="swal2-icon swal2-error swal2-icon-show">
      <span class="swal2-x-mark">
        <span class="swal2-x-mark-line-left"></span>
        <span class="swal2-x-mark-line-right"></span>
      </span>
            </div>
            <div class="modal-content"></div>
            <div class="button-container">
                <button type="button" class="confirm button" data-reveal-close="">OK</button>
            </div>
            <div class="loadingOverlay" style="display: none;"></div>
        </div>
    </main>
@endsection


@section('style')

{{--    <link rel="stylesheet" href="{{ asset('css/product.css') }}">    --}}
{{--    <link rel="stylesheet" href="{{ asset('css/product.css') }}">--}}
<link rel="stylesheet" href="/css/product.css">
@endsection

@section('scripts')

@endsection
