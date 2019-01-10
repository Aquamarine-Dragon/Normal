<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome, Boss</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="//cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<div id="title" style="text-align: center;">
    <h1>Welcome, Boss</h1>
    <div style="padding: 5px; font-size: 16px;">Enjoy victory, wish all orders and glories belong to you.
    </div>
</div>
<hr>
<div id="content">
    <ul>
        @foreach ($boss as $Boss)
            <li style="margin: 50px 0;">
                <div class="title">
                    <a href="{{ url('Boss/'.$Boss->id) }}">
                        <h4>{{ $Boss->name }}</h4>
                    </a>
                </div>
                <div class="body">
                    <p>AttackForce:
                        {{ $Boss->AttackForce }}</p>
                    <p>
                        HP:
                        {{$Boss->HP}}
                    </p>
                </div>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>