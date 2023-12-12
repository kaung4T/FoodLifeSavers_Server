


const today = new Date();
let today_day = today.getDate();
// Please write your specific end date in endDate
let endDate = "17"; 
// end
let specialDate = `December ${endDate} 2023 00:00:00`;

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
  const currentTime = new Date; // Move to here.
  let specialTime = birthdayTime.getTime() - currentTime.getTime(); // And this.
  const specialHour = Math.floor((specialTime % day) / hour);
  const specialMinute = Math.floor((specialTime % hour) / minute);
  const specialSecond = Math.floor((specialTime % minute) / second);

  days.innerHTML = Number(endDate) - today_day;
  hours.innerText = specialHour;
  minutes.innerText = specialMinute;
  seconds.innerText = specialSecond;

  console.log(specialTime);
};

setInterval(setTime, 1000);

