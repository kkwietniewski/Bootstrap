const producerRadios = document.querySelectorAll(".producer>.form-check");
const modelChecks = document.querySelectorAll(".model>.form-check");

const btnShowMore = document.createElement('button');
btnShowMore.setAttribute("type","button");
btnShowMore.classList.add("btn","btn-secondary");
btnShowMore.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>`;

producerRadios.forEach((radio,index) => {
  if(index > 3) radio.classList.add("d-none");
  if(index == producerRadios.length-1) document.querySelector(".producer").appendChild(btnShowMore)
});
const btnShowMore2 = btnShowMore.cloneNode(true);
modelChecks.forEach((check,index) => {
  if(index > 3) check.classList.add("d-none");
  if(index == modelChecks.length-1) document.querySelector(".model").appendChild(btnShowMore2)
});

btnShowMore.addEventListener("click", ()=>{
  producerRadios.forEach((radio,index) => {
    if(radio.classList.contains("d-none")) {
      radio.classList.remove("d-none");
      btnShowMore.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>`;
    }else if(index > 3){
      radio.classList.add("d-none");
      btnShowMore.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>`;
    }
  });
});

btnShowMore2.addEventListener("click", ()=>{
  modelChecks.forEach((check,index) => {
    if(check.classList.contains("d-none")) {
      check.classList.remove("d-none");
      btnShowMore2.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/>
    </svg>`;
    }else if(index > 3){
      check.classList.add("d-none");
      btnShowMore2.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
</svg>`;
    }
  });
});