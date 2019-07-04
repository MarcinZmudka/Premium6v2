/*********deklaracja i wypełnianie*********/
let salon = []; // salon
let r = []; // pozostałe zdjęcia
let s1 = []; //sypialnia 1
let s2 = []; // sypialnia 2
for (let i = 0; i < 10; i++) {
    salon.push(`sa1${i + 1}.jpg`);
}
for (let i = 0; i < 3; i++) {
    r.push(`r${i + 1}.jpg`);
}
for (let i = 0; i < 5; i++) {
    s1.push(`s1${i + 1}.jpg`);
}
for (let i = 0; i < 6; i++) {
    s2.push(`s2${i + 1}.jpg`);
}
let wrapper = document.querySelectorAll('.wrapper');
/*********mieszanie zdjęc*********/
function mix(array){ // przenieść do innego pliku
    array.filter((value, index, arr) => { 
        let number = Math.floor(Math.random() * array.length);
        let choosen = array[index];
        array[index] = array[number];
        array[number] = choosen;
    });
}
mix(salon);
mix(s1);
mix(s2);
mix(r);
/*********wypełnianie zdjęciami*********/
let box = wrapper[0].querySelectorAll('.box');
for(let i=0; i<box.length;i++){
    box[i].innerHTML = `<img src=photos/${salon[i]}>`;
}
box = wrapper[1].querySelectorAll('.box');
for(let i=0; i<box.length;i++){
    let check = 0;
    i+1 > s2.length ? box[i].innerHTML = `<img src=photos/${s1[i-s2.length]}>` : box[i].innerHTML = `<img src=photos/${s2[i]}>`; 
}
wrapper = document.querySelector('.wrapper1');
box = wrapper.querySelectorAll('.box');
box[0].innerHTML = `<img src=photos/${s1[s1.length-1]}>`;
box[1].innerHTML = `<img src=photos/${r[0]}>`;
box[2].innerHTML = `<img src=photos/${r[1]}>`;
box[3].innerHTML = `<img src=photos/${r[2]}>`;