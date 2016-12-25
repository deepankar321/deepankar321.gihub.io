<!DOCTYPE html>
<html>
<head>
	<title>test script passing</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
	<!-- Compiled and minified CSS -->

	<!-- Compiled and minified JavaScript -->
	<script src="js/materialize.min.js"></script>
</head>
<body>
<div class="row">
	<div class="col s12 m6 ">
	    <form >
	      <div class="row">
	        <div class="input-field col s12">
	        	<!-- <fieldset>
	    			<legend style="font-style: bold;">CODEBOX:</legend> -->
					<textarea  class="materialize-textarea" placeholder="Remember, be nice!" cols="30" rows="5" id="test" type="textb" name="test"  ></textarea>
					<label for="test">Textarea</label>
					<a class="btn waves-effect waves-light" type="submit" name="action"  id="ajaxButton">Submit
				    	<!-- <i class="material-icons right">send</i> -->
				    </a>
				<!-- </fieldset> -->
	        </div>
	      </div>
	    </form>
	</div>
    <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">My Script Output & Script</span>
              <p id="out">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <!-- <div class="card-action">
              <a href="#">This is a link</a>
              <a href="#">This is a link</a>
            </div> -->
          </div>
        </div>
  </div>
   
	<script type="text/javascript" src="js/send.js"></script>
</body>
</html>
