
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modify Time Table </title>

	<style type="text/css">
		.headin
		{
			font-size: 30px;
			text-align: center;
			
		}


    
    input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid black;
  border-radius: 4px;

  color: white;
}

	</style>
	<style>
    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 5px;
    }

    .updated {
        background-color: red;
    }
</style>
</head>
<body style="background-image: url('https://images.pexels.com/photos/2923591/pexels-photo-2923591.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;color: white;font-family: 'Montserrat', sans-serif;">





<!--Navigation bar -->

<div>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
  font-size: 18px;
}
</style>

  <ul>
  <li><a class="active" href="main.html">Home</a></li>
  <li><a class="active" href="#home" style="background-color: whitesmoke;
  color: black;">Exam time table</a></li>
  <li><a href="http://localhost/nanu/aexamalterationview.php">Exam Alteration</a></li>
  <li><a href="#contact">Feed back</a></li>
  <li><a href="#about">Contact us</a></li>
   <li style="float: right;"><a href="#about">Login</a></li>
</ul>
<br>
<div class="headin" style="color: white;">
Welcome Admistrator
</div>
<br>
<br>

<div >




<form method="POST" action="process.php" style="background-color:None;padding:50px;opacity:0.9;margin:30px;border-radius: 10px;
  border: 2px solid ">
  
    
		<label for="name">Enter Date You Want To Modify The Exam (yyy/mm/dd):</label>
		<input style="color:Black" type="text" id="name" name="name" required><br>

    <label for="ename">Enter Exam Name You Want To Modify The Exam </label>
		<input style="color:Black" type="text" id="ename" name="ename" required><br>


    


		<label for="newname">Enter Modified Date :</label>
		<input style="color:Black" type="text" id="newname" name="newname" required>
		
    <label for="btime">Enter Modified Beginning time of exam  :</label>
		<input style="color:Black" type="text" id="btime" name="btime" required>

    <label for="etime">Enter Modified Ending time of exam  :</label>
		<input style="color:Black" type="text" id="etime" name="etime" required>

		<button type="submit" style="padding:10px;background-color: transparent;color:white">Submit</button>
	</form>
</div>

</body>
</html>