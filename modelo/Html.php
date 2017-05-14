<?php 

class html
{
	
	function __construct()
	{
		
	}

	function header()
	{

	echo '
	</head>
	<body>
	<div class="container-fluid">
	';

	}

	function footer()
	{
	
	echo '
    <br></br>
	<p class="text-center">&copy; '.date('Y').' Luis Augusto Claudio Ponce </p>
	</div>
	</body>
	</html>';

	}
}


 ?>