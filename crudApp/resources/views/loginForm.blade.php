<body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-7  p-2 bd-highlight" style="margin: auto;">
                    <h4>Welcome to Wrkva!</h4>
                    <p>We are here to providing email services.</p>
                </div>

                <div class="col-md-5 ">
                    <h1 class="text-center">Create Account</h1>

                    <div class="form-group">
                        <form action="{{route('loginPageName')}}" method="post">
                            {{ csrf_field() }}
                          
                            <span id="error_email"></span>
                            <div class="input-group mb-3">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="Select Your Username" aria-label="Recipient's username"
                                    aria-describedby="basic-addon2">
                               

                            </div>

                            <div class="col-auto mb-3">
                                <label for="inputPassword2" class="visually-hidden">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="d-grid gap-2  mx-auto ">
                                <button class="btn btn-primary me-md-2" id="login" disabled
                                    type="submit">Login</button>

                            </div>
                            <p>Don't have an account? Please <a href="index">Signup Here</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
        $(document).ready(function() {

            $('#email').blur(function() {
                var error_email = '';
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var _token = $('input[name="_token"]').val();
                var filter = /^([a-zA-Z0-9_\.\-]{3,77})+$/;
                // alert(email);
                // alert(_token);
                if (!filter.test(email)) {
                    // $('#error_email').html('<label class="text-danger">Invalid Email</label>');
                    $('#email').addClass('is-invalid');
                    $('#register').attr('disabled', 'disabled');
                    $('.text-danger').css('display', 'none');

                    // password filter

                } else {
                    $.ajax({
                        url: "email_check",
                        method: "POST",
                        data: {
                            email: email,
                            _token: _token,
                            fname:fname,
                            lname:lname,
                            password:password
                        },
                        success: function(result) {
                            // alert(result);
                            if (result == 'unique') {
                                $('#error_email').html(
                                    // '<label class="text-success">Email Available</label>'
                                );
                                $('#email').removeClass('is-invalid');
                                $('#email').addClass('is-valid');
                                $('#register').attr('disabled', false);
                                $('.text-danger').css('display', 'none');
                            } else {
                                $('#error_email').html(
                                    '<label class="text-danger">Email not Available</label>'
                                );
                                $('#email').addClass('is-invalid');
                                $('#register').attr('disabled', 'disabled');
                            }
                        }
                        // ,error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        // alert("Error: " + errorThrown); 
                        // }
                    })
                }
            });

        });
        </script>


    </body>