<div id="main_header" style="display: none;">
  <div class="" >
    <!-- f8d6d6 -->
    <div class="w3-top " style="background-color: #7645d9;">
      <div class="w3-display-container  " style="min-height:60px">
        <img src="images/icon.png" class="w3-display-left pl-4" style="height:40px;width: min-content;">
       
        <div class="w3-display-middle p-3 w3-large  ">
          <a class="menu_list">All Tickets</a>
          <a class="menu_list">Brand Tickets</a>
          <a class="menu_list">Reseller Tickets</a>
        </div>
     
        
        <div class="w3-display-right p-3 w3-large  " >
          <button class="btn btn-warning">  <span class="ti-wallet  " style="font-weight: 400;"></span> <span style="font-weight: 400;">Connect Wallet</span> </button>
        </div>
      </div>
    
       
      
    </div>
     
  </div>
  
   
  
  <div class="" id="slide_menu_parent" style="position:fixed;top: 0;right: 0;left: 0;bottom: 0;z-index: 10000; display:none">
    <div class="row" style="height: 100%;position: relative;z-index: 100;" >
      <div class="col-10  animated slideInLeft faster p-0" id="slide_menu" style="background-color: #fff;">
        
        <div class="  mb-3 " style="color: #fff; background-color: #ed1c24;padding: 16px 15px;">
          <span class="ti-angle-left  " style="position: absolute;  margin-top: 20px; margin-left: 15px;" onclick="window.history.back();"></span>
          
          <div class="w3-display-container " onclick="show_user_profile()" id="theuser_logo" style="border-radius: 100%;height: 50px;width: 50px;display: inline-block;background-color: #fff;color: #ed1c24; margin-left:50px">
            
            <span class="ti-user w3-xlarge  w3-display-middle" ></span>
            
          </div>
          <span class="  font-weight-bold" style="position: absolute; margin-top: 15px; margin-left: 13px;" onclick="show_user_profile()" id="theuser_name" > Your Account </span>
          
        </div>
        
        <div class="pl-4 p-3 menu_list" onclick="window.history.back();load_app();">
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-large  ti-home"></span> Home</span>
        </div>
        <div class="pl-4 p-3 menu_list" onclick="show_user_profile()">
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-large  ti-user"></span> Profile</span>
        </div>
        
        <div class="pl-4 p-3 menu_list"    onclick="load_page('add_topic','back_header',2)">
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-xlarge  ti-tag"></span>Manage Topics</span>
        </div>
        
        
        
        <hr style="width: 100%;border-color: #eee;"> 
        <div class="pl-4 p-3 menu_list" onclick="load_page('favourite','back_header');">
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-xlarge  ti-star"></span>Favourites</span>
        </div>
        
        <div class="pl-4 p-3 menu_list" onclick="window.history.back();location.href='mailto:info@thewillnigeria.com?subject=FEEDBACK'">
          
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-large  ti-comment-alt"></span> Feedback</span>
          
        </div>
        
        <hr style="width: 100%;border-color: #eee;"> 
        
        <div class="pl-4 p-3 menu_list" onclick="load_page('settings','back_header')">
          <span class="text-danger font-weight-bold ml-4"> <span class="mr-4 w3-large  ti-settings"></span> Settings</span>
        </div>
        
      </div>
      <div class="col-2  "  onclick="PRESSED=0; go_back()">
        
      </div>
    </div> 
    <div  class="animated faster" style="background:#0808015c;position: absolute;height: 100%;z-index: 50;width: 100%;top:0px"  id="slide_menu_toucher"></div> 
  </div>
  
</div>

<div id="bannner" class="" style="background-color: #844df4;height: 400px;;">

</div>