function getRndInteger(min, max) {
	return Math.floor(Math.random() * (max - min) ) + min;
}
function shuffle(array) {
	var currentIndex = array.length, temporaryValue, randomIndex;

  // While there remain elements to shuffle...
  while (0 !== currentIndex) {

    // Pick a remaining element...
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    // And swap it with the current element.
    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
}

return array;
}
var index=0;

$(document).ready(function(){

	imagesList=shuffle(imagesList);

	console.log
	var lunghezza=imagesList.length;
	
	$(".slider").attr("src", imagesList[0]);


	$(".changeImgBtn").click(function(){
		window.scrollTo(0,$("#menu-nav").position().top);

		if (index<lunghezza) {
			index++;
		} else {
			index=0;
		}	
		$(".slider").attr("src", imagesList[index]);




	});



}); 