window.onload = function() {myFunction()};

function myFunction() {
  let counter = document.getElementById("excerpt");
  let textCounter = counter.length;
  let text = document.createElement("p");
  let node = document.createTextNode("Word Counter:");
  
  let destination = document.getElementById("postexcerpt").getElementsByClassName("inside");
  
  destination.innerHTML = text.appendChild(node);
}