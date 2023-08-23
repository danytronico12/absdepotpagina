<?php

namespace App\Http\Controllers;

use App\Models\contactanos;
use App\Models\contacteno;
use App\Models\ddi;
use App\Models\notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactddiController extends Controller
{
    public function index()
    {
        $posts = contacteno::orderBy('id', 'desc')
            ->paginate(10);
        return inertia('Auth/contacto', compact('posts'));
    }
    public function index4444()
    {
        return inertia('contactenos');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telefono' => 'required|string|max:255',
            'comentario' => 'required|string|max:255',
        ]);

        $user = contacteno::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'comentario' => $request->comentario,
        ]);

        Mail::to("kratoritoszzz@gmail.com")->send(new \App\Mail\YouMail3($user));

        $this->notifications($user->id);

        return inertia('Dashboard');
    }
    public function store22(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'telefono' => 'required|string|max:255',
            'instagram' => 'required|string|max:255',
            'edad' => 'required|string|max:255',
            'razon' => 'required|string|max:255',
        ]);
        $user = ddi::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'instagram' => $request->instagram,
            'edad' => $request->edad,
            'razon' => $request->razon,
        ]);
        $data = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'instagram' => $request->instagram,
            'edad' => $request->edad,
            'razon' => $request->razon,
        ];
        $this->notifications($user->id);
        Mail::to("dankyamezquita.tf@gmail.com")->send(new \App\Mail\YouMail2($data));

        return inertia('Dashboard');
    }
    public function notifications($id)
    {
        $users = User::where('id', $id)->select('noti')->pluck('noti')->first();
        $username = User::where('id', $id)->select('name')->pluck('name')->first();
        $usertotal = (int)$users + 1;
        $use = User::where('id', $id)->update(['noti' => (int)$usertotal]);
        $noti = new notification([
            'title' => "Solicitud de Publicidad agregado bien:" . $username,
            'tabla' => 'Solicitud de Publicidad',
            'date' => date('Y-m-d H:i:s'),
            'user_id' => $id,
        ]);
        $noti->save();
    }
}
