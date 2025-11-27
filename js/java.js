const esconder = document.querySelectorAll(".Esconder");
const cards   = document.querySelectorAll(".Cards");

const slogan = document.querySelector(".slogan");
const sloganDois = document.querySelector(".sloganDois");
const logoa = document.querySelector(".logo");
const burg = document.querySelector(".burg");
const menu = document.querySelector(".menu");
const navDropdown = document.querySelector(".menu-dropdown");

let valQuery = 3;

if (window.matchMedia('(max-width: 900px)').matches) {
  valQuery = 2;
}

if (window.matchMedia('(max-width: 610px)').matches) {
  valQuery = 1;
}

/* basicamente verifica tamanho da tela para esconder cards
 quando inicia a pagina */

for (let i = valQuery; i < cards.length; i++) {
        
     
  if(!cards[i].classList.contains("hide")){
    cards[i].classList.add("hide")
  }
    
  }

esconder.forEach(btn => {
  btn.addEventListener("click", () => {

    esconder.forEach(b => b.classList.toggle("hide"));
    
    for (let i = valQuery; i < cards.length; i++) {
        
      cards[i].classList.toggle("hide")
    }
  });
});

/* Botao de esconder e mostrar serviços */

window.addEventListener('scroll', function() {

  setTimeout(function() {   
    if (window.scrollY > 0) {

      slogan.classList.add("slogan-hide");
      sloganDois.classList.remove("slogan-hide");
      logoa.classList.add("logo-peq");
      logoa.classList.remove("logo-med");
      navDropdown.classList.add("navTop-med");
      navDropdown.classList.remove("navTop-peq");
      } else{
        slogan.classList.remove("slogan-hide");
        sloganDois.classList.add("slogan-hide");
        logoa.classList.remove("logo-peq");
        logoa.classList.add("logo-med");
        navDropdown.classList.add("navTop-peq")
        navDropdown.classList.remove("navTop-med");
      }
    }, 1000);
  }
);

  /* Funcionamento do scroll */

burg.addEventListener("click", () => {

  navDropdown.classList.toggle("dropdown")
  navDropdown.classList.toggle("dropdown-hide")
  }
);