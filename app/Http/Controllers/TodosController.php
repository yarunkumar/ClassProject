<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTodosRequest;
use App\Http\Requests\UpdateTodosRequest;

class TodosController extends Controller
{

    /**
     * Display a listing of Todo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    /**
     * Show the form for creating new Todo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created Todo in storage.
     *
     * @param  \App\Http\Requests\StoreTodosRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodosRequest $request)
    {
        Todo::create($request->all());

        $todos = Todo::all();

        return view('home', compact('todos'));
    }


    /**
     * Show the form for editing Todo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.edit', compact('todo'));
    }

    /**
     * Update Todo in storage.
     *
     * @param  \App\Http\Requests\UpdateTodosRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodosRequest $request, $id)
    {
        $todo = Todo::findOrFail($id);
        $todo->update($request->all());

        $todos = Todo::all();

        return view('home', compact('todos'));
    }


    /**
     * Display Todo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::findOrFail($id);

        return view('todos.show', compact('todo'));
    }


    /**
     * Remove Todo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        $todos = Todo::all();

        return view('home', compact('todos'));
    }

    /**
     * Delete all selected Todo at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Todo::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
