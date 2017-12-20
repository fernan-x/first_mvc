<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Aelina Online</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://use.fontawesome.com/488cd0d488.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
            <?= $content ?>
            <!-- Fin de page Footer -->
            <footer class="footer text-white" id="Contact">
                <div class="footer_trp">
                    <div class="container">
                        <div class="row" style="padding-top:10px;">
                            <div class="col-sm">
                                <h4>Nous Contacter</h4>
                                <p style="font-size: 18px;">team.AelinaOnline@gmail.com</p>
                                <a href="https://discord.gg/ZGWQh" target="_blank">
                                    <img class="follow" src="img/logo/discordbt.png" alt="btnDiscord"/>
                                    </a>
                            </div>
                            <div class="col-sm">
                                <h4>Nous Suivre</h4>
                                <a href="https://facebook.com/AelinaOnline/" target="_blank">
                                    <img class="follow" src="img/logo/facebookbt.png" alt="btnFacebook"/>
                                    </a>
                                <a href="https://twitter.com/AelinaOnline" target="_blank">
                                    <img class="follow" src="img/logo/twitterbt.png" alt="btnTwitter"/>
                                    </a>
                                <a href="https://youtube.com" target="_blank">
                                    <img class="follow" src="img/logo/youtubebt.png" alt="btnYoutube"/>
                                </a>
                            </div>
                            <div class="col-sm">
                                <h4>À propos . . . </h4>
                                <p style="font-size:small;">Aelina Online est un serveur de jeu privé. Le contenu disponible sur le site vous est proposé par des développeurs indépendants. N'hésitez surtout pas à nous contacter si vous avez la moindre suggestion.<br /> Cordialement,<br/>L'équipe Aelina
                                    Online.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <p class="text-center">© 2017-2018 Fabien & Ilyes, All rights reserved.</p>
                                </div>
                                <div class="col">
                                    <a data-toggle="modal" data-target="#ModalLicence">
                                        <p class="text-center">Licence</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <div class="overlay" style="display:none;"></div>


    </div>

    <script type="text/javascript">
    function fade_logo(){
        $('#logo').animateCss('fadeIn');
    }
        $.fn.extend({
            animateCss: function(animationName, callback) {
                var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
                this.addClass('animated ' + animationName).one(animationEnd, function() {
                    $(this).removeClass('animated ' + animationName);
                    if (callback) {
                        callback();
                    }
                });
                return this;
            }
        });

        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            setInterval('fade_logo()', 3000);

            $('#download').mouseover(function() {
                $('#download').removeClass('btn-dark');
                $('#download').addClass('btn-outline-danger');
                $('#download').animateCss('flipInX');
            });

            $('#download').mouseleave(function() {
                $('#download').removeClass('btn-outline-danger');
                $('#download').addClass('btn-dark');
            });

            $('#btnForum').mouseover(function() {
                $(this).animateCss('swing');
            });

            $('#btnJouer').mouseover(function() {
                $(this).animateCss('swing');
            });

            $('#btnBoutique').mouseover(function() {
                $(this).animateCss('swing');
            });

            $('#btnSupport').mouseover(function() {
                $(this).animateCss('swing');
            });

            $('.follow').mouseover(function() {
                $(this).animateCss('jello');
            });

            $('#sidebarCollapse').on('mouseenter', function() {
                $('#sidebarCollapse').animate({
                    width: "200px"
                });
                $('.btnLogIn').html('Se Connecter');
            });

            $('#sidebarCollapse').mouseleave(function() {
                $('#sidebarCollapse').animate({
                    width: "10px"
                }, 300);
                $('.btnLogIn').html('').delay(1000);
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('#sidebarCollapse').fadeIn(1000);
                $('.overlay').attr('style', "display:none;");
                $('.overlay').fadeOut();
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebarCollapse').fadeOut();
                $('#sidebar').addClass('active');
                $('.overlay').attr('style', "display:block;");
                $('.overlay').fadeIn();
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>