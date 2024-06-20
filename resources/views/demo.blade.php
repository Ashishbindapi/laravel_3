<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $test = "Ram Say";
        $users = [1,5,6];
        $a = 5;
        $b= 5;
    @endphp
    <h1>{{$test}}  {{$welcome}}  {{$name}} </h1>

    @foreach ($users as $user)
        <h1>{{$user}}</h1>
    @endforeach

    @if ($a > $b)
        <h1>A is Big</h1>
    @elseif ($a <$b)
        <h1>B is Big</h1>
    @else
        <h1>Both are same</h1>
    @endif
</body>
</html>