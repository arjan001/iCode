<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSetting extends Model
{
    use HasFactory;

    protected $fillable = [
    	'language_id',
    	'meta_title',
    	'meta_description',
    	'slug',
    	'breadcrumbs_anchor',

        'banner_img',
        'banner_title',
        'banner_desc',


    	'html_sidebar1',
    	'html_sidebar2'


 	];
}
