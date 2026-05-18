<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personals';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'birthdate',
        'avatar_url',
        'bio',
    ];

    protected $casts = [
        'birthdate' => 'date',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
