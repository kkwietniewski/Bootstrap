let navbarBrand = document.querySelector(".navbar-brand img");
// let searchInput = document.querySelector(".searchInput");
let comeToTop = document.querySelector(".comeToTop");

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
