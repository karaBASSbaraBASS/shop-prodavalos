<?php

/**
 * Class CatalogController
 * Контроллер для работы с каталогом товаров
 */
class RockController extends Controller {

    public function __construct(){
        parent::__construct();
    }


    /**
     * Отображает список всех товаров, отсортирован по дате добавления
     *
     * @param int $page текущая страница
     * @return bool
     */
    public function actionIndex () {

        //Вывод категорий
       

        $page = 1;
        $CDProducts = Product::getCdProducts($page); //$productsList;

        //Общее кол-во товаров (для пагинации)
        $total = Product::getTotalProducts();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        //вывод количества категорий
        $catList = product::getCategoryCount();

        $catFilter = product::getCategory();

        $data['title'] = 'Welcome To CD Catalog ';
        //Cd продукты
        $data['products'] = $catFilter;
        
        $data['pagination'] = $pagination;
        //Категории и количества
        $data['categories'] = $catList;

        $this->_view->rendertemplate('header',$data);
        $this->_view->render('Rock/index',$data);
        $this->_view->rendertemplate('footer',$data);
    }

}


