/*****deklaracja zmiennych*****/
const marks = document.querySelector(".marks");
const marks2 = document.querySelector(".marks2");
const card = document.querySelectorAll(".card");
const book = document.querySelector(".booktext");
const bookP = document.querySelector(".bookPhoto");
var table = [book, bookP, marks, marks2];
const boxes = document.querySelectorAll(".box");
for (let a = 0; a < card.length; a++) {
  table.push(card[a]);
}
for (let i = 0; i < boxes.length; i++) {
  table.push(boxes[i]);
}
table = table.filter((value, index, arr) => {
  return value != null;
});
/*****dodanie listenera*****/
if (table.length > 0) {
  window.addEventListener("scroll", show);
  show();
}
