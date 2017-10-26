var workshop = document.getElementById('lecturer');
var research = document.getElementById('student');
var program = document.getElementById('program');
var subject = document.getElementById('subject');

workshop.addEventListener('click', onAssignClick);
research.addEventListener('click', onAssignClick);
program.addEventListener('click', onAssignClick);
subject.addEventListener('click', onAssignClick);


function onAssignClick(){
    var allButton = document.querySelectorAll('button');

//hide button
    for (var i = 0; i < allButton.length ; i++){
        allButton[i].className = "hide";
    }

    var buttonId = this.attributes["id"].value;
//  console.log(buttonId);
    buttonId = buttonId + '-div';
//console.log(buttonId);
    var pic = document.getElementById(buttonId);
    console.log(pic);
    if (pic.className === "hide"){
        pic.className = "list-group";

    }
    else{
        pic.className = "hide";
    }
}
