var settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://wft-geo-db.p.rapidapi.com/v1/geo/cities/60577",
	"method": "GET",
	"headers": {
		"x-rapidapi-host": "wft-geo-db.p.rapidapi.com",
		"x-rapidapi-key": "f87d0a7432msh8eeb7a47bd9938cp1533f6jsnc0b92c8a3715"
	}
}

$.ajax(settings).done(function (response) {
	console.log(response);
  
  var country = response.data.country;
  var population = response.data.population;
  var region = response.data.region;
  var longitude = response.data.longitude;
  var latitude = response.data.latitude;
  
  $(".region").append(region);
  $(".latitude").append(latitude);
  $(".longitude").append(longitude);
  $(".population").append(population);
  $(".country").append(country);
  
});
