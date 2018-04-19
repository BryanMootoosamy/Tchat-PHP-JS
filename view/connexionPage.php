            <section class="form">
                <div class="titre">
                    <h1>Bienvenue sur ThanaTchat</h1>
                </div>
                <div class="content">
                    <section class="log">
                        <h3>S'incrire</h3>
                        <form class="signUp" action="index.php" method="post">
                            <p>Nom d'utilisateur: </p><input type="text" name="username" value="">
                            <p>Email: </p><input type="mail" name="email" value="">
                            <p>Mot de passe: </p><input type="password" name="password" value="">
                            <p>Confirmez votre mot de passe</p><input type="password" name="passwordConfirm" value="">
                            <p>Combien font 3x6 ? </p><input type="text" name="honeypot" value="">
                            <button type="submit" name="sign">S'enregistrer</button>
                        </form>
                    </section>
                    <section class="sign">
                        <h3>Se Connecter</h3>
                        <form class="signIn" action="index.php?action=tchat" method="post">
                            <p>Email: </p><input type="text" name="emailLog" value="">
                            <p>Mot de passe: </p><input type="password" name="passwordLog" value="">
                            <button type="submit" name="log">Se Connecter</button>
                        </form>
                    </section>
                </div>
            </section>
