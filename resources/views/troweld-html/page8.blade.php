<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/style.css" rel="stylesheet" />
    <script src="logi.js"></script>
</head>
<body>
    
   
       
    
        <div class="container">
            <div class="cover-photo" id="cover-photo"></div>
            <div class="profile-info">
                <div class="profile-pic" id="profile-pic"></div>
                <div class="user-details">
                    <h1><span id="user-prenom">Prénom</span> <span id="user-nom">Nom</span></h1>
                    <div id="userInfo" class="info-grid">
                        <!-- Les informations de l'utilisateur seront injectées ici -->
                    </div>
                    <button class="edit-btn" onclick="toggleEditMode()">Modifier le profil</button>
                </div>
            </div>
        </div>
    
        <div id="editForm" class="container">
            <h2>Modifier le profil</h2>
            <form id="profileForm">
                <input type="text" id="nom" placeholder="Nom" required>
                <input type="text" id="prenom" placeholder="Prénom" required>
                <textarea id="adresse" placeholder="Adresse" required></textarea>
                <input type="tel" id="telephone" placeholder="Téléphone" required>
                <input type="email" id="email" placeholder="Email" required>
                <select id="metier" required>
                    <option value="">Choisissez un métier</option>
                    <option value="developpeur">Développeur</option>
                    <option value="designer">Designer</option>
                    <option value="marketing">Marketing</option>
                    <option value="comptable">Comptable</option>
                    <option value="enseignant">Enseignant</option>
                    <option value="medecin">Médecin</option>
                    <option value="autre">Autre</option>
                </select>
                <select id="pays">
                    <option value="">Sélectionnez un pays</option>
                </select>
                <select id="ville" disabled>
                    <option value="">Sélectionnez d'abord un pays</option>
                </select>
                <input type="number" id="experience" placeholder="Expérience (en années)" min="0" required>
                <textarea id="description" placeholder="Description (biographie, compétences)" rows="5" required></textarea>
                <input type="file" id="profilePic" accept="image/*">
                <input type="file" id="coverPhoto" accept="image/*">
                <button type="submit" class="save-btn">Enregistrer</button>
            </form>
        </div>
    
        <script>
            // Fonction pour charger les données du profil
            
        document.addEventListener('DOMContentLoaded', function() {
            if (!isUserLoggedIn()) {
                alert('Veuillez vous connecter d\'abord');
                window.location.href = 'formulair.html';
                return;
            }

            function loadProfile() {
                const userData = getUserData();
                const fields = ['nom', 'prenom', 'adresse', 'telephone', 'email', 'metier', 'pays', 'ville', 'experience', 'description'];
                let html = '';

                fields.forEach(field => {
                    const value = userData[field] || '';
                    html += `
                        <div class="info-item">
                            <span class="info-label">${field.charAt(0).toUpperCase() + field.slice(1)}:</span>
                            <span id="user-${field}">${value}</span>
                        </div>
                    `;
                    if (document.getElementById(field)) {
                        document.getElementById(field).value = value;
                    }
                });

                document.getElementById('userInfo').innerHTML = html;
                document.getElementById('user-prenom').textContent = userData.prenom || 'Prénom';
                document.getElementById('user-nom').textContent = userData.nom || 'Nom';

                if (userData.profilePic) {
                    document.getElementById('profile-pic').style.backgroundImage = `url(${userData.profilePic})`;
                }
                if (userData.coverPhoto) {
                    document.getElementById('cover-photo').style.backgroundImage = `url(${userData.coverPhoto})`;
                }
            }
    
            // Fonction pour basculer entre le mode affichage et le mode édition
            function toggleEditMode() {
                const editForm = document.getElementById('editForm');
                editForm.style.display = editForm.style.display === 'none' ? 'block' : 'none';
            }
    
            // Fonction pour gérer la soumission du formulaire
            document.getElementById('profileForm').addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                const profileData = {};
    
                for (let [key, value] of formData.entries()) {
                    if (key !== 'profilePic' && key !== 'coverPhoto') {
                        profileData[key] = value;
                    }
                }
    
                // Gestion des images
                const profilePic = document.getElementById('profilePic').files[0];
                const coverPhoto = document.getElementById('coverPhoto').files[0];
    
                if (profilePic) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileData.profilePic = e.target.result;
                        saveAndReload(profileData);
                    };
                    reader.readAsDataURL(profilePic);
                }
    
                if (coverPhoto) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileData.coverPhoto = e.target.result;
                        saveAndReload(profileData);
                    };
                    reader.readAsDataURL(coverPhoto);
                }
    
                if (!profilePic && !coverPhoto) {
                    saveAndReload(profileData);
                }
            });
    
            // Fonction pour sauvegarder les données et recharger le profil
            function saveAndReload(profileData) {
                localStorage.setItem('profileData', JSON.stringify(profileData));
                loadProfile();
                toggleEditMode();
            }
    
            // Charger le profil au chargement de la page
            loadProfile();
    
            // Code pour charger les pays et les villes (comme dans votre formulaire original)
            const countrySelect = document.getElementById('pays');
            const citySelect = document.getElementById('ville');
    
            async function loadCountries() {
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
                }
            }
    
            async function loadCities(countryCode) {
                citySelect.innerHTML = '<option value="">Chargement des villes...</option>';
                citySelect.disabled = true;
                try {
                    const url = `https://secure.geonames.org/searchJSON?country=${countryCode}&featureClass=P&maxRows=1000&username=lacina`;
                    const response = await fetch(url);
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    const data = await response.json();
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
                    citySelect.innerHTML = '<option value="">Erreur de chargement</option>';
                }
            }
    
            countrySelect.addEventListener('change', (e) => {
                if (e.target.value) {
                    loadCities(e.target.value);
                } else {
                    citySelect.innerHTML = '<option value="">Sélectionnez d\'abord un pays</option>';
                    citySelect.disabled = true;
                }
            });
    
            loadCountries();
        });
        </script>
    

</body>

</html>