<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * 
 *
 * @property string $id
 * @property string $movie_id
 * @property string $path
 * @property-read \App\Models\Movie $movie
 * @method static \Database\Factories\MovieFrameFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame query()
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MovieFrame wherePath($value)
 * @mixin \Eloquent
 */
class MovieFrame extends Model
{
    use HasFactory, HasUuids;

    public $timestamps = false;

    protected $guarded = [];

    public function newUniqueId(): string
    {
        return (string) Uuid::uuid7();
    }

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
