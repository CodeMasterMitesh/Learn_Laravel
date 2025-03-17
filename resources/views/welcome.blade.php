<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body>
        <div><h1>Welcome To Patel Web Solution</h1></div>
        <a href="/aboutus">About Us</a>
        {{-- @php
            echo"<br>";
        @endphp --}}


        {{ 5 + 4 }}
        {!! "<br>" !!}
        {{"<h1>Hello World</h1>" }}
        {!! "<br>" !!}
        {!! "<h1>Hello World</h1>"!!}
        {{-- {!! "<script>alert('Welcome To Patel Web Solution');</script>"!!} --}}
        {{"<script>alert('Welcome To Patel Web Solution');</script>"}}

        @php
            $fruitName = ["Apple","Banana","Orange","Mango","Kiwi"];
            // $fruitName = [];
            $EmployeeData = ["name"=>"Mitesh","mobile"=>"903389873","dob"=>"18-08-1993"];

            $age = 17;


        @endphp

        {{-- @foreach ($fruitName as $item)
        {!! "<p>$item</p>"!!}
        @endforeach --}}



        @if ($age >= 18)
            {!! "<h1>You Can Vote</h1>"!!}
        @else
             {!! "<h1>You Can't Vote</h1>"!!}
        @endif


        @forelse ($fruitName as $item)
         {!! "<p>$item</p>"!!}
        @empty
        {!! "<h1>No Data</h1>"!!}
        @endforelse


        @forelse ($EmployeeData as $key => $value)
         {!! "<p>$key-$value</p>"!!}
        @empty
        {!! "<h1>No Data</h1>"!!}
        @endforelse










    </body>
</html>
