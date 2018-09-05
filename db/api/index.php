<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CHS Manager API</title>
</head>

<body>
	<h1>CHS Manager API</h1>
	<h2>Users</h2>
	<h3>List users:</h3>
	<p>
		<code>http://chs.ironk12.org/db/api/list_users.php</code>
		<br>
		<ul>
			<li><b>Parameters:</b> N/A</li>
			<li><b>Returns:</b> JSON List of usernames and ID's</li>
		</ul>
		<b>Sample:</b>
		<code>[{"id":"1","username":"andersmmg"},{"id":"3","username":"caleb.swallow"},{"id":"4","username":"dominique"},{"id":"5","username":"ammaron"},{"id":"6","username":"ETDalex"},{"id":"7","username":"NotCastiel"}]</code>
	</p>
	<h3>Get user info:</h3>
	<p>
		<code>http://chs.ironk12.org/db/api/get_user.php</code>
		<br>
		<ul>
			<li><b>Parameters:</b>
				<ul>
					<li><b>username</b>
						<ul>
							<li>string</li>
							<li>Username of user to get info of</li>
						</ul>
					</li>
				</ul>
			</li>
			<li><b>Returns:</b> JSON List of user info</li>
		</ul>
		<b>Sample:</b>
		<code>{"0":"1","id":"1","1":"Joshua","fname":"Joshua","2":"Anderson","lname":"Anderson","3":"andersmmg@gmail.com","email":"andersmmg@gmail.com","4":"andersmmg","username":"andersmmg","6":"1","insert":"1","7":"1","edit":"1","8":"1","delete":"1","9":"1","admin":"1","10":"1","bugger":"1","11":"1","coder":"1","12":"1","gamedev":"1","13":"1","notes":"1","14":"1","tasks":"1","15":"1","emails":"1","16":"1","banners":"1","17":"1","announcer":"1"}</code>
	</p>
</body>

</html>