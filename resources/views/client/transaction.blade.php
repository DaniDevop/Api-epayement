<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="./vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
       @include('client.layout.header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('client.layout.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">

                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">

                    </div>
                </div>



                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Listes des payements</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table student-data-table m-t-20">
                                        <thead>
                                            <tr>
                                                <th>Numéro</th>
                                                <th>Somme</th>
                                                <th>Methode</th>
                                                <th>Dete-creation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($transaction as $demande)


                                            <tr>
                                                <td> {{$demande->id}} </td>
                                                <td> {{$demande->amount}} </td>
                                                <td>
                                                   {{ $demande->pays}}
                                                </td>

                                                <td>
                                                    {{ $demande->created_at}}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                              {{$transaction->links()}}
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datils sur votre compte</h4>
                            </div>
                            <div class="card-body">
                                <p>Votre clé ne le partager pas <strong>Nb</strong> <span style="color: blue">{{ $marchand['api_key']}}</span> </p>
                                <ul>
                                    <li>Coller cette url sur votre site : <input type="text" value="{{$marchand['api_key']}}"> </li><br>
                                    <li><span class="alert alert-info">Numéro de compte :  {{$marchand['numero_compte']}}</span></li><p></p>
                                    <li><h4>Générer une nouvelle clé </h4>: <a href="{{route('key.clients',['id'=>$marchand['id']])}}"><button class="btn btn-info">Cliquer</button></a> </li><br>

                                    <p class="alert alert-primary">Texte à copier dans votre application : <span id="texte-a-copier">http://127.0.0.1:8000/paiement/{{ $marchand['api_key']}} </span></p>
                                        <a href="#" id="copier-lien" class="btn btn-primary">Copier</a>
                                        <form action="{{route('clients.changeCompte')}}" method="POST">
                                            @csrf
                                            <label for="">Votre numéro de compte :</label>
                                            <input type="text"  name="compte" value="{{$marchand['numero_compte']}}" required><br>
                                            <input type="hidden" name="id" value="{{$marchand['id']}}">
                                            <button class="btn btn-info">Valider</button>
                                        </form>

                                </ul>
                            </div>
                        </div>
                    </div>


            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>

    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

    <script src="./vendor/chartist/js/chartist.min.js"></script>

    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="./js/dashboard/dashboard-2.js"></script>
    <script>
        const copierLien = document.getElementById("copier-lien");
const texteACopier = document.getElementById("texte-a-copier");

copierLien.addEventListener("click", function(event) {
    event.preventDefault();

    navigator.clipboard.writeText(texteACopier.textContent)
        .then(() => {
            console.log("Texte copié dans le presse-papiers :", texteACopier.textContent);
            // Vous pouvez également afficher un message de confirmation à l'utilisateur ici
        })
        .catch((err) => {
            console.error("Échec de la copie du texte : ", err);
            // Vous pouvez également afficher un message d'erreur à l'utilisateur ici
        });
});

    </script>


</body>

</html>
