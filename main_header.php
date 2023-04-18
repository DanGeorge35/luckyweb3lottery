<div id="main_header" style="display: none;">
<div class="" >
  <!-- f8d6d6 -->
      <div class="w3-top " style="background-color: #fff;">
            <div class="w3-display-container " style="min-height:90px">
                <a class="w3-display-left p-3 w3-large  " href="#view_menu" >
                  <span class="ti-menu  menu-icon"></span>
                </a>

                 <img src="images/icon.png" class="w3-display-middle" style="height:40px;width: min-content;">


               <a class="w3-display-right p-3 w3-large    menu-icon"  href="#view_search">
                  <span class="ti-search  menu-icon"></span>
                </a>
            </div>
            <div class=" side_nav bg-danger w3-display-container font-weight-bold  " style="height:45px; overflow-y: hidden;">
              <div class="w3-display-topleft    pr-5"  style="font-size: 14px;font-weight: 800;height:100%; overflow-x: scroll;scroll-behavior: smooth; white-space: nowrap;flex-wrap: nowrap;width: 100%;" id="news_menu_parent">
                <div id="news_menu"></div>
                <div id="news_menu2"></div>
                <div id="menu_indicator" class="w3-display-bottomleft " ></div>   
              </div>


                <!-- HEADER='back_header';open_page('add_topic') -->
            <!--     <span class="w3-display-right   pl-3 pr-3   bg-danger" onclick="load_page('add_topic','back_header',1)" style="padding: 16px;">
                  <div class=" text-center text-white w3-white rounded-circle p-1 w3-display-container" style="width: 24px; height: 24px;">  <span class="ti-plus  menu-icon w3-display-middle" style="font-size:13px"></span>
                  </div>
                </span> -->
              
            </div>

            
            <div class="w3-top  animated faster slideInRight" id="search_panel" style="z-index: 1000;display: none;" onclick="">
              <div class="w3-display-container search_panel_top"  style="min-height:90px;z-index: 2;">
                  <div class="w3-display-left p-3 w3-large  " style="width: 100%;">
                   <form  onsubmit="make_search( elem('search_input'), elem('search_output'));return false" >
                    <div class="input-group ">
                       <button class="btn btn-outline-secondary search_btn_cancle border-0" type="button"  style="" onclick="window.history.back();"> <span class="ti-arrow-left  menu-icon"></span></button>
                    
                    <input type="text" class="form-control search_input border-0"   id="search_input"   style="outline:0px" placeholder="Search..." aria-label="Recipient's username" aria-describedby="button-addon2">
                
                    <button class="btn btn-outline-secondary search_btn border-left-0"  onclick="make_search(elem('search_input'), elem('search_output'))" type="button" id="button-addon2" style=""> <span class="ti-search  menu-icon"></span></button>
                  </div>
                </form>
                  </div>
                  <input type="hidden" id='search_page' value="1">
              </div>
              <div class="search_panel_body  " style="" id="search_output"  onscroll="load_more_search(elem('search_input'), elem('search_output'))">
                
              </div>
             
          </div>

    </div>

    <div class="w3-light-grey head_partition" style="height:130px"></div>
</div>


<style type="text/css">
  #search_panel{
    
  }
  .search_panel_top{
    background-color: #e00000c4 !important ;
  }
  .search_panel_body{
    z-index: 2;
    height: 100vh;
    background-color: #000000ad !important ;
    border-radius: 0px 0px 20px 20px;
    overflow-y: auto;
    overflow-x: hidden;
    padding-bottom: 80px;
  }
  .search_input{

    border: none !important;
  }
  .search_input:focus{
    box-shadow: none !important;
  }
  .search_btn_cancle{
    border-radius:5px 0px 0px 5px;outline:0;
     background-color: white;
    color: #fff;
    border: none !important;
  }
  .search_btn{
    background-color: white;
    border-radius:0px 5px 5px 0px;outline:0;
    border: none !important;
    color: #fff;
  }
</style>


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