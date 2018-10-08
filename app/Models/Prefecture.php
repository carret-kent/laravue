<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Prefecture
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture filter($input = array(), $filter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture paginateFilter($perPage = null, $columns = array(), $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture simplePaginateFilter($perPage = null, $columns = array(), $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture whereBeginsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture whereEndsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Prefecture whereLike($column, $value, $boolean = 'and')
 * @mixin \Eloquent
 */
class Prefecture extends Model
{
    use Filterable;

    protected $table = 'prefectures as pre';

    protected $fillable = [
        'name',
        'name_kana',
    ];

    /**
     * Cities table relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }

}
