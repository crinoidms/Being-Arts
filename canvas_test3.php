<?php
require __DIR__ . '/__connect_db.php';

$number = isset($_GET['number']) ? $_GET['number'] : 'p101' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="./js/jquery-ui.js"></script>
    <script src="js/d3.v3.min.js"></script>
    <script src="js/numeric-1.2.6.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="./js/jquery-ui.min.js"></script>
    <script src="./js/jquery.ui.touch-punch.min.js"></script>


    <script>
        $( function() {
            $( "#drag1" ).draggable({
                containment: "#containment-wrapper",
                drag: function() {
                    // var left=$(this).offset().left;
                    // var top=$(this).offset().top;
                    var left=$(this).position().left-240;
                    var top=$(this).position().top-100;
                    $("#container").css({
                        "left" : left+"px",
                        "top" : top+"px"
                    });
                }
            });

        } );
    </script>

    <style>
        @font-face {
            font-family: jf03 ;
            src: url(./lib/font/jf-jinxuan-fresh2.2-book.otf);
        }
        body{
            margin: 0;
            padding: 0;
        }

        #container {
            position: relative;
        }

        #container * {
            position: absolute;
        }

        #screen {
            visibility: hidden;
        }

        circle.control-point {
            fill: #947c50;
            fill-opacity: 0.5;
        }

        circle.control-point:hover {
            stroke: yellow;
            stroke-width: 2px;
        }
        /*--------------------------------------*/
        #containment-wrapper{
            width: 1050px;
            height: 560px;
            overflow: hidden;
            /*border: 1px solid black;*/
            /*background-color: rgba(0,0,0,.5);*/
            background-color: #ebe3d4;
        }

        #bg{
            width: 850px;
            height: 450px;
            background-image: url("./imgs/room/room1.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size:cover;
            margin: 30px 0 0 25px;
            box-shadow: 2px 2px 5px  #888;
        }

        #drag1 {
            padding: 10px;
            cursor: move;
            z-index: 30;
            text-align: center;
            background-color: #947c50;
            color: #fff;
            position: absolute;
            top:100px;
            left:240px;
            width: 100px;
            height: 20px;
            opacity: 0;
            /*border: none;*/
        }
        .display{
            /*opacity: 0;*/
            display: none;
        }
        .control{
            position: relative;
            z-index: 20;
            /*background-color: #fff;*/
            height: 70px;
            width: 1000px;
        }
        .wrap{
            width: 100vw;
        }
        @media screen and (max-width:680px){

            #containment-wrapper{
                width: 667px;
                height: 350px;
                overflow: hidden;
            }

            #bg{
                width: 580px;
                height: 350px;
                background-image: url("./imgs/room/room1.jpg");
                background-repeat: no-repeat;
                background-position: center;
                background-size:contain;
            }

        }
        .adjust{
            
        }
        .main_flex{
            display: flex;
        }
        .rooms{
            width: 130px;
            height: 450px;
            /*background-color: #ffe8a1;*/
            margin: 30px 0 0 15px;
        }
        .room{
            width: 130px;
            height: 100px;
            /*border-radius: 50%;*/
            box-shadow: 2px 2px 5px  #888;
            position: relative;
            z-index: 10;
        }
        .room1 {
            background-image: url("imgs/room/room1.jpg");
            background-size: cover;
        }
        .room2 {
            background-image: url("imgs/room/room2.jpg");
            background-size: cover;
            margin-top: 15px;
        }
        .room3 {
            background-image: url("imgs/room/room3.jpg");
            background-size: cover;
            margin-top: 15px;
        }
        .room4 {
            background-image: url("imgs/room/room5.jpg");
            background-size: cover;
            margin-top: 15px;
        }
        .room.active{
            border: 1px solid #947C50;
        }
        /*control---------------------------------------*/
        .control{
            width: 995px;
            height: 35px;
            /*background-color: #E0E0E0;*/
            display: flex;
            margin:15px 0 0 25px;
            justify-content:space-between;
        }
        .control_right{
            display: flex;
        }
        #reload, #getval{
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }
        .custom-reload {
            border: 1px solid #947c50;
            display: inline-block;
            padding: 2px 15px;
            cursor: pointer;
            font-family: jf03 ;
            font-size: 14px;
            letter-spacing: 2px;
            color:#947c50;
            line-height: 30px;
            /*line-height: 14px;*/
        }
        .custom-upload {
            border: 1px solid #947c50;
            display: inline-block;
            padding: 2px 10px;
            cursor: pointer;
            font-family: jf03 ;
            font-size: 14px;
            /*letter-spacing: 2px;*/
            color:#947c50;
            line-height: 30px;
            /*line-height: 14px;*/
        }
        .custom-reload:hover, .custom-upload:hover, {
            transform: translateY(-3px);
            transition: 0.5s;
        }
        .custom-button:hover{
            /*transform: translateX(-3px);*/
        }
        .custom-reload span, .custom-button span,  .custom-upload span{
            transform: translateY(-4px);
        }
        .custom-reload img, .custom-button img,  .custom-upload img{
            width: 20px;
            height: 20px;
            object-fit: cover;
            margin: 0 3px 0 0;
            /*line-height: 30px;*/
            transform: translateY(5px);
        }
        .custom-button{
            background-color: #947c50;
            display: inline-block;
            padding: 2px 15px;
            cursor: pointer;
            font-family: jf03 ;
            font-size: 14px;
            letter-spacing: 2px;
            color:#fff;
            line-height: 30px;
            margin-right: 12px;
            border: 1px solid rgba(255,255,255,0)
        }
        #moveCheck, #drawSkeleton{
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0,0,0,0);
            border: 0;
        }
        .adjustcolor{
            -webkit-mask-image: url("imgs/icon/adjust.svg");
            color: #947c50;
        }
        .movecolor{
            -webkit-mask-image: url("imgs/icon/move.svg");
            color: #947c50;
        }
    </style>
