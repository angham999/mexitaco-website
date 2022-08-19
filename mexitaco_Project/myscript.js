function writeText(txt) {
    document.getElementById("desc").innerHTML = txt;
}

function clearText() {
    document.getElementById("desc").innerHTML = "Mouse over the circles and see the different descriptions.";
}

function changeColorOrg(obj) {
if (obj.style.color == 'orange') {
obj.style.color = '#4b4978';
} else {
obj.style.color = 'orange';
}
}


function changeColorRed(obj) {
if (obj.style.color == 'red') {
obj.style.color = '#4b4978';
} else {
obj.style.color = 'red';
}
}

function confirmSubmit(){
	return confirm("Are you sure you want to submit?");
}

function confirmReset(){
	return confirm("Are you sure you want to cancel?");
}
function focusFunction() {
  // Focus = Changes the background color of input to white
  document.getElementById("username").style.background = "white";
  document.getElementById("passWord").style.background = "white";
  document.getElementById("email").style.background = "white";

}

function blurFunction() {
  // No focus = Changes the background color of input to papayawhip
  document.getElementById("username").style.background = "papayawhip";
  document.getElementById("passWord").style.background = "papayawhip";
  document.getElementById("email").style.background = "papayawhip";

}
function myFunc(){

  var fname =document.getElementById('fname').value;
  var lname =document.getElementById('lname').value;
  var subject =document.getElementById('subject').value;

  if (fname =='' || lname == '' ||subject == ''){
  alert("Check the empty fields please!");
}

else{
  var result = confirm("Send message?");
    if(result== false)
    {event.preventDefault();}
    else{
         alert("Thanks for communicating us! \n your message has been submitted");
        }

    }
}
