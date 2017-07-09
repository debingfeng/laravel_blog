<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * 应该被调整为日期的属性
     *
     * @var array
     */
    protected $dates = ['published_at','deleted_at'];

    //
//    protected function getDateFormat(){
//        return time();
//    }
    protected $fillable = ['title','content','markdown','category_id'];
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;

        if (! $this->exists) {
            $this->attributes['slug'] = str_slug($value);
        }
    }
}
