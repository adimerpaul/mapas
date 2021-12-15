<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        #btnlugares {
            top: 0px;
            left: 0px;
            /*padding: 10px;*/
            margin-top: 10px;
            margin-left: 50px;
            z-index: 400;
        }

        .opciones {
            top: 0px;
            left: 0px;
            /*padding: 10px;*/
            margin-top: 10px;
            margin-left: 50px;
            z-index: 400;
        }

        #logooruro {
            top: 0px;
            left: 0px;
            padding: 10px;
            margin-top: 0px;
            margin-left: 230px;
            z-index: 400;
        }

	</style>

	<style>body { padding: 0; margin: 0; }</style>
</head>
<body>
<div class="container">

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
<div class>
<img src="<?=base_url()?>img/oruro.png" id="logooruro" alt="" width="50">
<label for="" style="font-weight: bold;color: #002166" id="titulo"><b>RUMAP</b> <span style="font-size:14px;"> Registro Urbano de Mantenimiento de Alumbrado Publico</span></label>
</div>
<br>
<div class="row">
    <div class="col-3">
        <label >Usuarios:</label>
        <select class="form-select" id="user"  required>
            <option selected>Seleccionar</option>
            <?php $re= $this->db->query("SELECT id,nombre from  usuarios ");
            
            foreach ($re->result_array() as $row) {
                echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
            }
            ?>
        </select>
    </div>
    <div class="col-3">
        Fecha Ini: <input id="ini" type="date" value="<?php echo date('Y-m-d');?>">
    </div>
    <div class="col-3">
        Fecha fin: <input id='fin' type="date" value="<?php echo date('Y-m-d');?>">
    </div>
    <div class="col-3">
        <button id="generar" class="btn btn-success">Generar</button>
    </div>
    </div>
<br>
<div class="card ">
  <div class="card-header text-white bg-primary">Mantenimiento Poste</div>
  <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                    <th>Fecha</th>
                    <th>Poste</th>
                    <th>Codigo-post</th>
                    <th>Material</th>
                    <th>Cantidad</th>
                    <th>Observacion</th>
                    <th>Codigo-mat</th>
                    </tr>
                </thead>
                <tbody id='tabody'></tbody>
            </table>
  </div>
</div>
</div>

</div>
</body>
<script>
    $(document).ready(function(){

    })
    $('#generar').click(function(){
        console.log($('#user selected').val());
        if($('#user').val()!='' && $('#ini').val()!=null  && $('#fin').val()!=null){
        $.ajax(
                    {
                        type: 'post',
                        url: '<?=base_url()?>Reporte/listado',
                        data: { 
                            "user_id": $('#user').val(),
                            'ini':$('#ini').val(),
                            'fin':$('#fin').val()
                        },
                        success: function (response) {
                            console.log(response);
                            var datos=JSON.parse(response);
                            console.log(datos)
                                let cadena='';
                            datos.forEach(element => {
                                cadena+='<tr>';
                                cadena+='<td>'+element['fecha']+'</td>';
                                cadena+='<td>'+element['poste']+'</td>';
                                cadena+='<td>'+element['codigo']+'</td>';
                                cadena+='<td>'+element['nombre']+'</td>';
                                cadena+='<td>'+element['cantidad']+'</td>';
                                cadena+='<td>'+element['observacion']+'</td>';
                                cadena+='<td>'+element['codigo_mat']+'</td>';
                                
                                cadena+='</tr>';
                                
                            });
                            $('#tabody').html(cadena);

                        },
                        error: function () {
                            alert("Error !!");
                        }
                    }
                    );}
            
    });
</script>
</html>