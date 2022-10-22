<!-- /**
 * Author:    Rohan
 * Created:   21.10.2022
 * 
 * (c) Copyright by Dword Core.
 **/ -->
<?php
include('config.php');

date_default_timezone_set('Asia/Kolkata');
if (date('ha') == '09am') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                
                $id=1;
                include('create_historyBlank.php');
                include("fetchVal.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:00am';
                $end_time='09:15am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=2;
                // update status
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
                
            }
            
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:15am';
                $end_time='09:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=3;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:30am';
                $end_time='09:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=4;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '10am') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:45am';
                $end_time='09:59am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=5;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:00am';
                $end_time='10:15am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=6;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:15am';
                $end_time='10:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=7;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:30am';
                $end_time='10:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=8;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '11am') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:45am';
                $end_time='11:59am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=9;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:00am';
                $end_time='11:15am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=10;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:15am';
                $end_time='11:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=11;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:30am';
                $end_time='11:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=12;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '12pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:45am';
                $end_time='11:59am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=13;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:00pm';
                $end_time='12:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=14;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:15pm';
                $end_time='12:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=15;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:30pm';
                $end_time='12:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=16;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '01pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:45pm';
                $end_time='12:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=17;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:00pm';
                $end_time='01:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=18;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:15pm';
                $end_time='01:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=19;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:30pm';
                $end_time='01:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=20;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '02pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:45pm';
                $end_time='01:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=21;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:00pm';
                $end_time='02:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=22;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:15am';
                $end_time='02:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=23;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:30pm';
                $end_time='02:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=24;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '03pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:45am';
                $end_time='02:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=25;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:00pm';
                $end_time='03:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=26;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:15pm';
                $end_time='03:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=27;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:30pm';
                $end_time='03:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=28;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '04pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:45pm';
                $end_time='03:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=29;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:00pm';
                $end_time='04:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=30;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:15pm';
                $end_time='04:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=31;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:30pm';
                $end_time='04:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=32;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '05pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:45pm';
                $end_time='04:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=33;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:00pm';
                $end_time='05:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=34;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:15pm';
                $end_time='05:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=35;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:30pm';
                $end_time='05:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=36;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '06pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:45pm';
                $end_time='05:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=37;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:00pm';
                $end_time='06:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=38;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:15pm';
                $end_time='06:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=39;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:30pm';
                $end_time='06:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=40;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '07pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:45pm';
                $end_time='06:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=41;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:00pm';
                $end_time='07:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=42;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:15pm';
                $end_time='07:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=43;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:30pm';
                $end_time='07:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=44;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
          
    
    }
}
if (date('ha') == '08pm') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:45pm';
                $end_time='07:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=45;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:00pm';
                $end_time='08:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=46;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:15pm';
                $end_time='08:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=47;
                include("fetchVal.php");
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        

        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:30pm';
                $end_time='08:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=48;
                include("fetchVal.php");
                
                $id=$id-1;
                include("update_complete.php");
                include("insertValHistory.php");
                
                // last row
                $start_time='08:45pm';
                $end_time='08:59pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=48;
                include("update_complete.php");
                include("insertValHistory.php");
            }
        }
        
        
    }
}
if (date('ha')== '09pm' || date('ha') == '10pm'|| date('ha') =='11pm' || date('ha') == '12am'|| date('ha') =='01am' || date('ha') =='02am' || date('ha') =='03am' || date('ha') =='04am' || date('ha') =='05am' || date('ha') =='06am' || date('ha') =='07am' || date('ha') == '08am') {
    echo "<br>
    <div class='container bg-secondary'>
        <br>
        <div class='container d-flex justify-content-center'>
            
            <table class='table  table-hover text-center h4 border border-dark border-5'>
                <tr style='background-color:black;color:white;' class='my-5 '>
                    <th>AA</th>
                    <th>BB</th>
                    <th>CC</th>
                </tr>
                <tr class='my-4 bg-light'>
                    <th>-</th>
                    <th>-</th>
                    <th>-</th>
                </tr>
            </table>
        </div>
        <div class='container d-flex justify-content-center'>
        <table class='table table-hover text-center h4 border border-dark border-5'>
        <tr style='background-color:black;color:white'>
                    <th>A</th>
                    <th>B</th>
                    <th>C</th>
        </tr>
        <tr class='my-3 bg-light'>
                    <th>
                        -
                    </th>
                    <th>
                        -
                    </th>
                    <th>
                        -
                    </th>
        </tr></table>
        </div>
        </div><br>";
}
?>