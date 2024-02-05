



// Object.defineProperty(Object.prototype, 'idName', {
// 	set : function(value) {
// 		if(typeof this.tagName !== 'undefined') {
// 			this.id = value;
// 		}
// 	}
// });

let profile_current = location.href;

let responsive_header_nav = document.querySelector(".dark-version");
let profile_a = responsive_header_nav.querySelectorAll(".nav-link");


for (var num=0;num<profile_a.length;num++) {

    if (profile_a[num].href == profile_current) {
        profile_a[num].className = 'nav-link user-dash-hover';
    }
    
}