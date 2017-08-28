<?php 

require_once("include/functions.php");
require_once("include/db.php");

$stage = 1;
$error = array();
$titles = array("Prof", "Dr", "Ms", "Mrs", "Mr");
$conference_values = array("none", "regular", "student");
$price = 0;

if (!empty($_POST)) {
	$name = getParam($_POST, "name");
	$title = getParam($_POST, "title");
	$affiliation = getParam($_POST, 'affiliation');
	$email = getParam($_POST, 'email');
	$requirements = getParam($_POST, 'requirements');

	if (empty($name)) $error['name'] = 1;
	if (empty($title)) $error['title'] = 1;
	if (empty($affiliation)) $error['affiliation'] = 1;
	if (empty($email)) $error['email'] = 1;

	if (!in_array($title, $titles)) {
		$title = "";
	}

	$conference = getParam($_POST, "conference");
	$workshop = getParam($_POST, "workshop");
	$extraPages = getParam($_POST, "extrapages");

	if (!is_string($conference) || !in_array($conference, $conference_values)) {
		$conference = "none";
	}

	$workshop = ($workshop === "on");
	if (!is_numeric($extraPages) || $extraPages < 0) {
		$extraPages = 0;
	}
	$extraPages = (int)$extraPages;

	$price = computePrice($conference, $workshop, $extraPages);

	if ($price == 0) {
		$error['amount'] = 1;
	}

	if (empty($error)) {
		$stage = 2;

		$workshop = $workshop ? 1 : 0;
		$orderId = saveOrder($name, $title, $affiliation, $email, $requirements, $conference, $workshop, $extraPages, $price);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>APLAS 2017 REGISTRATION FORM</title>
<meta charset="utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<meta name="robots" content="noarchive">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">
<!--hdr-->
<h1 class="sole-stage">APLAS 2017 REGISTRATION FORM</h1>
<h5 >15th Asian Symposium on Programming Languages and Systems</h5>
<div id="stage" class="sole-stage">Step <?php echo $stage; ?> of 2
</div>

<?php if ($stage == 1) : ?>

<form action="" method="post" target="_top">
<table>
  <tr>
  	<td>
  		<input type="hidden" name="on2" value="Name"> Name
  	</td></tr><tr><td>
  		<input type="text" name="name" maxlength="400" class=" u-full-width" value='<?php echo getParam($_POST, 'name') ?>'>
  		<?php if (isset($error['name'])) formError("Name is required"); ?>
  	</td>
  </tr>
  <tr><td><input type="hidden" name="on1" value="Title">Title</td></tr><tr><td><select name="title">
	<option value="" <?php if(empty($_POST['title'])) echo "selected"; ?>>Choose</option>
	<?php foreach($titles as $t) { ?>
		<option value="<?php echo $t; ?>" <?php if(getParam($_POST, "title") === $t) echo "selected='selected'"; ?>><?php echo $t; ?></option>
	<?php } ?>
  </select> 
  		<?php if (isset($error['title'])) formError("Title is required"); ?>

  </td>
</tr>
<tr>
	<td>
		<input type="hidden" name="on3" value="Affiliation">Affiliation (to appear on badge)
	</td></tr><tr><td>
		<input type="text" name="affiliation" maxlength="400" class=" u-full-width" 
			value='<?php echo getParam($_POST, 'affiliation') ?>'>
  		<?php if (isset($error['affiliation'])) formError("Affiliation is required"); ?>
	</td>
</tr>
<tr>
	<td>
		<input type="hidden" name="on4" value="Email">Email
	</td></tr><tr>
	<td>
		<input type="email" name="email" maxlength="400" class=" u-full-width" value='<?php echo getParam($_POST, 'email') ?>'>
  		<?php if (isset($error['email'])) formError("Email is required"); ?>
	</td>
	</tr>
<tr><td><input type="hidden" name="on5" value="SpecialReq">Special Requirements</td></tr><tr>
	<td><input type="text" name="requirements" maxlength="400" class=" u-full-width" value='<?php echo getParam($_POST, 'requirements') ?>'>
</td></tr>
<tr><td>
	<input type="hidden" name="on0" value="Please select registration kind">Please select registration kind
</td></tr><tr><td>
	
	Conference: 
	<?php foreach($conference_values as $value) { ?>
	<input type="radio" name="conference" value="<?php echo $value; ?>" 
		class='compute-sum' <?php if(getParam($_POST, "conference") == $value) echo "checked" ?>> 
		<?php echo ucfirst($value); ?>
	<?php } ?>

	<br />
	Workshop: <input type="checkbox" name='workshop' class='compute-sum' <?php if(getParam($_POST, "workshop") === "on") echo "checked"; ?> /> <br/>
	Extra pages: <input type='number' name='extrapages' class='compute-sum' value="<?php echo getParam($_POST, 'extrapages')?>" /> x 0.5 per page

	<br />
	<b>Price:</b> <span id='price'><?php echo $price; ?></span> USD
  	<?php if (isset($error['amount'])) formError("You need to select at least one item"); ?>

</td></tr>
</table>

<input type='submit' value='Send' />
</form>

<?php else: // Step 2 ?>

<h4>Summary</h4>

<table>
  <tr><td>
 	<b>Name</b>: <?php echo $name; ?>
  </td></tr><tr><td>
  	<b>Title</b>: <?php echo $title; ?>
  </td></tr><tr><td>
	<b>Affiliation</b>: <?php echo $affiliation; ?>
  </td></tr><tr><td>
	<b>Email</b>: <?php echo $email; ?>
  </td></tr><tr><td>
  	<b>Special requirements</b>: <?php echo $requirements; ?>
  </td></tr><tr><td>
  	<b>Registration kind</b>: <br/>
	<b>Conference</b>: <?php echo $conference; ?> <br/>
	<b>Workshop</b>: <?php echo $workshop ? "yes" : "no"; ?> <br/>
	<b>Extra pages</b>: <?php echo $extraPages; ?>
  </td></tr><tr><td>
  	<b>Price</b>: <?php echo $price; ?> USD
  </td></tr><tr><td>

  <!-- Paypal form -->
  <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
    <input name="amount" type="hidden" value="<?php echo $price; ?>">
	<input name="currency_code" type="hidden" value="USD">
    <input name="shipping" type="hidden" value="0.00">
    <input name="tax" type="hidden" value="0.00">
    <input type="hidden" name="cmd" value="_xclick">
    <input name="business" type="hidden" value="valx90@yahoo.com">

    <input name="item_name" type="hidden" value="<?php echo getRegistrationKindName($conference, $workshop, $extraPages); ?>">
    <input name='invoice' type="hidden" value="<?php echo $orderId; ?>">
    <input name="no_note" type="hidden" value="1">
    <input type="hidden" name="no_shipping" value="1">
    <input name="lc" type="hidden" value="EN">
    <input name="bn" type="hidden" value="PP-BuyNowBF">
    <input name="custom" type="hidden" value="Order id <?php echo $orderId; ?>">

    <input type="hidden" name="first_name" value="<?php echo $name; ?>">
    <input type="hidden" name="email" value="<?php echo $email; ?>">

  	<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal  The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
  </form>
  <button onclick="goBack(); return false;">Go Back</button>
  <!-- END Paypal form -->

  </td></tr>


</table>

<?php endif; ?>

</body>
</html>