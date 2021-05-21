 document.querySelector('.offer__like').onclick = function() {
   document.querySelector('.offer__item').classList.toggle('offer__item_like');
   document.querySelector('.offer__like').classList.toggle('offer__like_more');
 } 

// Menu go
 function fc(){
  let nav = document.querySelector('.head__form');
    if (window.pageYOffset > 10) {
       nav.classList.add('show');
    } else {
      nav.classList.remove('show');
    }
}

window.onscroll=fc;
fc();
 
