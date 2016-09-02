userid = -1;

function next(n){
	if(n > 0 && n < 3){

		var id = "step" + n;
		var layer = gid(id);

		layer.style.transform = "translateX(5%)";
		setTimeout(function(){
			layer.style.transform = "translateX(-100%)";
		}, 200);
	}
}


function prev(n){
	if(n > 1 && n < 4){
		n = n - 1;
		var id = "step" + n;
		var layer = gid(id);

		layer.style.transform = "translateX(3%)";

		setTimeout(function(){
			layer.style.transform = "translateX(0)";
		}, 400);
	}
}

function input_user(n){
	userid = n;
	setTimeout(function(){
		next(1);
	},100)
}