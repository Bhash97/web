<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: index.php"); 
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Portfolio</title>
        <link rel="stylesheet" href="all.min.css">
        <link rel="icon" href="img/2.ico">
        <link rel="stylesheet" href="tailwind.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <style>
          .list-container {
            margin-bottom: 10px;
          }
          
          label {
            width: 120px; /* Adjust the width as needed */
            text-align: right;
            display: inline-block;
            margin-right: 10px; /* Adjust the margin as needed */
          }
        </style>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        
    </head>
<body class="snap-start">

  <!-- Qaybta Home-ka weeye -->
  <div id="home" class="bg-White from-current transform rotate-y-2 h-screen " >
  <div class="flex invisible lg:visible mx-24 pt-9 gap-5 justify-between uppercase">
        <a href="index1.php" class="text-gray-900 uppercase ml-2 font-semibold text-2xl">Bhashini</a>
        <ul class="flex font-semibold  pt-1 gap-6">
            <a href="#home" class="text-gray-900 hover:text-blue-500">Home</a>
            <a href="#about" class="text-gray-900 hover:text-blue-500">About</a>
            <a href="#skills" class="text-gray-900 hover:text-blue-500">Skills</a>
            <a href="#My Works" class="text-gray-900 hover:text-blue-500">My Works</a>
            <a href="#Contact" class="text-gray-900 hover:text-blue-500">Contacts</a>
            
            <?php
            if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo '<li >[' . $username . ']</li>';
                echo '<li><a href="logout.php" class="text-gray-900 hover:text-blue-500">Logout</a></li>';
            }
            ?>
        </ul>
    </div>
    
    <div class="flex mt-72">
      <div class="border-l ml-28 border-gray-900 ">
        <p><br><br><br><br></p>
      </div>
    </div>
   
    <!-- <div class="bg-yellow-400 h-3 w-3 rounded-full ml-64 transform animate-ping absolute"></div> -->
    <div class="bg-green-600 h-1 w-1 shadow-2xl rounded-full ml-64 transform animate-ping absolute"></div>

    <div class="flex flex-col -mt-96">
      <div class="warpper">
        <!-- <div class="static-text">I 'am</div> -->
          <div class="dynamic-text2 opacity-0 lg:opacity-100 mt-2">
        
      </div>
      </div>
      <h2 class=" text-2xl visible lg:hidden font-semibold text-blue-500 text-semibold justify-center items-center text-center cursor-pointer"><span class="text-semibold text-gray-600">Hello! I'm</span>  <br> <span class="text-4xl">Bhashini Mirando</span> </h2>
      <h1 class="text-gray-700 opacity-0 lg:opacity-100 cursor-pointer ml-72 font-semibold text-8xl"> <span class="text-blue-500">Hello <span class="text-gray-700">I'm<br> Bhashini<br></span> <span class="text-blue-500">Mirando</span> </span></h1>
    </div>
    <div class="flex flex-row-reverse">
        <img src="img/women.jpg" style="width:25%;" class="absolute opacity-0 lg:opacity-100 lg:-mt-80 lg:-pt-2 cursor-pointer lg:mr-28 anima z-20 " alt="">
    </div>
    <div class="bg-yellow-300 h-1 w-1 rounded-full -mt-48 ml-96 transform animate-ping absolute"></div>

  </div>

  <div id="image-slider" class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="portfolio/2.jpg" alt="Image 1" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="portfolio/3.jpg" alt="Image 2" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="portfolio/4.jpg" alt="Image 3" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="portfolio/5.jpg" alt="Image 4" width="100%">
      </div>
      <div class="swiper-slide">
        <img src="portfolio/6.jpg" alt="Image 5" width="100%">
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  
  
    


  <div id="about" class="flex flex-col md:flex-row bg-gray-100 shadow-xl py-20" >
    <div class="flex w-full">
  <img src="img/1.jpg" class="flex flex-row" style="vertical-align:middle;margin:0px 50px" alt="">
    </div>
    <div class="flex flex-col ml-10 md:ml-40 -mt-40  md:-mt-10">
      <h4 class="text-gray-900 font-semibold font-poppins text-4xl mt-44 uppercase ">about</h4><br>
        <div class="flex flex-row">
          <div class="warpper">
            <div class="static-text">I 'am</div>
              <div class="dynamic-text -mt-7 ml-2">
              <ul>
                  <li><span class="text-gray-900">Designer</span></li>
                  <li><span class="text-gray-900">Content Writer</span></li>
                  <li><span class="text-gray-900">Translator</span></li>
                  <li><span class="text-gray-900">Poet</span></li>
              </ul>
          </div>
          </div>
        </div>
      <p class="text-gray-900 -mt-10 text-xl pt-4 md:mr-28 justify">As a skilled post designer, translator, passionate poet,versatile content writer.I am confident that by hiring me, I can enhance your  work and deliver superior results </p>  
      
    
      
      <div class="flex flex-row gap-5">
         
        </div>
    </div>

  </div>


  <div  class="flex flex-col bg-gray-900  justify-center items-center " id="skills">
    <h3 class="text-white font-bold text-4xl uppercase mt-16">Skills</h3>
    <p  style="text-align: center;" class="pt-4 text-white">As a skilled post designer, I have a keen eye for visual aesthetics and a talent for creating eye-catching and impactful designs for social media posts, advertisements, and promotional materials
    </p>
    <p  style="text-align: center;" class="pt-4 text-white">As a skilled translator, I have a passion for bridging language barriers and enabling effective communication across cultures. With my extensive language proficiency and cultural understanding, I offer high-quality translation services in various language in Srilanka.
    </p>
    <p style="text-align: center;" class="pt-4 text-white">As a passionate poet, I have the ability to express emotions, thoughts, and experiences through the power of words. My poetry reflects my unique perspective and connects with readers on a deep level.Also you can make your loved ones a heart touching poems by me to make their day special.
    </p>
    <p style="text-align: center;" class="pt-4 text-white">As a versatile content writer, I have the ability to create engaging and informative content across various industries and topics. I bring ideas to life through well-researched articles, blog posts, website copy, and more.
    </p>
    <p style="text-align: center;" class="pt-4 text-white">Now you can get my service on content writing,
    </p>
   
    <div class="flex my-10">
 <ol style="color: white;" class="pt-4 text-white">
      <li>Blogs</li>
      <li>Scriptwriting for videos</li>
      <li>Emailers</li>
      <li>Newsletters</li>
      <li>Social media posts</li>
      <li>Case studies</li>
      <li>White papers</li>
      <li>Website content</li>
      <li>Landing page content</li>
      <li>YouTube video description</li>
      <li>E-commerce product description</li>
      <li>Reviews (books, movies, product, or service)</li>
    </ol>
    </div>
  </div>



  <div class="flex flex-col justify-center items-center " id="My Works">
    <h3 class="text-gray-900 font-bold text-4xl uppercase mt-20">My Works</h3>
      <div class="flex mt-4 gap-4 cursor-pointer">
                <center>
                <button class="add-button" onclick="openPopup()">Add New Project</button>                
                </center>
                <style>
                    /* CSS for Popup */
                    
                    .add-button {
                        display: block;
                        margin: 20px auto;
                        padding: 10px 20px;
                        background-color: #007bff;
                        color: #fff;
                        border: none;
                        border-radius: 5px;
                        font-size: 16px;
                        cursor: pointer;
                    }
                    #popup {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        z-index: 9999;
                    }

                    .popup-content {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #f9f9f9;
                        padding: 30px;
                        border-radius: 10px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                    }

                    .popup-content h2 {
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .popup-content label {
                        display: block;
                        margin-bottom: 10px;
                    }

                    .popup-content input[type="text"],
                    .popup-content textarea {
                        width: 100%;
                        padding: 10px;
                        border: 1px solid #ccc;
                        border-radius: 5px;
                    }

                    .popup-content input[type="file"] {
                        display: block;
                        margin-top: 5px;
                    }

                    .popup-content input[type="submit"] {
                        display: block;
                        width: 100%;
                        margin-top: 20px;
                        padding: 10px;
                        background-color: #4CAF50;
                        color: white;
                        border: none;
                        border-radius: 5px;
                        cursor: pointer;
                    }

                    .close {
                        position: absolute;
                        top: 10px;
                        right: 10px;
                        font-size: 24px;
                        cursor: pointer;
                    }

                </style>
                 <script>
                     function openPopup() {
                        document.getElementById('popup').style.display = 'block';
                    }

                    function closePopup() {
                        document.getElementById('popup').style.display = 'none';
                    }
                </script>
                <section>
                <div id="popup">
                    <div class="popup-content">
                        <span class="close" onclick="closePopup()">&times;</span>
                        <form action="php/database/add_project.php" method="post" enctype="multipart/form-data">
                            <h2>Add New Project</h2>
                            <label for="title">Title:</label>
                            <input type="text" id="title" name="title" required>

                            <label for="description">Description:</label>
                            <textarea id="description" name="description" required></textarea>

                            <label for="image">Upload Image:</label>
                            <input type="file" id="image" name="image" accept="image/*" required>

                            <input type="submit" value="Add Project">
                        </form>
                    </div>
                </div>
    </div>

    <div id="All" class="">
    <div class="flex justify-center items-center flex-col lg:flex-row gap-8 my-10">
    
      <?php
    require_once('php/database/database_functions.php');

    $projects = getProjects(); 
    $count = 0;
    foreach ($projects as $project){
      if ($count>4){
        break;
      } 
        echo '<div class="item-box Mobile w-72 lg:w-72 md:w-96 shadow-xl rounded-xl">';
        echo '<img src="' . $project['Image'] . '" alt="' . $project['Title'] . '" class="cursor-pointer transform hover:scale-105 transition">';
        echo '<div class="flex gap-2 mt-2">';
        echo '<a href="php/database/edit.php?id=' . $project['ID'] . '">Edit</a>';
        echo '<a href="php/database/delete.php?id=' . $project['ID'] . '">Delete</a>';
        echo '</div>';
        echo '</div>';
        $count++;
    }
    ?> 
        </div>
      </div>
    </div>
   
    <div class="flex justify-center items-center flex-col lg:flex-row gap-8">
    <?php
    require_once('php/database/database_functions.php');

    $get = get_projects1(); 
    foreach ($get as $gets){
    
        echo '<img src="' . $gets['Image'] . '" alt="' . $gets['Title'] . '" class="cursor-pointer transform hover:scale-105 transition">';
        echo '<div class="flex gap-2 mt-2">';
        echo '<a href="php/database/edit.php?id=' . $gets['ID'] . '">Edit</a>';
        echo '<a href="php/database/delete.php?id=' . $gets['ID'] . '">Delete</a>';
        echo '</div>';
          
    }
    ?>
      </div>


  <script type="text/javascript">
    $(document).ready(function(){
      $('.list').click(function(){
         const valeu = $(this).attr('data-filter');
         if(valeu == 'All'){
            $('.item-box').show('1000');
         }
         else{
           $('.item-box').not('.' + valeu).hide('1000');
           $('.item-box').filter('.' + valeu).show('1000');
         }
      })
      $('.list').click(function(){
        $(this).addClass('font-bold').siblings().removeClass('font-bold');
      })
    })
  </script>
  
  
 <div id="Contact" class="flex flex-col text-white bg-gray-900 h-120 w-full mt-10 items-center justify-center">
  <p class="text-white font-bold text-3xl">Contact Me</p>
  <div class="flex gap-3 mt-2 cursor-pointer">
    <a href="https://www.facebook.com/"><img src="bg/facebook_new_96px.png" class="h-10 w-8 pt-2"></a>
    <a href="https://www.instagram.com/"><img src="bg/instagram_new_96px.png" class="rounded-full h-10 w-8 pt-2" alt=""></a>
    <a href="https://twitter.com/"><img src="bg/twitter_circled_96px.png" class="h-10 w-8 pt-2" alt=""></a>
    <a href="https://github.com/"><img src="bg/github_64px.png" class="h-10 w-8 pt-2" alt=""></a>
  </div>
  
  </div>
  <script>
    var chatbox = document.getElementById('fb-customer-chat');
    chatbox.setAttribute("page_id", "100981565894077");
    chatbox.setAttribute("attribution", "biz_inbox");
  </script>

  <script>
    window.fbAsyncInit = function() {
      FB.init({
        xfbml            : true,
        version          : 'v13.0'
      });
    };

    (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
  
  <script>
    var swiper = new Swiper('#image-slider', {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
  <div id="Contact" class="flex flex-col bg-gray-300 justify-center items-center">
    <h1 class="text-gray-900 font-bold text-4xl  uppercase mt-16 pt-4">Contact</h1>
    <div class="flex gap-10 w-96 pt-3 md:justify-between">
       <?php
                                function sanitize_input($data) {
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);
                                    return $data;
                                }

                                function validate_name($name) {
                                    return preg_match("/^[a-zA-Z ]*$/", $name);
                                }

                                function validate_email($email) {
                                    return filter_var($email, FILTER_VALIDATE_EMAIL);
                                }

                                function validate_message($message) {
                                    $message = sanitize_input($message);
                                    return $message;
                                }

                                $nameErr = $emailErr = $messageErr = '';
                                $success = false;

                                if ($_SERVER["REQUEST_METHOD"] === "POST") {
                                    $name = $_POST["name"];
                                    if (empty($name) || !validate_name($name)) {
                                        $nameErr = 'Please enter a valid name (letters and spaces only).';
                                    } else {
                                        $name = sanitize_input($name);
                                    }

                                    $email = $_POST["email"];
                                    if (empty($email) || !validate_email($email)) {
                                        $emailErr = 'Please enter a valid email address.';
                                    } else {
                                        $email = sanitize_input($email);
                                    }

                                    $message = $_POST["message"];
                                    if (empty($message)) {
                                        $messageErr = 'Please enter a message.';
                                    } else {
                                        $message = validate_message($message);
                                    }

                                    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
                                        $success = true;
                                    }
                                }
                                ?>



                            

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" required><br>
                        <br>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required><br>

                        <label for="message">Message:</label><br>
                        <textarea name="message" id="message" rows="4" cols="50" required></textarea><br>

                        <input type="submit" value="Submit">
                    </form>
                    <?php
                        if ($success) {
                            echo '<script>window.location.href = "php/contact_success.php";</script>';
                        }
                        ?>
    </div>
    <br>

  </div>
</body>

</html>