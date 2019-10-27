var coll = document.getElementsByClassName("collapsible");
		var i;

		for (i = 0; i < coll.length; i++) {
		  coll[i].addEventListener("click", function() {
			this.classList.toggle("active");
			var content = this.nextElementSibling;
			if (content.style.maxHeight){
			  content.style.maxHeight = null;
			} else {
			  content.style.maxHeight = content.scrollHeight + "px";
			} 
		  });
		}
		
function content(type){
	if(type == '2d'){
		document.getElementById('description').innerHTML = "Two-Dimensional Echocardiography can provide excellent images of the heart, paracardiac structures, and the great vessels. During a standard echo, the sound waves are directed to the heart from a small hand-held device called a transducer, which sends and receives signals..";
		document.getElementById('appear').src = "../images/d3.jpg";
	}
	if(type == 'ecg'){
		document.getElementById('description').innerHTML = "Electrocardiography is the process of producing an electrocardiogram (ECG or EKG), a recording – a graph of voltage versus time – of the electrical activity of the heart using electrodes placed on the skin Our new 19,200-square-foot facility features the most advanced cardiovascular equipment and technology available on the Eastside.";
		document.getElementById('appear').src = "../images/d6.png";
	}
	if(type == 'ct'){
		document.getElementById('description').innerHTML = "A computerized tomography (CT) scan combines a series of X-ray images taken from different angles around your body and uses computer processing to create cross-sectional images (slices) of the bones, blood vessels and soft tissues inside your body. CT scan images provide more-detailed information than plain X-rays do";
		document.getElementById('appear').src = "../images/d7.png";
	}
}

