<?php include('header.php') ?>


<section class="contact-section">

    <div class="contact_h1">
        <h1>Contact Us</h1>
    </div>

    <div class="contact_h5">
        <h5>Any question or remarks? Just write us a message!</h5>
    </div>
    <div class="display_flex">
        <div class="leftside">
            <h2 class="contact_h2">Get In Touch</h2>
            <div class="contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <p>Mahenwaththa, Pitipana, Homagama, Sri Lanka</p>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <p>sandupahewapathirana@gmail.com</p>
            </div>
            <div class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <p>+94 77 659 5069</p>
            </div>
            <div class="contact-item">
                <i class="fa-brands fa-whatsapp"></i>
                <p>+94 77 659 5069</p>
            </div>
            <div class="contact-item">
                <i class="fa-brands fa-instagram"></i>
                <p>@nsbm_bazaar</p>
            </div>
        </div>

        <div class="rightside">
            <form>
                <input type="text" placeholder="Your Name" class="name" required>
                <input type="email" placeholder="Your Email" class="email" required>
                <input type="text" placeholder="Subject">
                <textarea rows="6" placeholder="Write your message..." class="message" required></textarea>
                <button type="submit" class="send-btn">
                    <i class="fa-solid fa-paper-plane"></i>
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>





<?php include('footer.php') ?>