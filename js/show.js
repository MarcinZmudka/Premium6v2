const marks = document.querySelector('.marks');
const marks2 = document.querySelector('.marks2');
const card = document.querySelectorAll('.card');
const book = document.querySelector(".booktext");
const bookP = document.querySelector('.bookPhoto');
var table = [book, bookP, marks, marks2];
for(let a=0; a < card.length; a++){
  table.push(card[a]);
}
window.addEventListener('scroll', show);
show();
function show(){
  table = table.filter((value, index, arr) =>{
    //return value.getBoundingClientRect().top < 0.8*window.innerHeight ? value.className += " moveUp " : value;
    if(value.getBoundingClientRect().top < 0.8*window.innerHeight){ //zagadka z 
      value.classList.add("moveUp");
    }
    else{
      return value;
    }
  });
  if(table.length == 0){
    window.removeEventListener('scroll', show, false);
  }
}
