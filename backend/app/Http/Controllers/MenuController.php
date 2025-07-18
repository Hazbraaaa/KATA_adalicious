<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller {

    public function displayMenu (Request $request) {
        return Menu;
    }
}