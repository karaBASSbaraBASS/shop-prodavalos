<?php

/**
 * Class IndexController
 * Контроллер новостной страницы
 */
class NewsController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function actionIndex () {
        $data['title'] = 'Welcome To ';
        //Последние продукты
        //$data['products'] = Product::getLatestProducts();
        $this->_view->rendertemplate('header',$data);
        $this->_view->render('news/index',$data);
        $this->_view->rendertemplate('footer',$data);

    }

}
