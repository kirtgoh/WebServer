window.onload = function() {
	// get all img into array
	var img = document.getElementsByTagName('img');
	for (i=0; i < img.length; i++) {
		img[i].onclick = function () {
			_opener(this.alt);
		}
	}
}

function _opener(src) {
	// opener is parent page
	var faceimg = opener.document.getElementById('faceimg');
	faceimg.src = src;
	opener.document.register.face.value=src;
}

