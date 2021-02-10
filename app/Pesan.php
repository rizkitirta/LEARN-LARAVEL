<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public function barang()
    {
        return $this->belongsTo('App\Barang','barang_id', 'id');
    }
}
