<div class="mini-spacer bg-info text-white c2a7">
    <div class="container">
        <div class="d-flex">
            <div class="display-7 align-self-center">Like what we have to offer? Get in touch or join our Discord!</div>
            <div class="ml-auto m-t-10 m-b-10"><a href="contact.php" class="btn btn-outline-light btn-md">Contact Us</a></div>
        </div>
    </div>
</div>
<div class="footer4 b-t spacer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Services</h5>
                <a href="minecraft.php">Minecraft Hosting</a><br>
                <a href="web-hosting.php">Web Hosting</a><br>
                <a href="vps.php">VPS Hosting</a><br>
                <a href="dedicated.php">Dedicated Servers</a><br>
                <a href="discord-bots.php">Discord Bot Hosting</a><br>
                <a href="database.php">Database Hosting</a><br>
                <a href="docker.php">Docker Container Hosting</a>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Company</h5>
                <a href="about.php">About Us</a><br>
                <a href="#">Server Status</a><br>
                <a href="#">Discord</a>
            </div>
            <div class="col-lg-3 col-md-6 m-b-30">
                <h5 class="m-b-20">Support</h5>
                <a href="#">Client Area</a><br>
                <a href="#">Troubleshooting</a><br>
                <a href="#">Submit a Ticket</a><br>
                <a href="#">Discord Support</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="m-b-20">Social</h5>
                <div class="round-social light">
                    <a href="#" class="link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="link"><i class="fab fa-google-plus"></i></a>
                    <a href="#" class="link"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="f4-bottom-bar">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex font-14">
                        <div class="m-t-10 m-b-10 copyright">&copy; 2017 Resolve Hosting, a product of Unreliable Corporation, LLC. All Rights Reserved.</div>
                        <div class="links ml-auto m-t-10 m-b-10">
                            <a href="tos.php" class="p-10 p-l-0">Terms of Use</a>
                            <a href="privacypolicy.php" class="p-10">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
<script src="assets/node_modules/popper/dist/popper.min.js"></script>
<script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/node_modules/prism/prism.js"></script>
<script src="assets/js/custom.min.js"></script>
<script type="text/javascript">

$('a').on('click', function (event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top - 90
    }, 1000);
    event.preventDefault();
    // code

});
</script>

<script>
// this is for the pricing 1
$(".pricing1 .onoffswitch-label").click(function() {
    $(".pricing1 .monthly, .pricing1 .yearly").toggle();
});
</script>

</body>

</html>
