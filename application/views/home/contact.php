<section   id="sec1" data-scrollax-parent="true">
    <div class="container">
        <!--about-wrap -->
        <div class="about-wrap">
            <div class="row">
                <div class="col-md-4">
                    <div class="ab_text-title fl-wrap">
                        <h3>Get in Touch</h3>
                        <span class="section-separator fl-sec-sep"></span>
                    </div>
                    <!--box-widget-item -->                                       
                    <div class="box-widget-item fl-wrap block_box">
                        <div class="box-widget">
                            <div class="box-widget-content bwc-nopad">
                                <div class="list-author-widget-contacts list-item-widget-contacts bwc-padside">
                                    <ul class="no-list-style">
                                        <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#singleMap" class="custom-scroll-link"><?=getSettings('company_address')?></a></li>
                                        <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+<?=getSettings('whatsapp')?></a></li>
                                        <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#"><?=getSettings('email')?></a></li>
                                    </ul>
                                </div>
                                <div class="list-widget-social bottom-bcw-box  fl-wrap">
                                    <ul class="no-list-style">
                                        <li><a href="<?=getSettings('facebook')?>" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="<?=getSettings('instagram')?>" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--box-widget-item end -->                                            
                </div>
                <div class="col-md-8">
                    <div class="ab_text">
                        <div class="ab_text-title fl-wrap">
                            <h3>Drop us a line</h3>
                            <span class="section-separator fl-sec-sep"></span>
                        </div>
                        <?= htmlspecialchars_decode(getSettings('maps'))?>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-wrap end  --> 
    </div>
</section>