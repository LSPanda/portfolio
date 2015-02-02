<footer itemscope itemtype="http://schema.org/WPFooter">
    <div class="footerWidth">
        <section class="aboutMe foot" itemprop="about">
            <h2 class="gamma" itemprop="headline">J'ai une vie en dehors du web&nbsp;?!</h2>
            <p itemprop="text">Jeune infographiste bercé dans le web, me voilà à la finalité de mes études et prêt à m'engager dans la vie active&nbsp;! Je tente à travers mes travaux de trouver l'équilibre entre beauté et accessibilité, à vous d'en juger.</p>
            <p itemprop="text">J'ai bien sûr d'autre passion dans la vie. Un homme d'action derrière les fourneaux et un spectateur assidu devant le petit et grand écran pour n'en citer que deux.</p>
        </section>
        <section id="contact" class="contactMe foot">
            <h2 class="gamma" itemprop="headline">J'aime bien lire des mails, Envoyez-en&nbsp;!</h2>
            <form method="post" action="#contact">
                <fieldset>
                    <label for="nom">Votre nom&nbsp;:</label>
                    <input type="text" name="nom" id="nom" required>
                    <label for="emailContact">Votre mail&nbsp;:</label>
                    <input type="email" name="emailContact" id="emailContact" required>
                    <label for="msg">Votre message&nbsp;:</label>
                    <textarea name="msg" id="msg" cols="10" rows="6" required></textarea>
                    <input id="soumission" type="submit" name="envoi" value="Envoyez&nbsp;!">
                </fieldset>
            </form>
            <?php get_template_part('envoi-contact');?>
        </section>
        <section class="socialMe foot" itemprop="url">
            <h2 class="gamma" itemprop="headline">Je suis partout et nulle part&nbsp;!</h2>
            <ul>
                <li><a class="li" href="https://www.linkedin.com/profile/view?id=297405735&amp;trk=nav_responsive_tab_profile"></a></li>
                <li><a class="t" href="https://twitter.com/SimLeyder"></a></li>
                <li><a class="f" href="https://www.facebook.com/simon.leyder"></a></li>
                <li><a class="g" href="https://plus.google.com/u/0/113254600918242238866/posts"></a></li>
            </ul>
        </section>
    </div>
</footer>
<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-55483750-1');ga('send','pageview');
    </script>
    <?php wp_footer(); ?>
</body>
</html>