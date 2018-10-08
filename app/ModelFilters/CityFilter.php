<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class CityFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    /**
     * ID search
     *
     * @param int $value
     * @return CityFilter
     */
    public function id(int $value)
    {
        return $this->where('id', $value);
    }

    /**
     * prefecture_id search
     *
     * @param int $value
     * @return CityFilter
     */
    public function prefecture_id(int $value)
    {
        return $this->where('prefecture_id', $value);
    }

    /**
     * name like search
     *
     * @param string $value
     * @return CityFilter
     */
    public function name(string $value)
    {
        return $this->where('name', 'like', '%' . $value . '%');
    }

    /**
     * name_kana like search
     *
     * @param string $value
     * @return CityFilter
     */
    public function name_kana(string $value)
    {
        return $this->where('name_kana', 'like', '%' . $value . '%');
    }
}
