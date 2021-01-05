<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    public function room()
    {
        return $this->hasOne('App\Models\Room');
    }
    public function rooms()
    {
        return $this->hasMany('App\Models\Room', 'id', 'room_type_id');
    }
}
