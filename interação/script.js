//Função da anamição das fotos//

let slides =  document.querySelectorAll('.slide-container');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');    
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');    
}

setInterval(next, 4000);

//Função do google maps//

function inicializar() {
  var coordenadas1 = {lat: -22.854667543645387, lng: -42.332491402622004};
  var coordenadas2 = {lat: -22.85415344222655, lng: -43.47835648727772};
   

  var mapa = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 9.3,
    center: coordenadas1 
  });

  var marker = new google.maps.Marker({
    position: coordenadas1,
    map: mapa,
    title: 'RCS SUBAQUÁTICA - MATRIZ'
  });
  var marker = new google.maps.Marker({
    position: coordenadas2,
    map: mapa,
    title: 'RCS SUBAQUÁTICA - FILIAL'
  });
}

//Função rolagem com menu//

const header = document.querySelector("header");
const logoImg = documentquerySelector("#cablogo");

window.addEventListener("scroll", diminuirHeader);

function diminuirHeader(){
  if(window.pageYOffset > 100 && header.classList.contains("max")){
    header.classList.remove("max");
    header.classList.add("min");
  } else if (window.pageYOffset == 0 && header.classList.contains("min")){
    header.classList.add("max");
    header.classList.remove("min");
  }
}