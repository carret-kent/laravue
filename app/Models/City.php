<?php

namespace App\Models;

use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\City
 *
 * @property-read \App\Models\Prefecture $prefecture
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City filter($input = array(), $filter = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City paginateFilter($perPage = null, $columns = array(), $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City simplePaginateFilter($perPage = null, $columns = array(), $pageName = 'page', $page = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereBeginsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereEndsWith($column, $value, $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereLike($column, $value, $boolean = 'and')
 * @mixin \Eloquent
 */
class City extends Model
{
    use Filterable;

    protected $table = 'cities as cit';

    protected $fillable = [
        'prefecture_id',
        'name',
        'name_kana',
    ];

    /**
     * Prefectures table relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}
