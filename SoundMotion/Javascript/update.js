

//Provides functionality for the popup box open/close depending on what element is clicked on



var id = document.getElementById('1');	//Declaring the variable 'id' as the id of the html elements.

// When the user clicks anywhere outside of the content box, close it
window.onclick = function(background) {			//when the user clicks on the background div, create a function with the parameter of background.	window.onclick is looking for a click on the element window which is the 'background' transparent layer.
 
 if (background.target == id) {			//If the background being clicked is the same as the target is the actual target that received the event. currentTarget is the object listening for the event.
  
	id.style.display = "none";	//sets the display to none to hide the background and content box.

  }
};
