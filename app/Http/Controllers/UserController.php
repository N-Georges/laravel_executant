<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user=User::all();
        return view('admin.user.main', compact('user'));
    }

    public function edit(User $id)
    {
        $user = $id;
        $avatar = Avatar::all();
        return view('admin.user.edit', compact('user', 'avatar'));
    }

    public function update(User $id, Request $request)
    {
        $this->authorize('isRealUser', $id);
        $user = $id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;
        $user->save();

        return redirect()->route('dashboard');
        // return redirect('users.index' . $user->id);

    }
    public function edit_user(User $id)
    {
        $user = $id;
        $avatar = Avatar::all();
        return view('admin.user.edit-table-user', compact('user', 'avatar'));
    }

    public function update_user(User $id, Request $request)
    {
        $this->authorize('isAdmin', $id);
        $user = $id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->avatar_id = $request->avatar_id;
        $user->save();

        return redirect()->route('users.index')->with('succes', 'data update');;
        return redirect('users.index' . $user->id);

    }

    public function destroy(User $id)
    {
        $id->delete();
        return Redirect()->back()->with('warning', 'user delete');
    }
}
