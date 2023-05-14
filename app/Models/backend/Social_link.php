<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social_link extends Model
{
    use HasFactory;
    protected $fillable = ['company_id','facebook','tiktok','linkedin',
    'youtube','whatsapp','slug',];
}
