<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffBioModel extends Model
{
    use HasFactory;


    /**
     * Get the user that owns the StaffBioModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staffId(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
