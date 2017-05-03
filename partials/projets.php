<div class="projets scrollspy">
    <div class="col s12 m12 l12 <?php echo $divColor; ?>">
        <h4 id="projets">Projets</h4>
    </div>

    <?php
    $projects = array();
    array_push($projects, "chess.php");
    array_push($projects, "macbernick.php");
    array_push($projects, "memoire.php");
    array_push($projects, "gemao.php");
    array_push($projects, "nuit_info.php");
    array_push($projects, "bataille_navale.php");
    array_push($projects, "betisier.php");
    array_push($projects, "pygame.php");
    ?>

    <ul class="collapsible" data-collapsible="accordion">
        <?php
        foreach ($projects as $project) {
            require_once('projets/' . $project);
        }
        ?>

    </ul>

    <div class="col s12 l12 m12 center">
        <p>
            <b>
                Vous voulez voir plus de projets ? Jetez donc un oeil à mon dépôt
                <a href="https://github.com/sylvainmetayer">GitHub</a>
                et <a href="https://gitlab.com/u/ocyhc">GitLab</a> !
            </b>
        </p>
    </div>

</div>