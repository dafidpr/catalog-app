<!--Hero slider-->
<div class="hero-slider_wrap fl-wrap">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <!--hero-slider-item-->
                <div class="swiper-slide">
                    <div class="hero-slider-item fl-wrap">
                        <div class="bg-tabs-wrap">
                            <div class="bg"  data-bg="<?= base_url('assets/frontend/') ?>images/bg/37.jpg"></div>
                            <div class="overlay op7"></div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Explore Best Places In City</h1>
                                </div>
                                <h3>Find some of the best tips from around the city from our partners and friends.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--hero-slider-item end-->
                <!--hero-slider-item-->
                <div class="swiper-slide">
                    <div class="hero-slider-item fl-wrap">
                        <div class="bg-tabs-wrap">
                            <div class="bg"  data-bg="<?= base_url('assets/frontend/') ?>images/bg/7.jpg"></div>
                            <div class="overlay op7"></div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Find Best Restaurants and Cafe</h1>
                                </div>
                                <h3>Find some of the best tips from around the city from our partners and friends.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--hero-slider-item end-->                                    
                <!--hero-slider-item-->
                <div class="swiper-slide">
                    <div class="hero-slider-item fl-wrap">
                        <div class="bg-tabs-wrap">
                            <div class="bg"  data-bg="<?= base_url('assets/frontend/') ?>images/bg/5.jpg"></div>
                            <div class="overlay op7"></div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>Visit Events and  Clubs</h1>
                                </div>
                                <h3>Find some of the best tips from around the city from our partners and friends.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!--hero-slider-item end-->                                    
            </div>
        </div>
    </div>
    <div class="listing-carousel_pagination hero_pagination">
        <div class="listing-carousel_pagination-wrap"></div>
    </div>
    <div class="slider-hero-button-prev shb color2-bg"><i class="fas fa-caret-left"></i></div>
    <div class="slider-hero-button-next shb color2-bg"><i class="fas fa-caret-right"></i></div>
</div>
<!--Hero slider end-->
<!--section  -->
<section>
    <div class="container big-container">
        <div class="section-title">
            <h2><span>Produk Katalog</span></h2>
            <span class="section-separator"></span>
        </div>
        <div class="grid-item-holder gallery-items fl-wrap">
            <!--  gallery-item-->
            <?php foreach ($product as $val) {?>
            <div class="gallery-item restaurant events">
                <!-- listing-item  -->
                <div class="listing-item">
                    <article class="geodir-category-listing fl-wrap">
                        <div class="geodir-category-img">
                            <a href="<?= base_url('home/detail/').$val->id?>" class="geodir-category-img-wrap fl-wrap">
                            <img src="<?= base_url('assets/backend/') ?>img/product/<?php echo $val->thumbnail?>" alt=""> 
                            </a>
                            <?php if ($val->sold == 'Y'){?>
                                <div class="geodir_status_date gsd_open" style="background:red"><i class="fal fa-lock"></i>Soldout</div>
                            <?php } else {?>
                                <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Available</div>
                            <?php } ?>
                        </div>
                        <div class="geodir-category-content fl-wrap title-sin_item">
                            <div class="geodir-category-content-title fl-wrap">
                                <div class="geodir-category-content-title-item">
                                    <h3 class="title-sin_map"><a href="<?= base_url('home/detail/').$val->id?>"><?= $val->name . ' '. $val->year?></a></h3>
                                    <div class="geodir-category-location fl-wrap"><a href="#" ><i class="fas fa-car"></i> <?=$val->merk_name?></a></div>
                                </div>
                            </div>
                            <div class="geodir-category-text fl-wrap">
                                <p class="small-text"><?= substr($val->description, 0, 100) ?>...</p>
                            </div>
                            <div class="geodir-category-footer fl-wrap">
                                <a class="listing-item-category-wrap">
                                    <div class="listing-item-category red-bg">Rp</div>
                                    <span>Rp. <?= number_format($val->price, 0, ',', '.') ?></span>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- listing-item end -->                              
            </div>
            <?php }?>
            <!-- gallery-item  end-->                             
        </div>
    </div>
</section>
<!--section end--> 