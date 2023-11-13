document.addEventListener('DOMContentLoaded', function() {
    // Fonction pour générer un nombre aléatoire
    function generateRandomNumber() {
        return Math.floor(Math.random() * 100) + 1;
    }

    // Fonction pour afficher le nombre aléatoire au clic sur le bouton
    function displayRandomNumber() {
        var randomNumber = generateRandomNumber();
        document.getElementById('globalNumberShow').innerHTML = 'Nombre aléatoire : ' + randomNumber;
    }

    // Attacher la fonction displayRandomNumber au clic sur le bouton
    var globalButton = document.getElementById('globalButton');
    if (globalButton) {
        globalButton.addEventListener('click', displayRandomNumber);
    }
});