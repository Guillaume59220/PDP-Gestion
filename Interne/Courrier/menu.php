<header>
    <div class="tab-content">
        <div id="home" class="tab-pane fade">
            <h3>Collaborateurs</h3>
            <p>Some content.</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Clients</h3>
            <p></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3><a href="Courrier" /></h3>
            <ul>
                <li>Ajouter un courrier</li>
                <li>Courrie arrivee</li>
                <li>Courrier sortent</li>
                <li>Historique</li>
                <li>Type courrier</li>
                <li> Recherche</li>

            </ul>
        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Commentaire</h3>
            <p></p>
        </div>
        <div id="menu4" class="tab-pane fade">
                <?php if (isset($_SESSION['id'])) : ?>
                    <form action="index.php" method="post">
                        <input type="hidden" name="form_deconnexion" value="1"/>
                        <button class="btn btn-secondary" type="submit">Deconnexion</button>
                    </form>
                <?php endif; ?>
        </div>
    </div>
</header>