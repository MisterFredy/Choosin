var count = 1;
var countEl = document.getElementById("count");
function tombol_plus(){
    count++;
    countEl.value = count;
}
function tombol_minus(){
    if (count > 1) {
    count--;
    countEl.value = count;
    }  
}