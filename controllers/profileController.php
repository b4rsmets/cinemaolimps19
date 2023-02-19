<?php

namespace controllers;

class profileController
{
    function __construct()
    {
        $usermodel = new \models\user();
        $indexView = new \views\profile();
    }
}
