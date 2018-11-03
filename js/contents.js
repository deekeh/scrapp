/*var home = document.getElementById('home-content');
var about = document.getElementById('about-content');
var contact = document.getElementById('contact-content');
*/

function navBtn_click(navId,btnId)
{
	var home = document.getElementById("home-content");
	var about = document.getElementById("about-content");
	var contact = document.getElementById("contact-content");

	var homeBtn = document.getElementById("home-button");
	var aboutBtn = document.getElementById("about-button");
	var contactBtn = document.getElementById("contact-button");

	home.style.display = "none";
	about.style.display = "none";
	contact.style.display = "none";

	homeBtn.style.backgroundColor = "#00b300";
	homeBtn.style.color = "#ffffff";
	aboutBtn.style.backgroundColor = "#00b300";
	aboutBtn.style.color = "#ffffff";
	contactBtn.style.backgroundColor = "#00b300";
	contactBtn.style.color = "#ffffff";

	btnId.style.backgroundColor = "#ffffff";
	btnId.style.color = "#00b300";
	navId.style.display = "block";
	
}