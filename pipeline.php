<!doctype html>
<html lang="en" class="no-js">

<?php 
    header("Cache-Control: no-cache, must-revalidate");
    include "head.php";
?>
<style>
    .cd-section:nth-of-type(1)>div{
        background-image: linear-gradient(to right bottom, #5c2160, #7d2864, #9c3365, #b84364, #d05660);
    }
    .cd-section:nth-of-type(2)>div{
        background-image: linear-gradient(to right top, #9c3365, #b84263, #d05660, #e36d5b, #f28657);
    }
    .cd-section:nth-of-type(3)>div{
        background-image: linear-gradient(to right bottom, #d05660, #e36d5b, #f28657, #fba254, #ffbe56);
    }
    .cd-section:nth-of-type(4)>div{
        background-image: linear-gradient(to right top, #f28657, #fca155, #ffbe56, #ffdb5f, #f9f871);
    }
    .cd-section:nth-of-type(5)>div{
        background-image: linear-gradient(to right top, #5c2160, #9c3365, #d0565f, #f28656, #ffbe56);
    }
    .cd-section:nth-of-type(6)>div{
        background-image: linear-gradient(to right top, #5c2160, #9c3365, #d0565f, #f28656, #ffbe56);
    }
    .ac1{
        margin-left:-20%;
    }
    .ms-head:nth-of-type(2){
        margin-top: 15%;
    }
</style>

<style>
    .line1 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 14s infinite;
        animation-direction: alternate;
    }
    
    .line2 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 13s infinite;
        animation-direction: alternate;
        animation-delay: 1s;
    }
    
    .line3 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 12s infinite;
        animation-direction: alternate;
        animation-delay: 2s;
    }
    
    .line4 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 11s infinite;
        animation-direction: alternate;
        animation-delay: 3s;
    }
    
    .line5 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 10s infinite;
        animation-direction: alternate;
        animation-delay: 4s;
    }
    
    .line6 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 9s infinite;
        animation-direction: alternate;
        animation-delay: 5s;
    }
    
    .line7 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 8s infinite;
        animation-direction: alternate;
        animation-delay: 6s;
    }
    
    .line8 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 7s infinite;
        animation-direction: alternate;
        animation-delay: 7s;
    }
    
    .line9 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 6s infinite;
        animation-direction: alternate;
        animation-delay: 8s;
    }
    
    .line10 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 5s infinite;
        animation-direction: alternate;
        animation-delay: 9s;
    }
    
    .line11 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 4s infinite;
        animation-direction: alternate;
        animation-delay: 10s;
    }
    
    .line12 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 3s infinite;
        animation-direction: alternate;
        animation-delay: 11s;
    }
    
    .line13 {
        stroke-dasharray: 1000;
        stroke-dashoffset: 1000;
        animation: line1 2s infinite;
        animation-direction: alternate;
        animation-delay: 12s;
    }
    
    @keyframes line1 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line2 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line3 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line4 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line5 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line6 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line7 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line8 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line9 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line10 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line11 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line12 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
    
    @keyframes line13 {
        from {
            stroke-dashoffset: 1000;
        }
        to {
            stroke-dashoffset: 0;
        }
    }
</style>

<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->



