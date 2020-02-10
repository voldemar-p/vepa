</div> <!-- div from header -->
</div> <!-- div from header -->
</div> <!-- div from header -->

<?php // get_template_part('templateParts/mail.php'); ?>

<div id="respond" class="contact-icon">
    <img src="<?php echo get_theme_file_uri('/images/Ikoonid/60x60/contact.svg'); ?>" alt="kontakt">
</div>
<div class="form-container">
    <div class="close-form">
        <img src="<?php echo get_theme_file_uri('/images/Ikoonid/40x40/close.svg'); ?>" alt="sulge">
    </div>
    <h4><?php echo $response; ?></h4>
    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST" autocomplete="off">
        <ul class="form-ul">
            <li>
                <label id="label-left" for="name">Kirjuta meile</label>
                <input type="text" id="name" name="user_name" value="<?php echo esc_attr($_POST['user_name']); ?>" placeholder="Nimi">
            </li>
            <li>
                <label for="mail"></label>
                <input type="email" id="mail" name="user_mail" value="<?php echo esc_attr($_POST['user_mail']); ?>" placeholder="E-posti aadress">
            </li>
            <li>
                <label for="topic"></label>
                <input type="text" id="topic" name="user_topic" value="<?php echo esc_attr($_POST['user_topic']); ?>" placeholder="Teema">
            </li>
            <li>
                <label for="message"></label>
                <textarea id="message" name="user_msg" placeholder="Sõnum"><?php echo esc_textarea($_POST['user_msg']); ?></textarea>
            </li>
            <li>
                <input type="hidden" name="action" value="contact_form">
            </li>
            <li class="form-button">
                <button class="button button--form" type="submit">Saada</button>
            </li>
        </ul>
    </form>
</div>

