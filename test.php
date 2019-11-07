<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>
    <!-- <script src="mrgrading.js"></script> -->

    <title>2020 Member Review</title>

    <style>


.close-button {
   float: right;
   width: 1.5rem;
   line-height: 1.5rem;
   text-align: center;
   cursor: pointer;
   border-radius: 0.25rem;
   background-color: lightgray;
}

.close-button:hover {
   background-color: darkgray;
}

.show-modal {
   opacity: 1;
   visibility: visible;
   transform: scale(1.0);
   transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}	

.popup{
  position: fixed;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   background-color: rgba(0, 0, 0, 0.5);
   
   visibility: hidden;
   transform: scale(1.1);
   transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
		
.headline{
    font-size: 45px;
}

.inside{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
        
    @media screen and (max-width: 360px) {
        div { 
        width: 15em;
        padding: .1em;
        }
    h2, h3 {
        width: 15em;
        padding: .5em;
        text-align: left;
        }
        .anticipate {
        width: 15em;
        padding: .1em;
        text-align: left;
        }
    .quiz-overlay{
        width: 25em;
        
        height: 559px;
        }
    .szlider, .fwrd, .fwrdn, label{
        width: 25em;
        }
    

    .member-info{
        height: 31px;
        font-size: 1rem;
        cursor: none;
        background-color: white;
        line-height: 2.55em;
        margin: 0 30px 0 0;
        max-width: 20rem;
    }

    .inside{
        width: 13rem;
    }

    .submit-quiz {
        display: block;
        margin: 36px auto 0;
    }

    .quiz ul, li{
        margin: 25px 1px 95px -11px;}
    
    .result-page{
        height: 450px;
        margin: 0 auto;
        position: relative;
        width: 360px;
        overflow: visible;
    }
    
        #page-wrap {
            height: 450px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            width: 360px;
            }
    
    
    }


    }

    }



}



		
		
	</style>
