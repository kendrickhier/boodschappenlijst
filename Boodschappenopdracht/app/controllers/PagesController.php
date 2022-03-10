<?php

namespace App\Controllers;

use App\Core\App;

class PagesController 
{
    public function home() 
    {
        $pageTitle = "Home";

        $totaal = 0.00;
        $boodschappen = App::get("database")->selectAll("groceries", "Grocery");
        
        return view("index", compact("pageTitle", "totaal", "boodschappen"));
    }

    public function create() 
    {
        $pageTitle = "Create";

        return view("create", compact("pageTitle"));
    }

}