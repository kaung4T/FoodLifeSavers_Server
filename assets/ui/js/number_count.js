


let donation_div = document.querySelector(".donation_div");

let today_donation_num = document.querySelector("#today_donation_num");
let month_donation_num = document.querySelector("#month_donation_num");
let total_donation_num = document.querySelector("#total_donation_num");

let main_today_donation_num = today_donation_num.innerHTML;
let main_month_donation_num = month_donation_num.innerHTML;
let main_total_donation_num = total_donation_num.innerHTML;

let activated = false;

window.addEventListener("scroll", () => {

    if (window.pageYOffset > donation_div.offsetTop - donation_div.offsetHeight - 200 && activated === false) {
        $(document).ready(function(){
            let counts = setInterval(updated, 100);
            var upto = 0;
            
            function updated (){
        
                    today_donation_num.innerHTML = ++upto;
        
                    if (upto === Number(main_today_donation_num)) {
                        clearInterval(counts);
                    }
                }
        
            let counts2 = setInterval(updated2, 1);
            var upto2 = 0;
            
            function updated2 (){
                upto2 = upto2 + 2
                month_donation_num.innerHTML = ++upto2;
        
                    if (upto2 === Number(main_month_donation_num)) {
                        clearInterval(counts2);
                    }
                }
        
        
            let counts3 = setInterval(updated3, 1);
            var upto3 = 0;
            
            function updated3 (){
                    upto3 = upto3 + 2
                    total_donation_num.innerHTML = upto3;
        
                    if (upto3 === Number(main_total_donation_num)) {
                        clearInterval(counts3);
                    }
                }
        });

        activated = true;

    }
        else if (pageYOffset < donation_div.offsetTop - donation_div.offsetHeight - 500 || pageYOffset === 0 && activated === true) {
            
            activated = false;

        }
        else if (pageYOffset > donation_div.offsetTop + donation_div.offsetHeight + 200 && activated === true) {
            
            activated = false;

        }

})

