<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        'nationality', 'birth_date', 'biography', 'website', 'social_network', 'user_id'
    ];
    
}
