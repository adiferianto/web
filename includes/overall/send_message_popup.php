<div class="window-popup message-popup">
    <a href="#" class="popup-close js-popup-close cd-nav-trigger">
        <svg class="utouch-icon utouch-icon-cancel-1"><use xlink:href="#utouch-icon-cancel-1"></use></svg>
    </a>

    <div class="send-message-popup">
        <h5>Kirim Pesan</h5>
        <p>isi formulir dibawah ini.</p>
        <form class="contact-form" method="post" action="send_mail.php">
            <div class="with-icon">
                <input name="name" placeholder="Nama anda" type="text" required="required">
                <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
            </div>

            <div class="with-icon">
                <input name="email" placeholder="Email anda" type="text" required="required">
                <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
            </div>

            <div class="with-icon">
                <input class="with-icon" name="phone" placeholder="Nomer telephone" type="tel" required="required">
                <svg class="utouch-icon utouch-icon-telephone-keypad-with-ten-keys"><use xlink:href="#utouch-icon-telephone-keypad-with-ten-keys"></use></svg>
            </div>

            <div class="with-icon">
                <input class="with-icon" name="subject" placeholder="Subjek" type="text" required="required">
                <svg class="utouch-icon utouch-icon-icon-1"><use xlink:href="#utouch-icon-icon-1"></use></svg>
            </div>

            <div class="with-icon">
                <textarea name="message" required="" placeholder="isi pesan" style="height: 180px;"></textarea>
                <svg class="utouch-icon utouch-icon-edit"><use xlink:href="#utouch-icon-edit"></use></svg>
            </div>

            <button class="btn btn--green btn--with-shadow full-width">
                Kirim Pesan Sekarang
            </button>

        </form>
    </div>
</div>