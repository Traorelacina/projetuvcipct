// userManagement.js

// Fonction pour sauvegarder les données de l'utilisateur
function saveUserData(userData) {
    localStorage.setItem('userData', JSON.stringify(userData));
}

// Fonction pour récupérer les données de l'utilisateur
function getUserData() {
    const userData = localStorage.getItem('userData');
    return userData ? JSON.parse(userData) : null;
}

// Fonction pour vérifier si l'utilisateur est connecté
function isUserLoggedIn() {
    return !!getUserData();
}