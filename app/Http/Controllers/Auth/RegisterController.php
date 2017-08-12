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
use App\Skill;

class RegisterController extends Controller
{
    

    use RegistersUsers;

   
    protected $redirectTo = 'applicant/newsfeed';

   
    public function __construct()
    {
        $this->middleware('guest');
    }

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
        if($data['gender'] == "Male"){
            $avatar = 'public/default/avatars/male.png';
        }else{
            $avatar = 'public/default/avatars/female.png';
        }

        $first = $data['firstname'];
        $last = $data['lastname'];
        $slug = $first . '-' . $last;


        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],
            'slug' => str_slug($slug),
            'avatar' => $avatar
        ]);
        
        $this->assignRole($user)->createprofile($user)->createAddress($user);
        return $user;
    }

    protected function assignRole($user){
        
        $user->roles()->attach(Role::where('name', 'applicant')->first());

        return $this;
    }

    protected function createprofile($user){

        $profile = new Profile();
        $profile->user_id = $user->id;
        // $profile->age = null;
        // $profile->bio = '';
        // $profile->bday ='';
        // $profile->civil_status = '';

        $user->profile()->save($profile);

        return $this;
    }

    public function createAddress($user){

        $address = new Address();

        $address->user_id = $user->id;
        $address->street = '';
        $address->barangay = '';
        $address->city = '';
        $address->province = '';
        $address->country = '';

        $user->address()->save($address);


        return $this;
    }
    // public function createSchool($user){

    //     $school = new School();
    //     $school->user_id = $user->id; 

    //     //elem
    //     $school->elem_school = 'school name elementary';
    //     $school->elem_address = 'school address elementary';
    //     $school->elem_start = 'school start elementary';
    //     $school->elem_end = 'school end elementary';

    //     //sec
    //     $school->sec_school = 'school name secondary';
    //     $school->sec_address = 'school address secondary';
    //     $school->sec_start = 'school start secondary';
    //     $school->sec_end = 'school end secondary';
    //     //ter
               
    //     $school->ter_school = 'not specified';
    //     $school->ter_degree = 'not specified';
    //     $school->ter_field_of_study = 'not specified';
    //     $school->ter_major = 'not specified';
    //     $school->ter_start_year = 'not specified';
    //     $school->ter_end_year = 'not specified';

    //     $user->school()->save($school);


    //     return $this;

    // }

    
}
