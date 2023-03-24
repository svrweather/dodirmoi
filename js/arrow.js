var arrow = document.getElementById("btn");
var firstDiagram = document.getElementById("diagram1");
var secondDiagram = document.getElementById("diagram2");

function btnclick() {
    firstDiagram.style.display = 'none';
    secondDiagram.style.display = 'block';
    return true;
};

arrow.onclick = btnclick();