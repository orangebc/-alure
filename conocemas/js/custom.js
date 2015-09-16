var map;

$(document).ready(function(){

	// Maps
	map =GMaps({
  		div: '#map',
  		lat: 19.387583,
  		lng: -99.1753611,
  		zoom: 17,
  		scrollwheel: false
	});
    map.addMarker({
        lat: 19.387583,
        lng: -99.1753611,
        title: 'Alure'
      });

    // Form toggle

    $("#formToggle").click(function(){
    	$(".main").toggle('fade');
    });

    $("#mainClose").click(function(){
    	$('.main').hide('slideUp');
    });

    // Privacy

    $('#privacy').click(function(){
    	$('#privacyToggled').toggle('slideDown');
    });

    // Nivo lightbox

    $('.apartments a').nivoLightbox();
    $('.exceptionals a').nivoLightbox();
    
});