</head>
<body>
    <div id="page-wrap">
        <!-- a hidden input to hold the values for the progress bar -->
        <input type="hidden" id="questionNumber" value="<?php echo $QuestionNo; ?>">
        <input type="hidden" id="arrayLen" value="<?php echo sizeof($Questions); ?>">

        <?php 

        $Questions = array(
            1 => array(
                'Question' => 'CSS stands for',
                'Answers' => array(
                    'A' => 'Computer Styled Sections',
                    'B' => 'Cascading Style Sheets',
                    'C' => 'Crazy Solid Shapes'
                ),
                'CorrectAnswer' => 'B'
            ),
            2 => array(
                'Question' => 'Second question',
                'Answers' => array(
                    'A' => 'First answer of Second question',
                    'B' => 'Second answer Second question',
                    'C' => 'Hint: this is the right answer'
                ),
                'CorrectAnswer' => 'C'
            ),
            3 => array(
                'Question' => 'Internet Explorer 6 was released in...',
                'Answers' => array(
                    'A' => '2001',
                    'B' => '1998',
                    'C' => '2006'
                ),
                'CorrectAnswer' => 'A'
            ),
            4 => array(
                'Question' => 'SEO Stand for...',
                'Answers' => array(
                    'A' => 'Secret Enterprise Organizations',
                    'B' => 'Special Endowment Opportunity',
                    'C' => 'Search Engine Optimization'
                ),
                'CorrectAnswer' => 'C'
            ),
            5 => array(
                'Question' => 'A 404 Error...',
                'Answers' => array(
                    'A' => 'does not impact web analytics',
                    'B' => 'is an HTTP Status Code meaning Page Not Found',
                    'C' => 'is a deprecated error code in HTML5'
                ),
                'CorrectAnswer' => 'B'
            )
        );

        if (isset($_POST['answers'])){
            $Answers = $_POST['answers']; // Get submitted answers.
            $counter = 0;
            $results = "";

            // Now this is fun, automated question checking! ;)

                                    
                     
        if (isset($_REQUEST['submitted'])) {
        // Initialize error array.
          $errors = array();
          // Check for a proper First name more than 2 chars but less than 20 chars
          if (!empty($_REQUEST['firstname'])) {
            $firstname = $_REQUEST['firstname'];
            $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
            if (preg_match($pattern,$firstname)){ $firstname = $_REQUEST['firstname'];}
            else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
            } else {$errors[] = 'You forgot to enter your First Name.';}
          
          // Check for a proper Last name more than 2 chars but less than 20 chars
          if (!empty($_REQUEST['lastname'])) {
            $lastname = $_REQUEST['lastname'];
            $pattern = "/^[a-zA-Z0-9\_]{2,20}/";// This is a regular expression that checks if the name is valid characters
            if (preg_match($pattern,$lastname)){ $lastname = $_REQUEST['lastname'];}
            else{ $errors[] = 'Your Name can only contain _, 1-9, A-Z or a-z 2-20 long.';}
            } else {$errors[] = 'You forgot to enter your Last Name.';}

          // Check for a proper email
          if (!empty($_REQUEST['email'])) {
            $email = $_REQUEST['email'];
            $pattern = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";// This is a regular expression that checks if the email is valid characters
            if (preg_match($pattern,$email)){ $email = $_REQUEST['email'];}
            else{ $errors[] = 'The Email Address you entered does not appear to be valid.';}
            } else {$errors[] = 'You forgot to enter your email address.';}          
          
          //Check for a valid member number {7,20} chars
          if (!empty($_REQUEST['member'])) {
            $member = $_REQUEST['member'];
            $pattern = "/^[0-9\_]/";
            if (preg_match($pattern,$member)){ $member = $_REQUEST['member'];}
            else{ $errors[] = 'Your Member number can only be numbers.';}
            } else {$errors[] = 'You forgot to enter your Member number.';}
          
          }
          //End of validation 

          $output = "First Name: " . $firstname . PHP_EOL . "Last Name:" . $lastname .  PHP_EOL . "Email: " . $email . PHP_EOL . "Member number:" . $member . "".PHP_EOL;

         
  //Print Errors
  if (isset($_REQUEST['submitted'])) {
      echo '<section class="result-page"';
  // Print any error messages. 
  if (!empty($errors)) { 
  echo '<hr /><h3>The following occurred:</h3><ul>'; 
  // Print each error. 
  foreach ($errors as $msg) { echo '<li>'. $msg . '</li>';}
  echo '</ul><h3>Your form could not be sent due to input errors.</h3><hr />';}
   else{echo '<hr /><h3 align="center">Your review was sent. Thank you!</h3><hr /><p>2020 Member Review Results
    Here are the results of your member review. Your score has been reported to the office. If you have answered all questions correctly, you have completed this portion of the renewal process. If you answered any questions incorrectly, click here to retake the review. Click here to return to your account.</p>'; 
  echo $output;
  foreach ($Questions as $QuestionNo => $Value){
    // Echo the question
    echo $Value['Question'].'<br />';

    if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
        echo 'You answered: <p style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</p>'; // Replace style with a class
        echo 'Correct answer: <p style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</p>';
    } else {
        echo 'Correct answer: <p style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</p>'; // Replace style with a class
        echo 'You are correct: <p style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</p>'; $counter++;

    }

    echo '<br /><hr>'; 
                            if ($counter=="") 
                            { 
                            $counter='0';
                            $results = "Your score: $counter/5"; 
                            }
                            else 
                            { 
                            $results = "Your score: $counter/5"; 
                            }
        }   

    }
    echo '</section>';
  
  } 

  if (isset($_REQUEST['submitted'])) {
    if (empty($errors)) { 
     //open file for output
     $fp = fopen("contacts.txt","a");
     //write to the file
     fwrite($fp, $output . $results .PHP_EOL . ", ");
     fclose($fp);
    }
  }
