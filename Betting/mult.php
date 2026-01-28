<?php 
$name = $_GET['name'];
$Id = $_GET['Id'];
$cata = $_GET['cata'];

$amount = $_GET['amount'];
$odd_temp = $_POST['Winner'];

if ($odd_temp != ''){
 $odd_sp = str_split($odd_temp);
 $odd_l = array_splice($odd_sp,3);
 $odd_f = array_splice($odd_sp,0,3);

 $odd = implode("",$odd_l);
 $acc = implode("",$odd_f);
 $fin = 'Try';

 $con = new mysqli("localhost","root","","betting");

 $sel = $con->query("SELECT * FROM user WHERE Id='$name'");
 $sel2 = $con->query("SELECT * FROM bet WHERE Id='$Id'");

 $row2 = $sel->fetch_array();
 $row3 = $sel2->fetch_array();

 
   if ($acc == '001'){
      $fin = 'Home Wins';
   }
  
   elseif ($acc == '002'){
      $fin = 'Draw';
   }
  
   elseif ($acc == '003'){
      $fin = 'Away Wins';
   }
  
   elseif ($acc == '004'){
      $fin = 'GG';
   }
  
   elseif ($acc == '005'){
      $fin = 'No GG';
   }
  
   elseif ($acc == '006'){
      $fin = 'First Half Over 0.5';
   }
  
   elseif ($acc == '007'){
      $fin = 'First Half Over 1.5';
   }
  
   elseif ($acc == '008'){
      $fin = 'First Half Over 2.5';
   }
  
   elseif ($acc == '009'){
      $fin = 'First Half Under 0.5';
   }
  
   elseif ($acc == '010'){
      $fin = 'First Half Under 1.5';
   }
  
   elseif ($acc == '011'){
      $fin = 'First Half Under 2.5';
   }
  
   elseif ($acc == '012'){
      $fin = 'Full Game Over 0.5';
   }
  
   elseif ($acc == '013'){
      $fin = 'Full Game Over 1.5';
   }
  
   elseif ($acc == '014'){
      $fin = 'Full Game Over 2.5';
   }
  
   elseif ($acc == '015'){
      $fin = 'Full Game Over 3.5';
   }
  
   elseif ($acc == '016'){
      $fin = 'Full Game Under 0.5';
   }
  
   elseif ($acc == '017'){
      $fin = 'Full Game Under 1.5';
   }
  
   elseif ($acc == '018'){
      $fin = 'Full Game Under 2.5';
   }
  
   elseif ($acc == '019'){
      $fin = 'Full Game Under 3.5';
   }
  
   elseif ($acc == '020'){
      $fin = 'Home Wins Over 1.5'; 
   }
  
   elseif ($acc == '021'){
      $fin = 'Home Wins Over 2.5';
   }
  
   elseif ($acc == '022'){
      $fin = 'Home Wins Over 3.5';
   }
  
   elseif ($acc == '023'){
      $fin = 'Home Wins Over 4.5';
   }
  
   elseif ($acc == '024'){
      $fin = 'Away Wins Over 1.5';
   }
  
   elseif ($acc == '025'){
      $fin = 'Away Wins Over 2.5';
   }
  
   elseif ($acc == '026'){
      $fin = 'Away Wins Over 3.5';
   }
  
   elseif ($acc == '027'){
      $fin = 'Away Wins Over 4.5';
   }
   elseif ($acc == '028'){
      $fin = 'First Half Home Wins';
   }
  
   elseif ($acc == '029'){
      $fin = 'First Half Draw';
   }
  
   elseif ($acc == '030'){
      $fin = 'First Half Away Wins';
   }
   elseif ($acc == '031'){
      $fin = 'Second Half Home Wins';
   }
  
   elseif ($acc == '032'){
      $fin = 'Second Half Draw';
   }
  
   elseif ($acc == '033'){
      $fin = 'Second Half Away Wins';
   }
  
   elseif ($acc == '034'){
      $fin = 'Even';
   }
   elseif ($acc == '035'){
      $fin = 'Odd';
   }
  
   elseif ($acc == '036'){
      $fin = 'Most Goals 1st Half';
   }
   elseif ($acc == '037'){
      $fin = 'Most Goals 2nd Half';
   }
  
   elseif ($acc == '038'){
      $fin = 'Home Wins Or Draw';
   }
   elseif ($acc == '039'){
      $fin = 'Away Wins Or Draw';
   }
   elseif ($acc == '040'){
      $fin = 'GG Home';
   }
  
   elseif ($acc == '041'){
      $fin = 'GG Draw';
   }
   elseif ($acc == '042'){
      $fin = 'GG Away';
   }
  
   elseif ($acc == '043'){
      $fin = 'VAR Yes';
   }
   elseif ($acc == '044'){
      $fin = 'VAR No';
   }
  
   elseif ($acc == '045'){
      $fin = 'Red Card Yes';
   }
   elseif ($acc == '046'){
      $fin = 'Red Card No';
   }
  
   elseif ($acc == '047'){
      $fin = '15 Min Goal Yes';
   }
   elseif ($acc == '048'){
      $fin = '15 Min Goal No';
   }
   elseif ($acc == '049'){
     $fin = 'Full Game Over 4.5';
   }
   elseif ($acc == '050'){
     $fin = 'Full Game Under 4.5';
   }
  
   elseif ($acc == '051'){
     $fin = 'First Half Over 3.5';
  }
  elseif ($acc == '052'){
     $fin = 'First Half Under 3.5';
  }
  elseif ($acc == '053'){
    $fin = 'Home Or Away Wins';
  }
  elseif ($acc == '054'){
    $fin = 'Home Score First';
  }
  
  elseif ($acc == '055'){
     $fin = 'Away Score First';
  }
  elseif ($acc == '056'){
     $fin = 'Hand Cape 1 (0,1)';
  }
  elseif ($acc == '057'){
    $fin = 'Hand Cape 1 (0,2)';
  }
  elseif ($acc == '058'){
    $fin = 'Hand Cape 1 (0,3)';
  }
  
  elseif ($acc == '059'){
     $fin = 'Hand Cape 1 (0,4)';
  }
  elseif ($acc == '060'){
     $fin = 'Hand Cape 2 (1,0)';
  }
  elseif ($acc == '061'){
    $fin = 'Hand Cape 2 (2,0)';
  }
  elseif ($acc == '062'){
    $fin = 'Hand Cape 2 (3,0)';
  }
  elseif ($acc == '063'){
     $fin = 'Hand Cape 2 (4,0)';
  }
  elseif ($acc == '064'){
     $fin = 'Draw No Bet Home';
  }
  elseif ($acc == '065'){
     $fin = 'Draw No Bet Away';
  }
  elseif ($acc == '066'){
   $fin = 'No GG Home';
  }
  elseif ($acc == '067'){
   $fin = 'No GG Draw';
  }
  elseif ($acc == '068'){
   $fin = 'No GG Away';
  }
  elseif ($acc == '069'){
   $fin = 'Second Half Over 0.5';
  }

  elseif ($acc == '070'){
   $fin = 'Second Half Over 1.5';
  }

  elseif ($acc == '071'){
   $fin = 'Second Half Over 2.5';
  }

  elseif ($acc == '072'){
   $fin = 'Second Half Over 3.5';
  }

  elseif ($acc == '073'){
   $fin = 'Second Half Under 0.5';
  }

  elseif ($acc == '074'){
   $fin = 'Second Half Under 1.5';
  }

  elseif ($acc == '075'){
   $fin = 'Second Half Under 2.5';
  }

  elseif ($acc == '076'){
   $fin = 'Second Half Under 3.5';
  }
  
  elseif ($acc == '077'){
   $fin = 'Both Halfs Equal Goal';
  }
  elseif ($acc == '078'){
   $fin = 'FH/FT 1/1';
  }

  elseif ($acc == '079'){
   $fin = 'FH/FT 1/x';
  }

  elseif ($acc == '080'){
   $fin = 'FH/FT 1/2';
  }

  elseif ($acc == '081'){
   $fin = 'FH/FT x/1';
  }

  elseif ($acc == '082'){
   $fin = 'FH/FT x/x';
  }

  elseif ($acc == '083'){
   $fin = 'FH/FT x/2';
  }

  elseif ($acc == '084'){
   $fin = 'FH/FT 2/1';
  }

  elseif ($acc == '085'){
   $fin = 'FH/FT 2/x';
  }
  
  elseif ($acc == '086'){
   $fin = 'FH/FT 2/2';
  }

  elseif ($acc == '087'){
   $fin = 'Score: 0-0';
  }
  elseif ($acc == '088'){
   $fin = 'Score: 0-1';
  }
  elseif ($acc == '089'){
   $fin = 'Score: 0-2';
  }
  elseif ($acc == '090'){
   $fin = 'Score: 0-3';
  }
  elseif ($acc == '091'){
   $fin = 'Score: 0-4';
  }
  elseif ($acc == '092'){
   $fin = 'Score: 0-5';
  }
  elseif ($acc == '093'){
   $fin = 'Score: 1-0';
  }
  elseif ($acc == '094'){
   $fin = 'Score: 1-1';
  }
  elseif ($acc == '095'){
   $fin = 'Score: 1-2';
  }
  elseif ($acc == '096'){
   $fin = 'Score: 1-3';
  }
  elseif ($acc == '097'){
   $fin = 'Score: 1-4';
  }
  elseif ($acc == '098'){
   $fin = 'Score: 1-5';
  }
  elseif ($acc == '099'){
   $fin = 'Score: 2-0';
  }
  elseif ($acc == '100'){
   $fin = 'Score: 2-1';
  }
  elseif ($acc == '101'){
   $fin = 'Score: 2-2';
  }
  elseif ($acc == '102'){
   $fin = 'Score: 2-3';
  }
  elseif ($acc == '103'){
   $fin = 'Score: 2-4';
  }
  elseif ($acc == '104'){
   $fin = 'Score: 2-5';
  }
  elseif ($acc == '105'){
   $fin = 'Score: 3-0';
  }
  elseif ($acc == '106'){
   $fin = 'Score: 3-1';
  }
  elseif ($acc == '107'){
   $fin = 'Score: 3-2';
  }
  elseif ($acc == '108'){
   $fin = 'Score: 3-3';
  }
  elseif ($acc == '109'){
   $fin = 'Score: 3-4';
  }
  elseif ($acc == '110'){
   $fin = 'Score: 3-5';
  }
  elseif ($acc == '111'){
   $fin = 'Score: 4-0';
  }
  elseif ($acc == '112'){
   $fin = 'Score: 4-1';
  }
  elseif ($acc == '113'){
   $fin = 'Score: 4-2';
  }
  elseif ($acc == '114'){
   $fin = 'Score: 4-3';
  }
  elseif ($acc == '115'){
   $fin = 'Score: 4-4';
  }
  elseif ($acc == '116'){
   $fin = 'Score: 4-5';
  }
  elseif ($acc == '117'){
   $fin = 'Score: 5-0';
  }
  elseif ($acc == '118'){
   $fin = 'Score: 5-1';
  }
  elseif ($acc == '119'){
   $fin = 'Score: 5-2';
  }
  elseif ($acc == '120'){
   $fin = 'Score: 5-3';
  }
  elseif ($acc == '121'){
   $fin = 'Score: 5-4';
  }
  elseif ($acc == '122'){
   $fin = 'Score: 5-5';
  }
  elseif ($acc == '123'){
   $fin = 'Home Under 1.5';
  }
  elseif ($acc == '124'){
   $fin = 'Home Under 2.5';
  }
  elseif ($acc == '125'){
   $fin = 'Home Under 3.5';
  }
  elseif ($acc == '126'){
   $fin = 'Home Under 4.5';
  }
  elseif ($acc == '127'){
   $fin = 'Away Under 1.5';
  }
  elseif ($acc == '128'){
   $fin = 'Away Under 2.5';
  }
  elseif ($acc == '129'){
   $fin = 'Away Under 3.5';
  }
  elseif ($acc == '130'){
   $fin = 'Away Under 4.5';
  }
  elseif ($acc == '131'){
   $fin = 'Draw Over 1.5';
  }
  elseif ($acc == '132'){
   $fin = 'Draw Over 2.5';
  }
  elseif ($acc == '133'){
   $fin = 'Draw Over 3.5';
  }
  elseif ($acc == '134'){
   $fin = 'Draw Over 4.5';
  }
  elseif ($acc == '135'){
   $fin = 'Draw Under 1.5';
  }
  elseif ($acc == '136'){
   $fin = 'Draw Under 2.5';
  }
  elseif ($acc == '137'){
   $fin = 'Draw Under 3.5';
  }
  elseif ($acc == '138'){
   $fin = 'Draw Under 4.5';
  }
   
   
  
  
  
  
   if ($odd == ""){
      $odd = 1;
   }
   elseif($odd == '0'){
      $odd = 1;
   } 
  
   elseif($odd == 0){
      $odd = 1;
   } 
      
   $desc = $row3['Home'].' '.'Vs'.' '.$row3['Away'].' -- '.$fin;
   $HT = $row3['Home'];
   $AT = $row3['Away'];
   $GT = $row3['Date'];
   $LG = $row3['League'];
  
   $sel3 = $con->query("SELECT * FROM confirm WHERE us_id='$name' AND bet_id='$Id'");
   if($sel3->num_rows == 0){
      $con->query("INSERT INTO confirm (us_id,bet_id,`Home Team`,`Away Team`,`Game Time`,League,Odd,Described,Code) 
      VALUES('$name','$Id','$HT','$AT','$GT','$LG','$odd','$desc','$acc')");
   }else{
      $con->query("UPDATE confirm SET Odd='$odd', Described='$desc', Code = '$acc', DNB = 0 WHERE us_id='$name' AND bet_id='$Id'");
   }
  
   
   if($acc=='064'){
      $con->query("UPDATE `confirm` SET `DNB`= 1 WHERE us_id='$name' AND bet_id='$Id'");
   }elseif($acc=='065'){
     $con->query("UPDATE `confirm` SET `DNB`= 1 WHERE us_id='$name' AND bet_id='$Id'");
  }else{
     $con->query("UPDATE `confirm` SET `DNB` = 0 WHERE us_id='$name' AND bet_id='$Id'");
  }
  
   header("location:Main.php?name=$name&cata=$cata");
  }
  else{
      header("location:Main.php?name=$name&cata=$cata"); 
  }


?>
