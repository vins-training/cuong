<?php

namespace CUONGNQ\SimpleAdmin;

use Illuminate\Database\Eloquent\Model;

class CuongModel extends Model
{
    protected $table = 'products';

    protected $fillable = ['name','price'];
}
