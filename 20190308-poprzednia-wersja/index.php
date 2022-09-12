<!DOCTYPE HTML>
<html lang="pl">

<head>

    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="index.css">
   <!-- <link href='http://fonts.googleapis.com/css?family=Amiko&subset=latin,latin-ext' rel='stylesheet' type='text/css'>-->
    
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>


    
    
<?php


    $lang=$_GET["lang"];
    
    if($lang=='pl')
    {
        echo "<title>Strona główna | Szachy</title>";
        echo "Pykej w szachy"; 
        
       //echo "<script>";
       //echo "$('#lang_switch').prop('pl');";
       //echo "</script>";
    }
    else
    {
        echo "<title>Home | Chess</title>";
        
        //echo "<script>";
        //echo " $( '#lang_switch' ).flipswitch( 'disable' ); ";
        //echo "</script>";
    }

    


?>
    
    


</head>

<body>

    <div id="main">
    
    <form action="index.php" method="post">

    </form>
    
        <form>
            <input id="lang_switch" type="checkbox" data-role="flipswitch" name="flip-checkbox-2"  data-on-text="pl" data-off-text="eng" data-wrapper-class="custom-label-flipswitch">

        </form>
        


<?php


$lang=$_GET['lang'];

if($lang=='pl')
{
 
       echo "
       tutaj jwest wlaskdjn sklaj lasb lasjk <br>
       <script>
           
       
       </script>
       ";

       
    }


?>


    
        <div id="logo">
        
            <input type="button" id="target"/>
        
            <script>
            
                 alert(window.location.href);
            
                $('#target').click(function()
                {
                    //$( "#lang_switch" ).flipswitch("enable").flipswitch("refresh");
                    $( "#lang_switch" ).val('off').flipswitch("refresh");
                });

                
                $('#lang_switch').on('change', function() 
                {
                    if($("#lang_switch").parent().hasClass("ui-flipswitch ui-shadow-inset ui-bar-inherit custom-label-flipswitch ui-corner-all ui-flipswitch-active"))
                    {
                        self.location = "http://szympatr.cba.pl?lang=pl";
                    }
                    else
                    {
                        self.location = "http://szympatr.cba.pl?lang=eng";
                    }

                });

                
            </script>
        
        </div>
        
        
        
    </div>

</body>

</html>				