<section id="main-content">
         <section class="wrapper site-min-height">
           <h3><i class="fa fa-angle-right"></i> Create Event</h3>
             <div class="col-lg-12">
                   <div class="wizard">


<!--                        <form >-->
                                   <form  method="post" action="controller/event-create.php">
                           <div class="tab-content">

                           <!--  ************** EVENT DETAIL ************** -->
                               <div class="tab-pane active" role="tabpanel" id="step1">
                                  <center><h3>Event Detail</h3></center>
                                       <div class="form-group">
                                           <div class="row marginField">
                                             <label class="col-sm-2 col-sm-2 control-label">Event Name</label>
                                             <div class="col-sm-10">
                                                 <input type="text" name="event_name" class="form-control">
                                             </div>
                                           </div>

                                           <div class="row marginField">
                                             <label class="col-sm-2 col-sm-2 control-label">Event Description</label>
                                             <div class="col-sm-10">
                                                 <input type="text" name="event_description" class="form-control">
                                             </div>
                                           </div>

                                           <div class="row marginField">
                                             <label class="col-sm-2 col-sm-2 control-label">Date</label>
                                             <div class="col-sm-10">
                                                 <input type="date" name="event_date" class="form-control">
                                             </div>
                                           </div>

                                           <div class="row marginField">
                                             <label class="col-sm-2 col-sm-2 control-label">Venue</label>
                                             <div class="col-sm-10">
                                                 <input type="text" name="event_venue" class="form-control">
                                             </div>
                                           </div>
                                           <div class="row marginField">
                                             <label class="col-sm-2 col-sm-2 control-label">City</label>
                                             <div class="col-sm-10">
                                                 <input type="text" name="event_city" class="form-control">
                                                 <input type="hidden"class="form-control"name="username" value="">

                                             </div>
                                           </div>
                                       </div>
                                   <ul class="list-inline pull-right">
                                       <button type="submit" class="btn btn-primary">Create</button>

                                   </ul>
