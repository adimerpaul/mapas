
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

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        <a class="dropdown-item" href="<?=base_url()?>Reporte/usuario">Reporte</a>
        <a class="dropdown-item" href="<?=base_url()?>Reporte/usuario">Materiales</a>
        <a class="dropdown-item" href="" id="logout">Salir</a>
    </div>
</div>

<!--input type="button" onclick='location.href="<?=base_url()?>"' id="btnlugares" class="btn btn-success btn-sm" value="Postes" />
<input type="button" onclick='location.href="<?=base_url()?>Welcome/recorridos"' id="recorridos" class="btn btn-danger btn-sm" value="Mantenimiento" /-->
<img src="<?=base_url()?>img/oruro.png" id="logooruro" alt="" width="50">
<!--<img src="--><?//=base_url()?><!--img/uto.png" id="logouto" alt="" width="50">-->
<label for="" style="font-weight: bold;color: #002166" id="titulo"><b>RUMAP</b> <span style="font-size:14px;"> Registro Urbano de Mantenimiento de Alumbrado Publico</span></label>


<!-- Large modal -->
<div class="modal fade " id="revision" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="card " >
            <div class="card-header text-white bg-success">Registro de Mantenimiento</div>
            <div class="card-body">
                <div class="row" style="width:100%">
            <div class=" row col-6">
                <label for="fecha" class="col-3">Fecha :</label>
                <div class="col-9">
                <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo date('Y-m-d');?>">
                </div>
            </div>
            <div class="col-6 row">
                <label for="hora" class="col-3">Hora :</label>
                <div class="col-9">
                <input type="time" class="form-control" name="hora" id="hora" value="<?php echo date('H:i');?>">
                </div>
            </div>
            </div> 

            <div class="row">
            <div class="form-group col-3" >
                <label for="material">Materiales</label>
                <select name="" id="material" class="form-control">
                 <option value="">Seleccionar</option>
                 <?php 
                    $res=$this->db->query("Select * from materiales");
                    foreach ($res->result_array() as $row) {
                        echo '<option value='.$row['id'].'>'.$row['nombre'].'</option>';
                    }
                 ?>
             </select>
            </div>                    
            <div class="form-group col-2">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" value=1 required min=0>
            </div>
            <div class="form-group col-3">
                <label for="observacion">Observacion</label>
                <input type="text"class="form-control"  id="observacion" >
            </div>
            <div class="form-group">
                <label for="codigo_mat">Codigo</label>
                <input type="text"class="form-control"  id="codigo_mat" >
            </div><br>
                <button class="btn btn-warning" id="btnagregar">Agregar</button>

            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Material</th>
                    <th>Cantidad</th>
                    <th>Observacion</th>
                    <th>Codigo</th>
                </tr>
                </thead>
                <tbody id='cuerpo'>
                    <tr></tr>
                </tbody>
            </table>
            <button class="btn btn-success" id="envmaterial">Registrar</button>
        </div>
    </div>

            </div>
        </div>
</div>


