

function myFunction() {
    var x = document.getElementById("Dismiss01");	//Obtaining the id of the button
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

// if (background.target == id) {			//If the background being clicked is the same as the target is the actual target that received the event. currentTarget is the object listening for the event.
  
//	id.style.display = "none";	//sets the display to none to hide the background and content box.

//  }