//   echo $results;
//End of errors array
  
                    
        } else {
        ?>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" id="quiz">
        <ul id="test-questions">
        <li>
                <div class="quiz-overlay"></div>
                <h3 class="anticipate">You must achieve a score of 100% to pass this review. The answers to this review can all be found in your 2020 Member Handbook. At the end, you will be asked to enter your name and Member Number.</h3>
                
    <input type="button" value="Start Quiz" class="fwrd" />
            </li>

            <?php foreach ($Questions as $QuestionNo => $Value){ ?>
            <li>
                <div class="quiz-overlay"></div>
                
                <div class="szlider">
                    <div class="pBar"></div>
                    <div class="progressBar"></div>
                    
                </div>

                <h3><?php echo $Value['Question']; ?></h3>

                <div class="mtm">
                <?php 
                    foreach ($Value['Answers'] as $Letter => $Answer){ 
                    $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;
                    if ($Letter != $Value['CorrectAnswer']){
                        $Class = 'fwrdn label'.strtolower($Letter);
                    }else{
                        $Class = 'fwrd label'.strtolower($Letter);
                    }
                    
                ?>
                <div>
                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
                    <label class="<?php echo $Class; ?>" for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
                </div>
                <?php } ?>
                    </div></li>
                    
            <?php } ?>
            <li>
                <div class="quiz-overlay"></div>
                <h3 class="">Final steps:enter your Name, Email address and Member number:</h3>
                <label class="member-info">First Name:  <input name="firstname" type="text" placeholder="- Enter First Name -"><br></label><br>  
    <label>Last Name:   <input name="lastname" type="text" placeholder="- Enter Last Name -"><br></label><br>  
    <label>Email:   <input name="email" type="email" placeholder="- Enter Email -"><br></label><br> 
    <label>Member Number:   <input name="member" type="text" placeholder="- Your Member Num -"><br></label><br>
    <input type="button" value="next page" class="fwrd" />
            </li>
            <li>
                <div class="quiz-overlay"></div>
                <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                <input type="submit" value="Submit Quiz" id="submit-quiz" name="submitted"/>
            </li>

        </ul>
        <!-- <input type="submit" value="Submit Quiz" /> -->
        </form>
        <?php 
        }
        ?>

        <!-- correct/incorrect modals -->
    <div id="correctPopUp" class="popup">
		<div class="inside">
		
		    <span class="close-button" onclick="document.getElementById('correctPopUp').style.visibility = 'hidden'; return false;">&times;</span>

			<!--You are:<br/>
			<span class="headline">Correct!</span>
			<br/>-->
			<p color="green">Correct!</p>

	    </div>
	
	
	    <div id="inCorrectPopUp" class="popup">
		    <div class="inside">
                <span class="close-button" onclick="document.getElementById('inCorrectPopUp').style.visibility = 'hidden'; return false;">&times;</span>
                <!--<span class="headline">Incorrect</span>-->
			    <p color="red">Incorrect.  Please try again.</p>
		    </div>
        </div>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
    <script>
        // sliderz progress bar
        var hiddenInputLen = document.getElementById('arrayLen');
        var arrLength = 5;
        // var arrLength = hiddenInputLen.value;
        var hiddenInputQno = document.getElementById('questionNumber');
        var arrQuestNo = 0;
        // var arrQuestNo = hiddenInputQno.value; 
        
        function drawszlider(totalQuestions, currentQuestion){
            var progressBar = Math.round((currentQuestion * 100) / (totalQuestions +2));
            var i = 0;
            for (i = 0; i < arrLength; i++) {
                if(arrQuestNo === 0){
                    document.getElementsByClassName("pBar")[i].style.width = 1 + '%';
                    document.getElementsByClassName("progressBar")[i].innerHTML= '0%';
                }else{
                    document.getElementsByClassName("pBar")[i].style.width = progressBar + '%';
                    document.getElementsByClassName("progressBar")[i].innerHTML = progressBar + '%';

                }

            };
            arrQuestNo += 1;

        }
        drawszlider(arrLength, arrQuestNo); 

        // no fwrd clicks (wrong answer does not advance quiz forward, red color)
        var fwrdn = document.querySelectorAll('.fwrdn');
        
        var i = 0;
        for (var i = 0; i < fwrdn.length; i++) {
            fwrdn[i].addEventListener('click', function (event) {
                var clicked = false;
                event.preventDefault();
                if(clicked === false){
                    // this.style.backgroundColor = "red"; 
                    // this.style.textDecorationLine = "line-through";
                    document.getElementById('inCorrectPopUp').style.visibility = 'visible';
                    clicked = true;
                    console.log('the wrong answer = ' + event.target.value + ' ' + event.target.label);
                    
                }else if(clicked === true){
                    this.style.backgroundColor = "#1f4c5b"; 
                    this.style.textDecorationLine = "none";
                    clicked = false;
                }

            });
        }
        for (var i = 0; i < fwrd.length; i++) {
            fwrd[i].addEventListener('click', function (event) {
                var clicked = false;
                event.preventDefault();
                if(clicked === false){
                    document.getElementById('correctPopUp').style.visibility = 'visible';
                    clicked = true;
                    console.log('the wrong answer = ' + event.target.value + ' ' + event.target.label);
                    
                }else if(clicked === true){
                    this.style.backgroundColor = "#1f4c5b"; 
                    this.style.textDecorationLine = "none";
                    clicked = false;
                }

            });
        }


    </script>
    <script>
           (function($) {
              var timeout= null;
              var $mt = 0;
              $("#quiz .fwrd").click(function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){ 
                    $mt = $mt - 430;
                    $("#test-questions").css("margin-top", $mt); 
                }, 555);
                
                drawszlider(arrLength, arrQuestNo);
              });
           }(jQuery))
           
    </script>

</body>
</html>