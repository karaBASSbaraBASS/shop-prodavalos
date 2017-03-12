<?php

/**
 * Class CatalogController
 * Контроллер для работы с каталогом товаров
 */
class CdController extends Controller {

    public function __construct(){
        parent::__construct();
    }


    /**
     * Отображает список всех товаров, отсортирован по дате добавления
     *
     * @param int $page текущая страница
     * @return bool
     */
    public function actionIndex ($page = 1) {

        //Вывод категорий
        $categories = Category::getCategory();

        $latestProducts = Product::getLatestProducts($page);

        //Общее кол-во товаров (для пагинации)
        $total = Product::getTotalProducts();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');


        $data['title'] = 'Welcome To CD Catalog ';
        //Последние продукты
        $data['products'] = $latestProducts;
        $data['categories'] = $categories;
        $data['pagination'] = $pagination;
        $this->_view->rendertemplate('header',$data);
        $this->_view->render('cd/index',$data);
        $this->_view->rendertemplate('footer',$data);
    }

}
