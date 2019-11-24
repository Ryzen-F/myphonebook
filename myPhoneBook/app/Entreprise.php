<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = ['name', 'address', 'postal_code','city','phone','email'];
    protected $table = 'entreprises';
    public $timestamps = false;
}
