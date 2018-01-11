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

   h2 {text-align:center;
      font-weight: bold;
      text-decoration: underline;}

   #language {text-align: center;}
   #color {text-align: center;}
   #google_translate_element {text-align: right;}

</style>
</head>


<body>

<h1>Counselor Connected</h1>
<a href="main-page.php"><button><--Back</button></a>

<h2>Settings</h2>

<div id="google_translate_element">
    <script type="text/javascript">
      function googleTranslateElementInit() {
  	new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,es,tl,vi,zh-CN',
						layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 
						'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script> 
</div>   
   
<div id="language">
  <p style="font-weight: bold;">Language:
<select>
  <option value="english">English</option>
  <option value="spanish">Spanish</option>
  <option value="french">French</option>
  <option value="german">German</option>
</select>
</p>
</div>

<div id="color">
  <p style="font-weight: bold;">Color:
<select>
  <option value="blue">Blue</option>
  <option value="green">Green</option>
  <option value="orange">Orange</option>
  <option value="red">Red</option>
</select>
</p>
</div>

</body>
