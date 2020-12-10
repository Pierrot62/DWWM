function strok() {
    var str1 = prompt("Chaine de caractere")
    var str2 = prompt("element separateur")
    var n = parseInt(prompt("n°"))
    var index = 0
    var indexfin

    for (i = 1; i < n; i++){

        index = str1.indexOf(str2,index+1)

    }
    if((indexfin=str1.indexOf(str2,index+1))==1)
    {
        console.log(str1.substr(index+1,str1.length-1));
    }
    else{
        (index==0)?index==index : index=index+1
        console.log(str1.substr(index,((indexfin)-index)))
    }
}
strok()

    