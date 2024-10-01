<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Login Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('loginMatch')}}" method="POST">
                            @csrf

                            <div class="mb-3 mt-3">
                                <label for="useremail" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="useremail" name="email">
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="userpassword" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="userpassword" name="password">
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="/" class="btn btn-secondary">Back</a>
                        </form>
                    </div>

                    @if ($errors->any())
                        <div class="card-footer text-body-secondary">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>

                        </div>

                    @endif

                </div>
            </div>
        </div>
    </div>

</body>

</html>
