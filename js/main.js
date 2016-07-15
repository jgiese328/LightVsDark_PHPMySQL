$('#unsetChoiceSession').click(function(){
		if (confirm("Clear your previous choice?")){
        $('form#resetChoice').submit();
 		}
});

$('#buttonSubmit').click(function(event){
		if (!($('input[name=question_1]').is(":checked")) ||
        !($('input[name=question_2]').is(":checked")) ||
        !($('input[name=question_3]').is(":checked")) ||
        !($('input[name=question_4]').is(":checked")) ||
        !($('input[name=question_5]').is(":checked")) ||
        !($('input[name=question_6]').is(":checked"))) {
          event.preventDefault();
          alert('Empty response for one of the survey questions. Please double-check and resubmit form request. ');
        }
        else {
          $('form#surveyForm').submit();
        }
});
