<!DOCTYPE html>
<html>
<head>
    <title>Bitcoin tracker</title>
</head>
<body>
	<h1>Hi, {{ $subscriber->email }}</h1>
    <h4>Price of BTC has exceeded the limit of {{ $subscriber->price_limit }} USD</h4>
</body>
</html>