<body data-hijacking="on" data-animation="rotate">
    <section class="cd-section visible ">
        <img src="img/new/erfolg-logo-vertical.svg" class="img-responsive brand-logo hidden-large">
        <div class="content--fixed">              
            <div class="container">            
                <div class="row">
                    <div class="col-lg-12 text-center ">
                        <center>
                        
                        <svg version="1.1" class="pm1 other ms-head" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="1258px" height="774px" viewBox="0 0 1258 774" enable-background="new 0 0 1258 774" xml:space="preserve">
                            <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="43.998"/>
                            <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="35.899"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="830.706" y1="430.034" x2="830.706" y2="434.849"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="830.706" y1="497.034" x2="830.706" y2="501.849"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="794.799" y1="465.942" x2="799.613" y2="465.942"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="861.799" y1="465.942" x2="866.613" y2="465.942"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="805.315" y1="491.333" x2="808.72" y2="487.929"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="852.692" y1="443.956" x2="856.097" y2="440.552"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="856.097" y1="491.333" x2="852.692" y2="487.929"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="808.72" y1="443.956" x2="805.315" y2="440.552"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="820.706" y1="509.931" x2="820.706" y2="557.183"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="840.706" y1="509.931" x2="840.706" y2="557.183"/>
                            <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="6.794"/>
                                <line fill="none" class="thread" id="needle" stroke="#fff" stroke-width="2" stroke-linecap="round"  stroke-miterlimit="10" x1="830.706" y1="465.933" x2="841.578" y2="442.254">
                                    <animateTransform id="animateNeedle"
                                        attributeName="transform"
                                        attributeType="XML"
                                        type="rotate"
                                        from="-60 831.578 465"
                                        to="45 831.578 465"
                                        dur="5s"
                                        repeatCount="1"/>
                                </line>                      
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M579.827,141.831
                                C565.166,128.141,556,108.641,556,87c0-41.421,33.579-75,75-75c41.422,0,75,33.579,75,75c0,21.734-9.245,41.309-24.017,55.006
                                M165.289,270.011c-13.689-14.66-33.189-23.826-54.83-23.826c-41.422,0-75,33.578-75,75s33.578,75,75,75
                                c21.733,0,41.309-9.246,55.006-24.017 M1095.459,372.168c13.697,14.771,33.272,24.017,55.006,24.017c41.422,0,75-33.579,75-75
                                s-33.578-75-75-75c-21.641,0-41.141,9.166-54.83,23.826 M681,237.593V103.034c0-27.614-22.386-50-50-50l0,0
                                c-27.614,0-50,22.386-50,50v134.559 M725.496,269.593L725.496,269.593c0-17.811-14.438-32.248-32.248-32.248H568.753
                                c-17.811,0-32.248,14.438-32.248,32.248l0,0 M906.744,201.455c8.038-7.454,13.068-18.105,13.068-29.933
                                c0-22.54-18.271-40.813-40.813-40.813c-22.54,0-40.813,18.272-40.813,40.813c0,11.776,4.988,22.388,12.966,29.837 M906.209,253.47
                                v-73.222c0-15.027-12.182-27.208-27.209-27.208l0,0c-15.026,0-27.208,12.182-27.208,27.208v73.222 M930.422,270.883L930.422,270.883
                                c0-9.692-7.857-17.548-17.549-17.548h-67.746c-9.691,0-17.548,7.856-17.548,17.548l0,0 M412.744,201.455
                                c8.038-7.454,13.068-18.105,13.068-29.933c0-22.54-18.271-40.813-40.813-40.813c-22.54,0-40.813,18.272-40.813,40.813
                                c0,11.776,4.988,22.388,12.966,29.837 M412.209,253.47v-73.222c0-15.027-12.182-27.208-27.209-27.208l0,0
                                c-15.026,0-27.208,12.182-27.208,27.208v73.222 M436.422,270.883L436.422,270.883c0-9.692-7.857-17.548-17.549-17.548h-67.746
                                c-9.691,0-17.548,7.856-17.548,17.548l0,0 M1201.538,321.185c0-27.531-22.318-49.85-49.85-49.85H110.312
                                c-27.531,0-49.85,22.318-49.85,49.85l0,0c0,27.531,22.318,49.849,49.85,49.849h1041.377
                                C1179.22,371.034,1201.538,348.716,1201.538,321.185L1201.538,321.185z M931,610L931,610c13.807,0,25-11.193,25-25V385 M881,559
                                L881,559c13.807,0,25-11.193,25-25V385 M931,610H765 M877,371.518L877,371.518c0,7.446,6.037,13.482,13.482,13.482h81.035
                                c7.445,0,13.482-6.036,13.482-13.482l0,0 M765.614,558.438c-12.233-62.549-67.339-109.747-133.468-109.748
                                c-66.613,0.001-122.041,47.892-133.73,111.122 M498.571,610.389c8.645,45.205,39.667,82.465,81.097,99.808 M681,711.652
                                c43.457-16.732,76.154-55.134,84.854-101.966 M881,559H766.107 M306,385v200c0,13.807,11.193,25,25,25l0,0 M356,385v149
                                c0,13.807,11.193,25,25,25l0,0 M331,610h167.501 M277,371.518L277,371.518c0,7.446,6.037,13.482,13.482,13.482h81.035
                                c7.445,0,13.482-6.036,13.482-13.482l0,0 M381,559h117.571 M630.334,740.333c-27.982,0-50.666,3.134-50.666,7s22.684,7,50.666,7
                                s50.666-3.134,50.666-7S658.316,740.333,630.334,740.333z M579.668,710.196v37.137 M681,711.652v35.681 M60.462,321.185H736
                                M766.76,321.185H836 M1196.854,300.068H749 M1199.978,308.762H915 M60.462,330H207 M225.163,330H306 M631,470.804
                                c-63.069,0-114.196,51.128-114.196,114.196S567.931,699.196,631,699.196c63.068,0,114.196-51.128,114.196-114.196
                                S694.068,470.804,631,470.804z M631,545.804c-21.647,0-39.196,17.549-39.196,39.196s17.549,39.196,39.196,39.196
                                s39.196-17.549,39.196-39.196S652.647,545.804,631,545.804z M631,574.159c-5.987,0-10.841,4.854-10.841,10.841
                                s4.854,10.841,10.841,10.841s10.841-4.854,10.841-10.841S636.987,574.159,631,574.159z M631,624.196v75 M631,545.804v-75
                                M641.145,622.861l19.411,72.443 M620.854,547.14l-19.411-72.444 M650.598,618.945l37.5,64.951 M611.402,551.056l-37.5-64.952
                                M658.715,612.717l53.033,53.032 M603.284,557.285l-53.033-53.033 M664.945,604.6l64.951,37.499 M597.056,565.402l-64.953-37.5
                                M668.861,595.146l72.442,19.41 M593.141,574.855l-72.446-19.411 M670.197,585.002l74.997-0.001 M591.805,585l-75.002,0.001
                                M668.861,574.856l72.441-19.411 M593.139,595.145l-72.445,19.412 M664.945,565.402l64.949-37.498 M597.055,604.598l-64.953,37.501
                                M658.716,557.284l53.031-53.03 M603.283,612.715l-53.034,53.035 M650.598,551.055l37.499-64.949 M611.4,618.943l-37.501,64.955
                                M641.144,547.139l19.411-72.441 M620.854,622.859l-19.412,72.447 M314,385v112.5 M320,385v24 M943.5,385v142.904 M933.5,385v75.769
                                "/>
                            </svg>



                            <svg xmlns="http://www.w3.org/2000/svg" class="ie ie-pm1 " id="Layer_2" enable-background="new 0 0 1258 774" viewBox="0 0 1258 874" x="0px" y="0px" width="818px" height="574px" xmlns:xml="http://www.w3.org/XML/1998/namespace" xml:space="preserve" version="1.1">
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="43.998"/>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="35.899"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="830.706" y1="430.034" x2="830.706" y2="434.849"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="830.706" y1="497.034" x2="830.706" y2="501.849"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="794.799" y1="465.942" x2="799.613" y2="465.942"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="861.799" y1="465.942" x2="866.613" y2="465.942"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="805.315" y1="491.333" x2="808.72" y2="487.929"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="852.692" y1="443.956" x2="856.097" y2="440.552"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="856.097" y1="491.333" x2="852.692" y2="487.929"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="808.72" y1="443.956" x2="805.315" y2="440.552"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="820.706" y1="509.931" x2="820.706" y2="557.183"/>
                                <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="840.706" y1="509.931" x2="840.706" y2="557.183"/>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="830.706" cy="465.933" r="6.794"/>>
                                    <line fill="none" class="thread" id="needle" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="830.706" y1="465.933" x2="841.578" y2="442.254">
                                        <animateTransform id="animateNeedle"
                                            attributeName="transform"
                                            attributeType="XML"
                                            type="rotate"
                                            from="-60 831.578 465"
                                            to="45 831.578 465"
                                            dur="5s"
                                            repeatCount="1"
                                        />
                                    </line>                      
                                <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M579.827,141.831
                                    C565.166,128.141,556,108.641,556,87c0-41.421,33.579-75,75-75c41.422,0,75,33.579,75,75c0,21.734-9.245,41.309-24.017,55.006
                                    M165.289,270.011c-13.689-14.66-33.189-23.826-54.83-23.826c-41.422,0-75,33.578-75,75s33.578,75,75,75
                                    c21.733,0,41.309-9.246,55.006-24.017 M1095.459,372.168c13.697,14.771,33.272,24.017,55.006,24.017c41.422,0,75-33.579,75-75
                                    s-33.578-75-75-75c-21.641,0-41.141,9.166-54.83,23.826 M681,237.593V103.034c0-27.614-22.386-50-50-50l0,0
                                    c-27.614,0-50,22.386-50,50v134.559 M725.496,269.593L725.496,269.593c0-17.811-14.438-32.248-32.248-32.248H568.753
                                    c-17.811,0-32.248,14.438-32.248,32.248l0,0 M906.744,201.455c8.038-7.454,13.068-18.105,13.068-29.933
                                    c0-22.54-18.271-40.813-40.813-40.813c-22.54,0-40.813,18.272-40.813,40.813c0,11.776,4.988,22.388,12.966,29.837 M906.209,253.47
                                    v-73.222c0-15.027-12.182-27.208-27.209-27.208l0,0c-15.026,0-27.208,12.182-27.208,27.208v73.222 M930.422,270.883L930.422,270.883
                                    c0-9.692-7.857-17.548-17.549-17.548h-67.746c-9.691,0-17.548,7.856-17.548,17.548l0,0 M412.744,201.455
                                    c8.038-7.454,13.068-18.105,13.068-29.933c0-22.54-18.271-40.813-40.813-40.813c-22.54,0-40.813,18.272-40.813,40.813
                                    c0,11.776,4.988,22.388,12.966,29.837 M412.209,253.47v-73.222c0-15.027-12.182-27.208-27.209-27.208l0,0
                                    c-15.026,0-27.208,12.182-27.208,27.208v73.222 M436.422,270.883L436.422,270.883c0-9.692-7.857-17.548-17.549-17.548h-67.746
                                    c-9.691,0-17.548,7.856-17.548,17.548l0,0 M1201.538,321.185c0-27.531-22.318-49.85-49.85-49.85H110.312
                                    c-27.531,0-49.85,22.318-49.85,49.85l0,0c0,27.531,22.318,49.849,49.85,49.849h1041.377
                                    C1179.22,371.034,1201.538,348.716,1201.538,321.185L1201.538,321.185z M931,610L931,610c13.807,0,25-11.193,25-25V385 M881,559
                                    L881,559c13.807,0,25-11.193,25-25V385 M931,610H765 M877,371.518L877,371.518c0,7.446,6.037,13.482,13.482,13.482h81.035
                                    c7.445,0,13.482-6.036,13.482-13.482l0,0 M765.614,558.438c-12.233-62.549-67.339-109.747-133.468-109.748
                                    c-66.613,0.001-122.041,47.892-133.73,111.122 M498.571,610.389c8.645,45.205,39.667,82.465,81.097,99.808 M681,711.652
                                    c43.457-16.732,76.154-55.134,84.854-101.966 M881,559H766.107 M306,385v200c0,13.807,11.193,25,25,25l0,0 M356,385v149
                                    c0,13.807,11.193,25,25,25l0,0 M331,610h167.501 M277,371.518L277,371.518c0,7.446,6.037,13.482,13.482,13.482h81.035
                                    c7.445,0,13.482-6.036,13.482-13.482l0,0 M381,559h117.571 M630.334,740.333c-27.982,0-50.666,3.134-50.666,7s22.684,7,50.666,7
                                    s50.666-3.134,50.666-7S658.316,740.333,630.334,740.333z M579.668,710.196v37.137 M681,711.652v35.681 M60.462,321.185H736
                                    M766.76,321.185H836 M1196.854,300.068H749 M1199.978,308.762H915 M60.462,330H207 M225.163,330H306 M631,470.804
                                    c-63.069,0-114.196,51.128-114.196,114.196S567.931,699.196,631,699.196c63.068,0,114.196-51.128,114.196-114.196
                                    S694.068,470.804,631,470.804z M631,545.804c-21.647,0-39.196,17.549-39.196,39.196s17.549,39.196,39.196,39.196
                                    s39.196-17.549,39.196-39.196S652.647,545.804,631,545.804z M631,574.159c-5.987,0-10.841,4.854-10.841,10.841
                                    s4.854,10.841,10.841,10.841s10.841-4.854,10.841-10.841S636.987,574.159,631,574.159z M631,624.196v75 M631,545.804v-75
                                    M641.145,622.861l19.411,72.443 M620.854,547.14l-19.411-72.444 M650.598,618.945l37.5,64.951 M611.402,551.056l-37.5-64.952
                                    M658.715,612.717l53.033,53.032 M603.284,557.285l-53.033-53.033 M664.945,604.6l64.951,37.499 M597.056,565.402l-64.953-37.5
                                    M668.861,595.146l72.442,19.41 M593.141,574.855l-72.446-19.411 M670.197,585.002l74.997-0.001 M591.805,585l-75.002,0.001
                                    M668.861,574.856l72.441-19.411 M593.139,595.145l-72.445,19.412 M664.945,565.402l64.949-37.498 M597.055,604.598l-64.953,37.501
                                    M658.716,557.284l53.031-53.03 M603.283,612.715l-53.034,53.035 M650.598,551.055l37.499-64.949 M611.4,618.943l-37.501,64.955
                                    M641.144,547.139l19.411-72.441 M620.854,622.859l-19.412,72.447 M314,385v112.5 M320,385v24 M943.5,385v142.904 M933.5,385v75.769
                                    "/>
                            </svg>
                            <h1 class="pm-text bs-head header-line other">SALES PIPELINE</h1>
                            <h1 class="pm-text header-line ie">SALES PIPELINE</h1>
                        </center>
                        <h1 class="text-center color-white h3" >Are you able to reach your prospects 
                        early in the sales cycle?</h1>                    
                    </div>
                    <h2></h2>
                </div>
                <!-- /.row -->
            </div>  
        </div>
        
    </section>

    <section class="cd-section ">
        <div>
            <div class="container wc-head">   
                <h1 class=" color-white h3 text-center">CHALLENGES</h1>
                    <br>
                <div class="col-md-4">
                    <p class="desc color-white ">
                    One of the challenges facing any marketing team is the support that can be extended to the sales function – the direct & indirect impact to the revenue generation for the organization. Therefore, it becomes essential to support an engine like lead management that would have the capability of working on various marketing responses & databases and substantiate the market coverage for the various sales teams.
                    </p>
                </div>            
                <div class="col-md-8">
                   
                   <center>
                <svg version="1.1" class="pm2 others"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 348.387 344.355" enable-background="new 0 0 348.387 344.355"
                        xml:space="preserve">
                    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M26.721,251.885v-120.88
                        c0-11.851,9.607-21.458,21.458-21.458h178.816 M226.995,123.853H152.25l1.863-4.141l-7.906-5.179l2.645,5.565l-3.397,3.755h-38.267
                        H62.484c-11.851,0-21.458,9.607-21.458,21.458v106.575 M237.008,98.818c0-2.765-2.241-5.007-5.007-5.007l0,0
                        c-2.765,0-5.007,2.242-5.007,5.007v33.618c0,2.765,2.242,5.007,5.007,5.007l0,0c2.766,0,5.007-2.242,5.007-5.007V98.818z
                        M17.065,252.243c-2.766,0-5.007,2.241-5.007,5.007l0,0c0,2.766,2.241,5.007,5.007,5.007h33.617c2.766,0,5.007-2.241,5.007-5.007
                        l0,0c0-2.766-2.241-5.007-5.007-5.007H17.065z M237.724,109.547h69.381 M237.724,123.853h69.381 M26.721,262.614v42.916
                        M41.026,262.614v42.916 M322.125,227.566V48.75c0-11.851-9.607-21.458-21.458-21.458h-120.88 M307.82,124.21v103.355
                        M307.82,109.547v-1.788V63.055c0-11.851-9.607-21.458-21.458-21.458H179.788 M332.854,237.58c2.766,0,5.007-2.241,5.007-5.007l0,0
                        c0-2.766-2.241-5.007-5.007-5.007h-33.617c-2.766,0-5.007,2.241-5.007,5.007l0,0c0,2.766,2.241,5.007,5.007,5.007H332.854z
                        M307.105,166.166L307.105,166.166c-2.161,0-3.912,1.751-3.912,3.912v26.263c0,2.159,1.751,3.911,3.912,3.911l0,0 M179.43,17.636
                        c0-2.765-2.242-5.007-5.007-5.007l0,0c-2.765,0-5.007,2.242-5.007,5.007v33.618c0,2.765,2.242,5.007,5.007,5.007l0,0
                        c2.765,0,5.007-2.242,5.007-5.007V17.636z M322.125,238.295v26.465 M307.82,238.295v26.465 M169.059,27.292h-42.916 M169.059,41.597
                        h-42.916 M131.865,178.75h171.328 M131.865,185.902h171.328 M146.409,27.292h-24.796c-3.951,0-7.153,3.202-7.153,7.152l0,0
                        c0,3.951,3.202,7.153,7.153,7.153h24.796 M131.89,26.694c-2.438-3.46-6.465-5.72-11.02-5.72c-7.439,0-13.471,6.031-13.471,13.47
                        c0,7.44,6.031,13.471,13.471,13.471c4.508,0,8.499-2.214,10.944-5.614 M146.885,178.75h-15.021c-1.975,0-3.576,1.601-3.576,3.576
                        l0,0c0,1.976,1.601,3.576,3.576,3.576h15.021 M138,178.361c-1.399-2.54-4.103-4.261-7.208-4.261c-4.543,0-8.226,3.683-8.226,8.226
                        s3.683,8.226,8.226,8.226c3.044,0,5.704-1.655,7.125-4.113 M26.721,294.085v19.074c0,3.95,3.203,7.152,7.153,7.152l0,0
                        c3.95,0,7.152-3.202,7.152-7.152v-19.074 M25.711,299.929c-5.499,2.926-9.243,8.713-9.243,15.376
                        c0,9.612,7.792,17.405,17.405,17.405c9.612,0,17.404-7.793,17.404-17.405c0-7.063-4.207-13.142-10.251-15.87 M307.82,258.671v19.073
                        c0,3.95,3.202,7.153,7.152,7.153l0,0c3.951,0,7.153-3.203,7.153-7.153v-19.073 M306.811,264.515
                        c-5.5,2.925-9.244,8.713-9.244,15.376c0,9.611,7.793,17.404,17.405,17.404s17.405-7.793,17.405-17.404
                        c0-7.063-4.207-13.143-10.252-15.871"/>
                </svg>

                <svg version="1.1" class="edge-ie ie-pm2"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="818px" height="574px" x="0px" y="0px"
                    viewBox="0 0 348.387 344.355" enable-background="new 0 0 348.387 344.355" xml:space="preserve">
                    <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M26.721,251.885v-120.88
                        c0-11.851,9.607-21.458,21.458-21.458h178.816 M226.995,123.853H152.25l1.863-4.141l-7.906-5.179l2.645,5.565l-3.397,3.755h-38.267
                        H62.484c-11.851,0-21.458,9.607-21.458,21.458v106.575 M237.008,98.818c0-2.765-2.241-5.007-5.007-5.007l0,0
                        c-2.765,0-5.007,2.242-5.007,5.007v33.618c0,2.765,2.242,5.007,5.007,5.007l0,0c2.766,0,5.007-2.242,5.007-5.007V98.818z
                        M17.065,252.243c-2.766,0-5.007,2.241-5.007,5.007l0,0c0,2.766,2.241,5.007,5.007,5.007h33.617c2.766,0,5.007-2.241,5.007-5.007
                        l0,0c0-2.766-2.241-5.007-5.007-5.007H17.065z M237.724,109.547h69.381 M237.724,123.853h69.381 M26.721,262.614v42.916
                        M41.026,262.614v42.916 M322.125,227.566V48.75c0-11.851-9.607-21.458-21.458-21.458h-120.88 M307.82,124.21v103.355
                        M307.82,109.547v-1.788V63.055c0-11.851-9.607-21.458-21.458-21.458H179.788 M332.854,237.58c2.766,0,5.007-2.241,5.007-5.007l0,0
                        c0-2.766-2.241-5.007-5.007-5.007h-33.617c-2.766,0-5.007,2.241-5.007,5.007l0,0c0,2.766,2.241,5.007,5.007,5.007H332.854z
                        M307.105,166.166L307.105,166.166c-2.161,0-3.912,1.751-3.912,3.912v26.263c0,2.159,1.751,3.911,3.912,3.911l0,0 M179.43,17.636
                        c0-2.765-2.242-5.007-5.007-5.007l0,0c-2.765,0-5.007,2.242-5.007,5.007v33.618c0,2.765,2.242,5.007,5.007,5.007l0,0
                        c2.765,0,5.007-2.242,5.007-5.007V17.636z M322.125,238.295v26.465 M307.82,238.295v26.465 M169.059,27.292h-42.916 M169.059,41.597
                        h-42.916 M131.865,178.75h171.328 M131.865,185.902h171.328 M146.409,27.292h-24.796c-3.951,0-7.153,3.202-7.153,7.152l0,0
                        c0,3.951,3.202,7.153,7.153,7.153h24.796 M131.89,26.694c-2.438-3.46-6.465-5.72-11.02-5.72c-7.439,0-13.471,6.031-13.471,13.47
                        c0,7.44,6.031,13.471,13.471,13.471c4.508,0,8.499-2.214,10.944-5.614 M146.885,178.75h-15.021c-1.975,0-3.576,1.601-3.576,3.576
                        l0,0c0,1.976,1.601,3.576,3.576,3.576h15.021 M138,178.361c-1.399-2.54-4.103-4.261-7.208-4.261c-4.543,0-8.226,3.683-8.226,8.226
                        s3.683,8.226,8.226,8.226c3.044,0,5.704-1.655,7.125-4.113 M26.721,294.085v19.074c0,3.95,3.203,7.152,7.153,7.152l0,0
                        c3.95,0,7.152-3.202,7.152-7.152v-19.074 M25.711,299.929c-5.499,2.926-9.243,8.713-9.243,15.376
                        c0,9.612,7.792,17.405,17.405,17.405c9.612,0,17.404-7.793,17.404-17.405c0-7.063-4.207-13.142-10.251-15.87 M307.82,258.671v19.073
                        c0,3.95,3.202,7.153,7.152,7.153l0,0c3.951,0,7.153-3.203,7.153-7.153v-19.073 M306.811,264.515
                        c-5.5,2.925-9.244,8.713-9.244,15.376c0,9.611,7.793,17.404,17.405,17.404s17.405-7.793,17.405-17.404
                        c0-7.063-4.207-13.143-10.252-15.871"/>
                </svg>
                </center>  
                </div>
              
                <div class="col-md-12">
                    <br>             
                    <p class="desc color-white ">
                    <i>Erfolg</i> has developed and successfully deployed a very effective methodology via tele-prospecting for qualifying marketing leads from the expansive target audience. Our teams with well-equipped skill-sets and training are not only able to understand the needs of the prospects but are also able to have discussions around the challenges driving the need along with the fitment of the pitched products / services to the prospects' organizational set-ups.
                    </p>
                </div>     
                <h2></h2>               
            </div>
        </div>
    </section>

    <section class="cd-section roi-heigt">
        <div>
            <div class="container wc-head ">
            <h1 class="text-center  color-white h3 ">ROI</h1>
                <div class="col-md-12 col-sm-12  pm-roi-3 text-center pm-roi-svg">
                    
                    <svg version="1.1" class="pm-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="474.193px" height="407.258px" viewBox="0 0 474.193 407.258" enable-background="new 0 0 474.193 407.258" xml:space="preserve">
                        <g id="boxs">
                            <rect x="36.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="86.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="136.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="186.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="236.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="286.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="336.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="83.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="108.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="133.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="158.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="183.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="208.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="233.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="386.474" y="258.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="50" height="25"/>
                            <rect x="36.474" y="32.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="400" height="51"/>
                            <rect x="21.143" y="19.678" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="432.666" height="278.667"/>
                        </g>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M464.392,304.011
                            c0,2.762-2.238,5-5,5h-444c-2.762,0-5-2.238-5-5V16.678c0-2.761,2.238-5,5-5h444c2.762,0,5,2.239,5,5V304.011z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M332.558,378.677
                            c0,10.493-8.507,19-19,19H161.225c-10.493,0-19-8.507-19-19l0,0c0-10.493,8.507-19,19-19h152.333
                            C324.051,359.677,332.558,368.184,332.558,378.677L332.558,378.677z"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="217.476" y1="359.677" x2="217.476" y2="309.011"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="257.476" y1="359.677" x2="257.476" y2="309.011"/>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="273.474" cy="378.677" r="8.333"/>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="303.474" cy="378.677" r="8.333"/>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="243.474" cy="378.677" r="8.333"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M214.476,385.01
                            c0,1.104-0.896,2-2,2h-47.669c-1.104,0-2-0.896-2-2v-12.666c0-1.104,0.896-2,2-2h47.669c1.104,0,2,0.896,2,2V385.01z"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="170.807" y1="378.677" x2="206.807" y2="378.677"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M87.611,71.866
                            c0,1.049-0.852,1.901-1.902,1.901H53.707c-1.049,0-1.9-0.852-1.9-1.901V44.3c0-1.049,0.852-1.901,1.9-1.901h32.002
                            c1.051,0,1.902,0.852,1.902,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M135.137,71.866
                            c0,1.049-0.852,1.901-1.9,1.901h-32.001c-1.051,0-1.901-0.852-1.901-1.901V44.3c0-1.049,0.851-1.901,1.901-1.901h32.001
                            c1.049,0,1.9,0.852,1.9,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M182.664,71.866
                            c0,1.049-0.851,1.901-1.901,1.901h-32.002c-1.05,0-1.9-0.852-1.9-1.901V44.3c0-1.049,0.851-1.901,1.9-1.901h32.002
                            c1.051,0,1.901,0.852,1.901,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M230.191,71.866
                            c0,1.049-0.851,1.901-1.902,1.901h-32.001c-1.05,0-1.9-0.852-1.9-1.901V44.3c0-1.049,0.851-1.901,1.9-1.901h32.001
                            c1.052,0,1.902,0.852,1.902,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M277.718,71.866
                            c0,1.049-0.852,1.901-1.9,1.901h-32.002c-1.051,0-1.902-0.852-1.902-1.901V44.3c0-1.049,0.852-1.901,1.902-1.901h32.002
                            c1.049,0,1.9,0.852,1.9,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M325.245,71.866
                            c0,1.049-0.851,1.901-1.902,1.901h-32.001c-1.05,0-1.9-0.852-1.9-1.901V44.3c0-1.049,0.851-1.901,1.9-1.901h32.001
                            c1.052,0,1.902,0.852,1.902,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M372.771,71.866
                            c0,1.049-0.852,1.901-1.901,1.901h-32.002c-1.049,0-1.9-0.852-1.9-1.901V44.3c0-1.049,0.852-1.901,1.9-1.901h32.002
                            c1.05,0,1.901,0.852,1.901,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M420.299,71.866
                            c0,1.049-0.852,1.901-1.9,1.901h-32.002c-1.051,0-1.902-0.852-1.902-1.901V44.3c0-1.049,0.852-1.901,1.902-1.901h32.002
                            c1.049,0,1.9,0.852,1.9,1.901V71.866z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M240.913,348.677
                            c0,1.104-0.896,2-2,2h-2.772c-1.104,0-2-0.896-2-2v-28c0-1.104,0.896-2,2-2h2.772c1.104,0,2,0.896,2,2V348.677z"/>
                    </svg>
                </div>
                <div class="col-md-12 col-sm-12 audi-exp_sm pm-exp_sm ">                    
                    <br>
                    <p class="desc color-white  text-center" >
                        Any campaign generates immediate as well as future returns and effectiveness of any lead management team is defined on the potential to define the time frame of the requirements accurately. Along with aiding the sales team to extend the market coverage, the pipeline management team has to be able to ascertain that the qualified marketing leads are added to the funnel of the sales teams only at the appropriate time – the key task is to enhance the funnel & not clutter the same with leads with requirements at a later date.</p>
                        <p class="desc color-white  text-center" > The team at Erfolg is trained on techniques in lead nurturing with extended time frame so as to keep the continuity of discussion alive with the prospects with multi-touch marketing aids like product guides, whitepapers and other direct marketing techniques by implementing CRM solutions. The lead nurturing mechanism helps reduce unwanted connects with the prospects for confirmation of the same requirement multiple times &also, ensures that the opportunities are not lost in transition from the opportunity discovery to the sales.                       
                    </p>                 
                </div>
                <h2></h2>
            </div>
        </div>
    </section>

    <section class="cd-section potrait-section">
        <div>
            <div class="container wc-head ">                
                <div class="col-md-12">   
                    <center>               
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" class="pm-4 pm-4_head others" x="0px" y="0px"  viewBox="0 0 1200 416.936" enable-background="new 0 0 1200 416.936" width="1200px" height="416px" xml:space="preserve">
                           
                            <rect x="383.336" y="25.323" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="432.666" height="278.667"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M826.585,309.657  c0,2.762-2.238,5-5,5h-444c-2.762,0-5-2.238-5-5V22.323c0-2.761,2.238-5,5-5h444c2.762,0,5,2.239,5,5V309.657z"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M694.751,384.323  c0,10.493-8.507,19-19,19H523.418c-10.493,0-19-8.507-19-19l0,0c0-10.493,8.507-19,19-19h152.333  C686.244,365.323,694.751,373.83,694.751,384.323L694.751,384.323z"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="579.669" y1="365.323" x2="579.669" y2="314.657"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="619.669" y1="365.323" x2="619.669" y2="314.657"/>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="635.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.2"
                                /> 
                            </circle>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="665.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.3"
                                /> 
                            </circle>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="605.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.1"
                                /> 
                            </circle>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M576.669,390.656  c0,1.104-0.896,2-2,2H527c-1.104,0-2-0.896-2-2V377.99c0-1.104,0.896-2,2-2h47.669c1.104,0,2,0.896,2,2V390.656z"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="533" y1="384.323" x2="569" y2="384.323"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M603.106,354.323  c0,1.104-0.896,2-2,2h-2.772c-1.104,0-2-0.896-2-2v-28c0-1.104,0.896-2,2-2h2.772c1.104,0,2,0.896,2,2V354.323z"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M135.289,97.334  C121.6,82.674,102.1,73.508,80.459,73.508c-41.422,0-75,33.578-75,75c0,41.422,33.578,75,75,75c21.733,0,41.309-9.246,55.006-24.018  "/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1065.459,199.491  c13.697,14.771,33.272,24.018,55.006,24.018c41.422,0,75-33.578,75-75c0-41.422-33.578-75-75-75  c-21.641,0-41.141,9.166-54.83,23.826"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M826,198.357h295.688  c27.531,0,49.85-22.318,49.85-49.849l0,0c0-27.531-22.318-49.85-49.85-49.85H828.333"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M371.667,98.658H80.312  c-27.531,0-49.85,22.318-49.85,49.85l0,0c0,27.531,22.318,49.849,49.85,49.849h291.355"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="30.462" y1="148.508" x2="371" y2="148.508"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="826.76" y1="148.508" x2="896" y2="148.508"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1166.854" y1="127.391" x2="959" y2="127.391"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1169.978" y1="136.084" x2="885" y2="136.084"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="30.462" y1="157.323" x2="177" y2="157.323"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="195.163" y1="157.323" x2="276" y2="157.323"/>
                            <g >
                                <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M605.334,150.99  c0,6.779-37.9,5.965-40.345,11.861c-2.534,6.111,24.74,32.325,20.134,36.93c-4.605,4.605-30.817-22.67-36.929-20.136  c-5.895,2.445-5.081,40.345-11.86,40.345s-5.965-37.899-11.86-40.345c-6.111-2.534-32.325,24.74-36.93,20.135  s22.669-30.818,20.135-36.93c-2.445-5.895-40.345-5.081-40.345-11.86s37.9-5.965,40.345-11.861  c2.534-6.111-24.741-32.324-20.135-36.93s30.819,22.669,36.93,20.135c5.895-2.445,5.081-40.345,11.86-40.345  s5.966,37.9,11.861,40.345c6.111,2.534,32.324-24.74,36.93-20.134c4.605,4.605-22.67,30.818-20.136,36.929  C567.434,145.024,605.334,144.21,605.334,150.99z">
                                    <animateTransform
                                        attributeName="transform"
                                        begin="0s"
                                        dur="8s"
                                        type="rotate"
                                        from="0 536.334 150.99"
                                        to="360 536.334 150.99"
                                        repeatCount="indefinite"
                                    />
                                </path>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="536.334" cy="150.99" r="20.068"/>
                            </g>
                            <g >
                                <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M725.334,180.99  c0,6.779-37.9,5.966-40.345,11.86c-2.534,6.111,24.74,32.325,20.134,36.931c-4.605,4.605-30.817-22.67-36.929-20.136  c-5.896,2.444-5.081,40.345-11.86,40.345s-5.965-37.9-11.86-40.345c-6.111-2.534-32.325,24.741-36.931,20.136  s22.67-30.819,20.136-36.931c-2.444-5.895-40.345-5.081-40.345-11.86s37.9-5.966,40.345-11.861  c2.534-6.111-24.741-32.324-20.136-36.93s30.819,22.669,36.931,20.135c5.896-2.445,5.081-40.345,11.86-40.345  s5.966,37.9,11.861,40.345c6.111,2.534,32.324-24.74,36.93-20.134c4.605,4.605-22.67,30.818-20.136,36.929  C687.434,175.024,725.334,174.21,725.334,180.99z">
                                    <animateTransform
                                        attributeName="transform"
                                        begin="0s"
                                        dur="8s"
                                        type="rotate"
                                        from="360 656.334 180.99"
                                        to="0 656.334 180.99"
                                        repeatCount="indefinite"
                                    />
                                </path>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="656.334" cy="180.99" r="20.068"/>	
                            </g>
                        </svg>


                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  version="1.1" class="edge-ie pm-4_head " x="0px" y="0px"  viewBox="0 0 1200 416.936" enable-background="new 0 0 1200 416.936" width="1200px" height="416px" xml:space="preserve">
                           
                            <rect x="383.336" y="25.323" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="432.666" height="278.667"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M826.585,309.657  c0,2.762-2.238,5-5,5h-444c-2.762,0-5-2.238-5-5V22.323c0-2.761,2.238-5,5-5h444c2.762,0,5,2.239,5,5V309.657z"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M694.751,384.323  c0,10.493-8.507,19-19,19H523.418c-10.493,0-19-8.507-19-19l0,0c0-10.493,8.507-19,19-19h152.333  C686.244,365.323,694.751,373.83,694.751,384.323L694.751,384.323z"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="579.669" y1="365.323" x2="579.669" y2="314.657"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="619.669" y1="365.323" x2="619.669" y2="314.657"/>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="635.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.2"
                                /> 
                            </circle>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="665.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.3"
                                /> 
                            </circle>
                            <circle fill="#fff" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="605.667" cy="384.323" r="8.333">
                                <animate
                                    attributeName="opacity"
                                    dur="1s"
                                    values="0;1;0"
                                    repeatCount="indefinite"
                                    begin="0.1"
                                /> 
                            </circle>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M576.669,390.656  c0,1.104-0.896,2-2,2H527c-1.104,0-2-0.896-2-2V377.99c0-1.104,0.896-2,2-2h47.669c1.104,0,2,0.896,2,2V390.656z"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="533" y1="384.323" x2="569" y2="384.323"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M603.106,354.323  c0,1.104-0.896,2-2,2h-2.772c-1.104,0-2-0.896-2-2v-28c0-1.104,0.896-2,2-2h2.772c1.104,0,2,0.896,2,2V354.323z"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M135.289,97.334  C121.6,82.674,102.1,73.508,80.459,73.508c-41.422,0-75,33.578-75,75c0,41.422,33.578,75,75,75c21.733,0,41.309-9.246,55.006-24.018  "/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1065.459,199.491  c13.697,14.771,33.272,24.018,55.006,24.018c41.422,0,75-33.578,75-75c0-41.422-33.578-75-75-75  c-21.641,0-41.141,9.166-54.83,23.826"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M826,198.357h295.688  c27.531,0,49.85-22.318,49.85-49.849l0,0c0-27.531-22.318-49.85-49.85-49.85H828.333"/>
                            <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M371.667,98.658H80.312  c-27.531,0-49.85,22.318-49.85,49.85l0,0c0,27.531,22.318,49.849,49.85,49.849h291.355"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="30.462" y1="148.508" x2="371" y2="148.508"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="826.76" y1="148.508" x2="896" y2="148.508"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1166.854" y1="127.391" x2="959" y2="127.391"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1169.978" y1="136.084" x2="885" y2="136.084"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="30.462" y1="157.323" x2="177" y2="157.323"/>
                            <line fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="195.163" y1="157.323" x2="276" y2="157.323"/>
                            <g >
                                <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M605.334,150.99  c0,6.779-37.9,5.965-40.345,11.861c-2.534,6.111,24.74,32.325,20.134,36.93c-4.605,4.605-30.817-22.67-36.929-20.136  c-5.895,2.445-5.081,40.345-11.86,40.345s-5.965-37.899-11.86-40.345c-6.111-2.534-32.325,24.74-36.93,20.135  s22.669-30.818,20.135-36.93c-2.445-5.895-40.345-5.081-40.345-11.86s37.9-5.965,40.345-11.861  c2.534-6.111-24.741-32.324-20.135-36.93s30.819,22.669,36.93,20.135c5.895-2.445,5.081-40.345,11.86-40.345  s5.966,37.9,11.861,40.345c6.111,2.534,32.324-24.74,36.93-20.134c4.605,4.605-22.67,30.818-20.136,36.929  C567.434,145.024,605.334,144.21,605.334,150.99z">
                                    <animateTransform
                                        attributeName="transform"
                                        begin="0s"
                                        dur="8s"
                                        type="rotate"
                                        from="0 536.334 150.99"
                                        to="360 536.334 150.99"
                                        repeatCount="indefinite"
                                    />
                                </path>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="536.334" cy="150.99" r="20.068"/>
                            </g>
                            <g >
                                <path fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M725.334,180.99  c0,6.779-37.9,5.966-40.345,11.86c-2.534,6.111,24.74,32.325,20.134,36.931c-4.605,4.605-30.817-22.67-36.929-20.136  c-5.896,2.444-5.081,40.345-11.86,40.345s-5.965-37.9-11.86-40.345c-6.111-2.534-32.325,24.741-36.931,20.136  s22.67-30.819,20.136-36.931c-2.444-5.895-40.345-5.081-40.345-11.86s37.9-5.966,40.345-11.861  c2.534-6.111-24.741-32.324-20.136-36.93s30.819,22.669,36.931,20.135c5.896-2.445,5.081-40.345,11.86-40.345  s5.966,37.9,11.861,40.345c6.111,2.534,32.324-24.74,36.93-20.134c4.605,4.605-22.67,30.818-20.136,36.929  C687.434,175.024,725.334,174.21,725.334,180.99z">
                                    <animateTransform
                                        attributeName="transform"
                                        begin="0s"
                                        dur="8s"
                                        type="rotate"
                                        from="360 656.334 180.99"
                                        to="0 656.334 180.99"
                                        repeatCount="indefinite"
                                    />
                                </path>
                                <circle fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="656.334" cy="180.99" r="20.068"/>	
                            </g>
                        </svg>
                    </center>           
                </div> 
                <div class="col-md-12 pm-4-texthead">                    
                    <br>
                    <h1 class=" color-white text-center h3">The lead generation team at Erfolg is not only restricted to just follow-up on the marketing responses & databases but also have access to the in-house database repository.</h1>                  
                </div>
                <h2 class=""></h2>
            </div>
        </div>
    </section>

    <section class="cd-section pm-5_height">
        <div>
            <div class=" pm-roi ">               
                <div class="col-md-12 col-sm-4 ">
                    <div class="container pm-container">
                        <h1 class="h3 text-center text-pm-768">The following process is what we follow for most of our lead generation campaigns to ensure the prospect identification is correct and has a higher conversion ratio:</h1>
                        <br><br><br><br>
                    </div>                

                    
                <div class="container pm-container text-center">

                   <svg version="1.1" class="edge-ie ie-svg"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1426.429px" height="630px" viewBox="0 0 1426.429 630" enable-background="new 0 0 1426.429 630" xml:space="preserve">
                                
                        <!-- lines Inside square -->
                        <!-- 
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="43.994" y1="50.333" x2="117.994" y2="50.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="43.994" y1="60.333" x2="117.994" y2="60.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="80.333" x2="165.161" y2="80.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="90.333" x2="165.161" y2="90.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="100.333" x2="165.161" y2="100.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="110.333" x2="165.161" y2="110.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="120.333" x2="165.161" y2="120.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="130.333" x2="165.161" y2="130.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="140.333" x2="165.161" y2="140.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="150.333" x2="165.161" y2="150.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="160.333" x2="165.161" y2="160.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="49.161" y1="180.333" x2="112.827" y2="180.333"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="49.161" y1="190.333" x2="112.827" y2="190.333"/>
                        -->
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 117.99,50.33C 117.99,50.33 43.99,50.33 43.99,50.33"  />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 117.99,60.33 C 117.99,60.33 43.99,60.33 43.99,60.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 117.99,50.33 C 117.99,50.33 43.99,50.33 43.99,50.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,90.33 C 165.16,90.33 44.83,90.33 44.83,90.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,100.33 C 165.16,100.33 44.83,100.33 44.83,100.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,110.33 C 165.16,110.33 44.83,110.33 44.83,110.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,120.33 C 165.16,120.33 44.83,120.33 44.83,120.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,130.33 C 165.16,130.33 44.83,130.33 44.83,130.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,140.33 C 165.16,140.33 44.83,140.33 44.83,140.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,150.33 C 165.16,150.33 44.83,150.33 44.83,150.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 165.16,160.33 C 165.16,160.33 44.83,160.33 44.83,160.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 112.83,180.33 C 112.83,180.33 49.16,180.33 49.16,180.33" />
                        <path fill="none" stroke="#fff" stroke-width="1" d="M 112.83,190.33 C 112.83,190.33 49.16,190.33 49.16,190.33" />
                        
                        <!-- Inside circles -->
                        <g>
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="4.0655,8.131" cx="357.707" cy="75.167" r="38.833"/>
                                <animatetransform 
                                    attributename="transform" 
                                    attributetype="XML" 
                                    type="rotate"
                                    dur="5s" 
                                    from="0 357.707 75.167"
                                    to="360 357.707 75.167" 
                                    repeatcount="indefinite" 
                                />
                        </g>
                        <g>
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="4,8" cx="357.707" cy="75.167" r="24.5"/>
                                <animatetransform 
                                    attributename="transform" 
                                    attributetype="XML" 
                                    type="rotate"
                                    dur="5s" 
                                    from="360 357.707 75.167"
                                    to="0 357.707 75.167" 
                                    repeatcount="indefinite" 
                                />
                        </g>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="357.707" cy="75.167" r="12.5"/>

                        <!-- first frame -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M343.45,280
                            c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.667c0-2.761,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V280z"/>

                        <!-- connectors for frames -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M308.117,360.834h-26
                            c-2.761,0-5-2.239-5-5v-70"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M411.117,360.834h26
                            c2.761,0,5-2.239,5-5v-70"/>


                        <!-- outer frame -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M517.117,106.833
                            c-2.761,0-5,2.239-5,5v16v8v170c0,2.761-2.239,5-5,5h-6l-10.333-0.5v-151c0-2.761-2.239-5-5-5H370.206v-6v-14.75l0.249-8.427
                            c21.955-6.025,39.085-26.124,39.085-49.99c0-28.626-23.207-51.833-51.833-51.833c-23.471,0-43.299,15.601-49.679,36.999
                            l-8.154,0.001H188.207l-8.213-0.834V28.333c0-2.761-2.238-5-5-5h-140c-2.761,0-5,2.239-5,5v190c0,2.761,2.239,5,5,5h140
                            c2.762,0,5-2.239,5-5v-128l8.213,0h113.91l6.01,0c5.147,16.847,18.647,30.05,35.673,34.78l0.406,8.229v14.991v6H231.784
                            c-2.761,0-5,2.239-5,5V433c0,2.762,2.239,5,5,5h254c2.761,0,5-2.238,5-5V329.5l10.333,0.334h26c2.761,0,5-2.239,5-5v-140v-17v-36
                            c0-2.761,2.239-5,5-5"/>



                        <!-- Rejected conveyor belt -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="8,8" d="
                            M824.117,240.833h-175c-2.761,0-5-2.239-5-5v-58"/>

                        <!-- Rejected path -->
                        <path class="rcb1" fill="none" display="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M-34.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"/>
                        <path class="rcb2" fill="none" display="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M-104.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"/>



                        <!-- Rejected Lead1 -->
                        <g class="rl1">
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="677.874" cy="286.065" r="8.01"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M697.052,313.4
                                c0-10.592-8.586-19.178-19.178-19.178s-19.178,8.586-19.178,19.178H697.052z"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M705.607,271.208 c0-0.711-0.577-1.288-1.289-1.288h-52.891c-0.712,0-1.289,0.577-1.289,1.288v47.345c0,0.712,0.577,1.289,1.289,1.289h52.891 c0.711,0,1.289-0.577,1.289-1.289V271.208z"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="677.874" y1="264.333" x2="677.874" y2="251.5"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M660.872,241.583
                                L660.872,241.583c0,4.695,3.806,8.501,8.5,8.501h17.002c4.694,0,8.5-3.806,8.5-8.501l0,0"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M688.61,269.702
                                L688.61,269.702c0-2.965-2.403-5.368-5.368-5.368h-10.736c-2.965,0-5.368,2.403-5.368,5.368l0,0"/>
                            <animatemotion
                                path="M-34.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"
                                begin="0s" dur="7s" repeatcount="indefinite"
                            />
                        </g>

                        <!-- Rejected Lead2 -->
                        <g class="rl2">
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="751.874" cy="286.065" r="8.01"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M771.051,313.4
                                c0-10.592-8.586-19.178-19.178-19.178s-19.178,8.586-19.178,19.178H771.051z"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M779.608,271.208
                                c0-0.711-0.578-1.288-1.289-1.288h-52.891c-0.712,0-1.289,0.577-1.289,1.288v47.345c0,0.712,0.577,1.289,1.289,1.289h52.891
                                c0.711,0,1.289-0.577,1.289-1.289V271.208z"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="751.874" y1="264.333" x2="751.874" y2="251.5"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M734.872,241.583
                                L734.872,241.583c0,4.695,3.807,8.501,8.501,8.501h17.002c4.694,0,8.501-3.806,8.501-8.501l0,0"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M762.61,269.702
                                L762.61,269.702c0-2.965-2.403-5.368-5.368-5.368h-10.736c-2.965,0-5.368,2.403-5.368,5.368l0,0"/>
                            <animatemotion
                                path="M-104.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"
                                begin="2s" dur="8s" repeatcount="indefinite"
                            />
                        </g>



                        <!-- lead path -->
                        <path display="none" class="lp" fill="none" stroke="#fff" stroke-width="1" d="M -119.98,-0.3 C -119.98,-0.3 514.69,-0.3 514.69,-0.3" />

                        <path display="none" class="lp2" fill="none" stroke="#fff" stroke-width="1" d="M -240.98,-0.3 C -240.98,-0.3 414.69,-0.3 414.69,-0.3" />

                        <path display="none" class="lp3" fill="none" stroke="#fff" stroke-width="1" d="M -360.98,-0.3 C -360.98,-0.3 274.69,-0.3 274.69,-0.3" />

                        <path display="none" class="lp4" fill="none" stroke="#fff" stroke-width="1" d="M -480.98,-0.3 C -480.98,-0.3 175.69,-0.3 174.69,-0.3" />


                        <!-- Lead1 -->
                        <g class="lead1">
                            <path fill="#FFFFFF" d="M790.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S790.309,114.536,790.309,121.404z M808.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S747.1,146.871,747.1,163.84v1h61.547V163.84z M777.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C749.647,147.436,762.343,135.066,777.874,135.066z M821.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C820.583,174.84,821.929,173.494,821.929,171.84z M818.929,97.338c0.552,0,1,0.449,1,1v73.502
                                c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H818.929z M778.874,87.493V73.5c0-0.552-0.447-1-1-1
                                s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S778.874,88.045,778.874,87.493z M798.874,62.833c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,6.065,4.935,11,11,11h20
                                C793.939,73.833,798.874,68.898,798.874,62.833z M795.542,96c0-5.147-4.188-9.334-9.334-9.334H769.54
                                c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S795.542,96.552,795.542,96z"/>
                            <animatemotion
                                path="M -119.98,-0.3 C -119.98,-0.3 514.69,-0.3 514.69,-0.3"
                                begin="0s" dur="5.9s" repeatcount="indefinite"
                            />
                        </g>
                        <!-- Lead2 -->
                        <g class="lead2">
                            <path fill="#FFFFFF" d="M910.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S910.309,114.536,910.309,121.404z M928.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S867.1,146.871,867.1,163.84v1h61.547V163.84z M897.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C869.647,147.436,882.343,135.066,897.874,135.066z M941.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C940.583,174.84,941.929,173.494,941.929,171.84z M938.929,97.338c0.552,0,1,0.449,1,1v73.502
                                c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H938.929z M898.874,87.493V73.5c0-0.552-0.447-1-1-1
                                s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S898.874,88.045,898.874,87.493z M918.874,62.833c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,6.065,4.935,11,11,11h20
                                C913.939,73.833,918.874,68.898,918.874,62.833z M915.542,96c0-5.147-4.188-9.334-9.334-9.334H889.54
                                c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S915.542,96.552,915.542,96z"/>
                                
                            <animatemotion
                                path="M -240.98,-0.3 C -240.98,-0.3 414.69,-0.3 414.69,-0.3"
                                begin="1s" dur="6.9s" repeatcount="indefinite"
                            />
                        </g>
                        <!-- Lead3 -->
                        <g class="lead3">
                            <path fill="#FFFFFF" d="M1030.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S1030.309,114.536,1030.309,121.404z M1048.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S987.1,146.871,987.1,163.84v1h61.547V163.84z M1017.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C989.647,147.436,1002.343,135.066,1017.874,135.066z M1061.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C1060.583,174.84,1061.929,173.494,1061.929,171.84z M1058.929,97.338c0.552,0,1,0.449,1,1
                                v73.502c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H1058.929z M1018.874,87.493V73.5
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S1018.874,88.045,1018.874,87.493z M1038.874,62.833
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,6.065,4.935,11,11,11h20C1033.939,73.833,1038.874,68.898,1038.874,62.833z M1035.542,96c0-5.147-4.188-9.334-9.334-9.334
                                h-16.668c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S1035.542,96.552,1035.542,96z"/>
                            <animatemotion
                                path="M -360.98,-0.3 C -360.98,-0.3 274.69,-0.3 274.69,-0.3"
                                begin="2s" dur="7.9s" repeatcount="indefinite"
                            />
                        </g>
                        <!-- Lead4-->
                        <g class="lead4">
                            <path fill="#FFFFFF" d="M1150.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S1150.309,114.536,1150.309,121.404z M1168.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                s-30.773,13.805-30.773,30.773v1h61.547V163.84z M1137.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C1109.647,147.436,1122.343,135.066,1137.874,135.066z M1181.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C1180.583,174.84,1181.929,173.494,1181.929,171.84z M1178.929,97.338c0.552,0,1,0.449,1,1
                                v73.502c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H1178.929z M1138.874,87.493V73.5
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S1138.874,88.045,1138.874,87.493z M1158.874,62.833
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,6.065,4.935,11,11,11h20C1153.939,73.833,1158.874,68.898,1158.874,62.833z M1155.542,96c0-5.147-4.188-9.334-9.334-9.334
                                h-16.668c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S1155.542,96.552,1155.542,96z"/>
                            <animatemotion
                                path="M -480.98,-0.3 C -480.98,-0.3 175.69,-0.3 174.69,-0.3"
                                begin="3s" dur="8.9s" repeatcount="indefinite"
                            />
                        </g>




                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M871.874,421.333
                            c0-3.69-36.936-6.683-82.5-6.683s-82.5,2.992-82.5,6.683"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="8,8" x1="704.582" y1="62.667" x2="1342.874" y2="62.667"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="824.117" y1="234.833" x2="824.117" y2="247.334"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1223.542,83.987
                            c-3.416,0-6.187,22.431-6.187,50.102s2.771,50.102,6.187,50.102"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1342.874" y1="62.667" x2="1342.874" y2="81.667"/>
                        <g>
                            <path fill="#FFFFFF" d="M1380.5,83.987c5.522,0,10,4.477,10,10v246.134v4.219v5.16c0,27.338-22.162,49.5-49.5,49.5
                                s-49.5-22.162-49.5-49.5v-5.16v-4.219V193.987c0-5.523-4.478-10-10-10h-47.334l-9.78,0.203c3.401-0.139,6.154-22.517,6.154-50.101
                                c0-27.67-2.771-50.102-6.187-50.102h8.813H1380.5 M1224.386,184.19c-0.011,0-0.021,0-0.032,0L1224.386,184.19 M1380.5,81.987
                                h-147.334h-8.813c-1.104,0-2,0.896-2,2c0,0.916,0.615,1.688,1.455,1.925c0.406,0.585,1.891,3.434,3.17,15.009
                                c1.007,9.119,1.562,20.898,1.562,33.167s-0.555,24.048-1.562,33.167c-1.278,11.575-2.763,14.424-3.169,15.009
                                c-0.849,0.239-1.466,1.023-1.456,1.946c0.012,1.097,0.903,1.979,2,1.979c0.016,0,0.042,0,0.066-0.001c0.002,0,0.005,0,0.007,0
                                l9.78-0.203l47.293,0c4.411,0,8,3.589,8,8v146.134v4.219v5.16c0,28.397,23.103,51.5,51.5,51.5s51.5-23.103,51.5-51.5v-5.16v-4.219
                                V93.987C1392.5,87.371,1387.118,81.987,1380.5,81.987L1380.5,81.987z"/>
                        </g>

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1392.057,313.364
                            c7.716,10.493,12.273,23.452,12.273,37.476c0,34.977-28.354,63.33-63.33,63.33s-63.33-28.354-63.33-63.33
                            c0-14.941,5.174-28.674,13.828-39.504"/>
                        <g id="boxie">
                            <rect x="302.117" y="193.333" fill="#fff" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="193.333" fill="#fff" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                        </g>
                        <g id="box1ie">
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M409.45,415
                                c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.666c0-2.762,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V415z"/>
                            <rect x="368.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                        </g>
                        <g id="box2ie">
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M473.45,280
                                c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.667c0-2.761,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V280z"/>
                            <rect x="432.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>

                        </g>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1247.443,485.567
                            c0,2.904-2.355,5.26-5.26,5.26H908.569c-2.905,0-5.26-2.355-5.26-5.26V242.3c0-2.905,2.354-5.26,5.26-5.26h333.614
                            c2.904,0,5.26,2.354,5.26,5.26V485.567z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1235.52,475.242
                            c0,2.646-2.192,4.792-4.896,4.792H920.127c-2.704,0-4.896-2.146-4.896-4.792V253.625c0-2.647,2.191-4.792,4.896-4.792h310.497
                            c2.703,0,4.896,2.145,4.896,4.792V475.242z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M630.324,560.516H118.552
                            c-2.761,0-5-2.238-5-5V400.334v-20.096v-43.811c0-11.045-8.954-20-20-20l0,0c-11.046,0-20,8.955-20,20v43.811v19.096v196.182
                            c0,2.762,2.239,5,5,5h1193.771l33.613,0.008h43.811c11.045,0,20-8.954,20-20l0,0c0-11.046-8.955-20-20-20h-43.811h-30H948.874"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M72.487,343.75
                            c-3.257-4.373-5.185-9.795-5.185-15.666c0-14.498,11.752-26.25,26.25-26.25s26.25,11.752,26.25,26.25
                            c0,5.863-1.923,11.277-5.172,15.647"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1342.425,559.459
                            c4.373-3.258,9.795-5.186,15.666-5.186c14.498,0,26.25,11.752,26.25,26.25s-11.752,26.25-26.25,26.25
                            c-5.863,0-11.277-1.923-15.647-5.172"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1055.375" y1="490.827" x2="1055.375" y2="560.523"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1095.375" y1="490.827" x2="1095.375" y2="560.523"/>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="1075.376" cy="525.676" r="11.657"/>
                        <path fill="#ce555f" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M871.874,536.429V428.333v-6.683c0,3.69-36.936,6.683-82.5,6.683s-82.5-2.992-82.5-6.683v6.683v108.096"/>
                        <g>
                            <path fill="#FFFFFF" d="M953.458,341.453c1.68-0.199,3.489-0.35,5.43-0.449c1.939-0.1,3.99-0.15,6.15-0.15
                                c2.6,0,4.92,0.32,6.96,0.96s3.759,1.521,5.159,2.64c1.4,1.121,2.46,2.471,3.181,4.051c0.72,1.58,1.08,3.29,1.08,5.129
                                c0,2.241-0.431,4.23-1.29,5.971c-0.861,1.74-2.061,3.21-3.601,4.41c-1.54,1.199-3.39,2.11-5.55,2.73s-4.54,0.93-7.14,0.93
                                c-1.681,0-3.24-0.061-4.681-0.18v15.84h-5.699V341.453z M964.558,362.934c3.6,0,6.369-0.789,8.31-2.37
                                c1.94-1.579,2.91-3.729,2.91-6.45c0-2.6-0.93-4.659-2.79-6.18c-1.859-1.52-4.551-2.28-8.069-2.28c-1.08,0-2.101,0.021-3.061,0.06
                                c-0.96,0.041-1.859,0.102-2.7,0.181v16.739c0.64,0.082,1.41,0.15,2.311,0.211C962.368,362.903,963.398,362.934,964.558,362.934z"/>
                            <path fill="#FFFFFF" d="M1012.797,384.054l-5.22-11.4c-1.32-2.839-2.98-4.86-4.98-6.06c-2-1.2-4.56-1.801-7.68-1.801h-0.9v18.541
                                h-5.699v-41.881c2.159-0.199,4.189-0.35,6.09-0.449c1.899-0.1,3.969-0.15,6.21-0.15c2.56,0,4.8,0.27,6.72,0.811
                                c1.92,0.539,3.52,1.311,4.8,2.31c1.28,1,2.25,2.181,2.91,3.54c0.66,1.36,0.99,2.86,0.99,4.5c0,2.92-0.87,5.271-2.61,7.05
                                c-1.74,1.78-4.25,3.11-7.529,3.99c0.799,0.36,1.539,0.771,2.22,1.229c0.68,0.461,1.319,1.021,1.92,1.68
                                c0.6,0.66,1.189,1.451,1.77,2.371s1.17,2.039,1.771,3.359l4.56,9.84L1012.797,384.054z M1000.618,345.653
                                c-1.36,0-2.58,0.021-3.66,0.06c-1.08,0.041-2.061,0.102-2.94,0.181v14.101h6.601c2.88,0,5.22-0.641,7.02-1.92
                                c1.8-1.28,2.7-3.121,2.7-5.521c0-2-0.84-3.649-2.52-4.95C1006.137,346.305,1003.738,345.653,1000.618,345.653z"/>
                            <path fill="#FFFFFF" d="M1022.937,362.273c0-3.08,0.45-5.939,1.35-8.58c0.9-2.64,2.2-4.93,3.9-6.869
                                c1.699-1.94,3.77-3.46,6.21-4.561c2.439-1.1,5.22-1.65,8.34-1.65c3.08,0,5.851,0.57,8.311,1.711
                                c2.46,1.139,4.539,2.689,6.239,4.649s3.01,4.251,3.931,6.87c0.919,2.62,1.38,5.43,1.38,8.43s-0.45,5.82-1.351,8.46
                                c-0.899,2.64-2.21,4.95-3.93,6.931c-1.72,1.979-3.801,3.539-6.24,4.68c-2.44,1.14-5.22,1.71-8.34,1.71s-5.9-0.57-8.34-1.71
                                c-2.44-1.141-4.511-2.7-6.21-4.68c-1.7-1.98-3-4.291-3.9-6.931C1023.387,368.094,1022.937,365.273,1022.937,362.273z
                                M1028.757,362.273c0,2.16,0.309,4.26,0.93,6.301c0.62,2.039,1.53,3.84,2.73,5.399c1.199,1.56,2.67,2.811,4.409,3.75
                                c1.74,0.94,3.71,1.409,5.91,1.409c2.319,0,4.351-0.429,6.09-1.289c1.74-0.859,3.2-2.04,4.38-3.54s2.07-3.28,2.671-5.341
                                c0.6-2.059,0.899-4.289,0.899-6.689c0-2.16-0.32-4.239-0.96-6.24c-0.641-2-1.56-3.779-2.76-5.34s-2.67-2.81-4.41-3.75
                                c-1.74-0.939-3.711-1.41-5.91-1.41c-2.2,0-4.17,0.431-5.91,1.291c-1.739,0.859-3.21,2.039-4.409,3.539
                                c-1.2,1.5-2.11,3.27-2.73,5.311C1029.066,357.713,1028.757,359.914,1028.757,362.273z"/>
                            <path fill="#FFFFFF" d="M1074.417,362.273c0,2.52,0.33,4.811,0.989,6.87c0.66,2.061,1.58,3.831,2.761,5.31
                                c1.179,1.48,2.589,2.621,4.229,3.42c1.64,0.801,3.439,1.201,5.4,1.201c1.959,0,3.66-0.23,5.1-0.691
                                c1.44-0.459,2.84-1.089,4.2-1.889l1.74,4.739c-1.48,0.801-3.171,1.47-5.07,2.011c-1.9,0.539-4.11,0.81-6.63,0.81
                                c-2.76,0-5.271-0.501-7.53-1.5s-4.21-2.431-5.85-4.29c-1.641-1.86-2.91-4.119-3.811-6.78c-0.899-2.659-1.35-5.649-1.35-8.97
                                c0-3.199,0.45-6.14,1.35-8.82c0.9-2.68,2.19-4.989,3.87-6.93c1.681-1.939,3.71-3.45,6.09-4.53s5.03-1.62,7.95-1.62
                                c2.04,0,3.87,0.19,5.49,0.57c1.62,0.381,3.15,0.91,4.59,1.59l-1.74,4.801c-1.24-0.601-2.51-1.08-3.81-1.441
                                c-1.301-0.359-2.83-0.539-4.59-0.539c-1.92,0-3.7,0.37-5.34,1.109c-1.641,0.741-3.061,1.83-4.261,3.271
                                c-1.199,1.44-2.13,3.19-2.79,5.25C1074.747,357.284,1074.417,359.633,1074.417,362.273z"/>
                            <path fill="#FFFFFF" d="M1106.636,341.334h25.199v4.92h-19.5v12.779h16.801v4.801h-16.801v14.58h19.5v4.92h-25.199V341.334z"/>
                            <path fill="#FFFFFF" d="M1139.215,374.994c1.44,1.199,3.061,2.18,4.86,2.939s3.9,1.141,6.3,1.141c2.88,0,5.16-0.601,6.84-1.801
                                c1.681-1.199,2.521-2.82,2.521-4.859c0-0.84-0.12-1.621-0.36-2.34c-0.24-0.721-0.711-1.41-1.41-2.07
                                c-0.7-0.66-1.68-1.32-2.939-1.98s-2.891-1.369-4.891-2.13c-2.159-0.84-3.989-1.67-5.489-2.49c-1.5-0.819-2.711-1.72-3.63-2.7
                                c-0.921-0.979-1.581-2.059-1.98-3.24c-0.4-1.179-0.6-2.529-0.6-4.049c0-1.48,0.309-2.881,0.93-4.201
                                c0.619-1.319,1.539-2.469,2.76-3.449c1.22-0.98,2.72-1.75,4.5-2.311c1.779-0.559,3.811-0.84,6.09-0.84c2.48,0,4.7,0.25,6.66,0.75
                                c1.96,0.501,3.9,1.211,5.82,2.131l-2.101,4.859c-1.36-0.8-2.95-1.471-4.77-2.01c-1.82-0.54-3.73-0.811-5.73-0.811
                                c-2.64,0-4.72,0.51-6.239,1.53c-1.521,1.021-2.28,2.37-2.28,4.05c0,0.801,0.109,1.511,0.33,2.131c0.22,0.62,0.66,1.221,1.32,1.799
                                c0.659,0.581,1.579,1.17,2.76,1.771c1.179,0.601,2.749,1.261,4.71,1.979c2.319,0.881,4.279,1.781,5.88,2.701
                                c1.6,0.92,2.88,1.9,3.84,2.939c0.96,1.041,1.65,2.16,2.07,3.359c0.42,1.201,0.63,2.521,0.63,3.961c0,1.96-0.381,3.699-1.14,5.22
                                c-0.761,1.521-1.811,2.811-3.15,3.87c-1.341,1.061-2.95,1.859-4.83,2.4c-1.881,0.539-3.921,0.81-6.12,0.81
                                c-2.92,0-5.58-0.39-7.979-1.171c-2.4-0.779-4.421-1.809-6.061-3.09L1139.215,374.994z"/>
                            <path fill="#FFFFFF" d="M1173.294,374.994c1.44,1.199,3.061,2.18,4.86,2.939s3.9,1.141,6.3,1.141c2.88,0,5.16-0.601,6.84-1.801
                                c1.681-1.199,2.521-2.82,2.521-4.859c0-0.84-0.12-1.621-0.36-2.34c-0.24-0.721-0.711-1.41-1.41-2.07
                                c-0.7-0.66-1.68-1.32-2.939-1.98s-2.891-1.369-4.891-2.13c-2.159-0.84-3.989-1.67-5.489-2.49c-1.5-0.819-2.711-1.72-3.63-2.7
                                c-0.921-0.979-1.581-2.059-1.98-3.24c-0.4-1.179-0.6-2.529-0.6-4.049c0-1.48,0.309-2.881,0.93-4.201
                                c0.619-1.319,1.539-2.469,2.76-3.449c1.22-0.98,2.72-1.75,4.5-2.311c1.779-0.559,3.811-0.84,6.09-0.84c2.48,0,4.7,0.25,6.66,0.75
                                c1.96,0.501,3.9,1.211,5.82,2.131l-2.101,4.859c-1.36-0.8-2.95-1.471-4.77-2.01c-1.82-0.54-3.73-0.811-5.73-0.811
                                c-2.64,0-4.72,0.51-6.239,1.53c-1.521,1.021-2.28,2.37-2.28,4.05c0,0.801,0.109,1.511,0.33,2.131c0.22,0.62,0.66,1.221,1.32,1.799
                                c0.659,0.581,1.579,1.17,2.76,1.771c1.179,0.601,2.749,1.261,4.71,1.979c2.319,0.881,4.279,1.781,5.88,2.701
                                c1.6,0.92,2.88,1.9,3.84,2.939c0.96,1.041,1.65,2.16,2.07,3.359c0.42,1.201,0.63,2.521,0.63,3.961c0,1.96-0.381,3.699-1.14,5.22
                                c-0.761,1.521-1.811,2.811-3.15,3.87c-1.341,1.061-2.95,1.859-4.83,2.4c-1.881,0.539-3.921,0.81-6.12,0.81
                                c-2.92,0-5.58-0.39-7.979-1.171c-2.4-0.779-4.421-1.809-6.061-3.09L1173.294,374.994z"/>
                        </g>

                        <!-- Phone frame -->
                        <path fill="#e47259" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M553.117,127.334v42.379
                        c0,3.996,3.239,7.236,7.236,7.236h136.994c3.995,0,7.234-3.24,7.234-7.236V58.286c0-3.996-3.239-7.236-7.234-7.236h-87.732v82.666
                        c0,11.49-9.314,20.802-20.803,20.802c-11.487,0-20.802-9.313-20.802-20.802V51.05h-7.657c-3.998,0-7.236,3.24-7.236,7.236v48.048"/>

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M953.458,580.267
                            L953.458,580.267c0-23.886-19.363-43.249-43.249-43.249H668.067c-23.886,0-43.249,19.363-43.249,43.249l0,0H953.458z"/>

                        <path fill="#FFFFFF" d="M601.336,131.492c0,7.008-5.682,12.688-12.688,12.688l0,0c-7.007,0-12.688-5.681-12.688-12.688v-76.13
                            c0-7.008,5.682-12.688,12.688-12.688l0,0c7.006,0,12.688,5.681,12.688,12.688V131.492z"/>

                        <g id="nos">
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.295-2.894-2.894v-8.442c0-1.598,1.295-2.895,2.894-2.895h8.441
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.296-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.295-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.295-2.894-2.894v-8.442c0-1.598,1.295-2.895,2.894-2.895h8.441
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.296-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.295-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.296-2.894-2.894v-8.442c0-1.599,1.295-2.894,2.894-2.894h8.441
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.296-2.892-2.894v-8.442c0-1.599,1.296-2.894,2.892-2.894h8.443
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.296-2.892-2.894v-8.442c0-1.599,1.295-2.894,2.892-2.894h8.443
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        </g>    

                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="517.117" y1="106.833" x2="553.117" y2="106.833"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="537.117" y1="126.833" x2="553.117" y2="126.833"/>
                    </svg>






                    <svg version="1.1" class="others pipe-4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1426.429 830" enable-background="new 0 0 1426.429 630"
                                xml:space="preserve">
                                
                        <!-- lines Inside square -->
                        <!-- <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="43.994" y1="50.333" x2="117.994" y2="50.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="43.994" y1="60.333" x2="117.994" y2="60.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="80.333" x2="165.161" y2="80.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="90.333" x2="165.161" y2="90.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="100.333" x2="165.161" y2="100.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="110.333" x2="165.161" y2="110.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="120.333" x2="165.161" y2="120.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="130.333" x2="165.161" y2="130.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="140.333" x2="165.161" y2="140.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="150.333" x2="165.161" y2="150.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="44.827" y1="160.333" x2="165.161" y2="160.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="49.161" y1="180.333" x2="112.827" y2="180.333"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="49.161" y1="190.333" x2="112.827" y2="190.333"/> -->
                        <path class="line1" fill="none" stroke="#fff" stroke-width="1" d="M 117.99,50.33C 117.99,50.33 43.99,50.33 43.99,50.33" />
                        <path class="line2" fill="none" stroke="#fff" stroke-width="1" d="M 117.99,60.33 C 117.99,60.33 43.99,60.33 43.99,60.33" />
                        <path class="line3" fill="none" stroke="#fff" stroke-width="1" d="M 117.99,50.33 C 117.99,50.33 43.99,50.33 43.99,50.33" />
                        <path class="line4" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,90.33 C 165.16,90.33 44.83,90.33 44.83,90.33" />
                        <path class="line5" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,100.33 C 165.16,100.33 44.83,100.33 44.83,100.33" />
                        <path class="line6" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,110.33 C 165.16,110.33 44.83,110.33 44.83,110.33" />
                        <path class="line7" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,120.33 C 165.16,120.33 44.83,120.33 44.83,120.33" />
                        <path class="line8" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,130.33 C 165.16,130.33 44.83,130.33 44.83,130.33" />
                        <path class="line9" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,140.33 C 165.16,140.33 44.83,140.33 44.83,140.33" />
                        <path class="line10" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,150.33 C 165.16,150.33 44.83,150.33 44.83,150.33" />
                        <path class="line11" fill="none" stroke="#fff" stroke-width="1" d="M 165.16,160.33 C 165.16,160.33 44.83,160.33 44.83,160.33" />
                        <path class="line12" fill="none" stroke="#fff" stroke-width="1" d="M 112.83,180.33 C 112.83,180.33 49.16,180.33 49.16,180.33" />
                        <path class="line13" fill="none" stroke="#fff" stroke-width="1" d="M 112.83,190.33 C 112.83,190.33 49.16,190.33 49.16,190.33" />
                        
                        <!-- Inside circles -->
                        <g>
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="4.0655,8.131" cx="357.707" cy="75.167" r="38.833"/>
                                <animatetransform 
                                    attributename="transform" 
                                    attributetype="XML" 
                                    type="rotate"
                                    dur="5s" 
                                    from="0 357.707 75.167"
                                    to="360 357.707 75.167" 
                                    repeatcount="indefinite" 
                                />
                        </g>
                        <g>
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="4,8" cx="357.707" cy="75.167" r="24.5"/>
                                <animatetransform 
                                    attributename="transform" 
                                    attributetype="XML" 
                                    type="rotate"
                                    dur="5s" 
                                    from="360 357.707 75.167"
                                    to="0 357.707 75.167" 
                                    repeatcount="indefinite" 
                                />
                        </g>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="357.707" cy="75.167" r="12.5"/>

                        <!-- first frame -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M343.45,280
                            c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.667c0-2.761,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V280z"/>

                        <!-- connectors for frames -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M308.117,360.834h-26
                            c-2.761,0-5-2.239-5-5v-70"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M411.117,360.834h26
                            c2.761,0,5-2.239,5-5v-70"/>


                        <!-- outer frame -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M517.117,106.833
                            c-2.761,0-5,2.239-5,5v16v8v170c0,2.761-2.239,5-5,5h-6l-10.333-0.5v-151c0-2.761-2.239-5-5-5H370.206v-6v-14.75l0.249-8.427
                            c21.955-6.025,39.085-26.124,39.085-49.99c0-28.626-23.207-51.833-51.833-51.833c-23.471,0-43.299,15.601-49.679,36.999
                            l-8.154,0.001H188.207l-8.213-0.834V28.333c0-2.761-2.238-5-5-5h-140c-2.761,0-5,2.239-5,5v190c0,2.761,2.239,5,5,5h140
                            c2.762,0,5-2.239,5-5v-128l8.213,0h113.91l6.01,0c5.147,16.847,18.647,30.05,35.673,34.78l0.406,8.229v14.991v6H231.784
                            c-2.761,0-5,2.239-5,5V433c0,2.762,2.239,5,5,5h254c2.761,0,5-2.238,5-5V329.5l10.333,0.334h26c2.761,0,5-2.239,5-5v-140v-17v-36
                            c0-2.761,2.239-5,5-5"/>



                        <!-- Rejected conveyor belt -->
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="8,8" d="
                            M824.117,240.833h-175c-2.761,0-5-2.239-5-5v-58"/>

                        <!-- Rejected path -->
                        <path class="rcb1" fill="none" display="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M-34.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"/>
                        <path class="rcb2" fill="none" display="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M-104.117,-150.833v148  c0,2.761,2.239,5,5,5h139V101.65v108.384"/>

                        <!-- Rejected Lead1 -->
                        <g class="rl1">
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="677.874" cy="286.065" r="8.01"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M697.052,313.4
                                c0-10.592-8.586-19.178-19.178-19.178s-19.178,8.586-19.178,19.178H697.052z"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M705.607,271.208
                                c0-0.711-0.577-1.288-1.289-1.288h-52.891c-0.712,0-1.289,0.577-1.289,1.288v47.345c0,0.712,0.577,1.289,1.289,1.289h52.891
                                c0.711,0,1.289-0.577,1.289-1.289V271.208z"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="677.874" y1="264.333" x2="677.874" y2="251.5"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M660.872,241.583
                                L660.872,241.583c0,4.695,3.806,8.501,8.5,8.501h17.002c4.694,0,8.5-3.806,8.5-8.501l0,0"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M688.61,269.702
                                L688.61,269.702c0-2.965-2.403-5.368-5.368-5.368h-10.736c-2.965,0-5.368,2.403-5.368,5.368l0,0"/>
                        </g>

                        <!-- Rejected Lead2 -->
                        <g class="rl2">
                            <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="751.874" cy="286.065" r="8.01"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M771.051,313.4
                                c0-10.592-8.586-19.178-19.178-19.178s-19.178,8.586-19.178,19.178H771.051z"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M779.608,271.208
                                c0-0.711-0.578-1.288-1.289-1.288h-52.891c-0.712,0-1.289,0.577-1.289,1.288v47.345c0,0.712,0.577,1.289,1.289,1.289h52.891
                                c0.711,0,1.289-0.577,1.289-1.289V271.208z"/>
                            <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="751.874" y1="264.333" x2="751.874" y2="251.5"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M734.872,241.583
                                L734.872,241.583c0,4.695,3.807,8.501,8.501,8.501h17.002c4.694,0,8.501-3.806,8.501-8.501l0,0"/>
                            <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M762.61,269.702
                                L762.61,269.702c0-2.965-2.403-5.368-5.368-5.368h-10.736c-2.965,0-5.368,2.403-5.368,5.368l0,0"/>
                            
                        </g>

                        <!-- Lead1 -->
                        <g class="lead1">
                            <path fill="#FFFFFF" d="M790.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S790.309,114.536,790.309,121.404z M808.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S747.1,146.871,747.1,163.84v1h61.547V163.84z M777.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C749.647,147.436,762.343,135.066,777.874,135.066z M821.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C820.583,174.84,821.929,173.494,821.929,171.84z M818.929,97.338c0.552,0,1,0.449,1,1v73.502
                                c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H818.929z M778.874,87.493V73.5c0-0.552-0.447-1-1-1
                                s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S778.874,88.045,778.874,87.493z M798.874,62.833c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,6.065,4.935,11,11,11h20
                                C793.939,73.833,798.874,68.898,798.874,62.833z M795.542,96c0-5.147-4.188-9.334-9.334-9.334H769.54
                                c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S795.542,96.552,795.542,96z"/>
                        </g>
                        <!-- Lead2 -->
                        <g class="lead2">
                            <path fill="#FFFFFF" d="M910.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S910.309,114.536,910.309,121.404z M928.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S867.1,146.871,867.1,163.84v1h61.547V163.84z M897.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C869.647,147.436,882.343,135.066,897.874,135.066z M941.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C940.583,174.84,941.929,173.494,941.929,171.84z M938.929,97.338c0.552,0,1,0.449,1,1v73.502
                                c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H938.929z M898.874,87.493V73.5c0-0.552-0.447-1-1-1
                                s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S898.874,88.045,898.874,87.493z M918.874,62.833c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,6.065,4.935,11,11,11h20
                                C913.939,73.833,918.874,68.898,918.874,62.833z M915.542,96c0-5.147-4.188-9.334-9.334-9.334H889.54
                                c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S915.542,96.552,915.542,96z"/>
                        </g>
                        <!-- Lead3 -->
                        <g class="lead3">
                            <path fill="#FFFFFF" d="M1030.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S1030.309,114.536,1030.309,121.404z M1048.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                S987.1,146.871,987.1,163.84v1h61.547V163.84z M1017.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C989.647,147.436,1002.343,135.066,1017.874,135.066z M1061.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C1060.583,174.84,1061.929,173.494,1061.929,171.84z M1058.929,97.338c0.552,0,1,0.449,1,1
                                v73.502c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H1058.929z M1018.874,87.493V73.5
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S1018.874,88.045,1018.874,87.493z M1038.874,62.833
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,6.065,4.935,11,11,11h20C1033.939,73.833,1038.874,68.898,1038.874,62.833z M1035.542,96c0-5.147-4.188-9.334-9.334-9.334
                                h-16.668c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S1035.542,96.552,1035.542,96z"/>
                        </g>
                        <!-- Lead4-->
                        <g class="lead4">
                            <path fill="#FFFFFF" d="M1150.309,121.404c0,6.868-5.567,12.436-12.436,12.436s-12.436-5.567-12.436-12.436
                                s5.567-12.436,12.436-12.436S1150.309,114.536,1150.309,121.404z M1168.647,163.84c0-16.969-13.805-30.773-30.773-30.773
                                s-30.773,13.805-30.773,30.773v1h61.547V163.84z M1137.874,135.066c15.53,0,28.227,12.37,28.756,27.773h-57.512
                                C1109.647,147.436,1122.343,135.066,1137.874,135.066z M1181.929,171.84V98.338c0-1.654-1.346-3-3-3h-82.111c-1.654,0-3,1.346-3,3
                                v73.502c0,1.654,1.346,3,3,3h82.111C1180.583,174.84,1181.929,173.494,1181.929,171.84z M1178.929,97.338c0.552,0,1,0.449,1,1
                                v73.502c0,0.551-0.448,1-1,1h-82.111c-0.552,0-1-0.449-1-1V98.338c0-0.551,0.448-1,1-1H1178.929z M1138.874,87.493V73.5
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1v13.993c0,0.552,0.447,1,1,1S1138.874,88.045,1138.874,87.493z M1158.874,62.833
                                c0-0.552-0.447-1-1-1s-1,0.448-1,1c0,4.962-4.037,9-9,9h-20c-4.963,0-9-4.038-9-9c0-0.552-0.447-1-1-1s-1,0.448-1,1
                                c0,6.065,4.935,11,11,11h20C1153.939,73.833,1158.874,68.898,1158.874,62.833z M1155.542,96c0-5.147-4.188-9.334-9.334-9.334
                                h-16.668c-5.146,0-9.334,4.187-9.334,9.334c0,0.552,0.447,1,1,1s1-0.448,1-1c0-4.044,3.29-7.334,7.334-7.334h16.668
                                c4.044,0,7.334,3.29,7.334,7.334c0,0.552,0.447,1,1,1S1155.542,96.552,1155.542,96z"/>
                        </g>

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M871.874,421.333
                            c0-3.69-36.936-6.683-82.5-6.683s-82.5,2.992-82.5,6.683"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" stroke-dasharray="8,8" x1="704.582" y1="62.667" x2="1342.874" y2="62.667"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="824.117" y1="234.833" x2="824.117" y2="247.334"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1223.542,83.987
                            c-3.416,0-6.187,22.431-6.187,50.102s2.771,50.102,6.187,50.102"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1342.874" y1="62.667" x2="1342.874" y2="81.667"/>
                        <g>
                            <path fill="#FFFFFF" d="M1380.5,83.987c5.522,0,10,4.477,10,10v246.134v4.219v5.16c0,27.338-22.162,49.5-49.5,49.5
                                s-49.5-22.162-49.5-49.5v-5.16v-4.219V193.987c0-5.523-4.478-10-10-10h-47.334l-9.78,0.203c3.401-0.139,6.154-22.517,6.154-50.101
                                c0-27.67-2.771-50.102-6.187-50.102h8.813H1380.5 M1224.386,184.19c-0.011,0-0.021,0-0.032,0L1224.386,184.19 M1380.5,81.987
                                h-147.334h-8.813c-1.104,0-2,0.896-2,2c0,0.916,0.615,1.688,1.455,1.925c0.406,0.585,1.891,3.434,3.17,15.009
                                c1.007,9.119,1.562,20.898,1.562,33.167s-0.555,24.048-1.562,33.167c-1.278,11.575-2.763,14.424-3.169,15.009
                                c-0.849,0.239-1.466,1.023-1.456,1.946c0.012,1.097,0.903,1.979,2,1.979c0.016,0,0.042,0,0.066-0.001c0.002,0,0.005,0,0.007,0
                                l9.78-0.203l47.293,0c4.411,0,8,3.589,8,8v146.134v4.219v5.16c0,28.397,23.103,51.5,51.5,51.5s51.5-23.103,51.5-51.5v-5.16v-4.219
                                V93.987C1392.5,87.371,1387.118,81.987,1380.5,81.987L1380.5,81.987z"/>
                        </g>

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1392.057,313.364
                            c7.716,10.493,12.273,23.452,12.273,37.476c0,34.977-28.354,63.33-63.33,63.33s-63.33-28.354-63.33-63.33
                            c0-14.941,5.174-28.674,13.828-39.504"/>
                        <g id="box">
                            <rect x="302.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="302.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="322.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="262.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="242.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="282.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                        </g>

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M409.45,415
                            c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.666c0-2.762,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V415z"/>
                        <g id="box1">
                            <rect x="368.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="328.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="338.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="348.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="358.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="368.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="378.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="388.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="368.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="388.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="328.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="308.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="348.117" y="398.334" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                        </g >

                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M473.45,280
                            c0,2.762-2.239,5-5,5h-91.512c-2.761,0-5-2.238-5-5v-94.667c0-2.761,2.239-5,5-5h91.512c2.761,0,5,2.239,5,5V280z"/>
                        <g id="box2">
                            <rect x="432.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="193.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="203.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="213.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="223.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="233.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="243.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="253.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="432.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="452.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="392.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="372.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                            <rect x="412.117" y="263.333" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" width="20" height="10"/>
                        </g>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1247.443,485.567
                            c0,2.904-2.355,5.26-5.26,5.26H908.569c-2.905,0-5.26-2.355-5.26-5.26V242.3c0-2.905,2.354-5.26,5.26-5.26h333.614
                            c2.904,0,5.26,2.354,5.26,5.26V485.567z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1235.52,475.242
                            c0,2.646-2.192,4.792-4.896,4.792H920.127c-2.704,0-4.896-2.146-4.896-4.792V253.625c0-2.647,2.191-4.792,4.896-4.792h310.497
                            c2.703,0,4.896,2.145,4.896,4.792V475.242z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M630.324,560.516H118.552
                            c-2.761,0-5-2.238-5-5V400.334v-20.096v-43.811c0-11.045-8.954-20-20-20l0,0c-11.046,0-20,8.955-20,20v43.811v19.096v196.182
                            c0,2.762,2.239,5,5,5h1193.771l33.613,0.008h43.811c11.045,0,20-8.954,20-20l0,0c0-11.046-8.955-20-20-20h-43.811h-30H948.874"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M72.487,343.75
                            c-3.257-4.373-5.185-9.795-5.185-15.666c0-14.498,11.752-26.25,26.25-26.25s26.25,11.752,26.25,26.25
                            c0,5.863-1.923,11.277-5.172,15.647"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M1342.425,559.459
                            c4.373-3.258,9.795-5.186,15.666-5.186c14.498,0,26.25,11.752,26.25,26.25s-11.752,26.25-26.25,26.25
                            c-5.863,0-11.277-1.923-15.647-5.172"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1055.375" y1="490.827" x2="1055.375" y2="560.523"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="1095.375" y1="490.827" x2="1095.375" y2="560.523"/>
                        <circle fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" cx="1075.376" cy="525.676" r="11.657"/>
                        <path fill="#ce555f" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="
                            M871.874,536.429V428.333v-6.683c0,3.69-36.936,6.683-82.5,6.683s-82.5-2.992-82.5-6.683v6.683v108.096"/>
                        <g>
                            <path fill="#FFFFFF" d="M953.458,341.453c1.68-0.199,3.489-0.35,5.43-0.449c1.939-0.1,3.99-0.15,6.15-0.15
                                c2.6,0,4.92,0.32,6.96,0.96s3.759,1.521,5.159,2.64c1.4,1.121,2.46,2.471,3.181,4.051c0.72,1.58,1.08,3.29,1.08,5.129
                                c0,2.241-0.431,4.23-1.29,5.971c-0.861,1.74-2.061,3.21-3.601,4.41c-1.54,1.199-3.39,2.11-5.55,2.73s-4.54,0.93-7.14,0.93
                                c-1.681,0-3.24-0.061-4.681-0.18v15.84h-5.699V341.453z M964.558,362.934c3.6,0,6.369-0.789,8.31-2.37
                                c1.94-1.579,2.91-3.729,2.91-6.45c0-2.6-0.93-4.659-2.79-6.18c-1.859-1.52-4.551-2.28-8.069-2.28c-1.08,0-2.101,0.021-3.061,0.06
                                c-0.96,0.041-1.859,0.102-2.7,0.181v16.739c0.64,0.082,1.41,0.15,2.311,0.211C962.368,362.903,963.398,362.934,964.558,362.934z"/>
                            <path fill="#FFFFFF" d="M1012.797,384.054l-5.22-11.4c-1.32-2.839-2.98-4.86-4.98-6.06c-2-1.2-4.56-1.801-7.68-1.801h-0.9v18.541
                                h-5.699v-41.881c2.159-0.199,4.189-0.35,6.09-0.449c1.899-0.1,3.969-0.15,6.21-0.15c2.56,0,4.8,0.27,6.72,0.811
                                c1.92,0.539,3.52,1.311,4.8,2.31c1.28,1,2.25,2.181,2.91,3.54c0.66,1.36,0.99,2.86,0.99,4.5c0,2.92-0.87,5.271-2.61,7.05
                                c-1.74,1.78-4.25,3.11-7.529,3.99c0.799,0.36,1.539,0.771,2.22,1.229c0.68,0.461,1.319,1.021,1.92,1.68
                                c0.6,0.66,1.189,1.451,1.77,2.371s1.17,2.039,1.771,3.359l4.56,9.84L1012.797,384.054z M1000.618,345.653
                                c-1.36,0-2.58,0.021-3.66,0.06c-1.08,0.041-2.061,0.102-2.94,0.181v14.101h6.601c2.88,0,5.22-0.641,7.02-1.92
                                c1.8-1.28,2.7-3.121,2.7-5.521c0-2-0.84-3.649-2.52-4.95C1006.137,346.305,1003.738,345.653,1000.618,345.653z"/>
                            <path fill="#FFFFFF" d="M1022.937,362.273c0-3.08,0.45-5.939,1.35-8.58c0.9-2.64,2.2-4.93,3.9-6.869
                                c1.699-1.94,3.77-3.46,6.21-4.561c2.439-1.1,5.22-1.65,8.34-1.65c3.08,0,5.851,0.57,8.311,1.711
                                c2.46,1.139,4.539,2.689,6.239,4.649s3.01,4.251,3.931,6.87c0.919,2.62,1.38,5.43,1.38,8.43s-0.45,5.82-1.351,8.46
                                c-0.899,2.64-2.21,4.95-3.93,6.931c-1.72,1.979-3.801,3.539-6.24,4.68c-2.44,1.14-5.22,1.71-8.34,1.71s-5.9-0.57-8.34-1.71
                                c-2.44-1.141-4.511-2.7-6.21-4.68c-1.7-1.98-3-4.291-3.9-6.931C1023.387,368.094,1022.937,365.273,1022.937,362.273z
                                M1028.757,362.273c0,2.16,0.309,4.26,0.93,6.301c0.62,2.039,1.53,3.84,2.73,5.399c1.199,1.56,2.67,2.811,4.409,3.75
                                c1.74,0.94,3.71,1.409,5.91,1.409c2.319,0,4.351-0.429,6.09-1.289c1.74-0.859,3.2-2.04,4.38-3.54s2.07-3.28,2.671-5.341
                                c0.6-2.059,0.899-4.289,0.899-6.689c0-2.16-0.32-4.239-0.96-6.24c-0.641-2-1.56-3.779-2.76-5.34s-2.67-2.81-4.41-3.75
                                c-1.74-0.939-3.711-1.41-5.91-1.41c-2.2,0-4.17,0.431-5.91,1.291c-1.739,0.859-3.21,2.039-4.409,3.539
                                c-1.2,1.5-2.11,3.27-2.73,5.311C1029.066,357.713,1028.757,359.914,1028.757,362.273z"/>
                            <path fill="#FFFFFF" d="M1074.417,362.273c0,2.52,0.33,4.811,0.989,6.87c0.66,2.061,1.58,3.831,2.761,5.31
                                c1.179,1.48,2.589,2.621,4.229,3.42c1.64,0.801,3.439,1.201,5.4,1.201c1.959,0,3.66-0.23,5.1-0.691
                                c1.44-0.459,2.84-1.089,4.2-1.889l1.74,4.739c-1.48,0.801-3.171,1.47-5.07,2.011c-1.9,0.539-4.11,0.81-6.63,0.81
                                c-2.76,0-5.271-0.501-7.53-1.5s-4.21-2.431-5.85-4.29c-1.641-1.86-2.91-4.119-3.811-6.78c-0.899-2.659-1.35-5.649-1.35-8.97
                                c0-3.199,0.45-6.14,1.35-8.82c0.9-2.68,2.19-4.989,3.87-6.93c1.681-1.939,3.71-3.45,6.09-4.53s5.03-1.62,7.95-1.62
                                c2.04,0,3.87,0.19,5.49,0.57c1.62,0.381,3.15,0.91,4.59,1.59l-1.74,4.801c-1.24-0.601-2.51-1.08-3.81-1.441
                                c-1.301-0.359-2.83-0.539-4.59-0.539c-1.92,0-3.7,0.37-5.34,1.109c-1.641,0.741-3.061,1.83-4.261,3.271
                                c-1.199,1.44-2.13,3.19-2.79,5.25C1074.747,357.284,1074.417,359.633,1074.417,362.273z"/>
                            <path fill="#FFFFFF" d="M1106.636,341.334h25.199v4.92h-19.5v12.779h16.801v4.801h-16.801v14.58h19.5v4.92h-25.199V341.334z"/>
                            <path fill="#FFFFFF" d="M1139.215,374.994c1.44,1.199,3.061,2.18,4.86,2.939s3.9,1.141,6.3,1.141c2.88,0,5.16-0.601,6.84-1.801
                                c1.681-1.199,2.521-2.82,2.521-4.859c0-0.84-0.12-1.621-0.36-2.34c-0.24-0.721-0.711-1.41-1.41-2.07
                                c-0.7-0.66-1.68-1.32-2.939-1.98s-2.891-1.369-4.891-2.13c-2.159-0.84-3.989-1.67-5.489-2.49c-1.5-0.819-2.711-1.72-3.63-2.7
                                c-0.921-0.979-1.581-2.059-1.98-3.24c-0.4-1.179-0.6-2.529-0.6-4.049c0-1.48,0.309-2.881,0.93-4.201
                                c0.619-1.319,1.539-2.469,2.76-3.449c1.22-0.98,2.72-1.75,4.5-2.311c1.779-0.559,3.811-0.84,6.09-0.84c2.48,0,4.7,0.25,6.66,0.75
                                c1.96,0.501,3.9,1.211,5.82,2.131l-2.101,4.859c-1.36-0.8-2.95-1.471-4.77-2.01c-1.82-0.54-3.73-0.811-5.73-0.811
                                c-2.64,0-4.72,0.51-6.239,1.53c-1.521,1.021-2.28,2.37-2.28,4.05c0,0.801,0.109,1.511,0.33,2.131c0.22,0.62,0.66,1.221,1.32,1.799
                                c0.659,0.581,1.579,1.17,2.76,1.771c1.179,0.601,2.749,1.261,4.71,1.979c2.319,0.881,4.279,1.781,5.88,2.701
                                c1.6,0.92,2.88,1.9,3.84,2.939c0.96,1.041,1.65,2.16,2.07,3.359c0.42,1.201,0.63,2.521,0.63,3.961c0,1.96-0.381,3.699-1.14,5.22
                                c-0.761,1.521-1.811,2.811-3.15,3.87c-1.341,1.061-2.95,1.859-4.83,2.4c-1.881,0.539-3.921,0.81-6.12,0.81
                                c-2.92,0-5.58-0.39-7.979-1.171c-2.4-0.779-4.421-1.809-6.061-3.09L1139.215,374.994z"/>
                            <path fill="#FFFFFF" d="M1173.294,374.994c1.44,1.199,3.061,2.18,4.86,2.939s3.9,1.141,6.3,1.141c2.88,0,5.16-0.601,6.84-1.801
                                c1.681-1.199,2.521-2.82,2.521-4.859c0-0.84-0.12-1.621-0.36-2.34c-0.24-0.721-0.711-1.41-1.41-2.07
                                c-0.7-0.66-1.68-1.32-2.939-1.98s-2.891-1.369-4.891-2.13c-2.159-0.84-3.989-1.67-5.489-2.49c-1.5-0.819-2.711-1.72-3.63-2.7
                                c-0.921-0.979-1.581-2.059-1.98-3.24c-0.4-1.179-0.6-2.529-0.6-4.049c0-1.48,0.309-2.881,0.93-4.201
                                c0.619-1.319,1.539-2.469,2.76-3.449c1.22-0.98,2.72-1.75,4.5-2.311c1.779-0.559,3.811-0.84,6.09-0.84c2.48,0,4.7,0.25,6.66,0.75
                                c1.96,0.501,3.9,1.211,5.82,2.131l-2.101,4.859c-1.36-0.8-2.95-1.471-4.77-2.01c-1.82-0.54-3.73-0.811-5.73-0.811
                                c-2.64,0-4.72,0.51-6.239,1.53c-1.521,1.021-2.28,2.37-2.28,4.05c0,0.801,0.109,1.511,0.33,2.131c0.22,0.62,0.66,1.221,1.32,1.799
                                c0.659,0.581,1.579,1.17,2.76,1.771c1.179,0.601,2.749,1.261,4.71,1.979c2.319,0.881,4.279,1.781,5.88,2.701
                                c1.6,0.92,2.88,1.9,3.84,2.939c0.96,1.041,1.65,2.16,2.07,3.359c0.42,1.201,0.63,2.521,0.63,3.961c0,1.96-0.381,3.699-1.14,5.22
                                c-0.761,1.521-1.811,2.811-3.15,3.87c-1.341,1.061-2.95,1.859-4.83,2.4c-1.881,0.539-3.921,0.81-6.12,0.81
                                c-2.92,0-5.58-0.39-7.979-1.171c-2.4-0.779-4.421-1.809-6.061-3.09L1173.294,374.994z"/>
                        </g>

                        <!-- Phone frame -->
                        <path fill="#e47259" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M553.117,127.334v42.379
                        c0,3.996,3.239,7.236,7.236,7.236h136.994c3.995,0,7.234-3.24,7.234-7.236V58.286c0-3.996-3.239-7.236-7.234-7.236h-87.732v82.666
                        c0,11.49-9.314,20.802-20.803,20.802c-11.487,0-20.802-9.313-20.802-20.802V51.05h-7.657c-3.998,0-7.236,3.24-7.236,7.236v48.048"/>


                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M953.458,580.267
                            L953.458,580.267c0-23.886-19.363-43.249-43.249-43.249H668.067c-23.886,0-43.249,19.363-43.249,43.249l0,0H953.458z"/>


                        <path display="none" class="lp" fill="none" stroke="#fff" stroke-width="1" d="M -119.98,-0.3 C -119.98,-0.3 514.69,-0.3 514.69,-0.3" />

                        <path display="none" class="lp2" fill="none" stroke="#fff" stroke-width="1" d="M -240.98,-0.3 C -240.98,-0.3 414.69,-0.3 414.69,-0.3" />

                        <path display="none" class="lp3" fill="none" stroke="#fff" stroke-width="1" d="M -360.98,-0.3 C -360.98,-0.3 274.69,-0.3 274.69,-0.3" />

                        <path display="none" class="lp4" fill="none" stroke="#fff" stroke-width="1" d="M -480.98,-0.3 C -480.98,-0.3 175.69,-0.3 174.69,-0.3" />

                        <path fill="#FFFFFF" d="M601.336,131.492c0,7.008-5.682,12.688-12.688,12.688l0,0c-7.007,0-12.688-5.681-12.688-12.688v-76.13
                            c0-7.008,5.682-12.688,12.688-12.688l0,0c7.006,0,12.688,5.681,12.688,12.688V131.492z"/>
                        <!-- Phone Buttons -->
                        <g id="nos">
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.295-2.894-2.894v-8.442c0-1.598,1.295-2.895,2.894-2.895h8.441
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.296-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,82.247
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.295-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V82.247z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.295-2.894-2.894v-8.442c0-1.598,1.295-2.895,2.894-2.895h8.441
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.296-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,111.189
                            c0,1.599-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.295-2.892-2.894v-8.442c0-1.598,1.295-2.895,2.892-2.895h8.443
                            c1.599,0,2.895,1.297,2.895,2.895V111.189z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M634.433,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.441c-1.599,0-2.894-1.296-2.894-2.894v-8.442c0-1.599,1.295-2.894,2.894-2.894h8.441
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M663.375,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.443c-1.596,0-2.892-1.296-2.892-2.894v-8.442c0-1.599,1.296-2.894,2.892-2.894h8.443
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        <path fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M692.318,140.131
                            c0,1.598-1.296,2.894-2.895,2.894h-8.443c-1.597,0-2.892-1.296-2.892-2.894v-8.442c0-1.599,1.295-2.894,2.892-2.894h8.443
                            c1.599,0,2.895,1.295,2.895,2.894V140.131z"/>
                        </g>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="517.117" y1="106.833" x2="553.117" y2="106.833"/>
                        <line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="537.117" y1="126.833" x2="553.117" y2="126.833"/>
                    </svg>             
                   
                   
                   
                </div>

                    <div class="container pm-container ie-carousel ">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                                <li data-target="#myCarousel" data-slide-to="6"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner ">                               
                                <div class="item active">                                
                                    <div class="carousel-caption">                                      
                                        <p class="pm-slider">Post the brief, the target is defined and an initial list for out-reach is created (combination of internal database capabilities and clients' marketing responses)</p>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">The data is de-duped against the existing customers and prospect base, to avoid souring opportunities from the same base.</p>
                                    </div>
                                </div>
                                
                                <div class="item">                                
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">Tele-calling is undertaken on the database sourced at our end to profile the organizations to help identify the prospects</p>
                                    </div>
                                </div>

                                <div class="item">                                
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">Post data profiling, the suspects are touched base via multiple marketing tactics to create awareness about the product/solution and if necessary also educate them about the advantages of the product.</p>
                                    </div>
                                </div>

                                <div class="item">                                
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">Most marketing tactics have a call to action on basis of which the prospects get in touch and the team identifies whether there is a marketing lead on the basis of BANT criteria defined.</p>
                                    </div>
                                </div>

                                <div class="item">                                
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">The lead generation team continues cold calling on the database to identify if there is marketing lead on the basis of BANT criteria.</p>
                                    </div>
                                </div>

                                <div class="item">                                
                                    <div class="carousel-caption">                                        
                                        <p class="pm-slider">The lead management team works holistically, ensuring they keep building the pipeline for clients sales team by nurturing existing customer base and also working on new prospects and giving them a regular flow of marketing leads.</p>
                                    </div>
                                </div>                                
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <img src="img/new/prev.svg" class="arrows" alt="">
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <img src="img/new/next.svg" class="arrows" alt="">
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
                <h2></h2>
            </div>
        </div>
    </section>

    <section class="cd-section">
        <div>
            <?php include "footer.php"; ?>
        </div>
    </section>   
    
    <a href="index.php">
        <img src="img/new/erfolg-logo-vertical.svg" class="img-responsive brand-logo hidden-small">
    </a>
    <nav>
        <ul class="cd-vertical-nav">
            <li><a href="#0" class="cd-prev inactive">Next</a></li>
            <li><a href="#0" class="cd-next">Prev</a></li>
        </ul>
    </nav>
    
    <?php include "nav.php"; ?>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h1> Request Case Study</h1>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="text"  id="name"  name="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="email" id="email"  name="email" placeholder="Official Email">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="number"  id="mno"  name="mobile" placeholder="Mobile Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="number" id="pno"  name="pno" placeholder="Landline Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="text" id="org"  name="org" placeholder="Organization">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input  class="form-control" type="text" id="city"  name="city" placeholder="City">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="-1">Request Case Study on</option>
                                            <option value="Pipeline Management">Pipeline Management</option>
                                            <option value="Back-end Sales Engine">Back-end Sales Engine</option>
                                            <option value="Audience Connect">Audience Connect</option>
                                            <option value="Web Conference">Web Conference</option>
                                            <option value="Event Management">Event Management</option>
                                            <option value="Database Management">Database Management</option>
                                            <option value="Marketing Support">Marketing Support</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                            <option value="Design Development">Design & Development</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <button id="js-ripple-btn2" class="button styl-material" type="submit">
                                        <span>Send Request</span>
                                        <svg class="ripple-obj">
                                            <use height="100" width="100" xlink:href="#ripply-scott" class="js-ripple"></use>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div> 
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false">
		<!-- Because of Firefox. -->
		<defs>
			<radialGradient id="gradient">
				<stop offset="0" stop-color="#fff" />
				<stop offset="0.25" stop-color="#fff" />
				<stop offset="0.35" stop-color="#fff" />
				<stop offset="0.50" stop-color="#fff" />
				<stop offset="0.60" stop-color="#fff" />
				<stop offset="0.85" stop-color="#fff" />
				<stop offset="1" stop-color="#fff" />
			</radialGradient>
		</defs>
		<symbol id="ripply-scott" viewBox="0 0 100 100">
			<circle id="ripple-shape" fill="url(#gradient)" cx="1" cy="1" r="1" />
		</symbol>
	</svg>
    <?php include "script.php"; ?>
    
    <script>
        if (document.documentMode || /Edge/.test(navigator.userAgent)) {
            $(".edge-ie").show();
            $(".others").hide();
            $(".ie-carousel").addClass("ie-carousel-top");
            console.log("IE");
        }else{
            $(".edge-ie").hide();
            console.log("Others");
        }

        if (document.documentMode ) {
            $(".ie").show();
            $(".other").hide();
            $(".ie-carousel").addClass("ie-carousel-top");            
            console.log("IE");
        }
        else{
            $(".ie").hide();
            console.log("Others");
        }
    </script>

    
    <script>
        function changeOverlay() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#box rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#box rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                changeOverlay();
            }, 1000);
        }

        function changeOverlay1() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#box1 rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#box1 rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                changeOverlay1();
            }, 1000);
        }

        function changeOverlay2() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#box2 rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#box2 rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                changeOverlay2();
            }, 1000);
        }

        function iechangeOverlay() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#boxie rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#boxie rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                iechangeOverlay();
            }, 1000);
        }

        function iechangeOverlay1() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#box1ie rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#box1ie rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                iechangeOverlay1();
            }, 1000);
        }

        function iechangeOverlay2() {
            var randomNum = Math.round(Math.random() * 38) - 1;
            $('#box2ie rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#box2ie rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                iechangeOverlay2();
            }, 1000);
        }

        function changeOverlayPath() {
            var randomNum = Math.round(Math.random() * 10) - 1;
            $('#nos path:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#nos path:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                changeOverlayPath();
            }, 500);
        }

        function changeOverlayBoxs() {
            var randomNum = Math.round(Math.random() * 48) - 1;
            $('#boxs rect:eq(' + randomNum + ')').css({
                "fill": "#fff"
            });
            setTimeout(function() {
                // $('#box rect:eq(' + randomNum + ')').animate({ "opacity" : .6 });
                $('#boxs rect:eq(' + randomNum + ')').css({
                    "fill": "none"
                });
                changeOverlayBoxs();
            }, 500);
        }

        $(document).ready(function() {
            changeOverlay();
            changeOverlay1();
            changeOverlay2();
            iechangeOverlay();
            iechangeOverlay1();
            iechangeOverlay2();
            changeOverlayPath();
            changeOverlayBoxs();
        });
    </script>

    <!-- <script src="js/anime.js"></script> -->
    <script src="js/anime1.3.js"></script>
    <script>
        var rl1 = anime.path('.rcb1');
        var rl2 = anime.path('.rcb2');
        var lp = anime.path('.lp');
        var lp2 = anime.path('.lp2');
        var lp3 = anime.path('.lp3');
        var lp4 = anime.path('.lp4');

        anime({
            targets: '.rl1',
            translateX: rl1,
            translateY: rl1,
            duration: 8000,
            loop: true,
            easing: 'linear'
        });

        anime({
            targets: '.rl2',
            translateX: rl2,
            translateY: rl2,
            delay: 2000,
            duration: 7000,
            loop: true,
            easing: 'linear'
        });

        anime({
            targets: '.lead1',
            translateX: lp,
            translateY: lp,
            delay: 1000,
            duration: 8000,
            loop: true,
            easing: 'linear'
        });

        anime({
            targets: '.lead2',
            translateX: lp2,
            translateY: lp2,
            delay: 3000,
            duration: 8000,
            loop: true,
            easing: 'linear'
        });

        anime({
            targets: '.lead3',
            translateX: lp3,
            translateY: lp3,
            delay: 5000,
            duration: 8000,
            loop: true,
            easing: 'linear'
        });

        anime({
            targets: '.lead4',
            translateX: lp4,
            translateY: lp4,
            delay: 7000,
            duration: 8000,
            loop: true,
            easing: 'linear'
        });
    </script>
   


    <script>
        $(document).ready(function(){
            $("#js-ripple-btn2").on('click', function(){
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mno").val();
                var pno = $("#pno").val();
                var org = $("#org").val();
                var city = $("#city").val();
                
                if(name == ""){
                    $("#name").css("border-color","red");
                    $("#nameerror").text("Name cannot be empty");
                    return false;
                }else
                if(email == ""){
                    $("#email").css("border-color","red");
                    return false;
                }else
                if(!filter.test(email)){
                    $("#email").css("border-color","red");
                    return false;
                }else
                if(mobile == ""){
                    $("#mno").css("border-color","red");
                    return false;
                }else
                if(mobile.length != 10){
                    $("#mno").css("border-color","red");
                    return false;
                }else
                if(pno == ""){
                    $("#pno").css("border-color","red");
                    return false;
                }else 
                if(org == ""){
                    $("#org").css("border-color","red");
                    return false;
                }else
                if(city == ""){
                    $("#city").css("border-color","red");
                    return false;
                }
            });
        });     

    </script>
</body>

</html>