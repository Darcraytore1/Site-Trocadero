function initMap(){
	// liste de markers
	var markers = [
		{
			coords: {lat: 48.862997,lng: 2.287142},
			iconImage: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
			content:' <h1>Trocadéro</h1>'
		},
	];


	// Options de la map
	var options = {
		zoom: 18,
		center: markers[0].coords
	}

	// Nouvelle map
	var map = new google.maps.Map(document.getElementById('map'), options);

	// Ecoute les clicks sur la map
	google.maps.event.addListener(map, 'click', function(event){
		addMarker({coords:event.latLng});
	});



	for(var i = 0;i < markers.length;i++){
		addMarker(markers[i]);
	}


	function addMarker(props){
		var marker = new google.maps.Marker({
			position: props.coords,
			map: map,
			//icon: props.iconImage
		});

		// Regarde si on a une icone perso
		if(props.iconImage){
			// Set icon image
			marker.setIcon(props.iconImage);
		}

		// Regarde si on a du contenu 
		if(props.content){
			var infoWindow = new google.maps.InfoWindow({
				content: props.content
			});

			marker.addListener('click', function(){
				infoWindow.open(map, marker);
			});
		}
	}
}