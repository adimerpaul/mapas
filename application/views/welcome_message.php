
<!DOCTYPE html>
<html>
<head>

	<title>Sistema de Información Geográfico</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!--	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
<!--    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>-->
<!--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>-->
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">-->
<!--    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" rel="stylesheet">-->
<!---->
<!--    <link rel="stylesheet" href="--><?//=base_url()?><!--dist/leaflet.awesome-markers.css">-->
<!--    <script src="--><?//=base_url()?><!--dist/leaflet.awesome-markers.js"></script>-->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/leaflet.extra-markers.css">
    <script src="<?=base_url()?>assets/js/leaflet.extra-markers.js"></script>

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
            /*padding: 10px;*/
            margin-top: 10px;
            margin-left: 50px;
            z-index: 400;
        }

        .opciones {
            position: absolute;
            top: 0px;
            left: 0px;
            /*padding: 10px;*/
            margin-top: 10px;
            margin-left: 50px;
            z-index: 400;
        }
        #recorridos {
            position: absolute;
            top: 0px;
            left: 0px;
            /*padding: 10px;*/
            margin-top: 10px;
            margin-left: 120px;
            z-index: 400;
        }
        #titulo {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 5px;
            margin-left: 260px;
            z-index: 400;
        }
        #logooruro {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 0px;
            margin-left: 230px;
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

<div class="dropdown opciones">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Menu
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="<?=base_url()?>">Postes</a>
        <a class="dropdown-item" href="<?=base_url()?>Man">Mantenimientos</a>
        <a class="dropdown-item" href="<?=base_url()?>Mantenimiento">Reporte</a>
        <a class="dropdown-item" href="#">Something else here</a>
    </div>
</div>