<!--                                    </form>-->
                               </div>
                               </form>
                                     </div>
                               </div>
                               <div class="clearfix"></div>
                           </div>
                   </div>
             </div>

   </section>

 <script type="text/javascript">
     function setActiveTab(id){
       if(id== 'div1'){
           document.getElementById(id).setAttribute("class","active");
           document.getElementById("div2").setAttribute("class","disabled");
           document.getElementById("div3").setAttribute("class","disabled");
           document.getElementById("div4").setAttribute("class","disabled");

           document.getElementById("step1").setAttribute("class","tab-pane active");
           document.getElementById("step2").setAttribute("class","tab-pane");
           document.getElementById("step3").setAttribute("class","tab-pane");
           document.getElementById("complete").setAttribute("class","tab-pane");



       }
       else if(id== 'div2'){

           document.getElementById(id).setAttribute("class","active");
           document.getElementById("div1").setAttribute("class","disabled");
           document.getElementById("div3").setAttribute("class","disabled");
           document.getElementById("div4").setAttribute("class","disabled");


           document.getElementById("step1").setAttribute("class","tab-pane");
           document.getElementById("step2").setAttribute("class","tab-pane active");
           document.getElementById("step3").setAttribute("class","tab-pane");
           document.getElementById("complete").setAttribute("class","tab-pane");
       }
       else if(id== 'div3'){
           document.getElementById(id).setAttribute("class","active");
           document.getElementById("div2").setAttribute("class","disabled");
           document.getElementById("div1").setAttribute("class","disabled");
           document.getElementById("div4").setAttribute("class","disabled");


           document.getElementById("step1").setAttribute("class","tab-pane");
           document.getElementById("step2").setAttribute("class","tab-pane");
           document.getElementById("step3").setAttribute("class","tab-pane active");
           document.getElementById("complete").setAttribute("class","tab-pane");
       }
       else if(id== 'div4'){
            document.getElementById(id).setAttribute("class","active");
           document.getElementById("div2").setAttribute("class","disabled");
           document.getElementById("div1").setAttribute("class","disabled");
           document.getElementById("div3").setAttribute("class","disabled");


           document.getElementById("step1").setAttribute("class","tab-pane");
           document.getElementById("step2").setAttribute("class","tab-pane");
           document.getElementById("step3").setAttribute("class","tab-pane");
           document.getElementById("complete").setAttribute("class","tab-pane active");
       }
     }

       var counter = 1;
       var limit = 10;
       function addInput(divName){
            if (counter == limit)  {
                 alert("You have reached the limit of adding " + counter + " inputs");
            }
            else {
                 var newdiv = document.createElement('div');
                 newdiv.innerHTML = " <div class='row marginField'>"
                             +"<div class='col-sm-2 col-sm-2 control-label'></div>  "
                               +"<label class='col-sm-10'><b>Division "+ (counter + 1)+" </b></label> "
                               + " </div><div class='row marginField'><label class='col-sm-2 col-sm-2 control-label'>Division Name</label>"
                             +"<div class='col-sm-10'>"
                             +"<input type='text' class='form-control' name='division_name"+ (counter + 1)+"'>"
                             +"</div></div>"
                             +"<div class='row marginField'> <label class='col-sm-2 col-sm-2 control-label'>Description</label>"
                             +"<div class='col-sm-10'>"
                             +"<input type='text' class='form-control' name='division_description"+ (counter + 1)+"'>"
                             +"</div></div>";
                 document.getElementById(divName).appendChild(newdiv);
                 counter++;
            }
       }

       function addInputProposal(divName){
            if (counter == limit)  {
                 alert("You have reached the limit of adding " + counter + " inputs");
            }
            else {
                 var newdiv = document.createElement('div');
                 newdiv.innerHTML = " <div class='row marginField'>"
                             +"<div class='col-sm-2 col-sm-2 control-label'></div>  "
                               +"<label class='col-sm-10'><b>Field "+ (counter + 1)+" </b></label> "
                               + " </div><div class='row marginField'><label class='col-sm-2 col-sm-2 control-label'>Field Name</label>"
                             +"<div class='col-sm-10'>"
                             +"<input type='text' class='form-control'name='proposal_field_name"+ (counter + 1)+"'>"
                             +"</div></div>"
                             +"<div class='row marginField'> <label class='col-sm-2 col-sm-2 control-label'>Description</label>"
                             +"<div class='col-sm-10'>"
                             +"<input type='text' class='form-control'name='proposal_field"+ (counter + 1)+"_description'>"
                             +"</div></div>";
                 document.getElementById(divName).appendChild(newdiv);
                 counter++;
            }
       }
       /*var counterLampiran = 1;
       var limitLampiran = 10;
       function addLampiran(divName){
            if (counterLampiran == limitLampiran)  {
                 alert("You have reached the limit of adding " + counterLampiran + " inputs");
            }
            else {
                 var newdiv = document.createElement('div');
                 newdiv.innerHTML =  "<div class='row marginField' id='dynamicLampiran'>"
                                     +"<input type='file' class='form-control'>"
                                     +"</div>";
                 document.getElementById(divName).appendChild(newdiv);
                 counter++;
            }
       }*/
 </script>

 <script type="application/javascript">
       $(document).ready(function () {
           $("#date-popover").popover({html: true, trigger: "manual"});
           $("#date-popover").hide();
           $("#date-popover").click(function (e) {
               $(this).hide();
           });

           $("#my-calendar").zabuto_calendar({
               action: function () {
                   return myDateFunction(this.id, false);
               },
               action_nav: function () {
                   return myNavFunction(this.id);
               },
               ajax: {
                   url: "show_data.php?action=1",
                   modal: true
               },
               legend: [
                   {type: "text", label: "Special event", badge: "00"},
                   {type: "block", label: "Regular event", }
               ]
           });
       });


       function myNavFunction(id) {
           $("#date-popover").hide();
           var nav = $("#" + id).data("navigation");
           var to = $("#" + id).data("to");
           console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
       }
   </script>
