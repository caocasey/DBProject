<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Styles -->
        <style>
 
        </style>

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/login.js')}}"></script>

    </head>
    <body>
       <div class = "login1">
        <div>
            <p>Please login</p>
        </div>

        <div class="login2">
            <form enctype="multipart/form-data" id="createForm" action="{{url('users/log_in')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="uname">User Name<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="uname" name="uname" /></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="password" name="password" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan=2>
                            <div>
                                <input id = "login"  type="submit"  value="Login now" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>
    </div>
</html>
