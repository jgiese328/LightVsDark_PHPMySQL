<?php


function tableRadio($question, $id1, $description1, $id2, $description2) {
  echo "<div class='clearfix tableContainer'>
    <div class = 'tableLeft widthRadioDiv'>
      <label for='$id1'>$description1</label>
      <input type='radio' name='question_".$question."' id='$id1' value='$id1'>
    </div>
    <div class = 'tableLeft widthRadioDiv'>
      <label for='$id2'>$description2</label>
      <input type='radio' name='question_".$question."' id='$id2' value='$id2'>
    </div>
  </div>";
}


require_once('views/survey.view.php');

require_once('footer.php');