</head>

<body>

<div class="wrap">
    <div id="containment-wrapper">
<div class="main_flex">
        <div id="bg">
            <div id="drag1"  class="ui-widget-content">點我移動</div>
            <div id="container">  <!--canvas-->
                <img id="background" src="./imgs/transparent-1000.png">
                <img id="screen" src="./imgs/p200/<?= $number ?>.jpg">
                <canvas id="canvasElement"></canvas>
                <svg id="svgElement"></svg>
            </div>
        </div>
        <div class="rooms">
            <div class="room room1 active" data-room="room1"></div>
            <div class="room room2" data-room="room2"></div>
            <div class="room room3" data-room="room3"></div>
            <div class="room room4" data-room="room5"></div>
        </div>
</div>
        <div class="control">
            <div>
<!--                <label for="getval" class="custom-upload">-->
<!--                    <img src="./imgs/icon/upload.svg" alt="" > <span>試自己的照片</span>-->
<!--                </label>-->
<!--                <input type='file' id='getval' />-->

                <label for="reload" class="custom-reload">
                    <img src="./imgs/icon/reload.svg" alt=""> <span>再試一次</span>
                </label>
                <Input Type="Button" id="reload" onClick="window.location.reload();">
<!--                <input id="file-upload" type="file"/>-->
            </div>
            <div class="control_right" >
<!--                <div>-->
<!--                <label for="moveCheck" class="custom-button" id="moveLabel">-->
<!--                    <img src="./imgs/icon/move.svg" alt=""> <span>移動完成</span>-->
<!--                </label>-->
<!--                <input type="checkbox" checked="1" id="moveCheck">-->
<!--                </div>-->
                <div>
                <label for="drawSkeleton" class="custom-button" id="adjustLabel">
                    <img src="./imgs/icon/adjust.svg" alt="" > <span>調整完成</span>
                </label>
                <input type="checkbox" checked="1" id="drawSkeleton">
                </div>
