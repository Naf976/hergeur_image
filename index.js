const choixImage = document.getElementById("choix");
const fichier = document.getElementById("fichier");

choixImage.addEventListener("change", function(){
    console.log("ok");
    fichier.textContent = this.files[0].name;
})