<?php

declare(strict_types=1);

/* 
Here we are using 2 classes with the same name within 1 file
and this wll cause an error 
because PHP cannot use PaymentGateway\Stripe\Transaction as Transaction
because it's already in use.

use PaymentGateway\Padle\Transaction;
use PaymentGateway\Stripe\Transaction;

*/

use PaymentGateway\Padle\Transaction;
// here we use aliasing to get rid of the conflit.
use PaymentGateway\Stripe\Transaction as StripeTransaction;

require_once('PaymentGateway/Stripe/Transaction.php');
require_once('PaymentGateway/Padle/Transaction.php');
require_once('PaymentGateway/Padle/cutomerProfile.php');
require_once('Notification/Email.php');

/*
When you require 2 classes with the same name
and they have not namespaced(meaning they are in the global space),
this will cause an error (Fatal error: Cannot declare class Transaction, because the name is already in use in )
*/
// this will no longer work because PHP cannot desice which class to use.
//var_dump(new Transaction());

// instead we will have to use the namespace when declaring the class.
/* var_dump(new Transaction());
echo '</br>';
var_dump(new \PaymentGateway\Stripe\Transaction()); */


$padleTransaction = new Transaction();
// using the alias to initilize the stripe transaction.
$stripeTransaction = new StripeTransaction();

var_dump($padleTransaction, $stripeTransaction);