<!--                <div>-->
<!--<!--                    <div class="adjust"><img src="" alt=""></div>-->
<!--                  -->
<!--                </div>-->
<!--                <label for="drawSkeleton">完成調整取消勾選</label>-->
<!--                <label for="moveCheck">完成移動</label>-->

<!--                <br/>-->
                <label for="getval" class="custom-upload">
                    <img src="./imgs/icon/upload.svg" alt="" > <span>試自己的照片</span>
                </label>
                <input type='file' id='getval' /><br/><br/>
            </div>

        </div>
    </div>
</div>

<!--    <script src="js/jquery-3.2.1.js"></script>-->
    <script>

        //-----------------------移動按鈕----------------------

        var moveBtn = $('#drag1');

        $('#moveCheck').click(function () {
            var label =  $("#moveLabel");
            var span = label.find('span');
            if($(this).prop("checked")){
                label.css({
                    "background-color": "#947c50",
                    "color": "#FFF",
                    "border": "1px solid rgba(255,255,255,0)"
                });
                span.text("完成移動");
                label.find('img').addClass('movecolor');
                moveBtn.removeClass('display');

            }else {
                label.css({
                    "background-color": "rgba(255,255,255,0)",
                    "color": "#947c50",
                    "border": "1px solid #947c50"
                });
                span.text("移動畫作");
                // $("#moveLabel").css("background-color", "#ccc");
                moveBtn.addClass('display');
                // label.find('img').removeClass('movecolor');

            }
        });

        //-----------------------調整按鈕樣式改變----------------------

        $('#drawSkeleton').click(function () {
            var label =  $("#adjustLabel");
            var span = label.find('span');
            if($(this).prop("checked")){
                label.css({
                    "background-color": "#947c50",
                    "color": "#FFF",
                    "border": "1px solid rgba(255,255,255,0)"
                });
                span.text("完成調整");
                label.find('img').addClass('adjustcolor');
            }else {
                label.css({
                    "background-color": "rgba(255,255,255,0)",
                    "color": "#947c50",
                    "border": "1px solid #947c50"
                });
                span.text("調整畫作");
                // label.find('img').removeClass('adjustcolor');
                // $("#moveLabel").css("background-color", "#ccc");
            }
        });

        //------------------------更改房間------------------------

        $('.room').click(function () {
            var roomsid = $(this).attr('data-room');
            console.log(roomsid);
            document.getElementById('bg').style.backgroundImage = "url( imgs/room/"+ roomsid +".jpg)";
            $(this).addClass('active');
            $(this).siblings().removeClass('active');
        });

    </script>


