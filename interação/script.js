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

setInterval(next, 5500);

//Função do google maps//

function inicializar() {
  var coordenadas1 = {lat: -22.85480267072814, lng: -42.332496726981226}; 
  var coordenadas2 = {lat: -23.01680012916889, lng: -43.478354128978346};
  var coordenadas3 = {lat: -5.106319790550263, lng: -36.31662733373387};
  var coordenadas4 = {lat: -13.143911866121746, lng: -39.77879252767945};

  
   

  var mapa = new google.maps.Map(document.getElementById('mapa'), {
    zoom: 4.5,
    center: coordenadas4 
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
  var marker = new google.maps.Marker({
    position: coordenadas3,
    map: mapa,
    title: 'RCS SUBAQUÁTICA - FILIAL'
  });
}


const header = document.querySelector("nav"); 
const logoImg = documentquerySelector("#cablogo");

window.addEventListener("scroll", diminuirHeader);

function diminuirHeader(){
  if(window.pageYOffset >  header.classList.contains("max")){
    header.classList.remove("max");
    header.classList.add("min");
  } else if (window.pageYOffset == header.classList.contains("min")){
    header.classList.add("max");
    header.classList.remove("min");
  }
}