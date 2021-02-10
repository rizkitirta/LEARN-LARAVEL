<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function pesan()
    {
        return $this->hasMany('Appp\Pesan', 'barang_id', 'id');
    }
}
