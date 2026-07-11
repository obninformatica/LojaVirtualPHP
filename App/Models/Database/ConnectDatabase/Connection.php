<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 11/07/2026
 * Time: 09:33
 */

namespace App\Models\Database\ConnectDatabase;
use App\Interfaces\InterfaceConnectDatabase;

class Connection
{
    private $interfaceConnectDatabase;

    public function __construct(InterfaceConnectDatabase $interfaceConnectDatabase)
    {
        $this->interfaceConnectDatabase = $interfaceConnectDatabase;
        //$this->interfaceConnectDatabase = new ConnectPdoDatabase();
    }

    public function connectDatabase()
    {
        return $this->interfaceConnectDatabase->connectDatabase();

    }

}