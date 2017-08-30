<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comment";

    public function emoji() {
    		$this->belongsTo("App\\Emoji");
	 }
}
