<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=User::findOrfail(Auth::id());
        $todos=$user->todos;
        return view('todos.index',['todos'=>$todos]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated=$request->validate([
          'title'=>'required|string',
          'description'=>'required|string',
          'status'=>'required|in:pending,completed'
        ]);
        $user=User::findOrfail(Auth::id());
        $user->todos()->create($validated);
        return redirect()->route('index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated=$request->validate([
           'title'=>'required|string',
           'description'=>'required|string',
           'status'=>'required|in:pending,completed',
        ]);
        $user=User::findOrfail(Auth::id());
        $user->todos()->where('id',$id)->update($validated);
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user=User::findOrfail($id);
        $user->todos()->where('id',$id)->delete();
        return redirect()->route('index');
    }
}
