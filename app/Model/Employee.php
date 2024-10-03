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
        'date_of_birth',
        'address',
        'position',
        'subunit_id',
        'role',
        'users_id',
        'age'
    ];
 
   use HasFactory;

   public $timestamps = false;

   public function getId(): int
   {
       return $this->id;
   }
}