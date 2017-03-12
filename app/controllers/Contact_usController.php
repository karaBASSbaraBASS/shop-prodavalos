<?php

/**
 * Class IndexController
 * Контроллер контактной страницы
 */
class Contact_usController extends Controller {

    public function __construct(){
        parent::__construct();
    }

    public function actionIndex () {
        $data['title'] = 'Welcome To ';
        //Последние продукты
        //$data['products'] = Product::getLatestProducts();
        $this->_view->rendertemplate('header',$data);
        $this->_view->render('contact_us/index',$data);
        $this->_view->rendertemplate('footer',$data);

    }

}
