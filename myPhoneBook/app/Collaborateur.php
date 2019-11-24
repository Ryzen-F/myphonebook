<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collaborateur extends Model
{
    protected $fillable = ['civility','last_name','first_name','address','postal_code','city','phone','email','company_name'];
    protected $table = 'collaborateurs';
    public $timestamps = false;

}
