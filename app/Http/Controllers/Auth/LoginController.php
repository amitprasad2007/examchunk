<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
        
    public function login(Request $request)

    {    $input = $request->all();
         $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required', ]);
     if(auth()->attempt(array('email' => $input['email'],'password' => $input['password'])))
         {  $roles=auth()->user()->roles->pluck('id');
            foreach ($roles as $role) {
              if ($role == "1") {
            return redirect()->route('dashboard');

            }elseif($role == "2"){

                return redirect('student/dashboard');   }    }

            }return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');
    }
}
