<?php
/**
 * Created by PhpStorm.
 * User: johna
 * Date: 06/02/2018
 * Time: 17:41
 */

namespace Blog;
class Module
{

    public function getConfig()
    {
        return include __DIR__ ."/../config/module.config.php";
    }


}