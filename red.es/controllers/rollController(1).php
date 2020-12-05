<?php

require 'models/roll.php';

class rollController
{
    private $model;

    public function __construct()
    {
        $this->model= new roll;

    }

    public function index()
    {
        require 'views/layout.php';
        $roll = $this->model->getAll();
        require 'views/roll/roll.php';
    }

}