<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway';
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/mail') }}">Mail(Send welcome message)</a>
                    <a href="{{ url('/customerlogin') }}">Customer Login</a>
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="container">
                <h1>Collections</h1>
                <h2>Collections implode and remainder</h2>
                <div class="row">
                    @if(isset($users))
                        {{$users -> implode("name", ",")}}
                    @endif
                </div>
                <div class="row">
                    @if(isset($users))
                        @foreach($users as $user)
                            {{$user->name}}{{$loop->remaining ? ',' : ''}}
                        @endforeach
                    @endif
                </div>
                <h1>Pagination and collection(first & last)</h1>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($users))
                                @foreach($users as $user)
                                    <tr>
                                        <td class="{{ $loop->last ? 'bg-danger' : '' }}">{{ $user->name }}</td>
                                        <td class="{{ $loop->first ? 'bg-primary' : '' }}">{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $users->links() }}
            </div>
        </div>
    <style src="/js/app.js"></style>
    </body>
</html>
