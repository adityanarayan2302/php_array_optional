<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $adjusted = array(
        array("quarter"=> "1st quarter 2010(p)", "RST"=> "960,474", "RSEC"=> "38,707", "ECPT"=>"4.0", "PCPQT"=>"2.0", "PCPQEC"=>"1.5", "PCSQT"=>"6.3","PCSQEC"=>"14.3"),
        array("quarter"=> "4th quarter 2009(r)", "RST"=> "941,355", "RSEC"=> "38,141", "ECPT"=>"4.1", "PCPQT"=>"2.0", "PCPQEC"=>"4.2", "PCSQT"=>"2.1","PCSQEC"=>"14.6"),
        array("quarter"=> "3th quarter 2009", "RST"=> "922,763", "RSEC"=> "36,587", "ECPT"=>"4.0", "PCPQT"=>"2.1", "PCPQEC"=>"5.1", "PCSQT"=>"-7.8","PCSQEC"=>"1.7"),
        array("quarter"=> "2th quarter 2009", "RST"=> "904,045", "RSEC"=> "34,827", "ECPT"=>"3.9", "PCPQT"=>"0.0", "PCPQEC"=>"2.8", "PCSQT"=>"-11.1","PCSQEC"=>"-4.8"),
        array("quarter"=> "1th quarter 2009(r)", "RST"=> "903,718", "RSEC"=> "33,365", "ECPT"=>"3.7", "PCPQT"=>"-2.0", "PCPQEC"=>"1.7", "PCSQT"=>"-10.7","PCSQEC"=>"-6.6")        
    );
    $notAdjusted = array(
        array("quarter"=> "1st quarter 2010(p)", "RST"=> "897,004", "RSEC"=> "36,638", "ECPT"=>"4.1", "PCPQT"=>"-9.0", "PCPQEC"=>"-18.9", "PCSQT"=>"6.8","PCSQEC"=>"14.0"),
        array("quarter"=> "4th quarter 2009(r)", "RST"=> "985,649", "RSEC"=> "45,199", "ECPT"=>"4.6", "PCPQT"=>"6.4", "PCPQEC"=>"32.8", "PCSQT"=>"2.0","PCSQEC"=>"15.0"),
        array("quarter"=> "3th quarter 2009", "RST"=> "926,265", "RSEC"=> "34,031", "ECPT"=>"3.7", "PCPQT"=>"0.7", "PCPQEC"=>"3.9", "PCSQT"=>"-8.0","PCSQEC"=>"1.6"),
        array("quarter"=> "2th quarter 2009", "RST"=> "919,649", "RSEC"=> "32,769", "ECPT"=>"3.6", "PCPQT"=>"9.5", "PCPQEC"=>"2.0", "PCSQT"=>"-11.0","PCSQEC"=>"-5.2"),
        array("quarter"=> "1th quarter 2009", "RST"=> "839,625", "RSEC"=> "32,125", "ECPT"=>"3.8", "PCPQT"=>"-13.1", "PCPQEC"=>"-18.3", "PCSQT"=>"-11.9","PCSQEC"=>"-7.0")        
    );

    // echo (float)($adjusted[0]['RST']);

    $str = "<table border=1><tr><td rowspan ='3'>Quarter</td> <td rowspan=2, colspan =2 > Retails Sails<br>(Millions of Dollars) </td><td rowspan=3> E-commerce <br>as a Percent<br> of Total</td><td rowspan =2, colspan =2> Percent Change <br>from Prior Quarter</td><td rowspan =2, colspan =2> Percent Change <br>from Same Quarter<br> A Year Ago</td></tr>";
    $str .= "<tr></tr>";
    $str .= "<tr><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td></tr>";
    $str .= "<tr><td><strong>Adjusted</strong></td></tr>";
    foreach ($adjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            // echo $value ."<br>";
        }
        $str .= "</tr>";
    }
    $str .= "<tr><td><strong>Not Adjusted</strong></td></tr>";
    foreach ($notAdjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            // echo $value ."<br>";
        }
        $str .= "</tr>";
    }

    $str .= "</table>";

    echo $str;
    ?>
</body>
</html>