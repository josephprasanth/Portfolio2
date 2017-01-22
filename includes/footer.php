

<!--------footer --------->


    <footer>
        <div class="container">

            <div class="col-one-third">
                <h3>DeadLines</h3>
                <div id="del-countdown">
                  <h3>Time Left For LIA</h3>
                  <div id="clock"></div>
                  <div id="units">
                    <span>Days</span>
                    <span>Hours</span>
                    <span>Min</span>
                    <span>Sec</span>
                  </div>
                  <h3>Time Left For Graduation</h3>
                  <div id="clock1"></div>
                  <div id="units">
                    <span>Days</span>
                    <span>Hours</span>
                    <span>Min</span>
                    <span>Sec</span>
                  </div>

                </div>
            </div>





            <div class="col-one-third registration">
                <h3>Contact Me</h3>
                <?php
                include('includes/arrays.php');
                 ?>
            </div>
            <div style="clear:both;">
            </div>
        </div>
        </div>
        <!--container-->
        <span class="copyright">&copy;copyright <?php echo date('Y');?>, Prasanth Joseph Portfolio</span>
    </footer>
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="assets/js/expand.js" type="text/javascript"></script>
    <script src="assets/js/countdown.js" type="text/javascript"></script>

    <script>
        $(function() {
            $nav = $('.nav-list');

            $('.menu-icon').click(function() {
                $nav.slideToggle();
            });
            $(window).resize(function() {
                if ($(window).width() >= 640) {
                    $nav.show();
                } else {
                    $nav.hide();
                }
            });
        });
    </script>

</body>

</html>
