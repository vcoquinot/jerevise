/*
const colorName = document.querySelector('.card');
const colors = document.querySelectorAll('.color');

//Fill Listeners

colorName.addEventListener('dragstart',dragStart);
colorName.addEventListener('dragend', dragEnd);


//Loop through empties and call drag events
for(const color of colors) {
	color.addEventListener('dragover',dragOver);
	color.addEventListener('dragenter',dragEnter);
	color.addEventListener('dragleave',dragLeave);
	color.addEventListener('drop',dragDrop);
}

//Drag Fuctions
function dragStart(){
	this.className +=' hold';
	setTimeout(()=> this.className = 'invisible', 0);
}

function dragEnd(){
	console.log('end');
	this.className = 'fill';
}

function dragOver(e){
	e.preventDefault();
}

function dragEnter(e){
	e.preventDefault();
	this.className += ' hovered';
}

function dragLeave(){
	this.className = 'empty';
}

function dragDrop(){
	this.className = 'empty';
	this.append(fill);
}
*/


const colorName = document.querySelector('.colorName');
const colors = document.querySelectorAll('.color');

//Fill Listeners
colorName.addEventListener('dragstart', dragStart);
colorName.addEventListener('dragend', dragEnd);

//Loop through empties
for (const color of colors) {
  color.addEventListener('dragover', dragOver);
  color.addEventListener('dragenter', dragEnter);
  color.addEventListener('dragleave', dragLeave);
  color.addEventListener('drop', dragDrop);
}

//Drag functions
function dragStart() {
  this.classList.add('hold');
  setTimeout(() => (this.classList.replace('hold', 'invisible'), 0));
}
function dragEnd() {
  this.classList.remove('invisible');
}

function dragOver(e) {
  e.preventDefault();
}

function dragEnter(e) {
  e.preventDefault();
  this.classList.toggle('hovered');
}

function dragLeave() {
  this.classList.remove('hovered');
}

function dragDrop() {
  this.append(colorName);
}
