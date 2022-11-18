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
    //storing data in multi dimensional array
    $adjusted = array(
        array("quarter"=> "1st quarter 2010(p)", "RST"=> "960,474", "RSEC"=> "38707", "ECPT"=>"4.0", "PCPQT"=>"2.0", "PCPQEC"=>"1.5", "PCSQT"=>"6.3","PCSQEC"=>"14.3"),
        array("quarter"=> "4th quarter 2009(r)", "RST"=> "941,355", "RSEC"=> "38141", "ECPT"=>"4.1", "PCPQT"=>"2.0", "PCPQEC"=>"4.2", "PCSQT"=>"2.1","PCSQEC"=>"14.6"),
        array("quarter"=> "3rd quarter 2009", "RST"=> "922,763", "RSEC"=> "36587", "ECPT"=>"4.0", "PCPQT"=>"2.1", "PCPQEC"=>"5.1", "PCSQT"=>"-7.8","PCSQEC"=>"1.7"),
        array("quarter"=> "2nd quarter 2009", "RST"=> "904,045", "RSEC"=> "34827", "ECPT"=>"3.9", "PCPQT"=>"0.0", "PCPQEC"=>"2.8", "PCSQT"=>"-11.1","PCSQEC"=>"-4.8"),
        array("quarter"=> "1st quarter 2009(r)", "RST"=> "903,718", "RSEC"=> "33365", "ECPT"=>"3.7", "PCPQT"=>"-2.0", "PCPQEC"=>"1.7", "PCSQT"=>"-10.7","PCSQEC"=>"-6.6")        
    );
    $notAdjusted = array(
        array("quarter"=> "1st quarter 2010(p)", "RST"=> "897,004", "RSEC"=> "36638", "ECPT"=>"4.1", "PCPQT"=>"-9.0", "PCPQEC"=>"-18.9", "PCSQT"=>"6.8","PCSQEC"=>"14.0"),
        array("quarter"=> "4th quarter 2009(r)", "RST"=> "985,649", "RSEC"=> "45199", "ECPT"=>"4.6", "PCPQT"=>"6.4", "PCPQEC"=>"32.8", "PCSQT"=>"2.0","PCSQEC"=>"15.0"),
        array("quarter"=> "3rd quarter 2009", "RST"=> "926,265", "RSEC"=> "34031", "ECPT"=>"3.7", "PCPQT"=>"0.7", "PCPQEC"=>"3.9", "PCSQT"=>"-8.0","PCSQEC"=>"1.6"),
        array("quarter"=> "2nd quarter 2009", "RST"=> "919,649", "RSEC"=> "32769", "ECPT"=>"3.6", "PCPQT"=>"9.5", "PCPQEC"=>"2.0", "PCSQT"=>"-11.0","PCSQEC"=>"-5.2"),
        array("quarter"=> "1st quarter 2009", "RST"=> "839,625", "RSEC"=> "32125", "ECPT"=>"3.8", "PCPQT"=>"-13.1", "PCPQEC"=>"-18.3", "PCSQT"=>"-11.9","PCSQEC"=>"-7.0")        
    );
    //displaying data in table format
    $str = "<table border=1><tr><td rowspan ='3'>Quarter</td> <td rowspan=2, colspan=2> Retails Sails<br>(Millions of Dollars) </td><td rowspan=3> E-commerce <br>as a Percent<br> of Total</td><td rowspan =2, colspan =2> Percent Change <br>from Prior Quarter</td><td rowspan =2, colspan =2> Percent Change <br>from Same Quarter<br> A Year Ago</td></tr>";
    $str .= "<tr></tr>";
    $str .= "<tr><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td></tr>";
    $str .= "<tr><td><strong>Adjusted</strong></td></tr>";
    foreach ($adjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
    
        }
        $str .= "</tr>";
    }
    $str .= "<tr><td><strong>Not Adjusted</strong></td></tr>";
    foreach ($notAdjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            
        }
        $str .= "</tr>";
    }

    $str .= "</table>";

    echo $str;


    echo "<hr> <h4>Delete all the record of 1st quarter of Not Adjusted.</h4>";
    //displaying table
    $str = "<table border=1><tr><td rowspan ='3'>Quarter</td> <td rowspan=2, colspan=2> Retails Sails<br>(Millions of Dollars) </td><td rowspan=3> E-commerce <br>as a Percent<br> of Total</td><td rowspan =2, colspan =2> Percent Change <br>from Prior Quarter</td><td rowspan =2, colspan =2> Percent Change <br>from Same Quarter<br> A Year Ago</td></tr>";
    $str .= "<tr></tr>";
    $str .= "<tr><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td></tr>";
    $str .= "<tr><td><strong>Adjusted</strong></td></tr>";
    foreach ($adjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            
        }
        $str .= "</tr>";
    }
    //removing 1st quarter from not adjusted
    $keyVal = [];
    foreach ($notAdjusted as $key => $value) {
        if( substr_compare($value['quarter'], '1st', 0,3)  == 0 ){
            array_push($keyVal, $key);
        }
    }
    for ($i=count($keyVal)-1; $i >=0 ; $i--) { 
        array_splice($notAdjusted,$keyVal[$i],1);
    }
    $str .= "<tr><td><strong>Not Adjusted</strong></td></tr>";
    foreach ($notAdjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            
        }
        $str .= "</tr>";
    }

    $str .= "</table>";

    echo $str;

    echo "<hr> <h4>Add the record of 1st quarter to not adjusted similar to Adjusted one.</h4>";

    //adding adjusted data to not adjusted
    $temp = [];
    foreach ($keyVal as $key => $value) {
        array_push($temp, $adjusted[$value]);
        array_splice($notAdjusted, $value, 0, $temp);
        $temp = [];
    }
    //displaying table
    $str = "<table border=1><tr><td rowspan ='3'>Quarter</td> <td rowspan=2, colspan=2> Retails Sails<br>(Millions of Dollars) </td><td rowspan=3> E-commerce <br>as a Percent<br> of Total</td><td rowspan =2, colspan =2> Percent Change <br>from Prior Quarter</td><td rowspan =2, colspan =2> Percent Change <br>from Same Quarter<br> A Year Ago</td></tr>";
    $str .= "<tr></tr>";
    $str .= "<tr><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td><td>Total</td><td>E-commerce</td></tr>";
    $str .= "<tr><td><strong>Adjusted</strong></td></tr>";
    foreach ($adjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            
        }
        $str .= "</tr>";
    }
    $str .= "<tr><td><strong>Not Adjusted</strong></td></tr>";
    foreach ($notAdjusted as $key => $value) {
        $str .= "<tr>";
        foreach ($value as $key => $value) {
            $str .= "<td>".$value . "</td>";
            
        }
        $str .= "</tr>";
    }

    $str .= "</table>";

    echo $str;

    echo "<hr> <h4>Calculate the average sale of E-commerce from adjusted and Not adjusted separately.</h4>";
    echo "<pre>";

    //extracting columns of ecommerce sales
    $ecForAdjusted = array_column($adjusted, 'RSEC');
    $ecForNotAdjusted = array_column($notAdjusted, 'RSEC');
    //calculating average
    $averageECForAdjusted = array_sum($ecForAdjusted) / count($ecForAdjusted);
    $averageECForNotAdjusted = array_sum($ecForNotAdjusted) / count($ecForNotAdjusted);
    echo "<br>Average sale of E-commerce from adjusted = ". $averageECForAdjusted;
    echo "<br>Average sale of E-commerce from Not adjusted = ". $averageECForNotAdjusted;
    ?>
    <!-- end of script -->
</body>
</html>