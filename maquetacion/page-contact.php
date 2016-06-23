<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		ritual
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'contact';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Contact';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/news1-single.jpg);">
    <div class="banner__content">
        <div class="banner__text no-mobile">
        </div><!--.banner__text-->
    </div><!--.banner__content-->
</div><!--.banner-->
<div class="headline headline__dark headline--absolute">
    <div class="headline__logo">
        <svg><use xlink:href="#shape-wanning-crescent" /></svg>
    </div><!--.headline__logo-->
    <h2 class="headline__title">Contact Us</h2><!--.headline__title-->
    <div class="headline__text">We´d love to hear from you</div><!--.headline__text-->
</div><!--.headline-->
<div class="top-box clearfix">
    <div class="content__contact clearfix">
        <div class="content__contact__text">
            <div class="content__contact__title">
                <img src="img/logo-dark.svg" alt="Logo">
                <h2>Contact</h2>
            </div><!--.content__contact__title-->
            <div class="content__contact__block">
                <p>For questions on sales and distribution in:</p>
                <div class="content__contact__item">
                    <h3>Mercado 1</h3>
                    <p>Lorem ipsum dolor</p>
                    <p>ph: <a href="#" title="+1 707 287 9217">+1 707 287 9217</a></p>
                    <p>Email <a href="mailto:daniel@huneeuswines.com">daniel@huneeuswines.com</a></p>
                </div><!--.content__contact__item-->
                <div class="content__contact__item">
                    <h3>Mercado 2</h3>
                    <p>Lorem ipsum dolor</p>
                    <p>ph: <a href="#" title="+1 707 287 9217">+1 707 287 9217</a></p>
                    <p>Email <a href="mailto:daniel@huneeuswines.com">daniel@huneeuswines.com</a></p>
                </div><!--.content__contact__item-->
                <div class="content__contact__item">
                    <h3>Mercado 2</h3>
                    <p>Lorem ipsum dolor</p>
                    <p>ph: <a href="#" title="+1 707 287 9217">+1 707 287 9217</a></p>
                    <p>Email <a href="mailto:daniel@huneeuswines.com">daniel@huneeuswines.com</a></p>
                </div><!--.content__contact__item-->
                <div class="content__contact__item">
                    <p>Ruta 68 (Highway to Viña del Mar), km 66.</p>
                    <p>Casablanca, Chile</p>
                    <p>Telephone: <a href="#" title="+1 707 287 9217">+1 707 287 9217</a></p>
                </div><!--.content__contact__item-->
                <p class="mtop">For tourist program information, please click on</p>
                <a href="#" title="contact us" class="btn btn__border">Contact us</a>
            </div><!--.content__contact__block-->
        </div><!--.content__contact__text-->
        <div class="map">
            <div class="map__image"></div>
            <div id="map"></div>
            <div class="map__text">
                <a href="#" title="google maps" class="map__button">Google Maps</a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis purus id lacus fringilla auctor. Curabitur felis libero, efficitur a mi id, imperdiet sagittis ante. Suspendisse interdum justo justo, ac hendrerit est fermentum in.
                </p>
            </div>
        </div><!--.map-->
    </div><!--.content__contact">-->
</div><!--.top-box-->
<section class="wrap page-contact">
    <section class="box--contact" id="contact-box" style="display: block;">
        <div class="container-contact">
            <h2>Do you want to contact us?</h2>
            <form action="" method="post" class="ContactFrm form-contact clearfix">
                <div class="input-group">
                    <label for="name">First Name</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" name="lastname">
                </div>
                <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="input-group">
                    <label for="manager">Location</label>
                    <div class="style-select">
                        <svg><use xlink:href="#shape-flecha" /></svg>
                        <select name="manager" id="manager">
                            <option value="">Select an option</option>
                            <option value="Chile">Chile</option>
                            <option value="Argentina">Argentina</option>
                        </select>
                    </div>
                </div>
                <div class="input-group big-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <div class="input-group send">
                    <input type="submit" value="Send Message">
                </div>
            </form>
        </div><!-- /.container-contact -->
    </section>
</section><!--.wrap-->
<section class="pre-foo pre-foo--contact">
    <div class="pre-foo__image">
        <img src="assets/bg-footer-1.png" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->
<?php include 'footer.php'; ?>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        //MAPA
        var myLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var thisLatlng = new google.maps.LatLng(-33.418580, -70.599599);
        var myOptions = {
            zoom: 15, //nivel de zoom
            center: myLatlng,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            keyboardShortcuts: false,
            zoomControl: true,
            draggable: false,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            streetViewControl: false,
        }
        var map = new google.maps.Map(document.getElementById("map"), myOptions);
        var image = 'img/marker.svg'; //imagen del marcador
        var marker = new google.maps.Marker({
            position: thisLatlng,
            map: map,
            icon: image
        });
        marker.setMap(map);
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
