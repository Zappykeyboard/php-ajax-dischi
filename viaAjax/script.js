function init(){
  getData();
}

$(document).ready(init);

function getData(){

  $.ajax({
    url: 'api.php',
    method: 'GET',
    success: function(data){
      printAlbums(data);
    },
    error: function(err){
      console.log(err);
    }
  })
}

function printAlbums(albums){

  //template handlebars
  var templateHTML = $("#item-template").html();
  var template = Handlebars.compile(templateHTML);

  var theContainer = $(".container");

  for(var i = 0; i < albums.length; i++){
    var album = albums[i];

    var context = {
      name: album.name,
      author: album.author,
      image: album.image,
      release: album.release_date
    };

    var html = template(context);

    theContainer.append(html);

  }

}