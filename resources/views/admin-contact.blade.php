<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel - Konogawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
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
                                <a class="nav-link" href="/admin/category">
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
                                <a class="nav-link" href="/admin/news">
                                    <i class="bi bi-newspaper"></i>
                                    <span class="align-text-bottom"></span>
                                    News
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
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" style="color: var(--bs-blue)">
                                  <i class="bi bi-envelope-paper"></i>
                                  <span class="align-text-bottom"></span>
                                  Contact Us Message
                              </a>
                          </li>
                        </ul>
                    </div>
                </nav>
                <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
                        <h1 class="h2">Manage Messages</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>
                                @foreach ($contactFormsData as $contactFormData)
                                <tr>
                                    <td>{{$contactFormsData->perPage()*($contactFormsData->currentPage()-1)+$count}}</td>
                                    <?php $count++; ?>
                                    <td>{{$contactFormData->name}}</td>
                                    <td>{{$contactFormData->email}}</td>
                                    <td>{{$contactFormData->subject}}</td>
                                    <td>{{$contactFormData->message}}</td>
                                    <td>
                                        <button type="button" class="deleteButton btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteContactForm" data-id="{{$contactFormData->id}}"><i class="bi bi-trash"></i> Delete</button>
                                        <div class="modal fade" id="deleteContactForm" tabindex="-1" aria-labelledby="deleteContactFormLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="deleteContactFormLabel">Delete Message Data</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form id="deleteContactFormOrder" action="{{ route('admin.contact.delete', '') }}" method="GET">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <p id="deleteContactFormText">You are about to delete one contact form message from the list!</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Confirm</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            $(document).on('click', '.deleteButton', function () {
                                                var contactFormID = $(this).data('id');
                                                $('#deleteContactFormOrder').submit(function () {
                                                    var action = '{{ route('admin.contact.delete', ':id') }}';
                                                    action = action.replace(':id', contactFormID);
                                                    $(this).attr('action', action);
                                                });
                                            });
                                        </script>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-center">
                      <div class="col-lg-6"></div>
                      <div class="col-lg-6 mt-4">
                          {{$contactFormsData->links()}}
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>