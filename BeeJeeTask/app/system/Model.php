<?php
/**
 * Created Using PhpStorm.
 * User: Lind_L.Tailor
 * Date: 13.07.2020
 */

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = new DB();
    }

}