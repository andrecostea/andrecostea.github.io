<?php 
	$stage = 2;
	require("header.php"); 
?>



<pre>
<?php var_dump($_REQUEST); ?>
</pre>


<?php /*
<!--hdr-->

<!-- <p>In order to register as a student, you should be a full-time -->
<!-- student and send a scanned copy of the student card or a proof of -->
<!-- enrollment document to xinyu.feng@gmail.com.</p> -->

<!-- <p>For conference participants, the registration fee for the workshop -->
<!-- is USD 50. To be qualified for this rate, you need to register for -->
<!-- both the conference and the workshop, and pay the registration fees -->
<!-- together.</p> -->
<form  name="f" id="f" method="post" enctype="multipart/form-data" accept-charset="UTF-8" novalidate>





<input name="syx_sid" id="syx_sid" type="hidden" value="XqlJld2Cb2AOZL909tyaQsXCV5k3Pa">





<input name="syx_sov" id="syx_sov" type="hidden" value="4RU7Jc">





<input name="syx_efi" id="syx_efi" type="text" value="" class="hidden">






<!-- <label for="u_n8d_524681">Full name&nbsp;<span class="rqfd" -->
<!-- title="required">*</span></label> -->

<!-- <input name="u_n8d_524681" id="u_n8d_524681" type="text" value="" class=" u-full-width"> -->




<!-- <label for="u_n8d_524682">Affiliation (to appear on -->
<!-- badge)&nbsp;<span class="rqfd" title="required">*</span></label> -->

<!-- <input name="u_n8d_524682" id="u_n8d_524682" type="text" value="" class=" u-full-width"> -->




<!-- <label for="u_n8d_524683">Email&nbsp;<span class="rqfd" -->
<!-- title="required">*</span></label> -->

<!-- <input name="u_n8d_524683" id="u_n8d_524683" type="email" value="" class=" u-full-width"> -->



<!-- <div class="buttons input-stage"> --> <!-- <input name="submit"
type="submit" value="Continue &rarr;" class="button-primary"> -->
<!-- </div> -->




</form>

<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top"> -->
<form action="test.php" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="U3KVLK454Y5Y4">
<table>
  <tr><td><input type="hidden" name="on2" value="Name">Name</td></tr><tr><td><input type="text" name="os2" maxlength="400" class=" u-full-width"></td></tr>
  <tr><td><input type="hidden" name="on1" value="Title">Title</td></tr><tr><td><select name="os1">
	<option value="Prof">Prof </option>
	<option value="Dr">Dr </option>
	<option value="Ms">Ms </option>
	<option value="Mrs">Mrs </option>
	<option value="Mr">Mr </option>
  </select> </td></tr>
<tr><td><input type="hidden" name="on3" value="Affiliation">Affiliation (to appear on badge)</td></tr><tr><td><input type="text" name="os3" maxlength="400" class=" u-full-width"></td></tr>
<tr><td><input type="hidden" name="on4" value="Email">Email</td></tr><tr><td><input type="text" name="os4" maxlength="400" class=" u-full-width"></td></tr>
<tr><td><input type="hidden" name="on5" value="SpecialReq">Special Requirements</td></tr><tr><td><input type="text" name="os5" maxlength="400" class=" u-full-width"></td></tr>
<tr><td><input type="hidden" name="on0" value="Please select registration kind">Please select registration kind</td></tr><tr><td><select name="os0">
	<option value="Conference Only - Regular">Conference Only - Regular $500.00 USD</option>
	<option value="Conference Only - Student">Conference Only - Student $300.00 USD</option>
	<option value="Conference + Workshop - Regular">Conference + Workshop - Regular $550.00 USD</option>
	<option value="Conference + Workshop - Student">Conference + Workshop - Student $350.00 USD</option>
	<option value="Workshop Only">Workshop Only $200.00 USD</option>
	<option value="TEST">TEST $1.00 USD</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal  The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="YTWJ28VKL665Y">
<table>
<tr><td><input type="hidden" name="on0" value="Please select registration kind">Please select registration kind</td></tr><tr><td><select name="os0">
	<option value="Conference Only - Regular">Conference Only - Regular $400.00 USD</option>
	<option value="Conference Only - Student">Conference Only - Student $300.00 USD</option>
	<option value="Workshop">Workshop $200.00 USD</option>
	<option value="Test">Test $1.00 USD</option>
</select> </td></tr>
<tr><td><input type="hidden" name="on1" value="Salutation">Salutation</td></tr><tr><td><select name="os1">
	<option value="Prof">Prof </option>
	<option value="Dr">Dr </option>
	<option value="Option 3">Option 3 </option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="USD">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal  The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>


<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----MIIG1QYJKoZIhvcNAQcEoIIGxjCCBsICAQExggEwMIIBLAIBADCBlDCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb20CAQAwDQYJKoZIhvcNAQEBBQAEgYCoqgZDyJa1olpaWDXsO1/g19vMo/iuXGFW0lyHbyQ9aNdl5JXpuVdH7RJ9i+OuVar1mBF9suTL85JpR5WG5W/vXfF9ioTtGxOz88ki2GSeduJpHRAE//NEzXxEyhDFMuHKjjwoI+i9dndeIn2cJI1b/9P3sUucKsX13bo5csHEbTELMAkGBSsOAwIaBQAwUwYJKoZIhvcNAQcBMBQGCCqGSIb3DQMHBAjk2oYMINysGYAwMqYTp/G3suefc2F/LWxYJW51smR5Kv06limQTxfdX8yJRPrMFpVEULaa/bI5flUhoIIDhzCCA4MwggLsoAMCAQICAQAwDQYJKoZIhvcNAQEFBQAwgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMB4XDTA0MDIxMzEwMTMxNVoXDTM1MDIxMzEwMTMxNVowgY4xCzAJBgNVBAYTAlVTMQswCQYDVQQIEwJDQTEWMBQGA1UEBxMNTW91bnRhaW4gVmlldzEUMBIGA1UEChMLUGF5UGFsIEluYy4xEzARBgNVBAsUCmxpdmVfY2VydHMxETAPBgNVBAMUCGxpdmVfYXBpMRwwGgYJKoZIhvcNAQkBFg1yZUBwYXlwYWwuY29tMIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDBR07d/ETMS1ycjtkpkvjXZe9k+6CieLuLsPumsJ7QC1odNz3sJiCbs2wC0nLE0uLGaEtXynIgRqIddYCHx88pb5HTXv4SZeuv0Rqq4+axW9PLAAATU8w04qqjaSXgbGLP3NmohqM6bV9kZZwZLR/klDaQGo1u9uDb9lr4Yn+rBQIDAQABo4HuMIHrMB0GA1UdDgQWBBSWn3y7xm8XvVk/UtcKG+wQ1mSUazCBuwYDVR0jBIGzMIGwgBSWn3y7xm8XvVk/UtcKG+wQ1mSUa6GBlKSBkTCBjjELMAkGA1UEBhMCVVMxCzAJBgNVBAgTAkNBMRYwFAYDVQQHEw1Nb3VudGFpbiBWaWV3MRQwEgYDVQQKEwtQYXlQYWwgSW5jLjETMBEGA1UECxQKbGl2ZV9jZXJ0czERMA8GA1UEAxQIbGl2ZV9hcGkxHDAaBgkqhkiG9w0BCQEWDXJlQHBheXBhbC5jb22CAQAwDAYDVR0TBAUwAwEB/zANBgkqhkiG9w0BAQUFAAOBgQCBXzpWmoBa5e9fo6ujionW1hUhPkOBakTr3YCDjbYfvJEiv/2P+IobhOGJr85+XHhN0v4gUkEDI8r2/rNk1m0GA8HKddvTjyGw/XqXa+LSTlDYkqI8OwR8GEYj4efEtcRpRYBxV8KxAW93YDWzFGvruKnnLbDAF6VR5w/cCMn5hzGCAZowggGWAgEBMIGUMIGOMQswCQYDVQQGEwJVUzELMAkGA1UECBMCQ0ExFjAUBgNVBAcTDU1vdW50YWluIFZpZXcxFDASBgNVBAoTC1BheVBhbCBJbmMuMRMwEQYDVQQLFApsaXZlX2NlcnRzMREwDwYDVQQDFAhsaXZlX2FwaTEcMBoGCSqGSIb3DQEJARYNcmVAcGF5cGFsLmNvbQIBADAJBgUrDgMCGgUAoF0wGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcNMTcwODI1MDc0MjI0WjAjBgkqhkiG9w0BCQQxFgQUWMCXt72sxdekdsdB79ETMTG7UaswDQYJKoZIhvcNAQEBBQAEgYBY6ykb/k468hUcUk0NSUJ/4/UWwHerQhmnxOALp9aNy0JnMSBSf+h6U9S/vTrY6g1HIfzXQpdSuS1id0kWOXNUHXLFR65x59fT8luvGUZvxu9EDpQiIRB24V7ohQq09f/JRGJujHq2NbN1hyzTPzzj5pD/v3NmQgxemei1XQv2FA==-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_viewcart_LG.gif" border="0" name="submit" alt="PayPal  The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>



<!-- <p class="bot"><span class="rqfd">*</span> indicates required -->
<!-- fields</p> -->

<!--ftr-->
<!-- </div> -->
<!-- <link href="/css/XqlJld2Cb2AOZL909tyaQsXCV5k3Pa.css" rel="stylesheet" type="text/css"> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
<!-- <script src="//static.formsmarts.com/js/formsmarts-client-2.0.c.js"></script> -->
<!-- <script type="text/javascript"><\!-- syx_lang="en";syx_optional={True:"optional",False:"required"};syx_sto=3600;syx_has_upload=0;syx_mode="h5page";document.f.syx_sov.value="D0kPGr"; -->
<!-- //-\-></script> -->

*/ ?>

</body>
</html>