<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_year extends Model
{
    use HasFactory;

    protected $fillable = [
        'journal_year',
        'createdBy'
    ];

    public function journal()
  {
      return $this->belongsToMany(Journals::class);
  }
}
