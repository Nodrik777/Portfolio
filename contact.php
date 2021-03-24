<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles/contact.css">

<div class="bg-img">
  
  <form action="/greeting.php" class="container" method="post">
    <h1>Contact me</h1>

    <label for="name"></label>
    <input type="text" placeholder="Name" id="name" name="name" required>
      
    <label for="email"></label>
    <input type="text" placeholder="Email address" id="email" name="email" required>
      
    <label for="subject"></label>
    <input type="text" placeholder="Subject" id="subject" name="subject">
      
     
      <textarea placeholder="Your message" id="message" name="message" rows="7" cols="40" style="height:200px" ></textarea>

    <button type="submit" name="submit" class="btn">Submit</button>
  </form>
</div>

<?php include 'footer.php'; ?>