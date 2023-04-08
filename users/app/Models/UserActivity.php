<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserActivity extends Model
{

    use HasFactory, Notifiable;  
        
    protected $table = 'user_activity'; // set the table name for the model
    protected $fillable = ['login_time']; // specify the fillable columns

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}