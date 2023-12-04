
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acceuil</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css1/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Acceuil</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Ajouts</h6>
                        <a class="collapse-item" href="article">Articles</a>
                        <a class="collapse-item" href="vendeur">Vendeurs</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetab"
                    aria-expanded="true" aria-controls="collapsetab">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                    </a>
                <div id="collapsetab" class="collapse" aria-labelledby="headingtab" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Listes</h6>
                        <a class="collapse-item" href="tabarticle">Article</a>
                        <a class="collapse-item" href="tabvendeur">Vendeur</a>                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-articlek">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
        <x-app-layout>
    <x-slot name="header">
    </x-slot>
    </x-app-layout>
    <br><br><br>
            <!-- Main Content -->
            <div class="container-fluid">
            @if(session('success'))
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif
                <div class="card o-hidden border-0 shadow-lg my-1">
<nav class="navbar navbar-primary bg-primary">
<h1 class="text-center text-white">VENDEURS</h1>
                    <!-- Page Heading -->
</nav>
<form action="{{route('postvendeur')}}" method="POST">
    @csrf
    <div class="container" style="width: 50%; height:600px">
    <br>

<br>
<div class="mb-3">
<label for="idV" class="form-label">id</label>
<input type="text" class="form-control" name="idV" rows="3" placeholder="saisir">
<span class="text-danger">@error('idV'){{$message}}@enderror</span>

</div>
<div class="mb-3">
<label for="nomV" class="form-label">Nom</label>
<input type="text" class="form-control" name="nomV" rows="3" placeholder="saisir">
<span class="text-danger">@error('nomV'){{$message}}@enderror</span>

</div><div class="mb-3">
<label for="prenomV" class="form-label">prenom</label>
<input type="text" class="form-control" name="prenomV" rows="3" placeholder="saisir">
<span class="text-danger">@error('prenomV'){{$message}}@enderror</span>

</div>

    <div class="mb-3">
    <label for="article_id" class="form-label">article</label>
    <select name="article_id" id="" class="form-control"><br>
    <option value="">...</option>
        @foreach($article as $a)
        <option value="{{ $a->id }}">{{ $a->designA}}</option>
        @endforeach
    </select>
    <span class="text-danger">@error('article_id'){{$message}}@enderror</span>

</div>


    <center><button class="btn btn-primary mt-3">Enregistrer</button></center>
</div>
</form>
                </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Zawady@gmail.com</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js1/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js1/demo/chart-area-demo.js"></script>
    <script src="js1/demo/chart-pie-demo.js"></script>

</body>

</html>