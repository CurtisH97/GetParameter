

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="css/main.css">
</head>



<body>

<header>
    <h1>Get Parameter Assingment</h1>
</header>

<main>
<?php

$firstName = filter_input(INPUT_GET, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
$lastName = filter_input(INPUT_GET, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
$age=filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);

if(isset($_GET['firstname'] && ($_GET['lastname']) && ($_GET['age']))[
    $firstName = htmlspecialchars(($_GET['firstname']);
    $lastName = htmlspecialchars(($_GET['lastname']);
    $age = htmlspecialchars(($_GET['age']);
]

else{
    echo "Not Set!!"
}


echo "Hello, my name is $firstName $lastName.<br/>";


// if (!empty($firstName) && !empty($lastName)) {
//     echo $firstName;
//     echo $lastName;
// } else {
//     echo "Please fill the names";
// }

if($age>=18)
{
echo "I am $age years old and I am old enough to vote in the United States.<br/>";
}
else
{
echo "I am $age years old and I am not old enough to vote in the United States.<br/>";
}

$numofdays = $age  * 365;
echo "Number of days from the age is $numofdays <br/>";
//displaying current date
$date = date('Y-m-d H:i:s');
echo "The current date is $date";



?>
</main>
</body>

</html>