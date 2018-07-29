<?php

namespace App;
use App\SubMenu;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
  protected $table = "menu";

  public function submenu()
  {
      return $this->hasMany(SubMenu::class);
  }
}
