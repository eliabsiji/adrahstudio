<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Journal_volumes extends Model
{
    use HasFactory;

    /**
     * Get all of the volumeNum for the Journal_volumes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

     protected $fillable = [
        'journal_volume',
        'createdBy'
    ];


     public function journal()
  {
      return $this->belongsToMany(Journals::class);
  }
}
