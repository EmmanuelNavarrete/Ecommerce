<?php

?>
<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Subscripcion a ofertas</h3>
            <p>Suscribete y recibe las mejores ofertas de esta temporada!!"</p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Email" required="">
                <input type="submit" value="" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">
            <div class="col-md-3 w3_footer_grid">
                <h3>Contacto</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, soluta? Dicta magni ratione recusandae iste sed voluptatem aspernatur fugiat 
                    repellat tenetur in. Voluptatem, fugit enim asperiores voluptate ipsum nulla delectus!</p>
                <ul class="address">
                    <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php echo $allCategoryObject->address;  ?></li>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $allCategoryObject->email;  ?>"><?php echo $allCategoryObject->email;  ?></a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php echo $allCategoryObject->phone;  ?></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Información</h3>
                <ul class="info">
                    <li><a href="about.php">Sobre Nosotros</a></li>
                    <li><a href="mail.php">Contactanos</a></li>
                
                    <li><a href="products.php">Productos Especiales</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Categorias</h3>
                <ul class="info">
                    <li><a href="products.php">Hombres</a></li>
                    <li><a href="products.php">Mujeres</a></li>
                    <li><a href="products.php">Niños</a></li>
                    <li><a href="products.php">Niñas</a></li>
                    <li><a href="products.php">Tennis</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>Perfil</h3>
                <ul class="info">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="products.php">Ofertas del dia de hoy</a></li>
                </ul>
                <h4>Siguenos</h4>
                <div class="agileits_social_button">
                    <ul>
                        <?php $social = $allCategoryObject->allSocialMediaLinks();  if (!$social): ?>
                            <li><a href="#" class="facebook">  </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                        <?php else:  ?>
                            <?php while ($link = $social->fetch_assoc()): ?>
                                <li><a href="<?php echo $link['link']; ?>" class="fa <?php echo $link['icon']; ?> fa-2x">  </a></li>
                            <?php endwhile; ?>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="footer-copy">
        <div class="footer-copy1">
            <div class="footer-copy-pos">
                <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
            </div>
        </div>
        <div class="container">
            <?php date_default_timezone_set('Asia/Dhaka'); ?>
            <p>&copy; <?php echo date('y-m-d');?> Lemmur Todos los derechos reservados <a href="">Lemmur</a></p>
        </div>
    </div>
</div>
</body>
</html>
