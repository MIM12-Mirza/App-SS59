<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    public function obats(){
        return $this->hasOne(Obat::class, "id","obats_id");
    }
}
