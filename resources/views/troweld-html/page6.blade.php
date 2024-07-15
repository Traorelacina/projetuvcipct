<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" /> 
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" /> 

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <!--<link href="css/responsive.css" rel="stylesheet" />  -->

    <script src="logi.js"></script>

    <title>Connexion / Inscription</title>

    
    

<body>
    <div class="container01">
        <div class="corri">
            <div></div>
             <div id="connexion">
            <h2>Connexion</h2>
            <form action="#" method="post">
                <label for="email_conn">Email :</label>
                <input type="email" id="email_conn" name="email" required>

                <label for="password_conn">Mot de passe :</label>
                <input type="password" id="password_conn" name="password" required>
                <input type="submit" value="Se connecter">
            </form>
            <div class="toggle">
                <p>Pas de compte ? <a href="#" onclick="toggleForms()">S'inscrire</a></p>
            </div>
        </div>

        <div id="inscription">
            <h2>Inscription</h2>
            <form action="#" method="post">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>

                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required>

                <label for="adresse">Adresse :</label>
                <textarea id="adresse" name="adresse" required></textarea>

                <label for="telephone">Téléphone :</label>
                <input type="tel" id="telephone" name="telephone" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="metier">Métier :</label>
                <select id="metier" name="metier" required>
                    <option value="">Choisissez un métier</option>
                    <option value="developpeur">Développeur</option>
                    <option value="designer">Designer</option>
                    <option value="marketing">Marketing</option>
                    <option value="comptable">Comptable</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="medecin">Médecin</option>
                    <option value="autre">Autre</option>
                </select>
               
                <label for="localisation">votre localisation</label>

                <form id="locationForm">
                    <select id="countrySelect">
                        <option value="">Sélectionnez un pays</option>
                    </select>
                    <br>
                    <select id="citySelect" disabled>
                        <option value="">Sélectionnez d'abord un pays</option>
                    </select>
                    <br>
                    <div id="loading">Chargement en cours...</div>
                    <div id="error"></div>
                </form>
                <label for="adresse">votre commune :</label>
                <textarea id="commune" name="commune" required></textarea>

                <label for="adresse">votre quartier :</label>
                <textarea id="quartier" name="quartier" required></textarea>
             
                <label for="experience">Expérience (en années) :</label>
                
                <input type="number" id="experience" name="experience" min="0" required>

                <label for="description">Description (biographie, compétences) :</label>
                <textarea id="description" name="description" rows="5" required></textarea>

                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm_password">Confirmer le mot de passe :</label>
                <input type="password" id="confirm_password" name="confirm_password" required>

                <input type="submit" value="S'inscrire">
            </form>
            <div class="toggle">
                <p>Déjà un compte ? <a href="#" onclick="toggleForms()">Se connecter</a></p>
            </div>
        </div>
    </div>
    </div>


    <script>
           
        function toggleForms() {
            const connexionForm = document.getElementById('connexion');
            const inscriptionForm = document.getElementById('inscription');
            
            if (connexionForm.style.display === 'none') {
                connexionForm.style.display = 'block';
                inscriptionForm.style.display = 'none';
            } else {
                connexionForm.style.display = 'none';
                inscriptionForm.style.display = 'block';
            }
        }



            const countrySelect = document.getElementById('countrySelect');
            const citySelect = document.getElementById('citySelect');
            const loading = document.getElementById('loading');
            const error = document.getElementById('error');
    
            const geoNamesUsername = 'lacina';
    
            async function loadCountries() {
                loading.style.display = 'block';
                error.style.display = 'none';
                try {
                    const response = await fetch('https://restcountries.com/v3.1/all');
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const countries = await response.json();
                    countries.sort((a, b) => a.name.common.localeCompare(b.name.common));
                    countries.forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.cca2;
                        option.textContent = country.name.common;
                        countrySelect.appendChild(option);
                    });
                } catch (err) {
                    console.error('Erreur lors du chargement des pays:', err);
                    error.textContent = `Erreur de chargement des pays: ${err.message}`;
                    error.style.display = 'block';
                } finally {
                    loading.style.display = 'none';
                }
            }
    
            async function loadCities(countryCode) {
                citySelect.innerHTML = '<option value="">Chargement des villes...</option>';
                citySelect.disabled = true;
                loading.style.display = 'block';
                error.style.display = 'none';
                try {
                    const url = `https://secure.geonames.org/searchJSON?country=${countryCode}&featureClass=P&maxRows=1000&username=${geoNamesUsername}`;
                    console.log('Fetching cities from:', url);
                    const response = await fetch(url);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json();
                    console.log('Received data:', data);
                    if (data.status) {
                        throw new Error(`GeoNames API error: ${data.status.message}`);
                    }
                    citySelect.innerHTML = '<option value="">Sélectionnez une ville</option>';
                    if (data.geonames && data.geonames.length > 0) {
                        data.geonames.sort((a, b) => a.name.localeCompare(b.name));
                        data.geonames.forEach(city => {
                            const option = document.createElement('option');
                            option.value = city.geonameId;
                            option.textContent = city.name;
                            citySelect.appendChild(option);
                        });
                    } else {
                        citySelect.innerHTML = '<option value="">Aucune ville trouvée</option>';
                    }
                    citySelect.disabled = false;
                } catch (err) {
                    console.error('Erreur lors du chargement des villes:', err);
                    error.textContent = `Erreur de chargement des villes: ${err.message}`;
                    error.style.display = 'block';
                    citySelect.innerHTML = '<option value="">Erreur de chargement</option>';
                } finally {
                    loading.style.display = 'none';
                }
            }
    
            countrySelect.addEventListener('change', (e) => {
                if (e.target.value) {
                    loadCities(e.target.value);
                } else {
                    citySelect.innerHTML = '<option value="">Sélectionnez d abord un pays</option>';
                    citySelect.disabled = true;
                }
            });
    
            loadCountries();
       
    </script>

</body>
</html>