function page(type){
	if(type == 'dash'){
		document.getElementById('image').src="sRc/imagenew/calendar.png"
	}
	
	else if(type == 'add'){
		document.getElementById('image').src="sRc/imagenew/ser.jpg"
	}
	
	else if(type == 'data'){
		document.getElementById('image').src="sRc/imagenew/datagrid.png"
	}
	
	else if(type == 'update'){
		document.getElementById('image').src="sRc/imagenew/service.jpg"
	}
	else if(type == 'remove'){
		document.getElementById('image').src="sRc/imagenew/removes.jpg"
	}
}
