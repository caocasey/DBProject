<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <title>Project</title>


        <!-- Styles -->
        <style>
 
        </style>
        <link rel="stylesheet" href="{{ URL::asset('css/index.css')}}" />

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/search.js')}}"></script>

    </head>
    <body>
      <h>Search result</h>
      <div class="searchForm">
            <form enctype="multipart/form-data" id="createForm" action="{{url('search')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="keyword">Keyword：</label></td>
                        <td><input type="text" id="keyword" name="keyword" /></td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <div>
                                <input id = "search" type="submit"  value="Search now" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>

        <div class = "searchResult">
            <ul>
                @foreach ($searchTrack as $s)
                    <li>Track Title: {{ $s->ttitle }}<br>
                        Track duration: {{ $s->duration }}<br>
                        Track genre: {{ $s->tgenre }}<br>
                        Made by: {{ $s->artistname }}<br>
                       
                      
                        </div>
                            <iframe src="https://open.spotify.com/embed?uri=spotify%3Atrack%3A<?php echo $s->tid; ?>" width="300" height="80" frameborder="0" allowtransparency="true"></iframe>
                        </div>
                        

                    </li>
                @endforeach
           </ul>
        </div>

    </body>
    <footer>
        @include('includes.footer')
    </footer>
</html>
