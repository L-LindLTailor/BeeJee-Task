<?php
/**
 * Created Using PhpStorm.
 * User: Lind_L.Tailor
 * Date: 13.07.2020
 */

class Controller
{
    public $view;
    public $model;
    protected $data;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }

}