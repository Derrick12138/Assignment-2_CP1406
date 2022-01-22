<html> 
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your birthday is: <?php echo $_POST["birthday"]; ?><br>
your product interests is:<br>
<?php 
if(isset($_POST['Salads'])){
    echo "Salads"."<br>";
}
if(isset($_POST['Lamingtons'])){
    echo "Lamingtons"."<br>";
}
if(isset($_POST['Sun_and_Moon_Sandwich'])){
    echo "Sun and Moon Sandwich"."<br>";
}
if(isset($_POST['French_Toast_and_Bacon'])){
    echo "French Toast and Bacon"."<br>";
}
if(isset($_POST['Home_styles_soup_of_the_day'])){
    echo "Home styles soup of the day"."<br>";
}
if(isset($_POST['Cheeseburger'])){
    echo "Cheeseburger"."<br>";
}
?>
 ！You have been approved to be added to the Sun and Moon Cafe email list.
</body>
</html>