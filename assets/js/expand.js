var hiddens = $('.hidden');
$('i').click(function(){
var idx =$(event.target).attr('id');
       var h = hiddens[idx].style;
  var s = this.style;
  h.display == 'block'? h.display = 'none' : h.display = 'block';
  s.color == 'red' ? s.color = 'black' : s.color = 'red';
});
