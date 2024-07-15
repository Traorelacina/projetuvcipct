// script.js
// enregistrer

document.addEventListener('DOMContentLoaded', function() {
    const saveButton = document.querySelector('.btn-info');
    const confirmationMessage = document.getElementById('confirmation-message');

    saveButton.addEventListener('click', function() {
        // Générer la page (simulé ici avec un délai de 2 secondes)
        setTimeout(function() {
            // Afficher le message de confirmation
            confirmationMessage.classList.remove('d-none');
        }, 2000); // Générer la page pendant 2 secondes (simulé)

        // Cacher le message après 5 secondes (simulé)
        setTimeout(function() {
            confirmationMessage.classList.add('d-none');
        }, 5000);
    });
});

// script.js

document.addEventListener('DOMContentLoaded', function() {
    const callButton = document.querySelector('.btn-success:nth-of-type(1)');
    const whatsappButton = document.querySelector('.btn-success:nth-of-type(2)');

    callButton.addEventListener('click', function() {
        window.location.href = 'tel:+2250584656447'; // Remplacez par le numéro de téléphone approprié
    });

    whatsappButton.addEventListener('click', function() {
        window.open('https://wa.me/2250584656447', '_blank'); // Remplacez par le numéro de téléphone approprié
    });
});

// script.js

document.addEventListener('DOMContentLoaded', function() {
    const profileImage = document.querySelector('img');

    profileImage.addEventListener('click', function() {
        // Ouvrir la boîte de dialogue pour sélectionner une nouvelle image
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = 'image/*';
        input.onchange = function(e) {
            const file = e.target.files[0];
            const reader = new FileReader();
            reader.onload = function(event) {
                profileImage.src = event.target.result;
            };
            reader.readAsDataURL(file);
        };
        input.click();
    });
});

// Portfolio

// script.js

document.addEventListener('DOMContentLoaded', function() {
    const portfolioImages = document.querySelectorAll('.img-fluid');

    portfolioImages.forEach(image => {
        image.addEventListener('click', function() {
            const input = document.createElement('input');
            input.type = 'file';
            input.accept = 'image/*';
            input.onchange = function(e) {
                const file = e.target.files[0];
                const reader = new FileReader();
                reader.onload = function(event) {
                    image.src = event.target.result;
                };
                reader.readAsDataURL(file);
            };
            input.click();
        });
    });
});


// script.js

document.addEventListener('DOMContentLoaded', function() {
    const saveButton = document.getElementById('saveSocialLinks');

    saveButton.addEventListener('click', function() {
        // Récupérer les valeurs des champs du profil
        const siteWeb = document.getElementById('siteWeb').value;
        const twitter = document.getElementById('twitter').value;
        const instagram = document.getElementById('instagram').value;
        const facebook = document.getElementById('facebook').value;

        // Enregistrer les valeurs des réseaux sociaux dans votre système
        console.log('Site web:', siteWeb);
        console.log('Twitter:', twitter);
        console.log('Instagram:', instagram);
        console.log('Facebook:', facebook);

        // Récupérer les images du portfolio
        const portfolioImages = document.querySelectorAll('.img-fluid');
        portfolioImages.forEach((image, index) => {
            console.log(`Image ${index + 1}: ${image.src}`);
            // Enregistrer les modifications des images du portfolio dans votre système
        });

        // Vous pouvez ajouter ici la logique pour enregistrer ces informations dans votre base de données
    });
});