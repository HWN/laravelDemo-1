<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wxgroup extends Model
{
    // 不可以批量赋值的字段，为空则表示都可以
    protected $guarded = [];

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $hidden = [];
    /**
     * 表明模型是否应该被打上时间戳
     *
     * @var bool
     */
    public $timestamps = true;

    // 关联articles表
    public function wxuser()
    {
        return $this->hasMany('\App\Models\Wxuser','group_id','id');
    }
}