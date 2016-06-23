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
$subpage = 'single-the-wines';
$type = 'single';
$template = '';
$title = 'Pinot Noir';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner" style="background-image: url(assets/1.jpg);">
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
<div class="vino-color pinot-noir"><!--Aqui clase color vino-->
    <section class="wrap">
        <div class="content__single clearfix">
            <div class="box--half wine--single">
                <div class="item--wine color-1">
                    <div class="item--wine__background"></div><!--.item--wine__background-->
                    <div class="item--wine__content clearfix">
                        <div class="item--wine__image">
                            <a href="#" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                        </div><!--.item--wine__image-->
                    </div><!--.item--wine-->
                </div><!--.item--wine__content-text-->
            </div><!--.box--half-->
            <div class="box--half first-box">
                <div class="content__title">
                    <svg><use xlink:href="#shape-ritual" /></svg>
                    <h2>Pinot Noir</h2>
                </div><!--.content__title-->
                <div class="content__bajada">
                    <p>
                        Ritual Pinot Noir is a meticulous selection of specific vineyard lots and barrel selections from 20 hectares of Pinot Noir planted in the coolest sections of our Casablanca Valley property vineyard estate.
                    </p>
                    <p>
                        Faldeos are the coolest part of the property estate which gives us fresh fruit flavors with high acidity that softens beautifully with barrel fermentation.
                    </p>
                </div><!--.content__bajada-->
                <div class="faldeo">
                    <div class="faldeo__item">
                        <div class="faldeo__icon">
                            <svg><use xlink:href="#shape-icon-exposicion" /></svg>
                        </div>
                        <p>
                            North-facing vineyards
                        </p>
                    </div><!--.faldeo__item-->
                    <div class="faldeo__item">
                        <div class="faldeo__icon">
                            <svg><use xlink:href="#shape-icon-suelo" /></svg>
                        </div>
                        <p>
                            Mica granite soils, sandy loam
                        </p>
                    </div><!--.faldeo__item-->
                    <div class="faldeo__item">
                        <div class="faldeo__icon">
                            <svg><use xlink:href="#shape-icon-edad" /></svg>
                        </div>
                        <p>
                            Planted in 1998
                        </p>
                    </div><!--.faldeo__item-->
                    <div class="faldeo__item">
                        <div class="faldeo__icon">
                            <svg><use xlink:href="#shape-icon-clones" /></svg>
                        </div>
                        <p>
                            9 and 16 clones
                        </p>
                    </div><!--.faldeo__item-->
                </div><!--.box--half-->
                <div class="content__bajada">
                    <p>
                        Ritual Pinot Noir 2014 opens with fresh and generous fruity aromas of cherries and raspberries. Refreshing and juicy with a medium body. The palate is round, smooth and balanced with a silky, velvety finish.
                    </p>
                </div><!--.box--half-->
            </div><!--.box--half-->


        </div><!--.content__single-->
    </section>
    <div class="information clearfix">
        <form class="top-bar clearfix">
            <p class="top-bar__title">Technical Information</p>
            <div class="style-select">
                <svg><use xlink:href="#shape-flecha" /></svg>
                <select name="select" id="">
                    <option value="select">Select document year</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                </select>
            </div>
            <a href="#" download title="Download" class="btn btn__border">Download</a>
            <div class="single-share">
                <p>Share:</p>
                <a href="#" title="Mail">
                    <svg><use xlink:href="#shape-icon-letter-fill" /></svg>
                </a>
                <a href="#" title="Facebook">
                    <svg><use xlink:href="#shape-icon-face" /></svg>
                </a>
                <a href="#" title="Twitter">
                    <svg><use xlink:href="#shape-icon-twitt" /></svg>
                </a>
                <a href="#" title="Instagram">
                    <svg><use xlink:href="#shape-icon-insta" /></svg>
                </a>
            </div><!--.single-share-->
        </form>
        <div class="information__banner">
            <div class="information__banner__image" style="background-image: url(assets/Singlewine1.jpg);"></div><!--.information__banner__image-->
            <div class="information__banner__content">
                <div class="information__banner__icon">
                    <svg><use xlink:href="#shape-wanning-crescent" /></svg>
                </div><!--.information__banner__icon-->
                <div class="information__banner__text">
                    <p>
                        Refreshing, juicy palate, abundant in cherry and raspberry with round, silky tannins.
                    </p>
                </div><!--..information__banner__text-->
            </div><!--.information__banner-->
        </div><!--.information__banner__content-->
    </div><!--.information-->
    <section class="awards clearfix wrap">
        <h2 class="award__title">Award</h2>
        <div class="awards__container">
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Curabitur a purus ut magna accumsan placerat.
                    </p>
                </div><!--.award__text-->
                <div class="award__button clearfix">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Curabitur a purus ut magna accumsan placerat.
                    </p>
                </div><!--.award__text-->
                <div class="award__button clearfix">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
            <div class="award__item">
                <div class="award__icon">
                    <svg><use xlink:href="#shape-award" /></svg>
                </div><!--.award__icon-->
                <div class="award__text">
                    <p>
                        Phasellus vitae semper tortor, hendrerit ultricies neque. Morbi ultricies nisl in massa auctor, vitae rutrum nulla cursus.
                    </p>
                </div><!--.award__text-->
                <div class="award__button">
                    <a href="#" title="Read more" class="btn btn__border--color">Read more</a>
                    <a href="#" title="Download sellsheet" class="btn btn__border" download>Download sellsheet</a>
                </div><!--.award__button-->
            </div><!--.award__item-->
        </div><!--.award__container-->
    </section><!--.awards.wrap-->
    <section class="wrap related">
        <div class="headline headline__dark">
            <h2 class="headline__title">The Wines</h2><!--.headline__title-->
            <div class="headline__text">Pure expressions</div><!--.headline__text-->
        </div><!--.headline-->
        <div class="js-related-slide">
            <ul class="box--flex slides">
                <li class="box--half wine--page">
                    <div class="item--wine clearfix rose">
                        <div class="item--wine__background"></div><!--.item--wine__background-->
                        <div class="item--wine__content clearfix">
                            <div class="item--wine__image">
                                <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                            </div><!--.item--wine__image-->
                            <div class="item--wine__text">
                                <div class="item-wine__content-text">
                                    <h2 class="item-wine__title">
                                        <a href="single-the-wines.php" title="Titulo vino">Rosé</a>
                                    </h2><!--.item-wine__title-->
                                </div><!--.item-wine__content-->
                            </div><!--.item--wine__text-->
                        </div><!--.item--wine-->
                    </div><!--.item--wine__content-text-->
                </li><!--.box--half-->
                <li class="box--half wine--page">
                    <div class="item--wine clearfix chardonnay">
                        <div class="item--wine__background"></div><!--.item--wine__background-->
                        <div class="item--wine__content clearfix">
                            <div class="item--wine__image">
                                <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                            </div><!--.item--wine__image-->
                            <div class="item--wine__text">
                                <div class="item-wine__content-text">
                                    <h2 class="item-wine__title">
                                        <a href="single-the-wines.php" title="Titulo vino">Chardonnay</a>
                                    </h2><!--.item-wine__title-->
                                </div><!--.item-wine__content-->
                            </div><!--.item--wine__text-->
                        </div><!--.item--wine-->
                    </div><!--.item--wine__content-text-->
                </li><!--.box--half-->
                <li class="box--half wine--page">
                    <div class="item--wine clearfix syrah">
                        <div class="item--wine__background"></div><!--.item--wine__background-->
                        <div class="item--wine__content clearfix">
                            <div class="item--wine__image">
                                <a href="single-the-wines.php" title="titulo vino"><img src="assets/L_0001_Cabernet.png.png" alt="Titulo Vino"></a>
                            </div><!--.item--wine__image-->
                            <div class="item--wine__text">
                                <div class="item-wine__content-text">
                                    <h2 class="item-wine__title">
                                        <a href="single-the-wines.php" title="Titulo vino">Syrah</a>
                                    </h2><!--.item-wine__title-->
                                </div><!--.item-wine__content-->
                            </div><!--.item--wine__text-->
                        </div><!--.item--wine-->
                    </div><!--.item--wine__content-text-->
                </li><!--.box--half-->
            </ul><!--.box--flex-->
        </div><!--.js-related-slide-->
    </section>
</div><!--.vino-color-->
<section class="pre-foo pre-foo--sinlge-wines">
    <div class="pre-foo__image">
        <img src="assets/footer-bg.jpg" alt="Titulo Imagen">
    </div><!--.pre-foo__image-->


<?php include 'footer.php'; ?>