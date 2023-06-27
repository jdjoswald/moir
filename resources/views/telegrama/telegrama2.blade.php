<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telegrama</title>
    
    </head>

<body>



<?php
$a=0;
 while (($data = fgetcsv($csvFile, 0, ",")) !== FALSE) {
        
      echo '

      <div id="tele'.$a.'">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


      <div class="row">
  <div style="width: 60%;">
    <table style="width: 100%; border: red; background-color: red; text-align: center;"  >
      <tr style=" height: 150px;">
        <th style="width: 100%; border: red; background-color: red;">
          <h2 style="color: white;"><strong>ALERTA DE GESTION PRESIDENCIAL</strong></h2>
        </th> 
      </tr>
      
    </table>

  </div>
 
  
  <div> <img src="'. url(asset("storage/jj.jpeg")).'" width="300" height="250"></div>
  

  
</div>
<br>
<div >
  <table style="width: 30%;" border: solid darkblue;">
    <tr style="height: 50px">
      <td  style="  background-color: darkblue; text-align: center;"><h5 style="color: white; text-align: center;"> '.utf8_encode($data[13]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width:5%; background-color: darkblue; text-align: center;"><h5 style="color: white;"> A:</h5> </td>
      <td style="width: 90%;"><h5 style="color: darkblue;"> '.utf8_encode($data[1]).'; '.utf8_encode($data[0]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 10%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Prioridad:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[5]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 10%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Actividad:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: red;"> '.utf8_encode($data[6]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 7%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Fecha:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[2]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 20%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Razón o motivo:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: red;"><strong> '.utf8_encode($data[7]).'</strong></h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 10%;   background-color: darkblue; text-align: center;"><h5 style="color: white;">Provincia:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[3]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 25%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Lugar de la provincia:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[4]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 10%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Convocante:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[10]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 12%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Responsables:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[8]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
      <td style="width: 35%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Teléfono responsables:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;">'.utf8_encode($data[9]).'</h5> </td>
    </tr>
  </table>

</div>
<br>

<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
    
    <td style="width: 35%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Contacto local CONAGEP:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[11]).'</h5> </td>
    </tr>
  </table>

</div>
<br>
<div style="font-size: 20px;">
  <table style="width: 100%; border: solid darkblue;">
    <tr style="height: 50px">
    
    <td style="width: 35%;   background-color: darkblue; text-align: center;"><h5 style="color: white;"> Telefono contacto CONAGEP:</h5> </td>
      <td style="width: 75%;" ><h5 style="color: darkblue;"> '.utf8_encode($data[12]).'</h5> </td>
    </tr>
  </table>

</div>


      

       
      </div>
      <style>
      {
        -webkit-print-color-adjust: exact !important;   
        
    }
      .lkbLoggo{
        width: 9.182cm;
        height: 2.721cm;
        margin-top: 0.199cm;
        background-image: ;
        background-repeat: no-repeat;
        background-position: center;
        !important}
      </style>

      <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>

      <script type="text/javascript">
      var prtContent = document.getElementById("tele'.$a.'");
      
        var WinPrint = window.open("", "", "left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0");
       
        WinPrint.document.write(prtContent.innerHTML);
        WinPrint.document.title = "'.utf8_encode($data[0]).'";
        $(WinPrint).load(function(){
          WinPrint.focus();
            WinPrint.print();
         
        
        });
            
        
           
            WinPrint.close();
 
      </script>
        <script>
       
           
       
        
    
        
       
        
       
            
            
            
        </script>
      ';

   
      $a=$a+1;
      
}
?>
   


</body>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</html>