var countDownDate = new Date("Jan 5, 2024 15:37:25").getTime();

var x = setInterval(function() {
  var counter = document.querySelector("#count-down")
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  innerHTML = days + "يوم" + hours + "ساعه "
  + minutes + "دقيقه " + seconds + "ثانيه ";

  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "لقد وصلت متاخرا";
  }
}, 1000);


// اختيار الرابح

const win = document.querySelector("#winner");
const cards = document.querySelector("#cards");

win.addEventListener('click', function(){
    cards.style.display = 'flex';
});