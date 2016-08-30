function next(n){
	if(n > 0 && n < 3){

		var id = "step" + n;
		var layer = gid(id);

		layer.style.transform = "translateX(-100%)";
	}
}


function prev(n){
	if(n > 1 && n < 4){
		n = n - 1;
		var id = "step" + n;
		var layer = gid(id);

		layer.style.transform = "translateX(0)";
	}
}