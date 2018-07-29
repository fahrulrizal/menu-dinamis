<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
  public function menu()
  {
    $menu = Menu::all()->load('submenu');

    return view('menu.hasil',compact('menu'));
  }
}
