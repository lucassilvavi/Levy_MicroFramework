<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 25/06/2018
 * Time: 10:30
 */

namespace App\Controllers;

use App\Template\Blade;

class HomeController
{
    private $blade;

    public function __construct()
    {
        $this->blade = new Blade();
    }

    public function index()
    {
        return $this->blade->view('home')->render();
    }
}