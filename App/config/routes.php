<?php

/**
 * routes
 */

$app->mount("/", new App\Controllers\IndexController());
//$app->mount("/article",new App\Controller\ArticleController($app['article_manager'],$app['user_manager']) );