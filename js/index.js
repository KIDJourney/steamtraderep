document.onload = window.onload = function() {
	var donateButton = document.getElementById('donate');
	var donatePage = document.getElementById('donate-page');

	donatePage.style.height = window.innerHeight;

	donateButton.onclick = function() {
		$(donatePage).fadeIn(400);
	}
	donatePage.onclick = function() {
		$(donatePage).fadeOut(400);;
	}
}