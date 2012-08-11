<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ajax Php Demo w/ Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="/">Ajax Php Demo</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="/">Home</a></li>
              <li><a href="tutorial.php">Tutorial</a></li>
              <li><a href="ajaxDemo1.php">Ajax Form 1</a></li>
              <li><a href="ajaxDemo2.php">Ajax Form 2</a></li>
              <li class="active"><a href="modalDemo.php">Modal Demo</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
	<h2>PHP/AJAX: Call PHP function</h2>		
	
	  <!-- Left Column -->  
      <div class="row-fluid">
        <div class="span6">
        	<p>
			Recently, I was asked by a friend how to call a specific php function via an Ajax call.
			</p>
			
			<p>
			The challenge was that they originally set out to have specific functions handle different form posts throughout 
			the website, but wanted to have them all orgianized in a single php file.
			</p> 
			
			<p>
			Considering that for a number of years I have been using MVC frameworks (Zend Framework for PHP) I had forgotten 
			how I had achieved this prior to using a MVC architecture. Typically with a MVC framework and the associated 
			routing your url (/controller/method) your request is routed to the desired method. 
			</p>
			
			<p>
			After providing some assistance to get them on the right path, I decided to do a quick Google search since I 
			didn't expect it to be that difficult to find some good examples. Well, I was wrong. 
			</p>
			
			<p>
			For the most part every example that I came across showed all of the expected details for setting up the markup 
			for the form, the required javascript/jquery and of course the associated PHP file for the form processing. The 
			problem that I faced was that the majority of examples show the ajax call to a php file on the server, without 
			addressing how to limit the call to a specific function.
			</p>
			
			<p>
			With this revalation I decided that I would put a quick tutorial together showing a PHP/Ajax call to a specific 
			function. However, as a began down the path of putting this tutorial together I decided that I would leverage 
			Twitter Bootstrap. Then I decided that I would show a couple of different options. Shortly after which I 
			decided to show the posting of a form via Ajax from a Modal. Needless to say this has grown to be a bit larger 
			than I had orignally intended. 
			</p>
			
			<p>
			As a result there will be a considerable amount of the code that I won't show here. The good news is that you 
			can access the entire demo from Github. 
			</p>
			
			<p>
			Most developers are familiar with data added in form fields and sent to a script on the server, specified 
			in the "action" attribute of the <form> tag. However, with Ajax, the data of the forms can be sent with both 
			the GET and POST methods and does not require a page refresh in the process. However, considering that with 
			GET the data sent is limited and typically reserved for requesting information forms typically leverage the 
			Ajax Post method. 
			</p>
			
			<p>
			The process of sending data from forms using Ajax is very straight-forward, especially if you are leveraging 
			jQuery. Please keep in mind the following description is not all inclusive as the code should tell you 
			everything you need to know and then some.
			</p>
			
			<p>
			The short list of things that you will need to remember are:
			</p>
			<ul>
				<li>Ensure that you have included the jQuery library in your mark-up</li>
				<li>Create the mark-up for your form, ensuring each form element has a Name and an Id</li>
				<li>Ensure that your Form button is NOT a submit button if it inside of the form tags</li>
				<li>On page load create an click event on the save button for the form</li>
				<li>Using jQuery's Serialize function create the data object to posted to the php server script</li>
				<li>On the server side check which form has been posted, the call the appropriate function to process the posted data</li>
				<li>When processing is complete return the desired response/data to the client side</li>
				<li>Capture the response with the jQuery.ajax appropriate callback function (success, complete, error) and perform the desired actions on the client side browser</li>
				<li>If posting from a Modal and an error is return update form to direct the user's next step</li>
				<li>If posting from a Modal and success, you may want to close the modal and update the initiating page</li>
			</ul>
			
			<p>
			Here's a sample of the core code required to understand how an Ajax script can get data from a form, 
			send it to a specific function in your php script and finally display the response received:
			</p>
  			
			
        </div><!--/span-->  
            
        <!-- Right Column -->
        <div class="span6 well">
        	<h2>Additional Details</h2>

      
        </div><!--/span-->
       </div>		  
		  
		  <hr>
      <footer>
        <p>&copy; Glenn Antoine 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/thirdparty/jquery.js"></script>
    <script src="./js/thirdparty/bootstrap-transition.js"></script>
    <script src="./js/thirdparty/bootstrap-alert.js"></script>
    <script src="./js/thirdparty/bootstrap-modal.js"></script>
    <script src="./js/thirdparty/bootstrap-dropdown.js"></script>
    <script src="./js/site.js"></script>

  </body>
</html>
