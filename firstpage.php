<?php
require __DIR__ . '/__connect_db.php';
$pge_name = 'index';


?>

<?php include __DIR__ .'/__head_of_index.php'; ?>

<body>
<?php include __DIR__ .'/__html_nav.php'; ?>
<!-- home -->
<div id="fullpage">
    <div class="home one">
        <div class="home_wrap">

            <div class="section one box box_1" id="section0">
                <div class="brown_square"></div>
                <div class="red_ball"></div>
                <div class="girl"><img src="imgs/home/girl.png" alt=""></div>
                <div class="tit_being phone_none">
                    <svg class="mysvg" x="0" y="0" viewBox="0 0 80 80" width="432" height="400">
                        <clippath id="clip" >
                                <path class="clip-be" d="M74.81,30.27c-1-.36-1.44.47-1.64.87a5.42,5.42,0,0,1-2.28,2.69,2.06,2.06,0,0,1-2.83-.9,3.74,3.74,0,0,1,.61-4.16,2.48,2.48,0,0,1,2.15-.87,2.42,2.42,0,0,1,1.77,1.42,1.14,1.14,0,0,0,.87.65,1.11,1.11,0,0,0,.85-.66,2,2,0,0,0,0-1.71,2.11,2.11,0,0,0-1.43-1.15A5.94,5.94,0,0,0,67,28a5.43,5.43,0,0,0-1.49,5.71.83.83,0,0,1,0,.18l-.27.15a5.08,5.08,0,0,1-1.58.7,3.52,3.52,0,0,1-3.17-1.4c-.65-.68-1.27-1.42-1.88-2.14s-1-1.36-1.5-1.92c-1.19-1.3-2.52-2.77-4.57-2.77h0a6.55,6.55,0,0,0-5.21,2.8,2,2,0,0,1-.13.23,2,2,0,0,1-.07-.24c0-.22-.07-.42-.09-.64a6.26,6.26,0,0,0-.22-1.19,1.18,1.18,0,0,0-.77-.64l-.23-.11-.47-.27-.23.49a2.14,2.14,0,0,1-.11.2,1.47,1.47,0,0,0-.28.79c0,2.32.12,4.57.22,6.7a1.45,1.45,0,0,0,.36.79,2.16,2.16,0,0,1,.14.19l.29.49.45-.35.22-.16A3.12,3.12,0,0,0,47,35a1.11,1.11,0,0,0,.18-.81v-.12a4.55,4.55,0,0,1,1.67-3.8c1.92-1.64,4.12-1.53,6,.31a33,33,0,0,1,2.47,2.77l.49.59c2.42,2.89,5.9,3.59,8.78,1.53a4.41,4.41,0,0,0,2.62,1h0A4.76,4.76,0,0,0,72.56,35c.11-.11.21-.32.32-.43s.07-.12.1-.15l-.07,1.4c-.07,1.62-.15,3.22-.23,4.84l-.18,3.44c-.08,1.59-.17,3.18-.24,4.82a17.32,17.32,0,0,0,0,2.41c0,.45.58,1.15,1.09,1.15h0a1.71,1.71,0,0,0,1.17-.86,2.22,2.22,0,0,0,.22-1.08v-.13q.08-2,.14-3.93c.07-2,.14-4,.23-6,.11-2.54.25-5.29.45-8.68A1.34,1.34,0,0,0,74.81,30.27Z" />
                                <path class="clip-o" d="M38.85,31.71c0,.09-.07.19-.1.28a1.47,1.47,0,0,1-.16.37,4.21,4.21,0,0,1-3.25,1.85,2.86,2.86,0,0,1-2.88-1.5l.57-.37c.65-.42,1.33-.85,2-1.33a6.8,6.8,0,0,0,2.39-2.92,2.12,2.12,0,0,0-.05-1.85A1.77,1.77,0,0,0,36,25.41a4.34,4.34,0,0,0-2.23.18c-2.32,1-3.6,3-3.92,6,0,.45-.11.47-.33.51a6,6,0,0,0-.66.18A10.14,10.14,0,0,0,28,28.07,15.46,15.46,0,0,0,19.77,20l-.22-.11.4-.11c5.71-1.77,9.4-5.41,10.95-10.82A6.44,6.44,0,0,0,26.53.8,16.64,16.64,0,0,0,16.91.62,19,19,0,0,0,5.27,9.25,32.83,32.83,0,0,0,.92,20.14,31.48,31.48,0,0,0,.42,32.7,6.16,6.16,0,0,0,2,36.23a1.49,1.49,0,0,0,1.48.53c.32-.09.75-.38,1-1.23a3.78,3.78,0,0,0,.08-.62l.1-1.35c.1-1.31.2-2.63.3-3.95q.3-4.3.59-8.6c.05-.78.09-1.56.13-2.34l.08-1.45-.42-.09A1.55,1.55,0,0,0,4,17.26a1.2,1.2,0,0,0-.43.95Q3.15,25.11,2.68,32a2.09,2.09,0,0,1,0,.27,1.26,1.26,0,0,1-.09-.24,11.17,11.17,0,0,1-.35-2.1A36.23,36.23,0,0,1,3,20.22,29.6,29.6,0,0,1,7.61,9.1c3.84-5.44,8.76-7.76,15-7.1A6.37,6.37,0,0,1,27,4.3a6,6,0,0,1,1.23,4.53c-.62,5.12-5.19,8.65-9.18,9.37a25.61,25.61,0,0,1-4.12.29c-.62,0-1.24,0-1.86,0-.29,0-.58,0-.87,0h-.83l-.24,1.2.41.15.33.14a2.65,2.65,0,0,0,1,.29,13.69,13.69,0,0,1,7.54,2.38,13.69,13.69,0,0,1,6.19,9.41,5,5,0,0,1-3.41,5.59,10.23,10.23,0,0,1-8.11-.89,19.5,19.5,0,0,1-6.54-5.86c-.17-.23-.36-.45-.57-.69l-.85-1L6.82,30a2.83,2.83,0,0,0,.28,3,17.51,17.51,0,0,0,5.7,4.71,14.92,14.92,0,0,0,7.28,2.17,11.32,11.32,0,0,0,3.28-.49,7.09,7.09,0,0,0,5.19-5c.08-.28.14-.55.19-.83h.1a1.5,1.5,0,0,0,.62,0c.43-.15.55-.13.75.4a3.24,3.24,0,0,0,2.6,2.13,7.79,7.79,0,0,0,1.34.12,7.47,7.47,0,0,0,5.52-2.62,2.28,2.28,0,0,0,.44-.79c0-.09.07-.19.12-.28l.17-.36-1.29-1Zm-5.06-4.44c.14,0,.26,0,.39,0a2.22,2.22,0,0,1,1.06.11c.08.06.31.2-.14,1a6.63,6.63,0,0,1-3,2.75,4.42,4.42,0,0,1,1.47-3.66C33.73,27.31,33.8,27.28,33.79,27.28Z" />
                                <path class="clip-i" d="M43,26.34l-.18-.19-.37-.45-.39.44a2.35,2.35,0,0,1-.2.19,1.29,1.29,0,0,0-.54.85c-.11,2.34-.16,4.67-.21,7.25a1.51,1.51,0,0,0,.35,1.18,1.1,1.1,0,0,0,.81.3h.17c.81,0,1.32-.55,1.32-1.54V28.28c0-.1-.1-.2-.09-.3a2.56,2.56,0,0,0-.11-.92A2,2,0,0,0,43,26.34Z" />
                                <path class="clip-ng" d="M44.16,19.69a2.31,2.31,0,0,0-1.71-.62,2.58,2.58,0,0,0-2.6,2.81,2.35,2.35,0,0,0,2.29,2.62h0a2.71,2.71,0,0,0,1.92-.83,3,3,0,0,0,.77-2.12A2.61,2.61,0,0,0,44.16,19.69Zm-2.31,1a.58.58,0,0,1,.41-.18.75.75,0,0,1,.51.26,1.2,1.2,0,0,1,.38.93c0,.41-.17.76-.8.76h0c-.68,0-.82-.46-.83-.94A1,1,0,0,1,41.84,20.74Z" />  
                        </clippath>
                        <g class="line">
                        <path class="line-b" d="M4.69,16.14,3.27,32.66S3.12,35,2.74,35a1.25,1.25,0,0,1-1.16-.69A22.8,22.8,0,0,1,.52,26.73,47.38,47.38,0,0,1,2.51,16c1.1-3.42,4-9.11,7.55-12A17,17,0,0,1,22.36.62c3.75.5,5.71,2.17,6.29,3.13s2.13,4.46-1.46,9.42-10,5.68-16,5.64c2.38.42,9,.86,12.46,4.69s4.5,7.5,3.54,10-2,4.38-4.87,4.71-5.83.44-10.62-2.5-5.67-6.17-5.67-6.17"/>
                        <path class="line-e" d="M28.27,32.48s4.41-.94,5.91-2.47,2.53-3.56,2-3.91a3.61,3.61,0,0,0-4.75,1.63c-1.34,2.63-1.19,6.06,1.19,6.63a8.29,8.29,0,0,0,4.5-.28,6,6,0,0,0,2.42-2.94"/>
                        <line class="line-i" x1="42.07" y1="25.95" x2="41.91" y2="35.43"/>
                        <path class="line-n" d="M45,25.23l.44,11.06s-.44-6,2.38-7.55,4.13-2.37,7,0,2.38,4.3,4.5,5.3,3.69,2,6.44.13"/>
                        <path class="line-g" d="M74.46,28.73s-4.19-4-6.87-.82-1.09,7,1.5,7.06,5.69-5.87,5.69-5.87L73.09,52.91"/>
                        <path class="line-o" d="M42,19.46a1.78,1.78,0,0,0-1.68,2.08c.11,2,1.59,1.88,1.59,1.88s1.87,0,1.78-2.35S42,19.46,42,19.46Z"/>
                        </g>
                    </svg>
                </div>
                <div class="tit_being com_none">
                    <svg class="mysvg" x="0" y="0" viewBox="0 0 80 80" width="232" height="400">
                        <clippath id="clip" >
                                <path class="clip-be" d="M74.81,30.27c-1-.36-1.44.47-1.64.87a5.42,5.42,0,0,1-2.28,2.69,2.06,2.06,0,0,1-2.83-.9,3.74,3.74,0,0,1,.61-4.16,2.48,2.48,0,0,1,2.15-.87,2.42,2.42,0,0,1,1.77,1.42,1.14,1.14,0,0,0,.87.65,1.11,1.11,0,0,0,.85-.66,2,2,0,0,0,0-1.71,2.11,2.11,0,0,0-1.43-1.15A5.94,5.94,0,0,0,67,28a5.43,5.43,0,0,0-1.49,5.71.83.83,0,0,1,0,.18l-.27.15a5.08,5.08,0,0,1-1.58.7,3.52,3.52,0,0,1-3.17-1.4c-.65-.68-1.27-1.42-1.88-2.14s-1-1.36-1.5-1.92c-1.19-1.3-2.52-2.77-4.57-2.77h0a6.55,6.55,0,0,0-5.21,2.8,2,2,0,0,1-.13.23,2,2,0,0,1-.07-.24c0-.22-.07-.42-.09-.64a6.26,6.26,0,0,0-.22-1.19,1.18,1.18,0,0,0-.77-.64l-.23-.11-.47-.27-.23.49a2.14,2.14,0,0,1-.11.2,1.47,1.47,0,0,0-.28.79c0,2.32.12,4.57.22,6.7a1.45,1.45,0,0,0,.36.79,2.16,2.16,0,0,1,.14.19l.29.49.45-.35.22-.16A3.12,3.12,0,0,0,47,35a1.11,1.11,0,0,0,.18-.81v-.12a4.55,4.55,0,0,1,1.67-3.8c1.92-1.64,4.12-1.53,6,.31a33,33,0,0,1,2.47,2.77l.49.59c2.42,2.89,5.9,3.59,8.78,1.53a4.41,4.41,0,0,0,2.62,1h0A4.76,4.76,0,0,0,72.56,35c.11-.11.21-.32.32-.43s.07-.12.1-.15l-.07,1.4c-.07,1.62-.15,3.22-.23,4.84l-.18,3.44c-.08,1.59-.17,3.18-.24,4.82a17.32,17.32,0,0,0,0,2.41c0,.45.58,1.15,1.09,1.15h0a1.71,1.71,0,0,0,1.17-.86,2.22,2.22,0,0,0,.22-1.08v-.13q.08-2,.14-3.93c.07-2,.14-4,.23-6,.11-2.54.25-5.29.45-8.68A1.34,1.34,0,0,0,74.81,30.27Z" />
                                <path class="clip-o" d="M38.85,31.71c0,.09-.07.19-.1.28a1.47,1.47,0,0,1-.16.37,4.21,4.21,0,0,1-3.25,1.85,2.86,2.86,0,0,1-2.88-1.5l.57-.37c.65-.42,1.33-.85,2-1.33a6.8,6.8,0,0,0,2.39-2.92,2.12,2.12,0,0,0-.05-1.85A1.77,1.77,0,0,0,36,25.41a4.34,4.34,0,0,0-2.23.18c-2.32,1-3.6,3-3.92,6,0,.45-.11.47-.33.51a6,6,0,0,0-.66.18A10.14,10.14,0,0,0,28,28.07,15.46,15.46,0,0,0,19.77,20l-.22-.11.4-.11c5.71-1.77,9.4-5.41,10.95-10.82A6.44,6.44,0,0,0,26.53.8,16.64,16.64,0,0,0,16.91.62,19,19,0,0,0,5.27,9.25,32.83,32.83,0,0,0,.92,20.14,31.48,31.48,0,0,0,.42,32.7,6.16,6.16,0,0,0,2,36.23a1.49,1.49,0,0,0,1.48.53c.32-.09.75-.38,1-1.23a3.78,3.78,0,0,0,.08-.62l.1-1.35c.1-1.31.2-2.63.3-3.95q.3-4.3.59-8.6c.05-.78.09-1.56.13-2.34l.08-1.45-.42-.09A1.55,1.55,0,0,0,4,17.26a1.2,1.2,0,0,0-.43.95Q3.15,25.11,2.68,32a2.09,2.09,0,0,1,0,.27,1.26,1.26,0,0,1-.09-.24,11.17,11.17,0,0,1-.35-2.1A36.23,36.23,0,0,1,3,20.22,29.6,29.6,0,0,1,7.61,9.1c3.84-5.44,8.76-7.76,15-7.1A6.37,6.37,0,0,1,27,4.3a6,6,0,0,1,1.23,4.53c-.62,5.12-5.19,8.65-9.18,9.37a25.61,25.61,0,0,1-4.12.29c-.62,0-1.24,0-1.86,0-.29,0-.58,0-.87,0h-.83l-.24,1.2.41.15.33.14a2.65,2.65,0,0,0,1,.29,13.69,13.69,0,0,1,7.54,2.38,13.69,13.69,0,0,1,6.19,9.41,5,5,0,0,1-3.41,5.59,10.23,10.23,0,0,1-8.11-.89,19.5,19.5,0,0,1-6.54-5.86c-.17-.23-.36-.45-.57-.69l-.85-1L6.82,30a2.83,2.83,0,0,0,.28,3,17.51,17.51,0,0,0,5.7,4.71,14.92,14.92,0,0,0,7.28,2.17,11.32,11.32,0,0,0,3.28-.49,7.09,7.09,0,0,0,5.19-5c.08-.28.14-.55.19-.83h.1a1.5,1.5,0,0,0,.62,0c.43-.15.55-.13.75.4a3.24,3.24,0,0,0,2.6,2.13,7.79,7.79,0,0,0,1.34.12,7.47,7.47,0,0,0,5.52-2.62,2.28,2.28,0,0,0,.44-.79c0-.09.07-.19.12-.28l.17-.36-1.29-1Zm-5.06-4.44c.14,0,.26,0,.39,0a2.22,2.22,0,0,1,1.06.11c.08.06.31.2-.14,1a6.63,6.63,0,0,1-3,2.75,4.42,4.42,0,0,1,1.47-3.66C33.73,27.31,33.8,27.28,33.79,27.28Z" />
                                <path class="clip-i" d="M43,26.34l-.18-.19-.37-.45-.39.44a2.35,2.35,0,0,1-.2.19,1.29,1.29,0,0,0-.54.85c-.11,2.34-.16,4.67-.21,7.25a1.51,1.51,0,0,0,.35,1.18,1.1,1.1,0,0,0,.81.3h.17c.81,0,1.32-.55,1.32-1.54V28.28c0-.1-.1-.2-.09-.3a2.56,2.56,0,0,0-.11-.92A2,2,0,0,0,43,26.34Z" />
                                <path class="clip-ng" d="M44.16,19.69a2.31,2.31,0,0,0-1.71-.62,2.58,2.58,0,0,0-2.6,2.81,2.35,2.35,0,0,0,2.29,2.62h0a2.71,2.71,0,0,0,1.92-.83,3,3,0,0,0,.77-2.12A2.61,2.61,0,0,0,44.16,19.69Zm-2.31,1a.58.58,0,0,1,.41-.18.75.75,0,0,1,.51.26,1.2,1.2,0,0,1,.38.93c0,.41-.17.76-.8.76h0c-.68,0-.82-.46-.83-.94A1,1,0,0,1,41.84,20.74Z" />  
                        </clippath>
                        <g class="line">
                        <path class="line-b" d="M4.69,16.14,3.27,32.66S3.12,35,2.74,35a1.25,1.25,0,0,1-1.16-.69A22.8,22.8,0,0,1,.52,26.73,47.38,47.38,0,0,1,2.51,16c1.1-3.42,4-9.11,7.55-12A17,17,0,0,1,22.36.62c3.75.5,5.71,2.17,6.29,3.13s2.13,4.46-1.46,9.42-10,5.68-16,5.64c2.38.42,9,.86,12.46,4.69s4.5,7.5,3.54,10-2,4.38-4.87,4.71-5.83.44-10.62-2.5-5.67-6.17-5.67-6.17"/>
                        <path class="line-e" d="M28.27,32.48s4.41-.94,5.91-2.47,2.53-3.56,2-3.91a3.61,3.61,0,0,0-4.75,1.63c-1.34,2.63-1.19,6.06,1.19,6.63a8.29,8.29,0,0,0,4.5-.28,6,6,0,0,0,2.42-2.94"/>
                        <line class="line-i" x1="42.07" y1="25.95" x2="41.91" y2="35.43"/>
                        <path class="line-n" d="M45,25.23l.44,11.06s-.44-6,2.38-7.55,4.13-2.37,7,0,2.38,4.3,4.5,5.3,3.69,2,6.44.13"/>
                        <path class="line-g" d="M74.46,28.73s-4.19-4-6.87-.82-1.09,7,1.5,7.06,5.69-5.87,5.69-5.87L73.09,52.91"/>
                        <path class="line-o" d="M42,19.46a1.78,1.78,0,0,0-1.68,2.08c.11,2,1.59,1.88,1.59,1.88s1.87,0,1.78-2.35S42,19.46,42,19.46Z"/>
                        </g>
                    </svg>
                </div>
                <div class="boy"><img src="imgs/home/boy.png" alt=""></div>
                <div class="tit_arts phone_none">
                    <svg class="mysvg2" x="0" y="0" viewBox="0 0 60 60" width="346" height="400">
                        <clippath id="clip2">
                                <path class="clip-ar" d="M58.68,7.92l-.19,0a1.21,1.21,0,0,0-.83,0c-.69.37-1.37.79-2,1.19L44.74,15.87l-3,1.84.09-1.82q.07-1.52.14-3l0-.45c0-1,.09-2,.08-3.07V9.16A1.44,1.44,0,0,0,41.82,8a1.06,1.06,0,0,0-.8-.3h0c-1.12,0-1.13,1.06-1.14,1.55q-.1,4.61-.17,9.23a.83.83,0,0,1-.44.85c-.91.53-1.85,1.12-2.88,1.83a1.73,1.73,0,0,0-.52.66c0,.07-.08.15-.12.21l-.65,1,1.16-.21.23,0a1.75,1.75,0,0,0,.78-.21c.73-.45,1.45-.92,2.21-1.42l.1-.07c0,.21,0,.41,0,.6q-.12,1.49-.25,3c-.13,1.45-.25,2.89-.36,4.34a1.24,1.24,0,0,0,.24.74,1.74,1.74,0,0,1,.09.16l.22.48.47-.24.19-.09a2,2,0,0,0,.62-.37,1.26,1.26,0,0,0,.29-.88l.09-1.26c.17-2.5.34-5,.49-7.5a.61.61,0,0,1,.35-.59c.58-.36,1.15-.73,1.72-1.11.79-.51,1.57-1,2.38-1.51,2.87-1.72,5.75-3.42,8.63-5.12l1-.6a1.77,1.77,0,0,1,.33-.13,2.85,2.85,0,0,0,.49-.19l.1-.05c.68-.37,1.38-.75,2-1.19a1.11,1.11,0,0,0,.39-.8,1.81,1.81,0,0,1,0-.2L59.29,8Z" />
                                <path class="clip-t" d="M48.06,21.61c-.36,0-.73,0-1.08.06l.29-.16,1.11-.62a1.49,1.49,0,0,0,.44-.44l.1-.13.41-.48-.57-.29-.17-.1a1.12,1.12,0,0,0-.83-.26,3.64,3.64,0,0,0-1.3.58,16.32,16.32,0,0,0-3.62,3.55c-.15.19-.28.4-.41.61l-.38.58.69.8.55-.35a3.45,3.45,0,0,0,.48-.33,4,4,0,0,1,3.53-1.24,1.62,1.62,0,0,1,1.09.73,1.23,1.23,0,0,1,.13,1A6.41,6.41,0,0,1,47.63,27a3.5,3.5,0,0,1-2.56,1.65.77.77,0,0,1-.31-.05,1,1,0,0,1,.14-.33,3.07,3.07,0,0,1,.42-.44,4.36,4.36,0,0,0,.5-.53,1.5,1.5,0,0,0,.25-.71c0-.07,0-.13,0-.19l.17-.7-.72.09c-.26,0-.65,0-1,.22A16.27,16.27,0,0,0,43.1,27.5c-.64.72-.75,1.28-.29,1.83s1.11.42,1.66.42h.06a6.77,6.77,0,0,0,6.19-5,2.57,2.57,0,0,0-.43-2.31A2.69,2.69,0,0,0,48.06,21.61Z" />
                                <path class="clip-s" d="M36.71,28.1a1.54,1.54,0,0,1-1.22.22,1.46,1.46,0,0,1-.86-.81,3.45,3.45,0,0,1,.21-3.29,1.14,1.14,0,0,0-.28-1.59,5.94,5.94,0,0,1-1.81-2.42,1.19,1.19,0,0,0-.46-.46l-.11-.08-.5-.41-.27.59-.07.12a1.14,1.14,0,0,0-.21.65A7,7,0,0,1,30,24.35,18.07,18.07,0,0,1,26.36,29a1.47,1.47,0,0,0,0-1l-.11-.27a2.24,2.24,0,0,1-.18-.53c0-.31-.08-.61-.13-.92a21.43,21.43,0,0,1-.29-2.89c0-1.22.05-2.48.11-3.69,0-.8.08-1.6.1-2.4a.64.64,0,0,1,.35-.64L30,14.43l4.09-2.49.33-.22c.56-.37.87-.56,1.33-.34a.78.78,0,0,0,.76-.11c.91-.7,1.81-1.4,2.7-2.12a.88.88,0,0,0,.17-1.1,1,1,0,0,0-1-.33A5.26,5.26,0,0,0,37,8.19q-4.75,2.7-9.46,5.44c-.5.29-1,.59-1.5.91l0,0c0-.48,0-1,0-1.45,0-1.43.07-2.9,0-4.36a25.67,25.67,0,0,0-.73-5A4.43,4.43,0,0,0,21.8.13a5.71,5.71,0,0,0-5,1.28,8.6,8.6,0,0,0-2.52,4.28A40.66,40.66,0,0,0,13,14l-.11,1.43q-.13,1.53-.25,3.06c-.11,1.44-.23,2.88-.35,4.32a2,2,0,0,1-.77,1.64c-2.45,1.85-4.91,3.78-7.29,5.64L1.83,32A13.81,13.81,0,0,0,.42,33.22a1.25,1.25,0,0,0-.27.88,2.12,2.12,0,0,1,0,.23L0,35.11l1-.29a2.53,2.53,0,0,0,.61-.22A1.59,1.59,0,0,0,2,34.25a1.27,1.27,0,0,1,.13-.14L3.53,33q3.46-2.8,6.93-5.59c.37-.29.75-.57,1.15-.84-.71,2.8-1.54,5.09-3.71,6.73a1.08,1.08,0,0,0-.38,1.1,1.13,1.13,0,0,0,1,.63,2.84,2.84,0,0,0,1.13-.3,6.11,6.11,0,0,0,2.64-3.2,18.33,18.33,0,0,0,1.2-4.63c.09-.53.18-1.06.28-1.59a.92.92,0,0,1,.3-.5q4.63-3.15,9.3-6.24l.19-.13.22-.13c0,.64-.06,1.28-.09,1.92-.08,1.67-.17,3.39-.17,5.09a14.12,14.12,0,0,0,.39,2.82c.05.26.11.52.16.78a1.31,1.31,0,0,0,.58.95,1,1,0,0,0,.68.11l-.19.15.34,1.06.49-.17.24-.07a1.67,1.67,0,0,0,.79-.36l.25-.24a13.9,13.9,0,0,0,1.8-2c.86-1.2,1.67-2.46,2.46-3.68l.67-1a2.24,2.24,0,0,0,.56.37c.37.17.43.27.26.94a11.73,11.73,0,0,0-.4,2.66,2.56,2.56,0,0,0,1.25,2.45A3.41,3.41,0,0,0,38,29.22a2,2,0,0,0,.3-.61l.07-.2.15-.36-.74-.56ZM24,9.12c0,2.13,0,4.27-.08,6.47a.74.74,0,0,1-.23.45q-4.2,2.88-8.43,5.72L14,22.62q.07-1,.13-1.92c.15-2.21.29-4.3.49-6.41s.49-4.4.85-6.53a8.85,8.85,0,0,1,1.91-4.48,3.61,3.61,0,0,1,2.71-1.37,3,3,0,0,1,.51,0,3.51,3.51,0,0,1,2.61,2.36A13.86,13.86,0,0,1,24,9.12Z" />
                        </clippath>
                        <g class="line2">
                                <path class="line-a" d="M8.35,33.91a8.55,8.55,0,0,0,2.41-3A19.61,19.61,0,0,0,13,24c.06-1.77.89-13.71.89-13.71S14.9,0,20,.52,25,7.71,24.9,10s-1.25,17.06.88,19.25"/>
                                <path class="line-r" d="M24.71,30.46S31.77,25.92,32,18.69c.44,2.7,1.06,4.08,1.56,4.52-.06,1.19-1.46,8.88,4.43,4.13"/>
                                <line class="line-t" x1="40.9" y1="6.46" x2="39.83" y2="30.46"/>
                                <path class="line-s" d="M48.77,18.23s-6.27,5.25-6.86,6.58c1.95-1.54,5.91-4.67,7.32-1.92s-2.11,5.88-3.66,5.75-2.46.13-2.3-.25,3-3.54,3-3.54"/>
                                <path class="line-a1" d="M.33,33.81s10.85-9.75,20.35-15.35S39.48,7.27,39.48,7.27"/>
                                <path class="line-t1" d="M35.33,22.71S50,12.89,50.9,12.35s8.58-5.08,8.58-5.08"/>
                        </g>
                    </svg>
                </div>
                <div class="tit_arts com_none">
                    <svg class="mysvg2" x="0" y="0" viewBox="0 0 60 60" width="200" height="400">
                        <clippath id="clip2">
                                <path class="clip-ar" d="M58.68,7.92l-.19,0a1.21,1.21,0,0,0-.83,0c-.69.37-1.37.79-2,1.19L44.74,15.87l-3,1.84.09-1.82q.07-1.52.14-3l0-.45c0-1,.09-2,.08-3.07V9.16A1.44,1.44,0,0,0,41.82,8a1.06,1.06,0,0,0-.8-.3h0c-1.12,0-1.13,1.06-1.14,1.55q-.1,4.61-.17,9.23a.83.83,0,0,1-.44.85c-.91.53-1.85,1.12-2.88,1.83a1.73,1.73,0,0,0-.52.66c0,.07-.08.15-.12.21l-.65,1,1.16-.21.23,0a1.75,1.75,0,0,0,.78-.21c.73-.45,1.45-.92,2.21-1.42l.1-.07c0,.21,0,.41,0,.6q-.12,1.49-.25,3c-.13,1.45-.25,2.89-.36,4.34a1.24,1.24,0,0,0,.24.74,1.74,1.74,0,0,1,.09.16l.22.48.47-.24.19-.09a2,2,0,0,0,.62-.37,1.26,1.26,0,0,0,.29-.88l.09-1.26c.17-2.5.34-5,.49-7.5a.61.61,0,0,1,.35-.59c.58-.36,1.15-.73,1.72-1.11.79-.51,1.57-1,2.38-1.51,2.87-1.72,5.75-3.42,8.63-5.12l1-.6a1.77,1.77,0,0,1,.33-.13,2.85,2.85,0,0,0,.49-.19l.1-.05c.68-.37,1.38-.75,2-1.19a1.11,1.11,0,0,0,.39-.8,1.81,1.81,0,0,1,0-.2L59.29,8Z" />
                                <path class="clip-t" d="M48.06,21.61c-.36,0-.73,0-1.08.06l.29-.16,1.11-.62a1.49,1.49,0,0,0,.44-.44l.1-.13.41-.48-.57-.29-.17-.1a1.12,1.12,0,0,0-.83-.26,3.64,3.64,0,0,0-1.3.58,16.32,16.32,0,0,0-3.62,3.55c-.15.19-.28.4-.41.61l-.38.58.69.8.55-.35a3.45,3.45,0,0,0,.48-.33,4,4,0,0,1,3.53-1.24,1.62,1.62,0,0,1,1.09.73,1.23,1.23,0,0,1,.13,1A6.41,6.41,0,0,1,47.63,27a3.5,3.5,0,0,1-2.56,1.65.77.77,0,0,1-.31-.05,1,1,0,0,1,.14-.33,3.07,3.07,0,0,1,.42-.44,4.36,4.36,0,0,0,.5-.53,1.5,1.5,0,0,0,.25-.71c0-.07,0-.13,0-.19l.17-.7-.72.09c-.26,0-.65,0-1,.22A16.27,16.27,0,0,0,43.1,27.5c-.64.72-.75,1.28-.29,1.83s1.11.42,1.66.42h.06a6.77,6.77,0,0,0,6.19-5,2.57,2.57,0,0,0-.43-2.31A2.69,2.69,0,0,0,48.06,21.61Z" />
                                <path class="clip-s" d="M36.71,28.1a1.54,1.54,0,0,1-1.22.22,1.46,1.46,0,0,1-.86-.81,3.45,3.45,0,0,1,.21-3.29,1.14,1.14,0,0,0-.28-1.59,5.94,5.94,0,0,1-1.81-2.42,1.19,1.19,0,0,0-.46-.46l-.11-.08-.5-.41-.27.59-.07.12a1.14,1.14,0,0,0-.21.65A7,7,0,0,1,30,24.35,18.07,18.07,0,0,1,26.36,29a1.47,1.47,0,0,0,0-1l-.11-.27a2.24,2.24,0,0,1-.18-.53c0-.31-.08-.61-.13-.92a21.43,21.43,0,0,1-.29-2.89c0-1.22.05-2.48.11-3.69,0-.8.08-1.6.1-2.4a.64.64,0,0,1,.35-.64L30,14.43l4.09-2.49.33-.22c.56-.37.87-.56,1.33-.34a.78.78,0,0,0,.76-.11c.91-.7,1.81-1.4,2.7-2.12a.88.88,0,0,0,.17-1.1,1,1,0,0,0-1-.33A5.26,5.26,0,0,0,37,8.19q-4.75,2.7-9.46,5.44c-.5.29-1,.59-1.5.91l0,0c0-.48,0-1,0-1.45,0-1.43.07-2.9,0-4.36a25.67,25.67,0,0,0-.73-5A4.43,4.43,0,0,0,21.8.13a5.71,5.71,0,0,0-5,1.28,8.6,8.6,0,0,0-2.52,4.28A40.66,40.66,0,0,0,13,14l-.11,1.43q-.13,1.53-.25,3.06c-.11,1.44-.23,2.88-.35,4.32a2,2,0,0,1-.77,1.64c-2.45,1.85-4.91,3.78-7.29,5.64L1.83,32A13.81,13.81,0,0,0,.42,33.22a1.25,1.25,0,0,0-.27.88,2.12,2.12,0,0,1,0,.23L0,35.11l1-.29a2.53,2.53,0,0,0,.61-.22A1.59,1.59,0,0,0,2,34.25a1.27,1.27,0,0,1,.13-.14L3.53,33q3.46-2.8,6.93-5.59c.37-.29.75-.57,1.15-.84-.71,2.8-1.54,5.09-3.71,6.73a1.08,1.08,0,0,0-.38,1.1,1.13,1.13,0,0,0,1,.63,2.84,2.84,0,0,0,1.13-.3,6.11,6.11,0,0,0,2.64-3.2,18.33,18.33,0,0,0,1.2-4.63c.09-.53.18-1.06.28-1.59a.92.92,0,0,1,.3-.5q4.63-3.15,9.3-6.24l.19-.13.22-.13c0,.64-.06,1.28-.09,1.92-.08,1.67-.17,3.39-.17,5.09a14.12,14.12,0,0,0,.39,2.82c.05.26.11.52.16.78a1.31,1.31,0,0,0,.58.95,1,1,0,0,0,.68.11l-.19.15.34,1.06.49-.17.24-.07a1.67,1.67,0,0,0,.79-.36l.25-.24a13.9,13.9,0,0,0,1.8-2c.86-1.2,1.67-2.46,2.46-3.68l.67-1a2.24,2.24,0,0,0,.56.37c.37.17.43.27.26.94a11.73,11.73,0,0,0-.4,2.66,2.56,2.56,0,0,0,1.25,2.45A3.41,3.41,0,0,0,38,29.22a2,2,0,0,0,.3-.61l.07-.2.15-.36-.74-.56ZM24,9.12c0,2.13,0,4.27-.08,6.47a.74.74,0,0,1-.23.45q-4.2,2.88-8.43,5.72L14,22.62q.07-1,.13-1.92c.15-2.21.29-4.3.49-6.41s.49-4.4.85-6.53a8.85,8.85,0,0,1,1.91-4.48,3.61,3.61,0,0,1,2.71-1.37,3,3,0,0,1,.51,0,3.51,3.51,0,0,1,2.61,2.36A13.86,13.86,0,0,1,24,9.12Z" />
                        </clippath>
                        <g class="line2">
                                <path class="line-a" d="M8.35,33.91a8.55,8.55,0,0,0,2.41-3A19.61,19.61,0,0,0,13,24c.06-1.77.89-13.71.89-13.71S14.9,0,20,.52,25,7.71,24.9,10s-1.25,17.06.88,19.25"/>
                                <path class="line-r" d="M24.71,30.46S31.77,25.92,32,18.69c.44,2.7,1.06,4.08,1.56,4.52-.06,1.19-1.46,8.88,4.43,4.13"/>
                                <line class="line-t" x1="40.9" y1="6.46" x2="39.83" y2="30.46"/>
                                <path class="line-s" d="M48.77,18.23s-6.27,5.25-6.86,6.58c1.95-1.54,5.91-4.67,7.32-1.92s-2.11,5.88-3.66,5.75-2.46.13-2.3-.25,3-3.54,3-3.54"/>
                                <path class="line-a1" d="M.33,33.81s10.85-9.75,20.35-15.35S39.48,7.27,39.48,7.27"/>
                                <path class="line-t1" d="M35.33,22.71S50,12.89,50.9,12.35s8.58-5.08,8.58-5.08"/>
                        </g>
                    </svg>
                </div>
                <div class="p"><p>台灣第一家繪畫酒吧</p></div>

            </div>

            <div class="section two box box_2 under" id="section1">
                <div class="brown_ball"></div>
                <div class="red_square"></div>
                <div class="brown_long_square"></div>
                <div class="lace"><img src="imgs/home/lace.png" alt=""></div>
                <div class="horse"><img src="imgs/home/horse.png" alt=""></div>
                <div class="two_p"><p>在藝術商店尋找靈感，用藝術豐富生活</p></div>
                <div class="goshop"><img src="imgs/home/goshop.png" alt=""></div>
            </div>

            <div class="section three box box_3 under" id="section2">
                <div class="brown_ball"></div>
                <div class="red_square"></div>
                <div class="brown_long_square"></div>
                <div class="new_event"><img src="imgs/home/new_event.png" alt=""></div>
                <div class="new_event2"><img src="imgs/home/new_event_2.png" alt=""></div>
                <div class="new_event_bar_table"><img src="imgs/home/new_event_bar_table.png" alt=""></div>
                <div class="new_event4"><img src="imgs/home/new_event_4.png" alt=""></div>
                <div class="new_event3"><img src="imgs/home/new_event_3.png" alt=""></div>
                <div class="three_tit"><p>杯墊創作票選活動</p></div>
                <div class="three_cont"><p>為了慶祝Being Arts藝術酒吧開幕兩周年，周年慶期間，特別舉辦了杯墊創作活動，每個來店裡創作的朋友都能投稿自己的作品。人氣最高的作品，將成為藝術酒吧未來一年中，提供給顧客們的杯墊，而作者也能免費帶回一幅自己喜愛的複製畫。</p></div>
                <div class="three_btn"><p>去票選最愛的創作</p></div>
                <div class="three_btn_2"><p>了解藝術酒吧</p></div>
            </div>

            <div class="section four box box_4 under" id="section3">
                <div class="brown_big_square"></div>
                <div class="white_frame"></div>
                <div class="red_big_ball"></div>
                <div class="borwn_square"></div>
                <div class="david"><img src="imgs/home/home_bar_man_brush.png" alt=""></div>
                <div class="four_frame"><img src="imgs/home/four_frame.png" alt=""></div>
                <div class="drink_underline phone_none"></div>
                <div class="drink drink1 phone_none"><img src="imgs/home/drink1.png" alt=""></div>
                <div class="drink drink2 phone_none"><img src="imgs/home/drink2.png" alt=""></div>
                <div class="drink drink3"><img src="imgs/home/drink3.png" alt=""></div>
                <div class="four_tit"><p>到酒吧裡揮灑創作能量，享受藝術生活</p></div>
                <div class="four_cont"><p class="phone_none">
                當有人問到「Being Arts」為何要引進繪畫酒吧時，我們都會請對方先試想一下，結束一天疲憊的工作後，總想好好放鬆一下。但，究竟應該是要去喝杯酒跟朋友聊天，還是去上疏壓的相關課程，來尋找心靈的平靜？
