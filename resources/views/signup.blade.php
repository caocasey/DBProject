<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>

        <!-- Styles -->
        <style>
 
        </style>

        <!-- js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="{{URL::asset('js/signup.js')}}"></script>
    </head>
    <body>
    
    <div></div>
       <div class = "signup1">
        <div>
            <p>Please signup</p>
        </div>

        <div class="signup2">
            <form enctype="multipart/form-data" id="createForm" action="{{url('users/sign_up')}}" method="POST"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                <table border="0" cellspacing="50">
                    <tr>
                        <td><label for="uname">User Name<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="uname" name="uname" /></td>
                    </tr>
                    <tr>
                        <td><label for="urname">First/Last Name<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="text" id="urname" name="urname" /></td>
                    </tr>
                    <tr>
                        <td><label for="password1">Password<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="password" id="password1" name="password1" /></td>
                    </tr>
                    <tr>
                        <td><label for="password2">Retype Password<span style="color:#ff7900"> *</span>：</label></td>
                        <td><input type="password" id="password2" name="password2" /></td>
                    </tr>
                    <tr>
                        <td><label for="uemail">Email:</label></td>
                        <td><input type="utext" id="email" name="uemail" /></td>
                    </tr>
                    <tr>
                        <td><label for="usex">Sex:</label></td>
                        <td><input type="text" id="usex" name="usex" /></td>
                    </tr>
                    <tr>
                        <td><label for="dbirth">Birthday:</label></td>
                        <td class="dbirth"><input type="date" id="dbirth" name="dbirth" value=""/></td>
                    </tr>
                    <tr>
                        <td><label for="country">Country: </label></td>
                        <td><input type="text" id="country" name="country" /></td>
                    </tr>
                    <tr>
                        <td><label for="state">State:</label></td>
                        <td><input type="text" id="state" name="state" /></td>
                    </tr>
                    <tr>
                        <td><label for="City">City:</label></td>
                        <td><input type="text" id="city" name="city" /></td>
                    </tr>
                    <tr>
                        <td><label for="sex">Zip: </label></td>
                        <td><input type="text" id="zip" name="zip" /></td>
                    </tr>
                    <tr>
                        <td><label for="uphone">Phone:</label></td>
                        <td><input type="text" id="uphone" name="uphone" /></td>
                    </tr>
                    
                    <tr>
                        <td colspan=2>
                            <div>
                                <input id = "signup" type="submit"  value="Register now" />
                            </div>
                        </td>
                    </tr>
                </table>
            </form> 
        </div>
    </div>

    </body>
</html>
