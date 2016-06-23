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
$page = 'the-estate';
$subpage = '';
$type = 'page';
$template = '';
$title = 'The Estate';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/theestate.jpg);">
    <div class="banner__content">
        <div class="banner__text no-mobile">
        </div><!--.banner__text-->
    </div><!--.banner__content-->
</div><!--.banner-->
<div class="headline headline__dark headline--absolute">
    <div class="headline__logo">
        <svg><use xlink:href="#shape-waxing-gibbous" /></svg>
    </div><!--.headline__logo-->
    <h2 class="headline__title">The Estate</h2><!--.headline__title-->
    <div class="headline__text">A Natural Balance</div><!--.headline__text-->
</div><!--.headline-->
<section class="wrap single--estate">
    <div class="content__page clearfix">
        <div class="clearfix">
            <div class="outstanding">
                <p>
                    This thriving, wildly diverse ecosystem we call home, is the life force of Ritual and our site-specific wines.
                </p>
            </div><!--.outstanding-->
            <div class="content__text">
                <p>
                    Our estate is situated in the extreme eastern end of Chile’s Casablanca Valley, set against the dramatic sweeping beauty of the coastal range and heavily influenced by the cooling effects of the Pacific Ocean and Humbolt Current—ideal growing conditions for cool climate wines. 
                </p>
                <p>
                    Vineyards are surrounded by 2500 ha of native forest, creating a balanced, biodiverse landscape for healthy vines to thrive alongside natural wildlife corridors and native vegetation.
                </p>
            </div>
        </div><!--.clearfix-->
    </div><!--.content__page-->
    <div class="gallery">
        <div class="slider__gallery js-slider__gallery">
            <ul class="slides">
                <li>
                    <img src="assets/estate.jpg" alt="Lorem ipsum dolor.">
                </li>
                <li>
                    <img src="assets/faldeos.png" alt="Lorem ipsum dolor sit amet.">
                </li>
                <li>
                    <img src="assets/Paul%20Hobbs.jpg" alt="Lorem.">
                </li>
            </ul><!--.slides-->
        </div><!--.js-slider-->
        <div class="gallery__content">
            <div class="gallery__controls clearfix">
                <div class="gallery__controls__content">
                    <div class="gallery__fullscreen js-fullscreen">
                        <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-fullscreen"></use></svg>
                    </div>
                    <div class="custom-controls-container"></div>
                </div><!--.gallery__controls__content-->
            </div><!--.gallery__controls-->
            <div class="gallery__desc clearfix">
                <div class="gallery__number">
                    <span class="current-slide"></span>/
                    <span class="total-slides"></span>
                </div>
                <div class="gallery__text">
                    <p></p>
                </div><!--.galllery__text-->
            </div><!--.galley__desc-->
        </div>
    </div><!--.gallery-->
</section><!--.wrap-->
<section class="pre-foo pre-foo--estate">
    <div class="pre-foo__image">
        <img src="assets/thestate-bg.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->
<?php include 'footer.php'; ?>