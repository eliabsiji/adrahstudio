<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StaffEmploymentDetails extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the StaffEmploymentDetails
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staffid(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
