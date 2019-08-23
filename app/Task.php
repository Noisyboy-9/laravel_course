<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable=['title' , 'description' , 'completed' , 'owner_id'];

    public function complete()
    {
        $this->update([
            'completed' => true
        ]);
    }

    public function incomplete()
    {
        $this->update([
            'completed' => false
        ]);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
