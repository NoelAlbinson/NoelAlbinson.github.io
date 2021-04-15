<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>hue.log</title>
    <meta name="description" content="Salong Fenix är en frisörsalong i Oskarshamn." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

</head>
<body>

    <div class="title">
        <h1>hue.<span style="color:darkgrey">log</span></h1>
    </div>

    <div class="header_links">
        <p>Your free VST hub</p>
    </div>

    <div class="divider_line" />


    <div class="main_content">

        <div class="start_screen">
            <h1>Your VST journey starts here</h1>
            <br />
            <div class="button" onclick="ButtonLink()">
                <h1>Search</h1>
            </div>
            <div class="button" onclick="ButtonLink()">
                <h1>Random</h1>
            </div>
            <div class="button" onclick="ButtonLink()">
                <h1>Contribute</h1>
            </div>
        </div>

    </div>

    <script>
        function OnCategoryClick() {
            window.location.href = "https://dawvsthub.com/rhodes-vst-plugins/";
        }
        function ButtonLink() {
            window.location.href = "categories.html";
        }
    </script>

    <?php
    include 'db_connection.php';
    $conn = OpenCon();
	echo "Connected Successfully";
	$result = $conn->query("SELECT * FROM VST_Data");
	
	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
	    echo "<br>".$row["Name"]." ".$row["URL"]." ".$row["Category"];
	  }
	}
	else {
	  echo "0 results";
	}

    CloseCon($conn);
    ?>


</body>

</html>

