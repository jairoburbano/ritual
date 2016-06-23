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
$page = 'the-wines';
$subpage = '';
$type = 'page';
$template = '';
$title = 'The Wines';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/thewines.jpg);">
    <div class="banner__content">
        <div class="banner__text no-mobile">
        </div><!--.banner__text-->
    </div><!--.banner__content-->
</div><!--.banner-->
<div class="headline headline__dark headline--absolute">
    <div class="headline__logo">
        <svg><use xlink:href="#shape-waxing-crescent" /></svg>
    </div><!--.headline__logo-->
    <h2 class="headline__title">The Wines</h2><!--.headline__title-->
    <div class="headline__text">Pure expressions</div><!--.headline__text-->
</div><!--.headline-->
<section class="wrap">
    <div class="box--flex">
        <div class="box--half wine--page">
            <div class="item--wine sauvignon-blanc">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0000_Blanc.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item--wine__logo no-mobile">
                            <svg><use xlink:href="#shape-waxing-crescent" /></svg>
                        </div><!--.item--wine__logo-->
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="single-the-wines.php" title="titulo vino">Sauvignon Blanc</a>
                            </h2><!--.item-wine__title-->
                            <a href="single-the-wines.php" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-text-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-->
        </div><!--.box--half-->
        <div class="box--half wine--page">
            <div class="item--wine chardonnay">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item--wine__logo no-mobile">
                            <svg><use xlink:href="#shape-wanning-crescent" /></svg>
                        </div><!--.item--wine__logo-->
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="single-the-wines.php" title="Titulo vino">Chardonnay</a>
                            </h2><!--.item-wine__title-->
                            <a href="single-the-wines.php" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-text-->
        </div><!--.box--half-->
        <div class="box--half wine--page">
            <div class="item--wine pinot-noir">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item--wine__logo no-mobile">
                            <svg><use xlink:href="#shape-wanning-crescent" /></svg>
                        </div><!--.item--wine__logo-->
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="single-the-wines.php" title="Titulo vino">Pinot Noir</a>
                            </h2><!--.item-wine__title-->
                            <a href="single-the-wines.php" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-text-->
        </div><!--.box--half-->
    </div><!--..box--flex-->

    <div class="description js-description">
        <ul class="slides">
            <li class="item__description">
                <div class="logo__description">
                    <img src="assets/iconos/uva.png" alt="Uva">
                </div><!--.logo__description-->
                <div class="text__description">
                    <p>
                        Gentle, minimal intervention winemaking practices highlights vineyards and quality fruit.
                    </p>
                </div><!---.text__description-->
            </li><!--.item__description-->
            <li class="item__description">
                <div class="logo__description">
                    <img src="assets/iconos/temp.png" alt="Temp">
                </div><!--.logo__description-->
                <div class="text__description">
                    <p>
                        Chile’s casablanca valley is ideal for producing expressive, cool climate wines, similar to california's russian river valley.
                    </p>
                </div><!---.text__description-->
            </li><!--.item__description-->
            <li class="item__description">
                <div class="logo__description">
                    <img src="assets/iconos/arbol.png" alt="Arbol">
                </div><!--.logo__description-->
                <div class="text__description">
                    <p>
                        Ritual wines are 100% estate grown from the most outstanding small blocks on the estate.
                    </p>
                </div><!---.text__description-->
            </li><!--.item__description-->
            <li class="item__description">
                <div class="logo__description">
                    <img src="assets/iconos/rama.png" alt="Rama">
                </div><!--.logo__description-->
                <div class="text__description">
                    <p>
                        Ritual estate vineyards are 100% sustainably farmed with low impact methods.
                    </p>
                </div><!---.text__description-->
            </li><!--.item__description-->
        </ul><!--.slides-->
    </div><!--.description-->
</section>
<section class="pre-foo pre-foo--wines">
    <div class="pre-foo__image">
        <img src="assets/thestate-bg.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->


<?php include 'footer.php'; ?>