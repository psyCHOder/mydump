<?php
$text = '<form action="index.php" method="GET">
		<textarea name="dump" class="yottaurl" placeholder="<?php echo "\n\t\t\tPlease Enter the Text";?>"></textarea>
		<span><br><input type="submit" value="Get yoctOn9"class="btn btn-lg btn-primary"><br>
		<font color="white" size="4" align="top">
		Enter custom yocto url if you want:
		</font>
		<font color="blue" size="4" align="left"><b>  http://www.yoctOn9.com/ </font></b><input type="text" name="try" class="yoctourl" placeholder="small URL">
		</span>
	</form>';
echo htmlspecialchars($text);
?>