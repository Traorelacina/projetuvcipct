@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inscription artisan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nom -->
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>
                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Prénom -->
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prénom') }}</label>
                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom">
                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Adresse -->
                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>
                            <div class="col-md-6">
                                <textarea id="adresse" class="form-control @error('adresse') is-invalid @enderror" name="adresse" required>{{ old('adresse') }}</textarea>
                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Téléphone -->
                        <div class="form-group row">
                            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Téléphone') }}</label>
                            <div class="col-md-6">
                                <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required>
                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- E-Mail -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Métier -->
                        <div class="form-group row">
                            <label for="metier" class="col-md-4 col-form-label text-md-right">{{ __('Métier') }}</label>
                            <div class="col-md-6">
                                <select id="metier" class="form-control @error('metier') is-invalid @enderror" name="metier" required>
                                    <option value="">Choisissez un métier</option>
                                    <option value="developpeur" {{ old('metier') == 'developpeur' ? 'selected' : '' }}>Développeur</option>
                                    <option value="designer" {{ old('metier') == 'designer' ? 'selected' : '' }}>Designer</option>
                                    <option value="marketing" {{ old('metier') == 'marketing' ? 'selected' : '' }}>Marketing</option>
                                    <option value="comptable" {{ old('metier') == 'comptable' ? 'selected' : '' }}>Comptable</option>
                                    <option value="enseignant" {{ old('metier') == 'enseignant' ? 'selected' : '' }}>Enseignant</option>
                                    <option value="medecin" {{ old('metier') == 'medecin' ? 'selected' : '' }}>Médecin</option>
                                    <option value="autre" {{ old('metier') == 'autre' ? 'selected' : '' }}>Autre</option>
                                </select>
                                @error('metier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Pays -->
                        <div class="form-group row">
                            <label for="pays" class="col-md-4 col-form-label text-md-right">{{ __('Pays') }}</label>
                            <div class="col-md-6">
                                <select id="pays" class="form-control @error('pays') is-invalid @enderror" name="pays" required>
                                    <option value="">Sélectionnez un pays</option>
                                    <option value="cote_ivoire" {{ old('pays') == 'cote_ivoire' ? 'selected' : '' }}>Côte d'Ivoire</option>
                                    <option value="senegal" {{ old('pays') == 'senegal' ? 'selected' : '' }}>Sénégal</option>
                                    <option value="ghana" {{ old('pays') == 'ghana' ? 'selected' : '' }}>Ghana</option>
                                </select>
                                @error('pays')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Ville -->
                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>
                            <div class="col-md-6">
                                <select id="ville" class="form-control @error('ville') is-invalid @enderror" name="ville" required>
                                    <option value="">Sélectionnez d'abord un pays</option>
                                </select>
                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Commune -->
                        <div class="form-group row">
                            <label for="commune" class="col-md-4 col-form-label text-md-right">{{ __('Commune') }}</label>
                            <div class="col-md-6">
                                <select id="commune" class="form-control @error('commune') is-invalid @enderror" name="commune">
                                    <option value="">Sélectionnez d'abord une ville</option>
                                </select>
                                <input id="commune_input" type="text" class="form-control mt-2 d-none @error('commune') is-invalid @enderror" name="commune_input" placeholder="Saisissez votre commune">
                                @error('commune')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Quartier -->
                        <div class="form-group row">
                            <label for="quartier" class="col-md-4 col-form-label text-md-right">{{ __('Quartier') }}</label>
                            <div class="col-md-6">
                                <input id="quartier" type="text" class="form-control @error('quartier') is-invalid @enderror" name="quartier" value="{{ old('quartier') }}" required>
                                @error('quartier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Expérience -->
                        <div class="form-group row">
                            <label for="experience" class="col-md-4 col-form-label text-md-right">{{ __('Expérience (en années)') }}</label>
                            <div class="col-md-6">
                                <input id="experience" type="number" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required min="0">
                                @error('experience')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>
                            <div class="col-md-6">
                                <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" required rows="5">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mot de passe -->
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Confirmer le mot de passe -->
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmer le mot de passe') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Bouton d'inscription -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@php
$villes = [
    'cote_ivoire' => [
        'Abidjan', 'Yamoussoukro', 'Bouaké', 'Daloa', 'Korhogo', 'San-Pédro', 'Man', 'Divo', 
        'Gagnoa', 'Abengourou', 'Anyama', 'Séguéla', 'Odienné', 'Dimbokro', 'Ferkessédougou', 
        'Bondoukou', 'Dabou', 'Toumodi', 'Adzopé', 'Agboville', 'Sassandra', 'Grand-Bassam', 
        'Soubré', 'Aboisso', 'Bingerville', 'Danané', 'Duékoué', 'Issia', 'Tiassalé', 'Tengréla'
    ],
    'senegal' => [
        'Dakar', 'Thiès', 'Rufisque', 'Kaolack', 'Mbour', 'Saint-Louis', 'Ziguinchor', 'Diourbel', 
        'Louga', 'Tambacounda', 'Mbacké', 'Kolda', 'Richard Toll', 'Fatick', 'Guédiawaye', 'Pikine', 
        'Touba', 'Kédougou', 'Sédhiou', 'Bargny', 'Tivaouane', 'Joal-Fadiouth', 'Matam', 'Vélingara', 
        'Dagana', 'Bambey', 'Kaffrine', 'Oussouye', 'Sokone', 'Mékhé'
    ],
    'ghana' => [
        'Accra', 'Kumasi', 'Tamale', 'Sekondi-Takoradi', 'Cape Coast', 'Sunyani', 'Tema', 'Teshie', 
        'Koforidua', 'Obuasi', 'Wa', 'Techiman', 'Ho', 'Nungua', 'Lashibi', 'Madina', 'Bolgatanga', 
        'Dome', 'Tema New Town', 'Gbawe', 'Ashaiman', 'Ejura', 'Bawku', 'Aflao', 'Agona Swedru', 
        'Winneba', 'Asamankese', 'Nsawam', 'Yendi', 'Berekum'
    ]
];

$communes = ['Abidjan' => [
        'Abobo', 'Adjamé', 'Attécoubé', 'Cocody', 'Koumassi', 'Marcory', 'Plateau', 'Port-Bouët', 
        'Treichville', 'Yopougon', 'Songon', 'Bingerville', 'Anyama'
    ],
    'Yamoussoukro' => ['Attiégouakro', 'Kossou', 'Lolobo', 'Morofé'],
    'Bouaké' => ['Bouaké-SP', 'Bouaké-Ville', 'Brobo', 'Djébonoua'],
    'Daloa' => ['Bédiala', 'Daloa', 'Gadouan', 'Gboguhé', 'Zaibo'],
    'Korhogo' => ['Dikodougou', 'Guiembé', 'Karakoro', 'Korhogo', 'Nafoun', 'Niofoin', 'Sinématiali'],
    'Dakar' => [
        'Plateau', 'Médina', 'Grand Dakar', 'Biscuiterie', 'Hann Bel-Air', 'Sicap-Liberté', 
        'Dieuppeul-Derklé', 'Fann-Point E-Amitié', 'Gueule Tapée-Fass-Colobane', 'HLM', 
        'Cambérène', 'Grand Yoff', 'Patte d\'Oie', 'Parcelles Assainies', 'Ngor', 'Ouakam', 
        'Yoff', 'Mermoz-Sacré-Cœur'
    ],
    'Thiès' => ['Thiès Est', 'Thiès Nord', 'Thiès Ouest'],
    'Saint-Louis' => ['Saint-Louis', 'Sor', 'Dagana', 'Podor'],
    'Ziguinchor' => ['Ziguinchor', 'Bignona', 'Oussouye'],
    'Accra' => [
        'Ablekuma Central', 'Ablekuma North', 'Ablekuma South', 'Ablekuma West', 'Accra Metropolitan', 
        'Adenta Municipal', 'Ashaiman Municipal', 'Ayawaso Central', 'Ayawaso East', 'Ayawaso North', 
        'Ayawaso West', 'Ga Central', 'Ga East', 'Ga North', 'Ga South', 'Ga West', 'Kpone Katamanso', 
        'Krobo', 'La Dade-Kotopon', 'La Nkwantanang Madina', 'Ledzokuku-Krowor', 'Ningo Prampram', 
        'Okaikwei North', 'Okaikwei South', 'Shai Osudoku', 'Tema Metropolitan', 'Tema West'
    ],
    'Kumasi' => [
        'Asokwa', 'Bantama', 'Kwadaso', 'Manhyia', 'Nhyiaeso', 'Oforikrom', 'Old Tafo', 
        'Suame', 'Subin'
    ],
    'Tamale' => ['Tamale Central', 'Tamale North', 'Tamale South', 'Sagnarigu']
];
@endphp

<script>
document.addEventListener('DOMContentLoaded', function() {
    const paysSelect = document.getElementById('pays');
    const villeSelect = document.getElementById('ville');
    const communeSelect = document.getElementById('commune');
    const communeInput = document.getElementById('commune_input');

    const villes = @json($villes);
    const communes = @json($communes);

    paysSelect.addEventListener('change', function() {
        const selectedPays = this.value;
        villeSelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
        communeSelect.innerHTML = '<option value="">Sélectionnez d abord une ville</option>';
        communeInput.classList.add('d-none');
        communeInput.value = '';

        if (selectedPays in villes) {
            villes[selectedPays].forEach(ville => {
                const option = new Option(ville, ville);
                villeSelect.add(option);
            });
        }
    });

    villeSelect.addEventListener('change', function() {
        const selectedVille = this.value;
        communeSelect.innerHTML = '<option value="">Sélectionnez une commune</option>';
        
        if (selectedVille in communes) {
            communes[selectedVille].forEach(commune => {
                const option = new Option(commune, commune);
                communeSelect.add(option);
            });
            communeSelect.classList.remove('d-none');
            communeInput.classList.add('d-none');
        } else {
            communeSelect.classList.add('d-none');
            communeInput.classList.remove('d-none');
        }
    });
});
</script>
@endsection