<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container" align='center'>
        <form action="formSubmit">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input class="form-control" type="text" required name="name"></td>
                </tr>
                <td>Address</td>
                <td><input class="form-control" type="text" name="address"></td>
                </tr>
                <td>Mob</td>
                <td><input class="form-control" type="text" name="mob"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-primary" type="submit" name="submit" value="Insert Data"></td>
                </tr>
            </table>
        </form>

        <br><br>
        <h1>All Students</h1>
        <table class="table table-bordered table-hover">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Mob</th>
            </tr>

            @foreach($students as $std)
            <tr>
                <td>{{ $std->name }}</td>
                <td>{{ $std->address }}</td>
                <td>{{ $std->mob }}</td>
            </tr>
            @endforeach

        </table>

    </div>
</body>

</html>