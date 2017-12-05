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
        <script type="text/javascript" src="{{URL::asset('js/artist.js')}}"></script>

    </head>
    <body>
       <h>Artists</h>
        <div class = "">
            <h>Selected artist</h>
            <ul>
                @foreach ($lists as $list)
                    <li>Artist Name: {{ $list->aname }}<br>
                        Artist type: {{ $list->atype }}<br>
                        Artist Description: {{ $list->adescription }}<br>
                        <div class="container">
   
                            <h1>Artist Name: {{ $list->aname }}</h1>
                            
                            <iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:<?php echo $list->aid; ?>&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe>
                            
                            <h2>Artist's top 10 albums:</h2>
                            <p>Click an album cover to hear a 30 second preview, or click the button to play the album on Spotify!</p><br />
                            
                        @for ($i = 0; $i < 10; $i++)
                        </div>
                            <iframe src="https://open.spotify.com/embed?uri=spotify%3Aalbum%3A<?php echo $albumlists[$i]->alid; ?>&theme=white" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                        @endfor
                        
                    </li>
                @endforeach
           </ul>
        </div>


    </body>
</html>
