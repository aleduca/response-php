<?php

use app\interfaces\PaymentInterface;
use app\library\PagseguroPayment;
use core\library\Container;

$services = base_path() . '/app/services/services.php';

$container = new Container;
$container->bind(PaymentInterface::class, PagseguroPayment::class);
$container = $container->build(['services']);
