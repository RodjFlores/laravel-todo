<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function incomplete()
    {
        // or public function scopeIncomplete($query)

            //return $query -> where( 'completed' , 0 )
            // in tinker use App/Task:: incomplete() ->get()
        return static::where('completed', 0) -> get();
    }
}
