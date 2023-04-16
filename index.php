<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>JS CALCULATOR</title>
	<link rel="stylesheet" href="style.css">

</head>
<body>

	<section class="calculator">
		<form>
			<input type="text" class="screen">
		</form>

		<div class="buttons">
			<button type="button" class="btn btn-yellow" data-num="*">*</button>
			<button type="button" class="btn btn-yellow" data-num="/">/</button>
			<button type="button" class="btn btn-yellow" data-num="-">-</button>
			<button type="button" class="btn btn-yellow" data-num="+">+</button>

			<button type="button" class="btn btn-grey" data-num="9">9</button>
			<button type="button" class="btn btn-grey" data-num="8">8</button>
			<button type="button" class="btn btn-grey" data-num="7">7</button>
			<button type="button" class="btn btn-grey" data-num="6">6</button>
			<button type="button" class="btn btn-grey" data-num="5">5</button>
			<button type="button" class="btn btn-grey" data-num="4">4</button>
			<button type="button" class="btn btn-grey" data-num="3">3</button>
			<button type="button" class="btn btn-grey" data-num="2">2</button>
			<button type="button" class="btn btn-grey" data-num="1">1</button>
			<button type="button" class="btn btn-grey" data-num="0">0</button>
			<button type="button" class="btn btn-grey" data-num=".">.</button>

			<button type="button" class="btn-equal">=</button>
			<button type="button" class="btn-clear">C</button>
		</div>
	</section>

	<script src="script.js"></script>
</body>
</html>