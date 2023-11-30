<?php

declare(strict_types=1);

require_once('namespace/PaymentGateway/Stripe/Transaction.php');
require_once('namespace/PaymentGateway/Padle/Transaction.php');

/*
When you require 2 classes with the same name
and they have not namespaced(meaning they are in the global space),
this will cause an error (Fatal error: Cannot declare class Transaction, because the name is already in use in )
*/
var_dump(new Transaction());
