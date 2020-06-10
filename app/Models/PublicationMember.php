<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationMember extends Model
{
    protected $table = 'publication_members';

    static $validation_rules = [
        'id' => 'required',
        'position' => 'required'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function publication()
    {
        return $this->belongsTo(Publication::class, 'publication_id');
    }
}
