<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			.menu {
				width: 100%;
				list-style-type: none;
			}
			.menu>li {
				display:inline-block;
				width: 100px;
			}
			.menu li:hover {
				background-color: #999;
			}
			.menu ul {
				display: none;
				background-color: #FFF;
				border: 1px solid #909;
			}
			.menu li:hover ul {
				display: block;

			}
		</style>
	</head>
	<body>
		<ul class="menu">
			<li>
				File
				<ul>
					<li>
						Open
					</li>
					<li>Save</li>
				</ul>
			</li>
			<li>
				Options
				<ul>
					<li>Network</li>
					<li>Social</li>
				</ul>
			</li>
		</ul>
	</body>
</html>