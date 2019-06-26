<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees', ['title'=> 'Employees', 'subtitle' => 'Overview']);
    }
}
