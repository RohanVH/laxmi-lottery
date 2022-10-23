<?php
include('config.php');

date_default_timezone_set('Asia/Kolkata');
if (date('ha') == '09am') {
    for ($number = 0; $number <=59; $number++) {
        
        if(date('i') >=00 && date('i')<15){
            $number = strval($number);
            if(date('i')== date($number)){
                $id=1;
                
                // include_once("fetchVal.php");
                include_once('create_historyBlank.php');
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
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
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
                
            }
            
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:15am';
                $end_time='09:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=3;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='09:30am';
                $end_time='09:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=4;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='10:00am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=5;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:00am';
                $end_time='10:15am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=6;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:15am';
                $end_time='10:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=7;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='10:30am';
                $end_time='10:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=8;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='11:00am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=9;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:00am';
                $end_time='11:15am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=10;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:15am';
                $end_time='11:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=11;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='11:30am';
                $end_time='11:45am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=12;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='12:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=13;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:00pm';
                $end_time='12:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=14;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:15pm';
                $end_time='12:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=15;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='12:30pm';
                $end_time='12:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=16;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='01:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=17;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:00pm';
                $end_time='01:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=18;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:15pm';
                $end_time='01:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=19;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='01:30pm';
                $end_time='01:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=20;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='02:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=21;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:00pm';
                $end_time='02:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=22;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:15am';
                $end_time='02:30am';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=23;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='02:30pm';
                $end_time='02:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=24;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='03:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=25;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:00pm';
                $end_time='03:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=26;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:15pm';
                $end_time='03:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=27;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='03:30pm';
                $end_time='03:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=28;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='04:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=29;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:00pm';
                $end_time='04:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=30;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:15pm';
                $end_time='04:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=31;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='04:30pm';
                $end_time='04:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=32;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='05:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=33;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:00pm';
                $end_time='05:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=34;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:15pm';
                $end_time='05:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=35;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='05:30pm';
                $end_time='05:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=36;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='06:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=37;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:00pm';
                $end_time='06:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=38;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:15pm';
                $end_time='06:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=39;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='06:30pm';
                $end_time='06:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=40;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='07:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=41;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        

        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:00pm';
                $end_time='07:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=42;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:15pm';
                $end_time='07:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=43;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='07:30pm';
                $end_time='07:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=44;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
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
                $end_time='08:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=45;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 15 && date('i') < 30){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:00pm';
                $end_time='08:15pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=46;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 30 && date('i') < 45){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:15pm';
                $end_time='08:30pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=47;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        }
        
        
        if(date('i') >= 45 && date('i') < 60){
            $number = strval($number);
            if(date('i')== date($number)){
                $start_time='08:30pm';
                $end_time='08:45pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=48;
                // include_once("fetchVal.php");
                echo '<script>
                        <!--
                        function timedRefresh(timeoutPeriod) {
                            setTimeout("location.reload(true);",timeoutPeriod);
                        }

                        window.onload = timedRefresh(600000);

                        //   -->
                        </script>';
                include_once("results.php");
                
                $id=$id-1;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
                
                // last row
                $start_time='08:45pm';
                $end_time='09:00pm';
                $date=date('d-m-Y');   //format dd-mm--yy
                $id=48;
                include_once("update_complete.php");
                include_once("insertValHistory.php");
            }
        } 
        
    }
}
if(date('ha') =='12am' ||date('ha') =='01am' || date('ha') =='02am' || date('ha') =='03am' || date('ha') =='04am' || date('ha') =='05am' || date('ha') =='06am' || date('ha') =='07am' || date('ha') == '08am') {
    // clear data
    $sql = "TRUNCATE TABLE randdata";
    $delete = mysqli_query($connectdb, $sql);
    if($delete){
        echo '';
    }
    // generate data
    $result = mysqli_query($connectdb, "SELECT * FROM randdata");
    if(mysqli_num_rows($result)==0){
        $num=1;
        while ($num < 49) {
            $x = 2; //pair of two digits
            $aa  = substr(str_shuffle("0123456789"), 0, $x);
            $bb = substr(str_shuffle("2345678910"), 0, $x);
            $cc = substr(str_shuffle("2341056789"), 0, $x);
            $v1 = strval($aa);
            $v2 = strval($bb);
            $v3 = strval($cc);

            $a = $v1[strlen($v1) - 2];
            $b = $v2[strlen($v2) - 2];
            $c = $v3[strlen($v3) - 2];

            $time = '';
            $status = '';
            $sql1 = "INSERT INTO `randdata` VALUES ('', '$aa', '$bb', '$cc', '$a', '$b', '$c', '', '')";
            $datainsert = mysqli_query($connectdb, $sql1);
            if($datainsert){

                $num = $num + 1;
            }
        }
    }

}
if (date('ha')== '09pm' || date('ha') == '10pm'|| date('ha') =='11pm' || date('ha') < '12am'){
    
        include_once("results.php");
        
}
?>