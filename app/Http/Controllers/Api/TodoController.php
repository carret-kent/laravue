<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Todo\DestroyRequest;
use App\Http\Requests\Todo\StoreRequest;
use App\ModelFilters\TodoFilter;
use App\Models\Todo;
use Illuminate\Http\Request;
use function MongoDB\BSON\toJSON;

class TodoController extends Controller
{
    /**
     * get todoTask
     *
     * @param Request $request
     * @return mixed
     */
    public function index(Request $request)
    {
        return Todo::filter($request->all(), TodoFilter::class)->get();
    }

    /**
     * store todoTask
     *
     * @param StoreRequest $request
     * @return mixed
     */
    public function store(StoreRequest $request)
    {
        Todo::create($request->validated());

        return Todo::get();
    }

    /**
     * delete tpdoTasks
     *
     * @param DestroyRequest $request
     * @return Todo[]|\Illuminate\Database\Eloquent\Collection
     */
    public function destroy(DestroyRequest $request)
    {
        $todo = Todo::find($request->get('id'));
        $todo->delete();

        return Todo::get();
    }

}
