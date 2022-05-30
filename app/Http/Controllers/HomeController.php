<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (view()->exists($request->path())) {
            return view($request->path());
        }

        return abort(404);
    }

    public function root()
    {
        return view('index');
    }

    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function updateProfile(Request $request, $id)
    {
        $request->validate([
            'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ]);

        //Layout Mode
        $layout_mode = $request->get('layout-mode');

        //Layout Menu/Style
        $layout_menu_style = $request->get('layout-menu');

        $layout_menu = substr($layout_menu_style,0, 1);
        $layout_style = substr($layout_menu_style, 1, 1);

        //User
        $user = User::find($id);

        $user->layout_mode = $layout_mode;
        $user->layout_menu = $layout_menu;
        $user->layout_style = $layout_style;

        if ($request->file('avatar')) {
            $avatar = $request->file('avatar');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatarPath = public_path('/assets/images/users/');
            $avatar->move($avatarPath, $avatarName);
            $user->avatar = '/assets/images/users/' . $avatarName;
        }

        $user->update();

        if ($user) {
            Session::flash('message', 'Atualização feita com sucesso!');
            Session::flash('alert-class', 'alert-success');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Atualização feita com sucesso!"
            ], 200); // Status code here
        } else {
            Session::flash('message', 'Algo deu errado!');
            Session::flash('alert-class', 'alert-danger');
            return response()->json([
                'isSuccess' => true,
                'Message' => "Algo deu errado!"
            ], 200); // Status code here
        }
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            return response()->json([
                'isSuccess' => false,
                'Message' => "Your Current password does not matches with the password you provided. Please try again."
            ], 200); // Status code
        } else {
            $user = User::find($id);
            $user->password = Hash::make($request->get('password'));
            $user->update();
            if ($user) {
                Session::flash('message', 'Senha Atualizada com Sucesso!');
                Session::flash('alert-class', 'alert-success');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Senha Atualizada com Sucesso!"
                ], 200); // Status code here
            } else {
                Session::flash('message', 'Algo deu errado!');
                Session::flash('alert-class', 'alert-danger');
                return response()->json([
                    'isSuccess' => true,
                    'Message' => "Algo deu errado!"
                ], 200); // Status code here
            }
        }
    }
}
