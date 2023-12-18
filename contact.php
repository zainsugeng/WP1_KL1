<!-- --------sub header 4--------- -->
<?php include 'sub_header/subheader4.php'; ?>

<!-- --contact us -->
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.563153693422!2d107.64741167510162!3d-6.942694993057392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e87321e8078b%3A0x8c1f1a03d4e62d51!2sJl.%20Soekarno%20Hatta%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1702432412780!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h5>Jl. Soekarno Hatta No.643</h5>
                    <p>Jl. Soekarno Hatta No.643, Sukapura, Kec. Kiaracondong, Kota Bandung, Jawa Barat 40285</p>
                </span>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h5>+62 812-9826-7771</h5>
                    <p>Buka jam 09:00 - 15:00</p>
                </span>
            </div>
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h5>royalgalaxy@gmail.com</h5>
                    <p>Email us right now</p>
                </span>
            </div>
        </div>
        <div class="contact-col">
            <form action="output_contact.php" method="POST">
                <input type="text" name="name" placeholder="Masukan Name" required>
                <input type="email" name="email" placeholder="Masukan Email" required>
                <input type="text" name="subject" placeholder="Masukan Subjek" required>
                <textarea rows="8" name="message" placeholder="Pesan"></textarea>
                <button type="submit" class="hero-btn red-btn">Kirim</button>
            </form>
        </div>
    </div>

</section>

<!-- --------footer--------- -->
<?php include 'footer.php'; ?>