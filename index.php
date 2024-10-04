<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <section class="main-content row">
            <div class="col-12">
                <form action="server.php" method="get">
                    <div class="input-group mb-3">
                        <label for="paragraph" class="form-label"></label>
                        <input type="text" class="form-control" name="paragraph">
                    </div>
                    <div class="input-group mb-3">
                        <label for="badword" class="form-label"></label>
                        <input type="text" class="form-control" name="badword">
                    </div>
                    <button type="submit">Invia</button>
                    <button type="reset">Pulisci i campi</button>
                </form>
            </div>
        </section>
    </main>
</body>

</html>