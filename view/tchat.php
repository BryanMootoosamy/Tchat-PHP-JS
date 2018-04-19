        <section class="window">
            <form class="logoff" action="index.php" method="post">
                <button type="submit" name="logoff">Déconnexion</button>
            </form>
            <div class="display">
                <div class="top">
                    <div class="screen" id="screen">
                        <script src="assets/js/ajax.js" charset="utf-8"></script>
                        <script src="assets/js/textLoad.js" charset="utf-8"></script>
                    </div>
                    <div class="userState">
                        <h3>Utilisateurs en ligne</h3>
                        <div class="userOnline" id="userOnline">
                            <script src="assets/js/userOnline.js" charset="utf-8"></script>
                        </div>
                        <h3>Utilisateurs hors ligne</h3>
                        <div class="userOffline" id="userOffline">
                            <script src="assets/js/userOffline.js" charset="utf-8"></script>
                        </div>
                    </div>
                </div>
                <div class="input">
                    <form class="sendMessage"  method="post">
                        <textarea name="message" rows="8" cols="80"></textarea>
                        <button type="submit" name="sendMessage">Envoyer</button>
                    </form>
                </div>
            </div>
        </section>
