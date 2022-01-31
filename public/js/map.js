mapboxgl.accessToken = 'pk.eyJ1Ijoicm9nZXJzZWsiLCJhIjoiY2t2NnN0Z2Q4NTR2NjJuczc2NzhoN3kxNiJ9.Bdpcp_oxdvT8Et95efRqAw';

const map = new mapboxgl.Map({
  container: 'map',
  style: 'mapbox://styles/mapbox/light-v10',
  center: [19.939070468995492, 50.05289972828936],
  zoom: 10
});


fetch("/places").then(function (response){
   return response.json();
}).then(function (places) {
    places.map(place => {
        place.coordinates = JSON.parse(place.coordinates);
    })

    displayPlaces(places)
})

function displayPlaces(places){
    for (const feature of places) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';

        // make a marker for each feature and add to the map
        new mapboxgl.Marker(el)
            .setLngLat(feature.coordinates.point)
            .setPopup(
                new mapboxgl.Popup({ offset: 25 }) // add popups
                    .setHTML(
                        `<div class="pin-info-h1">
                            <h1>${feature.title}</h1>
                        </div>
                        <div class="pin-info-p">
                            <p> 
                                ${feature.description}
                            </p>
                        </div>`
                    )
            )
            .addTo(map);
    }
}

map.on('click', (e) => {
    const data = (e.lngLat.wrap());
    // console.log(data);
    document.getElementById("coordinates-input").value = `{\"point\": [${data.lng}, ${data.lat}]}`;

    getAddress(data);
});


function getAddress(data){
    const url =
        "https://api.mapbox.com/geocoding/v5/mapbox.places/" +
        data.lng +
        "," +
        data.lat +
        ".json?access_token=" +
        `pk.eyJ1Ijoicm9nZXJzZWsiLCJhIjoiY2t2NnN0Z2Q4NTR2NjJuczc2NzhoN3kxNiJ9.Bdpcp_oxdvT8Et95efRqAw` +
        "&types=address";
    console.log(url);
    $.get(url, function (data) {
        if (data.features.length > 0) {
            const address = data.features[0].place_name;
            document.getElementById("address-input").value = address;
        } else {
            document.getElementById("address-input").value = "Nie znaleziono adresu";
        }
    });
}
