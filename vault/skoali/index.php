<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../../includes/views/head.php'); ?>
    <title>Skoali | Summer Hoax Club!</title>
</head>

<body>
    <div class="container">
        <?php include_once('../../includes/views/navbar.php'); ?>
        <div class="jumbotron">
            <h1 class="display-4">Skoali</h1>
            <p class="lead">All about Jules Durand and his Summer Host named Skoali</p>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- PROOF -->
                        <h3>Proof:</h3>
                        <p>You'll need a french translator to understand lmao.</p>
                        <img alt="Proof" src="proof/1.png" style="max-width: 100%;margin: 0 auto;display: block;">
                        <img alt="Proof" src="proof/2.png" style="max-width: 100%;margin: 0 auto;display: block;">
                        <img alt="Proof" src="proof/3.png" style="max-width: 100%;margin: 0 auto;display: block;">
                    </div>
                    <h5 class="text-muted text-center">All information on this website is publically available,<br>
                        therefore it doesn't violate any laws.
                    </h5>
                </div>
                <br>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5>Quick links:</h5>
                        <p class="text-muted">These are quick links related to Skoali/Jules Durand
                        </p>
                        <hr>
                        <ul>
                            <li>
                                <a tabindex="0" data-toggle="popover" title="Information" data-content="{Woah, A popover!}" href="https://www.skoali.fr" target="_blank" id="popover">Skoali Website!</a><br>
                            </li>
                            <li>
                                <a tabindex="0" data-toggle="popover" title="Information" data-content="{Woah, A popover!}" href="https://discord.gg/554DCvV" target="_blank" id="popover">Skoali Discord Server!</a>
                            </li>
                            <li>
								<a tabindex="0" data-toggle="popover" title="Information" data-content="{Woah, A popover!}" href="https://www.skoali.fr/mentionslegales.html" target="_blank" id="popover">Skoali Legal Notices (with a fake siret) (WARNING: written in FRENCH)</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <?php require_once('../../includes/views/scripts.php'); ?>
</body>

</html>
