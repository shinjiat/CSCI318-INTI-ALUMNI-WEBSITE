var workshop = document.getElementById('workshop');
var research = document.getElementById('research');
var vmessages = document.getElementById('vmessages');
var vworkshop = document.getElementById('vworkshop');
var vresearch = document.getElementById('vresearch');


workshop.addEventListener('click', onAssignClick);
research.addEventListener('click', onAssignClick);
vmessages.addEventListener('click', onAssignClick);
vworkshop.addEventListener('click', onAssignClick);
vresearch.addEventListener('click', onAssignClick);

function onAssignClick(){
    var allButton = document.querySelectorAll('button');
    console.log('click');

//hide button
    for (var i = 0; i < allButton.length ; i++){
        allButton[i].className = "hide";
    }

    var buttonId = this.attributes["id"].value;
    console.log(buttonId);
    buttonId = buttonId + '-div';
  console.log(buttonId);
    var pic = document.getElementById(buttonId);
    console.log(pic);
    if (pic.className === "hide"){
        pic.className = "list-group";

    }
    else{
        pic.className = "hide";
    }
}
