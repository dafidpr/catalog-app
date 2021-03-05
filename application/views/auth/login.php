<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <link rel="icon" href="<?=base_url("assets/backend/img/").getSettings('favicon')?>">
        <title><?= $title .' - '. getSettings('web_name'); ?></title>
        <!-- Simple bar CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/simplebar.css">
        <!-- Fonts CSS -->
        <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <!-- Icons CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/feather.css">
        <!-- Date Range Picker CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/daterangepicker.css">
        <!-- App CSS -->
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/app-light.css" id="lightTheme">
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/app-dark.css" id="darkTheme" disabled>
        <link rel="stylesheet" href="<?=base_url();?>assets/backend/css/style.css">

        <script>
            var base_url = '<?=base_url();?>';
        </script>
    </head>
    <body class="light ">
        <div class="wrapper vh-100">
            <div class="row align-items-center h-100 m-0">
                <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="<?=base_url();?>Auth/postLogin" method="post" id="formLogin">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                        <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                            <g>
                                <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                                <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                                <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                            </g>
                        </svg>
                    </a>
                    <h1 class="h6 mb-3">Sign in <?=$this->session->login_status;?></h1>
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" autocomplete="off" autofocus>
                        <i class="text-danger small d-none" id="userErr"></i>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password">
                        <i class="text-danger small d-none" id="passErr"></i>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
                    <p class="mt-5 mb-3 text-muted">© 2020</p>
                </form>
            </div>
        </div>

        <!--loader-->
        <div class="pre-loader" style="left: 0!important">
            <div class="loader-content">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </div>
        </div>

        <script src="<?=base_url();?>assets/backend/js/jquery.min.js"></script>
        <script src="<?=base_url();?>assets/backend/js/popper.min.js"></script>
        <script src="<?=base_url();?>assets/backend/js/moment.min.js"></script>
        <script src="<?=base_url();?>assets/backend/js/bootstrap.min.js"></script>
        <script src="<?=base_url();?>assets/backend/js/simplebar.min.js"></script>
        <script src='<?=base_url();?>assets/backend/js/daterangepicker.js'></script>
        <script src='<?=base_url();?>assets/backend/js/jquery.stickOnScroll.js'></script>
        <script src="<?=base_url();?>assets/backend/js/tinycolor-min.js"></script>
        <script src="<?=base_url();?>assets/backend/js/config.js"></script>
        <script src="<?=base_url();?>assets/backend/js/apps.js"></script>
        <script src="<?=base_url();?>assets/backend/js/sweetalert2.all.min.js"></script>
        <script src="<?=base_url();?>assets/backend/mod/<?=$mod;?>.js"></script>
        <script>
            $(window).on('load', function(){
                $('.pre-loader').addClass('hide');
            })
        </script>
    </body>
</html>