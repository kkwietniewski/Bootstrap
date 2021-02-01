let form = document.querySelector('.addOpinion>form');
let ratioStars = document.querySelectorAll('.rating>input');
ratioStars.forEach(ratio=>{
  ratio.addEventListener('click', ()=>{
    form.style.display = "block";
  });
});