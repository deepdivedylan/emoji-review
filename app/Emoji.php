<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emoji extends Model
{
    protected $table = "emoji";

    public function comments() {
    		$this->hasMany("App\\Comment");
	 }
}
