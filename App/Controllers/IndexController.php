<?php

/**
 * Description of indexController
 *
 * @author Joao
 */

namespace App\Controllers
{
    use Silex\Application;
    use Silex\ControllerProviderInterface;
    use Silex\ControllerCollection;
    
    class IndexController implements ControllerProviderInterface 
    {
        
        public function index(Application $app){
            //$articles = $app['article_manager']->getArticles(/*sorting*/array('created_at'=>-1));
            $articles = "teste, index, ok";
            return $app["twig"]->render("index/index.twig", array('articles' => $articles, "message" => "homepage"));
        }
        
        
        public function connect(Application $app){
            // créer un nouveau controller basé sur la route par défaut
            $index = $app['controllers_factory'];
            $index->match("/",'App\Controllers\IndexController::index')->bind("index.index");
            //$index->match("/info",'App\Controller\IndexController::info');
            //$index->match("/about",'App\Controller\IndexController::about')->bind("index.about");
            //$index->match("/contact",'App\Controller\IndexController::contact')->bind("index.contact");
            return $index;
        }

        
    }
    
}
