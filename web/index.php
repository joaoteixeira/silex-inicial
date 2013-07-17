<?php
    
    /**
     * @constant GLOBAL
     * ALL Projects
     */

    define( 'PATH_ROOT', dirname( __DIR__ ) );
    //define( 'PATH_CACHE', PATH_ROOT . '/cache' );
    //define( 'PATH_LOCALES', PATH_ROOT . '/locales' );
    //define( 'PATH_LOG', PATH_ROOT . '/log' );
    define( 'PATH_WEB', PATH_ROOT . '/web' );
    define( 'PATH_APP', PATH_ROOT . '/App' );
    define( 'PATH_CONFIG', PATH_APP . '/config' );
    define( 'PATH_VENDOR', PATH_ROOT . '/vendor' );
    define( 'PATH_VIEWS', PATH_APP . '/views' );
    
    require_once PATH_CONFIG.'/config.php';

    // definitions
    
    //$app->run();
    $app['http_cache']->run();
?>
 