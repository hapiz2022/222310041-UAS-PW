<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PreviewPw extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category () {
        return $this->belongsTo(Category::class);
    }
}
