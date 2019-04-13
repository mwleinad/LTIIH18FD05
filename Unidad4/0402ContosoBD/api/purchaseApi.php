<?php 
require '../init.php';
use App\Services\PurchaseService;

$purchaseService = new PurchaseService();
echo $purchaseService->purchase($_GET['product']);