大部分的人都會陷入兩難。然而，國外近年興起的一股「Paint and Sip」（繪畫品酒）的風潮，讓你下班後的第二人生，不僅可以喝酒，還可藉著微醺，一邊發掘自己的繪畫天份、一邊創造跟家人朋友獨到的回憶。
                </p>
                <p  class="com_none">
                Being Arts是你下班後的第二人生，不僅可以喝酒，還可藉著微醺，一邊發掘自己的繪畫天份、一邊創造跟家人朋友獨到的回憶。
                </p>
                </div>
                <div class="four_bar four_bar1"><img src="imgs/home/home_bar_2.jpg" alt=""></div>
                <div class="four_bar four_bar2 phone_none"><img src="imgs/home/home_bar_3.jpg" alt=""></div>
                <div class="four_bar four_bar3 phone_none"><img src="imgs/home/home_bar_1.jpg" alt=""></div>
            </div>

            <div class="section five box box_5 under" id="section4">
                <div class="brown_ball"></div>
                <div class="red_square"></div>
                <div class="brown_top_square"></div>
                <div class="man"><img src="imgs/home/five_man.png" alt=""></div>
                <div class="five_p"><p>康丁斯基複製畫  限量特賣中</p></div>
                <div class="paint_frame"></div>
                <div class="paint_frame paint_frame_2"></div>
                <div class="paint_frame paint_frame_3 phone_none"></div>
                <div class="paint"><img src="imgs/home/paint_small_1.jpg" alt=""></div>
                <div class="paint paint_2"><img src="imgs/home/paint_small_2.jpg" alt=""></div>
                <div class="paint paint_3 phone_none"><img src="imgs/home/paint_small_3.jpg" alt=""></div>
                <div class="paint_frame_big"></div>
                <div class="paint_big"><img src="imgs/home/paint_big.jpg" alt=""></div>
                <div class="five_p_2"><p>康丁斯基特展</p></div>
            </div>
        </div>
    </div>
