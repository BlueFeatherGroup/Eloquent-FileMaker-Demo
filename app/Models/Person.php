<?php

namespace App\Models;

use BlueFeather\EloquentFileMaker\Database\Eloquent\FMModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends FMModel
{
    use HasFactory;

    public function company(){
        return $this->belongsTo(Company::class);
    }
}
