<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Fiche d'intervention</h1>
    {{-- <table>
        <thead>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
        </thead>
        <tbody>
            <tr>
                @foreach ($users as $user)
                <td>{{$loop->index+1}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                @endforeach
            
            </tr>
        </tbody>
    </table> --}}
    {{-- @foreach ($users as $user) --}}

    
    <div>
        @foreach ($infos as $key => $info)
        <h3>Nom du Demandeur:{{ $info->demandeur}}</h3>
        <h3>Moyen de Contact:{{ $info->contact}}</h3>
        <h3>Date de Contact:{{ $info->dob }}</h3>
        <h3>Heure de Contact:{{ $info->heure}}</h3>
        <h3>Nature d'intervention:{{ $info->nature }}</h3>
        <h3>Description des travaux réalisés:{{ $info->desc }}</h3>
        <h3>Moyens utilisés:{{ $info->moyen }}</h3>
        <h3>Cout engendré par l'intervention:{{ $info->cout }}</h3>
        <h3>Nom du Technicien:{{ $info->techn}}</h3>
        <h3>Travaux achevés dans les 4 heures:{{ $info->trv }}</h3>
        <h3>Sinon, pourquoi:{{ $info->rpn }}</h3>
        <h3>Date d'intervention:{{ $info->date }}</h3>
        <h3>Heure début d'intervention:{{ $info->debut }}</h3>
        <h3>Heure Fin:{{ $info->fin }}</h3>
        @endforeach

    </div>
    {{-- @endforeach --}}

</body>
</html>