<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use phpDocumentor\Reflection\Types\Null_;

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
                'country' => $data['businessCountry'],
                'juridical' => '1',
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'gender'=>$data['genderJ']
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
                'password' => bcrypt($data['password']),
                'gender'=>$data['gender']
            ]);
        }
    }
}
