<?php
// src/Controller/ItemController.php
require __DIR__ . '/../Model/itemManager.php';

$items = selectAllItems();

require __DIR__ . '/../View/item.php';
?>
