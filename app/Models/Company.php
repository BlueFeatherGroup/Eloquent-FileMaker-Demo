<?php

namespace App\Models;

use BlueFeather\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends FMModel
{
    use HasFactory;

    public function staff(){
        return $this->hasMany(Person::class);
    }
}
