function date() {
    var dateTime=new Date;
    var txtDate;
    txtDate=((dateTime.getDate()<10)?"0":"")  +   dateTime.getDate() + "/" + 
            ((dateTime.getMonth()<10)?"0":"") +  (dateTime.getMonth()+1)  + "/" + 
              dateTime.getFullYear();
    return txtDate
    }
function heure() {
    var dateTime=new Date;
    var txtHeure;
    txtHeure = ((dateTime.getHours()<10)?"0":"")   +  dateTime.getHours() + ":" + 
               ((dateTime.getMinutes()<10)?"0":"") +  dateTime.getMinutes() + ":" + 
               ((dateTime.getSeconds()<10)?"0":"") +  dateTime.getSeconds();
    return txtHeure;
    }