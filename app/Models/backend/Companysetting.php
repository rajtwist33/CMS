<?php

namespace App\Models\backend;

use App\Models\backend\Social_link;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Companysetting extends Model
{
    use HasFactory;
    protected $fillable = ['logo','name','address','phone','email','maps','footer','slug'];

    public function link(){
        return $this->hasOne(Social_link::class,'company_id','id');
    }
}
