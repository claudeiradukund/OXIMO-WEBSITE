<!doctype html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="photo/logo11.jpg">
        <link rel="icon" type="image/png" href="photo/logo11.jpg">
        <title>OXIMO CONSTRUCTION</title>
        <link rel="icon" type="image/jfif" href="photo/logo11.jpg">
        <meta name='robots' content='max-image-preview:large'/>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
        <link rel="alternate" type="application/rss+xml" title="OXIMO CONSTRUCTION &raquo; Feed" href="#"/>
        <link rel="alternate" type="application/rss+xml" title="OXIMO CONSTRUCTION&raquo; Comments Feed" href="#"/>     
        <link rel="stylesheet" href="all_pages.css" type="text/css">
        <link rel="stylesheet" href="my_color_style.css" type="text/css">
        <link rel="icon" type="image/jfif" href="photo/logo11.jpg">
        <meta name='robots' content='max-image-preview:large'/>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
        <link rel="alternate" type="application/rss+xml" title="OXIMO CONSTRUCTION &raquo; Feed" href="#"/>
        <link rel="alternate" type="application/rss+xml" title="OXIMO CONSTRUCTION&raquo; Comments Feed" href="#"/>
        <!-- about number and services  -->
        <!-- link for navbar above head, about us etc. -->
       <link rel="stylesheet" href="header.css" type="text/css">  
        <!-- head and bellow parts css link -->
        <link href="sidenav_body.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="bellow_sidenav.css" type="text/css">
        <!---- External CSS file For FONT AWESOME icon ---->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
        <style>
             body {
            background-image: url('photo/about us background.png');
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .about-content {
            text-align: center;
        }
        .about-image {
            max-width: 100%;
            height: auto;
        }
        p {
            color: black;
            font-size: 18px;
            line-height: 1.6;
        }.row{
            width: 48%;
            height: 80%;
        }
      .container {
      display: flex;
    }

    .column_1 {
    flex: 1;
    padding: 20px;
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    text-align: center;
    }.head{
            text-align: center;
        }
      .row {
    display: flex;
    justify-content: space-between;
    margin-left: 12%;
    margin-right:0 auto; 
}

/* Media query for responsive design */
@media (max-width: 768px) {
    .row {
        flex-direction: column;
    }
    }.vertical-line{
        border-left: 2px solid #000; /* Adjust the width and color as needed */
        padding-left: 10px; 
    }
}
 .container {
            display: flex;
            border: 1px solid #ccc;
        }
        .column {
            flex: 1;
            padding: 20px;
            width:410px;
            height:0 auto;
            border-radius:15px;
            margin:7px;
            padding:20px 30px;
            position:relatve;
            background:rgba(255,255,255,0.5);
            box-shadow:10px 25px 25px rgba(0,0,0,0.2);
            transition:0.5s;
        }.column:hover{
            transform:scale(1.4);
            color:black;
            background:#fff;
            z-index:10000;
        }

        h2 {
            font-size: 18px;
            margin-bottom: 10px;
        }
        h2{
            text-align:center;
        }
        /******* customer testimonials ****/
        *{
         margin:0;
         padding:0;
         box-sizing:border-box;
     }
     .wrapper{
         /****** desgning container for our testimonials cards layout *****/
        background: linear-gradient(90deg,#DCDCDC 0%,#A9A9A9 100%);
        min-height:100vh;
        margin:0 auto;
        display:flex;
        flex-direction:column; 
        justify-content:center;
        align-items:center;
        font-family:'raleway',sans-serif;
        color:black;
     }
     .wrapper h1{
         font-size:36px;
         font-weight:500;
         margin-top:25px;
         margin-bottom:20px;
         text-align:center;
         color:black;
     }.wrapper h5{
         font-size:20px;
         text-align:center;
         font-weight:300;
         margin-bottom:80px;
         color:black;
     }
     .cards{
         display:flex;
         justify-content:center;
         align-items:center;
         width:1200px;
         margin:0 auto;
         height:0 auto;
     }
     .card{
        width:410px;
        height:0 auto;
        border-radius:15px;
        margin:7px;
        padding:20px 30px;
        position:relatve;
        background:rgba(255,255,255,0.5);
        box-shadow:10px 25px 25px rgba(0,0,0,0.2);
        transition:0.5s;
     }
     .card img{
         height:90px;
         width:90px;
         border:2px solid #f2f2f2;
         border-radius:50%;
         left:100px;
         margin-top:-10px;
     }
     .card p{
         font-size:16px;
         margin-top:10px;
         margin-bottom:12px;
     }
     .card h2{
        font-weight:200;
        margin-bottom:6px;
     }
     .card h4{
        color:#333;
        font-weight:400;
        font-size:16px;
     }.card i{
         font-size:40px;
         margin-top:-10%;
         right:25px;
         color:yellow;
         padding-left:70%;
     }.card:hover{
        transform:scale(1.4);
        color:black;
        background:#fff;
        z-index:10000;
     }
     /**** Responsive design *****/

     @media(max-width:768px){
       .cards{
          width:100%;
          flex-direction:column;
          flex-wrap:wrap;
       }
       .card{
           margin:20px 0;
       }
     }
   
    </style>
    </head>
    <body class="home page-template page-template-elementor_header_footer page page-id-1125 wp-custom-logo ehf-template-hello-elementor ehf-stylesheet-hello-elementor elementor-default elementor-template-full-width elementor-kit-930 elementor-page elementor-page-1125">
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div data-elementor-type="header" data-elementor-id="1196" class="elementor elementor-1196 elementor-location-header">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-5772e61 elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="5772e61" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;tf_sticky&quot;:&quot;no&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2eff2281" data-id="2eff2281" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-18fad800 elementor-widget elementor-widget-site-logo" data-id="18fad800" data-element_type="widget" data-settings="{&quot;align&quot;:&quot;left&quot;,&quot;width_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;width&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_tablet&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;space_mobile&quot;:{&quot;unit&quot;:&quot;%&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;image_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;caption_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;caption_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;caption_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="site-logo.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-site-logo">
                                        <a data-elementor-open-lightbox="" class='elementor-clickable' href="#">
                                            <div class="hfe-site-logo-set">
                                                <div class="hfe-site-logo-container">
                                                    <img class="hfe-site-logo-img elementor-animation-" style="width:75px; height:60px;" src="photo/logo11.jpg" alt="GMK-09"/>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-2a848f8e" data-id="2a848f8e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5baa447c hfe-nav-menu__align-center hfe-nav-menu__breakpoint-mobile hfe-submenu-icon-arrow hfe-submenu-animation-none hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu" data-id="5baa447c" data-element_type="widget" data-settings="{&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:21,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_row_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;width_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;220&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;width_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}" data-widget_type="navigation-menu.default">
                                <div class="elementor-widget-container">
                                    <div class="hfe-nav-menu hfe-layout-horizontal hfe-nav-menu-layout horizontal hfe-pointer__none" data-layout="horizontal">
                                        <div class="hfe-nav-menu__toggle elementor-clickable">
                                            <div class="hfe-nav-menu-icon">
                                                <i aria-hidden="true" tabindex="0" class="fas fa-align-justify"></i>
                                            </div>
                                        </div>
                                        <nav class="hfe-nav-menu__layout-horizontal hfe-nav-menu__submenu-arrow" data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;fas fa-align-justify&quot;&gt;&lt;/i&gt;" data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;" data-full-width="yes">
                                            <ul id="menu-1-5baa447c" class="hfe-nav-menu">
                                                <li id="menu-item-1441" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1125 current_page_item parent hfe-creative-menu">
                                                    <a href="index.php" class="hfe-menu-item">Home</a>
                                                </li>
                                                <li id="menu-item-435" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="about_us.php" class="hfe-menu-item">About Us</a>
                                                </li>
                                                <li id="menu-item-1440" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="projects.php" class="hfe-menu-item">Projects</a>
                                                </li>
                                                <li id="menu-item-692" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="leadership.php" class="hfe-menu-item">Leadership</a>
                                                </li>
                                                <li id="menu-item-691" class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                    <a href="contact.php" class="hfe-menu-item">Contact</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-7585f230 elementor-hidden-phone" data-id="7585f230" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-41837aa elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="41837aa" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid" >
                                        <span class="elementor-grid-item">
                                           <a href="#" class="media"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" style="color:#FFFFFF;">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                            </svg> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a href="#" class="media"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16" style="color:#FFFFFF;">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                            </svg> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a href="#" class="media"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16" style="color:#FFFFFF;">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                            </svg> </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>    
         <!-- SHOWING ABOUT US PAGE -->
        <div class="header">
           <h1>About Us</h1>
        </div>
        <div class="container">
           <div class="about-content">
               <img src="photo/about.jpg" alt="About Us Image" class="about-image">
              <p>
                Welcome to our comprehensive architectural and design firm, where innovation, engineering expertise, project management, interior design, and master planning converge to shape the world around us. With a strong commitment to excellence, we are your trusted partner in bringing architectural visions to life. Our multidisciplinary team of architects, engineers, and designers work collaboratively to deliver integrated solutions that not only enhance the visual appeal but also prioritize functionality and sustainability. From the inception of a project to its completion, our holistic approach ensures a seamless journey. We pride ourselves on turning ideas into realities, from residential spaces to large-scale urban developments. Let us be your partner in creating environments that are not only aesthetically captivating but also purposeful and future-ready. Welcome to a world where architecture and design are transformed into enduring legacies.
              </p>
           </div>
       </div>
        <div class="container">
           <div class="column">
              <h2 class="head">Our Mission</h2>
              <p>At OXIMO Construction, our mission is to transform the world through innovative and sustainable design and engineering solutions. Through collaborative efforts and a commitment to excellence, we aspire to be a driving force in shaping the future of architecture and infrastructure.</p>
           </div>
           <div class="column">
              <h2 class="head">Our Vission</h2>
              <p>Our vision is to be a globally recognized leader in the fields of architecture, engineering, project management, interior design, and master planning.we aim to redefine industry standards and set new benchmarks for excellence. Our ultimate vision is to inspire and leave a legacy of enduring, harmonious spaces that stand as testaments to human ingenuity and environmental stewardship.</p>
           </div>
        </div>
        <!------ showing customer testimonials ---->
        <div class="wrapper">
          <h1>Customer Testimonials</h1>
          <h5>Check what they say about us</h5>
          <div class="cards">
            <div class="card">
               <img src="photo/gad.jpg" alt="Image 3">
               <p>Working with Oximo Construction made our dream home a reality. Their architectural and engineering expertise transformed our ideas into a beautifully designed space.
               Oximo provided exceptional construction services. Their attention to detail and commitment to quality resulted in a project that exceeded our expectations.
               Highly recommend Oximo for any architecture, engineering, and construction needs. Their professionalism and innovative solutions added value to our project.</p>
               <h2>Gad NDAYISENGA</h2>
               <h4>accountant</h4>
               <i class="fa fa-quote-left"></i>
            </div> 
            <div class="card">
               <img src="photo/eric.jpg" alt="Image 3">
               <p>Working with Oximo Construction made our dream home a reality. Their architectural and engineering expertise transformed our ideas into a beautifully designed space.
               Oximo provided exceptional construction services. Their attention to detail and commitment to quality resulted in a project that exceeded our expectations.
               Highly recommend Oximo for any architecture, engineering, and construction needs. Their professionalism and innovative solutions added value to our project.</p>
               <h2>IRAGENA Fils</h2>
               <h4>accountant advisor</h4>
               <i class="fa fa-quote-left"></i>
            </div>
            <div class="card">
               <img src="photo/peter.jpg" alt="Image 3">
               <p>Working with Oximo Construction made our dream home a reality. Their architectural and engineering expertise transformed our ideas into a beautifully designed space.
               Oximo provided exceptional construction services. Their attention to detail and commitment to quality resulted in a project that exceeded our expectations.
               Highly recommend Oximo for any architecture, engineering, and construction needs. Their professionalism and innovative solutions added value to our project.</p>
               <h2>KWIBUKA Bernard</h2>
               <h4>Sinior manager</h4>
               <i class="fa fa-quote-left"></i>
            </div>
          </div>
        </div>
        <!----- showing all awards ------>
         <div style="background-color:white;">
           <section class="elementor-section elementor-top-section elementor-element elementor-element-6446cff8 elementor-section-full_width elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="6446cff8" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-537ac184" data-id="537ac184" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5177ef1 elementor-view-default elementor-widget elementor-widget-icon" data-id="5177ef1" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-check" viewBox="0 0 16 16" style='color:yellow; padding-left:175px; margin-top:10px;'>
                                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514Z"/>
                                            <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
                                            <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
                                            </svg>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-5baaf4cd elementor-widget elementor-widget-counter" data-id="5baaf4cd" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                            <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="50" data-from-value="0" data-delimiter=",">50</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title" style="color:black;"><h3>PROJECTS COMPLETED</h3></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-29fbd3e" data-id="29fbd3e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d948e9c elementor-view-default elementor-widget elementor-widget-icon" data-id="d948e9c" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16" style='color:yellow; margin-top:10px; margin-left:170px;'>
                                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                            </svg><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-e14dbc2 elementor-widget elementor-widget-counter" data-id="e14dbc2" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="150" data-from-value="0" data-delimiter=",">130</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title"><h3>SATISFIED CLIENTS</h3></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-82afb0b" data-id="82afb0b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-ec37e31 elementor-view-default elementor-widget elementor-widget-icon" data-id="ec37e31" data-element_type="widget" data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16" style='color:yellow; margin-top:10px; margin-left:170px; '>
                                            <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                            <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                                            </svg><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-41a0a25 elementor-widget elementor-widget-counter" data-id="41a0a25" data-element_type="widget" data-widget_type="counter.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-counter">
                                        <div class="elementor-counter-number-wrapper">
                                            <span class="elementor-counter-number-prefix"></span>
                                            <span class="elementor-counter-number" data-duration="2000" data-to-value="3" data-from-value="0" data-delimiter=",">3</span>
                                            <span class="elementor-counter-number-suffix"></span>
                                        </div>
                                        <div class="elementor-counter-title"><h3>AWARDS WON</h3></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </section>
         </div> 
        <div data-elementor-type="footer" data-elementor-id="680" class="elementor elementor-680 elementor-location-footer">
            <section class="elementor-section elementor-top-section elementor-element elementor-element-2457a77e elementor-section-full_width elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="2457a77e" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;tf_sticky&quot;:&quot;no&quot;}">
                <div class="elementor-container elementor-column-gap-no">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-126f4725" data-id="126f4725" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-6d09512d elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="6d09512d" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1912e009" data-id="1912e009" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-32ad039c elementor-widget elementor-widget-image" data-id="32ad039c" data-element_type="widget" data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <a href="#0">
                                                        <img width="300" height="152" src="photo/logo11.jpg" class="attachment-medium size-medium wp-image-1461" alt="" loading="lazy" srcset="photo/logo11.jpg 300w,photo/logo11.jpg 1024w,photo/logo11.jpg 768w,photo/logo11.jpg  1418w" sizes="(max-width: 90px) 100vw, 90px"/>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-daeb1e6 elementor-widget elementor-widget-text-editor" data-id="daeb1e6" data-element_type="widget" data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container">
                                                    <p>We believe in the extraordinary power of design to influence the quality of life Integrity</p>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-4fddfcc elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="4fddfcc" data-element_type="widget" data-widget_type="social-icons.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-d7d2234" href="#" target="_blank">
                                                                <span class="elementor-screen-only">Facebook</span>
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-ba148a4" href="#" target="_blank">
                                                                <span class="elementor-screen-only">Twitter</span>
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                        <span class="elementor-grid-item">
                                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-f16a026" href="#" target="_blank" >
                                                                <span class="elementor-screen-only">Instagram</span>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                                                </svg>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-359f340c" data-id="359f340c" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-12659f93 elementor-widget elementor-widget-heading" data-id="12659f93" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">Recent projects</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7635ee0c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="7635ee0c" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://gmkintlpartners.com/university-of-rwanda-headquarters/">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">UR Headquarters</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="https://gmkintlpartners.com/green-leisure-park/">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">Green Leisure park</span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#0">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">Egypt Embassy </span>
                                                            </a>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <a href="#0">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                                                </span>
                                                                <span class="elementor-icon-list-text">Ngali Holdings </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2408efd6" data-id="2408efd6" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-13694cd2 elementor-widget elementor-widget-heading" data-id="13694cd2" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">GET IN TOUCH</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5a45cc1d elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="5a45cc1d" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1a95e29d elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="1a95e29d" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill" viewBox="0 0 16 16">
                                                                <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                                                                <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-icon-list-text">oximoconstruction@gmail.com</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3dfc470e elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="3dfc470e" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-vibrate-fill" viewBox="0 0 16 16">
                                                                <path d="M4 4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4zm5 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0zM1.807 4.734a.5.5 0 1 0-.884-.468A7.967 7.967 0 0 0 0 8c0 1.347.334 2.618.923 3.734a.5.5 0 1 0 .884-.468A6.967 6.967 0 0 1 1 8c0-1.18.292-2.292.807-3.266zm13.27-.468a.5.5 0 0 0-.884.468C14.708 5.708 15 6.819 15 8c0 1.18-.292 2.292-.807 3.266a.5.5 0 0 0 .884.468A7.967 7.967 0 0 0 16 8a7.967 7.967 0 0 0-.923-3.734zM3.34 6.182a.5.5 0 1 0-.93-.364A5.986 5.986 0 0 0 2 8c0 .769.145 1.505.41 2.182a.5.5 0 1 0 .93-.364A4.986 4.986 0 0 1 3 8c0-.642.12-1.255.34-1.818zm10.25-.364a.5.5 0 0 0-.93.364c.22.563.34 1.176.34 1.818 0 .642-.12 1.255-.34 1.818a.5.5 0 0 0 .93.364C13.856 9.505 14 8.769 14 8c0-.769-.145-1.505-.41-2.182z"/>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-icon-list-text">+ 250 782 696 652</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1cc8130e" data-id="1cc8130e" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-270a3f4d elementor-widget elementor-widget-heading" data-id="270a3f4d" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h6 class="elementor-heading-title elementor-size-default">VISIT US</h6>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-70de36b8 elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="70de36b8" data-element_type="widget" data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-16269859 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="16269859" data-element_type="widget" data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                                                                <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                                                                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Kigali-Rwanda</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                                                                <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                                                                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Nyarugenge</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                                                                <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z"/>
                                                                <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z"/>
                                                                </svg>
                                                            </span>
                                                            <span class="elementor-icon-list-text">Kigali CarFree Zone<br>Around Cogebank H.Q</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="elementor-section elementor-inner-section elementor-element elementor-element-7a4a0b5a elementor-section-boxed elementor-section-height-default elementor-section-height-default tf-sticky-section tf-sticky-no" data-id="7a4a0b5a" data-element_type="section" data-settings="{&quot;tf_sticky&quot;:&quot;no&quot;}">
                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7715f136" data-id="7715f136" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-5ada4159 elementor-widget elementor-widget-heading" data-id="5ada4159" data-element_type="widget" data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <p class="elementor-heading-title elementor-size-default">© OXIMO CONSTRUCTION @2023</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-45124b2a" data-id="45124b2a" data-element_type="column">
                                        <div class="elementor-widget-wrap"></div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>

                                                                                             
