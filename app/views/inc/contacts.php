<section class="row contacts"  id="contacts-map">
    <div class="container">
        <div class="section-heading">
            <h1>Contacts</h1>
        </div>
        <ul class="flex-container">
            <li>
                <img src="app/images/location.png" alt="Location">
                <h4>Location</h4>
                <h5>Naujoji Akmenė</h5>
            </li>
            <li>
                <img src="app/images/phone.png" alt="Phone">
                <h4>Phone no.</h4>
                <h5>+370674XXXXX</h5>
            </li>
            <li>
                <img src="app/images/email.png" alt="Email">
                <h4>E-mail</h4>
                <h5>grumin.el.pastas@gmail.com</h5>
            </li>
        </ul>
    </div>
    <div class="container form-table">
        <form action="app/views/inc/src/app.php" method="post" >
            <p>You Can Write Us</p>
            <input type="text" name="vardas" placeholder="Your name" required>
            <input type="email" name="email" placeholder="Your email" required>
            <input type="text" name="subject" placeholder="Title" required>
            <textarea name="message" placeholder="Message" required></textarea>
            <button name="submit" type="submit" id="test">SEND MESSAGE</button>
        </form>
    </div>
</section>  