<?php namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class TodoFilter extends ModelFilter
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
     * @return TodoFilter
     */
    public function id(int $value)
    {
        return $this->where('id', $value);
    }

    /**
     * name like search
     *
     * @param string $value
     * @return TodoFilter
     */
    public function title(string $value)
    {
        return $this->where('title', 'like', '%' . $value . '%');
    }
}
