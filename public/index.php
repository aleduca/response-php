<?php

use core\library\Session;

require '../vendor/autoload.php';

session_start();

require '../app/config/bootstrap.php';

require '../app/routes/web.php';

Session::flash_remove();
