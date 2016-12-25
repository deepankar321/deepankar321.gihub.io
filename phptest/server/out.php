<?php
//onkeyup="if(/^[a-zA-Z\s]*$/.testx(this.value)==true){}else{ this.value=this.value.replace(/[!@#$%^*&()_+-=]|\d+/g,'')}"
$test_val="Test is not defined";
if(isset($_POST['test'])){
	$test = $_POST['test'];
	if ($test!=''){
		if(!empty($test)){

			eval($test);
			echo '<hr>';
			echo $test =  base64_encode($test);
			echo '<hr>';
			echo base64_decode($test);
			// echo "<pre>".$test."</pre>";
			// echo "<pre>";print_r($ram);echo "</pre>";
		}
	} else {
		echo $test_val;
	}
} else {
	echo $test_val;
}

?>
