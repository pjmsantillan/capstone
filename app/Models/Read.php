<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Read extends Model
{
    use HasFactory;
    protected $table = 'url_user_read';
    protected $fillable  = ['user_id','url'];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
