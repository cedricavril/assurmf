function basename(path) {
   return path.replace(/.*\//, '');
}

function dirname(path) {
   return path.match(/.*\//);
}

modalPicture = function(img){
if ($(window).width() > 1000) {
    img.onclick = function(){
    modal.style.display = "block";
    var src = this.src;

    fileName = src.split('images/')[1].split('.')[0] + '-big.' + basename(src).split('.')[1];
    console.log(fileName);
    $(".modal").css('backgroundImage', 'url(images/'+ fileName +')');
    captionText.innerHTML = this.alt;
   }

   // Get the <span> element that closes the modal
   var span = document.getElementById("close");
   // When the user clicks on <span> (x), close the modal



   span.onclick = function() { 
      $('.modal').animate({
       opacity: 0.25,
       width: "-=100",
       height: "-=100"
     }, 500, function() {
         $(".modal").css({
            width: '100%',
            height: '100%',
            opacity: 1
         });
        modal.style.display = "none";
     });
   }
}
}

jQuery(document).ready(function() {
  // Get the modal
  modal = document.getElementById('myModal');

  // Get the image and insert the big version inside the modal - use its "alt" text as a caption
  imgCollection = document.getElementsByClassName('zoomImage');
  modalImg = document.getElementById("img01");
  captionText = document.getElementById("caption");

  for (var i = 0; i < imgCollection.length; i++) {
     modalPicture(imgCollection[i]);
  }
});