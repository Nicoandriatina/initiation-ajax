<?php
require_once 'model.php';
    $db = new Database();
    // creation des factures
    if(isset($_POST['action']) && $_POST['action'] == 'create')
{
    extract($_POST);
    $returned=(int)$received - (int)$amount;
    $db->create($customer,$cashier, (int)$amount, (int)$received, (int) $returned, $state);
    echo'perfect';
    
}

?>