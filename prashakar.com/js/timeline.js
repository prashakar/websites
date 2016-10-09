var events = [{name:"Temp", date: "2016-04-26", img: "./img/arduino.png"},
  {name:"Temp_end", 	date:"2016-10-15", img: "./img/truck.jpg"},
];
var w = ($(window).width()/100)*65;
TimeKnots.draw("#timeline", events, {dateFormat: "%B %Y", color: "#1b1d2a", width:w, showLabels: true, labelFormat: "%Y"});
