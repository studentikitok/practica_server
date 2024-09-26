<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'surname',
        'name',
        'patronym',
        'gender',
        'date_of_Birth',
        'address',
        'position',
        'subunit_id',
        'role',
        'users_id',
    ];
 
   use HasFactory;

   public $timestamps = false;

   public function getId(): int
   {
       return $this->id;
   }
}