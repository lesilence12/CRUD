<?php include_once resource_path('views/inc/header.php'); ?>

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1 class="">AJOUTER UN ETUDIANT - LARAVEL 10</h1>
                </br>
                </br>
                </br>
                </br>
                <!-- afficher alert si enregistrement réussi -->
                <!-- @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif -->

                <!-- afficher les erreurs -->
                <div>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">Veillez remplir correctement le champs !!!</div>
                    <div class="alert alert-danger"> {{ $error }} </div>
                    @endforeach
                </div>

                <div class="row text-start">
                    <form action="/ajouter/traitement" method="POST">
                        @csrf

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Nom" name="nom" placeholder="Mfetmouta">
                            <label for="Nom" class="col-sm-2 col-form-label">Entrer le nom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Prenom" name="prenom" placeholder="William">
                            <label for="Prenom" class="col-sm-2 col-form-label">Entrer le prenom</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Classe" name="classe" placeholder="Tle">
                            <label for="Classe" class="col-sm-2 col-form-label">Entrer la classe</label>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Valider</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once resource_path('views/inc/footer.php'); ?>
