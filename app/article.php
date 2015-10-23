<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'published_at'
    ];
}
