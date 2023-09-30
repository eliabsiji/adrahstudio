<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_year extends Model
{
    use HasFactory;



    public function journal()
  {
      return $this->belongsToMany(Journals::class);
  }
}
