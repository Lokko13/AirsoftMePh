<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AirsoftSite extends Model
{
    public function schedules(){
    	return $this->hasMany('App\SiteSchedule', 'site_id', 'id');
    }
}
