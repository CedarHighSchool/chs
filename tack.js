$("img").error(function(image) {
  $( this ).src( $( this).src.replace("gif", "jpg") );
})