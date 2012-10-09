<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<link rel="stylesheet" type="text/css" href="simple.css" />
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
</head>
<frameset>
    <frame>
    <body>
    <div>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    </div>
    <?php
	echo $_GET['trial'];
	?>
    </body>
    </frame>
    <noframes>
    <body>
    <p>This page uses frames. The current browser you are using does not support frames.</p>
    </body>
    </noframes>
</frameset>
</html>