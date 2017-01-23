<!DOCTYPE html>
<html>
<head>
  <title>Time Example</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
<?php include 'connection.php';
$sql = "SELECT datetime, seconds FROM techfairtable";
$result = $conn->query($sql);
echo '<table class = "table"</table>';
echo '<thead> Table </thead>';
echo '<tr>';
echo '<th> Date </th>';
echo '<th> Time </th>';
echo '<th> Seconds Brushed </th>';
echo '</tr>';
echo '</thead>';
while($row = $result->fetch_assoc()) {
  $splitTimeStamp = explode(" ",$row['datetime']);
  $date = $splitTimeStamp[0];
  $time = $splitTimeStamp[1];
  $seconds = $row['seconds'];
  echo '<tbody>';
  echo '<tr>';
  echo '<td>' . $date . '</td>';
  echo '<td>' . $time . '</td>';
  echo '<td>' . $seconds . '</td>';
  echo '</tr></tbody>';
}
$conn->close();
?>
</body>

</html>
