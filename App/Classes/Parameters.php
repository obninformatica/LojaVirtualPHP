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
        dump($this->parameter);
    }

    public function getParameterMethod($object, $method)
    {
        if(method_exists($object,$method))
        {
            $this->explodeParameters();

            if(method == 'index')
            {
                return isset($this->parameter[2]) ? $this->parameter[2] : null;
            }

            return isset($this->parameter[3]) ? $this->parameter[3] : null;
        }
    }

}