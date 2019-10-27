function readMoreFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}

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
		document.getElementById('description').innerHTML = "When you're facing heart or vascular issues, the last thing on your mind should be how to navigate your care. Overlake's David and Shelley Hovind Heart & Vascular Center brings cardiac and vascular services together in one location. Our new 19,200-square-foot facility features the most advanced cardiovascular equipment and technology available on the Eastside.";
		document.getElementById('appear').src ="../images/d3.jpg";
	}
}