<footer class="site-footer row align-items-center justify-content-center">
    <div class="col footer-container-first">
        <ul>
            <li class="footer-list-element">
                <a class="footer-link" href="#">
                <svg class="hover-svg" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 55.2 (78181) - https://sketchapp.com -->
                    <title>icon/20x20/newsletter</title>
                    <desc>Created with Sketch.</desc>
                    <g id="icon-newsletter" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M10,20 C4.4771525,20 0,15.5228475 0,10 C0,4.4771525 4.4771525,0 10,0 C15.5228475,0 20,4.4771525 20,10 C20,15.5228475 15.5228475,20 10,20 Z M14.8105469,8.4765625 C14.3730469,8.81640625 13.7949219,9.25 11.8027344,10.6972656 C11.40625,10.9863281 10.6972656,11.6328125 10,11.6269531 C9.30664062,11.6308594 8.61132812,10.9980469 8.19921875,10.6972656 C6.20703125,9.25 5.62695312,8.81835938 5.18945312,8.47851563 C5.11132812,8.41796875 5,8.47265625 5,8.5703125 L5,12.5625 C5,13.0800781 5.41992188,13.5 5.9375,13.5 L14.0625,13.5 C14.5800781,13.5 15,13.0800781 15,12.5625 L15,8.56835938 C15,8.47265625 14.8867188,8.41601563 14.8105469,8.4765625 Z M10,11 C10.453125,11.0078125 11.1054688,10.4296875 11.4335938,10.1914063 C14.0253906,8.31054688 14.2226562,8.14648438 14.8203125,7.67773438 C14.9335938,7.58984375 15,7.453125 15,7.30859375 L15,6.9375 C15,6.41992188 14.5800781,6 14.0625,6 L5.9375,6 C5.41992188,6 5,6.41992188 5,6.9375 L5,7.30859375 C5,7.453125 5.06640625,7.58789063 5.1796875,7.67773438 C5.77734375,8.14453125 5.97460938,8.31054688 8.56640625,10.1914063 C8.89453125,10.4296875 9.546875,11.0078125 10,11 Z" id="Combined-Shape" fill="#3B3B3B" fill-rule="nonzero"></path>
                    </g>
                </svg>
                Liitu uudiskirjaga
                </a>
            </li>
            <li class="footer-list-element">
                <a class="footer-link" href="https://www.facebook.com/vepamang/" target="blank">
                    <svg class="hover-svg" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <!-- Generator: Sketch 55.2 (78181) - https://sketchapp.com -->
                        <title>icon/20x20/facebook</title>
                        <desc>Created with Sketch.</desc>
                        <g id="icon-facebook" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <path d="M10,20 C4.4771525,20 0,15.5228475 0,10 C0,4.4771525 4.4771525,0 10,0 C15.5228475,0 20,4.4771525 20,10 C20,15.5228475 15.5228475,20 10,20 Z M8.49804688,15 L10.3339844,15 L10.3339844,10.5273438 L11.7714844,10.5273438 L12,8.75 L10.3339844,8.75 L10.3339844,7.52539062 C10.3339844,7.01171875 10.4765625,6.66015625 11.2148438,6.66015625 L12.15625,6.66015625 L12.15625,5.0703125 C11.9941406,5.04882812 11.4355469,5 10.7851562,5 C9.42773438,5 8.49804688,5.828125 8.49804688,7.34960938 L8.49804688,8.75 L7,8.75 L7,10.5273438 L8.49804688,10.5273438 L8.49804688,15 Z" id="Combined-Shape" fill="#3B3B3B" fill-rule="nonzero"></path>
                        </g>
                    </svg>
                    Facebook
                </a>
            </li>
            <li class="footer-list-element">
                <a class="footer-link" href="https://www.youtube.com/playlist?list=PLO4us--sZPVNmZ4G4IXohGNST_b3II_c-" target="blank">
                <svg class="hover-svg" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <!-- Generator: Sketch 55.2 (78181) - https://sketchapp.com -->
                    <title>icon/20x20/youtube</title>
                    <desc>Created with Sketch.</desc>
                    <g id="icon-youtube" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M10,20 C4.4771525,20 0,15.5228475 0,10 C0,4.4771525 4.4771525,0 10,0 C15.5228475,0 20,4.4771525 20,10 C20,15.5228475 15.5228475,20 10,20 Z M14.7910403,7.13793561 C14.6760319,6.69001894 14.3371773,6.33725379 13.9069349,6.21753788 C13.1270897,6 10,6 10,6 C10,6 6.87292862,6 6.09306507,6.21753788 C5.66282268,6.33727273 5.32396811,6.69001894 5.20895971,7.13793561 C5,7.94981061 5,9.64371212 5,9.64371212 C5,9.64371212 5,11.3376136 5.20895971,12.1494886 C5.32396811,12.5974053 5.66282268,12.9354735 6.09306507,13.0551894 C6.87292862,13.2727273 10,13.2727273 10,13.2727273 C10,13.2727273 13.1270714,13.2727273 13.9069349,13.0551894 C14.3371773,12.9354735 14.6760319,12.5974053 14.7910403,12.1494886 C15,11.3376136 15,9.64371212 15,9.64371212 C15,9.64371212 15,7.94981061 14.7910403,7.13793561 Z M8.97726565,11.1816477 L8.97726565,8.10577652 L11.5908916,9.64375 L8.97726565,11.1816477 Z" id="Combined-Shape" fill="#3B3B3B" fill-rule="nonzero"></path>
                    </g>
                </svg>
                Youtube
                </a>
            </li>
        </ul>
    </div>
    <div class="col footer-container-middle">
        <a id="vepa-meil" href="#">vepa@tai.ee</a>
    </div>
    <div class="col footer-container-last">
        <a title="Tervise Arengu Instituut" href="https://tai.ee/et/" target="blank">
            <img id="TAI-img" src="<?php echo get_theme_file_uri('/images/logod/TAI_logo.svg'); ?>" alt="Tervise Arengu Instituut">
        </a>
        <a title="Siseministeerium" href="https://www.siseministeerium.ee/et" target="blank">
            <img class="footer-sponsor-img" src="<?php echo get_theme_file_uri('/images/logod/siseministeerium_logo.svg'); ?>" alt="Siseministeerium">
        </a>
        <a title="Euroopa Sotsiaalfond" href="https://ec.europa.eu/esf/home.jsp?langId=et" target="blank">
            <img class="footer-sponsor-img" src="<?php echo get_theme_file_uri('/images/logod/sotsiaalfond_logo.svg'); ?>" alt="Euroopa Sotsiaalfond">
        </a>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
