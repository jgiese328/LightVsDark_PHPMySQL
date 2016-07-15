
<style>
/*Button formatting overwrite*/
.overwrite {
  margin: 0 auto;
}
</style>


<?php if(isset($_SESSION['survey'])) { ?>

  <div class="contentContainerAll">

      <h1>Choice Survey</h1>

      <h4 style='margin: 0 3.5em'>Please complete the below survey to view your results and compare those results to others who have visited this site.  </h4>
        <br />

      <div class = "contentContainer clearfix">
        <div id="surveyDiv">
            <span colspan=2 class='tableMainHeader'>Survey has been accepted. Please click on the '<a href='index.php?page=results'>results</a>' link to view your results</span>
        </div>
      </div>
  </div>


<?php } else { ?>


<div class="contentContainerAll">

    <h1>Choice Survey</h1>

    <h4 style='margin: 0 3.5em'>Please complete the below survey to view your results and compare those results to others who have visited this site.  </h4>
      <br />

  <div class = "contentContainer clearfix">

    <form id = 'surveyForm' method='post' action='index.php?page=results'>
      <div id="surveyDiv">
          <span colspan=2 class='tableMainHeader'>Choose between the options below to see how well you align to '<?php echo substr($home,5); ?>'.</span>

            <h3 class = 'tableSubHeader' >Outdoor Activities</h3>

            <?php
            tableRadio('1','golfing','Afternoon of golfing','stargazing','Evening of stargazing');
            tableRadio('2','hammock','Relaxing in a hammock','soccer','Playing soccer in field');
            ?>

            <h3 class = 'tableSubHeader'>Indoor Activities</h3>

            <?php
            tableRadio('3','cards','Playing cards with friends','bath','Taking a bubble bath');
            tableRadio('4','edm','Listening to EDM','ambient','Listening to ambient music');
            ?>

            <h3 class = 'tableSubHeader'>Approach to Life</h3>

            <?php
            tableRadio('5','energetic','Always ready for new things','chill','Sticking with what you know');
            tableRadio('6','reserved','Content with a few friends','outgoing','The more the merrier');
            ?>
            <br/><br/>
        <input type='submit' class='buttonSubmit overwrite' id='buttonSubmit' name='surveySubmit' value = 'Submit Survey'>
      </div>
    </form>
  </div>
</div>

<?php } ?>

</body>
