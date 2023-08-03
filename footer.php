        <footer class="footer">
            <div class="container" style="border:2px solid #58D68D ">
                <div class="columns is-multiline is-mobile is-align-items-center is-align-self-center">
                    <div class="column" style="border:2px solid #F5B041">
                        <h3>UBICACIÓN</h3>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.2203469782485!2d-58.11010772497571!3d-31.269999689188875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95aded868a74ebaf%3A0x88e876943f404b2d!2sEsc.%20Salto%20Grande%20N%C2%BA5!5e0!3m2!1ses!2sar!4v1684929879004!5m2!1ses!2sar" 
                            width="300" height="200" style="border:0;" 
                            allowfullscreen="" loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    <div class="column" style="border:2px solid #3498DB ">
                        <ul class="buttons">
                            <li class="face">
                                <a href="<?=get_facebook_url().'/facebook'?>">
                                  <img src="<?= getIMG('images.png')?>" alt="facebook" />
                                </a>
                            </li>
                            <li>
                                <a href="<?=get_instagram_url().'/instagram'?>">
                                    <img src="<?= getIMG('icono-instagram.jpg')?>" alt="instagram" />
                                </a>
                            </li>
                        </ul> 
                    </div>
                    <div class="column" style="border:2px solid #E74C3C">
                        <h3>CONTÁCTANOS</h3>
                        <ul>
                            <li>Av. Alberdi, 435. La Criolla-ER</li>
                            <li>Tel:4900193</li>
                            <li>escuela5saltogrande@gmail.com</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </footer>
        <?php wp_footer();?>
    </body>
</html>