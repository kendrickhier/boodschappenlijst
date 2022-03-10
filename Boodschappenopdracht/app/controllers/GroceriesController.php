<?php

namespace App\Controllers;

use App\Core\App;

class GroceriesController
{
    public function create() 
    {
        App::get("database")->insert("groceries", $_POST);

        redirect("groceries");
    }
}