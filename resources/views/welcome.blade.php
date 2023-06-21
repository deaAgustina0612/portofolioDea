<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-4">

                </div>
                
                <div class="col-4 py-5 mt-3">
                    <div class="card">

                    {{-- <div class="card-header"> --}}
                    <div class="card text-bg-light py-3">
                    <h2 class="pt-3 text-center">Sign In</h2>
                    {{-- </div> --}}
                    <div class="card-body">
                    <form action="{{url('auth')}}" method="post">
                        @csrf
                        <div class="form-group mt-3 ">
                            {{-- <label for="">Email</label> --}}
                            <input type="email" class="form-control"  name="email" placeholder="E-mail" required>
                        </div>
                        <div class="form-group mt-3">
                            {{-- <label for="">Password</label> --}}
                            <input type="password" class="form-control" name="password" placeholder="password" required>
                        </div>
                        <button type="submit" class="w-100 btn btn-primary mt-3">Sign In</button>
                        <div>
                        <center><p>Don't have an account?      <a href="register">Sign Up</a></p></center>
                        </div>
                    </form>
                    </div>
                    {{-- <div class="card-footer text-center"><p>&copy; dea</p></div> --}}
                </div>
            </div>
        </div>
                <div class="col-4">

                </div>
            </div>
        </div>
</body>
</html>