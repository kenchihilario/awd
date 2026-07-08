<!DOCTYPE html>
<html>
<head>
    <title>Kenchi' Backend</title>
</head>

<body style="
    background:black;
    color:white;
    font-family:Arial,sans-serif;
    padding:40px;
">

<h1>Kenchi' Backend</h1>

<p>Laravel backend server</p>

<br>
<p>IP Address: {{ request()->getHost() }}:{{ request()->getPort() }}</p>
<p>PHP v8.3.32</p>
<p>Apache/2.4.67 (Debian)</p>
<p>mysql  Ver 8.0.46</p>
<p>Laravel v12.62.0</p>
<p>Next.js v16.2.10</p>

</body>
</html>
