<?php
require './partials/nav.php';
require 'Transaction.php';
$transaction = new Transaction(100,'Chocolate');
$transaction->addTax(8)->discount(10);
var_dump($transaction);
$prt = $transaction->getAmount();
echo $prt;
?>