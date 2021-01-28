<!DOCTYPE html>
<html lang="en">

<head>

    @include('ClientPart.Partials.index.head')

</head>

<body>

  <!-- Navigation -->
  @include('ClientPart.Partials.index.nav')

  <!-- Page Content -->
  <div class="container">
    @include('flash::message')

    <!-- Jumbotron Header -->
    <div class="jumbotron my-4">
      <h1 class="display-4">Mon compte</h1>
    </div>

    <!-- Page Feature -->
    <div class="text-center">

      <div class="mb-5">
        <div class="text-center">
          <div class="card-body">
            <p class="card-text">Nom : {{ $user->nom }}</p>
            <p class="card-text">Prenom : {{ $user->prenom }}</p>
            <p class="card-text">email : {{ $user->email }}</p>
            <p class="card-text">Date de naissance : {{ $user->date_de_naissance }}</p>
          </div>
            <a href="/updateprofile" class="btn btn-primary">Modifier les informations du compte</a> 
        </div>
      </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  @include('ClientPart.Partials.index.footer')

  <!-- Bootstrap core JavaScript -->
  @include('ClientPart.Partials.index.footer-script')

</body>

</html>
