<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Events\Register;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
    
        event(new Register($user = $this->create($request->all())));
    
        // Send email verification notification
        $user->sendEmailVerificationNotification();
    
        return redirect()->route('login')->with('success', 'Your account has been created. Please verify your email to login.');
    }
    

  public function showRegistrationForm()
  {
      return view('register');
  }

  protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
}

  public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
}

}
