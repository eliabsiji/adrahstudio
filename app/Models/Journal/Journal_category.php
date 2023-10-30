<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_category',
        'createdBy'
    ];


  public function journal()
  {
      return $this->belongsToMany(Journals::class);
  }
}
