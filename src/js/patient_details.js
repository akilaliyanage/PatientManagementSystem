function detail(radio){
    if(radio == '1'){
        document.getElementById('type').innerHTML = "BLOOD PRESURE"
        document.getElementById('field').innerHTML = "10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg<br>10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg<br>10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg";
 
         document.getElementById('image').src = "src/images/presure.png"
 }
 
     else if(radio == '2'){
        document.getElementById('type').innerHTML = "BLOOD SUGAR LEVEL"
        document.getElementById('field').innerHTML = "10/10/2019 : 10mg/dL<br>10/11/2019 : 11 mg/dL<br>10/10/2019 : 10mg/dL<br>10/11/2019 : 11 mg/dL<br>10/10/2019 : 10mg/dL<br>10/11/2019 : 11 mg/dL";
 
         document.getElementById('image').src = "src/images/sugar.png"
     }
 
     else if(radio == '3'){
        document.getElementById('type').innerHTML = "HEART RATE"
        document.getElementById('field').innerHTML = "10/10/2019 : 80bpm<br>10/11/2019 : 100 bpm<br>10/10/2019 : 50bpm<br>10/11/2019 : 70 bpm<br>10/10/2019 : 120bpm<br>10/11/2019 : 99bpm";
 
         document.getElementById('image').src = "src/images/presure.png"
     }
 
     else if(radio == '4'){
        document.getElementById('type').innerHTML = "WEIGHT"
        document.getElementById('field').innerHTML = "10/10/2019 : 100KG<br>10/11/2019 : 80KG<br>10/10/2019 : 65KG<br>10/11/2019 : 50KG<br>10/10/2019 : 70KG<br>10/11/2019 : 50KG";
 
         document.getElementById('image').src = "src/images/presure.png"
     }
 
     else if(radio == '5'){
        document.getElementById('type').innerHTML = "BLOOD PRESURE"
        document.getElementById('field').innerHTML = "10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg<br>10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg<br>10/10/2019 : 10mm/Hg<br>10/11/2019 : 11 mm/Hg";
 
         document.getElementById('image').src = "src/images/presure.png"
     }
 
 }
function edit(){
    window.open('editDetails.php','_self');
}

function content(id){
    document.cookie = "id="+id;
    window.location = "patient_details.php","_SELF";
}