const marks = document.querySelector('.marks');
const marks2 = document.querySelector('.marks2');
const card = document.querySelectorAll('.card');
const book = document.querySelector(".booktext");
const bookP = document.querySelector('.bookPhoto');
var table = [book, bookP,marks, marks2];
for(let i=0; i < card.length; i++){
  table.push(card[i]);
}
window.addEventListener('scroll', show);

function show(){
  console.log("here i am");
  for(let i =0; i < table.length; i++){
    if(table[i].getBoundingClientRect().top < window.innerHeight-300){
      table[i].className += " moveUp ";
      table = table.filter((value, index, arr) => {
        return index != i;
      });
    }
  }
  if(table.length == 0){
    window.removeEventListener('scroll', show, false);
  }
}
