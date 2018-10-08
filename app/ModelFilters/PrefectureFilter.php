<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class PrefectureFilter extends ModelFilter
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
     * @return PrefectureFilter
     */
    public function id(int $value)
    {
        return $this->where('id', $value);
    }

    /**
     * name like search
     *
     * @param string $value
     * @return PrefectureFilter
     */
    public function name(string $value)
    {
        return $this->where('name', 'like', '%' . $value . '%');
    }

    /**
     * name_kana like search
     *
     * @param string $value
     * @return PrefectureFilter
     */
    public function name_kana(string $value)
    {
        return $this->where('name_kana', 'like', '%' . $value . '%');
    }
}
