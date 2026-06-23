<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function inicio()
    {
        return view('pages.inicio');
    }

    public function institucional()
    {
        return view('pages.institucional');
    }

    public function organigrama()
    {
        return view('pages.organigrama');
    }

    public function mof()
    {
        return view('pages.mof');
    }

    public function mapro()
    {
        return view('pages.mapro');
    }

    public function tramites()
    {
        return view('pages.tramites');
    }

    public function tramitesEnviar(Request $request)
    {
        // Demostracion academica: no persiste en base de datos.
        // Para produccion, aqui se validaria y guardaria en la tabla 'solicitudes'.
        $request->validate([
            'empresa'     => 'required|string|max:150',
            'responsable' => 'required|string|max:150',
            'correo'      => 'required|email',
        ]);

        return redirect()->route('tramites')->with('enviado', true);
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function contactoEnviar(Request $request)
    {
        $request->validate([
            'nombre'  => 'required|string|max:150',
            'correo'  => 'required|email',
            'mensaje' => 'required|string',
        ]);

        return redirect()->route('contacto')->with('enviado', true);
    }

    public function login()
    {
        return view('pages.login');
    }

    public function loginIntentar(Request $request)
    {
        // Demostracion academica: no valida credenciales reales contra base de datos.
        // Para produccion, aqui se usaria Auth::attempt() con la tabla 'users'.
        $request->validate([
            'correo'   => 'required|email',
            'password' => 'required|string',
        ]);

        return redirect()->route('inicio')->with('enviado', true);
    }
}
