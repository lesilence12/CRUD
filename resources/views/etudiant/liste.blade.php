<?php include_once resource_path('views/inc/header.php'); ?>

    <div class="container text-center">
        <div class="row">
            <div class="col s12">
                <h1 class="text-red">LISTE ETUDIANT - LARAVEL 10</h1>

                <!-- afficher alert si enregistrement réussi -->
                @if(session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                    <hr>
                      <div class="text-start">
                        <a href="/ajouter" class="btn btn-primary">Ajouter</a>
                      </div>
                    <hr>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">Classe</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                          @php
                            $classement = 1;
                          @endphp

                          @foreach($lister as $etudiants)

                            <tr>
                                <td scope="row"> {{ $classement }} </td>
                                <td> {{ $etudiants->nom }} </td>
                                <td> {{ $etudiants->prenom }} </td>
                                <td> {{ $etudiants->classe }} </td>
                                <td>
                                    <a href="/modifier/{{ $etudiants->id }}" class="btn btn-primary">Modifier</a>
                                    <a href="/supprimer/{{ $etudiants->id }}" class="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>

                            @php
                            $classement += 1;
                            @endphp

                          @endforeach

                        </tbody>
                    </table>

                    {{ $lister->links() }}
            </div>
        </div>
    </div>

<?php include_once resource_path('views/inc/footer.php'); ?>
