<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Simbahan Data Migrations</title>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
<div class="container">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ URL::to('migrate/reflection') }}" files="true" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-2">
                <label for="dataSpreadSheet">Spread Sheet Data: </label>
            </div>
            <div class="col-md-3">
                <input class="form-control" type="file" name="dataSpreadSheet" />
            </div>
        </div>
        <br/>
        <div class="row col-lg-offset-2">
            <input type="submit" class="btn btn-bg btn-primary" />
        </div>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>