<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class textohome extends Model
{
    protected $fillable = ['titulo' , 'descricao'];
    protected $table = 'textoshome';

}
