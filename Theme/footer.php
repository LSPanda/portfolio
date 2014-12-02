		<footer>
			<div class="footerWidth">
				<section class="aboutMe foot">
					<h3>J'ai une vie en dehors du web&nbsp;?!</h3>
					<p>Jeune infographiste bercé dans le web, me voilà à la finalité de mes études et prêt à m'engager dans la vie active&nbsp;! Je tente à travers mes travaux de trouver l'équilibre entre beauté et accessibilité, à vous d'en juger.</p>
					<p>J'ai bien sur d'autre passion d'en la vie. Un homme d'action derrière les fourneaux et un spectateur assidu devant le petit et grand écran pour n'en citer que deux.</p>
				</section>
				<section id="contact" class="contactMe foot">
					<h3>J'aime bien lire des mails, Envoyer&nbsp;!</h3>
					<form method="post" action="#contact">
						<fieldset>
							<label for="nom">Votre nom&nbsp;:</label>
							<input type="text" name="nom" id="nom" required>
							<label for="email">Votre mail&nbsp;:</label>
							<input type="email" name="email" id="email" required>
							<label for="msg">Votre message&nbsp;:</label>
							<textarea name="msg" id="msg" cols="10" rows="6" required></textarea>
							<input id="soumission" type="submit" name="envoi" value="Envoyez&nbsp;!">
						</fieldset>
					</form>
					<?php get_template_part('envoi-contact');?>
				</section>
				<section class="socialMe foot">
					<h3>Je suis partout et nulle part&nbsp;!</h3>
					<ul>
						<li><a class="li" a href="https://www.linkedin.com/profile/view?id=297405735&trk=nav_responsive_tab_profile"></a></li>
						<li><a class="t" href="https://twitter.com/SimLeyder"></a></li>
						<li><a class="f" href="https://www.facebook.com/simon.leyder"></a></li>
						<li><a class="g" href="https://plus.google.com/u/0/113254600918242238866/posts"></a></li>
					</ul>
				</section>
			</section>
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