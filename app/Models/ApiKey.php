<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    protected $fillable = ['api_key', 'id_pengguna'];

    public function user()
    {
        return $this->belongsTo(Pengguna::class);
    }
}