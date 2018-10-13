var firstNumber=counter=secondNumber=0;
var firstNumberLength, finalAnswer;
var opSign; var getText;

function showNumber(number){	
	getText=document.getElementById('questionBoard').textContent;
	
	if (firstNumber===0){
		if (getText.length>19){
			alert("Max Length of 20 Exceeded.");
		}else{
			var newText=getText+number;
			document.getElementById('questionBoard').textContent=newText;
		}
	}else{
		if (getText.length>39){
			alert("Max Length of 20 Exceeded.");
		}else{
			var newText=getText+number;
			document.getElementById('questionBoard').textContent=newText;
		}
	}	
}

function pickSign(sign){
	counter++;
	if (counter>1){
		performOperation();
		getText=document.getElementById('questionBoard').textContent;
		firstNumber=getText;
		firstNumberLength=getText.length;
		document.getElementById('questionBoard').textContent=finalAnswer+sign;
		opSign=sign;
		//document.getElementById('answerBoard').textContent="";
	}else{
		getText=document.getElementById('questionBoard').textContent;
		firstNumber=getText;
		firstNumberLength=getText.length;
		opSign=sign;
		var newText=getText+sign;
		document.getElementById('questionBoard').textContent=newText;
	}	
}

function setSecondNumber(){
	getText=document.getElementById('questionBoard').textContent;
	var totalLength=getText.Length;
	startingPosition=++firstNumberLength;
	secondNumber=getText.substring(startingPosition);
}

function performOperation(){
	setSecondNumber();
	if (opSign==='+'){
		finalAnswer=Number(firstNumber) + Number(secondNumber);
	}else if (opSign==='-'){
		finalAnswer=firstNumber-secondNumber;
	}else if (opSign==='/'){
		finalAnswer=firstNumber/secondNumber;
	}else if (opSign==='x'){
		finalAnswer=firstNumber*secondNumber;
	}

	document.getElementById('questionBoard').textContent=finalAnswer;
	document.getElementById('answerBoard').textContent=finalAnswer;
}

function deleteAll(){
	document.getElementById('questionBoard').textContent="";
	opSign=firstNumberLength="";
	firstNumber=secondNumber=counter=0;
	document.getElementById('answerBoard').textContent="";
}