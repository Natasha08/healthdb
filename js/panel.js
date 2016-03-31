var lgpanel = document.getElementById('loginpanel');
var lgbttn = document.getElementById('login')

function panelAppear() {	
	lgpanel.setAttribute('class', 'loginpanel');
	lgbttn.removeAttribute('hidden');
}

lgpanel.addEventListener('mouseover', panelAppear, false);
lgpanel.removeEventListener(panelAppear, true);

