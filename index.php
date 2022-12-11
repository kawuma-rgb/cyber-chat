<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EvPinn</title>
    <link rel="stylesheet" href="./style.css">

</head>
<body>
    
<!-- Status message -->
<!-- Status message -->
<?php if(!empty($statusMsg)){ ?>
    <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
<?php } ?>




<div class="container">
        <img src="./pexels-kindel-media-9800006.jpg" id="top_img" alt="charging stations">

        <!-- nav -->
        <nav>
            <div class="logo">

                <h4>EVpIN</h4>
            </div>

            <div class="input_group">
                <a href="#contact_us">pin your location</a>
            </div>

        </nav>
        <!-- main -->
        <div class="main" id="about">
            <h1 id="uganda-f"> uganda's first electric vehicle public charging</h1>
            <h4 class="high_end">acceralating electric vechicle infrastructure in africa</h4>
            <button id="talk">let's talk</button>
           <!-- popup -->
            <div class="menu" id="menu">
                <img src="./close.png" id="close" alt="">
               <form action="">
                <h1>have site suggestion?</h1>
          <div>
            <input type="text" name="names" placeholder="name" id="surname">
            <label for="surname">name</label>
        </div>
          <div>
            <input type="text" name="email2" placeholder="email" id="other_name">
            <label for="email">email</label>
        </div>
          <div>
            <input type="text" name="location" placeholder="location" id="location">
            <label for="location">location</label>
        </div>
       
        <input type="submit" name="submit2" id="charge_now" value="Submit Request">
        <!-- <button id="charge_now"><a href="#"> Submit Request</a></button> -->

               </form>

            </div>
        </div>
    </div>
    </div>



<div class="about_cont">
    <h4>About us</h4>
    <p>EvpIN is a revolutionary  dual charging and  Holographic Media network in Africa which connects and  offers benefits far beyond energy .
    </p>
    <p>EvpIN Charging Network is compatible with a range of  electric grids and also optimizes Renewable energy like solar and wind .
    </p>
    <p>Our Holographic Cutting Edge Technology is  eye-catching and delivers measurable outcomes through precise targeting, creative capabilities, and programmatic buying options in strategically located areas where people spend their time and money . 
    </p>
    <p>So forward—thinking brand partners can reach high-value consumers who are brand aware and climate conscious — moments before they enter a store, shopping center , Businesses or Restaurants.
    </p>

    <p>We therefore drive buying Behavior and Traffic by aligning your brand with sustainability and innovation through accelerating Electrification in Africa and the world at large.</p>

</div>

    
        <!-- Form fields -->
        <form action="" method="post" id="contact_us">
    <h4>Reach out</h4>
    <div class="contact_form">

<div class="img">
    <img src="./charger4.jpg" alt="">
</div>
 <div class="inputs">
    <div class="form-input">
        <input type="text" name="name"  id="firstName" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required="">
        <label for="name">Name</label>
    </div>
    <div class="form-input">
        <input type="email" name="email" id="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required="">
        <label for="email">Email</label>
    </div>
    <div class="form-input">
        <input type="text" name="subject" id="subj" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required="">
        <label for="subject">Subject</label>
    </div>
    <div class="form-input" id="txt">
        <textarea name="message" id="message" placeholder="Type your message here" required=""><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
    </div>
    <input type="submit" name="submit" class="btn" id="submit" value="Submit">
</div>
    </div>
    <?php 
// Form submission script 
include_once 'submit.php'; 
?>
</form>


       

    <!-- footer -->
    <footer>
        <P style="margin-bottom: 10PX;  ">Reach US</P>
        <P> Email: <span style="color: rgb(80, 32, 32);">evpiinn@gmail.com</span> </P>

    </footer>

    <script src="./script.js"></script>
</body>

</html>

