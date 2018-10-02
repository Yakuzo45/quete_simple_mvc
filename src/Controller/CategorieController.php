<?php
// src/Controller/ItemController.php
namespace Controller;

use Model\CategorieManager;



class CategorieController
{
    public function index()
    {
        $CategorieManager = new CategorieManager();
        $Categorie = $CategorieManager->selectAllItems();
        require __DIR__ . '/../View/categories.php';
    }

    public function show($id)
    {
        $CategorieManager = new CategorieManager();
        $Categorie = $CategorieManager->selectOneItem($id);

        require __DIR__ . '/../View/showCategorie.php';

    }
}
?>