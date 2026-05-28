<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'personal_id',
        'title',
        'content',
    ];

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
