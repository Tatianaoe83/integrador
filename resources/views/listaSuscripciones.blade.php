
<!DOCTYPE html>
<html lang="en">
<head>

<style>
#media {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#media td, #media th {
    border: 1px solid #ddd;
    padding: 8px;
}

#media tr:nth-child(even){background-color: #f2f2f2;}

#media tr:hover {background-color: #ddd;}

#media th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

    <meta charset="utf-8">
   <center><title>Suscripciones</title></center>
   <link rel="stylesheet" type="text/css" href="css/AminLTE.css">
</head>
<body>
    <center><h1>Lista de Suscripciones</h1></center>
    <table id="media">
         <thead>
            <tr>            
                 <th>Nombre Usuario</th>
                 <th>Paquete Actual</th>
                 <th>Fecha de Inscripcion</th>
                 <th>Fecha final</th>
            </tr>
        </thead>

        <tbody> 
                    <td>
                        
                     </td>
                    @foreach($Paquetes as $opaquete)
                <tr>
                 
                            @foreach($opaquete->$Hospitales as $ohospital)
                            <tr>
                                <td>{{$ohospital->nombre}} </td>
                                <td>{{$opaquete->nombre}}</td>
                   
                                
                                <td>{{$ohospital->pivot->fecha_inscripcion}}</td>
                                <td>{{$ohospital->pivot->fecha_fin}}</td>
                            </tr>
                            @endforeach
                 </tr>
                 @endforeach
            </tbody>

        </table>       
    </html>      
@endsection

        


