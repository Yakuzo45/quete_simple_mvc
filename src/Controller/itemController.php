<?php
// src/Controller/ItemController.php
namespace Controller;

use Model\itemManager;



class itemController
{
    public function index()
    {
        $itemManager = new itemManager();
        $items = $itemManager->selectAllItems();
        require __DIR__ . '/../View/item.php';
    }

}
?>
