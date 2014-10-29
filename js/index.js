document.onload = window.onload = function() {
	var donateButton = document.getElementById('donate');
	var donatePage = document.getElementById('donate-page');

	donatePage.style.height = window.innerHeight;

	donateButton.onclick = function() {
		donatePage.style.display = 'block';
	}
	donatePage.onclick = function() {
		donatePage.style.display = 'none';
	}
}