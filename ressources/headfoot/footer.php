</div>
</div>

</main>
<footer>
    <div class="footerMenu">
        <var>
            <ul>
                <li><a href="../Politiques Confid/Politique_de_confidentialité.php">Politique de confidentialité</a></li>
                <li><a href="../Mentions Légales/MentionLegale.php">Mentions légales</a></li>
                <li><a href="../Contact/contact.php">Nous contacter</a></li>
            </ul>
        </var>
    </div>
    <div class="copyright">
        <p>© Copyright – Krobi</p>
    </div>
    <script type="text/javascript">
        /*document.getElementById("toggle").onclick = function(event) {
        if (document.getElementById("mainNav").getAttribute("style") == "visibility: hidden;") {
            document.getElementById("mainNav").setAttribute("style", "visibility: visible;");
        } else {
            document.getElementById("mainNav").setAttribute("style", "visibility: hidden;");
        }
    }*/
        var width = window.innerWidth;
        //alert("Votre résolution d'écran est: " + width);
        if (width == 1200 && document.getElementById("toggle").getAttribute("style") == "visibility: hidden;") {
            alert("Votre résolution d'écran est: " + width);
            document.getElementById("toggle").setAttribute("style", "visibility: visible;")
            document.getElementById("toggle").onclick = function(event) {
                if (document.getElementById("mainNav").getAttribute("style") == "visibility: hidden;") {
                    document.getElementById("mainNav").setAttribute("style", "visibility: visible;");
                } else {
                    document.getElementById("mainNav").setAttribute("style", "visibility: hidden;");
                }
            }
        } else {
            document.getElementById("toggle").setAttribute("style", "visibility: hidden;");
        }
    </script>

</footer>
</body>

</html>