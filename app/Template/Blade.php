<?php
/**
 * Created by PhpStorm.
 * User: lucas.vieira
 * Date: 20/06/2018
 * Time: 17:37
 */

namespace App\Template;

use duncan3dc\Laravel\BladeInstance;

class Blade
{
    /**
     * @var array Paramts
     */
    private $paramts = array();
    /**
     * @var BladeInstance
     */
    private $blade;
    /**
     * @var string viewHTML
     */
    private $view;

    /**
     * Blade constructor.
     */
    public function __construct()
    {
        $this->blade = new BladeInstance("./../src/views", "./../src/cache/views");
    }

    /**
     * @param string $view
     * @return $this
     */
    public function view(string $view)
    {
        $this->view = $view;
        return $this;
    }

    /**
     * @param array $paramts
     * @return $this
     */
    public function with(array $paramts)
    {
        foreach ($paramts as $k => $paramt) {
            $this->paramts[$k] = $paramt;
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function render()
    {
        echo $this->blade->render($this->view, $this->paramts);
        return true;
    }
}