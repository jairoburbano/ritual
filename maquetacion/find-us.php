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
$page = 'importers';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Importers';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/distribution.jpg);">
    <div class="banner__content">
        <div class="banner__text no-mobile">
        </div><!--.banner__text-->
    </div><!--.banner__content-->
</div><!--.banner-->
<div class="headline headline__dark headline--absolute">
    <div class="headline__logo">
    </div><!--.headline__logo-->
    <h2 class="headline__title">Importers</h2><!--.headline__title-->
    <div class="headline__text">Our Distributers</div><!--.headline__text-->
</div><!--.headline-->
<section class="wrap clearfix">
    <div id="grappos-widget"></div>
    <script type="text/javascript" src="//www.grappos.com/rwidget/js/load.js"></script>
    <script type="text/javascript">
        var grapposConfig = {};
        grapposConfig.uid = 'Bz-180151675'; // This is the Unique Identifier for this locator and product list.
        grapposConfig.theme = 'default';
    </script>
</section><!--.wrap-->
<section class="pre-foo pre-foo--importers">
    <div class="pre-foo__image">
        <img src="assets/bg-footer-3.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->
    </div><!--.pre-foo__content-->
<?php include 'footer.php'; ?>