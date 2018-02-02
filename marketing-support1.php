<!doctype html>
<html lang="en" class="no-js">
<?php include "head.php"; ?>
<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<!-- hijacking: on/off - animation: none/scaleDown/rotate/gallery/catch/opacity/fixed/parallax -->
<style>
    .cd-section:nth-of-type(2)>div{
        background: #58ac19;
        background: -moz-linear-gradient(-45deg, #58ac19 0%, #406028 0%, #58ac19 29%, #406028 100%);
        background: -webkit-linear-gradient(-45deg, #58ac19 0%, #406028 0%, #58ac19 29%, #406028 100%);
        background: linear-gradient(135deg, #58ac19 0%, #406028 0%, #58ac19 29%, #406028 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#58ac19', endColorstr='#406028', GradientType=1);
    }
    .cd-section:nth-of-type(3)>div {
        background: #0da7a5;
        background: -moz-linear-gradient(-45deg, #0da7a5 1%, #12ccc9 16%, #0da7a5 38%, #0da7a5 85%, #12ccc9 100%);
        background: -webkit-linear-gradient(-45deg, #0da7a5 1%, #12ccc9 16%, #0da7a5 38%, #0da7a5 85%, #12ccc9 100%);
        background: linear-gradient(135deg, #0da7a5 1%, #12ccc9 16%, #0da7a5 38%, #0da7a5 85%, #12ccc9 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#0da7a5', endColorstr='#12ccc9', GradientType=1);
    }
    .cd-section:nth-of-type(4)>div{
        background: #cb60b3;
        background: -moz-linear-gradient(-45deg, #cb60b3 0%, #ad1283 50%, #de47ac 100%);
        background: -webkit-linear-gradient(-45deg, #cb60b3 0%, #ad1283 50%, #de47ac 100%);
        background: linear-gradient(135deg, #cb60b3 0%, #ad1283 50%, #de47ac 100%);
        filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#cb60b3', endColorstr='#de47ac', GradientType=1);
    }
</style>
<body data-hijacking="on" data-animation="rotate" >
	<?php include "nav.php"; ?>
	<section class="cd-section visible ">
		<div class="content--fixed">              
            <div class="container">
            <img src="img/erfolg.svg" class="img-responsive brand-logo"> 
				<div class="row">
					<div class="col-lg-12 text-center ms-head">
                        <center>
                            <img src="img/new/marketing-support-2.svg" class="img-responsive ms-head_image">
                        </center>
                        <h1 class="text-center color-white huge-font" >Is your marketing team constraint for time and <br><strong> missing deadlines? </strong></h1>
                       
                    </div>
                    <h2></h2>
				</div>
				<!-- /.row -->
			</div>  
		
		</div>
	</section>

	<section class="cd-section">
		<div>
            <div class="container ms-head">               
                <div class="col-md-6">
                    <h1 class="content__title color-white h2">Roles</h1>
                    <br>
                    <p class="desc color-white align-left">
                        A Marketing role today involves a myriad of responsibilities to be undertaken – brand building, undertaking research for product placement& feedback, maintaining connect with customers, undertaking activities towards customer retention, running incentive programs, contests, channel development, communicating key developments to customers & prospects, etc. 
                    </p>
                    <br>
                    <p class="desc color-white align-left">
                        The activities could be implemented as individual tactics or could be part of a sustained program but in either form involves various steps & can are resource intensive.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="img/new/plant1.svg" class="img-responsive">
                </div>     
                <h2></h2>               
            </div>
		</div>
    </section>
    

	<section class="cd-section">
		<div>
            <div class="container ms-head">
                <div class="col-md-8">
                    <h1 class="content__title  color-white h2">We Adapt</h1>
                    <br>
                    <p class="desc color-white  align-left">The Projects Team at Erfolg understands the various nuances of marketing requirements as it comprises of diverse experienced members with the ability to adapt quickly. The team is resourceful in executing varied tasks and being dynamic, goes the extra step to pick up the necessary skills in quick time to be able to execute the tasks at hand. </p>
                    <br>
                    <p class="desc color-white  align-left">A very valuable support team for any marketing manager as they have prior experience of having implemented tasks like Set-up & Managing Inbound Helpdesks / Customer Care Desks, Direct Mailing (offline / online), Planning for and managing various customer / partner relationship initiatives likes Customer retainer programs, customer relations campaigns, incentive programs, channel rewards programs, contest schemes, product promotions, setting-up & executing market surveys, undertaking feedback & review surveys, research initiatives, Inventory Management / Event & Promotions Brochure & Give-a-ways Management, etc.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/new/plant2.svg" class="img-responsive"> 
                </div>
                <h2></h2>
            </div>
		</div>
    </section>
    <section class="cd-section">
        <div>
            <div class="container ms-head">
                <div class="col-md-6">
                    <h1 class="line-height color-white  align-left h2">The Projects team at <i>Erfolg</i> is also strengthened by the presence of campaign planners &amp; analysts. </h1>
                    <br>
                    <h3 class="line-height color-white  align-left">We understand the briefs, chart out the project plan, identify the various elements for the campaign, define timelines, select the best medium, define work-flows, train the resources, track the campaign results, undertake campaign analysis at mid-way stages, undertake report creation, etc.</h3>
                </div>
                <div class="col-md-6">                    
                    <img src="img/new/plant3.svg" class="img-responsive">          
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

	<!-- <section class="cd-section">
		<div>
			
			<h2></h2>
		</div>
	</section> -->

	<nav>
		<ul class="cd-vertical-nav">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	</nav> <!-- .cd-vertical-nav -->
	<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">    
        <!-- Modal content-->
            <div class="modal-content">
                
                <hr class="colorgraph">
                <div class="modal-body">
                    <form action="" method="post">
                       
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
                        
                    </form>
                </div>
                <hr class="colorgraph">
             
            </div>      
        </div>
    </div> 

    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false">
		<!-- Because of Firefox. -->
		<defs>
			<radialGradient id="gradient">
				<stop offset="0" stop-color="#0868BB" />
				<stop offset="0.25" stop-color="#0075D8" />
				<stop offset="0.35" stop-color="#0868BB" />
				<stop offset="0.50" stop-color="#0075D8" />
				<stop offset="0.60" stop-color="#0868BB" />
				<stop offset="0.85" stop-color="#0075D8" />
				<stop offset="1" stop-color="#0868BB" />
			</radialGradient>
		</defs>
		<symbol id="ripply-scott" viewBox="0 0 100 100">
			<circle id="ripple-shape" fill="url(#gradient)" cx="1" cy="1" r="1" />
		</symbol>
	</svg>
<?php include "script.php"; ?>
<script>
	$(document).ready(function(){
		$(".services-close").on('click', function(){
			$("div.panel").hide( "slide", { direction: "left"  }, 500);
		})
	})
</script>
<!--form inputs-->
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
</body>
</html>