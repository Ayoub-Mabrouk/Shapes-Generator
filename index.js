function setup() {
  canvas = createCanvas(1250, 460);
  canvas.parent("myCanvas");
  background("white");
  canvas.elt.style.border = '5px solid red';
}

var url = window.location.search;
var url_values = new URLSearchParams(url);
var shape_name = url_values.get("name");
var r = url_values.get("r");
var h = url_values.get("h");
var w = url_values.get("w");
var xp = url_values.get("x");
var yp = url_values.get("y");

if (shape_name == "circle") {
  function draw() {
    stroke("black");
    fill("red");
    strokeWeight(2);
    circle(xp, yp, r);
  }
}
if (shape_name == "square") {
  function draw() {
    stroke("black");
    fill("red");
    strokeWeight(2);
    rect(xp, yp, w, w);
  }
}
if (shape_name == "rect") {
  function draw() {
    stroke("black");
    fill("red");
    strokeWeight(2);
    rect(xp, yp, w, h);
  }
}
