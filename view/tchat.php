        <section class="window">
            <form class="logoff" action="index.php" method="post">
                <button type="submit" name="logoff">Déconnexion</button>
            </form>
            <div class="display">
                <div class="top" id="top">
                    <div class="screen" id="screen">
                        <div class="tchatMessage" id="tchatMessage">

                        </div>
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
                        <textarea name="message" rows="8" cols="80" id="textArea"></textarea>
                        <button type="submit" name="sendMessage" id="sendMessage">Envoyer</button>
                        <script src="assets/js/sendMessage.js" charset="utf-8"></script>
                    </form>
                </div>
            </div>
        </section>
        <script src="assets/js/textLoad.js" charset="utf-8"></script>
