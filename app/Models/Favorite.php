<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $table = 'url_user_favorite';
    protected $fillable  = ['user_id','title','description','url_link'];
    public function user() {
        return $this->belongsTo(User::class);
    }

}
