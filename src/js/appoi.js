function checkPassword(){
    var p1 = document.getElementById("pw1").value;
    var p2 = document.getElementById("pw2").value;

    if(p1 != p2)
    {
        alert("password missmatch!");
        return false;
    }
    else
    {
        alert("success!");
        return true;
    }
}

function myFunction(){
    if(document.getElementById("cb").checked == true){
        
        document.getElementById("submit").disabled = false;
    }
    else{
        document.getElementById("submit").disabled = true;
    }
        
}
