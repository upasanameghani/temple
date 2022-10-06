<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    protected $dates = ['deleted_at'];
    protected $table = 'abouts';
    protected $fillable = ['whoweare','vision','mission', 'image','status'];
    public static $rules = [
        
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
       
    ];
}
