<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submodule extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'name',
        'menu_text',
        'menu_url',
        'menu_route',
        'menu_icon',
        'prefix_permission',
        'prefix_route',
        'ordem_visualizacao'
    ];
}
