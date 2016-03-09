					function powerFunction(theID)
					{
					    var url = "classes/models/";
					    var url = url.concat(theID,".php");
					    //alert(url); //testing

					    // get the URL
					    http = new XMLHttpRequest(); 
					    http.open("GET", url, true);
					    http.send(null);

					    // prevent form from submitting
					    return false;
					}

