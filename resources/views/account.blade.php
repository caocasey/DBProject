<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>
 
        </style>
        <link rel="stylesheet" href="{{ URL::asset('')}}" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/index.js')}}"></script>

    </head>
    <body>
       <h>Account</h>
       <div class = "">
            <h>Hello</h>
            <ul>
                @foreach ($lists as $list)
                    <li>Name: {{ $list->uname }}<br>
                        Email: {{ $list->uemail }}<br>
                        Sex: {{ $list->usex }}<br>
                        Birthday: {{ $list->dbirth }}<br>
                        Country: {{ $list->country }}<br>
                        State: {{ $list->state }}<br>
                        City: {{ $list->city }}<br>
                        Zip: {{ $list->zip }}<br>
                        Phone: {{ $list->uphone }}<br>
                    </li>
                @endforeach
           </ul>
        </div>


    </body>
</html>
