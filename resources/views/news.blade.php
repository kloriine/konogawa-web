<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Konogawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/style.css')}}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top border-bottom" style="background-color: #FFFFFF">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="{{url('/images/logo.png')}}" alt="Logo" width="100%" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/" >Home</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/about">About</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/menu">Our Menu</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link active fs-5" style="color: var(--bs-blue)" aria-current="page">News</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/contact-us">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="container text-center mb-5">
                <h2 class="featurette-heading fw-normal lh-1 mt-5">News Center</h2>
                <p class="lead">Read our post to catch up with us!</p>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 1</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis pharetra odio, sit amet vehicula metus. Aenean sagittis nisl quis orci mattis, ut commodo purus pretium. Proin ullamcorper nunc ut mollis pulvinar. Donec id elementum erat. Vivamus vehicula tortor iaculis convallis consequat. Nulla sed posuere enim. Suspendisse potenti. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed porttitor felis dolor, id dapibus nulla porttitor non.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 2</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum ipsum ac posuere semper. Aenean at lorem sed mauris maximus posuere et non nibh. In in venenatis diam. Sed vitae nulla sit amet metus cursus fermentum. Aliquam feugiat tellus eu sem vehicula, at condimentum leo tincidunt. Donec fringilla, ex sed vehicula faucibus, arcu turpis aliquam ante, commodo sodales massa mi tincidunt dui. Maecenas eget rhoncus orci. Duis vestibulum arcu at diam luctus convallis. Donec non libero a nisi eleifend aliquet. Fusce non ornare elit, a condimentum magna.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 3</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sem justo, interdum at pellentesque sed, luctus ac ex. Mauris eget lorem quis quam fringilla egestas. Duis eleifend lacus a leo suscipit, ac interdum dui venenatis. Nunc velit sapien, blandit at rhoncus in, efficitur sit amet ligula. Duis porta, enim vitae sodales varius, mauris nibh condimentum odio, a malesuada magna lorem vel risus. Duis lacinia auctor est, id dapibus libero pulvinar quis. Pellentesque porta auctor nisl tincidunt rhoncus. Cras tristique elit ac pellentesque egestas. Morbi fringilla aliquet convallis. Aenean id leo ut mauris ornare tincidunt. Maecenas tincidunt quam nulla, et efficitur ante posuere in.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 4</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquam vel neque ut posuere. Vestibulum rutrum fringilla dui et pellentesque. Vivamus malesuada est eget sem euismod mattis. Aenean cursus at mauris id malesuada. Donec in ex erat. Aliquam et magna ut massa molestie suscipit et vel magna. Donec lacinia maximus tortor, a ornare lorem consectetur sed. Sed at lacus elementum, dapibus orci consectetur, auctor tortor. Nullam at sapien dolor. Etiam pretium laoreet orci a ultricies. Duis elementum convallis massa eu interdum.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 5</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sit amet consectetur lacus, id faucibus orci. Nullam rutrum ultrices ultrices. Cras lacinia fringilla purus quis malesuada. Quisque tempor, elit sit amet aliquam malesuada, felis mauris rhoncus lorem, quis sagittis lorem turpis ut felis. Praesent ut commodo magna, vestibulum mollis turpis. Donec ultricies rutrum ipsum, at pellentesque ipsum finibus ut. Phasellus porttitor lorem commodo faucibus porta. Aliquam ut velit ultrices, tempus urna eu, viverra nulla. Morbi orci erat, blandit eget ligula mollis, egestas volutpat massa. Morbi ut euismod nunc, non lacinia massa. Donec fringilla felis sit amet interdum luctus. Nulla ut finibus nulla. Suspendisse at lacus ac metus venenatis aliquam ac feugiat turpis.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card border-primary">
                        <img src="{{url('/images/placeholder.jpg')}}" class="card-img-top" alt="Placeholder Image">
                        <div class="card-body">
                            <h5 class="card-title">Post 6</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquet, urna ornare consequat aliquam, magna justo iaculis justo, a scelerisque sem nibh a mauris. Pellentesque vel ante sem. Etiam sodales eleifend eros a dignissim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam congue vitae tortor vehicula fermentum. Etiam sagittis porttitor est, ac mattis nulla consequat at. Pellentesque consequat arcu lectus, id ullamcorper nunc sagittis in. Sed arcu dui, molestie blandit volutpat ac, euismod id nisi. Ut rhoncus tristique iaculis. Donec tincidunt cursus imperdiet. Maecenas volutpat libero vitae lorem auctor, eget scelerisque massa luctus. Aenean fringilla arcu vel dapibus iaculis. Integer id felis ornare, tincidunt nisi ac, condimentum nibh. Integer eleifend efficitur sapien. Nam pretium ante quis rutrum eleifend. Phasellus eget augue ornare, maximus diam accumsan, condimentum risus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </symbol>
        </svg>
        <div class="container mt-5">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex align-items-center">
                    <p>&copy; 2022 Konogawa. All rights reserved.</p>
                </div>
                <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                    <li class="ms-3"><a class="text-muted" href="https://www.instagram.com/konogawa.coffee/" target="_blank"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                </ul>
            </footer>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>