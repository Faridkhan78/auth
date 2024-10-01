<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="row">
            {{-- {{print_r($errors)}} --}}
            {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div style="color:red">
                    {{$error}}
                </div>
            @endforeach
            @endif --}}
            <div class="col-5 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Registration Form</h3>
                        
                    </div>
                    <div class="card-body">
                        <form action="{{route('registerSave')}}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="username" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="username" name="name">
                                {{-- <span>@error{'name'}{{$message}}@enderror </span> --}}
                                {{-- <span style="color:red">@error{'name'}{{$message}}@error</span> --}}
                                <span style="color: red">@error('name'){{$message}}  @enderror</span> 
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="useremail" class="form-label">Email Address:</label>
                                <input type="email" class="form-control" id="useremail" name="email">
                                <span style="color: red">@error('email'){{$message}}  @enderror</span> 
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="userpassword" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="userpassword" name="password">
                                <span style="color: red">@error('password'){{$message}}  @enderror</span>                                 
                            </div>

                            <div class="mb-3 mt-3">
                                <label for="userpassword-confirm" class="form-label">Confirm Password:</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                    name="password_confirmation">
                            </div>


                            <button type="submit" class="btn btn-primary">Registration</button>
                            <a href="/" class="btn btn-secondary">Back</a>
                        </form>
                    </div>

                     {{-- @if ($errors->any())
                        <div class="card-footer text-body-secondary">
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </div>

                        </div>

                    @endif  --}}


                </div>
            </div>
        </div>
    </div>

</body>

</html>
