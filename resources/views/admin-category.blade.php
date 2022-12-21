<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Konogawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand fixed-top border-bottom" style="background-color: #FFFFFF">
            <div style="width: 100%" class="container-fluid">
                <a class="navbar-brand">
                    <img src="{{url('/images/logo.png')}}" alt="Logo" width="100%" height="50">
                </a>
                <button id="buttonToggler" class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="textAdminPanel" class="navbar-nav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-4">
                            <a class="nav-link active fs-5" style="color: var(--bs-blue)" aria-current="page">Admin Panel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div style="width: 100%" class="container-fluid">
            <div class="row">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3 sidebar-sticky">
                        <h4 class="text-center fw-bold">Menu</h4>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/order">
                                    <i class="bi bi-cart"></i>
                                    <span class="align-text-bottom"></span>
                                    Order
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" style="color: var(--bs-blue)">
                                    <i class="bi bi-tag"></i>
                                    <span class="align-text-bottom"></span>
                                    Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/product">
                                    <i class="bi bi-cup-hot"></i>
                                    <span class="align-text-bottom"></span>
                                    Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/user">
                                    <i class="bi bi-people"></i>
                                    <span class="align-text-bottom"></span>
                                    User
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/admin/admin">
                                    <i class="bi bi-person-lock"></i>
                                    <span class="align-text-bottom"></span>
                                    Admin
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Manage Categories</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->category}}</td>
                                    <td>
                                        <a class="btn btn-warning" href="#" role="button"><i class="bi bi-pencil"></i> Edit</a>
                                        <a class="btn btn-danger" href="#" role="button"><i class="bi bi-trash"></i> Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <a class="btn btn-primary" href="#" role="button"><i class="bi bi-plus"></i> Create New Category</a>
                        </div>
                        <div class="col-lg-6 mt-4">
                            {{$categories->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%" class="container-fluid mt-5">
            <footer class="d-flex flex-wrap justify-content-end py-3 my-4 border-top">
                <ul class="col-md-4 justify-content-end d-flex">
                    <a href="/" class="link-primary">Back to Main Website</a>
                </ul>
            </footer>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>