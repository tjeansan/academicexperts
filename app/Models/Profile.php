<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/oUW8W99zXO9H1oX7VQbUJUs0rrwZ8PCCvdQ4sKbS.jpeg';

        return '/storage/' . $imagePath;
    }
}
