<?php

namespace App\Http\Controllers\Pages\User;

use App\Http\Controllers\Controller;
use App\Models\MCustomer;
use Illuminate\Http\Request;
use App\Models\MUser;
use Illuminate\Support\Facades\Auth;

class UserPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.user.index');
    }

    public function create()
    {
        $customer = MCustomer::where('customer_id', '!=', 1)->whereDoesntHave('user')->get();
        return view('pages.user.create', compact('customer'));
    }


    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|max:254',
                'email' => 'email|required|max:254|unique:m_user,email',
                'phone' => 'required|regex:/^\d{10}$/|max:12',
                'password' => 'required|confirmed',
                'customer_id' => 'required',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );


        MUser::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "customer_id" => $request->customer_id,
            "password" => bcrypt($request->password),
        ]);

        return redirect()->route('view.user.index')
            ->with('success', 'User created successfully!');
    }

    public function edit($id)
    {
        $model = MUser::findOrFail($id);
        $customer = MCustomer::whereDoesntHave('user')->where('customer_id', '!=', 1)->orWhere('customer_id', $model->customer_id)->get();
        return view('pages.user.edit', compact('model', 'customer'));
    }

    public function update(Request $request, $id)
    {
        $user = MUser::findOrFail($id);

        $request->validate(
            [
                'name' => 'required|max:254',
                'email' => 'email|required|max:254|unique:m_user,email,' . $id . ',id',
                'phone' => 'required|regex:/^\d{10}$/|max:12',
                'password' => 'confirmed',
                'customer_id' => 'required',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        $cred = [
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "customer_id" => $request->customer_id,
        ];
        if ($request->password) {
            $cred["password"] = bcrypt($request->password);
        }

        $user->update($cred);

        return redirect()->route('view.user.index')
            ->with('success', 'User updated successfully!');
    }

    public function destroy($id)
    {
        $post = MUser::findOrFail($id);
        $post->delete();
        return redirect()->route('view.user.index')
            ->with('success', 'User deleted successfully!');
    }
}
