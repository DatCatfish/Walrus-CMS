<?php
/**
 * Walrus CMS
 * by DatCatfish (http://catfish.x10.mx/)
 *
 * All source is licensed under the GNU Public License (GNU):
 * https://gnu.org/licenses/gpl.html
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Walrus CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="../js/bootstrap.js"></script>
</head>

<body>

<div class="container" style="padding-top: 25%">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Step 1 of 3 <small>Database</small></h3></div>
        <form class="form-horizontal" action="site.php">
            <div class="form-group">
                <label for="inputServer" class="col-lg-2 control-label">Database server: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputServer" placeholder="Usually localhost">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDb" class="col-lg-2 control-label">Database name: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputDb" placeholder="Database name">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDbUser" class="col-lg-2 control-label">Database username: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputDbUser" placeholder="Database username">
                </div>
            </div>
            <div class="form-group">
                <label for="inputDbPass" class="col-lg-2 control-label">Password: </label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputDbPass" placeholder="Password">
                </div>
            </div>
            <button class="btn btn-primary pull-right">Next</button>
            <br /><br />
        </form>
    </div>

</div>

</body>

</html>
