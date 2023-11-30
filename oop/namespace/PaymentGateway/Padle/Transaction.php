<?php

declare(strict_types=1);

/* when define a function, constant or a class without a namespace definition, 
by default they will be put in a global space 
(like this example the Transaction class is put in a global space)*/

namespace PaymentGateway\Padle;

class Transaction
{
    public function __construct()
    {
        echo 'Within PaymentGateway/Padle/Transaction.php</br>';
        // PHP will try to load the class from the local namespace
        // and in this situation cutomerProfile and Transaction class have the same namespace.
        // so we can initialize customerProfile within transaction class.
        var_dump(new cutomerProfile());
        echo '</br>';
        /*
        php will try to locate Email class within PaymentGateway\Padle namespace
        addin a backslash \ tell that's this is a fully qualified name
        and then php will not try to find Email class whitin the local namespace in this file.
        */
        var_dump(new \Notification\Email());
        echo '</br>';

        /*
        for functions and constans php will use the global namespace if the name of the function or 
        constant is not defiend within the local namespace by default.
        addin a backslash to the global function tell php to not to try to look for the function
        within the local namespace instead go directly to the global namespace
        and that cann speed-up the application
        If a function named explode() exsits within the local namespace php will get it
        instead of the global namespace function. 
        */
        var_dump(explode(',', 'hello,world'));
        echo '</br>';
    }

    public function __destruct()
    {
        echo '</br>destruct ..</br>';
    }
}
