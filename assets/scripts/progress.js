// fonction barre progression dans un fichier separer pour une meilleur lecture pendan la creation
function avancement() {
    var ava = document.getElementById("avancement");
    var prc = document.getElementById("pourcentage");

}

avancement();

function modif(val) {
    var ava = document.getElementById("avancement");
    if ((ava.value + val) <= ava.max && (ava.value + val) > 0) {
        ava.value += val;
    }
    avancement();
}

//Compte à rebours
function compte_a_rebours() {
    var compte_a_rebours = document.getElementById("compte_a_rebours");

    if (state.totalTime - 1 != 0) {
        state.totalTime = state.totalTime - 1;
        compte_a_rebours.innerHTML = 'Compte à rebours terminé dans ' + state.totalTime + ' secondes';
        modif(1);
    } else {
        compte_a_rebours.innerHTML = 'Compte à rebours terminé.';
        alert("Vous avez perdu !");
        setTimeout(() => {
            location.reload();
        }, 1500);
    }

    var actualisation = setTimeout("compte_a_rebours();", 1000);
}