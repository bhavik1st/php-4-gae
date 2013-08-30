<?php

 $errorNumber = 0;
 $errorString = "";

	 //error handler function
	function customError($errno, $errstr)
	{
	  $errorNumber = $errno;
	  $errorString = $errstr;
	  return true;
	}

	//set error handler
	set_error_handler("customError");

session_start();

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_UrlshortenerService.php';

//No need for Oauth as nor required to access this API
$client = new Google_Client();
$service = new Google_UrlshortenerService($client);

$taskDone = false;

	if (isset($_GET['url'])) 
	{
	  // Start to make API requests.
	  $url = new Google_Url();
	  $url->longUrl = $_GET['url'];
	  
	  //Shorten URL
	  $shortUrl = $service->url->insert($url);
	  $taskDone = true;	
	}

?>


<?php 
   include('header.php');
?>

 <div class="container">
    <div class="row">
	 <div class="col">
	  <div class="span6 offset2">
	  <form id="url" method="GET" action="shortener">
	   <h2>Google URL Shortner API</h2>
      <div class="input-group">
      <input type="text" name="url" class="form-control" placeholder="URL to Shorten" value="<?php if (isset($_GET['url'])) echo $_GET['url']; ?>">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Shorten!</button>
      </span>
	  </form>
    </div><!-- /input-group -->
	<p>
	<?php 
	
		  if($taskDone) 
		  { 
	?>
			<div class="well"> Short URL:  <a href='<?php echo $shortUrl['id']; ?>'> <?php echo $shortUrl['id']; ?></a></div>
			<div class="alert alert-success"> Data Returned from API: <pre><?php print_r($shortUrl) ?></pre></div>
	<?php } 
		 // else 
		  { 		
			if (0 != $errorNumber) 
			{ 
	?>
		<div class="alert alert-danger"> <?php echo "Error:[$errorNumber] $errorString"; ?> </div>
	<?php 
			} // if ends
		  } 
		  
	?>
	</p>
	</div>
	</div><!-- /col -->
   </div><!-- /.row -->


 </div>
<?php 
   include('footer.php');
?>
