<?php
var_dump($_GET);
$oldParagraph = $_GET["paragraph"];

$censoredParagraph = str_ireplace($_GET["badword"], "***", $oldParagraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword answer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="fw-bold t">
                    PHP 8 Badwords answer:
                </h1>

                <h2 class="fw-bold fs-5">
                    Paragraph
                </h2>
                <p>
                    <?php
                    echo $oldParagraph;
                    ?>
                </p>

                <h2 class="fw-bold fs-5">
                    Paragraph length: lunghezza
                    <?php
                    echo strlen($oldParagraph);
                    ?>
                </h2>

                <h2 class="fw-bold fs-5">
                    Censored paragraph:

                </h2>

                <p>
                    <?php
                    echo $censoredParagraph;
                    ?>
                </p>

                <h2 class="fw-bold fs-5">
                    Censored paragraph length: lunghezza
                    <?php
                    echo strlen($censoredParagraph);
                    ?>
                </h2>
            </div>
        </div>
    </main>
</body>

</html>