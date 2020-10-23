var counter=1;
var showGrouper = function(){
    document.getElementsByClassName('grouper')[counter].style.display='block';
    counter++;
    if (counter > 5){                        
       document.getElementById('masnotas').style.display='none';
    }
}