<!--input type="button" onclick='location.href="<?=base_url()?>"' id="btnlugares" class="btn btn-success btn-sm" value="Postes" />
<input type="button" onclick='location.href="<?=base_url()?>Welcome/recorridos"' id="recorridos" class="btn btn-danger btn-sm" value="Mantenimiento" /-->
<img src="<?=base_url()?>img/oruro.png" id="logooruro" alt="" width="50">
<!--<img src="--><?//=base_url()?><!--img/uto.png" id="logouto" alt="" width="50">-->
<label for="" style="font-weight: bold;color: #002166" id="titulo"><b>RUMAP</b> <span style="font-size:14px;"> Registro Urbano de Mantenimiento de Alumbrado Publico</span></label>
<!-- Modal -->
<!--<div class="modal " id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header">-->
<!--        <h5 class="modal-title" id="exampleModalLabel">Mantenimiento <span id="idposte" name="idposte">a</span></h5>-->
<!--        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--          <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        <form action="" method="post">-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!--                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
<!--            </div>-->
<!--            <div class="mb-3">-->
<!--                <label for="exampleInputPassword1" class="form-label">Password</label>-->
<!--                <input type="password" class="form-control" id="exampleInputPassword1">-->
<!--            </div>-->
<!--            <div class="mb-3 form-check">-->
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--            </div>-->
<!--            <button type="submit" class="btn btn-primary">Submit</button>-->
<!---->
<!--        </form>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<script>

    window.onload=function (){
        user_id=localStorage.getItem("user_id")
        login()


        function login(){
            if (user_id){

            }else{
                let usuario=prompt("Usuario?")
                console.log(usuario)
                if (usuario!=null && usuario!=""){
                    $.ajax({
                        url:'<?=base_url()?>Login/login/'+usuario,
                        success:function (e){
                            // let dat=JSON.parse(e);
                            // console.log(e);
                            // datos();
                            if (e>0){
                                // alert("bienbenido")
                                // console.log(e);
                                localStorage.setItem("user_id",e)
                            }else{
                                login()
                            }
                        }
                    });
                }else{
                    login()
                }
            }


        }

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

        $('#map').on('click','.mantenimiento',function (e){
            // console.log($(this).attr('data-id'));
            let id=$(this).attr('data-id');
            if (confirm("Seguro de mandar a mantenimiento?")){
                alert(id)
                $.ajax({
                url:'<?=base_url()?>Welcome/enviarmtto/'+id,
                success:function (e){
                }
            });

            }

            //$.ajax({
            //    url:'<?//=base_url()?>//Welcome/eliminar/'+id,
            //    success:function (e){
            //        // let dat=JSON.parse(e);
            //        // console.log(e);
            //        datos();
            //    }
            //});
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
            center: [-17.960118, -67.110329],
            zoom: 14,
            layers: [streets, lugares]
        });

        var baseLayers = {
            "Streets": streets,
            "Grayscale": grayscale,
        };

        var overlays = {
            "Lugares": lugares
        };
        // var LeafIcon = L.Icon.extend({
        //     options: {
        //         iconSize:     [38, 95],
        //         shadowSize:   [50, 64],
        //         iconAnchor:   [22, 94],
        //         shadowAnchor: [4, 62],
        //         popupAnchor:  [-3, -76]
        //     }
        // });
        // L.control.layers(baseLayers, overlays).addTo(map);
        // var greenIcon = new LeafIcon({
        //     iconUrl: 'http://leafletjs.com/examples/custom-icons/leaf-green.png',
        //     shadowUrl: 'http://leafletjs.com/examples/custom-icons/leaf-shadow.png'
        // })

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
                        // var redMarker = L.AwesomeMarkers.icon({
                        //     // icon: 'cog',
                        //     // prefix: 'fa',
                        //     markerColor: r.color,
                        //     spin:true
                        // });

                        var redMarker = L.ExtraMarkers.icon({
                            icon: 'fa-number',
                            number: r.poste,
                            // innerHTML:'<p style="color: white">'+r.poste+'</p>',
                            markerColor:r.color,
                            // svg:true,
                            // svgBorderColor:'#fff'
                        });
                        var html='<table border="1">' +
                            '<tr><td><b>Codigo:</b></td><td>'+r.codigo+'</td></tr>' +
                            '<tr><td><b>Nro de post:</b></td><td>'+r.poste+'</td></tr>' +
                            '<tr><td><b>Tipo:</b></td><td>'+r.tipo+'</td></tr>' +
                            '<tr><td><b>Potencia:</b></td><td>'+r.potencia+' W</td></tr>' +
                            '<tr><td><b>Estado:</b></td><td>'+r.estado+'</td></tr>' +
                            '<tr><td colspan="2"><b><button class="btn btn-primary mantenimiento" data-id="'+r.id+'"><i class="fa fa-sm fa-cog"></i>Mantenimento</button></b></td></tr>' +
                            '</table>'
                        L.marker([r.lat, r.lng], {icon: redMarker}).bindPopup(html+' <!--span class="eliminar" data-id="'+r.id+'"><i class="fa fa-trash-alt"></i></span-->').addTo(lugares);
                    })
                }
            });


        }
        var popup = L.popup();
        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("<input placeholder='codigo' id='codigo' /><br><input placeholder='potencia' id='potencia' /><br><input placeholder='tipo luminaria' id='tipo' /><br><input placeholder='poste' id='poste' /><button class='crear' id-lat='"+e.latlng.lat+"' id-lng='"+e.latlng.lng+"'>Crear </button>" + e.latlng.toString())
                .openOn(map);
        }
        $('#map').on('click','.crear',function (e){
            // console.log($('#nombre').val());
            // console.log($(this).attr('id-lat'));
            // return false;
            $.ajax({
                url:'<?=base_url()?>Welcome/crear',
                type:'POST',
                data:{codigo:$('#codigo').val(),potencia:$('#potencia').val(),tipo:$('#tipo').val(),poste:$('#poste').val(),
                lat:$(this).attr('id-lat'),lng:$(this).attr('id-lng')},
                success:function (e){
                    // let dat=JSON.parse(e);
                    // console.log(e);
                    datos()
                    // map.closePopup();
                    popup.removeFrom(map)

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
<script>


                $(document).ready(function(){
                    $("#exampleModal").on('shown.bs.modal', function (e) {
                console.log('aaaa');
                var id = $(this).data('id');
                console.log(id);
                });
});
</script>
</html>
