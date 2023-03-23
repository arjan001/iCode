<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioSetting extends Model
{
    use HasFactory;

    protected $fillable = [
    	'language_id',

        'banner_img',
        'banner_title',
        'banner_desc',

    	'meta_title',
    	'meta_description',
    	'slug',
    	'breadcrumbs_anchor',

    	'title',
    	'description',


 	];
}
