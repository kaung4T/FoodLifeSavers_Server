



let search_pop = document.querySelector("#search_pop");
let search_area = document.querySelector(".search-area");

let close_btn = document.querySelector(".close-btn");

let body_html = document.body;

search_pop.addEventListener("click", pop_up);
close_btn.addEventListener("click", pop_off);

function pop_up () {
    search_area.style.visibility = "visible";
    search_area.style.opacity = 1;

    body_html.style.overflow = "hidden";
}

function pop_off () {
    search_area.style.visibility = "hidden";
    search_area.style.opacity = 0;

    body_html.style.overflow = "auto";
}

