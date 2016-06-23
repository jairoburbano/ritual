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
$page = 'news';
$subpage = '';
$type = 'single';
$template = '';
$title = 'Single news';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/news1.jpg);">
    <div class="banner__content">
        <div class="banner__text no-mobile">
        </div><!--.banner__text-->
    </div><!--.banner__content-->
</div><!--.banner-->
<div class="headline headline__dark headline--absolute">
    <div class="headline__logo">
        <svg><use xlink:href="#shape-first-quarter" /></svg>
    </div><!--.headline__logo-->
    <h2 class="headline__title">News</h2><!--.headline__title-->
    <div class="headline__text">the lastest updates</div><!--.headline__text-->
</div><!--.headline-->
<a href="page-news.php" title="Back to news" class="return">
    <svg><use xlink:href="#shape-flex-prev" /></svg>
    Back to news
</a>
<section class="wrap single--news">
    <div class="content__single__news">
        <div class="content__single__news--top">
            <p class="content__single__news__date">
                <a href="page-news.php" title="Awards">Awards</a>
                | 26 de marzo 2015
            </p><!--.content__single__news__date-->
            <h2 class="content__single__title">Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis</h2>
            <div class="single-share">
                <a href="single-news.php" title="Mail">
                    <svg><use xlink:href="#shape-icon-letter-fill" /></svg>
                </a>
                <a href="single-news.php" title="Facebook">
                    <svg><use xlink:href="#shape-icon-face" /></svg>
                </a>
                <a href="single-news.php" title="Twitter">
                    <svg><use xlink:href="#shape-icon-twitt" /></svg>
                </a>
                <a href="single-news.php" title="Instagram">
                    <svg><use xlink:href="#shape-icon-insta" /></svg>
                </a>
            </div><!--.single-share-->
        </div><!--.content__single__news--top-->
        <div class="content__single__news--bottom">
            <img src="assets/Singlewine1.jpg" alt="Titulo imagen">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis iaculis purus id lacus fringilla auctor. Curabitur felis libero, efficitur a mi id, imperdiet sagittis ante. Suspendisse interdum justo justo, ac hendrerit est fermentum in.
            </p>
            <p>
                Nam laoreet sollicitudin urna, vitae condimentum felis luctus vitae. Maecenas accumsan justo gravida feugiat congue. Vivamus aliquam odio leo, eu posuere leo dictum eu. Fusce pharetra rutrum scelerisque. Etiam ac elit metus. Nam tempor lacinia eros vel aliquet.
                Proin blandit massa et orci laoreet, vel gravida felis ullamcorper. Proin vel faucibus ligula, eu volutpat justo.
            </p>
            <p>
                Vestibulum iaculis iaculis ex mattis viverra. Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis. Pellentesque malesuada sed quam non pretium. Etiam fringilla, enim a interdum finibus, metus odio luctus risus, sit amet egestas sem arcu eget neque. Nunc risus orci, interdum id metus rhoncus, blandit rutrum nibh. Nullam et quam gravida, posuere mauris suscipit, venenatis sem. Donec massa arcu, facilisis eu interdum vitae, fringilla nec nulla. 
            </p>
            <p>
                Donec dignissim dui nec mauris maximus ornare. Vestibulum sit amet quam hendrerit ex ullamcorper aliquet sed sit amet velit. Phasellus velit tortor, lobortis id purus sit amet, mollis sollicitudin risus.
            </p>
        </div><!--.content__single__news--bottom-->
        <div class="gallery gallery--small">
            <div class="slider__gallery js-slider__gallery">
                <ul class="slides">
                    <li>
                        <img src="assets/estate.jpg" alt="Titulo">
                    </li>
                    <li>
                        <img src="assets/faldeos.png" alt="Titulo">
                    </li>
                    <li>
                        <img src="assets/Paul%20Hobbs.jpg" alt="Titulo">
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
                        <p>
                            Wolfgang Schuch: “La tecnología puede ser realmente fantástica, pero si no se tiene a los aliados indicados, dicha tecnología puede ser un fracaso”
                        </p>
                    </div><!--.galllery__text-->
                </div><!--.galley__desc-->
            </div>
        </div><!--.gallery-->
    </div><!--.content__single__news-->
    <div class="related__news">
        <h2 class="related__title">Related News</h2>
        <a href="#" class="related__news__item">
            <span class="related__image" style="background-image: url(assets/farming-bg.jpg);"></span>
            <span class="related__content">
                <span class="related__news__date">Awards | 26 de marzo 2015</span>
                <span class="related__news__title">Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis</span>
                <span class="related__news__more">Read more ></span>
            </span><!--.related__content-->
        </a><!--.related__news__item-->
        <a href="#" title="titulo" class="related__news__item">
            <span class="related__image" style="background-image: url(assets/Paul%20Hobbs.jpg);"></span>
            <span class="related__content">
                <span class="related__news__date">Awards | 26 de marzo 2015</span>
                <span class="related__news__title">Etiam mattis ipsum neque. Ut mattis lectus accumsan metus tincidunt, id tempor velit facilisis</span>
                <span class="related__news__more">Read more ></span>
            </span><!--.related__content-->
        </a><!--.related__news__item-->
    </div><!--.related__news-->
</section><!--.wrap-->
<section class="pre-foo pre-foo--estate">
    <div class="pre-foo__image">
        <img src="assets/footer-bg.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->
    <?php include 'footer.php'; ?>