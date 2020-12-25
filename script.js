let navbar = document.querySelector('.navbar');
let searchInput = document.querySelector('.searchInput');

window.addEventListener('scroll', ()=>{
     console.log(window.scrollY)
    if(window.scrollY > 75) {
        document.querySelector('.navbar').classList.add('red');
        navbar.style.background = '';
    }
    else{
        document.querySelector('.navbar').classList.remove('red');
    }
    
});
// window.addEventListener('click', (ew)=>{
//     let target = ew.target;
//     console.log(target);
//     searchInput.addEventListener('click', (es)=>{
//         console.log(es.target);
//         if(target == es.target) searchInput.parentElement.style.flexGrow = 1;
//         else searchInput.parentElement.style.minWidth = '30%';
//     });

// });
