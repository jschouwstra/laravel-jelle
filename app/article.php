<?php

namespace app;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'published_at'
    ];
    public function scopePublished($query){
        //
        $query->where('published_at', '<=', Carbon::now());
    }
    //setNameAttribute
    //setAddressAttribute
    public function setPublishedAtAttribute($date){
    	$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }	
}
