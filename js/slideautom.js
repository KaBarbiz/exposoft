let cont = 1;
document.getElementById("radio1").checked = true;

setInterval( function(){
    nextimage();
}, 2000)

function nextimage(){
    cont++
    if(cont>5){
        cont = 1;
    }

document.getElementById("radio"+ cont).checked = true;

}