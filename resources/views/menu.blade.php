<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu - Konogawa</title>
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
                            <a class="nav-link active fs-5" style="color: var(--bs-blue)" aria-current="page">Our Menu</a>
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
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-5 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/mentai.jpg')}}" alt="Mentai Series">
                </div>
                <div class="col-lg-7 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary pt-lg-4">Mentai Series / メンタイシリース</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Mofu Mofu Tamago</span><br>
                        ( Soft omelette egg showered with our special mentai sauce, will guarantee you a sweet experience )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Orenji Chikin</span><br>
                        ( Fresh chicken cooked with our OG mentai sauce, served with love and rice )</p>
                    {{-- @foreach ($category1 as $category1)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category1->name}}</span><br>
                            ( {{$category1->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 order-lg-2 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/katsu-vacation.jpg')}}" alt="Katsu Series">
                </div>
                <div class="col-lg-7 order-lg-1 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-5 pt-lg-3">Katsu Series / カツシリース</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Katsu the OG</span><br>
                        ( Our specialty Chicken Katsu served with tonkatsu sauce, rice, side dish, and love )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Katsu Deep Orange Sea</span><br>
                        ( Our specialty Chicken Katsu served with tonkatsu sauce, rice, side dish, and love )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Katsu In Vacation</span><br>
                        ( Imagine your katsu visiting Bali, spicy, umami, tropical, and perfection )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Kare Katsu</span><br>
                        ( Chicken katsu teamed up with Konogawa homemade curry, best combi ever! )</p>
                    {{-- @foreach ($category2 as $category2)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category2->name}}</span><br>
                            ( {{$category2->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 text-lg-center mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-0">Rice Box / ライスボックス</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Kono Spicy</span><br>
                        ( Mysterious spice, dark, and bold. You will like this! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Teriyaki Sauce</span><br>
                        ( Spicy, like your neighbour mouth )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Honey Glazed</span><br>
                        ( Original taste from east island, sweet yet also umami )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chicken Salted Egg</span><br>
                        ( Honey, yes, sweet and tasty! )</p>
                    {{-- @foreach ($category3 as $category3)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category3->name}}</span><br>
                            ( {{$category3->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 mt-5 pt-lg-4">
                    <img style="border-radius: 10%" class="img-fluid mt-5" width="500" height="500" src="{{url('/images/snack-platter.jpg')}}" alt="Snack">
                </div>
                <div class="col-lg-7 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-0">Snack / スナック</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Konoswich</span><br>
                        ( You will never experience this kind of sandwich ever in your life, buy it! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Fureido Potato</span><br>
                        ( Ahh yess, simple yet also tasty, potato will never betray you )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Tempe Mendo</span><br>
                        ( Javanese fried soybean cake, Perfection )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Cheerful Somay</span><br>
                        ( Colorful dumplings will take you to new heights of taste! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Tempoora</span><br>
                        ( We are so sorry that you are getting more chubby, fried food will never give you up though! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Mini Platter</span><br>
                        ( Hungry? But not sure what to get? Get this! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Snack Platter</span><br>
                        ( Still hungry? Okay, get this instead )</p>
                    {{-- @foreach ($category4 as $category4)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category4->name}}</span><br>
                            ( {{$category4->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 order-lg-2 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/cheerful-dango.jpg')}}" alt="Dessert">
                </div>
                <div class="col-lg-7 order-lg-1 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-5">Dessert / デザート</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Cheerful Dango</span><br>
                        ( Feels like you're taking a walk in a Japanese festival )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Mitarashi Dango</span><br>
                        ( You are in Kyoto, walking with your lover while flirting with them )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Tanghulu</span><br>
                        ( You are a child, you like sweets, nostalgic guaranteed! )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Gedangage</span><br>
                        ( Take it with your friend, or don't share it. It's so tasty! Fried Banana, chocolate sauce, and powdered sugar )</p>
                    {{-- @foreach ($category5 as $category5)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category5->name}}</span><br>
                            ( {{$category5->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/split-shot.jpg')}}" alt="Coffee Based">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-4">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-1">Coffee Based / コーヒーベースー</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Americano</span><br>
                        ( Hot Water, Espresso )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Cafe Latte</span><br>
                        ( Milk, Espresso )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Cappucino</span><br>
                        ( Espresso, Milk )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Espresso</span><br>
                        ( Coffee Extraction )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Split Shot</span><br>
                        ( Double Shot Espresso )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Picollo</span><br>
                        ( Smoll Latte )</p>
                    {{-- @foreach ($category6 as $category6)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category6->name}}</span><br>
                            ( {{$category6->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 order-lg-2 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/caramel-latte.jpg')}}" alt="Latte and Friends">
                </div>
                <div class="col-lg-7 order-lg-1 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-5">Latte and Friends / ラテと友達</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Butter Scotch Latte</span><br>
                        ( Espresso, Heated Fresh Milk, Butterscotch Syrup )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Vanilla Latte</span><br>
                        ( Espresso, Heated Fresh Milk, Vanilla Syrup )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Caramel Latte</span><br>
                        ( Espresso, Heated Fresh Milk, Caramel Syrup )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Mochaccino</span><br>
                        ( Espresso, Milk, Chocolate )</p>
                    {{-- @foreach ($category7 as $category7)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category7->name}}</span><br>
                            ( {{$category7->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/red-velvet.jpg')}}" alt="Coffee For Another Day">
                </div>
                <div class="col-lg-7 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-0">Coffee For Another Day / 別の日のコーヒー</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Hojicha</span><br>
                        ( Milk, Roasted Green Tea )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Matcha</span><br>
                        ( Milk, Green Tea )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Chocholate</span><br>
                        ( Chocolate, Milk )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Red Velvet</span><br>
                        ( Milk, Flavoured Cake )</p>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Babycino</span><br>
                        ( Steamed Milk With Chocolate Powder On Top )</p>
                    {{-- @foreach ($category8 as $category8)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category8->name}}</span><br>
                            ( {{$category8->description}} )</p>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 order-lg-2 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/tea-raichi.jpg')}}" alt="Don't Spill It">
                </div>
                <div class="col-lg-7 order-lg-1 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary">Don't Spill It / こぼさないでください</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Remon Tea</span><br>
                        ( Classic tea with homemade honey-lemon mixture, garnished with lemon slice )</p>
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Raichi Tea</span><br>
                        ( Classic lychee tea )</p>
                    {{-- @foreach ($category9 as $category9)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category9->name}}</span><br>
                    @endforeach --}}
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 mt-5">
                    <img style="border-radius: 10%" class="img-fluid" width="500" height="500" src="{{url('/images/osaka-red-district.jpg')}}" alt="Konogawa Special Signature">
                </div>
                <div class="col-lg-7 mt-5">
                    <h2 class="featurette-heading fw-normal lh-1 text-primary mt-lg-4">Konogawa Special Signature</h2>
                    <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Kono-Ice Coffee</span><br>
                        ( Special Recipe for You )</p>
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Gawa-Ice Coffee</span><br>
                        ( Special Recipe for Sweet Tooth )</p>
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Osaka Red District</span><br>
                        ( Rosella, Based with Milk )</p>
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">Pikotaro Boost</span><br>
                        ( Out Special Coffee Mocktail )</p>
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">???</span><br>
                        ( Mysterious Drink )</p>
                    {{-- @foreach ($category10 as $category10)
                        <p class="lead fs-5 ms-1"><span class="fw-bold fs-4">{{$category10->name}}</span><br>
                            ( {{$category10->description}} )</p>
                    @endforeach --}}
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