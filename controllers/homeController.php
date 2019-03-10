<?php
class homeController extends controller {

	private $user;

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();

        $products = new Products();
        $categories = new Categories();

        $currentPage = 1;
        $offiset = 0;
        $limit = 3;

        if(!empty($_GET['p'])) {
            $currentPage = $_GET['p'];
        }

        $offiset = ($currentPage * $limit) - $limit;

        $dados['list'] = $products->getList($offiset , $limit);
        $dados['totalItens'] = $products->getTotal();
        $dados['numberOfPages'] = ceil($dados['totalItens'] / $limit);
        $dados['currentPage'] = $currentPage;
        $dados['categories'] = $categories->getList();

        $this->loadTemplate('home', $dados);
    }

}