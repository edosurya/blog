<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $fillable = [
		'category_id', 'title', 'slug', 'desc', 'content', 'image', 'thumb'
	];
}
