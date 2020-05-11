<!-- about-area start -->
<div class="about-area struktur">
    <div class="container">
        <div id="map" style="width:100%; height: 450px;"></div>
    </div>
</div>

<script>
    var mymap = L.map('map').setView([0.435672, 101.434622], 14);
    L.tileLayer('https://mt1.google.com/vt/lyrs=s&x={x}&y={y}&z={z}').addTo(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
    // 0.424466, 101.435681 pusat 0.435672, 101.434622
    // 0.447179, 101.453663 kas
    var marker = L.marker([0.424466, 101.435681]).addTo(mymap).bindPopup("Kantor Pusat");
    var marker = L.marker([0.447179, 101.453663]).addTo(mymap).bindPopup("Kantor KAS");

    // mymap.on('click', onMapClick);
</script>