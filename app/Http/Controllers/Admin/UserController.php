<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Jonas',
                'surname' => 'Jonaitis',
                'email' => 'jonas@example.com'
            ],
            [
                'id' => 2,
                'name' => 'Ona',
                'surname' => 'Onaite',
                'email' => 'ona@example.com'
            ]
        ];

        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $user = [
            'id' => $id,
            'name' => 'Jonas',
            'surname' => 'Jonaitis',
            'email' => 'jonas@example.com'
        ];

        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        return redirect('/admin/users')->with('success', 'User updated successfully.');
    }
}
