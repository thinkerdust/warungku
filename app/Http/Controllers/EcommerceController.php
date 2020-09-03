<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function home() {
        $nav = "home";
        return view("ecommerce.home", compact("nav"));
    }

    public function contact() {
        $nav = "contact";
        return view("ecommerce.contact", compact("nav"));
    }

    public function foodProduct() {
        $nav = "product";
        return view("ecommerce.food", compact("nav"));
    }

    public function drinkProduct() {
        $nav = "product";
        return view("ecommerce.drink", compact("nav"));
    }

    public function householdProduct() {
        $nav = "product";
        return view("ecommerce.household", compact("nav"));
    }

}
