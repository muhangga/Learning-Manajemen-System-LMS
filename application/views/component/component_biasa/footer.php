
<!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="<?= base_url('vendor/assets/js/stisla.js') ?>"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?= base_url('vendor/assets/js/scripts.js'); ?>"></script>
  <script src="<?= base_url('vendor/assets/js/custom.js'); ?>"></script>
  <script src="<?= base_url('vendor/assets/js/jquery-1.11.1.min.js') ?>"></script>

  <script>
jQuery(document).ready(function ($) {
   $("a.nav-link.scroll , a.btn-started").click(function (event) {
      event.preventDefault();
      $("html,body").animate({
            scrollTop: $(this.hash).offset().top - 50,
         },
         1200
      );
   });
});
  </script>