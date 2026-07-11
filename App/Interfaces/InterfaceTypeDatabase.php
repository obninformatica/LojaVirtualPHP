<?php
/**
 * Created by PhpStorm.
 * User: Osvaldo
 * Date: 11/07/2026
 * Time: 11:19
 */

namespace App\Interfaces;


interface InterfaceTypeDatabase
{
    public function prepare($sql);
    public function bindValue($key,$value);
    public function execute();
    public function rowCount();
    public function fetch();
    public function fetchAll();


}