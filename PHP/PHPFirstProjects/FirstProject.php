

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body>
<h1 class="highlighted">This is PHP</h1>

<?php  echo "<h1>this is PHP</h1>"; ?>
<?php if (1 + 1 == 2):?> <h2 class="highlighted">True</h2><?php endif;?> 
<?php
    $numberList = [1,2,3,4,5,6,7,8];
    $personList = array(
    );
    for ($i = 0; $i < count($numberList); $i++)
    {
        echo strval($numberList[$i])."</br>";
        if ($i % 2 == 0)
        {
            $personList[$i] = "Pedro";
        }
        else
        {
            $personList[$i] = "Sam";
        }
    }
    for ($i = 0; $i < count($personList); $i++)
    {
        echo strval($i)."    ";
        echo strval($personList[$i]).""."</br>";
    }
?>
<h2>Personal Details Form: </h2>
<form action="FirstProjectFormAction.php">
    <label htmlFor="">Full Name</label>
    <input type="text" name="fullName"></input>
    <label htmlFor="">Age</label>
    <input type="number" name="age"></input>
    <button type="submit" name="submit">Submit Form</button>
</form>

</body>
</html>