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
                <a href="index.html" class="logo-holder"><img src="<?= base_url('assets/backend/') ?>img/<?=getSettings('logo')?>" alt=""></a>
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