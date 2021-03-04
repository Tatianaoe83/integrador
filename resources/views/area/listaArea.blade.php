
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
   <center><title>  Area</title></center>
   <link rel="stylesheet" type="text/css" href="css/AminLTE.css">
</head>
<body>
    <center><h1>Lista de Areas</h1></center>
    <table id="media">
         <thead>
            <tr>

            
                 <th>Nombre</th>
                 <th>Descripcion</th>
            </tr>
        </thead>
        @foreach($area as $area)

        <tbody>

            
        <tr>
             <td>{{ $area->nombre }}</td>
             <td>{{ $area->descripcion }}</td>
        </tr>


        </tbody>
        @endforeach

        </table>
        </body>
        </html>
    