<script>

    window.onload=function (){
        var regmtto=[];
        var idposte=0;
        var regini={'material_id':'','cantidad':0,'observacion':'','codigo_mat':''};
        user_id=localStorage.getItem("user_id");
        login();
        $('#logout').click(function(){
            localStorage.removeItem('user_id');
        })
 

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


        };
        function cargar(){
            cadena='';
            console.log(regmtto);
            regmtto.forEach(element => {
                cadena+='<tr>';
                cadena+='<td>'+element.nombre+'</td>';
                cadena+='<td>'+element.cantidad+'</td>';
                cadena+='<td>'+element.observacion+'</td>';
                cadena+='<td>'+element.codigo_mat+'</td>';
                cadena+='</tr>';
            });
            $('#cuerpo').html(cadena);
        };
        $('#envmaterial').click(function(){
            console.log(regmtto);
            //return false;
            if(regmtto.length>0){
                $.ajax(
                    {
                        type: 'post',
                        url: '<?=base_url()?>Mantenimiento/registro',
                        data: { 
                            "user_id": localStorage.getItem("user_id"),
                            "mat": regmtto,
                            'poste':idposte,
                            'fecha':$('#fecha').val(),
                            'hora':$('#hora').val()
                        },
                        success: function (response) {
                            alert("Success !!");
                            regmtto=[];
                             $('#revision').modal('hide')

                        },
                        error: function () {
                            alert("Error !!");
                        }
                    }
                    );
            }
            regmtto=[];
        });
        $('#btnagregar').click(function(){
            if($('#material').val()!='' && $('#cantidad').val()>0){
            regmtto.push({'material':$('#material').val(),'nombre':$("#material option:selected" ).text(),'cantidad':$('#cantidad').val(),'observacion':$('#observacion').val(),'codigo_mat':$('#codigo_mat').val()});
            $('#material').val('');
            $('#cantidad').val(1);
            $('#observacion').val('');
            $('#codigo_mat').val('');
            }
            cargar();

        });
        //$('#map').on('click','.eliminar',function (e){
        //    // console.log($(this).attr('data-id'));
        //    let id=$(this).attr('data-id');
        //    $.ajax({
        //        url:'<?//=base_url()?>//Welcome/eliminar/'+id,
        //        success:function (e){
        //            // let dat=JSON.parse(e);
        //            // console.log(e);
        //            datos();
        //        }
        //    });
        //});

        $('#map').on('click','.revision',function (e){
            console.log(e)
             console.log($(this).attr('data-id'));
            idposte=$(this).attr('data-id');
            //if (confirm("Seguro de mandar a mantenimiento?")){
            //    alert(id)
            //    $.ajax({
            //        url:'<?//=base_url()?>//Welcome/enviarmtto/'+id,
            //        success:function (e){
            //        }
            //    });
            //
            //}
            cargar();
            $('#revision').modal('show')


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
                url:'<?=base_url()?>Man/lugares',
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
                        if (r.estado=='MTTO'){
                            color='badge-danger'
                        }else{
                            color='badge-success'
                        }
                        var html='<table border="1">' +
                            '<tr><td><b>Codigo:</b></td><td>'+r.codigo+'</td></tr>' +
                            '<tr><td><b>Nro de post:</b></td><td>'+r.poste+'</td></tr>' +
                            '<tr><td><b>Tipo:</b></td><td>'+r.tipo+'</td></tr>' +
                            '<tr><td><b>Potencia:</b></td><td>'+r.potencia+' W</td></tr>' +
                            '<tr><td><b>Estado:</b></td><td> <badge class="badge '+ color+'">'+r.estado+'</badge></td></tr>' +
                            '<tr><td colspan="2"><b><button class="btn btn-info revision btn-sm" data-id="'+r.id+'"><i class="fa fa-sm fa-cog"></i>Revision</button></b></td></tr>' +
                            '</table>'
                        L.marker([r.lat, r.lng], {icon: redMarker}).bindPopup(html+' <!--span class="eliminar" data-id="'+r.id+'"><i class="fa fa-trash-alt"></i></span-->').addTo(lugares);
                    })
                }
            });


        }
        var popup = L.popup();
        //function onMapClick(e) {
        //    popup
        //        .setLatLng(e.latlng)
        //        .setContent("<input placeholder='codigo' id='codigo' /><br><input placeholder='potencia' id='potencia' /><br><input placeholder='tipo luminaria' id='tipo' /><br><input placeholder='poste' id='poste' /><button class='crear' id-lat='"+e.latlng.lat+"' id-lng='"+e.latlng.lng+"'>Crear </button>" + e.latlng.toString())
        //        .openOn(map);
        //}
        //$('#map').on('click','.crear',function (e){
        //    // console.log($('#nombre').val());
        //    // console.log($(this).attr('id-lat'));
        //    // return false;
        //    $.ajax({
        //        url:'<?//=base_url()?>//Welcome/crear',
        //        type:'POST',
        //        data:{codigo:$('#codigo').val(),potencia:$('#potencia').val(),tipo:$('#tipo').val(),poste:$('#poste').val(),
        //        lat:$(this).attr('id-lat'),lng:$(this).attr('id-lng')},
        //        success:function (e){
        //            // let dat=JSON.parse(e);
        //            // console.log(e);
        //            datos()
        //            // map.closePopup();
        //            popup.removeFrom(map)
        //
        //        }
        //    });
        //});
        //map.on('click', onMapClick);
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
            $('#logout').click(function(){
            localStorage.removeItem('user_id');
        })
</script>
</html>
