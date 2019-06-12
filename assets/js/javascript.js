// progressbar.js@1.0.0 version is used
// Docs: http://progressbarjs.readthedocs.org/en/1.0.0/

var bar = new ProgressBar.Line('#container_bar', {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1400,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  svgStyle: {width: '100%', height: '100%'}
});

bar.animate(1.0);  // Number from 0.0 to 1.0var line = new ProgressBar.Line('#container');

function timedProg() {
  if (i <= 300) {
    if (i > 40) {
            document.getElementById("container_bar").innerHTML=parseInt(i/3)+"%";
            }
    document.getElementById("b").style.width=i+"px";
    var j=0;       
    while (j<=100)
         j++; 
    setTimeout("timedProg();", 20);
    i++;   
    }
  }