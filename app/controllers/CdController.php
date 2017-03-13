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
    public function actionIndex () {

        //Вывод категорий
        $categories = Category::getCategory();

        /*$productsList = array( 
            array("id" => "1",
            "name" => "Моё желание",
            "category_id" => "3",
            "code" => "1839707",
            "price" => "85",
            "disc" => "1",
            "availability" => "60",
            "brand" => "Виталий Козловский",
            "description" => "В конце декабря 2016 года Виталий Козловский отмечает годовщину творческой деятельности. Дата ознаменуется выходом нового альбома артиста. С момента предыдущего релиза «Будь сильнее» прошло чуть более двух лет, все чувства и настроения которых вылились в новую пластинку с символичным «говорящим» названием - «Мое желание». Заглавным треком альбома стала одноименная композиция, которую артист создал вместе с композитором Русланом Квинтой и автором Виталием Куровским.",
            "is_new" => "0",
            "is_recomended" => "50",
            "status" => "1"),
        );
*/      $page = 2;
        $latestProducts = Product::getCdProducts($page); //$productsList;

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


