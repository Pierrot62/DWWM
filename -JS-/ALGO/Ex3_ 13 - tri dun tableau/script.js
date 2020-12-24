var tableau = new Array(7879, 87, 567, 78673, 2, 78, 487, 24, 46, 84, 56, 15598);

for (var i = 0; i < tableau.length; i++) {

    var temp;

    for (var x = 0; x < tableau.length; x++) {

        if (tableau[x] > tableau[i]) {
            temp = tableau[x];
            tableau[x] = tableau[i];
            tableau[i] = temp;

        }
    }

}
for (var i = 0; i < tableau.length; i++) {
    console.log(tableau[i] + "\n")
}