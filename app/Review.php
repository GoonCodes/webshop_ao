<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
	  {
	    return $this->belongsTo('User');
	  }

  public function product()
	  {
	    return $this->belongsTo('Product');
	  }

  public function scopeApproved($query)
	  {
	    return $query->where('approved', true);
	  }

  public function scopeSpam($query)
	  {
	    return $query->where('spam', true);
	  }

  public function scopeNotSpam($query)
	  {
	    return $query->where('spam', false);
	  }
}
