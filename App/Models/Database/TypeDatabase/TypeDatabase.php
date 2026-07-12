<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 11/07/2026
 * Time: 11:35
 */
namespace App\Models\Database\TypeDatabase;

use App\Interfaces\InterfaceTypeDatabase;

class TypeDatabase
{
    private $interfaceTypeDatabase;

    public function __construct(InterfaceTypeDatabase $interfaceTypeDatabase)
    {
        $this->interfaceTypeDatabase = $interfaceTypeDatabase;
    }

    public function getDatabase()
    {
        return $this->interfaceTypeDatabase;
    }


}