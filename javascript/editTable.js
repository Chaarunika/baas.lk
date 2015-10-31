function selectFunction(variable){			

	if (variable == 0)	{			
		document.getElementById("apDivTopic0").style.zIndex = 8;

		document.getElementById("apDivTag0").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;

		document.getElementById("apDivOptionBox0").style.visibility = "visible";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";

		document.getElementById("apDivBar0").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";
		document.getElementById("apDivProfBox").style.height = "600px" ;	
	}

	if (variable == 1){			
		document.getElementById("apDivTopic1").style.zIndex = 8;
		
		document.getElementById("apDivTag1").style.color = "black" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "visible";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";
		
		document.getElementById("apDivBar1").style.background = "orange";
		document.getElementById("apDivBar0").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";
		
		document.getElementById("apDivProfBox").style.height = "500px" ;
	}
	
	if (variable == 2){			
		document.getElementById("apDivTopic2").style.zIndex = 8;
		
		document.getElementById("apDivTag2").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		document.getElementById("apDivTag3").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "visible";
		document.getElementById("apDivOptionBox3").style.visibility = "hidden";
		
		document.getElementById("apDivBar2").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar0").style.background = "white";
		document.getElementById("apDivBar3").style.background = "white";		
		
		document.getElementById("apDivProfBox").style.height = "600px" ;		
	}
	
	if (variable == 3){			
		document.getElementById("apDivTopic3").style.zIndex = 8;
		
		document.getElementById("apDivTag3").style.color = "black" ;
		document.getElementById("apDivTag1").style.color = "grey" ;
		document.getElementById("apDivTag2").style.color = "grey" ;
		document.getElementById("apDivTag0").style.color = "grey" ;
		
		document.getElementById("apDivOptionBox0").style.visibility = "hidden";
		document.getElementById("apDivOptionBox1").style.visibility = "hidden";
		document.getElementById("apDivOptionBox2").style.visibility = "hidden";
		document.getElementById("apDivOptionBox3").style.visibility = "visible";
		
		document.getElementById("apDivBar3").style.background = "orange";
		document.getElementById("apDivBar1").style.background = "white";
		document.getElementById("apDivBar2").style.background = "white";
		document.getElementById("apDivBar0").style.background = "white";		
		document.getElementById("apDivProfBox").style.height = "600px" ;		
	}	
} 