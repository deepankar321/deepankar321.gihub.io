(function() {
	  var httpRequest;
	  document.getElementById("ajaxButton").onclick = function() {

	  	var test=document.getElementById("test").value; 
	  	var param = "test=" + encodeURIComponent(test); 
	  	makeRequest('../test/server/out.php',param); 

	  };

	  function makeRequest(url,params) {
	  	
	    httpRequest = new XMLHttpRequest();
	    if (!httpRequest) {
	      alert('Giving up :( Cannot create an XMLHTTP instance');
	      return false;
	    }
	    console.log(test);
		console.log(params);
	    httpRequest.onreadystatechange = alertContents;
	    httpRequest.open('POST', url,true);
	    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	    httpRequest.send(params);
		
	  }

	  function alertContents() {

	    if (httpRequest.readyState === XMLHttpRequest.DONE) {
	      if (httpRequest.status === 200) {
	      	var html_add = document.getElementById("out");
	        html_add.innerHTML =httpRequest.responseText;
	      } else {
	        alert('There was a problem with the request.');
	      }
	    }

	  }
	})();
