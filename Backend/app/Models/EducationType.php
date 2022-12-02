<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\EducationType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType query()
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EducationType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class EducationType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'name',
    ];
}
