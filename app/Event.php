<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
	protected $table = 'event';

	protected $primaryKey = 'id';

	protected $fillable = ['begin_at','repeat_setting_id'];
}
