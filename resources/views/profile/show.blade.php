@extends('layouts.app')

@section('content')
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                        <img src="{{ $user->profile_image ? asset('storage/' . $user->profile_image) : asset('images/default-profile.jpg') }}" alt="Photo de profil" class="rounded-circle p-1 bg-primary" width="110" id="profile-image">
                            <div class="mt-3">
                                <h4>{{ $user->nom }} {{ $user->prenom }}</h4>
                                <p class="text-secondary mb-1">{{ $user->metier }}</p>
                                <p class="text-muted font-size-sm">{{ $user->ville }}, {{ $user->pays }}</p>
                                <form action="{{ route('profile.update.image') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <input type="file" name="profile_image" id="profile-image-input" class="form-control mt-2" accept="image/*">
                                    <button type="submit" class="btn btn-primary mt-2">Mettre à jour la photo</button>
                                </form>
                                <button class="btn btn-success mt-2">
                                    <i class="fas fa-phone-alt"></i> Appeler
                                </button>
                                <button class="btn btn-success mt-2">
                                    <i class="fab fa-whatsapp"></i> WhatsApp
                                </button>
                            </div>
                        </div>

                        <hr class="my-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-globe me-2"></i>Site web</h6>
                                <span class="text-secondary">{{ $user->site_web }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-twitter me-2"></i>Twitter</h6>
                                <span class="text-secondary">{{ $user->twitter }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-instagram me-2"></i>Instagram</h6>
                                <span class="text-secondary">{{ $user->instagram }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-facebook me-2"></i>Facebook</h6>
                                <span class="text-secondary">{{ $user->facebook }}</span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Nom et Prénom</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->nom }} {{ $user->prenom }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">E-mail</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Téléphone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->telephone }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Adresse</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->adresse }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Pays</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->pays }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Ville</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->ville }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Commune</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->commune }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Quartier</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->quartier }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Métier</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->metier }}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Expérience</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->experience }} ans
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Description</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->description }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info" href="{{ route('profile.edit') }}">Modifier</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Portfolio</h5>
                        <div class="row" id="portfolio-items">
                            @foreach($user->portfolioItems as $item)
                                <div class="col-md-4 mb-3">
                                    @if(Str::endsWith($item->path, ['.jpg', '.jpeg', '.png', '.gif']))
                                        <img src="{{ asset('storage/' . $item->path) }}" class="img-fluid" alt="Portfolio item">
                                    @elseif(Str::endsWith($item->path, ['.mp4', '.avi', '.mov']))
                                        <video width="100%" controls>
                                            <source src="{{ asset('storage/' . $item->path) }}" type="video/mp4">
                                            Votre navigateur ne supporte pas la lecture de vidéos.
                                        </video>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <form action="{{ route('profile.update.portfolio') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="portfolio_items">Ajouter des éléments au portfolio</label>
                                <input type="file" name="portfolio_items[]" id="portfolio_items" class="form-control" multiple accept="image/*,video/*">
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Ajouter au portfolio</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    document.getElementById('profile-image-input').addEventListener('change', function(e) {
        if (e.target.files && e.target.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('profile-image').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        }
    });
</script>
@endsection