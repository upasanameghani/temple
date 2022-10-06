<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pastwork extends Model
{
    use HasFactory;
    protected $table = 'past_works';
    protected $fillable=[
        'title',
        'image',
        'description',
        'city',
        'party_name',
        
        'status'
      ];
} 
