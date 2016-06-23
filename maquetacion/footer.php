<?php
/**
 * Footer general
 *
 * @package		ritual
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<footer class="footer">
    <div class="logo-foo">
        <img src="img/logo.svg" alt="Ritual">
    </div><!--.logo-foo-->
    <ul class="menu-foo">
        <li>
            <a href="page-trade.php" title="Trade" class="<?php if ( $page == 'trade' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Trade</a>
        </li>  
        <li>
            <a href="page-importers.php" title="Importers" class="<?php if ( $page == 'importers' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Importers</a>
        </li>
        <li>
            <a href="#" title="Find Us">Find Us</a>
        </li>
    </ul><!--.menu-foo-->
    <div class="varieties-foo">
        <a href="#" title="Veramonte">
            <svg><use xlink:href="#shape-veramonte" /></svg>
        </a>
        <a href="#" title="Primus">
            <svg><use xlink:href="#shape-primus" /></svg>
        </a>
        <a href="#" title="Neyen">
            <svg><use xlink:href="#shape-neyen" /></svg>
        </a>
        <a href="#" title="Spiral">
            <svg><use xlink:href="#shape-spiral" /></svg>
        </a>
    </div><!--.varieties-foo-->
    <a href="http://www.reactor.cl" title="By Reactor" class="byreactor">
        By
        <span>
            <svg><use xlink:href="#shape-icon-reactor" /></svg>
        </span>
    </a>
</footer><!--.footer-->
</section><!--.pre--foo-->
<script src="js/app.min.js"></script>
</body>
</html>