</div>
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<!-- <script src="lib/jquery-mousewheel-master/jquery.mousewheel.min.js"></script> -->
<script src="lib/fullPage.js-master/jquery.fullPage.js"></script>


<!--[if IE]>
<script type="text/javascript">
    var console = { log: function() {} };
</script>
<![endif]-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="lib/fullPage.js-master/jquery.fullPage.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            'verticalCentered': false,
            'css3': true,
            'sectionsColor': ['#fff', '#fff', '#fff', '#fff'],
            'navigation': true,
            'navigationPosition': 'right',
            // 'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple'],

            'afterLoad': function(anchorLink, index){
                console.log(index);

                if(index == 1){
                    $('.one .brown_square').addClass('load');
                    $('.one .red_ball').addClass('load');
                    $('.one .girl').addClass('load');
                    $('.one .boy').addClass('load');
                    $('.one .p').addClass('load');
                    $('.nav').addClass('phone_none');
                }
                else{
                    $('.one .brown_square').removeClass('load');
                    $('.one .red_ball').removeClass('load');
                    $('.one .girl').removeClass('load');
                    $('.one .boy').removeClass('load');
                    $('.one .p').removeClass('load');
                    $('.nav').removeClass('phone_none');
                }

                if(index == 2){
                    $('.two .brown_ball').addClass('load');
                    $('.two .red_square').addClass('load');
                    $('.two .brown_long_square').addClass('load');
                    $('.two .horse').addClass('load');
                    $('.two .two_p').addClass('load');
                    $('.two .goshop').addClass('load');
                }
                else{
                    $('.two .brown_ball').removeClass('load');
                    $('.two .red_square').removeClass('load');
                    $('.two .brown_long_square').removeClass('load');
                    $('.two .horse').removeClass('load');
                    $('.two .two_p').removeClass('load');
                    $('.two .goshop').removeClass('load');
                }
                if(index == 3){
                    $('.three .red_square').addClass('load');
                    $('.three .brown_long_square').addClass('load');
                    $('.three .brown_ball').addClass('load');
                    $('.three .new_event_bar_table').addClass('load');
                    $('.three .new_event4').addClass('load');
                    $('.three .new_event3').addClass('load');
                    $('.three .three_tit').addClass('load');
                    $('.three .three_cont').addClass('load');
                    $('.three_btn').addClass('load');
                    $('.three_btn_2').addClass('load');
                    $('.three .new_event').addClass('load');
                    $('.three .new_event2').addClass('load');
                }
                else{
                    $('.three .red_square').removeClass('load');
                    $('.three .brown_long_square').removeClass('load');
                    $('.three .brown_ball').removeClass('load');
                    $('.three .new_event_bar_table').removeClass('load');
                    $('.three .new_event4').removeClass('load');
                    $('.three .new_event3').removeClass('load');
                    $('.three .three_tit').removeClass('load');
                    $('.three .three_cont').removeClass('load');
                    $('.three_btn').removeClass('load');
                    $('.three_btn_2').removeClass('load');
                    $('.three .new_event').removeClass('load');
                    $('.three .new_event2').addClass('load');
                }
                if(index == 4){
                    $('.four .david').addClass('load');
                    $('.four .borwn_square').addClass('load');
                    $('.four .red_big_ball').addClass('load');
                    $('.four .four_tit').addClass('load');
                    $('.four .four_cont').addClass('load');
                    $('.four .brown_big_square').addClass('load');
                    $('.four .four_frame').addClass('load');
                    $('.four .four_bar1').addClass('load');
                    $('.four .four_bar2').addClass('load');
                    $('.four .four_bar3').addClass('load');
                    $('.four .drink_underline').addClass('load');
                    $('.four .drink1').addClass('load');
                    $('.four .drink2').addClass('load');
                    $('.four .drink3').addClass('load');
                }
                else{
                    $('.four .david').removeClass('load');
                    $('.four .borwn_square').removeClass('load');
                    $('.four .red_big_ball').removeClass('load');
                    $('.four .four_tit').removeClass('load');
                    $('.four .four_cont').removeClass('load');
                    $('.four .brown_big_square').removeClass('load');
                    $('.four .four_frame').removeClass('load');
                    $('.four .four_bar1').removeClass('load');
                    $('.four .four_bar2').removeClass('load');
                    $('.four .four_bar3').removeClass('load');
                    $('.four .drink_underline').removeClass('load');
                    $('.four .drink1').removeClass('load');
                    $('.four .drink2').removeClass('load');
                    $('.four .drink3').removeClass('load');

                }
                if(index == 5){
                    $('.five .red_square').addClass('load');
                    $('.five .brown_top_square').addClass('load');
                    $('.five .brown_ball').addClass('load');
                    $('.five .man').addClass('load');
                    $('.five .five_p').addClass('load');
                    $('.five .paint_frame_big').addClass('load');
                    $('.five .paint_big').addClass('load');
                    $('.five .paint_frame').addClass('load');
                    $('.five .paint img').addClass('load');
                    $('.five .five_p_2').addClass('load');
                    $('').addClass('load');
                    $('').addClass('load');
                }
                else{
                    $('.five .red_square').removeClass('load');
                    $('.five .brown_top_square').removeClass('load');
                    $('.five .brown_ball').removeClass('load');
                    $('.five .man').removeClass('load');
                    $('.five .five_p').removeClass('load');
                    $('.five .paint_frame_big').removeClass('load');
                    $('.five .paint_big').removeClass('load');
                    $('.five .paint_frame').removeClass('load');
                    $('.five .paint img').removeClass('load');
                    $('.five .five_p_2').removeClass('load');
                    $('').removeClass('load');
                    $('').removeClass('load');
                    $('').removeClass('load');

                }
            },

            'onLeave': function(index, nextIndex, direction){


                if (index == 3 && direction == 'down'){
                    $('.three .three_tit').eq(index -1).removeClass('moveDown').addClass('moveUp');
                }
                else if(index == 3 && direction == 'up'){
                    $('.three .three_tit').eq(index -1).removeClass('moveUp').addClass('moveDown');
                }
            }
        });
    });
</script>

</body>
</html>