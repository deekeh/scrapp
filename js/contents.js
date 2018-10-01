/*var home = document.getElementById('home-content');
var about = document.getElementById('about-content');
var contact = document.getElementById('contact-content');
*/

function navBtn_click(btnId)
{
	var home = document.getElementById("home-content");
	var about = document.getElementById("about-content");
	var contact = document.getElementById("contact-content");

	home.style.display = "none";
	about.style.display = "none";
	contact.style.display = "none";
	btnId.style.display = "block";
	
}