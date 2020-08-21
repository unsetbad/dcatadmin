<?php

namespace App;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'peoples';
    
}
