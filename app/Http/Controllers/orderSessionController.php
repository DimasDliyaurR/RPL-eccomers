<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderSessionController extends Controller
{
    public function index()
    {
        return view("payment.detail");
    }
}
