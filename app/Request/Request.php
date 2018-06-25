<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 21/06/2018
 * Time: 11:16
 */

namespace App\Request;


abstract class Request
{
    private $inputs = array();
    protected $campus = array();

    protected function run()
    {
        foreach ($this->campus as $input => $validate){
            $this->inputs[$input] = filter_input(INPUT_POST, $input);
        }
    }

    public function all()
    {
        $this->run();

        return (object) $this->inputs;
    }
}