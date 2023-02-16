<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Client extends Model
{
    use HasFactory;

    // relation one to many, Client side
    public function professionalstatu()
    {
        return $this->belongsTo(Professionalstatu::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'phone_number',
        'email',
        'birth_date',
        'professionalstatu_id',
        'type_of_service',
        'duration_and_date_of_consultation',
        'due_date',
        'personal_note',
    ];


    //------------
    /**
     * return the Age using the date of birth stored in BDD
     */
    public function age()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
