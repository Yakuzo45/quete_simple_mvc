<?php
// src/Controller/ItemController.php
namespace Controller;

use Model\CategorieManager;
use Twig_Loader_Filesystem;
use Twig_Environment;


class CategorieController
{
    protected $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $CategorieManager = new CategorieManager();
        $Categorie = $CategorieManager->selectAllItems();
        return $this->twig->render('Categorie/categories.html.twig', ['categorie' => $Categorie]);
    }

    public function show($id)
    {
        $CategorieManager = new CategorieManager();
        $Categorie = $CategorieManager->selectOneItem($id);

        return $this->twig->render('Categorie/categorie.html.twig', ['categorie' => $Categorie]);

    }
}
?>