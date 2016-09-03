userid = -1;
catid = -1;
function next(n){
	if(n > 0 && n < 3){

		var id = "step" + n;
		var layer = gid(id);

		layer.style.transform = "translateX(5%)";
		setTimeout(function(){
			layer.style.transform = "translateX(-100%)";
		}, 200);

		if(n == 1){
			setTimeout(function(){
				var navbar = gid("nav_bar");
				navbar.className = "nav_bar_show";
			}, 500);
		}

		if(n == 2){
			gid("nav_button").onclick=function(){prev(3);};
		}
	}
}


function prev(n){
	if(n == 2){
		var navbar = gid("nav_bar");
		navbar.className = "nav_bar_hide";
	}
	if(n == 3){
		gid("nav_button").onclick=function(){prev(2);};
	}
	if(n > 1 && n < 4){
		setTimeout(function(){
			n = n - 1;
			var id = "step" + n;
			var layer = gid(id);

			layer.style.transform = "translateX(3%)";

			setTimeout(function(){
				layer.style.transform = "translateX(0)";
			}, 400);
		}, 300);
	}
}
function reset(){
	var navbar = gid("nav_bar");
	navbar.className = "nav_bar_hide";

	setTimeout(function(){
		for(var i = 1; i < 4; i++){
			var id = "step" + i;
			var layer = gid(id);

			layer.style.transform = "translateX(3%)";

			setTimeout(function(){
				layer.style.transform = "translateX(0)";
			}, 400);
		}
	}, 300);
	userid = -1;
	catid = -1;
}


function input_user(n){
	userid = n;
	setTimeout(function(){
		next(1);
	},100)
}