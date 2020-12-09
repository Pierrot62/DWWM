situation = prompt("Etes vous marié ? (O/N) : ");
enfant = parseInt(prompt("Nombre d'enfant : "));
salaire = parseInt(prompt("Salaire : "));


if (situation.toUpperCase() == "O") {
    participation = 25;
} else {
    participation = 20
}

if (enfant != 0) {
    participation = participation + (enfant * 10);
}
if (participation > 50) {
    participation = 50;
}
if (salaire < 1200) {
    participation = participation + (participation * 0.1);
}

alert(participation+"%");