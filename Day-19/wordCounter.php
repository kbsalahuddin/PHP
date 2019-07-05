
<?php 
//Dynamic call style
/*require_once 'App\classes\wordCounterClass.php';

$ass=new App\classes\wordCounterClass;
$booty=$ass->demo();*/

//or another way is...(Static Call style) 
//require_once 'App\classes\wordCounterClass.php';
require_once 'vendor/autoload.php';
use App\classes\wordCounterClass;
$booty= wordCounterClass::demo();

?>
<form action="" method="POST">
	<table>
		<tr>
			<th>Enter Your String</th>
			<td>
				<input type="text" name="given_string" size="50" value="<?php echo $_POST['given_string'];?>">
			</td>
		</tr>
		<tr>
			<th>Words Total</th>
			<td>
				<input type="text" name="total_word" value="<?php echo $booty['totalWords'];?>">
			</td>
		</tr>
		<tr>
			<th>Total Chars</th>
			<td>
				<input type="text" name="total_chars" value="<?php echo $booty['totalChars'];?>">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" name="btn" value="Submit">
			</td>
		</tr>
	</table>	
</form>