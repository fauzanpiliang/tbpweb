<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    // CONST
    const SEMINAR = 1;
    const JURNAL = 2;

    const TYPE_SELECT = [
        self::SEMINAR => 'Seminar',
        self::JURNAL => 'Jurnal'
    ];


    public function jurnals()
    {
        return $this->hasMany(PublicationJournal::class);
    }

    public function seminars()
    {
        return $this->hasMany(PublicationProceeding::class);
    }

    public function dosen()
    {
        return $this->belongsTo(Lecturer::class,'lecturer_id','id');
    }

    public function getTypeTextAttribute($value)
    {
        if (empty($this->type))
        {
            return null;
        }
        return data_get(self::TYPE_SELECT, $this->type, null);
    }

}
