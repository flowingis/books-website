<!DOCTYPE HTML>
<html>
<head>
    <title><?php $view->slots->output('title', 'Home') ?>Pro PHP Refactoring by Francesco Trucchia and Jacopo Romei</title>
    <meta charset="utf-8" />

    <link rel="stylesheet" href="<?php echo $view->assets->getUrl('css/prophp-main.css') ?>" type="text/css" />

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>
<body id="index" class="home">

    <header>
        <div class="cover">
            <a href="<?php echo $view->router->generate('homepage') ?>"><img src="<?php echo $view->assets->getUrl('images/prophp-cover.gif') ?>" alt="cover" /></a>
        </div>
        <h1>Pro PHP Refactoring <strong>by <a href="http://www.cphp.it" target="_blank">Francesco Trucchia</a> and <a href="http://www.sviluppoagile.it" target="_blank">Jacopo Romei</a></strong></h1>

        <nav>
            <ul>
                <li><a href="<?php echo $view->router->generate('page', array('page' => 'about')) ?>">About</a></li>
                <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>">Content</a></li>
                <li><a href="http://www.amazon.com/Pro-PHP-Refactoring-Francesco-Trucchia/dp/1430227273" target="_blank">Buy now</a></li>
                <li><a href="http://github.com/cphp/prophprefactoring-bundled_code" target="_blank">Code</a></li>
                <li><a href="http://www.apress.com/book/view/1430227273" target="_blank">Apress</a></li>
                <li><a href="http://www.php.net" target="_blank">PHP</a></li>
            </ul>
        </nav>
    </header>

    <div class="clear"></div>
    <aside>
        <h3>Table of Content</h3>
        <ol>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter1">Introduction</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter2">Finding "Bad Smells" in code</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter3">Introduction to Refactoring</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter4">Test-First Development</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter5">Refactoring Tools</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter6">Principles and Rules</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter7">Structuring Behavior</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter8">Changing Class Responsabilities</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter9">Dealing with Data Rationalization</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter10">Reducing to Essential Conditional Executions</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter11">Simplifying Method Calls</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter12">Simplifying Generalization Relationships</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter13">Legacy Code</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter14">Regression Tests</a></li>
            <li><a href="<?php echo $view->router->generate('page', array('page' => 'content')) ?>#chapter15">Refactoring with Patterns</a></li>
        </ol>
    </aside>

    <section>
        <?php $view->slots->output('_content') ?>
    </section>

    <div class="clear"></div>
    <footer>
        <p>All &copy; 2010 Francesco Trucchia &amp; Jacopo Romei</p>
    </footer>

  </body>
</html>