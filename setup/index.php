<?php
/**
 * Walrus CMS
 * by DatCatfish (http://catfish.x10.mx/)
 *
 * All source is licensed under the GNU Public License (GNU):
 * https://gnu.org/licenses/gpl.html
 */

$ms_file = '../includes/mysql.php';
$can_proceed = true;
$handle = fopen($ms_file, 'w') or $can_proceed = false;
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
    <div class="jumbotron">
        <h1>Hello, world!</h1>
        <p>Welcome to Walrus, the <em>new</em> Content Management System. (This is just placeholder text)</p>
        <?php
        if($can_proceed) {
            echo('<p><a class="btn btn-primary btn-lg" href="database.php">Get Started &raquo;</a></p>');
        }
        ?>
    </div>
    <?php
    echo('<div class="alert alert-danger">
            <strong>Oh Snap!</strong> Couldn\'t create the database configuration file. You need to <a data-toggle="modal" href="#permsModal" class="alert-link">allow for the file to be created</a> before continuing.
          </div>');
    ?>

    <div class="modal fade" id="permsModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Setting permissions</h4>
                </div>
                <div class="modal-body">
                    <? //TODO: Add Modal text ?>
                    <p>TODO: ADD THIS&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="history.go(0)">Refresh</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>



</body>

</html>
