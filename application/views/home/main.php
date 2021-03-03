<!DOCTYPE HTML>
<html lang="en">
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title><?php echo $title .' - '. getSettings('web_name') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <!--=============== css  ===============-->	
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/reset.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/plugins.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/style.css">
        <link type="text/css" rel="stylesheet" href="<?= base_url('assets/frontend/') ?>css/color.css">
        <!--=============== favicons ===============-->
        <link rel="icon" href="<?=base_url("assets/backend/img/").getSettings('favicon')?>">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <div class="loader-inner-cirle"></div>
            </div>
        </div>
        <!--loader end-->
        <!-- main start  -->
        <div id="main">
            <header class="main-header">
                <a href="index.html" class="logo-holder"><img src="<?= base_url('assets/frontend/') ?>images/logo.png" alt=""></a>
                <div class="nav-button-wrap color-bg">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <div class="nav-holder main-menu" style="float:right">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a href="<?= base_url('/') ?>">Home</a>
                            </li>
                            <li>
                                <a href="<?= base_url('home/contact') ?>">Contact</a>
                            </li>
                            <li>
                                <a href="<?= base_url('login') ?>">Sign In</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- header end-->
            <!-- wrapper-->
            <div id="wrapper">
                <!-- content-->
                <div class="content">
					<div class="sec-circle fl-wrap"></div>
                    <?php $this->load->view($content) ?>
                </div>
                <!--content end-->
            </div>
            <!-- wrapper end-->
            <!--footer -->
            <footer class="main-footer fl-wrap">
                <!--footer-inner-->
                <div class="footer-inner   fl-wrap">
                    <div class="container">
                        <div class="row">
                            <!-- footer-widget-->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <div class="footer-logo"><a href="index.html"><img src="<?= base_url('assets/frontend/') ?>images/logo.png" alt=""></a></div>
                                    <div class="footer-contacts-widget fl-wrap">
                                        <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida.   </p>
                                        <ul  class="footer-contacts fl-wrap no-list-style">
                                            <li><span><i class="fal fa-envelope"></i> Mail :</span><a href="#" target="_blank">yourmail@domain.com</a></li>
                                            <li> <span><i class="fal fa-map-marker"></i> Adress :</span><a href="#" target="_blank">USA 27TH Brooklyn NY</a></li>
                                            <li><span><i class="fal fa-phone"></i> Phone :</span><a href="#">+7(111)123456789</a></li>
                                        </ul>
                                        <div class="footer-social">
                                            <span>Find  us on: </span>
                                            <ul class="no-list-style">
                                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                <li><a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget end-->
                            <!-- footer-widget-->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap">
                                    <h3>Our Last News</h3>
                                    <div class="footer-widget-posts fl-wrap">
                                        <ul class="no-list-style">
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="<?= base_url('assets/frontend/') ?>images/all/4.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Vivamus dapibus rutrum</a>
                                                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 21 Mar 09.05 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="<?= base_url('assets/frontend/') ?>images/all/2.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title=""> In hac habitasse platea</a>
                                                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 18.21 </span> 
                                                </div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#"  class="widget-posts-img"><img src="<?= base_url('assets/frontend/') ?>images/all/7.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Tortor tempor in porta</a>
                                                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 16.42 </span>
                                                </div>
                                            </li>
                                        </ul>
                                        <a href="blog.html" class="footer-link">Read all <i class="fal fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- footer-widget end-->
                            <!-- footer-widget  -->
                            <div class="col-md-4">
                                <div class="footer-widget fl-wrap ">
                                    <h3>Our  Twitter</h3>
                                    <div class="twitter-holder fl-wrap scrollbar-inner2" data-simplebar data-simplebar-auto-hide="false">
                                        <div id="footer-twiit"></div>
                                    </div>
                                    <a href="#" class="footer-link twitter-link" target="_blank">Follow us <i class="fal fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <!-- footer-widget end-->
                        </div>
                    </div>
                    <!-- footer bg-->
                    <div class="footer-bg" data-ran="4"></div>
                    <div class="footer-wave">
                        <svg viewbox="0 0 100 25">
                            <path fill="#fff" d="M0 30 V12 Q30 17 55 12 T100 11 V30z" />
                        </svg>
                    </div>
                    <!-- footer bg  end-->
                </div>
                <!--footer-inner end -->
                <!--sub-footer-->
                <div class="sub-footer  fl-wrap ">
                    <div class="container">
                        <div class="copyright" style="margin-bottom:30px"> &#169; <?php echo getSettings('company_name'). ' '.date('Y')?> .  All rights reserved.</div>
                    </div>
                </div>
                <!--sub-footer end -->
            </footer>
            <!--footer end -->                   
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="<?= base_url('assets/frontend/') ?>js/jquery.min.js"></script>
        <script src="<?= base_url('assets/frontend/') ?>js/plugins.js"></script>
        <script src="<?= base_url('assets/frontend/') ?>js/scripts.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwJSRi0zFjDemECmFl9JtRj1FY7TiTRRo&amp;libraries=places&amp;callback=initAutocomplete"></script>        
        <script src="<?= base_url('assets/frontend/') ?>js/map-single.js"></script>                          
    </body>
</html>