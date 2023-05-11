<!doctype html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dashboard Users Page</title>
  <link rel="stylesheet" href="{{asset('build/assets/css/app.css')}}">



  <!-- Custom styles for this template -->
  <link href="{{asset('build/assets/css/dashboard.css')}}" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Laravel Ecommerce</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Cixis</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home"></span>
                Idareetme paneli
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Istafadeciler

              </a>
            </li>
          </ul>


        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Istifadeciler</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">

              <a href="/users/create" class="btn btn-sm btn-outline-danger">Elave et</a>


            </div>



          </div>
        </div>



        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">Sira No</th>
                <th scope="col">Ad Soyad</th>
                <th scope="col">E-mail</th>
                <th scope="col">Aktivlik</th>
                <th scope="col">Emeliyyatlar</th>
              </tr>
            </thead>
            <tbody>
              @if(count($users) >0)
              @foreach($users as $user)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->is_active}}</td>
                <td>
                  <ul class="nav float-start">
                    <li class="nav-item">
                      <a class="btn btn-success" href="{{url("/users/{$user->user_id}/edit")}}">
                        <span data-feather="edit"></span>
                        Güncelle
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-danger  list-item-delete" href="{{route('delete',$user->user_id)}}">
                        <span data-feather="trash-2"></span>
                        Sil
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-warning " href="/users">
                        <span data-feather="lock"></span>
                        Sifre deyisdir
                      </a>
                    </li>
                  </ul>
                </td>
                </td>
              </tr>
              @endforeach
              @else
              <tr>
                <td colspan="5">Istifadeci tapilmadi</td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </main>
    </div>
  </div>

  <script type="text/javascript" src="{{asset('build/assets/js/app.js')}}"></script>
</body>

</html>