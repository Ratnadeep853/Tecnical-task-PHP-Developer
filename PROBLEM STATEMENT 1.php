<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratnadeep Dasgupta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <form class="card col-md-6 mx-auto p-5" method="post">

        <div class="form-group">
            <label for="server">Server</label>
            <input type="number" class="form-control" placeholder="Enter No of Servers" name="server" required />
        </div>
        <div class="form-group">
            <label for="ar">Array</label>
            <input type="text" class="form-control" placeholder="Enter Values separated by (,) i.e. 10,60,50,15,20" name="ar" required />
        </div>
        <button class="btn btn-block btn-primary" type="submit">Submit</button>
    </form>

    <div class="col-md-6 mx-auto mt-5">
        <div class="card">
            <div class="card-header">Results</div>
            <div class="card-body">
                <?php
                if (isset($_POST['server']) && isset($_POST['ar'])) {
                    $server = $_POST['server'];

                    $ar = explode(",", $_POST['ar']);

                    echo "<ol>";
                    for ($i = 0; $i < count($ar); $i++) {
                        if ($ar[$i] < 50) {
                            $server = $server / 2;
                        } else {
                            $server = 2 * $server + 1;
                        }

                        echo "<li>" . $server . "</li>";
                    }
                    echo "</ol>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>