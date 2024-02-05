@extends('layouts.index')
<table class="table table-bordered w-100 container mt-0">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Demandeur</th>
            <th scope="col">Contact</th>
            <th scope="col">Date de contact</th>
            <th scope="col">Heure de contact</th>
            <th scope="col">Nature</th>
            <th scope="col">Description</th>
            <th scope="col">Moyens</th>
            <th scope="col">Cout</th>
            <th scope="col">Technicien</th>
            <th scope="col">Travaux achevés dans les 4H</th>
            <th scope="col">Date d'intervention</th>
            <th scope="col">Heure début</th>
            <th scope="col">Heure fin</th>
            <th scope="col">Durée d'attente</th>
            <th scope="col">Durée d'intervention</th>
            <th scope="col">Durée Total</th>
            <th scope="col">Etat</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($infos as $key => $info)
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $info->demandeur}}</td>
                <td>{{ $info->contact}}</td>
                <td>{{ $info->dob}}</td>
                <td>{{ $info->heure}}</td>
                <td>{{ $info->nature}}</td>
                <td>{{ $info->desc}}</td>
                <td>{{ $info->moyen}}</td>
                <td>{{ $info->cout}}</td>
                <td>{{ $info->techn}}</td>
                <td>{{ $info->trv }} {{ $info->rpn }}</td>

                <td>{{ $info->date}}</td>
                <td>{{ $info->debut }}</td>
                <td>{{ $info->fin }}</td>
                <td>
                    <?php
                        $heure1 = new DateTime($info->heure);
                        $heure2 = new DateTime($info->debut);
        
                        $difference = $heure1->diff($heure2);
        
                        echo $difference->format('%H heures, %i minutes');
                    ?>
                </td>

                <td>
                    <?php
                        $heure2 = new DateTime($info->debut);
                        $heure3 = new DateTime($info->fin);
        
                        $difference = $heure2->diff($heure3);
        
                        echo $difference->format('%H heures, %i minutes');
                    ?>
                </td>

                <td>
                    <?php
                        $heure1 = new DateTime($info->heure);
                        $heure3 = new DateTime($info->fin);
        
                        $difference = $heure1->diff($heure3);
        
                        echo $difference->format('%H heures, %i minutes');
                    ?>
                </td>

                <td><a href="/pdf">Etat</a>
                </td>
            
            </tr>
        @endforeach
    </tbody>
</table>


