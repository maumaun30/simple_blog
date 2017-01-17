<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	protected $table = 'posts';

	protected $fillable = [
		'user_id',
		'title',
		'subtitle',
		'body',
		'image',
	];

    use SoftDeletes;

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function postUser() {
    	return $this->belongsTo('\App\User','user_id');
    }
}
