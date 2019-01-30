<h3>Masukan Kritik dan Saran</h3>
<textarea name="saran" cols="80" rows="5"></textarea>
<br>
<input type="submit" name="Proses" value="Kirim">
<?php
if (isset($_POST['Proses'])) {
	$saran = nl2br($_POST["saran"]);
	echo "Kritik dan Saran Anda adalah<br>";
	echo "<font color =blue>$saran";
}

