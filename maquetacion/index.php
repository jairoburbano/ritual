<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		ritual
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="banner banner--principal" style="background-image: url();" id="image">
    <div class="banner__content">
        <div class="banner__logo no-mobile">
            <svg><use xlink:href="#shape-ritual" /></svg>
        </div><!--.banner__logo-->
        <div class="banner__text no-mobile">
            <p>
                Ritual is a labor of love. It connects us to the land we farm, to healthy living soil, and to the daily rituals of artisanal winemaking
            </p>
        </div><!--.banner__text-->
        <div class="banner__scroll js-banner__scroll">
            <p>Scroll down</p>
            <svg><use xlink:href="#shape-icon-scroll-down" /></svg>
        </div><!--.banner--scroll-->
    </div><!--.banner__content-->
</div><!--.banner.banner--principal-->
<section class="wrap wines--home js-scroll__here">
    <div class="headline headline--big">
        <h2 class="headline__title">The Wines</h2><!--.headline__title-->
        <div class="headline__text">Pure expressions</div><!--.headline__text-->
    </div><!--.headline-->
    <div class="down-text no-mobile">
        <p>
            Ritual is a labor of love. From tending every vine through the growing season to hand harvesting in small batches, to allowing fermentation with native yeasts, we strive to make beautiful wines that are a reflection of this special place.
        </p>
    </div><!--.down-text-->
    <div class="box--flex">
        <div class="box--half wine--page">
            <div class="item--wine pinot-noir">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="#" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="#" title="Titulo vino">Pinot Noir</a>
                            </h2><!--.item-wine__title-->
                            <a href="#" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-text-->
        </div><!--.box--half-->
        <div class="box--half wine--page">
            <div class="item--wine chardonnay">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="#" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="#" title="Titulo vino">Chardonnay</a>
                            </h2><!--.item-wine__title-->
                            <a href="#" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-text-->
        </div><!--.box--half-->
        <div class="box--half wine--page">
            <div class="item--wine sauvignon-blanc">
                <div class="item--wine__background"></div><!--.item--wine__background-->
                <div class="item--wine__content clearfix">
                    <div class="item--wine__image">
                        <a href="#" title="titulo vino"><img src="assets/L_0000_Blanc.png.png" alt="Titulo Vino"></a>
                    </div><!--.item--wine__image-->
                    <div class="item--wine__text">
                        <div class="item-wine__content-text">
                            <h2 class="item-wine__title">
                                <a href="#" title="titulo vino">Sauvignon Blanc</a>
                            </h2><!--.item-wine__title-->
                            <a href="#" title="Read more" class="item-wine__more">Read more ></a><!--.item-wine__more-->
                        </div><!--.item-wine__content-text-->
                    </div><!--.item--wine__text-->
                </div><!--.item--wine-->
            </div><!--.item--wine__content-->
        </div><!--.box--half-->
    </div><!--..box--flex-->
