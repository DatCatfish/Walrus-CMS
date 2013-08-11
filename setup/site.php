<?php
/**
 * Walrus CMS
 * by DatCatfish (http://catfish.x10.mx/)
 *
 * All source is licensed under the GNU Public License (GNU):
 * https://gnu.org/licenses/gpl.html
 */

// Use var_export() here
$ms_data = '<?php\n$$mysql_server = $server_str;\nmysql_db = $db_str';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Walrus CMS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</head>

<body>

<div class="container" style="padding-top: 25%">
    <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Step 2 of 3 <small>Site Settings</small></h3></div>
        <form class="form-horizontal" action="setup.php">
            <div class="form-group">
                <label for="inputSiteName" class="col-lg-2 control-label">Site Name: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSiteName" placeholder="The Name of your site">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSiteDesc" class="col-lg-2 control-label">Site Description: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSiteDesc" placeholder="A brief description of your site">
                </div>
            </div>
            <div class="form-group">
                <label for="inputSiteURL" class="col-lg-2 control-label">Site URL: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputSiteURL" placeholder="http://example.com/">
                </div>
            </div>

            <h4>Admin Account</h4>

            <div class="form-group">
                <label for="inputFullName" class="col-lg-2 control-label">Full Name: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputFullName" placeholder="Full name">
                </div>
            </div>

            <div class="form-group">
                <label for="inputUsername" class="col-lg-2 control-label">Username: </label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password: </label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
            </div>

            <button class="btn btn-primary pull-right">Next</button>
            <br /><br />
        </form>
    </div>

</div>

</body>

</html>
