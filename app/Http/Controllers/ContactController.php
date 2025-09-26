<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contact = "09033901750";
        return view("contact", compact("contact"));
    }
}
