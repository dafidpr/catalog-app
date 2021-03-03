          </div>
        </div>
      </div>
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.autocomplete.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/simplebar.min.js"></script>
  <script src='<?= base_url(); ?>assets/js/daterangepicker.js'></script>
	<script src='<?= base_url(); ?>assets/js/jquery.stickOnScroll.js'></script>
	<script src='<?= base_url(); ?>assets/js/numeral.min.js'></script>
  <script src="<?= base_url(); ?>assets/js/tinycolor-min.js"></script>
  <script src="<?= base_url(); ?>assets/js/config.js"></script>
  <script src="<?= base_url(); ?>assets/js/d3.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/topojson.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/datamaps.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/datamaps-zoomto.js"></script>
  <script src="<?= base_url(); ?>assets/js/datamaps.custom.js"></script>
  <script src="<?= base_url(); ?>assets/js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="<?= base_url(); ?>assets/js/gauge.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/apexcharts.custom.js"></script>
  <script src='<?= base_url(); ?>assets/js/jquery.mask.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/select2.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/jquery.steps.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/jquery.validate.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/jquery.timepicker.js'></script>
  <script src='<?= base_url(); ?>assets/js/dropzone.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/uppy.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/quill.min.js'></script>
  <script src="<?= base_url(); ?>assets/js/apps.js"></script>
  <script src='<?= base_url(); ?>assets/js/jquery.dataTables.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/dataTables.bootstrap4.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/dataTables.responsive.min.js'></script>
  <script src='<?= base_url(); ?>assets/js/responsive.bootstrap4.min.js'></script>
  <script src="<?= base_url(); ?>assets/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/duDatepicker.min.js"></script>
  <?php if (isset($mod)) : ?>
    <script src="<?= base_url(); ?>assets/mod/<?= $mod; ?>.js"></script>
  <?php endif; ?>
  <script src="<?= base_url(); ?>assets/mod/mod_main.js"></script>
  <script>
    $(document).ready(function() {
      duDatepicker('.datepicker', {
        format: 'yyyy-mm-dd'
      });
      $('.select2').select2({
        theme: 'bootstrap4',
      });
      $('.drgpicker').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        autoclose: true
      });
    })
  </script>
</body>
</html>
