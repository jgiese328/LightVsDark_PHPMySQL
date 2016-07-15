<?php

function percentCalc($x,$y)
{
  return number_format( $x/$y * 100, 2 ) . '%';
}

if($_SESSION['survey'] == true)
{
  try {
    $db = new PDO('mysql:host=localhost;dbname=database1', MYSQL_USER, MYSQL_PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo "<br/><br/><br/><br/>Unable to Connect";
    // echo $e->getMessage();
    exit;
  }

  if($_POST['surveySubmit'] == 'Submit Survey')
  {
    try {
      //new results:
      // preparing sql and binding parameters
      $stmt = $db->prepare("insert into survey_results (session_id, question_1, question_2,question_3,question_4,question_5,question_6)
                  values (:session_id, :question_1, :question_2,:question_3,:question_4,:question_5,:question_6)");

      $stmt->bindParam(':session_id', $session_id);
      $stmt->bindParam(':question_1', $question_1);
      $stmt->bindParam(':question_2', $question_2);
      $stmt->bindParam(':question_3', $question_3);
      $stmt->bindParam(':question_4', $question_4);
      $stmt->bindParam(':question_5', $question_5);
      $stmt->bindParam(':question_6', $question_6);

      // insert row
      $session_id = $_SESSION['id'];
      $question_1 = $_POST['question_1'];
      $question_2 = $_POST['question_2'];
      $question_3 = $_POST['question_3'];
      $question_4 = $_POST['question_4'];
      $question_5 = $_POST['question_5'];
      $question_6 = $_POST['question_6'];

      $stmt->execute();

      // echo "<br/>Survey results successfully inserted";
    }
    catch (Exception $e) {
      echo "<br/><br/><br/><br/>Error writing or retrieving data from survey_results table. Error:".$e->getMessage();
      exit;
    }
  }

  // query results for each question
  try {
    for($x=1;$x<7;$x++) {
      $results = $db->query("SELECT count(*) as 'count', question_{$x} FROM survey_results GROUP BY question_{$x}");
      $resultsArray[$x] = $results->fetchAll(PDO::FETCH_ASSOC);
    }
    foreach($resultsArray as $question => $questionResults)
    {
      // only need one total
      $questionTotal = $questionResults[0]['count'] + $questionResults[1]['count'];
      break;
    }
    foreach($resultsArray as $question => $questionResults)
    {
      $finalResults[$questionResults[0]["question_{$question}"]] = $questionResults[0]['count'];
      $finalResults[$questionResults[1]["question_{$question}"]] = $questionResults[1]['count'];
    }
  }
  catch (Exception $e) {
  	echo "<br/><br/><br/><br/>Error writing or retrieving data from survey_results table. Error:".$e->getMessage();
	exit;
  }
}

require_once('views/results.view.php');
require_once('footer.php');


/*

MySQL table info:
-- Honestly the index was overkill here.

create table survey_results (session_id varchar(255) not null,
                             question_1 varchar(255) not null,
                             question_2 varchar(255) not null,
                             question_3 varchar(255) not null,
                             question_4 varchar(255) not null,
                             question_5 varchar(255) not null,
                             question_6 varchar(255) not null
);

alter table survey_results add index(question_1), add index(question_2),add index(question_3),add index(question_4),add index(question_5),add index(question_6);
*/

?>
