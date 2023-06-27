<?php
$a=0;
 while (($data = fgetcsv($csvFile, 0, ",")) !== FALSE) {
        
      echo '

      <div id="tele'.$a.'">

      

        <div  style="border-style: solid; background-color: lightblue;  border-color: black;">

        <h3 style="color: red; text-align: center;">ALERTA DE GESTION PRESIDENCIAL</h3>
        <p>  <u>'.utf8_encode($data[13]).'</u></p>
        <p> <strong> A:</strong> <u>'.utf8_encode($data[1]).';'.utf8_encode($data[0]).'</u></p>
        <p> <strong> Prioridad:</strong>  <u>'.utf8_encode($data[5]).'</u></p>
        <p> <strong>Actividad:</strong>  <u style="color: red;">'.utf8_encode($data[6]).'</u></p>
        <p> <strong>Fecha:</strong>  <u>'.utf8_encode($data[2]).'</u> </p>
        <p> <strong>Razón o motivo:</strong>  <u style="color: red;">'.utf8_encode($data[7]).'</u> </p>
        <p> <strong>Provincia:</strong>  <u>'.utf8_encode($data[3]).'</u></p>
        <p> <strong>Lugar de la provincia:</strong>  <u>'.utf8_encode($data[4]).'</u></p>
        <p> <strong>Convocante:</strong>  <u>'.utf8_encode($data[10]).'</u></p>
        <p> <strong>Responsables:</strong>  <u>'.utf8_encode($data[8]).'</u></p>
        <p> <strong>Teléfono responsables:</strong>  <u>'.utf8_encode($data[9]).'</u></p>
        <p> <strong>Contacto local CONAGEP:</strong>  <u>'.utf8_encode($data[11]).'</u></p>
        <p> <strong>Telefono contacto CONAGEP:</strong>  <u>'.utf8_encode($data[12]).'</u></p> <br>
        <div style="break-after:page"></div></div>
     
      </div>
      <style>
      {
        -webkit-print-color-adjust: exact !important;   
        
    }
      .lkbLoggo{
        width: 9.182cm;
        height: 2.721cm;
        margin-top: 0.199cm;
        background-image: url("'.asset("storage/file.jpeg").'") ;
        background-repeat: no-repeat;
        background-position: center;
        !important}
      </style>

      
        <script>
       
           
        var prtContent = document.getElementById("tele'.$a.'");
        var WinPrint = window.open("", "", "left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0");
        WinPrint.document.write(prtContent.innerHTML);
            WinPrint.focus();
            WinPrint.document.close();
            WinPrint.print();
        
           
            WinPrint.close();
        
    
        
       
        
       
            
            
            
        </script>
      ';

   
      $a=$a+1;
      
}
?>