<script>
    //------------------------上傳照片------------------------

    document.getElementById('getval').addEventListener('change', readURL, true);
    function readURL(){
        var file = document.getElementById("getval").files[0];
        var reader = new FileReader();
        reader.onloadend = function(){
            document.getElementById('bg').style.backgroundImage = "url(" + reader.result + ")";
        };
        if(file){
            reader.readAsDataURL(file);
        }else{
        }

    }

    var maximumTriangleCount ;
    var maxAllowableBadness ;

    // The control points which represent the top-left, top-right and bottom
    // right of the image.
    //alert(document.getElementById('screen').naturalWidth);
    var imgw ;
    var imgh ;

    var controlPoints = [];

    var backgroundImgElement;
    var imgElement;
    var canvasElement ;
    var svgElement;
    var drawSkeletonElement ;
    var containerElement;


    // var maximumTriangleCount = 200;
    // var maxAllowableBadness = 1e-2;
    //
    // // The control points which represent the top-left, top-right and bottom
    // // right of the image.
    // //alert(document.getElementById('screen').naturalWidth);
    // var imgw = document.getElementById('screen').naturalWidth;
    // var imgh = document.getElementById('screen').naturalHeight;
    //
    // var controlPoints = [
    //     { x: 200, y: 150 },
    //     { x: 200+imgw, y: 150 },
    //     { x: 200+imgw, y: 150+imgh },
    //     { x: 200, y: 150+imgh }
    // ];
    //
    // var backgroundImgElement = document.getElementById('background');
    // var imgElement = document.getElementById('screen');
    // var canvasElement = document.getElementById('canvasElement');
    // var svgElement = document.getElementById('svgElement');
    // var drawSkeletonElement = document.getElementById('drawSkeleton');
    // var containerElement = document.getElementById('container');

    var myImg = new Image();
    myImg.addEventListener('load', function(){
        begin();
    });
    myImg.src = $('#screen').attr('src');


    function begin(){
        maximumTriangleCount = 200;
        maxAllowableBadness = 1e-2;

        imgw = document.getElementById('screen').naturalWidth;
        imgh = document.getElementById('screen').naturalHeight;

        controlPoints = [
            { x: 200, y: 100 },
            { x: 200+imgw, y: 100 },
            { x: 200+imgw, y: 100+imgh },
            { x: 200, y: 100+imgh }
        ];

        backgroundImgElement = document.getElementById('background');
        imgElement = document.getElementById('screen');
        canvasElement = document.getElementById('canvasElement');
        svgElement = document.getElementById('svgElement');
        drawSkeletonElement = document.getElementById('drawSkeleton');
        containerElement = document.getElementById('container');

        initialize();
    }



    function initialize()
    {
        drawSkeletonElement.onchange = redrawImg;
        imgElement.onload = redrawImg;
        backgroundImgElement.onload = resizeElements;

        resizeElements();
        setupDragging();
        redrawImg();
    }




    function resizeElements() {
        var w = backgroundImgElement.naturalWidth;
        var h = backgroundImgElement.naturalHeight;
        containerElement.style.width = w+'px';
        containerElement.style.height = h+'px';
        svgElement.style.width = w+'px'; svgElement.style.height = h+'px';
        canvasElement.width = w; canvasElement.height = h;
        redrawImg();
    }

    function redrawImg() {
        var drawSkeleton = !!(drawSkeletonElement.checked);

        var w = imgElement.naturalWidth, h = imgElement.naturalHeight;

        var srcPoints = [
            { x: 0, y: 0 },    // top-left
            { x: w, y: 0 },    // top-right
            { x: w, y: h },    // bottom-right
            { x: 0, y: h }     // bottom-left
        ];

        var ctx = canvasElement.getContext('2d');
        ctx.clearRect(0, 0, canvasElement.width, canvasElement.height);

        var projPoints = findQuadProjectiveDepths(controlPoints);

        var triangles = [
            { src: [srcPoints[0], srcPoints[1], srcPoints[2]],
                dst: [projPoints[0], projPoints[1], projPoints[2]] },
            { src: [srcPoints[2], srcPoints[3], srcPoints[0]],
                dst: [projPoints[2], projPoints[3], projPoints[0]] }
        ];

        // Keep sub-dividing until we're done
        var triIdx = 0;
        while((triIdx < triangles.length) && (triangles.length < maximumTriangleCount)) {
            var newTris = subdivideTriangle(triangles[triIdx]);
            if(newTris.length == 1) {
                // no subdivision performed
                triIdx++;
            } else {
                // remove original triangle and add new ones
                triangles.splice(triIdx, 1);
                triangles = triangles.concat(newTris);
            }
        }

        // Draw affine-transformed triangles
        for(var i=0; i<triangles.length; i++) {
            var src = triangles[i].src;
            var dstProj = triangles[i].dst;

            var dst = [];
            for(var j=0; j<dstProj.length; j++) {
                var p = dstProj[j];
                dst.push({ x: p.x/p.z, y: p.y/p.z });
            }

            var T = affineTransformationFromTriangleCorners(src, dst);

            ctx.save();

            // set clip
            trianglePath(ctx, dst);
            ctx.clip();

            // draw image
            ctx.transform(T[0], T[1], T[2], T[3], T[4], T[5]);
            ctx.drawImage(imgElement, 0, 0);

            ctx.restore();

            if(drawSkeleton) {
                trianglePath(ctx, dst);
                ctx.lineWidth = 2;
                ctx.strokeStyle = 'rgba(255,255,255,0)';
                ctx.stroke();
            }
        }

        if(drawSkeleton) {
            svgElement.style.visibility = 'visible';
        } else {
            svgElement.style.visibility = 'hidden';
        }
    }

    function subdivideTriangle(inputTri)
    {
        // Work out badness of each edge
        var worstEdge = { badness: -1, corners: null };
        for(var cornerIdx=0; cornerIdx<inputTri.dst.length; cornerIdx++)
        {
            var corner1Idx = cornerIdx, corner2Idx = (cornerIdx+1) % inputTri.dst.length;
            var dz = inputTri.dst[corner1Idx].z - inputTri.dst[corner2Idx].z;
            var badness = Math.abs(dz);
            if(badness > worstEdge.badness) {
                worstEdge = { badness: badness, corners: [corner1Idx, corner2Idx] };
            }
        }

        // If the maximum badness is OK, don't subdivide
        if(worstEdge.badness < maxAllowableBadness) {
            return [inputTri];
        }

        // Going to turn
        //
        // A _____ B      A __D__ B
        //   \   /          \/_\/
        //    \ /     =>   F \ / E
        //     C              C

        var srcA = inputTri.src[0], dstA = inputTri.dst[0];
        var srcB = inputTri.src[1], dstB = inputTri.dst[1];
        var srcC = inputTri.src[2], dstC = inputTri.dst[2];

        var srcD = { x: (srcA.x + srcB.x)/2, y: (srcA.y + srcB.y)/2 };
        var dstD =
            { x: (dstA.x + dstB.x)/2, y: (dstA.y + dstB.y)/2, z: (dstA.z + dstB.z)/2 };
        var srcE = { x: (srcB.x + srcC.x)/2, y: (srcB.y + srcC.y)/2 };
        var dstE =
            { x: (dstB.x + dstC.x)/2, y: (dstB.y + dstC.y)/2, z: (dstB.z + dstC.z)/2 };
        var srcF = { x: (srcC.x + srcA.x)/2, y: (srcC.y + srcA.y)/2 };
        var dstF =
            { x: (dstC.x + dstA.x)/2, y: (dstC.y + dstA.y)/2, z: (dstC.z + dstA.z)/2 };

        return [
            { src: [ srcA, srcD, srcF ], dst: [ dstA, dstD, dstF ] },
            { src: [ srcD, srcB, srcE ], dst: [ dstD, dstB, dstE ] },
            { src: [ srcC, srcF, srcE ], dst: [ dstC, dstF, dstE ] },
            { src: [ srcD, srcE, srcF ], dst: [ dstD, dstE, dstF ] },
        ]
    }

    function findQuadProjectiveDepths(corners)
    {
        // See http://www.reedbeta.com/blog/2012/05/26/quadrilateral-interpolation-part-1/

        // Firstly, find the centre point:
        var centre = intersectLines(
            [corners[0], corners[2]], [corners[1], corners[3]]);

        // Lengths of diagonals
        var d02 = dist(corners[0], corners[2]);
        var d13 = dist(corners[1], corners[3]);

        // Find a projective homogeneous representation for each corner point
        // with the correct projective co-ordinate. See the site referenced in
        // the top comment for some more details.

        var tl_z = d02 / dist(corners[0], centre);
        var tl_hom = { x: tl_z * corners[0].x, y: tl_z * corners[0].y, z: tl_z };

        var tr_z = d13 / dist(corners[1], centre);
        var tr_hom = { x: tr_z * corners[1].x, y: tr_z * corners[1].y, z: tr_z };

        var br_z = d02 / dist(corners[2], centre);
        var br_hom = { x: br_z * corners[2].x, y: br_z * corners[2].y, z: br_z };

        var bl_z = d13 / dist(corners[3], centre);
        var bl_hom = { x: bl_z * corners[3].x, y: bl_z * corners[3].y, z: bl_z };

        return [ tl_hom, tr_hom, br_hom, bl_hom ];
    }

    function trianglePath(ctx, points)
    {
        ctx.beginPath();
        ctx.moveTo(points[0].x, points[0].y);
        ctx.lineTo(points[1].x, points[1].y);
        ctx.lineTo(points[2].x, points[2].y);
        ctx.closePath();
    }

    function setupDragging()
    {
        // Use d3.js to provide user-draggable control points
        var rectDragBehav = d3.behavior.drag().on('drag', rectDragDrag);

        var dragT = d3.select(svgElement).selectAll('circle')
            .data(controlPoints)
            .enter().append('circle')
            .attr('cx', function(d) { return d.x; })
            .attr('cy', function(d) { return d.y; })
            .attr('r', 20)
            .attr('class', 'control-point')
            .call(rectDragBehav);

        function rectDragDrag(d,i) {
            d.x += d3.event.dx; d.y += d3.event.dy;
            d3.select(this).attr('cx',d.x).attr('cy',d.y);
            redrawImg();
        }
    }

    function affineTransformationFromTriangleCorners(before, after)
    {
        /*
         Return the a, b, c, d, e, f parameters needed by the transform()
         canvas function which will transform the three points in *before* to the
         corresponding ones in *after*. The points should be specified as
         [{x:x1,y:y1}, {x:x2,y:y2}, {x:x3,y:y2}].
        */

        /*
         Calling the before points [x1, y1], etc and the after points [x1',
         y1'], etc, then the affine transformation matrix must do this:

            [ x1' x2' x3' ]   [ a c e ] [ x1 x2 x3 ]
            [ y1' y2' y3' ] = [ b d f ] [ y1 y2 y3 ]
            [ 1   1   1   ]   [ 0 0 1 ] [ 1  1  1  ]

            `-------------'   `-------' `----------'
                   Y        =     T          X

         We know matrices Y and X because we're passed them. We want T. So,

             T = Y * inverse(X).
        */

        var X, Y, T;

        // Make X matrix
        X = [
            [ before[0].x, before[1].x, before[2].x ],
            [ before[0].y, before[1].y, before[2].y ],
            [ 1, 1, 1 ]
        ];

        // Make Y matrix
        Y = [
            [ after[0].x, after[1].x, after[2].x ],
            [ after[0].y, after[1].y, after[2].y ],
            [ 1, 1, 1 ]
        ];

        // Compute T matrix using Numeric. If you wanted, you could work out the
        // inverse of X long-hand but life is too short.
        T = numeric.dot(Y, numeric.inv(X));

        // We only want specific elements from T
        return [T[0][0], T[1][0], T[0][1], T[1][1], T[0][2], T[1][2]];
    }

    function intersectLines(line1, line2)
    {
        /*
            Return an object of the form {x: ..., y: ...} which specifies the
            intersection of the two lines specified as an array of two points.
        */

        // See http://en.wikipedia.org/wiki/Line-line_intersection

        var x1, y1, x2, y2, x3, y3, x4, y4;

        x1 = line1[0].x;    y1 = line1[0].y;
        x2 = line1[1].x;    y2 = line1[1].y;
        x3 = line2[0].x;    y3 = line2[0].y;
        x4 = line2[1].x;    y4 = line2[1].y;

        var denominator = (x1-x2)*(y3-y4) - (y1-y2)*(x3-x4);

        return {
            x: ((x1*y2 - y1*x2)*(x3-x4) - (x1-x2)*(x3*y4 - y3*x4)) / denominator,
            y: ((x1*y2 - y1*x2)*(y3-y4) - (y1-y2)*(x3*y4 - y3*x4)) / denominator
        };
    }

    // Utility function to compute distance between points
    function dist(a,b) {
        var dx = a.x - b.x;
        var dy = a.y - b.y;
        return Math.sqrt(dx*dx + dy*dy);
    }


</script>
</body>
</html>