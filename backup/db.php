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
           <h1 class="text-center">Is your marketing team failing to launch campaigns <br><strong> due to lack of defined target audience? </strong>  </h1>
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
                        <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab"><h1>INTELLIGENCE</h1></a></li>
                        <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"><h1>THE DATABASE</h1></a></li>
                                       
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="Section1">                                    
                            <p class="desc">One of the most important inputs for any marketing campaign is the intelligence in terms of the data or the audience to be targeted. This input is especially critical when it comes to direct marketing tactics &amp; attention has to be paid to all aspects i.e. planning the right audience, identification of the target audience, accuracy of the lists, frequency of connect, mediums of connect, etc. </p>
                            <p class="desc">One of the contributing factors to successful campaign implementation at <i>Erfolg</i> has been the back-end support extended by the data team, in providing insights on the organizations to be targeted, market intelligence, accurate contacts to be connected with, medium of communication to be adopted, decision making hierarchies, analysis on scope, etc.</p>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Section2">                                    
                            <p class="desc">The Database Services at <i>Erfolg</i> is delivered by a separate dedicated team of professionals who specialize in data sourcing, organizational data profiling, data segmentation mapping, data cleansing, data verification, data de-duplication, industry analysis, data validation, etc. The back-end team is not just list pullers but is experienced to take briefs basis objective of the campaign, target audience, etc &amp; work on the same to plan the inputs for the campaign, share market insights towards approach, depth and reach, predict the probable campaign results, deliver effective &amp; live databases for the campaign, etc.</p>
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
                <h2 class="line-height ">The lead generation team at <i>Erfolg</i> is not only restricted to just follow-up on the marketing responses &amp; databases but also have access to the in-house database repository. </h2>
            </div>
            <div class="col-md-6">
                <div class="column_attr  align_left"><h4 class="line-height ">The following process is what we follow for most of our lead generation campaigns to ensure the prospect identification is correct and has a higher conversion ratio:</h4>
                    <h5>
                        <ul class="line-height ">
                            <li>Post the brief, the target is defined and an initial list for out-reach is created (combination of internal database capabilities and clients' marketing responses)</li>
                            <li>The data is de-duped against the existing customers and prospect base, to avoid souring opportunities from the same base. </li>
                            <li>Tele-calling is undertaken on the database sourced at our end to profile the organizations to help identify the prospects </li>
                            <li>Post data profiling, the suspects are touched base via multiple marketing tactics to create awareness about the product/solution and if necessary also educate them about the advantages of the product. </li>
                            <li>Most marketing tactics have a call to action on basis of which the prospects get in touch and the team identifies whether there is a marketing lead on the basis of BANT criteria defined. </li>
                            <li>The lead generation team continues cold calling on the database to identify if there is marketing lead on the basis of BANT criteria. </li>
                            <li>The lead management team works holistically, ensuring they keep building the pipeline for clients sales team by nurturing existing customer base and also working on new prospects and giving them a regular flow of marketing leads.</li>
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
                            <input class="input__field input__field--chisato" type="hidden" value="Pipeline" />                   
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