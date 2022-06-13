<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Submodule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
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

    public function menu($tp)
    {
        //Reset cached roles and permissions
        //app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $modules = Module::all()->sortBy('ordem_visualizacao');
        $submodules = Submodule::all()->sortBy('ordem_visualizacao');

        $menu = '';

        //Menu Verticarl
        if ($tp == 1) {
            $menu .= "<ul class='metismenu list-unstyled' id='side-menu'>
                            <li class='menu-title' key='t-menu'>@lang('translation.Menu')</li>";
        }

        //Menu Horizontal
        if ($tp == 2) {
            $menu .= "<ul class=\"navbar-nav\">";
        }

        //Mega Menu
        if ($tp == 3) {
            $menu .= "<ul class='list-unstyled megamenu-list'>
                        <div class='row'>";
        }

        foreach ($modules as $key => $module) {
            $modOk = 1;
            $qtdSubmodules = 0;
            foreach ($submodules as $key => $submodule) {
                if ($module->id == $submodule->module_id) {
                    //if (auth()->user()->can($submodule->prefix_permission.'-list')) {
                        if ($modOk == 1) {
                            $modOk = 0;

                            //verificando se Module está aberto (menu-open)'''''''''''''''''''''''''''''''''''''''''''
                            $menuModuleOpen = '';
                            if (isset($menuModuleId)) {if ($menuModuleId == $module->id) {$menuModuleOpen = 'menu-open';}}
                            //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

                            //Menu Verticarl
                            if ($tp == 1) {
                                $menu .= "<li>
                                            <a href='javascript: void(0);' class='has-arrow waves-effect'>
                                                <i class='$module->menu_icon' style='font-size:16px;'></i><span key='t-$module->menu_route'>$module->name</span>
                                            </a>
                                            <ul class='sub-menu' aria-expanded='true'>";
                            }

                            //Menu Horizontal
                            if ($tp == 2) {
                                $menu .= "<li class='nav-item dropdown'>
                                            <a class='nav-link dropdown-toggle arrow-none' href='#' id='topnav-layout' role='button'>
                                                <i class='$module->menu_icon me-2'></i><span key='t-$module->menu_route'>$module->name</span> <div class='arrow-down'></div>
                                            </a>
                                            <div class='dropdown-menu' aria-labelledby='topnav-layout'>
                                                <div class='dropdown'>";
                            }
                        }

                        //verificando se Submodule está ativo (active)''''''''''''''''''''''''''''''''''''''''''''''''
                        $menuSubmoduleActive = '';
                        if (isset($menuSubmoduleId)) {if ($menuSubmoduleId == $submodule->id) {$menuSubmoduleActive = 'active';}}
                        //''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''

                        $qtdSubmodules++;

                        //Menu Verticarl
                        if ($tp == 1) {
                            $menu .= "<li><a href='$submodule->menu_route' key='t-$submodule->route'>$submodule->name</a></li>";
                        }

                        //Menu Horizontal
                        if ($tp == 2) {
                            $menu .= "<a href='$submodule->menu_route' class='dropdown-item' key='t-$submodule->menu_route'>$submodule->name</a>";
                        }

                        //Mega Menu
                        if ($tp == 3) {
                            $menu .= "<div class='col-md-2'>
                                        <li>
                                            <a href='$submodule->menu_route' key='t-$submodule->menu_route'>$submodule->name</a>
                                        </li>
                                    </div>";
                        }
                    //}
                }
            }

            if ($modOk == 0) {
                //Menu Verticarl
                if ($tp == 1) {
                    $menu .= "</ul></li>";
                }

                //Menu Horizontal
                if ($tp == 2) {
                    $menu .= "</div></div></li>";
                }
            }
        }

        //Menu Verticarl
        if ($tp == 1) {
            $menu .= "</ul>";
        }

        //Menu Horizontal
        if ($tp == 2) {
            $menu .= "</ul>";
        }

        //Mega Menu
        if ($tp == 3) {
            $menu .= "</div></ul>";
        }

        return $menu;
    }
}
