<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory,SoftDeletes;
//    use fillable and guarded arrays to controll which fields
// are allowd in Mass creation and updating
    protected $fillable=[
        'title',
        'status',
        'description',
        'publish_date',
        'views'
    ];
//    protected $guarded=[]''

}
