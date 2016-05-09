/*
	Muhammad Rusdi - 20160503
	Email: muhammadrusdi@icloud.com
	MRCode.Inc
*/

function toggle(id, idList) {
	var e = document.getElementById(id);
	var list = document.getElementById(idList);
	if (e.style.height != '100%') {
		e.style.maxHeight = 'none';
		e.style.height = '100%';
		list.style.display = 'block';
		e.style.transition = 'background 4.5s linear, height 0.15s ease-in';
		
	} else {
		e.style.height = "48px";
		e.style.transition = "background 1.5s linear, height 0.35s ease-in";
	}

	if (e.style.height == '100%') {
		document.body.style.overflow = 'hidden';
	} else {
		document.body.style.overflow = 'scroll';
	}

}

function showVisibility(id) {
	var s = document.getElementById(id);
	if (s.style.width != '220px') {
		s.style.width = "220px";
		s.style.opacity = "1.0";
		// c.style.backgroundImage = "url('../images/search.png')";
	} else {
		s.style.width = "0";
		s.style.opacity = "0";
	}
	
}



