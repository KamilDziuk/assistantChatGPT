<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Assistant Chat GPT</title>
<link rel="stylesheet" type="text/css" href="css/assistant.css">
<script src="js/assistant.js" defer></script>
</head>
<body>

<!-- assistant start -->
<div class="assistantContainer">

<div class="headerCookie">
<div id="headerText" >Your  AI assistant</div>
</div>
<textarea id="question"  placeholder="Have a question?"></textarea><br>
<p  id="response" ></p>
<button id="questionButton" >Ask a question</button>
<!-- assistant   start -->
<?php require "voxAPI.php" ?>
<script>
let data = <?php   echo json_encode($data); ?>;
</script>

</body>
</html>
