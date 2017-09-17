(function() {
	
	var preload = document.getElementById("preload");
	var loading = 0;
	var id = setInterval(frame, 64);
	
	function frame() {
		if(loading == 40) {
			clearInterval(id);
			window.open("main.html", "_self");
		} else {
			loading = loading +1;
			if(loading == 10) {
				preload.style.animation = "fadeout 2s ease";
			}
		}
	}
	
})();