</section>
<section class="lets-gather--home">
    <div class="lets-gather--home__bg">
        <div class="image" style="background-image: url(assets/letsgather.jpg);"></div>
    </div>
    <div class="headline headline--big headline--contrast">
        <h2 class="headline__title">Let's Gather</h2><!--.headline__title-->
        <div class="headline__text">A celebration of places</div><!--.headline__text-->
    </div><!--.headline-->
    <div class="wrap full-box">
        <div class="full-box--instagram">
            <div class="item--instagram clearfix">
                <h3 class="item--instagram__title">RitualWines</h3>
                <a href="#" title="Instagram" class="item--instagram__button btn btn__border">
                    Follow
                    <svg><use xlink:href="#shape-icon-insta" /></svg>
                </a>
                <div class="item--instagram__text no-mobile">
                    <p>
                        Ritual Wines Ritual began as a decade long quest to make delicious world-class Pinot Noir and Sauvignon Blanc from the Casablanca Valley in Chile.
                    </p>
                </div><!--.item--instagram__text-->
            </div><!--.item--instagram-->
            <div class="images--instagram clearfix">
                <a href="#" title="Titulo imagen" class="images--instagram__item">
                    <span class="images--instagram__item__content">
                        <img src="assets/instagram/instagram1.jpg" alt="Titutlo imagen">
                        <span class="images--instagram__content">
                            <span class="images--instagram__content--block">
                                <span class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </span><!--.images--instagram__like-->
                                <span class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </span><!--.images--instagram__like-->
                            </span><!--.images--instagram__content--block-->
                        </span><!--.images--instagram__content-->
                    </span><!--.images--instagram__item__content-->
                </a><!--.images--instagram__item-->
                <a href="#" title="titulo" class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0002_Layer%205.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </a><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0006_Layer%201.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0005_Layer%202.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0004_Layer%203.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0003_Layer-5.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0003_Layer%204.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
                <div class="images--instagram__item">
                    <div class="images--instagram__item__content">
                        <img src="assets/instagram/Vinos_0003_Layer-6.jpg" alt="Titutlo imagen">
                        <div class="images--instagram__content">
                            <div class="images--instagram__content--block">
                                <div class="images--instagram__like">
                                    <span>241</span>
                                    <svg><use xlink:href="#shape-icon-heart" /></svg>
                                </div><!--.images--instagram__like-->
                                <div class="images--instagram__message">
                                    <span>12</span>
                                    <svg><use xlink:href="#shape-icon-message" /></svg>
                                </div><!--.images--instagram__like-->
                            </div><!--.images--instagram__content--block-->
                        </div><!--.images--instagram__content-->
                    </div><!--.images--instagram__item__content-->
                </div><!--.images--instagram__item-->
            </div><!--.images--instagram-->
        </div><!--.full-box--instagram-->
    </div><!--.full-box-->
    <div class="wrap full-box clearfix">
        <div class="item--twitter">
            <div class="item--twitter__image" style="background-image: url(assets/instagram/instagram1.jpg);">
                <div class="back-filter"></div>
            </div><!--.item--twitter__image-->
            <a href="#" title="Twitter" class="item--twitter__button btn btn__border">
                Follow <span class="no-mobile">us</span>
                <svg><use xlink:href="#shape-icon-twitt" /></svg>
            </a>
            <div class="item--twitter__content" onclick="window.open('http://www.youtube.com','_blank');">
                <div class="item--twitter__image--profile">
                    <img src="assets/perfil-twitter.jpg" alt="Titulo foto">
                </div><!--.item--twitter__image--profile-->
                <h3 class="item--twitter__name">Ritual Wines</h3>
                <a href="#" title="RitualWines" class="item--twitter__channel">@RitualWines</a>
                <div class="item--twitter__text">
                    <p>
                        What a sunrise <a href="#" title="RitualWines">@RitualWines</a>! Qué tal el amanecer en <a href="#" title="RitualWines">@RitualWines</a>? <a href="#" title="sunrise">#sunrise</a> <a href="#" title="sunset">#sunset</a> <a href="#" title="winecountry">#winecountry</a> 
                    </p>
                </div><!--.item--twitter__text-->
                <div class="item--twitter__buttons">
                    <a href="#" title="retweet" class="item--twitter__retweet">
                        <span>4</span>
                        <svg><use xlink:href="#shape-icon-retweet" /></svg>
                    </a><!--.item--twitter__retweet-->
                    <a href="#" title="Fav" class="item--twitter__fav">
                        <span>12</span>
                        <svg><use xlink:href="#shape-icon-fav" /></svg>
                    </a><!--.item--twitter__fav-->
                </div><!--.item--twitter__buttons-->
            </div><!--.item--twitter__content-->
        </div><!--.item--twitter-->
        <div class="item--facebook">
            <a href="#" title="Titulo imagen" class="item--facebook__image">
                <img src="assets/estate.jpg" alt="Titulo imagen">
            </a><!--.item--facebook__image-->
            <a href="#" title="Facebook" class="item--facebook__button btn btn__border">
                Like <span class="no-mobile">us</span>
                <svg><use xlink:href="#shape-icon-face" /></svg>
            </a>
            <a href="#" title="titulo" class="item--facebook__content">
                <span class="item--facebook__text">
                    <span>
                        It's a mystical winter afternoon in the Casablanca Valley.
                    </span>
                </span><!--.item--facebook__text-->
            </a><!--.item--facebook__content-->
        </div><!--.item--facebook-->
    </div><!--.full-box-->
    <div class="headline headline--button">
        <a href="page-lets-gather.php" title="Let's gather" class="headline__title">Go to Let's Gather</a><!--.headline__title-->
    </div><!--.headline-->
</section>
<section class="pre-foo pre-foo--home">
    <div class="pre-foo__image">
        <img src="assets/footer.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->
    <div class="wrap pre-foo__content no-mobile">
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-waxing-crescent" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Waxing crecent</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-first-quarter" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>First quarter</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-waxing-gibbous" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Waxing gibbous</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-full-moon" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Full</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-wanning-gibbous" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Wanning gibbous</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-third-quarter" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Third quarter</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
        <div class="item--moon">
            <div class="item--moon__icon">
                <svg><use xlink:href="#shape-wanning-crescent" /></svg>
            </div><!--.item--moon__icon-->
            <div class="item--moon__text">
                <p>Wanning crecent</p>
            </div><!--.item--moon__text-->
        </div><!--.item--moon-->
    </div><!--.pre-foo__content-->
    <?php include 'footer.php'; ?>