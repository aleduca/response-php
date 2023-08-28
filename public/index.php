<?php

use core\library\Session;

session_start();

require '../vendor/autoload.php';

require '../app/config/bootstrap.php';

require '../app/routes/web.php';

Session::flash_remove();
