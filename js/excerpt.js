window.onload = function myFunction() {

  let targetText = document.querySelector("#excerpt");
  var test      = document.getElementById("excerpt").value.length;
  var node      = document.createElement("p");
  var place     = document.getElementById("postexcerpt").getElementsByClassName("inside");
  
  place[0].appendChild(node).setAttribute("id", "spot");
  document.getElementById("spot").innerHTML = test;
  // Listen Words
  targetText.onkeyup = function (x) {
    var test      = targetText.value.length;
    
    document.getElementById("spot").innerHTML = test;

  }
}

