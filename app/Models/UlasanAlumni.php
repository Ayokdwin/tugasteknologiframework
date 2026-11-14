<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UlasanAlumni extends Model
{
    protected $table ='ulasan_alumni';
    protected $fillable = ['alumni_id', 'ulasan'];

    public function alumni()
    {
        return $this->belongsTo(Alumni::class, 'alumni_id');
    }
}
