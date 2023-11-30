<?php

declare(strict_types=1);
require_once('namespace/PaymentGateway/Stripe/Transaction.php');

/*
This class does not have any namespace defiened to it
so PHP will try to locate this file in the global space 
and it find it there and therefor everythink works.
*/
var_dump(new Transaction());
