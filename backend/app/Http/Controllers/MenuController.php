<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller {
    public function getMenus (Request $request) {
        $menus = Menu::all();

        return response()->json($menus);
    }
}