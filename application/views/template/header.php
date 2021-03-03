<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?=base_url("assets/img/").getSettings('favicon')?>">
  <title><?= $title .' - '. getSettings('web_name'); ?></title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/simplebar.css">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/feather.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/select2.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dropzone.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/uppy.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.steps.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery.timepicker.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/quill.snow.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/duDatepicker.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/daterangepicker.css">
  <!-- App CSS -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-light.css" id="lightTheme">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/app-dark.css" id="darkTheme" disabled>

  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script>
    var base_url = "<?= base_url(); ?>";

    $(window).on('load', function() {
      $('.pre-loader').addClass('hide');
    })
  </script>
</head>

<body class="vertical">
  <!--loader-->
  <div class="pre-loader">
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