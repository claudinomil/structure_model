<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'time', 'title', 'notification', 'user_id'
    ];
}
