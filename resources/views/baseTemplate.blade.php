<html>

<head>

    <title>@yield('title')</title>

    <style>
        .wrapper {
            max-width: 1440px;
            display: flex;
            flex-direction: column;
            align-content: center;
        }
    </style>

</head>

    <body>

    <div class="wrapper">

        <div class="header">
            <h1>Хедер для всех страничек :)</h1>
        </div>

        <div class="content">
            <h2>@yield('content')</h2>
            <hr>

            @if (count($products))
                @foreach($products as $product)
                    <h4>{{$product['name']}} : {{$product['price']}}<br/></h4>
                @endforeach
            @else
                <h6>Слова не были переданы</h6>
            @endif

        </div>

        <div class="footer">
            <h3>Футер для ввсех страничек :(</h3>
        </div>

    </div>

    </body>

</html>
