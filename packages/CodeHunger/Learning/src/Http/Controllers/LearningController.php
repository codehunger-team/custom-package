<?php

namespace CodeHunger\Learning\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LearningController extends Controller
{
    public function index()
    {   
        return view('learning::index');
    }
}