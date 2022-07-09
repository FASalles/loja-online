<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $business = Business::find(10)->update([
        'name' => 'Felipe',
        'email' => 'felipesalles@outlook.com',
        'adress' => 'quadra C rua B'
    ]);
    }
}

