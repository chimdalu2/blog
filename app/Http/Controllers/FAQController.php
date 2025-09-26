<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function faq()
    {
        $question = "what is the laraval";
        $answer = "A PHP framework for building web pages using MVC";
        return view("faq", compact("question","answer"));
    }
}
