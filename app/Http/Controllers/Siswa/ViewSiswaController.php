<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewSiswaController extends Controller
{
    public function dashboard()
    {
        return view("pages.siswa.dashboard");
    }
}
