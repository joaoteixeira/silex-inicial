<?php

    // carrega o autoload para @var $loader
    $loader = require_once PATH_VENDOR . '/autoload.php';
     
    // instancia a app silex
    $app = new Silex\Application();
    
    
    // Cache diretorio -> necessario para instanciar o twig
    $app['cache.dir'] = PATH_ROOT . '/cache';
    
    # registra service de cache
    $app->register(new Silex\Provider\HttpCacheServiceProvider(), array('http_cache.cache_dir' => PATH_ROOT.'/cache'));
    
    // inicia o autoloader
    $app['autoloader'] = $app->share(function()use($loader){return $loader;});
    // instancia a pasta App
    $app['autoloader']->add("App", PATH_ROOT);
    
    
    // import TwigServiceProvider -> para utilizacao do twig
    use Silex\Provider\TwigServiceProvider;
    
    // registra extensao Twig
    $app->register(new TwigServiceProvider(), array(
        'twig.class_path'   => PATH_VENDOR . '/Twig/lib',
        'twig.path'         => array(
                                        PATH_APP . '/views',
                                        //PATH_WEB . '/content'
                                    ),
        'twig.options' => array(
                                'charset'           => 'utf-8',
                                'strict_variables'  => true,
                                'cache'             => $app['cache.dir']
                               )
    ));
   
    
    
    // EN: Get routes.
    require 'routes.php';
    $app['debug'] = true;
    return $app;
    
