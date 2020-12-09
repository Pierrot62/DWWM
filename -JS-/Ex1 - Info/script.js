var nom = prompt("Votre nom : ");
var prenom = prompt("Votre prenom : ");
var genre = confirm("Etes vous un homme ?")
if (genre == new Boolean("true")) {
    alert("Bonjour monsieur "+nom+" "+prenom);
}else{
    alert("Bonjour madame "+nom+" "+prenom);
}