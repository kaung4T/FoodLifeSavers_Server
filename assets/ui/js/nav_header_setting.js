



let default_body = document.body;
let nav_header_setting = document.querySelector("#nav_header_setting");

nav_header_setting.addEventListener("click", setting_on);


function setting_on () {
    default_body.classList.toggle("setting_on_off");
}
