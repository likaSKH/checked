<?php


namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

Use Illuminate\Http\Request;
Use DB;
Use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        if (isset($_POST['resPersonName'])) {

            return Validator::make($data, [
                'resPersonName' => 'required|string|max:255',
                'resPersonLName' => 'required|string|max:255',
                'companyName' => 'required|string',
                'bphone' => 'required|string',
                'position' => 'required|string',
                'businessCity' => 'required|string',
                'businessCountry' => 'required|string',
                'companyAddress1' => 'required|string',
                'companyAddress2' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3|confirmed',
                'password_confirmation' => 'required|min:3'
            ]);
        } else {
            return Validator::make($data, [
                'name' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'birthDate' => 'required|date',
                'phone' => 'required|string',
                'address1' => 'required|string',
                'address2' => 'required|string',
                'city' => 'required|string',
                'country' => 'required|string',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:3|confirmed',
                'password_confirmation' => 'required|min:3'
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        if (isset($_POST['resPersonName'])) {
            return User::create([
                'name' => $data['resPersonName'],
                'lname' => $data['resPersonLName'],
                'company_name' => $data['companyName'],
                'address1'=>$data['companyAddress1'],
                'address2'=>$data['companyAddress2'],
                'phone' => $data['bphone'],
                'position' => $data['position'],
                'city' => $data['businessCity'],
                'birthDate' => '1900-01-01',
                'country' => $data['businessCountry'],
                'juridical' => '1',
                'gender'=>$data['genderJ'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),

            ]);
        } else {
            return User::create([
                'name' => $data['name'],
                'lname' => $data['lname'],
                'birthDate' => $data['birthDate'],
                'phone' => $data['phone'],
                'position' => '0',
                'city' => $data['city'],
                'country' => $data['country'],
                'juridical' => '0',
                'company_name'=>'0',
                'address1'=>$data['address1'],
                'address2'=>$data['address2'],
                'email' => $data['email'],
                'gender'=>$data['gender'],
                'password' => bcrypt($data['password']),

            ]);
        }
    }


    public function register(Request $request){

        $input =$request->all();
        $validator = $this->validator($input);

        if($validator->passes()){
            $user=$this->create($input)->toArray();
            $user['link']=str_random(30);

            while()

            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);

            Mail::send('emails.activation',$user, function($message) use ($user){
                $message->to($user['email']);
                $message->subject('www.perfectrent.com - Activation Code');
            });

            return back()->with('success', "We sent activation code, Please check your email");

        }

        return back()->with('errors', $validator->errors());
    }


    public function userActivation($token){
        $check =DB::table('user_activations')->where('token', $token)->first();
        if(!is_null($check)){
            $user=  DB::table('users')->where('id',$check->id_user )->first();
            if($user-> is_activated == 1){
                return redirect()->route('login')->with('success',"User is already activated");
            }

            DB::table('users')->where('id',$check->id_user )->update(['is_activated'=>1]);

           // DB::table('user_activations')->where('token', $token)->delete();
            return redirect()->route('home')->with('success',"User active successfully");
        }

  }

}
