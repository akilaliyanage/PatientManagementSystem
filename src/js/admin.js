function admin(name){
	document.cookie="name="+name;
	window.location = 'admin.php','_SELF';

}