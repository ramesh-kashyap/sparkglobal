   <!--**********************************
            Content body start
        ***********************************-->
   <div class="content-body">
       <div class="container-fluid">
           <div class="row page-titles">
               <ol class="breadcrumb">
                   <li class="breadcrumb-item active"><a href="javascript:void(0)">User Management</a></li>
                   <li class="breadcrumb-item"><a href="javascript:void(0)">User Activation</a></li>
               </ol>
           </div>
           <!-- row -->
           <div class="row">


               <div class="col-xl-6 col-lg-12">
                   <div class="card">
                       <div class="card-header">
                           <h4 class="card-title">User Activation</h4>
                       </div>
                       <div class="card-body">
                           <div class="basic-form">
                               <form action="{{ route('admin.activate_admin_post') }}" method="POST">
                                {{ csrf_field() }}
                                   <div class="row">
                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">Enter Amount</label>
                                        
                                                   
                                                    <select name="amount" id="" class="form-control"  required>

																<option value="100">100 {{generalDetail()->cur_text}}</option>
																<option value="250">250 {{generalDetail()->cur_text}}</option>
																<option value="500">500 {{generalDetail()->cur_text}}</option>
																<option value="501">501 {{generalDetail()->cur_text}}</option>
																<option value="750">750 {{generalDetail()->cur_text}}</option>
																<option value="1000">1000 {{generalDetail()->cur_text}}</option>
																<option value="1001">1001 {{generalDetail()->cur_text}}</option>
																<option value="2500">2500 {{generalDetail()->cur_text}}</option>
																<option value="5000">5000 {{generalDetail()->cur_text}}</option>
																<option value="5001">5001 {{generalDetail()->cur_text}}</option>
																<option value="10000">10000 {{generalDetail()->cur_text}}</option>
																<option value="15000">15000 {{generalDetail()->cur_text}}</option>
																<option value="15001">15001 {{generalDetail()->cur_text}}</option>
																<option value="30000">30000 {{generalDetail()->cur_text}}</option>
																<option value="45000">45000 {{generalDetail()->cur_text}}</option>
																</select>
                                                                
                                       </div>

                                       <div class="mb-3 col-md-12">
                                           <label class="form-label">UserID</label>
                                           <input placeholder="Enter UserID" class="form-control check_sponsor_exist" type="text" data-response="sponsor_res" name="memberID"
                                               value="" >
                                               
                                               <span id="sponsor_res"></span>
                                       </div> 
                                       
                                      
                                       
                                   </div>

                                   <div class="mb-3">
                                       <div class="form-check">
                                           <input class="form-check-input" type="checkbox">
                                           <label class="form-check-label">
                                               Check me out
                                           </label>
                                       </div>
                                   </div>
                                   <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>




           </div>
       </div>
   </div>
   
     <script src="https://code.jquery.com//jquery-3.3.1.min.js"></script>
             <script>
                 function amtValue() {
                     var amt = document.getElementById('PACKAGE_AMT').value;
                     if (amt % 100 == 0) {
                         return true;
                     } else {
                         alert('Please enter valid amount Multiple of $ 100  ');
                         return false;
                     }
                 }
         
         
         
                 $('.check_sponsor_exist').keyup(function(e) {
                     var ths = $(this);
                     var res_area = $(ths).attr('data-response');
                     var sponsor = $(this).val();
                     // alert(sponsor); 
                     $.ajax({
                         type: "POST"
                         , url: "{{ route('getUserName') }}"
                         , data: {
                             "user_id": sponsor
                             , "_token": "{{ csrf_token() }}"
                         , }
                         , success: function(response) {
                             // alert(response);      
                             if (response != 1) {
                                 // alert("hh");
                                 $(".submit-btn").prop("disabled", false);
                                 $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                                     .css('margin-buttom', '10px');
                             } else {
                                 // alert("hi");
                                 $(".submit-btn").prop("disabled", true);
                                 $('#' + res_area).html("User Not exists!").css('color', 'red').css(
                                     'margin-buttom', '10px');
                             }
                         }
                     });
                 });


                 $('.check_amount').keyup(function(e) {
                     var ths = $(this);
                     var res_area = $(ths).attr('data-response');
                     var amt = $(this).val();
                     if (amt % 100 == 0) 
                     {
                        $('#' + res_area).html("");
                        $(".submit-btn").prop("disabled", false);
                     }
                     else{
                        $(".submit-btn").prop("disabled", true);
                        $('#' + res_area).html("Please enter valid amount Multiple of $ 100!").css('color', 'red').css(
                                     'margin-buttom', '10px');
                     }
                     
                   
                    });
         
             </script>
         
   <!--**********************************
            Content body end
        ***********************************-->
