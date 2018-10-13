<html>
	<head>
		<title>Calculator!</title>
		<link href="calculator.css" rel="stylesheet" type="text/css" media="screen">
		<script type="text/javascript" src="calculator.js"></script>
	</head>
	<body>

		<table align="center" width="20%"
	height= "49%" border="0px" id="myCalc" class="table">
			<tr >
				<td colspan="4" class="board" id="questionBoard"></td>
			</tr>

			<tr>
				<td colspan="4" class="board" id="answerBoard"></td>
			</tr>
			
			<tr>
				<td ><input class="button" type="button" name="division" value="/" onclick="pickSign('/')" ></td>
				<td ><input class="button" type="button" name="multiply" value="X" onclick="pickSign('x')" ></td>
				<td colspan="2" ><input class="button" type="button" name="backspace" value="Clear" onclick="deleteAll()" ></td>
			</tr>

			<tr>
				<td ><input class="button" type="button" name="seven" value="7" onclick="showNumber(7)" ></td>
				<td ><input class="button" type="button" name="eight" value="8" onclick="showNumber(8)" ></td>
				<td ><input class="button" type="button" name="nine" value="9" onclick="showNumber(9)" ></td>
				<td ><input class="button" type="button" name="minus" value="-" onclick="pickSign('-')" ></td>
			</tr>

			<tr>
				<td ><input class="button" type="button" name="four" value="4" onclick="showNumber(4)" ></td>
				<td ><input class="button" type="button" name="five" value="5" onclick="showNumber(5)" ></td>
				<td ><input class="button" type="button" name="six" value="6" onclick="showNumber(6)" ></td>
				<td ><input class="button" type="button" name="add" value="+" onclick="pickSign('+')" ></td>
			</tr>

			<tr>
				<td ><input class="button" type="button" name="one" value="1" onclick="showNumber(1)" ></td>
				<td ><input class="button" type="button" name="two" value="2" onclick="showNumber(2)" ></td>
				<td ><input class="button" type="button" name="three" value="3" onclick="showNumber(3)" ></td>
				<td rowspan="2"><input class="button" type="button" name="equals" value="=" onclick="performOperation()" ></td>
			</tr>

			<tr>
				<td colspan="2"><input class="button" type="button" name="zero" value="0" onclick="showNumber(0)" ></td>
				<td ><input class="button" type="button" name="dot" value="." onclick="showNumber('.')" ></td>
			</tr>			
		</table>
	</body>

</html>