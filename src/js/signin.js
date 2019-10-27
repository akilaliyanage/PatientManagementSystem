function myFunction(){
    if(document.getElementById("cb").checked == true){
        
        document.getElementById("submit").disabled = false;
    }
    else{
        document.getElementById("submit").disabled = true;
    }
        
}