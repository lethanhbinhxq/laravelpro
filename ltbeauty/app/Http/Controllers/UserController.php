<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function add()
    {
        return view('admin.user.add');
    }

    public function show()
    {
        $users = User::paginate(10);
        $num_active = User::where('status', User::STATUS_ACTIVE)->count();
        $num_pending = User::where('status', User::STATUS_PENDING)->count();
        $num_blocked = User::where('status', User::STATUS_BLOCKED)->count();
        return view(
            "admin.user.show",
            compact('users', 'num_active', 'num_pending', 'num_blocked')
        );
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => 'required|string|max:255',
                'status' => [
                    'required',
                    'in:' . implode(',', [
                        User::STATUS_ACTIVE,
                        User::STATUS_PENDING,
                        User::STATUS_BLOCKED,
                    ])
                ],
            ],
            [
                'required' => ':attribute không được để trống.',
                'max' => ':attribute không được vượt quá :max ký tự.',
                'in' => ':attribute không hợp lệ.',
                'string' => ':attribute phải là chuỗi.',
            ],
            [
                'name' => 'Họ và tên',
                'status' => 'Trạng thái',
            ]
        );

        $user = User::find($id);
        $user->name = $request->name;
        $user->status = $request->status;

        $user->save();

        return redirect('admin/user')->with('success', 'Cập nhật thông tin người dùng thành công');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('admin/user')->with('success', 'Xóa người dùng thành công.');
    }
}
