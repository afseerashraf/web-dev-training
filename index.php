<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trining</title>
  <link rel="icon" type="image/x-icon" href="asset/pictures/dev.webp">
  <link rel="stylesheet" href="asset/css/style.css">
  <script src="asset/events.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>

<body>
  <header>
    <h1>Welcome to My Personal Webpage</h1>
  </header>
  <nav>
    <a href="#about">About Me</a>
    <a href="#interests">My Interests</a>
    <a href="#universe">The Universe</a>
    <a href="#contact">Contact</a>
  </nav>

  <div class="container">
    <section id="about">
      <h2>About Me</h2>
      <p>Hello! I am passionate about coding, web development, and exploring the mysteries of the universe. I enjoy learning about new technologies and the fundamental truths of our world and beyond.</p>
    </section>
    <section id="interests">
      <h2>My Interests</h2>
      <p>I enjoy coding and exploring new technologies. I'm interested in joining the tech community and thinking about how to apply technology to protect the Earth and nature. I also love spending time appreciating the beauty of nature.</p>
   <ul>
   <li><a href="https://roadmap.sh/" target="_blank">Developer Roadmap</a></li>
   <li><a href="https://www.w3schools.com/">W3 School</a></li>

   </ul>
    </section>
    <section id="universe">
      <h2>Exploring the Universe</h2>
      <p>The universe is vast and mysterious. It all started with the Big Bang, and it continues to expand. If you want to learn more, here are some great resources:</p>
      <ul>
        <li><a href="https://www.nasa.gov" target="_blank">NASA</a></li>
        <li><a href="https://www.esa.int" target="_blank">European Space Agency</a></li>
        <li><a href="https://www.khanacademy.org/science/cosmology-and-astronomy" target="_blank">Khan Academy - Cosmology and Astronomy</a></li>
        <li><a href="https://arxiv.org" target="_blank">arXiv.org</a> - Access to scientific papers</li>
      </ul>
    </section>

    <section id="contact">
      <h2>Contact</h2>
      <form id="contactForm">
        <label for="firstname">First Name: </label>
        <input type="text" name="firstname" class="form-controller" id="firstname">
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" class="form-controller" id="lastName">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-controller" id="phone">
        <button class="btn btn-outline-primary" id="formSubmit">Submit</button>
  <p id="error"></p>
   </form>
   <button id="hide">Hide form</button>

     
      <p>If you would like to get in touch, please reach out to me: <b> <a href=""> afseerahraf007@gmail.com</b></a></p>
    </section>


  </div>
  <footer>
    <p>&copy; 2024 My Personal Webpage</p>
    <div data-aos="zoom-out-left">

      <li title="Instagram">
        <a href="https://www.instagram.com/abu_afz/" target="_blank">
          <i class="fab fa-instagram iconi"></i>

        </a>
      </li>
    </div>
    <div data-aos="zoom-out-down">

      <li title="Github">
        <a href="https://github.com/afseerashraf" target="_blank">
          <i class="fab fa-github iconi"></i>
        </a>
      </li>
    </div>


  </footer>

  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<script>
  $('document').ready(function() {
    $('#formSubmit').click(function() {
      var firstName = $("#firstname").val();
      var lastName = $("#lastName").val();
      var phone = $("#phone").val();
      var errorMessage = '';
      if (firstName == "") {
        errorMessage += "Enter a valid first name.<br>";
      } if(lastName == ""){
        errorMessage += "Enter a valid Last name.<br>";
      }if(phone != /^[0-9]{10}$/){
        errorMessage += "Enter a valid phone number";
      }if(errorMessage){
        $("#error").html(errorMessage).css("color", "red");
        event.preventDefault();
      }else{
        $("#error").html('');
      }
    });
    $("#hide").click(function() {
      $('#contact').hide('slow');
    });



  });
</script>

</html>