
<!DOCTYPE html>
<html>
<head>
	
	<title>Sistema de Información Geográfico</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<!--	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />-->

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>

<!---->
	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		/*#map {*/
		/*	width: 600px;*/
		/*	height: 400px;*/
		/*}*/
        #btnlugares {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 10px;
            margin-left: 50px;
            z-index: 400;
        }
        #recorridos {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 10px;
            margin-left: 130px;
            z-index: 400;
        }
        #titulo {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 10px;
            margin-left: 310px;
            z-index: 400;
        }
        #logooruro {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 0px;
            margin-left: 200px;
            z-index: 400;
        }
        #logouto {
            position: absolute;
            top: 0px;
            right: 0px;
            padding: 10px;
            margin-top: 0px;
            margin-right: 50px;
            z-index: 400;
        }
	</style>

	<style>body { padding: 0; margin: 0; } #map { height: 100%; width: 100vw; }</style>
</head>
<body>

<div id='map'></div>
<a href="<?=base_url()?>Welcome" id="btnlugares" class="btn btn-primary">Lugares</a>
<a href="<?=base_url()?>Welcome/recorridos" id="recorridos" class="btn btn-primary">Recorridos</a>
<img src="<?=base_url()?>img/oruro.png" id="logooruro" alt="" width="50">
<img src="<?=base_url()?>img/uto.png" id="logouto" alt="" width="50">
<label for="" style="font-weight: bold;color: #002166" id="titulo">MANCOMUNIDAD ASANAKE-ORURO</label>
<script>
    window.onload=function (){
        $('#map').on('click','.eliminar',function (e){
            // console.log($(this).attr('data-id'));
            let id=$(this).attr('data-id');
            $.ajax({
                url:'<?=base_url()?>Welcome/eliminar/'+id,
                success:function (e){
                    // let dat=JSON.parse(e);
                    // console.log(e);
                    datos();
                }
            });
        });
        var lugares = L.layerGroup();



        // L.marker([-19.1949438, -67.2809816]).bindPopup('This is Littleton, CO.').addTo(lugares),
        //     L.marker([-19.1, -67.2]).bindPopup('This is Denver, CO.').addTo(lugares),
        //     L.marker([39.73, -104.8]).bindPopup('This is Aurora, CO.').addTo(lugares),
        //     L.marker([39.77, -105.23]).bindPopup('This is Golden, CO.').addTo(lugares);

        var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

        var grayscale   = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr}),
            streets  = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

        var map = L.map('map', {
            center: [-19.1949438, -67.2809816],
            zoom: 10,
            layers: [streets, lugares]
        });

        var baseLayers = {
            "Streets": streets,
            "Grayscale": grayscale,
        };

        var overlays = {
            "Lugares": lugares
        };

        L.control.layers(baseLayers, overlays).addTo(map);
        datos();
        function datos(){
            lugares.clearLayers();
            $.ajax({
                url:'<?=base_url()?>Welcome/lugares',
                success:function (e){
                    let dat=JSON.parse(e);
                    // console.log(dat);
                    dat.forEach(r=>{
                        // console.log(r);
                        L.marker([r.lat, r.lng]).bindPopup(r.name+' <span class="eliminar" data-id="'+r.id+'"><i class="fa fa-trash-alt"></i></span>').addTo(lugares);
                    })
                }
            });
        }
        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("<input placeholder='nombre' id='nombre' /><button class='crear' id-lat='"+e.latlng.lat+"' id-lng='"+e.latlng.lng+"'>Crear </button>" + e.latlng.toString())
                .openOn(map);
        }
        $('#map').on('click','.crear',function (e){
            // console.log($('#nombre').val());
            // console.log($(this).attr('id-lat'));
            // return false;
            $.ajax({
                url:'<?=base_url()?>Welcome/crear',
                type:'POST',
                data:{nombre:$('#nombre').val(),lat:$(this).attr('id-lat'),lng:$(this).attr('id-lng')},
                success:function (e){
                    // let dat=JSON.parse(e);
                    // console.log(e);
                    datos();
                }
            });
        });

        map.on('click', onMapClick);
    }


	// var map = L.map('map').setView([-19.1949438, -67.2809816], 10);
    //
	// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
	// 	maxZoom: 18,
	// 	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
	// 		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	// 	id: 'mapbox/streets-v11',
	// 	tileSize: 512,
	// 	zoomOffset: -1
	// }).addTo(map);

	// function onLocationFound(e) {
	// 	var radius = e.accuracy / 2;
    //
	// 	L.marker(e.latlng).addTo(map)
	// 		.bindPopup("You are within " + radius + " meters from this point").openPopup();
    //
	// 	L.circle(e.latlng, radius).addTo(map);
	// }
    //
	// function onLocationError(e) {
	// 	alert(e.message);
	// }
    //
	// map.on('locationfound', onLocationFound);
	// map.on('locationerror', onLocationError);

	// map.locate({setView: true, maxZoom: 16});
</script>



</body>
</html>
