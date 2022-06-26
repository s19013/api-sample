<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // テーブル登録
    protected $table = 'students';
    // 必ず埋めるのを指定
    protected $fillable = ['name','course'];
}
