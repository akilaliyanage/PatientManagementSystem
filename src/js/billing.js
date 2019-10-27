function card(type){
    if(type=='cash'){
        document.getElementById('l-name').innerHTML = "CASH"
        document.getElementById('des').innerHTML = "YOU DO NOT NEED TO FILL ANY FORMS."
    }
    else if(type == 'master'){
        document.getElementById('l-name').innerHTML = "MASTER CARD"
        document.getElementById('des').innerHTML = "<form action='https://www.mastercard.us/en-us.html' method='POST'>CARD NO : <input type='text' pattern='[0-9]{16}'><br>NAME : <input type='text'><br>EXPIRY DATE : <input type='date'><br>CVV : <input type='password' pattern='[0-9]{3}'><br><input type='submit' value='SUBMIT'></form>"
    }
    else if(type == 'paypal'){
        document.getElementById('l-name').innerHTML = "PAYPAL"
        document.getElementById('des').innerHTML = "<form action='https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fmyaccount%2Ftransfer&state=%2Fhomepage' method='POST'>CARD NO : <input type='text' pattern='[0-9]{16}'><br>NAME : <input type='text'><br>EXPIRY DATE : <input type='date'><br>CVV : <input type='password' pattern='[0-9]{3}'><br><input type='submit' value='SUBMIT'></form>"
    }
    else if(type == 'visa'){
        document.getElementById('l-name').innerHTML = "VISA CARD"
        document.getElementById('des').innerHTML = "<form action='https://www.visa.com.lk/pay-with-visa/find-a-card/credit-cards.html' method='POST'>CARD NO : <input type='text' pattern='[0-9]{16}'><br>NAME : <input type='text'><br>EXPIRY DATE : <input type='date'><br>CVV : <input type='password' pattern='[0-9]{3}'><br><input type='submit' value='SUBMIT'></form>"
    }
}

function content1(id){
    document.cookie = "id="+id;
    window.location='billing.php','_SELF';
    
}