<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationJournal extends Model
{

    protected $table = 'publication_journals';

    static $validation_rules = [
        'id' => 'required',
        'volume' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'journal_name');
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }

    

}
