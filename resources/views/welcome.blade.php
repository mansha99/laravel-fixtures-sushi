<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body style="margin-top:100px">
    <div class="container">
        <h3>Continent</h3>
        <div>
            Code : <b>{{ $europe->code }}</b> and name is <b>{{ $europe->name }}</b>
        </div>

        <h3>All Signs</h3>
        <table class="table table-bordered">
            @foreach ($signs as $record)
                <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->name }}</td>
                    <td>{{ $record->symbol }}</td>
                    <td>{{ $record->daterange }}</td>
                </tr>
            @endforeach
        </table>

    </div>
</body>

</html>
