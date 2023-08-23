<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\notification;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Intervention\Image\Facades\Image;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        if($request->hasFile('avatar')) {

            $image = $request->file('avatar');
            $filename = $image->getClientOriginalName();
            $filename2 = str_replace(" ","",$filename);
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $image_resize->save(storage_path('app/public/'.$filename2));
        }else{
            $filename2    = 'no_profile.jpg';
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => $filename2,
        ]);

            $data = [
                'name'=>'Veterinaria',
                'email'=>'test@dummy.com',
                'url' => url('/dashboard/'.$user->email)
            ];
        Mail::to($user->email)->send(new \App\Mail\YouMail($data));
        return Inertia::render('Auth/Register',[
            'status' => $user->name.' te has registrado correctamente, te enviamos un correo de confirmacion para verificar tu
            cuenta',
        ]);
    }
    public function confirmation($email){
        $users = User::where('email',$email)->select('active')->pluck('active')->first();
        $users22 = User::where('email',$email)->select('admin')->pluck('admin')->first();

        if($users == true){
            $userss = User::where('email',$email)->get();
            event(new Registered($userss[0]));
            Auth::login($userss[0]);
            return redirect(RouteServiceProvider::HOME);
        }
        $userss = User::where('email',$email)->get();
        $usertotal = true;
        User::where('email',$email)->update(['active' => $usertotal]);
        event(new Registered($userss[0]));
        Auth::login($userss[0]);
            return redirect(RouteServiceProvider::HOME);

    }
    public function notifications($id){
        $users = User::where('id',$id)->select('noti')->pluck('noti')->first();
        $username = User::where('id', $id)->select('name')->pluck('name')->first();
        $usertotal = (int)$users + 1;
        $use = User::where('id',$id)->update(['noti' => (int)$usertotal]);
        $noti = new notification([
            'title' => "Usuario agregado bien:".$username,
            'tabla' => 'Usuario',
            'date' => date('Y-m-d H:i:s'),
            'user_id' => $id,
        ]);
        $noti->save();
    }
}
