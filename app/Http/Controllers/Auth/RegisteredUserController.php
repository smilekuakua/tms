<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistration;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\User;
use App\Models\Worker;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'photo' => 'mimes:png,jpg,jpeg,csv,txt,pdf|max:2048',
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 0,
        ]);

        if ($request->code == 'st404GP') {
            $request->validate([

            ]);
            $data = new Student;
            $data->studentid = $request->studentid;
            $data->surname = $request->surname;
            $data->address = $request->address;
            $data->phonenumber = $request->phonenumber;
            $data->uid = $user->id;
            if($request->file('photo')) {
                $file = $request->file('photo');
                $filename = time().'_'.$file->getClientOriginalName();
                // File upload location
                $location = 'uploads/profil';

                // Upload file
                $file->move($location,$filename);
                $data->photo = $filename;
                $data->save();

          }
            $data->save();
            $user->userType = 'user';
            $user->save();
            $user->students()->attach($data);
        }
        elseif ($request->code == 'w404SUP') {

            $data = new Worker;
            $data->surname = $request->surname;
            $data->company = $request->company;
            $data->position = $request->position;
            $data->uid = $user->id;
            $data->save();
            $user->userType = 'worker';
            $user->save();
            $user->workers()->attach($data);
        }

        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
