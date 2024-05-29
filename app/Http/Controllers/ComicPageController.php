<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicPageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }


    // Mostra il form di modifica per l'utente specificato
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Aggiorna l'utente specificato
    public function update(Request $request, User $user)
    {
        // Valida i dati del form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'sometimes|nullable|string|min:8|confirmed',
        ]);
 
        // Aggiorna i campi fillable
        $user->update($request->only(['name', 'email', 'password']));
 
        // Reindirizza l'utente con un messaggio di successo
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

}