<?php

namespace App\Models\Journal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal_numbers extends Model
{
    use HasFactory;

    /**
     * The journalVolumes that belong to the Journal_numbers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function journal()
    {
        return $this->belongsToMany(Journals::class);
    }
}
