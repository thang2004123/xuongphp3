<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showAbout()
    {
        return view('list-student', [
            'name' => 'Thang',
            'university' => 'FPT'
        ]);
    }
}
