/* make all the variables global
the id's used in digital clock
hour 
minutes
seconds

*/


var hours = document.getElementById('hour');
var minutes = document.getElementById('minute');
var seconds = document.getElementById('second');


// to update the Time in each seconds setInterval() is used.

// arrow function syntax:  () => {//code}

setInterval(() => {

    // let time = new Date();
    let time = new Date();
        // console.log(
        //     // time.toLocaleString('en-US', { hour: 'numeric', hour12: true })
        //   ); 
    let hr = time.getHours();
    let min = time.getMinutes();
    let sec = time.getSeconds();

    hours.innerText = hr;
    minutes.innerText = min;
    seconds.innerText = sec;
}, 1000);   // here 1000 value is in ms which is equivalent to 1s i.e 1000ms==1Sec


