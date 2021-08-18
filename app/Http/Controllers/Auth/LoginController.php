<?php
  
namespace App\Http\Controllers\Auth;
  
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash; 
use Illuminate\Http\Request;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\User;
use App\Role;

class LoginController extends Controller
{
  
    use AuthenticatesUsers;
    
    protected $redirectTo = '/home';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))
        {

            $user = User::where('email',$input['username'])->first();
            if (Hash::check($input['password'], $user->password))
            {
                $roles = $user->roles()->get();
                if (count($roles) > 1) {
                    dd("TODO: desplegar selección de vista según el rol");
                }else{
                    switch ($roles[0]->name) {
                        case 'superAdmin':
                            return redirect()->route('admin.home');
                            break;
                        case 'adminCentro':
                            return redirect()->route('admincentro.home');
                            break;    
                        case 'secretariaCentro':
                            return redirect()->route('secretaria.home');
                            break;
                        case 'paciente':
                            return redirect()->route('paciente.home');
                            break;
                    }
                   
                }
                
            }
            
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }
}