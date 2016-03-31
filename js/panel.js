var lgpanel = document.getElementById('loginpanel');

function panelAppear() {	
	lgpanel.setAttribute('class', 'loginpanel');
}

lgpanel.addEventListener('mouseover', panelAppear, false);
lgpanel.removeEventListener();

