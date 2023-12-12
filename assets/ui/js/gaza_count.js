


const today = new Date();
let today_day = today.getDate();
// Please write your specific end date in endDate
let endDate = "10"; 
// end
let specialDate = `February ${endDate} 2024 00:00:00`;

const days = document.querySelector("#days");
const hours = document.querySelector("#hours");
const minutes = document.querySelector("#minutes");
const seconds = document.querySelector("#seconds");

const second = 1000;
const minute = second * 60;
const hour = minute * 60;
const day = hour * 24;

const birthdayTime = new Date(specialDate);

const setTime = () => {
  const currentTime = new Date;
  let specialTime = birthdayTime.getTime() - currentTime.getTime();
  const specialHour = Math.floor((specialTime % day) / hour);
  const specialMinute = Math.floor((specialTime % hour) / minute);
  const specialSecond = Math.floor((specialTime % minute) / second);

    
    const countDownDate = new Date(specialDate).getTime();
    const now = new Date().getTime();
    const timeleft = countDownDate - now;
    const letf_days = Math.floor(timeleft / (1000 * 60 * 60 * 24));

    days.innerText = letf_days;



  hours.innerText = specialHour;
  minutes.innerText = specialMinute;
  seconds.innerText = specialSecond;

  console.log(specialTime);
};

setInterval(setTime, 1000);

