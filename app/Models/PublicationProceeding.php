<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationProceeding extends Model
{
	const validation_rules = [
        'id' => 'required|numeric',
        'publication_id' => 'required|numeric',
        'proceeding_name' => 'required',
        'conference_name' => 'required',
        'conference_location' => 'required',
        'conference_date' => 'required|date'
    ];

    public $timestamps = false;
   
    protected $table = 'publication_proceedings';
    protected $guarded = [];

    public function publication_id(){
    	return $this->belongTo(publication::class);
    }
}
