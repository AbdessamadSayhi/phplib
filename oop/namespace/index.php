<?php

declare(strict_types=1);

use PaymentGateway\Padle\Transaction;

require_once('PaymentGateway/Stripe/Transaction.php');
require_once('PaymentGateway/Padle/Transaction.php');

/*
When you require 2 classes with the same name
and they have not namespaced(meaning they are in the global space),
this will cause an error (Fatal error: Cannot declare class Transaction, because the name is already in use in )
*/
// this will no longer work because PHP cannot desice which class to use.
//var_dump(new Transaction());

// instead we will have to use the namespace when declaring the class.
var_dump(new Transaction());
echo '</br>';
var_dump(new \PaymentGateway\Stripe\Transaction());
