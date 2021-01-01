<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phonebook extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function getNameAttribute($value){
        return "Mr. " .$value;
    }
    public function getContactAttribute($value){
        return "(+91)" .$value;
    }    
    public function setNameAttribute($value){
        $this->attributes['name'] = strtoupper($value);
    }
    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
    }
}
