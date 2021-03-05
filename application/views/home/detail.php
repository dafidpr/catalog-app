<!-- scroll-nav-wrapper--> 
<div class="scroll-nav-wrapper fl-wrap">
    <div class="container">
        <nav class="scroll-nav scroll-init">
            <ul class="no-list-style">
                <li><a href="#sec2"><i class="fal fa-info"></i>Deskripsi</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- scroll-nav-wrapper end--> 
<section class="gray-bg no-top-padding">
    <div class="container">
        <div class="breadcrumbs inline-breadcrumbs fl-wrap">
            <a href="<?=base_url('/') ?>">Home</a><span><?=$product->name?></span> 
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <!-- list-single-main-wrapper-col -->
            <div class="col-md-8">
                <!-- list-single-main-wrapper -->
                <div class="list-single-main-wrapper fl-wrap" id="sec2">
                    <div class="list-single-main-media fl-wrap">
                        <div class="single-slider-wrap">
                            <div class="single-slider fl-wrap">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper lightgallery">
                                        <div class="swiper-slide hov_zoom"><img src="<?= base_url('assets/frontend/')?>images/all/50.jpg" alt=""><a href="<?= base_url('assets/frontend/')?>images/all/5.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                        <div class="swiper-slide hov_zoom"><img src="<?= base_url('assets/frontend/')?>images/all/51.jpg" alt=""><a href="<?= base_url('assets/frontend/')?>images/all/1.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                        <div class="swiper-slide hov_zoom"><img src="<?= base_url('assets/frontend/')?>images/all/49.jpg" alt=""><a href="<?= base_url('assets/frontend/')?>images/all/3.jpg" class="box-media-zoom   popup-image"><i class="fal fa-search"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-carousel_pagination">
                                <div class="listing-carousel_pagination-wrap">
                                    <div class="ss-slider-pagination"></div>
                                </div>
                            </div>
                            <div class="ss-slider-cont ss-slider-cont-prev color2-bg"><i class="fal fa-long-arrow-left"></i></div>
                            <div class="ss-slider-cont ss-slider-cont-next color2-bg"><i class="fal fa-long-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="list-single-header-item  fl-wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <h1><?=$product->name .' '.$product->year?></h1>
                                <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  <?=getSettings('company_address')?></a> <a href="#"> <i class="fal fa-phone"></i>+<?=getSettings('whatsapp')?></a> <a href="#"><i class="fal fa-envelope"></i> <?=getSettings('email')?></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- list-single-main-item --> 
                    <div class="list-single-main-item fl-wrap block_box">
                        <div class="list-single-main-item-title">
                            <h3>Deskripsi</h3>
                        </div>
                        <div class="list-single-main-item_content fl-wrap">
                           <?=$product->description?>
                        </div>
                    </div>
                    <!-- list-single-main-item end -->                                      
                </div>
            </div>
            <!-- list-single-main-wrapper-col end -->   
            <div class="col-md-4">
                <!--box-widget-item -->
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Spesifikasi</h3>
                    </div>
                    <div class="box-widget opening-hours fl-wrap">
                        <div class="box-widget-content">
                            <ul class="no-list-style">
                                <li class="mon"><span class="opening-hours-day">No. Polisi </span><span class="opening-hours-time"><?=$product->police_number ?></span></li>
                                <li class="tue"><span class="opening-hours-day">Merk </span><span class="opening-hours-time"><?=$product->merk_name ?></span></li>
                                <li class="tue"><span class="opening-hours-day">Tipe </span><span class="opening-hours-time"><?=$product->type ?></span></li>
                                <li class="thu"><span class="opening-hours-day">Tahun </span><span class="opening-hours-time"><?=$product->year ?></span></li>
                                <li class="thu"><span class="opening-hours-day">Warna </span><span class="opening-hours-time"><?=$product->color ?></span></li>
                                <li class="sat"><span class="opening-hours-day">CC </span><span class="opening-hours-time"><?=$product->cc ?></span></li>
                                <li class="sun"><span class="opening-hours-day">Bahan Bakar </span><span class="opening-hours-time"><?=$product->fuel ?></span></li>
                                <li class="sun"><span class="opening-hours-day">Transmisi </span><span class="opening-hours-time"><?=$product->transmission ?></span></li>
                                <li class="sun"><span class="opening-hours-day">Jarak Tempuh </span><span class="opening-hours-time"><?= number_format($product->mileage) ?> Km</span></li>
                                <li class="sun"><span class="opening-hours-day">Kondisi </span><span class="opening-hours-time"><?=$product->condition ?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>                           
                <div class="box-widget-item fl-wrap block_box">
                    <div class="box-widget-item-header">
                        <h3>Angsuran</h3>
                    </div>
                    <div class="box-widget opening-hours fl-wrap">
                        <div class="box-widget-content">
                            <ul class="no-list-style">
                                <li class="mon"><span class="opening-hours-day">Harga </span><span class="opening-hours-time">Rp. <?= number_format($product->price, 0, ',','.') ?></span></li>
                                <li class="tue"><span class="opening-hours-day">DP Minim </span><span class="opening-hours-time">Rp. <?= number_format($product->minimal_dp, 0, ',','.') ?></span></li>
                                <?php foreach($angsuran as $item){?>
                                    <li class="tue"><span class="opening-hours-day"><?=$item->angsuran. ' x '.$item->periode.' bln'?> </span><span class="opening-hours-time">Rp. <?=number_format($item->nominal, 0,',','.')?></span></li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>                           
            </div>
        </div>
    </section>
    <div class="limit-box fl-wrap"></div>