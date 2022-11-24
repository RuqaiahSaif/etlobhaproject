<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification_type extends Model
{
    use HasFactory;
    protected $fillable = ['name','status','is_deleted'];
    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
   
}