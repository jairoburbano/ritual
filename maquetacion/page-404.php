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
$page = '404';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Error 404';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="visit-us">
    <div class="visit__image"  style="background-image: url(img/random/1.jpg);"></div>
    <div class="visit__text">
        <div class="headline">
            <h2 class="headline__title">Error 404</h2><!--.headline__title-->
            <div class="headline__text">Esta página no ha sido encontrada </div><!--.headline__text-->
        </div><!--.headline-->
        <div class="headline headline--button">
            <a href="http://ritualwines.com/" target="_blank" title="Volver al inicio" class="headline__title">Volver al inicio</a><!--.headline__title-->
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>