// navbar 
const navUser = document.querySelector(".user-nav-items");
const dropIcon = document.querySelector(".dropdownn");
dropIcon.addEventListener("mouseenter", ()=>{
    navUser.classList.remove('hide');
});

dropIcon.addEventListener("mouseleave", ()=>{
    navUser.classList.add('hide');
});


// active navbar
const navLinks = document.querySelectorAll("#navbarSupport ul li a");
const currentLink = window.location.pathname.split("/").pop();

navLinks.forEach(links => {
  const link = links.href.split("/").pop();
  if(currentLink == link){
    links.classList.add('active');
  } else if (currentLink == "registerdoctors" || currentLink == "jadwal"){
    navLinks[2].classList.add('active');
  } else {
    links.classList.remove('active');
  }
});

// accordion menu di jadwal
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("activee");
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      } 
    });
  }


 // accessing radion button value 
const displaySelectedContent = () => {
  const selectedTanggal = document.querySelector('input[name="tanggal"]:checked');
  const selectedJam = document.querySelector('input[name="jam"]:checked');
  const textConf = document.querySelector(".confirm-text");
  const btn = document.querySelector('.submit-btn');
  // printing modal
  const printTanggal = document.querySelector('.konfirmasi-tanggal');
  const printJam = document.querySelector('.konfirmasi-jam');
  
  if(selectedTanggal && selectedJam) {
    textConf.innerHTML = `${selectedTanggal.value}, ${selectedJam.value} WIB`;
    //printing modal
    printTanggal.innerHTML = `${selectedTanggal.value}`;
    printJam.innerHTML = `${selectedJam.value} WIB`;

    btn.classList.remove('disabled');
  }
  
};
const radioJam = document.querySelectorAll('input[name="jam"]');
const radioTanggal = document.querySelectorAll('input[name="tanggal"]');
radioJam.forEach(radio => radio.addEventListener("click", displaySelectedContent));
radioTanggal.forEach(radio => radio.addEventListener("click", displaySelectedContent));


// munculin modal
const modal1 = document.querySelector('#modal-1');
modal1.style.display = "none";

const btn = document.querySelector('.submit-btn');
btn.addEventListener("click", ()=> {
  modal1.style.display = "flex";
});

// close modal
const btnEdit = document.querySelector('#edit');
btnEdit.addEventListener("click", ()=> {
  modal1.style.display = "none";
});

// open modal 2
const next = document.querySelector('#next');
const modal2 = document.querySelector('#modal-2');
next.addEventListener("click", ()=> {
  modal1.style.display = "none";
  modal2.style.display = "flex";
});

// close modal 2
const btnBatal = document.querySelector('#batal');

btnBatal.addEventListener("click", ()=> {
  modal2.style.display = "none";
});

  
