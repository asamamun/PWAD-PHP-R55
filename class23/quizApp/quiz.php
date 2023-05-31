<?php
include "./questions_in_array.php";
$score = 0;

// Define the quiz questions and correct answers


// Process the submitted answers
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  foreach ($_POST as $question => $answer) {
    $questionNumber = (int) substr($question, 9); // Extract the question number from the input name
    if ($answer === $quizQuestions[$questionNumber]['correctAnswer']) {
      $score++;
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Quiz App - Results</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h1>Quiz Results</h1>
    <h2>Your Score: <?php echo $score; ?>/<?php echo count($quizQuestions); ?></h2>
    <h3>Review your answers:</h3>
    <ul>
      <?php foreach ($quizQuestions as $questionNumber => $question): ?>
        <li>
          <p><?php echo $question['text']; ?></p>
          <p><strong>Your Answer:</strong> <?php echo isset($_POST['question-' . $questionNumber]) ? $_POST['question-' . $questionNumber] : 'Not answered'; ?></p>
          <p><strong>Correct Answer:</strong> <?php echo $question['correctAnswer']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</body>
</html>
<?php
/* $score = 0;

// Define the correct answers (you can retrieve them from the API if available)
$correctAnswers = [
  1 => 'Paris',  // Question 1 correct answer
  2 => 'Mars',  // Question 2 correct answer
  3 => 'Leonardo da Vinci',  // Question 2 correct answer
  4 => 'Pacific Ocean',  // Question 2 correct answer
  5 => 'Australia',  // Question 2 correct answer
  // Add the correct answers for all the questions
]; */
?>