function total(){
    var type = document.getElementById("items").value;
    var qty = document.getElementById("qty").value;
    var qty1 = parseFloat(qty);
    if(type == 'Tissues'){
        var total = qty1 * 3.0;
        document.getElementById('price').innerHTML = total;
    }
    else if(type == 'Thermometers'){
        var total = qty1 * 3.0;
        document.getElementById('price').innerHTML = total;
    }
    else if(type == 'Hand sanitizer'){
        var total = qty1 * 3.0;
        document.getElementById('price').innerHTML = total;
    }
    else if(type == 'Injections'){
        var total = qty1 * 3.0;
        document.getElementById('price').innerHTML = total;
    }
    else if(type == 'Amoxil Syrup'){
        var total = qty1 * 3.0;
        document.getElementById('price').innerHTML = total;
    }
}
