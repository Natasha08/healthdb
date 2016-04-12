var x=754;
var y=569;

console.log(x+y);

// bit of code changes the CSS class of the 'login' button to no longer blur

var lgbutton = document.getElementById('blurs');

lgbutton.setAttribute('class', 'nonblur');

// retrieve the div containing the login panel and login bttn
var lgpanel = document.getElementById('loginpanel');
var lgbttn = document.getElementById('login')

// create function that changes panel's class, login bttn's attribute'hidden'
// and removes event listener after function is called
function panelAppear() {	
	
	lgpanel.setAttribute('class', 'loginpanel');
	lgbttn.removeAttribute('hidden');
	lgpanel.removeEventListener(panelAppear, true);
}
//adds an event listener that calls the function when the user mouses over 
// the above mentioned div
lgpanel.addEventListener('mouseover', panelAppear, false);


