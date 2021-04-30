<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web</title>
</head>

<body>
	<h1></h1>
	  <form action="process.php" method="post" id="quiz-form">
            <p> 1.) Finding the max range of a triangle's last edge. </p>
                <b>First Number  :</b><input type="number" name="first_num" placeholder="Enter text" /> 
            </p>
            <p>
                 <b>Second Number: </b><input type="number" name="second_num" placeholder="Enter text" />
            </p>
            <input type="submit" name="triangle" value="Find max edge of a triangle" />

            </form>
            <p> ------------------------------ </p>

            <form action="process.php" method="post">
            <p> 2.) Counting all ones in a  binary representary. </p>
            User Input: 
                <input type="number" name="allone" placeholder="Enter a number" > <br>
            <p> </p>
                <button type="submit">Find all ones</button>
            </form>
            
        -----------------------------

            <p> 3. ) Joined 2 parts of path. </p>
            <p> </P>
            <form action="process.php" method="post">
            Enter first part:
                <input type="" name="part1" placeholder="Enter text" ><br>
              
            Enter second part:
                <input type="" name="part2" placeholder="Enter text"> <br>
                
                <button type="submit">Joined 2 parts of path.</button>
            </form>


            <p> </p>
             ---------------------------------    
             <p> </p>Validate Sastry. 

            <form action="process.php" method="post" id="quiz-form">        
            <p><b>First Number</b> 
                <input type="number" name="sastry" placeholder="Enter a number" required>
                <button type="submit">Validate Sastry number.</button> 



            </p>

</body>

</html>