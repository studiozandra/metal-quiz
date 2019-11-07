member-quiz
==========

Simple PHP Quiz 

This was based on John Locke's PHP Quiz tutorial found at https://www.lockedownseo.com/build-a-quiz-in-php-tutorial . Chris Coyier and CSS-Tricks supplied the initial blueprint: http://css-tricks.com/building-a-simple-quiz/

In this revamp, the user answers various multiple choice questions to reinforce their knowledge of club membership rules. It is not possible to submit incorrect answers, so this is a quiz in name only, merely for reminding members of the rules. At the end of the questions, members must enter their information and after submitting the form, a "submitted" page is displayed.

Notes: 
- test.php is one long HTML page. 
Each time a question is answered, JavaScript subtracts from the height of the page but the position remains absolute, in a way that the entire page is not visible all at once. 
- The page is populated with list items generated using loops in PHP. The answers are processed using PHP and a submission will create a .txt file containing the user's submitted info and quiz results. All subsequent submissions will append to this file.
- This is not a serious quiz, and any user who knows JS would be able to look at the code in a browser and determine the correct answers (the correct answer has a slightly different class name than the others).

Things You Can Do With This:
---------------------------------------------

You can embed the Metal Quiz in your own site (just copy + paste in source or a plain text widget. Don't forget to change the brackets):

<code>[iframe src="https://metalquiz.sacramentowebdesigns.com/" height="450" width="600"][/iframe]</code>

You can modify it for your own needs. This has an MIT license.

You can tear it apart and rebuild it again. Learning is something that never stops.
