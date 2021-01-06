let navbarBrand = document.querySelector(".navbar-brand img");
// let searchInput = document.querySelector(".searchInput");
// let comeToTop = document.querySelector(".comeToTop");
let comeToTop = document.createElement("button");
comeToTop.classList.add("comeToTop");
comeToTop.setAttribute("title", "Go top");
comeToTop.innerHTML = `
<svg xmlns="http://www.w3.org/2000/svg" width="32"
height="32"
fill="currentColor"
class="bi bi-arrow-up-short"
viewBox="0 0 16 16"
>
<path
  fill-rule="evenodd"
  d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"
/>
</svg>`;
document.body.appendChild(comeToTop);

//Top scroll button
window.addEventListener("scroll", () => {
  if (window.scrollY > 75) {
    comeToTop.style.display = "block";
    navbarBrand.style.height = "50px";
  } else {
    comeToTop.style.display = "none";
    navbarBrand.style.height = "";
  }
});

comeToTop.addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

//Shadow content if mouseover navbar item
let div = document.createElement("div");
div.style.zIndex = 1;
div.style.height = "100%";
div.style.width = "100%";
div.style.background = "#000";
div.style.position = "absolute";
div.style.top = 0;
div.style.left = 0;
div.style.opacity = 0.6;

let navItem = document.querySelectorAll(".nav-item");

function shadowContent(eventType) {
  if (eventType == "mouseover" || eventType == "click")
    document.querySelector("body").appendChild(div);
  else if (eventType == "mouseout")
    document.querySelector("body").removeChild(div);
}
navItem.forEach((item) => {
  item.addEventListener("mouseover", (e) => {
    shadowContent(e.type);
  });
  item.addEventListener("mouseout", (e) => {
    shadowContent(e.type);
  });
});
