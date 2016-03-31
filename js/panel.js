var lgpanel = document.getElementById('loginpanel');
var lgbttn = document.getElementById('login')

function panelAppear() {	
	lgpanel.setAttribute('class', 'loginpanel');
	lgbttn.removeAttribute('hidden');
	lgpanel.removeEventListener(panelAppear, true);
}

lgpanel.addEventListener('mouseover', panelAppear, false);


