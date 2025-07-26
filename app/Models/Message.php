<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    //kode untuk kolom tabel yang tidak boleh dimodifikasi
    protected $guarded = ['id'];
    protected $with = ['user', 'fullCustom'];
    protected $fillable = ['body', 'full_custom_id', 'user_id', 'is_chat_end'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function fullCustom()
    {
        return $this->belongsTo(FullCustom::class);
    }
}
