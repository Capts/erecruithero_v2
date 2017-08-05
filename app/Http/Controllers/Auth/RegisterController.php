<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

use App\Role;
use App\Profile;
use App\Address;
use App\School;

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
    protected $redirectTo = 'applicant/profile';

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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['gender']){

            $avatar = 'public/default/avatars/male.png';
        }else{
            $avatar = 'public/default/avatars/female.png';
        }

        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],
            'slug' => str_slug($data['firstname']),
            'avatar' => $avatar
        ]);

        $this->assignRole($user)->createprofile($user)->createAddress($user)->createSchool($user);
        return $user;
    }

    protected function assignRole($user){
        
        $user->roles()->attach(Role::where('name', 'applicant')->first());

        return $this;
    }

    protected function createprofile($user){

        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->age = 0;
        $profile->bio = 'n/a';
        $profile->bday ='n/a';
        $profile->civil_status = 'n/a';

        $user->profile()->save($profile);

        return $this;
    }

    public function createAddress($user){

        $address = new Address();

        $address->user_id = $user->id;
        $address->street = 'n/a';
        $address->barangay = 'n/a';
        $address->city = 'n/a';
        $address->province = 'n/a';
        $address->country = 'n/a';

        $user->address()->save($address);


        return $this;
    }
    public function createSchool($user){

        $school = new School();

        $school->user_id = $user->id;        
        $school->school = 'n/a';
        $school->degree = 'n/a';
        $school->field_of_study = 'n/a';
        $school->major = 'n/a';
        $school->school_status = 'n/a';
        $school->start_year = 'n/a';
        $school->end_year = 'n/a';
        $school->activities = 'n/a';

        $user->school()->save($school);


        return $this;

    }
}
