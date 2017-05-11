
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#">Flamingo #Media</a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Vores Produkter</h5>
                    <ul>
                        <li><a href="#">Webløsninger</a></li>
                        <br>
                        <li><a href="#">Markedsføring</a></li>
                        <br>
                        <li><a href="#">Grafisk Arbejde</a></li>
                        <br>
                        <li><a href="#">Foto/Video</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Om os</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <button type="button" class="btn btn-default">Contact us</button>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© Flamingo Media </p>
        </div>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script src="inc/jquery.mb.YTPlayer.js"></script>
    <script src="js/custom.js"></script>

<script>
$(document).ready(function () {

    $(".player").mb_YTPlayer();

});

$(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});

$(function() {
    $('.panel-image img.panel-image-preview').on('click', function(e) {
      $(this).closest('.panel-image').toggleClass('hide-panel-body');
    });
});

</script>

<script src="js/cbpFWTabs.js"></script>
<script>
  (function() {

    [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
      new CBPFWTabs( el );
    });

  })();
</script>

</body>
</html>
