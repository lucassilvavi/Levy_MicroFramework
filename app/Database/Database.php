<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 21/06/2018
 * Time: 13:21
 */

namespace App\DataBase;


use Illuminate\Database\Capsule\Manager as Capsule;


class Database
{
    public $capsule;

    public function __construct(string $path)
    {
        $this->capsule = new Capsule;
        $this->addConnection($path);
        // Setup the Eloquent ORM…
        $this->capsule->bootEloquent();
        $this->capsule->setAsGlobal();
    }

    private function addConnection(string $path)
    {
        $configDB = file_get_contents($path);
        $dbParams = (array)json_decode($configDB);

        foreach ($dbParams as $db) {
            $dbPar = (array) $db;
            $this->capsule->addConnection($dbPar, $dbPar['name']);
        }


    }
}