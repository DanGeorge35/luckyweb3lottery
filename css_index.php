<style type="text/css">

	/* fallback */
	@font-face {
		font-family: 'Material Icons';
		font-style: normal;
		font-weight: 400;
		src: url(https://fonts.gstatic.com/s/materialicons/v103/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2');
	}		

	.material-icons {
		font-family: 'Material Icons';
		font-weight: normal;
		font-style: normal;
		font-size: 24px;
		line-height: 1;
		letter-spacing: normal;
		text-transform: none;
		display: inline-block;
		white-space: nowrap;
		word-wrap: normal;
		direction: ltr;
		-webkit-font-smoothing: antialiased;
		-webkit-font-feature-settings: 'liga';
	}

	@font-face {	 
		font-family: 'Roboto';
	}
	body,html{
		min-height: 100%;
	}

	body,h1,h2,h3,h4,h5,h6,p,span,div,a,ul,li,b,span{font-family: 'Roboto', arial;}

	button, input, optgroup, select, textarea {
		font-family: 'Roboto' !important;
	}
	

	.roboto{
		font-family: "geomet" !important;
	}
	
	
	.ls_men.active, .ls_men:active{
		color: #fff !important;
		text-decoration: none  !important;
		background-color: #060606 !important;
	}

	
	.menu_list:hover{
		background-color: #eee;
	}

	a:hover{
		text-decoration: none !important;
	} 

	.spinner-grow {
		position: relative;
	}

	.text-danger{
		color: #ed1c24  !important;
	}

	.text-danger-light{
		color: #ed1c24 !important;
	}

	.menu-icon{
		font-weight: 800;
		color: #ed1c24  !important;
	}

	

	.btn-danger{
		border-radius: 5px;
		padding: 8px;
		background-color: #ed1c24 !important;
		padding-left: 30px;
		padding-right: 30px;
		border:none;
		font-size: 14px;
	}

	.bg-danger{
		background-color: #ed1c24 !important;
	}

	.w3-medium-text{
		font-size: 17px !important;
	}
	
	.w3-light-grey{
		background-color: #f5f5f5 !important
	}

	.noSelect {
		-webkit-user-select: none;  
		-moz-user-select: none;     
		-ms-user-select: none;      
	}

	.topic_list{
		margin-left: 3px;
		margin-left: 3px;
		margin-bottom: 20px;
	}
	
	.selected_topic{
		background-color: #ed1c24 !important;
		color: white  !important;
	}

	.dropdown-item:focus, .dropdown-item:hover {
		color: #fff !important;
		background-color: #060606 !important;
	}


	a{
		color: #ed1c24 !important;
	}

	#news_menu_parent {
		padding-left: 15px;
		padding-right: 15px;
		
	}

	


	#news_menu .active{
		/*background-color: #2606080f;*/
	}

	#news_menu2 .active{
		/*background-color: #2606080f;*/
	}


	#news_menu, #news_menu2{
		display: inline-block;
	}

	#menu_indicator{
		height: 2px;
		background-color: white;
		display: block;
		left: 5px;
		margin-top: 3px;
		transition: left .3s, width .3s;
	}
	
	.news_menu{
		color: white !important;
		padding-right: 20px;
		padding-left: 20px;
		padding-top: 11px;
		padding-bottom: 10px;
		display: inline-block;
	}



	.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
		background: #ed1c24 !important;
		padding: 0px 10px;
	}
	
	.owl-theme .owl-dots .owl-dot span {
		width: 8px;
		height: 8px;
		margin: 5px 4px;
	}

	.owl-carousel, .owl-carousel .owl-item {  
		position: initial  !important;
	}

	.owl-theme .owl-nav.disabled+.owl-dots {
		margin-top: -30px; 
		position: relative;
		text-align: center;
		width: 100%;
	}

	.owl-theme .owl-dots .owl-dot span {
		background: #fff !important;
	}

	.recent_post{
		height:90vw;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		z-index: 1;
		position: relative;
	}

	.recent_post_info{
		background-image:linear-gradient(#250c0c00, #000000db);
		padding-right: 20px;
		padding-left: 20px;
		padding-top: 20px;
		padding-bottom: 45px;
		font-size: 5vw;
	}

	.elips {
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
	}
	.elips_white{
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		color: white !important;
	}

	.user_avatar{
		color: white;
		font-weight: 700;
		position: absolute;
		margin-top: 15px;
		margin-left: 15px;
	}
	.favourite{
		text-shadow: 0px 0px 10px  #ffffff  !important;
		color: #ed1c24 !important;
	}

	.grid_post_info{
		padding-right: 20px;
		padding-left: 20px;
		border-radius: 0px 0px 5px 5px ;
		height: 115px;
		overflow: hidden;
	}

	.font_small{
		font-size: 2vw;
	}

	.side_nav::-webkit-scrollbar {
		display: none;
	}

	/* Hide scrollbar for IE, Edge and Firefox */
	.side_nav {
		-ms-overflow-style: none;  /* IE and Edge */
		scrollbar-width: none;  /* Firefox */
	}



	.grid_post {
		border-radius: 5px 5px 0px 0px;
		height: 187px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
	}

	.list_post{
		height:100px;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		z-index: 1;
		position: relative;
	}
	.list_post_info{
		background-image:linear-gradient(#250c0c00, #000000db);
		padding-right: 20px;
		padding-left: 20px;
		padding-top: 20px;
		padding-bottom: 45px;
	}
	.list_post_header{
		background: #ed1c24 !important; 
		margin-bottom: 10px;
		padding: 5px 20px;
		color: white;
		display: inline-block;
		position: relative;
	}

	.form-control{
		border-left: none !important;
		border-right: none !important;
		border-top: none !important;
		border-bottom:  2px solid #f44336 !important;
		border-radius: 0px;
		height: 45px;
	}
	#comment_input{
		padding: 5px 15px;height:60px;width:100%;outline: none;border-radius: 5px;
	}

	#comment_input:focus{

	}

	#screen{
		overflow-y: auto;
		overflow-x: hidden;
		height: 100vh;
		padding-bottom: 160px;
	}

	#load_page{
		overflow-y: auto;
		overflow-x: hidden;
		padding-bottom: 70px;
		z-index: 5 !important;
		top: 68px;
		left: 0px;
		right: 0px;
		margin-bottom: -40px;
		position: absolute;
		background-color: white;
		height: 100vh;
		transition: padding-bottom .3s, width .3s;
	}


	.checkmark {
		width: 23px;
		background-color: #fff;
		border-radius: 29%
	}


	.chk_container input:checked ~ .checkmark {
		background-color: #f44336;
	}

	input:checked + .slider {
		background-color: #ed1c24;
	}

	input:focus + .slider {
		box-shadow: 0 0 1px #ed1c24;
	}

	.loader_image{
		height: 28vw;
		width: 100%;
		background-repeat: no-repeat;
		background-size: contain;
		background-position: center;
		position: absolute;
		z-index: 0;
	}

	.btn{
		height: 45px !important;
	}
	.w3-top{
		z-index: 10 !important;
	}
	.head_partition{
		height:170px
	}


	#news_details{
		font-size: 4.0vw;
	}
</style>