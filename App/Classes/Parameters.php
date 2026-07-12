<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 10/07/2026
 * Time: 15:34
 */
namespace App\Classes;

class Parameters
{
    private $uri;
    private $parameter;

    public function __construct()
    {
        $uri = new Uri();
        $this->uri = $uri->getUri();
    }

    public function explodeParameters()
    {
        // produto/calca/tipo/jeans/grande/azul
        $explodeUri = explode('/',$this->uri);
        $this->parameter = array_filter($explodeUri);
        //dump($this->parameter);
    }

    public function getParameterMethod($object, $method)
    {
        if(method_exists($object,$method))
        {
            $this->explodeParameters();

            if($method == 'index')
            {
                unset($this->parameter[1]);
                return isset($this->parameter[2]) ? array_values($this->parameter) : null;
            }
            unset($this->parameter[1],$this->parameter[2]);
            return isset($this->parameter[3]) ? array_values($this->parameter) : null;
        }
    }

}