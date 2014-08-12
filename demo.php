<?php
header('Content-type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<title>DCaptcha test page</title>
<script>
var challenge = <? passthru('rdmd -Jdcaptcha shim'); ?>;

window.onload = function() {
	document.getElementById('question').innerHTML = challenge.question;
}
function submit() {
	var answer = document.getElementById('answer').value.toLowerCase();
	for (var i = 0; i < challenge.answer.length; i++)
		if (challenge.answer[i] == answer) {
			alert('Correct!');
			location = location;
			return;
		}
	alert('Wrong answer, try again.');
}
</script>

<form id='form' action='javascript:submit()'>
<div id='question'></div>
<input id='answer' autofocus><input type='submit'>
<div id='result'></div>
</form>
