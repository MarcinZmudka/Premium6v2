/*****funckja dodająca klasę moveUp*****/
function show() {
    table = table.filter((value, index, arr) => {
      if (value.getBoundingClientRect().top < 0.8 * window.innerHeight) { //zagadka z 
        value.classList.add("moveUp");
      }
      else {
        return value;
      }
    });
    if (table.length == 0) {
      window.removeEventListener('scroll', show, false);
    }
  }