
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
   <center><title>Doctor</title></center>
   <link rel="stylesheet" type="text/css" href="css/AminLTE.css">
</head>
<body>
    <center><h1>Lista de Doctores</h1></center>
    <table id="media">
         <thead>
            <tr>

            
                 <th>Nombre</th>
                 <th>Apellidos</th>
                 <th>Telefono</th>
                 <th>Email</th>
                 <th>Especialidad</th>
                  
            </tr>
        </thead>
        @foreach($doctor as $doctor)

        <tbody>

            
        <tr>
             <td>{{ $doctor->nombre }}</td>
             <td>{{ $doctor->apellidos }}</td>
             <td>{{ $doctor->telefono }}</td>
             <td>{{ $doctor->email }}</td>
               <td>{{ $doctor->Especialidad->Especialidad }}</td>
        </tr>


        </tbody>
        @endforeach

        </table>
        </body>
        </html>
    
