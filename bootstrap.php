<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 18/06/2018
 * Time: 10:15
 */

require __DIR__ . '/vendor/autoload.php';

use App\DataBase;
new DataBase\Database(__DIR__ . '/.env.json');
require __DIR__ . '/src/router/router.php';


