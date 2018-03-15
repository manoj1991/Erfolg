<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>


<body>

<?php include "nav.php"; ?>

    <!-- Header -->
    <header id="top" class="header">
        <div class="container">
            <div class="row">
                <div class="main_home">
                    <div class="home_text">
                        <h2>Having trouble getting clients?</h2>
                        <button id="js-ripple-btn" class="button styl-material">
                            <span class="lets">Let's Talk</span>
                            <svg class="ripple-obj">
                                <use height="100" width="100" xlink:href="#ripply-scott" class="js-ripple"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!--End off row-->
        </div>
    </header>
    

    <!-- About -->
    <section id="about" class="about ">
       <div class="container">
           <h1 class="text-center">Are you spending more time in micro detailing towards event management than on <br><strong> core objectives of events?</strong> </h1>
       </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services ">
       <div class="container-fluid">         
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><h1>EVENT INTELLIGENCE</h1></a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><h1>AREAS</h1></a></li>
        
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">                                    
                                <p class="desc">Corporate events are a tremendous platform to address a captive audience &amp; open up opportunities for strategic discussions. As a marketing engine, corporate events are capable of adding great value to the sales function of an organization. However, any corporate event that you plan and stage is a reflection of your company’s image – from the initial invitation to the onsite operations. Therefore, it becomes imperative that any event planned delivers on every platform &amp; does not create a detrimental influence. </p>
                                <p class="desc">At <i>Erfolg</i>, we have a team of experienced event management specialists and we manage &amp; endeavor, to make successful meetings happen. It is our desire to facilitate the process by providing transparency wherever necessary, accurate information on which to base your decisions, analytical tools to help evaluate your options and risks and channel for cost effective business. Proper event management of the details that comprise a well-run meeting is essential to that meeting being a positive experience.</p>
                            </div>
         
                            <div role="tabpanel" class="tab-pane fade" id="Section2">                                    
                                <p class="desc">We undertake corporate events of all scales from the simplest to the grander ones. We handle a wide array of corporate events ranging from full fledged conferences for customers to business development events with prospects/suspects, technical training seminars to jazzy product launches, single day summit to residential conferences, networking/informal sessions to C-level sessions, are capable to handling any bespoke event.</p>
                                <p class="desc">>At <i>Erfolg</i>, we believe that personal attention to specific objectives is as important as through media. <i>Erfolg's</i> expertise extends to new marketing strategies for the requirements of various corporate events. We quickly grasp the elements of unique budgetary considerations and explore the market to come up with innovative marketing techniques and creative promotional materials.</p>
                            </div>        
                          
                        </div>
                    </div>
                </div>
            </div>         
        </div>      
    </section>

   

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio about">
        <div class="container-fluid">
            <div class="col-md-6">
                <h2 class="line-height ">With over a decade plus experience in event management at our end, we take care of the below mentioned for our clients to ensure a seamless smooth corporate event. </h2>
            </div>
            <div class="col-md-6">
                <div class="column_attr  align_left"><h4 class="line-height ">The following process is what we follow for most of our lead generation campaigns to ensure the prospect identification is correct and has a higher conversion ratio:</h4>
                    <h5>
                        <ul class="line-height ">
                            <li>Venue identification and co-ordination of logistics onsite for the event with the venue </li>
                            <li>Event marketing via multi scope marketing approach for ensuring the right audience for the session</li>
                            <li>Designing and production of branding for the sessions </li>
                            <li>Onsite Setup of the stage, audio visual set up of the hall and registration area </li>
                            <li>Onsite Registration for the session along with delegate management and collateral and feedback form distribution </li>
                            <li>Post Event Analysis and Summary of the event with help of delegate feedback.</li>
                        </ul>
                    </h5>
                </div>
            </div>
        </div>
        
    </section>

<!-- Case study -->
    <section id="cs" class="cs ">
        <div class="container">           
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="text-center">Request a case study</strong> </h1>
                    <br>
                    <button id="js-ripple-btn1" class="button styl-material ctabb" data-toggle="modal" data-target="#myModal">
                        <span class="lets">Case study</span>
                        <svg class="ripple-obj" id="js-ripple">
                            <use height="100" width="100" xlink:href="#ripply-scott" class="js-ripple"></use>
                        </svg>
                    </button>                           
                </div>             
            </div>
        </div>
        <!-- /.container -->
    </section>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">    
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h2 class="modal-title text-center">Case Study</h2>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <hr class="colorgraph">
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="text"  id="name"  name="name" />                    
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="Full Name">Full Name</span>
                            </label>
                            <span id="nameerror" class="error"></span>
                        </span>
                        <span class="input input--chisato">
                            
                            <input class="input__field input__field--chisato" type="email" id="email"  name="email"  />
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="Official Email">Official Email</span>
                            </label>
                            <span id="emailerror" class="error"></span>
                        </span>
                        <span class="input input--chisato" style="display:none;">                    
                            <input class="input__field input__field--chisato" type="hidden" value="Event Management" />                   
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="number"  id="mno"  name="mobile" />
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="Mobile Number">Mobile Number</span>
                            </label>
                            <span id="mobileerror" class="error"></span>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="number" id="pno"  name="pno" />
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="Landline Number">Landline Number</span>
                            </label>
                            <span id="pnoerror" class="error"></span>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="text" id="org"  name="org"/>
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="Organization">Organization</span>
                            </label>
                            <span id="orgerror" class="error"></span>
                        </span>
                        <span class="input input--chisato">
                            <input class="input__field input__field--chisato" type="text" id="city"  name="city"/>
                            <label class="input__label input__label--chisato" >
                                <span class="input__label-content input__label-content--chisato" data-content="City">City</span>
                            </label>
                            <span id="cityerror" class="error"></span>
                        </span>              
                        
                        <span  class="input input--chisato">
                            <input type="submit" id="finalsubmit" value="Submit" class="btn btn-info ripple ">    
                        </span>           
                        <hr class="colorgraph">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default ripple" data-dismiss="modal">Close</button>
                </div>
            </div>      
        </div>
    </div>

    


    
    <?php include "footer.php"; ?>
    <?php include "script.php"; ?>
    <script>
        (function() {
            // trim polyfill : https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/String/Trim
            if (!String.prototype.trim) {
                (function() {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function() {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [].slice.call(document.querySelectorAll('input.input__field')).forEach(function(inputEl) {
                // in case the input is already filled..
                if (inputEl.value.trim() !== '') {
                    classie.add(inputEl.parentNode, 'input--filled');
                }

                // events:
                inputEl.addEventListener('focus', onInputFocus);
                inputEl.addEventListener('blur', onInputBlur);
            });

            function onInputFocus(ev) {
                classie.add(ev.target.parentNode, 'input--filled');
            }

            function onInputBlur(ev) {
                if (ev.target.value.trim() === '') {
                    classie.remove(ev.target.parentNode, 'input--filled');
                }
            }
        })();
    </script>
    <script>
        $(document).ready(function(){
            $("#finalsubmit").on('click', function(){
                var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                var name = $("#name").val();
                var email = $("#email").val();
                var mobile = $("#mno").val();
                var pno = $("#pno").val();
                var org = $("#org").val();
                var city = $("#city").val();
                
                if(name == ""){
                    $("#name").css("border-color","red");
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

</html>