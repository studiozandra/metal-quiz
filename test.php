<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic' rel='stylesheet' type='text/css'>

    <title>Document</title>
</head>
<body>
    <div id="page-wrap">
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

            // Now this is fun, automated question checking! ;)

            foreach ($Questions as $QuestionNo => $Value){
                // Echo the question
                echo $Value['Question'].'<br />';

                if ($Answers[$QuestionNo] != $Value['CorrectAnswer']){
                    echo 'You answered: <span style="color: red;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                    echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
                } else {
                    echo 'Correct answer: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>'; // Replace style with a class
                    echo 'You are correct: <span style="color: green;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; $counter++;

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
                    }                           echo $results;
        } else {
        ?>
        <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post" id="quiz">
        <ul id="test-questions">
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
                <h3 class="anticipate">Now it&#8217;s time to see your results...</h3>
                <input type="submit" value="Submit Quiz" id="submit-quiz" />
            </li>

        </ul>
        <input type="submit" value="Submit Quiz" />
        </form>
        <?php 
        }
        ?>

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
            var progressBar = Math.round((currentQuestion * 100) / (totalQuestions));
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

        // no fwrd clicks
        var fwrdn = document.querySelectorAll('.fwrdn');
        
        var i = 0;
        for (var i = 0; i < fwrdn.length; i++) {
            fwrdn[i].addEventListener('click', function (event) {
                var clicked = false;
                event.preventDefault();
                if(clicked === false){
                    this.style.backgroundColor = "red"; 
                    this.style.textDecorationLine = "line-through";
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
                }, 333);
                
                drawszlider(arrLength, arrQuestNo);
              });
           }(jQuery))
    </script>

</body>
</html>