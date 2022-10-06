<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table='gallerys';
    protected $fillable=[
        'image',
        'video',
        'status',
    ];
    public static $rules = [
        'image'=> 'image|mimes:jpeg,png,jpg,gif,svg',
        'video' => 'video|mimes:mp4',
       
    ];
}
