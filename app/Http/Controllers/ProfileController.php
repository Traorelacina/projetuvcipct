<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        return view('profile.show', ['user' => Auth::user()]);
    }

    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        $validatedData = $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string'],
            'telephone' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'metier' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'commune' => ['required', 'string', 'max:255'],
            'quartier' => ['required', 'string', 'max:255'],
            'experience' => ['required', 'integer', 'min:0'],
            'description' => ['required', 'string'],
            'site_web' => ['nullable', 'url'],
            'twitter' => ['nullable', 'url'],
            'instagram' => ['nullable', 'url'],
            'facebook' => ['nullable', 'url'],
        ]);

        $user->update($validatedData);

        return redirect()->route('profile.show')->with('success', 'Profil mis à jour avec succès.');
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'profile_image' => ['required', 'image', 'max:2048'],
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_image')) {
            // Supprimer l'ancienne image si elle existe
            if ($user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }

            $path = $request->file('profile_image')->store('profile-images', 'public');
            $user->profile_image = $path;
            $user->save();
        }

        return redirect()->route('profile.show')->with('success', 'Photo de profil mise à jour avec succès.');
    }

    public function updatePortfolio(Request $request)
    {
        $request->validate([
            'portfolio_items' => ['required', 'array'],
            'portfolio_items.*' => ['file', 'mimes:jpeg,png,jpg,gif,mp4,mov,avi', 'max:20480'],
        ]);

        $user = Auth::user();

        if ($request->hasFile('portfolio_items')) {
            foreach ($request->file('portfolio_items') as $file) {
                $path = $file->store('portfolio-items', 'public');
                $user->portfolioItems()->create(['path' => $path]);
            }
        }

        return redirect()->route('profile.show')->with('success', 'Portfolio mis à jour avec succès.');
    }
}