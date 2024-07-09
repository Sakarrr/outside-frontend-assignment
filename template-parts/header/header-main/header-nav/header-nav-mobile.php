<?php
$arrow_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13" fill="none">
<path fill-rule="evenodd" clip-rule="evenodd" d="M7.73777 4.74467e-07L13.2929 5.55512L14 6.26223L13.2929 6.96934L7.73777 12.5245L6.32356 11.1102L10.2479 7.1859L0.550026 7.1859L0.550026 5.1859L10.0952 5.1859L6.32356 1.41421L7.73777 4.74467e-07Z" fill="black"/>
</svg>';

$btn_close ='  <svg class="btn-close hidden" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
        <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 0.719689 -0.694297 0.719689 1.36255 1.11234)" stroke="#0F234C" stroke-linecap="round"/>
        <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 -0.719689 0.694297 0.719689 1.36255 17.1226)" stroke="#0F234C" stroke-linecap="round"/>
    </svg>';
?>

<div class="mobile-nav hidden">
    <svg class="btn-hamburger" xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17" fill="none">
        <line x1="0.5" y1="0.5" x2="21.5" y2="0.5" stroke="#0F234C" stroke-linecap="round"/>
        <line x1="0.5" y1="8.5" x2="21.5" y2="8.5" stroke="#0F234C" stroke-linecap="round"/>
        <line x1="0.5" y1="16.5" x2="21.5" y2="16.5" stroke="#0F234C" stroke-linecap="round"/>
    </svg>
    <?php echo $btn_close ?>
    <div class="mobile-menu">
        <div class="splide slider1">
            <div class="splide__track" >
                <div class="splide-header">
                    <span>Best Seller</span>
                    <a href="#">Shop all</a>
                </div>
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="product-card">
                            <div class="product-card-image">
                                <img src=<?php echo get_template_directory_uri().'/assets/images/image-1.png'?> />
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="product-card">
                            <div class="product-card-image">
                                <img src=<?php echo get_template_directory_uri().'/assets/images/image-2.png'?> />
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="product-card">
                            <div class="product-card-image">
                                <img src=<?php echo get_template_directory_uri().'/assets/images/image-3.png'?> />
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="product-card">
                            <div class="product-card-image">
                                <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <ul>
            <li data-target="mealtime-content">Mealtime <?php echo $arrow_icon ?></li>
            <li data-target="playtime-content">Playtime <?php echo $arrow_icon ?></li>
            <li data-target="bathtime-content">Bathtime <?php echo $arrow_icon ?></li>
            <li data-target="playboxes-content">The Play Boxes <?php echo $arrow_icon ?></li>
            <li>Gifts <?php echo $arrow_icon ?></li>
            <li>Best Sellers <?php echo $arrow_icon ?></li>
            <a>Shop All</a>
        </ul>
    </div>

    <div id="content" class="sub-menu-content">
        <div id="mealtime-content" class="content-section">
            <div class="header">
                <svg class="sub-btn-back header-left" xmlns="http://www.w3.org/2000/svg" width="11" height="22" viewBox="0 0 11 22" fill="none">
                    <path d="M9.98608 0.677094L1.23608 10.6771L9.98608 20.6771" stroke="#0F234C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="header-left">Shop Mealtime</h3>
                <svg class="sub-btn-close header-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 0.719689 -0.694297 0.719689 1.36255 1.11234)" stroke="#0F234C" stroke-linecap="round"/>
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 -0.719689 0.694297 0.719689 1.36255 17.1226)" stroke="#0F234C" stroke-linecap="round"/>
                </svg>
            </div>

            <ul>
                <li>High Chair</li>
                <li>Booster</li>
                <li>Tableware</li>
                <li>Kitchenware</li>
                <li>Mealtime Accessories</li>
                <li>Bundle & Save</li>
                <a href="#">All Mealtime</a>
            </ul>

                <div class="slider-header">
                    <h4>Featured Mealtime</h4>
                    <a>Shop All</a>
                </div>
                <div class="slider-content content">
                    <div class="splide slider1">
                        <div class="splide__track" >
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-1.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>The Chair</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-2.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>First Bites Full Kit</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-3.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>Suction Plate</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>Little Cup</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>The Chair</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="product-card">
                                        <div class="product-card-image">
                                            <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                        </div>
                                        <div class="product-card-content">
                                            <span>Best Seller</span>
                                            <h5>The Chair</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div></div>
        <div id="playtime-content" class="content-section">
            <div class="header">
                <svg class="sub-btn-back header-left" xmlns="http://www.w3.org/2000/svg" width="11" height="22" viewBox="0 0 11 22" fill="none">
                    <path d="M9.98608 0.677094L1.23608 10.6771L9.98608 20.6771" stroke="#0F234C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="header-left">Shop Playtime</h3>
                <svg class="sub-btn-close header-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 0.719689 -0.694297 0.719689 1.36255 1.11234)" stroke="#0F234C" stroke-linecap="round"/>
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 -0.719689 0.694297 0.719689 1.36255 17.1226)" stroke="#0F234C" stroke-linecap="round"/>
                </svg>
            </div>

            <ul>
                <li>High Chair</li>
                <li>Booster</li>
                <li>Tableware</li>
                <li>Bundle & Save</li>
                <a href="#">All Playtime</a>
            </ul>

            <div class="slider-header">
                <h4>Featured Mealtime</h4>
                <a>Shop All</a>
            </div>
            <div class="slider-content content">
                <div class="splide slider1">
                    <div class="splide__track" >
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-1.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>The Chair</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-2.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>First Bites Full Kit</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-3.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>Suction Plate</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>Little Cup</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>TLittle Cup</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>Little Cup</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>Little Cup</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-4.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>Little Cup</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div></div>
        <div id="bathtime-content" class="content-section">
            <div class="header">
                <svg class="sub-btn-back header-left" xmlns="http://www.w3.org/2000/svg" width="11" height="22" viewBox="0 0 11 22" fill="none">
                    <path d="M9.98608 0.677094L1.23608 10.6771L9.98608 20.6771" stroke="#0F234C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="header-left">Shop Bathtime</h3>
                <svg class="sub-btn-close header-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 0.719689 -0.694297 0.719689 1.36255 1.11234)" stroke="#0F234C" stroke-linecap="round"/>
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 -0.719689 0.694297 0.719689 1.36255 17.1226)" stroke="#0F234C" stroke-linecap="round"/>
                </svg>
            </div>

            <ul>
                <li>High Chair</li>
                <li>Booster</li>
                <li>Tableware</li>
                <li>Kitchenware</li>
                <li>Mealtime Accessories</li>
                <li>Bundle & Save</li>
                <a href="#">All Bathtime</a>
            </ul>

            <div class="slider-header">
                <h4>Featured Bathtime</h4>
                <a>Shop All</a>
            </div>
            <div class="slider-content content">
                <div class="splide slider1">
                    <div class="splide__track" >
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-1.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>The Chair</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-2.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>The Chair</h5>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="product-card">
                                    <div class="product-card-image">
                                        <img src=<?php echo get_template_directory_uri().'/assets/images/image-3.png'?> />
                                    </div>
                                    <div class="product-card-content">
                                        <span>Best Seller</span>
                                        <h5>The Chair</h5>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div></div>
        <div id="playboxes-content" class="playboxes-content content-section">
            <div class="header">
                <svg class="sub-btn-back header-left" xmlns="http://www.w3.org/2000/svg" width="11" height="22" viewBox="0 0 11 22" fill="none">
                    <path d="M9.98608 0.677094L1.23608 10.6771L9.98608 20.6771" stroke="#0F234C" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="header-left">Shop Play Boxes</h3>
                <svg class="sub-btn-close header-right" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 0.719689 -0.694297 0.719689 1.36255 1.11234)" stroke="#0F234C" stroke-linecap="round"/>
                    <line x1="0.5" y1="-0.5" x2="21.9059" y2="-0.5" transform="matrix(0.694297 -0.719689 0.694297 0.719689 1.36255 17.1226)" stroke="#0F234C" stroke-linecap="round"/>
                </svg>
            </div>

            <ul>
                <li>Play Subscription</li>
                <li>Newborn Box</li>
                <li>Gift Play Boxes</li>
                <li>Redeem Gift</li>
                <a href="#">All Play Boxes</a>
            </ul>

            <div class="tabbed-content">
                <div class="header">
                <a href="#" class="active">Year 1</a>
                <a href="#">Year 2</a>
            </div>
                <div class="contents">
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-1.png'?> />
                    <p>0-12 weeks</p>
                </div>
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-2.png'?> />
                    <p>3-4 mos</p>
                </div>
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-3.png'?> />
                    <p>5-6 mos</p>
                </div>
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-4.png'?> />
                    <p>7-8 mos</p>
                </div>
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-5.png'?> />
                    <p>9-10 mos</p>
                </div>
                <div class="content">
                    <img src=<?php echo get_template_directory_uri().'/assets/images/box-6.png'?> />
                    <p>11-12 mos</p>
                </div>
            </div>
            </div>

            <div class="gifts-subs-content">
                <div class="header">
                    <h4>Play Box Gifts & Subscriptions</h4>
                </div>
                <div class="content">
                    <ul>
                        <li>
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src=<?php echo get_template_directory_uri().'/assets/images/playbox-2.png'?> />
                                </div>
                                <div class="product-card-content">
                                    <span>Best Seller</span>
                                    <h4>First Bites Full Kit</h4>
                                    <p>$40/month</p>
                                </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-card-image">
                                    <img src=<?php echo get_template_directory_uri().'/assets/images/playbox-1.png'?> />
                                </div>
                                <div class="product-card-content">
                                    <span>Best Seller</span>
                                    <h4>First Bites Full Kit</h4>
                                    <p>$40/month</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
</div>