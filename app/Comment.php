<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'id_pertanyaan', 'id_user', 'komentar', 'jumlah_vote'
    ];

    public $timestamps = false;
}
