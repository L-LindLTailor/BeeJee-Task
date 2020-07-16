<?php
/**
 * Created Using PhpStorm.
 * User: Lind_L.Tailor
 * Date: 13.07.2020
 */

class View
{
    public function render($template, $data)
    {
        include ROOT . '/' . VIEWS_PATH . $template.'.php';
    }

}