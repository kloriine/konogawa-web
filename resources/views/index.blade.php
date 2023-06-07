<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Konogawa</title>
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
                            <a class="nav-link active fs-5" style="color: var(--bs-blue)" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/about">About</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/menu">Our Menu</a>
                        </li>
                        <li class="nav-item ms-4">
                            <a class="nav-link fs-5" href="/news">News</a>
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
        <div class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{url('/images/konogawa-512.jpg')}}" alt="Konogawa">
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 class="fw-bold text-primary">コ ノ ガ ワ</h1>
                            <p class="fw-bold fs-4">Konogawa Coffee & Culture</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container marketing">
            <div class="row featurette align-items-center pb-5">
                <div class="col-lg-7 order-md-2 mb-5 mb-sm-0">
                    <h2 class="featurette-heading fw-normal lh-1 mt-0 text-primary">Our Story</h2>
                    <p class="lead fs-4 fw-normal">Nestled in the heart of a bustling city, a cafe called "Konogawa" invites customers to escape the hustle and bustle of city life. The exterior of the cafe is adorned with crisp white awnings and blue accents, creating a clean and inviting atmosphere. The interior of the cafe is just as charming, with a blue and white color scheme that is inspired by traditional Japanese design. The walls are painted a soft white hue and adorned with lanterns. The seating area is filled with comfortable Ryokan-styled (Japanese Inn) dining area.</p>
                    <a class="btn btn-primary btn-lg" href="/about" role="button">Read More</a>
                </div>
                <div class="col-lg-5 order-md-1 mb-0 mb-lg-0 mb-md-5">
                    <img style="border-radius: 10%" class="img-fluid mx-auto d-block" width="500" height="500" src="{{url('/images/konogawa-story.jpg')}}" alt="Konogawa">
                </div>
            </div>
        </div>
        <div style="background-color: #f5f5f5">
            <div class="container-fluid text-center">
                <h2 class="featurette-heading fw-normal lh-1 pt-5 mt-0 text-primary">Craving for Something?</h2>
                <p class="lead fs-4 fw-normal">We've got something just for you!</p>
            </div>
            <div class="container-fluid py-5">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{url('/images/katsu-original.jpg')}}" class="card-img-top" alt="Foods">
                            <div class="card-body mx-auto">
                                <h5 class="card-title">Freshly-cooked Dish</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{url('/images/card-beverage.jpg')}}" class="card-img-top" alt="Beverage">
                            <div class="card-body mx-auto">
                                <h5 class="card-title">Diverse Beverages</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{url('/images/mini-platter.jpg')}}" class="card-img-top" alt="Snacks">
                            <div class="card-body mx-auto">
                                <h5 class="card-title">Multiple Snacks</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container text-center pt-5">
                    <a class="btn btn-primary btn-lg" href="/menu" role="button">Explore Our Menu</a>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="featurette-heading fw-normal lh-1 mt-5 text-primary">News</h2>
            <p class="lead fs-4 fw-normal">Find out the latest information about our place.</p>
            @foreach ($news as $new)
                <div class="row mt-5">
                    <div class="col-md-8 col-lg-9 col-xl-10 order-2">
                        <p class="fw-bold pt-xxl-4 fs-4">{{$new->title}}</p>
                        <p class="fw-normal fs-5">{{$new->description}}</p>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2 order-1">
                        <div class="border border-dark p-2">
                            <img class="img-fluid" width="100%" src="{{url($new->img_src)}}" alt="News Image">
                        </div>
                    </div>     
                </div>
            @endforeach
            <div class="container-fluid text-center pt-5">
                <a class="btn btn-primary btn-lg" href="/news" role="button">More News</a>
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
                    <p>&copy; 2023 Konogawa. All rights reserved.</p>
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