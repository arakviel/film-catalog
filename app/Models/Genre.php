<?php

namespace App\Models;

use App\Observers\GenreObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 *
 *
 * @property string $id
 * @property string $slug
 * @property string $name
 * @property string $description
 * @property string|null $image
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Movie> $movies
 * @property-read int|null $movies_count
 * @method static \Database\Factories\GenreFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre query()
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Genre whereSlug($value)
 * @mixin \Eloquent
 */
#[ObservedBy([GenreObserver::class])]
class Genre extends Model
{
    use HasUuids;
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid7();
    }

    public function movies() {
        return $this->belongsToMany(Movie::class);
    }
}
