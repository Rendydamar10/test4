<?php

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
  header("location: " . base_url('login-member'));
  exit();
}

?>
<div class="fusion-tb-header">
        <header
          class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling fusion-animated fusion-sticky-container"
          style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-right-small:10px;--awb-padding-left-small:20px;--awb-sticky-background-color:var(--awb-color1) !important;--awb-flex-wrap:wrap;"
          data-animationType="fadeInDown" data-animationDuration="1.0" data-animationOffset="top-into-view"
          data-transition-offset="0" data-scroll-offset="760" data-sticky-small-visibility="1"
          data-sticky-medium-visibility="1" data-sticky-large-visibility="1">
          <div
            class="fusion-builder-row fusion-row fusion-flex-align-items-center fusion-flex-justify-content-space-between fusion-flex-content-wrap"
            style="max-width:1331.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
            <div
              class="fusion-layout-column fusion_builder_column fusion-builder-column-0 fusion_builder_column_1_6 1_6 fusion-flex-column"
              style="--awb-bg-size:cover;--awb-width-large:16.666666666667%;--awb-margin-top-large:10px;--awb-spacing-right-large:11.52%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:11.52%;--awb-width-medium:65%;--awb-order-medium:1;--awb-spacing-right-medium:2.9538461538462%;--awb-spacing-left-medium:2.9538461538462%;--awb-width-small:33.333333333333%;--awb-order-small:2;--awb-spacing-right-small:5.76%;--awb-spacing-left-small:5.76%;">
              <div
                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                <div class="fusion-image-element "
                  style="text-align:center;--awb-max-width:150px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
                  <span
                    class=" has-fusion-standard-logo has-fusion-mobile-logo fusion-imageframe imageframe-none imageframe-1 hover-type-none"><a
                      class="fusion-no-lightbox" href="https://www.mymealcatering.com/" target="_self"><img
                        decoding="async"
                        src="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png"
                        srcset="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png 1x, 2x"
                        style="max-height:54px;height:auto;" width="200" height="54"
                        class="img-responsive fusion-standard-logo disable-lazyload" alt="MyMeal Catering Logo" /><img
                        decoding="async"
                        src="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png"
                        srcset="https://www.mymealcatering.com/wp-content/uploads/2015/08/logo-mymealcatering-2-e1442918459405.png 1x, 2x"
                        style="max-height:54px;height:auto;" width="200" height="54"
                        class="img-responsive fusion-mobile-logo disable-lazyload"
                        alt="MyMeal Catering Logo" /></a></span></div>
              </div>
            </div>
            <div
              class="fusion-layout-column fusion_builder_column fusion-builder-column-1 fusion_builder_column_2_3 2_3 fusion-flex-column"
              style="--awb-bg-size:cover;--awb-width-large:66.666666666667%;--awb-margin-top-large:10px;--awb-spacing-right-large:2.88%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:2.88%;--awb-width-medium:5%;--awb-order-medium:0;--awb-spacing-right-medium:38.4%;--awb-spacing-left-medium:38.4%;--awb-width-small:33.333333333333%;--awb-order-small:1;--awb-spacing-right-small:5.76%;--awb-spacing-left-small:5.76%;">
              <div
                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-center fusion-content-layout-column">
                <nav
                  class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading collapse-enabled awb-menu_dropdown awb-menu_expand-right awb-menu_transition-slide_up fusion-no-small-visibility"
                  style="--awb-font-size:var(--awb-custom_typography_1-font-size);--awb-text-transform:var(--awb-custom_typography_1-text-transform);--awb-gap:2em;--awb-align-items:center;--awb-justify-content:center;--awb-color:var(--awb-custom_color_7);--awb-letter-spacing:var(--awb-custom_typography_1-letter-spacing);--awb-active-color:var(--awb-color4);--awb-active-border-bottom:2px;--awb-active-border-color:var(--awb-color4);--awb-submenu-color:var(--awb-color4);--awb-submenu-sep-color:rgba(0,0,0,0);--awb-submenu-border-radius-top-left:20px;--awb-submenu-border-radius-top-right:20px;--awb-submenu-border-radius-bottom-right:20px;--awb-submenu-border-radius-bottom-left:20px;--awb-submenu-active-bg:var(--awb-color4);--awb-submenu-active-color:var(--awb-color1);--awb-submenu-space:20px;--awb-submenu-font-size:var(--awb-typography3-font-size);--awb-submenu-text-transform:var(--awb-typography3-text-transform);--awb-icons-color:var(--awb-custom_color_7);--awb-main-justify-content:flex-start;--awb-mobile-bg:var(--awb-color1);--awb-mobile-nav-items-height:55;--awb-mobile-active-bg:var(--awb-color4);--awb-mobile-active-color:var(--awb-color1);--awb-mobile-trigger-font-size:28px;--awb-trigger-padding-top:0px;--awb-trigger-padding-right:0px;--awb-trigger-padding-bottom:0px;--awb-trigger-padding-left:0px;--awb-mobile-trigger-color:var(--awb-color3);--awb-mobile-trigger-background-color:var(--awb-color1);--awb-mobile-nav-trigger-bottom-margin:20px;--awb-mobile-sep-color:var(--awb-color1);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-box-shadow: 10px 30px -8px hsla(var(--awb-custom_color_1-h),var(--awb-custom_color_1-s),var(--awb-custom_color_1-l),calc(var(--awb-custom_color_1-a) - 80%));;--awb-fusion-font-family-typography:inherit;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:400;--awb-fusion-font-family-submenu-typography:var(--awb-typography3-font-family);--awb-fusion-font-weight-submenu-typography:var(--awb-typography3-font-weight);--awb-fusion-font-style-submenu-typography:var(--awb-typography3-font-style);--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
                  aria-label="Header Main Menu" data-breakpoint="1024" data-count="0" data-transition-type="center-grow"
                  data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
                    aria-expanded="false" aria-controls="menu-header-main-menu"><span
                      class="awb-menu__m-toggle-inner"><span class="collapsed-nav-text"><span
                          class="screen-reader-text">Toggle Navigation</span></span><span
                        class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
                          class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
                          class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                  <ul id="menu-header-main-menu" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                    <li id="menu-item-64364"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-64364 awb-menu__li awb-menu__main-li awb-menu__main-li_regular fusion-megamenu-menu fusion-has-all-widgets"
                      data-item-id="64364"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span>
                        <a
                        href="#" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Home</span>
                        </a><button type="button"
                        aria-label="Open submenu of Paket Catering" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <div
                        class="fusion-megamenu-wrapper fusion-columns-4 columns-per-row-4 columns-4 col-span-12 fusion-megamenu-fullwidth">
                        <div class="row">
                          <div class="fusion-megamenu-holder" style="width:1079px;" data-width="1079px">
                            <ul class="fusion-megamenu">
                              <li id="menu-item-64365"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64365 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-1.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-4" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <style>
                                        .megmun a {
                                          font-size: 16px;
                                          color: #000000;
                                        }

                                        .megmun a:hover {
                                          text-decoration: underline;
                                        }
                                      </style>
                                      <div class="megmun">
                                        <p><a href="https://www.mymealcatering.com/catering-isolasi-mandiri">Catering
                                            Isolasi Mandiri</a></p>
                                        <p><a href="https://www.mymealcatering.com/product-services/baby-kid-meal">Baby
                                            &amp; Kids Meal</a></p>
                                        <p><a href="https://www.mymealcatering.com/catering-perusahaan">Catering
                                            Perusahaan</a></p>
                                        <p><a
                                            href="https://www.mymealcatering.com/product-category/organic-shop">Organic
                                            Shop</a></p>
                                        <p><a href="https://www.eatnow.id/">EatNow Healthy Ready Meal</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64366"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64366 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-5" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/medical-package"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Medical-Package-Mega-Menu-2.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Medical Package</h3>
                                          <p>Catering makanan sehat untuk kebutuhan medis</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64367"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64367 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-6" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/healthy-personal-package"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Healthy-Personal-Mega-Menu-3.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Healthy Personal</h3>
                                          <p>Catering makanan sehat untuk sehari-hari</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li id="menu-item-64368"
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64368 awb-menu__li fusion-megamenu-submenu fusion-megamenu-submenu-notitle fusion-megamenu-columns-4 col-lg-3 col-md-3 col-sm-3"
                                style="background-image: url(https://www.mymealcatering.com/wp-content/uploads/Background-Mega-Menu-2.webp);">
                                <div class="fusion-megamenu-widgets-container second-level-widget">
                                  <div id="text-7" class="widget widget_text"
                                    style="border-style: solid;border-color:transparent;border-width:0px;">
                                    <div class="textwidget">
                                      <div class="megmun">
                                        <a href="https://www.mymealcatering.com/product-services/weight-management"
                                          style="text-align:center; display:block;"><br />
                                          <img data-lazyloaded="1"
                                            src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxODciIGhlaWdodD0iMTQxIiB2aWV3Qm94PSIwIDAgMTg3IDE0MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgc3R5bGU9ImZpbGw6I2NmZDRkYjtmaWxsLW9wYWNpdHk6IDAuMTsiLz48L3N2Zz4="
                                            width="187" height="141" decoding="async"
                                            data-src="https://www.mymealcatering.com/wp-content/uploads/Weight-Management-Mega-Menu-4.webp"
                                            alt="Medical Package" style="display:block; margin:auto;" /></p>
                                          <h3>Weight Management</h3>
                                          <p>Catering diet sehat untuk manajemen berat badan</p>
                                          <p>
                                        </a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                          <div style="clear:both;"></div>
                        </div>
                      </div>
                    </li>
                    <li id="menu-item-64129"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64129 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64129"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="#"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Kategori</span></a><button type="button"
                        aria-label="Open submenu of Promo" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-64130"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64130 awb-menu__li awb-menu__sub-li">
                          <a href="<?= base_url('diet-paleo') ?>"
                            class="awb-menu__sub-a"><span>Diet Paleo</span></a></li>
                        <li id="menu-item-64131"
                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64131 awb-menu__li awb-menu__sub-li">
                          <a href="<?= base_url('diet-dash') ?>"
                            class="awb-menu__sub-a"><span>Diet DASH</span></a></li>
                        <li id="menu-item-64132"
                          class="menu-item menu-item-type-post_type menu-item-object-post menu-item-64132 awb-menu__li awb-menu__sub-li">
                          <a href="<?= base_url('diet-keto') ?>"
                            class="awb-menu__sub-a"><span>Diet Keto</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-64375"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64375 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64375"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="#"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">About</span></a></li>
                   
                        <!-- <li id="menu-item-64377"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64377 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64377"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/articles"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Artikel</span></a>
                    </li> -->

                    <li id="menu-item-64373"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-64373 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64373"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span>
                        <button type="button"
                        aria-label="Open submenu of Tentang MyMeal" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-64374"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64374 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/hubungi-kami"
                            class="awb-menu__sub-a"><span>Kontak</span></a></li>
                        <li id="menu-item-64560"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64560 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/mengapa-langganan-mymeal"
                            class="awb-menu__sub-a"><span>Keunggulan MyMeal Catering</span></a></li>
                        <li id="menu-item-64562"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64562 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/visi-dan-misi"
                            class="awb-menu__sub-a"><span>Visi, Misi, Values &#038; Culture</span></a></li>
                        <li id="menu-item-64558"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64558 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/gallery" class="awb-menu__sub-a"><span>Galeri
                              Menu Catering Sehat</span></a></li>
                        <li id="menu-item-64563"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64563 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/testimonial"
                            class="awb-menu__sub-a"><span>Testimonial</span></a></li>
                        <li id="menu-item-64559"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64559 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/bisnis-katering"
                            class="awb-menu__sub-a"><span>Franchise Opportunities</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-64472"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64472 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64472"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span></li>
                  </ul>
                </nav>
                <nav
                  class="awb-menu awb-menu_row awb-menu_em-hover mobile-mode-collapse-to-button awb-menu_icons-left awb-menu_dc-yes mobile-trigger-fullwidth-off awb-menu_mobile-toggle awb-menu_indent-left mobile-size-full-absolute loading mega-menu-loading collapse-enabled awb-menu_dropdown awb-menu_expand-right awb-menu_transition-slide_up fusion-no-medium-visibility fusion-no-large-visibility"
                  style="--awb-font-size:var(--awb-custom_typography_1-font-size);--awb-text-transform:var(--awb-custom_typography_1-text-transform);--awb-gap:2em;--awb-align-items:flex-start;--awb-color:var(--awb-custom_color_7);--awb-letter-spacing:var(--awb-custom_typography_1-letter-spacing);--awb-active-color:var(--awb-color4);--awb-active-border-bottom:2px;--awb-active-border-color:var(--awb-color4);--awb-submenu-color:var(--awb-color4);--awb-submenu-sep-color:rgba(0,0,0,0);--awb-submenu-border-radius-top-left:20px;--awb-submenu-border-radius-top-right:20px;--awb-submenu-border-radius-bottom-right:20px;--awb-submenu-border-radius-bottom-left:20px;--awb-submenu-active-bg:var(--awb-color4);--awb-submenu-active-color:var(--awb-color1);--awb-submenu-space:20px;--awb-submenu-font-size:var(--awb-typography3-font-size);--awb-submenu-text-transform:var(--awb-typography3-text-transform);--awb-icons-color:var(--awb-custom_color_7);--awb-main-justify-content:flex-start;--awb-mobile-bg:var(--awb-color1);--awb-mobile-nav-items-height:55;--awb-mobile-active-bg:var(--awb-color4);--awb-mobile-active-color:var(--awb-color1);--awb-mobile-trigger-font-size:28px;--awb-trigger-padding-top:0px;--awb-trigger-padding-right:0px;--awb-trigger-padding-bottom:0px;--awb-trigger-padding-left:0px;--awb-mobile-trigger-color:var(--awb-color3);--awb-mobile-trigger-background-color:var(--awb-color1);--awb-mobile-nav-trigger-bottom-margin:20px;--awb-mobile-sep-color:var(--awb-color2);--awb-mobile-justify:flex-start;--awb-mobile-caret-left:auto;--awb-mobile-caret-right:0;--awb-box-shadow: 10px 30px -8px hsla(var(--awb-custom_color_1-h),var(--awb-custom_color_1-s),var(--awb-custom_color_1-l),calc(var(--awb-custom_color_1-a) - 80%));;--awb-fusion-font-family-typography:inherit;--awb-fusion-font-style-typography:normal;--awb-fusion-font-weight-typography:400;--awb-fusion-font-family-submenu-typography:var(--awb-typography3-font-family);--awb-fusion-font-weight-submenu-typography:var(--awb-typography3-font-weight);--awb-fusion-font-style-submenu-typography:var(--awb-typography3-font-style);--awb-fusion-font-family-mobile-typography:inherit;--awb-fusion-font-style-mobile-typography:normal;--awb-fusion-font-weight-mobile-typography:400;"
                  aria-label="Mobile Menu" data-breakpoint="1024" data-count="1" data-transition-type="center-grow"
                  data-transition-time="300"><button type="button" class="awb-menu__m-toggle awb-menu__m-toggle_no-text"
                    aria-expanded="false" aria-controls="menu-mobile-menu"><span class="awb-menu__m-toggle-inner"><span
                        class="collapsed-nav-text"><span class="screen-reader-text">Toggle Navigation</span></span><span
                        class="awb-menu__m-collapse-icon awb-menu__m-collapse-icon_no-text"><span
                          class="awb-menu__m-collapse-icon-open awb-menu__m-collapse-icon-open_no-text fa-bars fas"></span><span
                          class="awb-menu__m-collapse-icon-close awb-menu__m-collapse-icon-close_no-text fa-times fas"></span></span></span></button>
                  <ul id="menu-mobile-menu" class="fusion-menu awb-menu__main-ul awb-menu__main-ul_row">
                    <li id="menu-item-58396"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58396 awb-menu__li awb-menu__main-li awb-menu__li_button"
                      data-item-id="58396"><a href="https://www.mymealcatering.com/order-dan-konsultasi-gratis"
                        class="awb-menu__main-a awb-menu__main-a_button"><span
                          class="menu-text fusion-button button-default button-medium">Konsultasi Gratis
                          DISINI!</span></a></li>
                    <li id="menu-item-64099"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64099 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64099"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/cara-pesan-catering"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Cara Pesan
                          Catering</span></a></li>
                    <li id="menu-item-31702"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31702 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="31702"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/medical-package"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Catering Diet
                          Medis/Pantangan &#8211; Medical Package</span></a></li>
                    <li id="menu-item-31705"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-31705 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="31705"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/weight-management"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Weight
                          Management</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button
                        type="button" aria-label="Open submenu of Weight Management" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-31708"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31708 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/south-beach-diet"
                            class="awb-menu__sub-a"><span>Catering Diet South Beach</span></a></li>
                        <li id="menu-item-31706"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31706 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/atkins-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Atkin</span></a></li>
                        <li id="menu-item-31709"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31709 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/keto-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Keto</span></a></li>
                        <li id="menu-item-31707"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-31707 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-services/weight-management/mayo-diet"
                            class="awb-menu__sub-a"><span>Catering Diet Mayo</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58383"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58383 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58383"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/healthy-personal-package"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Healthy
                          Personal</span></a></li>
                    <li id="menu-item-58711"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58711 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58711"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services/baby-kid-meal"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Baby &#038; Kids
                          Meal</span></a></li>
                    <li id="menu-item-58385"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58385 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58385"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/product-services"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Paket Lain</span><span
                          class="awb-menu__open-nav-submenu-hover"></span></a><button type="button"
                        aria-label="Open submenu of Paket Lain" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-58386"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58386 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/catering-isolasi-mandiri"
                            class="awb-menu__sub-a"><span>Catering Isolasi Mandiri</span></a></li>
                        <li id="menu-item-58387"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58387 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/catering-perusahaan"
                            class="awb-menu__sub-a"><span>Catering Perusahaan (Rumah Sakit, Karyawan, Event,
                              Sekolah)</span></a></li>
                        <li id="menu-item-58389"
                          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-58389 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.eatnow.id" class="awb-menu__sub-a"><span>EatNow Healthy RTE
                              Meal</span></a></li>
                        <li id="menu-item-61700"
                          class="menu-item menu-item-type-custom menu-item-object-custom menu-item-61700 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/product-category/organic-shop"
                            class="awb-menu__sub-a"><span>Organic Shop</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58379"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58379 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58379"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/promo"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Promo</span></a></li>
                    <li id="menu-item-64098"
                      class="menu-item menu-item-type-custom menu-item-object-custom menu-item-64098 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="64098"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="#" class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Ultimate Diet
                          Guide</span></a></li>
                    <li id="menu-item-58391"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58391 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58391"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/articles"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Artikel</span></a>
                    </li>
                    <li id="menu-item-58390"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-58390 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58390"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/about"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Tentang
                          MyMeal</span><span class="awb-menu__open-nav-submenu-hover"></span></a><button type="button"
                        aria-label="Open submenu of Tentang MyMeal" aria-expanded="false"
                        class="awb-menu__open-nav-submenu_mobile awb-menu__open-nav-submenu_main"></button>
                      <ul class="awb-menu__sub-ul awb-menu__sub-ul_main">
                        <li id="menu-item-58394"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58394 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/visi-dan-misi"
                            class="awb-menu__sub-a"><span>Visi, Misi, Values &#038; Culture</span></a></li>
                        <li id="menu-item-58393"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58393 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/about/mengapa-langganan-mymeal"
                            class="awb-menu__sub-a"><span>Keunggulan MyMeal Catering</span></a></li>
                        <li id="menu-item-62876"
                          class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62876 awb-menu__li awb-menu__sub-li">
                          <a href="https://www.mymealcatering.com/testimonial" class="awb-menu__sub-a"><span>Testimonial
                              – Catering Diet Sehat</span></a></li>
                      </ul>
                    </li>
                    <li id="menu-item-58395"
                      class="menu-item menu-item-type-post_type menu-item-object-page menu-item-58395 awb-menu__li awb-menu__main-li awb-menu__main-li_regular"
                      data-item-id="58395"><span
                        class="awb-menu__main-background-default awb-menu__main-background-default_center-grow"></span><span
                        class="awb-menu__main-background-active awb-menu__main-background-active_center-grow"></span><a
                        href="https://www.mymealcatering.com/hubungi-kami"
                        class="awb-menu__main-a awb-menu__main-a_regular"><span class="menu-text">Hubungi
                          Kami</span></a></li>
                  </ul>
                </nav>
              </div>
            </div>
            <div
              class="fusion-layout-column fusion_builder_column fusion-builder-column-2 fusion_builder_column_1_6 1_6 fusion-flex-column"
              style="--awb-bg-size:cover;--awb-width-large:16.666666666667%;--awb-margin-top-large:10px;--awb-spacing-right-large:11.52%;--awb-margin-bottom-large:10px;--awb-spacing-left-large:11.52%;--awb-width-medium:30%;--awb-order-medium:2;--awb-spacing-right-medium:6.4%;--awb-spacing-left-medium:6.4%;--awb-width-small:33.333333333333%;--awb-order-small:2;--awb-spacing-right-small:5.76%;--awb-spacing-left-small:5.76%;">
              <div
                class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
                <div style="text-align:center;">
                <a
                    class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-1 fusion-button-default-span fusion-button-default-type fusion-no-small-visibility"
                    style="--button_accent_color:var(--awb-color1);--button_accent_hover_color:var(--awb-color1);--button_border_hover_color:var(--awb-color1);--button-border-radius-top-left:0;--button-border-radius-top-right:0;--button-border-radius-bottom-right:0;--button-border-radius-bottom-left:0;--button_gradient_top_color:var(--awb-color3);--button_gradient_bottom_color:var(--awb-color3);--button_gradient_top_color_hover:#939900;--button_gradient_bottom_color_hover:#939900;--button_font_size:14px;"
                    target="_self" href="#"><span
                      class="fusion-button-text">Hai, <?= $username ?>!</span></a>
                    <a href="<?= base_url('member-logout') ?>">Logout</a></div>
              </div>
            </div>
          </div>
        </header>
      </div>