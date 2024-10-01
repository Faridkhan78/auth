<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-6 mb-3">
                <h2>Welcome, {{Auth::user()->name}} </h2>
                {{Auth::user()}}
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <a href="{{route('inner')}}" class="btn btn-primary">Go to innerPage</a>
                <a href="{{route('logout')}}" class="btn btn-danger">Logout</a>

            </div>
        </div>


    </div>
</body>

</html>
