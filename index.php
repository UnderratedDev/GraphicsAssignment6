<?php

    $file = file_get_contents("Points.csv", FILE_USE_INCLUDE_PATH);
    $points = explode("\n", $file);
    $file = file_get_contents("Points1.csv", FILE_USE_INCLUDE_PATH);
    $points1 = explode (",\n", $file);
    foreach ($points as $key => $record)
        $points[$key] = explode (",", $record);

    $x0  = (double) $points[0][0];
    $y0  = -(double) $points[0][1];
    $x1  = (double) $points[1][0];
    $y1  = -(double) $points[1][1];
    $x2  = (double) $points[2][0];
    $y2  = -(double) $points[2][1];
    $x3  = (double) $points[3][0];
    $y3  = -(double) $points[3][1];
    $x4  = (double) $points[4][0];
    $y4  = -(double) $points[4][1];
    $x5  = (double) $points[5][0];
    $y5  = -(double) $points[5][1];
    $x6  = (double) $points[6][0];
    $y6  = -(double) $points[6][1];
    $x7  = (double) $points[7][0];
    $y7  = -(double) $points[7][1];
    $x8  = (double) $points[8][0];
    $y8  = -(double) $points[8][1];
    $x9  = (double) $points[9][0];
    $y9  = -(double) $points[9][1];
    $x10 = (double) $points[10][0];
    $y10 = -(double) $points[10][1];
    $x11 = (double) $points[11][0];
    $y11 = -(double) $points[11][1];
    $x12 = (double) $points[12][0];
    $y12 = -(double) $points[12][1];
    $x13 = (double) $points[13][0];
    $y13 = -(double) $points[13][1];
    $x14 = (double) $points[14][0];
    $y14 = -(double) $points[14][1];
    $x15 = (double) $points[15][0];
    $y15 = -(double) $points[15][1];
    $x16 = (double) $points[16][0];
    $y16 = -(double) $points[16][1];
    $x17 = (double) $points[17][0];
    $y17 = -(double) $points[17][1];
    $x18 = (double) $points[18][0];
    $y18 = -(double) $points[18][1];
    $x19 = (double) $points[19][0];
    $y19 = -(double) $points[19][1];
    $x20 = (double) $points[20][0];
    $y20 = -(double) $points[20][1];
    $x21 = (double) $points[21][0];
    $y21 = -(double) $points[21][1];
    $x22 = (double) $points[22][0];
    $y22 = -(double) $points[22][1];
    $x23 = (double) $points[23][0];
    $y23 = -(double) $points[23][1];
    $x24 = (double) $points[24][0];
    $y24 = -(double) $points[24][1];
    $x25 = (double) $points[25][0];
    $y25 = -(double) $points[25][1];
    $x26 = (double) $points[26][0];
    $y26 = -(double) $points[26][1];
    $x27 = (double) $points[27][0];
    $y27 = -(double) $points[27][1];
    $x28 = (double) $points[28][0];
    $y28 = -(double) $points[28][1];
    $x29 = (double) $points[29][0];
    $y29 = -(double) $points[29][1];
    $x30 = (double) $points[30][0];
    $y30 = -(double) $points[30][1];
    $x31 = (double) $points[31][0];
    $y31 = -(double) $points[31][1];
    $x32 = (double) $points[32][0];
    $y32 = -(double) $points[32][1];
    $x33 = (double) $points[33][0];
    $y33 = -(double) $points[33][1];
    $x34 = (double) $points[34][0];
    $y34 = -(double) $points[34][1];
    $x35 = (double) $points[35][0];
    $y35 = -(double) $points[35][1];
    $x36 = (double) $points[36][0];
    $y36 = -(double) $points[36][1];

    echo "<html>
    <head>
    </head>
    <body>
        <canvas id='c' width='1000' height='1000' style='border:1px solid #000000;'> </canvas>
    </body>";

    echo "
    <script>
    var canvas = document.getElementById('c');
    canvas.width = document.body.clientWidth;
    canvas.height = document.body.clientHeight;
    var ctx = canvas.getContext ('2d');
    var width = canvas.width / 2;
    var height = canvas.height / 2;
    ctx.beginPath();
    ctx.moveTo($x2 + width,	$y2 + height);
    ctx.lineTo($x25 + width, $y25 + height);
    ctx.lineTo($x24 + width, $y24 + height);
    ctx.lineTo($x0 + width,	$y0 + height);
    ctx.lineTo($x30 + width, $y30 + height);
    ctx.lineTo($x31 + width, $y31 + height);
    ctx.lineTo($x34 + width, $y34 + height);
    ctx.lineTo($x35 + width, $y35 + height);
    ctx.lineTo($x2 + width, $y2 + height);
    ctx.lineTo($x1 + width, $y1 + height);
    ctx.lineTo($x26 + width, $y26 + height);
    ctx.lineTo($x27 + width, $y27 + height);
    ctx.lineTo($x28 + width, $y28 + height);
    ctx.lineTo($x29 + width, $y29 + height);
    ctx.lineTo($x32 + width, $y32 + height);
    ctx.lineTo($x33 + width, $y33 + height);
    ctx.lineTo($x36 + width, $y36 + height);
    ctx.lineTo($x1 + width, $y1 + height);
    ctx.moveTo($x36 + width, $y36 + height);
    ctx.lineTo($x35 + width, $y35 + height);
    ctx.moveTo($x33+ width, $y33 + height);
    ctx.lineTo($x34 + width, $y34 + height);
    ctx.moveTo($x32 + width, $y32 + height);
    ctx.lineTo($x31 + width, $y31 + height);
    ctx.moveTo($x29 + width, $y29 + height);
    ctx.lineTo($x30 + width, $y30 + height);
    ctx.moveTo($x0 + width, $y0 + height);
    ctx.lineTo($x12 + width, $y12 + height);
    ctx.lineTo($x13 + width, $y13 + height);
    ctx.lineTo($x14 + width, $y14 + height);
    ctx.lineTo($x17 + width, $y17 + height);
    ctx.lineTo($x18 + width, $y18 + height);
    ctx.lineTo($x19 + width, $y19 + height);
    ctx.lineTo($x16 + width, $y16 + height);
    ctx.lineTo($x15 + width, $y15 + height);
    ctx.lineTo($x12 + width, $y12 + height);
    ctx.moveTo($x17 + width, $y17 + height);
    ctx.lineTo($x16 + width, $y16 + height);
    ctx.moveTo($x14 + width, $y14 + height);
    ctx.lineTo($x15 + width, $y15 + height);
    ctx.moveTo($x18 + width, $y18 + height);
    ctx.lineTo($x21 + width, $y21 + height);
    ctx.lineTo($x20 + width, $y20 + height);
    ctx.lineTo($x23 + width, $y23 + height);
    ctx.lineTo($x22 + width, $y22 + height);
    ctx.lineTo($x21 + width, $y21 + height);
    ctx.moveTo($x22 + width, $y22 + height);
    ctx.lineTo($x27 + width, $y27 + height);
    ctx.moveTo($x23 + width, $y23 + height);
    ctx.lineTo($x24 + width, $y24 + height);
    ctx.moveTo($x13 + width, $y13 + height);
    ctx.lineTo($x28 + width, $y28 + height);
    ctx.moveTo($x19 + width, $y19 + height);
    ctx.lineTo($x20 + width, $y20 + height);
    ctx.moveTo($x26 + width, $y26 + height);
    ctx.lineTo($x25 + width, $y25 + height);
    ctx.stroke ();
    </script></html>";


        
?>