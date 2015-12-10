<!DOCTYPE html>
<html>
<!-- dit is een copy/paste van header.html met enkele dingen toegevoegd voor de html5 wysiwyg editor -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/angular-1.4.6/angular-1.4.6/angular.js"></script>
	<link rel="manifest" href="assets/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <title>EuroGijbels Wedstrijdplatform</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">

    <!-- Fonts from Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,900' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	
	<!-- voor de html5 wysiwyg editor -->
	<script src="../wysihtml5/parser_rules/advanced.js"></script>
	<script src="../wysihtml5/dist/wysihtml5-0.3.0.js"></script>
	
	<style>
  body {
    font-family: Verdana;
    font-size: 11px;
  }
  
  h2 {
    margin-bottom: 0;
  }
  
  small {
    display: block;
    margin-top: 40px;
    font-size: 9px;
  }
  
  small,
  small a {
    color: #666;
  }
  
  a {
    color: #000;
    text-decoration: underline;
    cursor: pointer;
  }
  
  #toolbar [data-wysihtml5-action] {
    float: right;
  }
  
  #toolbar,
  textarea {
    width: 850px;
    padding: 5px;
    -webkit-box-sizing: border-box;
    -ms-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  textarea {
    height: 280px;
    border: 2px solid green;
    font-family: Verdana;
    font-size: 11px;
  }
  
  textarea:focus {
    color: black;
    border: 2px solid black;
  }
  
  .wysihtml5-command-active {
    font-weight: bold;
  }
  
  [data-wysihtml5-dialog] {
    margin: 5px 0 0;
    padding: 5px;
    border: 1px solid #666;
  }
  
  a[data-wysihtml5-command-value="red"] {
    color: red;
  }
  
  a[data-wysihtml5-command-value="green"] {
    color: green;
  }
  
  a[data-wysihtml5-command-value="blue"] {
    color: blue;
  }
</style>
</head>



<body ng-app>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
			<h1>wysihtml5 - Advanced Editor Example</h1>

			<form method="POST" action="">
				<div id="toolbar" style="display: none;">
					<a data-wysihtml5-command="bold" title="CTRL+B">bold</a> |
					<a data-wysihtml5-command="italic" title="CTRL+I">italic</a> |
					<a data-wysihtml5-command="createLink">insert link</a> |
					<a data-wysihtml5-command="insertImage">insert image</a> |
    				<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">h1</a> |
    				<a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">h2</a> |
    				<a data-wysihtml5-command="insertUnorderedList">insertUnorderedList</a> |
    				<a data-wysihtml5-command="insertOrderedList">insertOrderedList</a> |
    				<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red">red</a> |
    				<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green">green</a> |
    				<a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue">blue</a> |
    				<a data-wysihtml5-command="insertSpeech">speech</a>
    				<a data-wysihtml5-action="change_view">switch view</a>
    
					<div data-wysihtml5-dialog="createLink" style="display: none;">
						<label>
							Link:
							<input data-wysihtml5-dialog-field="href" value="http://">
						</label>
						<a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    				</div>
    
    				<div data-wysihtml5-dialog="insertImage" style="display: none;">
    				  <label>
    				    Image:
    				    <input data-wysihtml5-dialog-field="src" value="http://">
    				  </label>
    				  <label>
    				    Align:
    				    <select data-wysihtml5-dialog-field="className">
    				      <option value="">default</option>
    				      <option value="wysiwyg-float-left">left</option>
    				      <option value="wysiwyg-float-right">right</option>
    				    </select>
    				  </label>
    				  <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    				</div>
    
				</div>
				<textarea id="textarea" name="edittextarea" placeholder="Enter text ..."></textarea>
				<br><!--<input type="reset" value="Reset form!">--><input type="submit" name="opslaan" value="Opslaan">
			</form>
		
		
			<br/>
			<?php
				if(isset($_POST['opslaan'])){
					echo $_POST['edittextarea']; //nog controleren op safe-input etc.
					//dit moet dan worden weggeschreven naar de database.
					//Op de pagina waar deze tekst nodig is, moet deze dan dynamisch worden geladen uit de database.
					
					//Is het nuttig om hier iets met Angular te doen? Ik denk het niet aangezien het toch in de database moet worden opgeslagen.
				}
			?>

			</div>		
		</div>
	</div>
	<?php
		include "../html/footer.html";
	?>
	<script>
		var editor = new wysihtml5.Editor("textarea", { // id of textarea element
			toolbar:      "toolbar", // id of toolbar element
			stylesheets:  "editorstylesheet.css", //stylesheet
			parserRules:  wysihtml5ParserRules // defined in parser rules set 
			});
	</script>
</body>
</html>


