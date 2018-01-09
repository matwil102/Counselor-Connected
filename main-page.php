<head>
   <style>

   h1 {color: white;
      font: 400 100px/1.3 'Oleo Script', Helvetica, sans-serif;
      text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
      text-align:center;}

   body {
      background-image: url("Background.jpg");
      background-repeat: no-repeat;
      background-color:#add8e6;
	   }
	   
.leftcolumn {
     text-align: right; 
     float: left;
     width: 50%;
     }
     
.rightcolumn {
     float: right;
     width: 50%;
     }


    #buttons.img {width:150px;
         height:150px;}

    #emergency {text-align:center;font-size:20px;}

    #proset {text-align:right;}

   </style>
</head>

<body>

   <div id="app-name">
   <h1>Counselor Connected</h1>

	   
	     
  <div id="proset">
    <a href="profile.php"><button>Profile</button>
    <a href="settings.php"><button>Settings</button>
  </div>

  <div id="emergency">
       <a href="emergency.php"><button>Emergency Button</button></a>
  </div>

  <hr>

     </div>
	  <div id="google_translate_element"></div>
	  <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,tl,vi,zh-CN',
					 layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 
					'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
     <a href="login.php"><button><--Back</button></a>


   <div id="buttons">
   <div class="leftcolumn">
     <a href="https://calendar.google.com/calendar/selfsched?sstoken=UUs2ME9xbE5WYkNnfGRlZmF1bHR8OTc4NzM0ZWMzMzJhZWZlN2JmMGI4NTlhOTU2NTExOTk"><button>Schedule Appointment<br><img src="calendar.jpg"></button></a>
     <br>
     <a href="policies.php"><button>Policies<br><img src="policies.jpg"></button></a>
	   </div>
	   </div>
   <div id="buttons">
   <div class="rightcolumn">
     <a href="notifications.php"><button>Notifications<br><img src="notification-bell.jpg"></button></a>
     <br>
     <a href="contact-info.php"><button>Contact Info<br><img src="contacts.jpg"></button></a>
	   </div>
	   </div>



</body>
