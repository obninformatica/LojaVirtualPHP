<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 11/07/2026
 * Time: 09:38
 */

namespace App\Models\Database\ConnectDatabase;
use App\Interfaces\InterfaceConnectDatabase;

class ConnectMysqliDatabase implements InterfaceConnectDatabase
{
    private $mysqli;

    public function __construct()
    {
        //$this->mysqli = \Mysqli("localhost", "root", "", "loja_phpoo");
        $this->mysqli = new \Mysqli("localhost","root","","loja_phpoo");
    }

    public function connectDatabase()
    {
        return $this->mysqli;
    }
}