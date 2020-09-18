<?php include('header.php')?>
<!-- contact form -->
<main>
<!-- add contact form -->
<div class="container">
  <form action="./includes/new.inc.php" method="POST">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="kenya">Kenya</option>
      <option value="uganda">Uganda</option>
      <option value="tanzania">Tanzania</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</main>
<!--  -->
<?php include('footer.php')?>
