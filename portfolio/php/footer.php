    <!-- Javascripts
    ======================================= -->
    <!-- jQuery -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <script src="js/vendor/jquery-migrate.min.js"></script>
    <!-- jQuery Easing Plugin -->
    <script src="js/vendor/easing-1.3.js"></script>
    <!-- Bootstrap js -->
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="js/vendor/fontawesome-all.min.js"></script>
    <!-- ImagesLoaded js -->
    <script src="js/vendor/imagesloaded.pkgd.min.js"></script>
    <!-- Magnific popup -->
    <script src="js/vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom js -->
    <script src="js/main.js"></script>

    <script src="js/vendor/jquery.countdown.min.js"></script>
    <script>
        $('#clock').countdown('2018/11/30 23:59:00').on('update.countdown', function (event) {
            var _DateInput = '' +
                '<div><span>%D</span> Day%!d</div>' + // valor cambiado de %-d a %D ya que %-d depende de semanas (%-w)
                '<div><span>%H</span> Hours</div>' +
                '<div><span>%M</span> Minutes</div>' +
                '<div><span>%S</span> Seconds</div>';
            var $this = $(this).html(event.strftime(_DateInput));
        });
    </script>

  </body>
</html>
