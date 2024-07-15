<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Utilisateur</title>
    <style>
        body {
            background: #f7f7ff;
            margin-top: 20px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }
        .me-2 {
            margin-right: .5rem!important;
        }
        /* Ajouter un curseur pointer au survol de l'image de profil */
img, video {
    cursor: pointer;
}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="images/..." alt=" cliquez-pour-Ajouter" class="rounded-circle p-1 bg-primary" width="110">
                                <div class="mt-3">
                                    <h4>Kouame</h4>
                                    <p class="text-secondary mb-1"> Mecanicien</p>
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
                                <!-- Champs pour les réseaux sociaux avec icônes -->
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <i class="fas fa-globe me-2"></i> Site web
                                    </h6>
                                    <input type="text" class="form-control" id="siteWeb" placeholder="Entrez le lien vers votre site web">
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <i class="fab fa-twitter me-2"></i> Twitter
                                    </h6>
                                    <input type="text" class="form-control" id="twitter" placeholder="Entrez le lien vers votre compte Twitter">
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <i class="fab fa-instagram me-2"></i> Instagram
                                    </h6>
                                    <input type="text" class="form-control" id="instagram" placeholder="Entrez le lien vers votre compte Instagram">
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">
                                        <i class="fab fa-facebook me-2"></i> Facebook
                                    </h6>
                                    <input type="text" class="form-control" id="facebook" placeholder="Entrez le lien vers votre page Facebook">
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
                                    <input type="text" class="form-control" value="Kouame">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">E-mail</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="solutionengageit@example.com" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Téléphone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="(225) 0140711202">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Adresse</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="Bp 24 bouake, commerce">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Pays</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="côte d'ivoire">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Ville</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" class="form-control" value="Bouake">
                                </div>
                            </div>
                              <!-- Nouveau champ : Commune -->
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Commune</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" id="commune" value="Brobo">
                        </div>
                    </div>
                    <!-- Nouveau champ : Quartier -->
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Quartier</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" id="quartier" value="nouveau quartier">
                        </div>
                    </div>
                    <!-- Nouveau champ : Métier -->
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Métier</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" id="metier" value="mecanicien">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">experience</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" id="experience" value="5 ans">
                        </div>
                    </div>
                    <!-- Nouveau champ : Description (Biographie, Compétences) -->
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Description</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <textarea class="form-control" id="description" rows="4" placeholder="Biographie, Compétences"></textarea>
                        </div>
                    </div>
                    <!-- Ajoutez ces éléments dans la section où se trouve le formulaire de modification du profil -->
                     
                     <div class="row">
                         <div class="col-sm-12">
                             <button class="btn btn-info">Enregistrer les modifications</button>
                                    <!-- Modifiez l'élément de confirmation pour inclure des classes CSS -->
                                    <div id="confirmation-message" class="alert alert-success d-none">
                                        <i class="fas fa-check-circle me-2"></i> Modifications enregistrées avec succès !
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <h3 class="d-flex align-items-center mb-3">Portfolio</h3>
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 1">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 2">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 3">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 3">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 3">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 mb-3">
                        <figure>
                            <img src="images/..." class="img-fluid rounded" alt="Image 3">
                            <figcaption class="text-center mt-2">Une création unique en bois sculpté par mes soins</figcaption>
                        </figure>
                    </div>
                    <div class="col-3 mb-3 d-flex justify-content-center">
                        <figure class="d-flex flex-column align-items-center">
                            <video controls class="img-fluid rounded" alt="Vidéo 1">
                                <source src="videos/VIDEO1.mp4" type="video/mp4">
                                Votre navigateur ne supporte pas la lecture de vidéos.
                            </video>
                            <figcaption class="text-center mt-2">Vidéo de ma création unique en bois sculpté</figcaption>
                        </figure>
                    </div>
                    <div class="col-3 mb-3 d-flex justify-content-center">
                        <figure class="d-flex flex-column align-items-center">
                            <video controls class="img-fluid rounded" alt="Vidéo 2">
                                <source src="videos/VIDEO2.mp4" type="video/mp4">
                                Votre navigateur ne supporte pas la lecture de vidéos.
                            </video>
                            <figcaption class="text-center mt-2">Vidéo de ma deuxième création en bois sculpté</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
