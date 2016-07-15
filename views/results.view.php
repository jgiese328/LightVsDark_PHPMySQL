<?php if(isset($_SESSION['survey'])) { ?>

  <div class="contentContainerAll">
      <h1 style="margin-top:-0.75em;">Survey Results</h1>

      <h4 style='margin: 0 3.5em'> Results listed below have been calculated using the results of all site visitors who have completed the survey. </h4>
        <br />

      <div id="surveyDiv">
        <h3 style="margin-left:1.5em;">Total Responses: &nbsp;&nbsp;&nbsp;<?php echo $questionTotal ?></h3>

        <h3 class = 'tableSubHeader' >Outdoor Activities</h3>

        <div class = "contentContainer clearfix">
          <span class="containerLeft width35 lightBack"><p>Golfing Total: <?php echo $finalResults['golfing'].' ('.percentCalc($finalResults["golfing"],$questionTotal).')'; ?></p></span>
          <span class="containerRight width35 darkBack"><p>Stargazing Total: <?php echo $finalResults['stargazing'].' ('.percentCalc($finalResults["stargazing"],$questionTotal).')'; ?></p></span>
        </div>
        <div class = "contentContainer clearfix">
            <span class="containerLeft width35 lightBack"><p>Soccer Total: <?php echo $finalResults['soccer'].' ('.percentCalc($finalResults["soccer"],$questionTotal).')'; ?></p></span>
            <span class="containerRight width35 darkBack"><p>Hammock Total: <?php echo $finalResults['hammock'].' ('.percentCalc($finalResults["hammock"],$questionTotal).')'; ?></p></span>
        </div>

        <h3 class = 'tableSubHeader'>Indoor Activities</h3>

        <div class = "contentContainer clearfix">
          <span class="containerLeft width35 lightBack"><p>Playing Cards Total: <?php echo $finalResults['cards'].' ('.percentCalc($finalResults["cards"],$questionTotal).')'; ?></p></span>
          <span class="containerRight width35 darkBack"><p>Take a Bath Total: <?php echo $finalResults['bath'].' ('.percentCalc($finalResults["bath"],$questionTotal).')'; ?></p></span>
        </div>
        <div class = "contentContainer clearfix">
            <span class="containerLeft width35 lightBack"><p>EDM Music Total: <?php echo $finalResults['edm'].' ('.percentCalc($finalResults["edm"],$questionTotal).')'; ?></p></span>
            <span class="containerRight width35 darkBack"><p>Ambient Music Total: <?php echo $finalResults['ambient'].' ('.percentCalc($finalResults["ambient"],$questionTotal).')'; ?></p></span>
        </div>

        <h3 class = 'tableSubHeader'>Approach to Life</h3>

        <div class = "contentContainer clearfix">
          <span class="containerLeft width35 lightBack"><p>Try New Things Total: <?php echo $finalResults['energetic'].' ('.percentCalc($finalResults["energetic"],$questionTotal).')'; ?></p></span>
          <span class="containerRight width35 darkBack"><p>What You Know Total: <?php echo $finalResults['chill'].' ('.percentCalc($finalResults["chill"],$questionTotal).')'; ?></p></span>
        </div>
        <div class = "contentContainer clearfix">
            <span class="containerLeft width35 lightBack"><p>Have More Friends Total: <?php echo $finalResults['outgoing'].' ('.percentCalc($finalResults["outgoing"],$questionTotal).')'; ?></p></span>
            <span class="containerRight width35 darkBack"><p>Existing Friends Total: <?php echo $finalResults['reserved'].' ('.percentCalc($finalResults["reserved"],$questionTotal).')'; ?></p></span>
        </div>

      </div>
  </div>

<?php } else { ?>
  <div class="contentContainerAll" >
      <h1 style="margin-top:-0.75em;">Survey Results</h1>
      <br />
      <div class = "contentContainer clearfix">
        <div id="surveyDiv">
            <span colspan=2 class='tableMainHeader'>Please complete the survey found on the survey <a href='index.php?page=survey'>link</a> to view results on this page.</span>
        </div>
      </div>
  </div>


<?php } ?>
