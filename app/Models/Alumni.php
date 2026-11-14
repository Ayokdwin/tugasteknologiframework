<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected $fillable = ['nama','nim','jurusan','tahun_lulus','pekerjaan'];

    public function ulasan()
    {
        return $this->hasMany(UlasanAlumni::class, 'alumni_id');
    }
}
