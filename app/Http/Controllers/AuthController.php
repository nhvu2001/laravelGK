<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            if ($user->isAdmin()) {
                // Người dùng có vai trò admin
                // Thực hiện chức năng thêm, xoá, sửa nhân viên
            } else {
                // Người dùng không có vai trò admin
                // Xử lý quyền truy cập không cho phép
            }
        } else {
            return back()->withErrors([
                'username' => 'Invalid username or password.',
            ]);
        }
    }
}
