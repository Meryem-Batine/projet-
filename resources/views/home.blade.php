{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/pdf">Download users</a>
    <h1 class="bg-danger">heloo</h1>
</body>
</html> --}}
@extends('layouts.index')
@section('content')
    <div class="logo container w-50 frm mt-5">
        <div class="hdr m-2 d-flex justify-content-start align-items-center">
            <img width="80px" src="{{asset('storage/image/2m.png')}}" alt="">
            <h5 class="container mt-2"> Demande d'intervention "infrastructure et environnement"</h3>
        </div>
        <form action={{ route('info.store') }} method="POST" class="conatiner w-100">
            @csrf
            <div class="p1 pt-4 ">
                <p class="">A remplir par le demandeur</p>
                <div class="form-row ">
                    <div class="form-group mb-3">
                        <label for="inputPassword4" name="demandeur">Nom du Demandeur</label>
                        <input type="text" name="demandeur" class="form-control" id="inputPassword4"
                            placeholder="Nom du Demandeur">
                    </div>
                    {{-- select --}}
                    <div class="form-group  mb-3">
                        <label for="exampleFormControlSelect1" name="contact">Moyen de contact</label>
                        <select class="form-select" name="contact" aria-label="Default select example">
                            {{-- <option selected>Moyen de contact</option> --}}
                            <option value="Mail">Mail</option>
                            <option value="Telephone">Téléphone</option>
                            <option value="Contact_physique">Contact physique</option>
                        </select>
                    </div>
                    {{--  --}}
                    <div class="form-group mb-3">
                        <label for="inputPassword4" name="dob">Date de contact</label>
                        <input type="date" name="dob" class="form-control" id="inputPassword4" placeholder="date">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="inputPassword4" name="heure">Heure de contact</label>
                    <input type="time" name="heure" class="form-control" id="inputPassword4" placeholder="time">
                </div>
            {{-- ------------------------------ partie 2 ----------------------------- --}}
                <p>A remplir par le technicien concerné par l'intervention</p>
                {{-- select --}}
                <div class="form-group  mb-3">
                    <label for="exampleFormControlSelect1" name="nature">Nature d'intervention</label>
                    <select class="form-select" name="nature" aria-label="Default select example">
                        <option value="electricite_energie">électricité/énergie</option>
                        <option value="env_technique_infrastructure">ET & Infras</option>
                        <option value="Telephone">Téléphone</option>
                    </select>
                </div>
                {{--  --}}
                <div class="form-group mb-3">
                    <label for="inputPassword4" name="desc">Description des travaux réalisés</label>
                    <input type="text" name="desc" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4"  name="moyen">Moyens utilisés</label>  
                    <input type="text" name="moyen" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4" name="cout">Cout engendré par l'intervention</label>
                    <input type="text" name="cout" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4" name="techn">Nom du technicien</label>
                    <input type="text" name="techn" class="form-control" id="inputPassword4">
                </div>
                {{--  --}}
                <div class="form-group  mb-3">
                    <label for="exampleFormControlSelect1" name="trv">Travaux achevés dans les 4 heures</label>
                    <select class="form-select" name="trv" aria-label="Default select example">
                        <option value="Oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4" name="rpn">Sinon, pourquoi ?</label>
                    <input type="text" name="rpn" class="form-control" id="inputPassword4">
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4" name="date">Date d'intervention</label>
                    <input type="date" name="date" class="form-control" id="inputPassword4" placeholder="date">
                </div>

                <div class="form-group mb-3">
                    <label for="inputPassword4" name="debut">Heure début d'intervention</label>
                    <input type="time" name="debut" class="form-control" id="inputPassword4" placeholder="time">
                </div> 

                <div class="form-group mb-3"> 
                    <label for="inputPassword4">Heure Fin</label>
                    <input type="time" name="fin" class="form-control" id="inputPassword4" placeholder="time">
                </div>
                <button type="submit" class="btn btn-success mb-3">Envoyer</button>
        </form>

    </div>
    </div>
@endsection
