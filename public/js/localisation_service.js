document.addEventListener('DOMContentLoaded', function() {
    const paysSelect = document.getElementById('pays');
    const villeSelect = document.getElementById('ville');
    const communeInput = document.getElementById('commune');

    // Load countries
    fetch('https://restcountries.com/v3.1/all')
        .then(response => response.json())
        .then(data => {
            let options = '<option value="">Sélectionnez un pays</option>';
            data.sort((a, b) => a.name.common.localeCompare(b.name.common));
            data.forEach(country => {
                options += `<option value="${country.cca2}">${country.name.common}</option>`;
            });
            paysSelect.innerHTML = options;
        })
        .catch(error => console.error('Erreur lors du chargement des pays:', error));

    // Load cities when a country is selected
    paysSelect.addEventListener('change', function() {
        const countryCode = this.value;
        if (countryCode) {
            villeSelect.innerHTML = '<option value="">Chargement des villes...</option>';
            villeSelect.disabled = true;

            fetch(`https://wft-geo-db.p.rapidapi.com/v1/geo/countries/${countryCode}/regions`, {
                method: 'GET',
                headers: {
                    'x-rapidapi-key': 'YOUR_RAPIDAPI_KEY',
                    'x-rapidapi-host': 'wft-geo-db.p.rapidapi.com'
                }
            })
            .then(response => response.json())
            .then(data => {
                let options = '<option value="">Sélectionnez une ville</option>';
                data.data.forEach(region => {
                    options += `<option value="${region.id}">${region.name}</option>`;
                });
                villeSelect.innerHTML = options;
                villeSelect.disabled = false;
            })
            .catch(error => {
                console.error('Erreur lors du chargement des villes:', error);
                villeSelect.innerHTML = '<option value="">Erreur de chargement</option>';
            });
        } else {
            villeSelect.innerHTML = '<option value="">Sélectionnez d\'abord un pays</option>';
            villeSelect.disabled = true;
        }
    });

    // Enable/disable commune input based on selected city
    villeSelect.addEventListener('change', function() {
        communeInput.disabled = !this.value;
    });
});
