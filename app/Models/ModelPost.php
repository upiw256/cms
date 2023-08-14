<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPost extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'title',
        'img',
        'isi',
        'slug',
        'created_at',
        'updated_at'
    ];
}
