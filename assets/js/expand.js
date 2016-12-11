
var hiddens = document.getElementsByClassName('hidden'); // var hiddens is assignes to all classes
var buttons = document.getElementsByTagName("i");
for (var i = 0; i < buttons.length; i++) {
    var v = buttons[i];
    v.addEventListener('click', func);
}
function func() {
    var idx = Number(this.id); //Bygger på att<i> har id av 0,1,2, ossv
    var h = hiddens[idx].style;
    var s = this.style;
  h.display == 'block'? h.display = 'none' : h.display = 'block';

   s.color == 'red' ? s.color = 'black' : s.color = 'red';
}
