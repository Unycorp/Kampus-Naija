            <!-- Begin Header Area -->
            <header class="li-header-4">
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-sm-8">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="tel:+234 08022281424"> <i class="fa fa-whatsapp" style="color: white"> (+234) 8022281424 ||</i></a><a href="tel:+234 8135868647"> <i class="fa fa-phone-square" style="color: white"> +234 8135868647</i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-sm-4">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div>
                                                <span style="color: darkorange" onclick="butSignIn()">WELCOME TO CHEERFLEXX.COM</span>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.html">
                                        <img src="images/icons/cheerflex2.png" alt="" style="width: 100px; margin-top:-40px; height:80px;">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <div class="hm-searchbox">
                                    <select class="nice-select select-search-category" id="cat_select" onclick="mySelect()">
                                                        <option selected value="-1">We offer</option>
                                                        <option value="android">Android Phones</option>
                                                        <option value="infinix">Infinix</option>
                                                        <option value="samsung">Samsung</option>
                                                        <option value="tecno">Tecno</option>
                                                        <option value="gionee">Gionee</option>
                                                        <option value="itel">Itel</option>
                                                        <option value="huawei">Huawei</option>
                                                        <option value="nokia">Nokia</option>

                                                        <option value="apple">Apple Phones</option>
                                                        <option value="iphone">Iphones</option>

                                                        <option value="java">Java Phones</option>

                                                        <option value="powerbanks">Power Bank</option>
                                                        <option value="charger">Charger</option>
                                                        <option value="memorycard">Memory Card</option>
                                                        <option value="flashdrive">Flash Drive</option>
                                                        <option value="airpod">Airpods</option>
                                                        <option value="fastchargeusb">Fast Charge USB</option>
                                                        <option value="phonepouch">Phone Pouch</option>
                                                        <option value="screenguard">Screen Guard</option>
                                                        <option value="earphone">Ear Phones</option>
                                                        <option value="headset">Headsets</option>
                                                        <option value="cases">Cases</option>
                                                        <option value="battery">Battery</option>
                                                        

                                                        <option value="tablet">Tablets</option>
                                                        <option value="desktop">Desktop</option>
                                                        <option value="laptop">Laptop</option>
                                                        <option value="nokia">Nokia</option>
                                                        <option value="gionee">Gionee</option>
                                                        <option value="tecno">Tecno</option>
                                                        
                                                        <option value="computer">Computer</option>
                                                        <option value="apple">Apple Computer</option>
                                                        <option value="hp">HP</option>
                                                        <option value="dell">Dell</option>
                                                        <option value="toshiba">Toshiba</option>
                                                        <option value="samsung">Samsung Computers</option>
                                                        <option value="sony">Sony</option>
                                                        
                                                        <option value="acer">Acer</option>
                                                        <option value="asus">Asus</option>
                                                        <option value="lenovo">lenovo</option>
                                                        <option value="lg">LG</option>
                                                        
                                                        <option value="bluetoothspeaker">Bluetooth Speakers</option>
                                                        <option value="smartwatches">Smart Watches</option>

                                                        <option value="others">Others</option>
                                    </select>
                                    <script type="text/javascript">
                                          function mySelect(){
      var select = document.getElementById("cat_select").value;

      if(select=="android"){
        alert("yes");
      }
    }
                                    </script>

                                    <input type="text" id="search" placeholder="Enter your search key ... e.g power bank">
                                    <button class="li-btn" onclick="butSearch()" style="background: darkorange"><i class="fa fa-search"></i></button>
                                </div>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">   
                                     <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">SignIn
                                                    <span class="cart-item-count" style="background: black; color: white">Adm</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <ul class="minicart-product-list">
                                                    <li>
                                                        <a href="single-product.html" class="minicart-product-image">
                                                            <img src="images/advert/yes7.jpg" alt="cart products">
                                                        </a>
                                                        <div class="minicart-product-details">
                                                            <h6><a href="signin">Admin only</a></h6>
                                                            <span>Sign In</span>
                                                        </div>
                                                        <button class="close">
                                                            <i class="fa fa-close"></i>
                                                        </button>
                                                    </li>
                                                   
                                                </ul>
                                                
                                            </div>
                                        </li>
                                 Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li><a href="#"><b onclick="home()" id="home">Home</b></a>
                                           </li>
                                           <li class="megamenu-holder"><a href="search.php?q=phone">Phones</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="search.php?q=android">Android</a>
                                                    <!--
                                                       <ul>
                                                           <li><a href="search.php?q=infinix">Infinix</a></li>
                                                           <li><a href="search.php?q=tecno">Tecno</a></li>
                                                           <li><a href="search.php?q=gionee">Gionee</a></li>
                                                           <li><a href="search.php?q=samsung">Samsung</a></li>
                                                           <li><a href="search.php?q=itel">Itel</a></li>
                                                           <li><a href="search.php?q=huawei">Huawei</a></li>
                                                           <li><a href="search.php?q=nokia">Nokia</a></li>                                                        
                                                       </ul>
                                                     -->
                                                   </li>
                                                   <li><a href="search.php?q=apple">Apple</a>
                                                    <!--
                                                       <ul>
                                                           <li><a href="search.php?q=iphone">Iphones</a></li>
                                                           
                                                       </ul>
                                                     -->
                                                   </li>
                                                   <li><a href="search.php?q=java">Java</a>
                                                    <!--
                                                       <ul>
                                                           <li><a href="search.php?q=tecno">Tecno</a></li>
                                                            <li><a href="search.php?q=itel">Itel</a></li>
                                                           <li><a href="search.php?q=nokia">Nokia</a></li>
                                                            <li><a href="search.php?q=samsung">Samsung</a></li>
                                                       </ul>
                                                     -->
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class="dropdown-holder"><a href="search.php?q=phone">Phones Accessories</a>
                                               <ul class="hb-dropdown">
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=powerbank">Power Bank</a>
                                                      
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=charger">Charger</a>
                                                       
                                                   </li>

                                                    <li class="sub-dropdown-holder"><a href="search.php?q=memorycard">Memory Card</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=flashdrive">Flash Drive</a>
                                                       
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=airpod">AirPods</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=fastchargeusb">Fast Charge USB</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=phonepouch">Phone Pouch</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=screenguard">Screen Guard</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=earphones">Ear Phones</a>
                                                       
                                                   </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=headset">Headsets</a>

                                                    </li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=cases">Cases</a></li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=battery">Battery</a></li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=smartwatches">Smart Watches</a></li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=bluetoothspeaker">Bluetooth Speaker</a></li>
                                                    <li class="sub-dropdown-holder"><a href="search.php?q=others">Others</a></li>
                                               </ul>
                                           </li>
                                           <li class="megamenu-static-holder"><a href="search.php?q=computer">Computers and Accessories</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="search.php?q=hp">HP</a>
                                                       <ul>
                                                           <li><b><a href="search.php?q=apple">Apple</a></b></li>
                                                           
                                                       </ul>
                                                   </li>
                                                   <li><a href="search.php?q=dell">DELL</a>
                                                    <ul>
                                                           <li><b><a href="search.php?q=toshiba">Toshiba</a></b></li>
                                                           
                                                       </ul>
                                                      
                                                   </li>
                                                   <li><a href="search.php?q=samsung">Samsung</a>
                                                    <ul>
                                                           <li><b><a href="search.php?q=sony">Sony</a></b></li>
                                                           
                                                       </ul>
                                                       
                                                   </li>
                                                   <li><a href="search.php?q=acer">Acer</a>
                                                       <ul>
                                                           <li><b><a href="search.php?q=asus">ASUS</a></b></li>
                                                           
                                                       </ul>
                                                   </li>
                                                   <li><a href="search.php?q=lenovo">Lenovo</a>
                                                    <ul>
                                                           <li><b><a href="search.php?q=lg">LG</a></b></li>
                                                           
                                                       </ul>
                                                       
                                                   </li>
                                                   
                                               </ul>
                                           </li>
                                          <li class="dropdown-holder"><a href="search.php?q=clothing">Clothing</a>
                                               <ul class="hb-dropdown">
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=tshirt">T-shirt</a>
                                                      
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=top">Tops</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=skirt">Skirt</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=gown">Gown</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=shoe">Shoes</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=bag">Bags</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=hair">Hair</a>
                                                   </li>
                                                   <li class="sub-dropdown-holder"><a href="search.php?q=boxer">Boxers</a>
                                                   </li>
                                              </ul>
                                          </li>
                                          <li><a href="search.php?q=food">Food</a>

                                          </li>
                                           <li><a href="#" data-toggle="modal" data-target="#repairs">Repairs</a></li>
                                       </ul>
                                   </nav>
                               </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                          <div style="margin-top: -50px;">
                            <h5 style="color: white;">View Category <i class="fa fa-arrow-right" style="width: 100px"></i></h5>
                          </div>
                            <div class="mobile-menu">
                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>
            <!-- Header Area End Here -->

<script type="text/javascript">

    document.getElementById("home").style.cursor = "pointer";
    function home(){
        window.location.href = "index.php";
    }

    function butSearch(){
      var search = document.getElementById("search").value;
      window.location.href = "search.php?q="+search;
    }
    function butSignIn(){
      window.location.href = "signin/";
    }
</script>
