let hourhand = document.getElementById('hourHand');
let minhand = document.getElementById('minHand');
let sechand = document.getElementById('secHand');
// loop
setInterval(() => {
    // time variavles
    let time = new Date();
    let hour = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();
    // maths
    let hr = hour*30 + min/2;
    let mr = min*6;
    let sr = sec*6;

    // hand rptation
    hourhand.style.transform =`rotate(${hr}deg)`;
    minhand.style.transform =`rotate(${mr}deg)`;
    sechand.style.transform =`rotate(${sr}deg)`;

}, 1000);