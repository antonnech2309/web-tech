var btn = document.getElementsByTagName('button');
let cont = document.querySelectorAll('#cont-block');
let main = document.querySelectorAll('#main');
let video = document.querySelectorAll('#video');


btn[0].onclick = function() {
  main[0].className = 'day';
  btn[2].className = 'night';
}

btn[1].onclick = function() {
  main[0].className = 'night';
  btn[2].className = 'day';
}
btn[2].onclick = function() {
  video[0].classList.toggle('show');
  video[0].classList.toggle('hide');
}
btn[3].onclick = function() {
  cont[0].classList.toggle('show');
  cont[0].classList.toggle('hide');
}