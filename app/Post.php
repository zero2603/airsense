<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table='posts';
    public $guarded=[];//ghi len tat ca cac cot
    public $timestamps=true;//tu dong cap nhat 2 cot creat and update
}
