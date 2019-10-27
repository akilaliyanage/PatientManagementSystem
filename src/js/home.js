//email functions
function email1(){
    window.open('mailto:userresponce@meditech.org?subject=USER-RESPONCE');
}
function email2(){
    window.open('mailto:userresponce@meditech.org?subject=USER-RESPONCE');
}
function email3(){
    window.open('mailto:contact@meditech.org?subject=USER-RESPONCE');
}
function home(){
    window.location ="home.php"
}
function makeapp(){
    window.location = 'appoitment.php'
}
function ph(){
    window.location = 'pharmacy.php'
}

function department(name){
    if(name == 1){
        window.location='cardiology.php',"_SELF"
        document.cookie = "name=" + name;
    }
    else if(name == 2){
        window.location='orthopedics.php',"_SELF"
        document.cookie = "name=" + name;
    }
    else if(name == 3){
        window.location='generalsurgery.php',"_SELF"
        document.cookie = "name=" + name;
    }
    else if(name == 4){
        window.location='gastro.php',"_SELF";
        document.cookie = "name=" + name;
    }
    else if(name == 5){
        window.location='dermatology.php'
        document.cookie = "name=" + name;
    }

}