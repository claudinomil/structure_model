<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'menu_text',
        'menu_url',
        'menu_route',
        'menu_icon',
        'ordem_visualizacao'
    ];
}
