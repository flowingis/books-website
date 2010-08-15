<!DOCTYPE HTML>
<html>
<head>
    <title><?php $view->slots->output('title', 'Home') ?> / Pro PHP Refactoring by Francesco Fullone and Francesco Trucchia</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="<?php echo $view->assets->getUrl('css/main.css') ?>" type="text/css" />

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body id="index" class="home">
    <div id="wrapper">
    <header>
        <div class="cover">
            <a href="<?php echo $view->router->generate('homepage') ?>"><img width="170px" src="<?php echo $view->assets->getUrl('images/cover.jpg') ?>" alt="cover" /></a>
        </div>
        <h1>eZ Publish 4: Enterprise Web Sites Step-by-Step <strong>by <a href="http://www.fullo.net" target="_blank">Francesco Fullone</a> and <a href="http://www.cphp.it" target="_blank">Francesco Trucchia</a></strong></h1>

        <nav>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'about')) ?>" target="">About</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>" target="">Content</a></li>
            <li><a href="http://www.amazon.com/eZ-Publish-Enterprise-Step-Step/dp/1904811647" target="_blank">Buy Now</a></li>
            <li><a href="https://www.packtpub.com/support?nid=4046" target="_blank">Code</a></li>
            <li><a href="https://www.packtpub.com/ez-publish-4-enterprise-web-sites-step-by-step/book" target="_blank">Packt</a></li>
            <li><a href="http://ez.no/ezpublish" target="_blank">eZ Publish</a></li>
        </nav>
    </header>

    <div class="clear"></div>
    <aside>
        <h3>Table of Content</h3>
        <ol>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#install" target="">Installing eZ Publish</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#siteaccess" target="">Creating Our Siteaccesses</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#contentclass" target="">Defining and Creating Content Classes</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#contentstructure" target="">Creating Content Structure</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#extension" target="">Creating an Extension</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#design" target="">Creating a Design</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#template" target="">Template Content Class</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#forum" target="">Adding Community Forums</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#local" target="">Internationalization and Localization</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#roles" target="">Creating Roles and Privileges</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#config" target="">Cache Configuration</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#deployment" target="">Deployment</a></li>
        </ol>
    </aside>

    <section id="content">
        <?php $view->slots->output('_content') ?>
    </section>

    <div class="clear"></div>

    <footer>
        <p>All &copy; 2009 - 2010 Francesco Fullone &amp; Francesco Trucchia</p>
    </footer>
    </div>

  </body>
</html>
