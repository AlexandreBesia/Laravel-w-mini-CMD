<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionalstatu extends Model
{
    use HasFactory;

    // relation one to many, côté Professionalstatu
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    protected $fillable  = [
        'last_name',
        'first_name',
        'phone_number',
        'email',
        'birth_date',
        'professionalstatu_id'
    ];
}
