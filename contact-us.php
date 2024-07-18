<?php include('session.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Dog Adoption</title>
    <link rel="stylesheet" href="contact-us.css" />
  </head>

  <body>
    <header>
      <h1>Contact Us for Dog Adoption</h1>
      <nav>
        <ul>
          <li><a href="nav.php">Home</a></li>
          <li><a href="dogs-profile.html">Dogs Profile</a></li>
          <li><a href="dog-care.html">Dog Care</a></li>
          <li><a href="adoption-process.html">Adoption Procedure</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <section id="contact">
        <h2>Contact Us for Adoption</h2>
        <form action="code.php" method="POST">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="message">Dog Interested In:</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <button type="submit" name="register_btn" class="btn btn-primary">
            Submitt
          </button>
        </form>
        <div id="confirmationMessage" style="display: none">
          <p>
            Thank you for your interest in adopting a dog. We will reach out to
            you via the provided email.
          </p>
        </div>
      </section>
    </main>


    
    

    <script src="scripts.js"></script>
  </body>
</html>

