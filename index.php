<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikacja</title>
</head>
<body>
<form method="post">
    <input type = 'number' name = 'input'placeholder = 'wpisz haslo' min = '100000' max = '999999'>
    <input type='submit' value='Potwierdź' name='submit'>
    <input type = 'submit' name = 'ods'>
    
</form>

<?php
//$pol= new mysqli('localhost','root','','kod');
//$res=mysqli_query($pol,"INSERT INTO kody(otp) VALUES('$liczby')");
//$res2=mysqli_query($pol,"SELECT * FROM kod")
//$row=mysqli_fetch_assoc($res2);
//if($row['otp']==liczby)
$liczby = $_POST['input'];
$przycisk = $_POST['submit'];
$ods = $_POST['ods'];
if(isset($ods)){
$random = rand(100000,999999);
$_SESSION['random'] = $random;
}

echo $_SESSION['random'];

if(isset($przycisk)){
    if($liczby == $_SESSION['random']){
        echo "Poprawne hasło";
    }
    else{
        echo "Błędne hasło";
    }
}




#trzeba to wrzucic to do bazy danych i to z niej wyciagnac bo tam zostaje jako stała
?>
            


   
    

    
    
    
</body>
</html>