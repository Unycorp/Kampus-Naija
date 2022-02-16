
       <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="productModal" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" id="view_id">
                        
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->



                   <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="repairs" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        <div class="row">
                          <div class="col-sm-3"></div>
                            <div class="col-sm-6" style="background: #fff; padding: 20px; -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); margin: 20px;">

                            <div style="text-align: center;">
                                <h4>Repair of phones and computers</h4>
                             <div class="product-desc">
                                <p style="text-align: justify;">
                                 <span>At Cheerflex devices, we offer repairs to your phones and computer devices.
                                    Fill out the form below and we shall come to pick up the device. Moreover, you can work into
                                    any of our branches to get your devices fix.
                                 </span>
                                </p>
                            </div>
                              
                              <div class="form-group">
                                <label><b>Name</b> e.g John Dow</label>
                                <input type="text" placeholder="Full Name" class="form-control"
                                style="border-color: #010028" id="rname">
                              </div>

                               <div class="form-group">
                                <label><b>Pick up Address</b> e.g 59 Barrack Obama Estate, Abuja, Nigeria</label>
                                <textarea class="form-control" id="rpaddress"></textarea>
                              </div>

                               <div class="form-group">
                                <label><b>Delivery Address</b> e.g 59 Barrack Obama Estate, Abuja, Nigeria</label>
                                <textarea class="form-control" id="rdaddress"></textarea>
                               </div>

                                <div class="form-group">
                                <label><b>Device Model </b>e.g Infinix tab hot pro 9</label>
                                <input type="text" placeholder="My Device Model" class="form-control"
                                style="border-color: #010028" id="rmodel">
                                </div>

                                <div class="form-group">
                                <label><b>Problem Description</b>e.g My phone does not have network</label>
                                <textarea class="form-control" id="rproblem" rows="10" cols="20"></textarea>
                                </div>


                                <div class="form-group">
                                <label><b>Phone Numer</b> e.g 090XXXXXXXX</label>
                                <input type="text" placeholder="My Reachable Phone Number" class="form-control" style="border-color: #010028" id="rphone">
                                </div>

                                <div class="form-group">
                            <div class="product-desc">
                                <p style="text-align: justify;">
                                 <span>Save the below code in your devices or screen shot it or write it down on your note book.
                                 This code is very important and will be used for reference and security purpose. 
                                 </span>
                                </p>
                            </div>
                                    <h4><?php echo uniqid(); ?></h4>
                                </div>
                            </div>
                            <div class="form-group" style="text-align: center;">
                               <button style="
                               background:#010028; 
                               color:white; 
                               border-radius: 5px; 
                               border: none;
                               font-size: 14px;
                               position: relative;
                               cursor: pointer;
                               font-weight: 500;
                               text-transform: capitalize;
                               padding: 13px 70px;
                               transition: all 0.3s ease-in-out;
                               " onclick="butRepair()">Make Request</button>
                            </div>
                             <div class="col-sm-3"></div>
                            </div>
                        </div>

                           </div> 
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
            <script type="text/javascript">
                            function butRepair(){

              var rname = document.getElementById("rname").value;
              var rpadd = document.getElementById("rpaddress").value;
              var rdadd = document.getElementById("rdaddress").value;
              var rmodel = document.getElementById("rmodel").value;
              var rphone = document.getElementById("rphone").value;
              var rproblem = document.getElementById("rproblem").value;


if(rname.length < 2){
alert("Please input your full name");
}
else if(!/^[A-Za-z.,' ]+$/.test(rname)){
        alert("Name should contain characters only");
      }
else if(rpadd.length < 5){
alert("Please input your complete address");
}
else if(!/^[A-Za-z0-9,"".'':;_+-/*&@# ]+$/.test(rpadd)){
    alert("Pick-up adress should not contain special characters such as !, $, ^, (), {}, [], |, ?, <>, ~, =, ");
  }
else if(rdadd.length < 5){
alert("Please input your complete address for the delivery");
}
else if(!/^[A-Za-z0-9,"".'':;_+-/*&@# ]+$/.test(rdadd)){
    alert("Delivery adress should not contain special characters such as !, $, ^, (), {}, [], |, ?, <>, ~, =, ");
  }
else if(rmodel.length < 2){
alert("Please give a good model description");
}
else if(rphone.length < 10){
alert("Please input your correct phone number");
}
else if(!/^[0-9+ ]+$/.test(rphone)){
    alert("Phone should contain only numbers");
}
else if(rproblem.length < 10){
alert("Please expantiate on the prolem in details");
}
else if(!/^[A-Za-z0-9,"".'':;_+-/*&@# ]+$/.test(rproblem)){
    alert("Description of phone problems should not contain special characters such as !, $, ^, (), {}, [], |, ?, <>, ~, =, ");
  }
else{
              var data = new FormData();
              var ajax = new XMLHttpRequest();

              data.append("rname",rname);
              data.append("rpaddress",rpadd);
              data.append("rdaddress",rdadd);
              data.append("rmodel",rmodel);
              data.append("rphone",rphone);
              data.append("rproblem",rproblem);

              ajax.onreadystatechange = function() {
              if (ajax.readyState == 4 && ajax.status == 200) {
              var result = ajax.responseText;
              if(result){
                var v = confirm("Request sent successfully");
                if(v){
                  alert("Thank you. We hope you have a lovely time");
                }
              }
              else{
                confirm("Sorry, unable to sent. Please contact service administrator for possible solution");
              }
             }
        }

              ajax.open("post", "AI.php", true);
              ajax.send(data);
}
}
            </script>
                    <!-- Modal -->
        <div class="modal fade" id="shopNowModal" style="padding-top: 80px;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #010028">
                       <img src="images/icons/cheerflex.png" style="width: 150px; height: 50px">
                           <img src='images/icons/char_1.png' style='width: 35px;'>
                           <button data-dismiss="modal" aria-label="Close" class="btn btn-danger" style="width: 50px; height:30px; margin-left: 250px">
                          <span aria-hidden="true" style="color: #fff;">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                      <div class="container-fluid" style="background: url(images/advert/yes7.jpg)">

                      </div>

                    </div>
              </div>

               <div class="modal-header" style="background: #010028">
                
                  <button data-dismiss="modal" class="btn btn-primary" style="float: right">Close</button>
                
              </div>


            </div>
        </div>