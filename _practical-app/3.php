<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

//1
if(false){
    echo "I hate PHP";
}
elseif(0 < -1) {
    echo "I kind of like PHP";
}
else{
    echo "I love PHP" . "<br>";
}

for($i=0; $i<10; $i++){
    echo $i . "<br>";
}

switch(5){
    case 0:
        echo "0";
        break;
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    case 4:
        echo "4";
        break;
    default:
        echo "I am default";

}
	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>