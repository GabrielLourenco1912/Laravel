<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Nivel extends Model
{
    use SoftDeletes;

    protected $table = 'nivels';
    protected $fillable = [
        'nome'
    ];

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }
}
