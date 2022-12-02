<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Education
 *
 * @property int $id
 * @property int $user_id
 * @property int $education_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Education newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Education query()
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereEducationTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Education whereUserId($value)
 * @mixin \Eloquent
 */
class Education extends Model
{
    use HasFactory;

    /**
     * Get the user that has the education.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the education type for the user education.
     */
    public function educationType()
    {
        return $this->belongsTo(EducationType::class, 'education_type_id');
    }
}
