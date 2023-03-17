

var scrollLink = document.querySelector('.scroll-link');
var scrollToTop = document.querySelector('.scroll-to-top');

window.addEventListener('scroll', function() {
  if (window.scrollY > 100) {
    scrollToTop.style.bottom = '20px';
  } else {
    scrollToTop.style.bottom = '-60px';
  }
});

scrollLink.addEventListener('click', function(e) {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', function() {
  var scrollPosition = window.scrollY;
  var documentHeight = document.body.offsetHeight;
  var windowHeight = window.innerHeight;
  var progress = Math.floor((scrollPosition / (documentHeight - windowHeight)) * 100);
  document.getElementById('progress-bar').style.width = progress + '%';
});

/* Modale Search */

// selezionare la modale e il pulsante per aprirla
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

// selezionare lo span per chiudere la modale
var span = document.getElementsByClassName("close")[0];

// quando l'utente clicca sul pulsante, aprire la modale
btn.onclick = function() {
  modal.style.display = "block";
}

// quando l'utente clicca sulla X, chiudere la modale
span.onclick = function() {
  modal.style.display = "none";
}

// quando l'utente clicca fuori dalla modale, chiudere la modale
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}


// animazione immagine show
window.addEventListener('load', function(){

  let imgCounter= 0;
  let titleCounter= 0;

  let imgAnimation = document.querySelector('#imgAnimation');
  let observerImg = new IntersectionObserver((entries) => {
    entries.forEach(entry =>{
     if(entry.isIntersecting && imgCounter==0) {
        imgAnimation.classList.add('fadeRight');
        imgCounter=1;
     }else{
          imgAnimation.classList.remove('fadeRight');
        }
    });
  });

  observerImg.observe(imgAnimation);

  let titleAnimation = document.querySelector('#titleAnimation');
  let observertitle = new IntersectionObserver((entries) => {
      entries.forEach(entry =>{
      if(entry.isIntersecting && titleCounter==0) {
          titleAnimation.classList.add('fadeLeft');
          titleCounter=1;
      }else{
            titleAnimation.classList.remove('fadeLeft');
        }
    });
  });

  observertitle.observe(titleAnimation);
})



