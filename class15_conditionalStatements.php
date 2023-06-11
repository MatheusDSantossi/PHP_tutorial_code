<html>
    <head>

    </head>
    <body>
        
        <?php

        // Control Structures (if / else / elseif / else if)

        $score = 95;
        ?>
        <?php 
        if ($score >= 90): //{?> 
            <strong style="color: green">A</strong>
            <!-- echo 'A'; -->
            <!-- // if ($score >= 95) {
            //     echo '+';
            // } -->
        <?php elseif ($score >= 80): //{ ?>
            <strong style="color: green">B</strong>
            <!-- echo 'B';
            if ($score >= 85) {
                echo '+'; -->
            <!-- } -->
         <?php elseif ($score >= 70): //{ ?>
            <strong style="color: green">C</strong>
            <!-- echo 'C'; -->
        <?php elseif ($score >= 60): //{ ?>
            <strong style="color: green">D</strong>
            <!-- echo 'D'; -->
        <?php else: //{ ?>
            <strong style="color: red">F</strong>
            <!-- echo 'F'; -->
        <?php endif ?>
        <!-- } -->
    </body>
</html>