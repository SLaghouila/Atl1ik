<html>

<a 
	href="ADMINRUNDE 1 !!!!">[Tilbage]
</a> &nbsp;
<a 
	href="forside.php">[Log ud]
</a>

<head><title>Tilf&oslash;j deltager til runde</title></head>

<body>
<center><h1>Funktion som giver runde navn</h1></center>
<center>
<br>

<form action="insert.php" method="post">
	<table>
		<tr>
			<td>Fornavn
			</td>
			<td> <input type="text" name="fornavn">
			</td>
		</tr>
		<tr>
			<td>Efternavn
			</td>
			<td> <input type="text" name="efternavn">
			</td>
		</tr>
		<tr>
			<td>Klub
			</td>
			<td>
				<select name="select">
					<option value="red">v&aelig;lg</option>
					<option value="green">Skal &aelig;ndres</option>
				</select>
			</td>
			<td>
				<input type="checkbox" name="option1" value="ingen klub"> Ingen klub 
			</td>
				<! Her er det vigtigt at man ikke kan vælge ingen klub og klub samtidig !>
		</tr>
		<tr>
			<td>&Aring;rgang
			</td>
			<td>
				<select name="select">
					<option value="red">v&aelig;lg</option>
					<option value="green">Skal &aelig;ndres</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>K&oslash;n
			</td>
			<td>
				<input type="checkbox" name="option1" value="mand"> M &nbsp; 
				<input type="checkbox" name="option1" value="kvinde"> K
			</td>
		</tr>
		<tr>
			<td>Distance
			</td>
			<td>
				<select name="select">
					<option value="red">v&aelig;lg</option>
					<option value="green">Skal &aelig;ndres</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tilmeldingstid 
			</td>
			<td>
				<input type="text" name="tilmeldtid"> 
			</td>
			<td>
				<input type="checkbox" name="option1" value="kvinde"> Ingen tilmeldingstid 
			</td>
		</tr>
		<tr>
			<td>&Aring;rsbedste 
			</td>
			<td>
				<input type="text" name="aarstid"> 
			</td>
			<td>
				<input type="checkbox" name="option1" value="kvinde"> Ingen  &aring;rsbedste 
			</td>
		</tr>
		<tr>
			<td>Personligrekord 
			</td>
			<td>
				<input type="text" name="pr"> 
			</td>
			<td>
				<input type="checkbox" name="option1" value="kvinde"> Ingen personligrekord 
			</td>
		</tr>
		<tr>
			<td colspan=3 align= center>
				<input type="button" value="Tilmeld endnu en distance" style="width:190px;">
			</td>
		</tr>
		<tr>
			<td colspan=3 align= center>
				<input type="button" value="F&aelig;rdig" style="width:190px;">
			</td>
		</tr>

</table></form></center>


</body>


</html>
