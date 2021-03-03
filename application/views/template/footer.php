          </div>
        </div>
      </div>
    </main> <!-- main -->
  </div> <!-- .wrapper -->
  <script src="<?= base_url(); ?>assets/backend/js/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/jquery.autocomplete.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/moment.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/simplebar.min.js"></script>
  <script src='<?= base_url(); ?>assets/backend/js/daterangepicker.js'></script>
	<script src='<?= base_url(); ?>assets/backend/js/jquery.stickOnScroll.js'></script>
	<script src='<?= base_url(); ?>assets/backend/js/numeral.min.js'></script>
  <script src="<?= base_url(); ?>assets/backend/js/tinycolor-min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/config.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/d3.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/topojson.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/datamaps.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/datamaps-zoomto.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/datamaps.custom.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/Chart.min.js"></script>
  <script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
  </script>
  <script src="<?= base_url(); ?>assets/backend/js/gauge.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/jquery.sparkline.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/apexcharts.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/apexcharts.custom.js"></script>
  <script src='<?= base_url(); ?>assets/backend/js/jquery.mask.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/select2.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/jquery.steps.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/jquery.validate.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/jquery.timepicker.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/dropzone.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/uppy.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/quill.min.js'></script>
  <script src="<?= base_url(); ?>assets/backend/js/apps.js"></script>
  <script src='<?= base_url(); ?>assets/backend/js/jquery.dataTables.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/dataTables.bootstrap4.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/dataTables.responsive.min.js'></script>
  <script src='<?= base_url(); ?>assets/backend/js/responsive.bootstrap4.min.js'></script>
  <script src="<?= base_url(); ?>assets/backend/js/sweetalert2.all.min.js"></script>
  <script src="<?= base_url(); ?>assets/backend/js/duDatepicker.min.js"></script>
  <?php if (isset($mod)) : ?>
    <script src="<?= base_url(); ?>assets/backend/mod/<?= $mod; ?>.js"></script>
  <?php endif; ?>
  <script src="<?= base_url(); ?>assets/backend/mod/mod_main.js"></script>
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
