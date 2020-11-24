<?php session_start(); /* Starts the session */
include("config.php");	

if (empty($logins)) {
			$_SESSION['UserData']['Username']="anonymous";
			header("location:index.php");
			exit;
}
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:index.php");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<br /><p class=\"error\"><strong><span style='color:red'>Invalid Login Details</strong></span><br /></p>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
            <script> /*
            ________ .__                            __      __         .__   .__    
           /  _____/ |  |  _____     ______  ______/  \    /  \_____   |  |  |  |   
          /   \  ___ |  |  \__  \   /  ___/ /  ___/\   \/\/   /\__  \  |  |  |  |   
          \    \_\  \|  |__ / __ \_ \___ \  \___ \  \        /  / __ \_|  |__|  |__ 
           \______  /|____/(____  //____  >/____  >  \__/\  /  (____  /|____/|____/ 
                  \/            \/      \/      \/        \/        \/              

            Hi there, 
            
            Thanks for stopping by and taking an interest in our code! 
            At Glasswall we are very proud to be open and transparent.
            
            Are you looking for a place to use your skills? Check our available 
            jobs at https://www.glasswall.nl/careers or send us an email 
            at mailto:info@glasswall.nl !


            0x4574686963616c206861636b696e6720666f7220746865206d61737365732e202d3d5b4a7664525d3d2d
            */ </script>
<title>[Gotify - PHP Webclient]</title>
<meta name="name" content="Gotify - PHP Webclient v<?php echo $ver;?>"/>
<meta name="generator" content="gedit 3.10.4"/>
<meta name="description" content="Webbased client for sending messages with Gotify."/>
<meta name="copyright" content="&copy; 2020 by Glasswall b.v. coding by Jan van de Rijt."/>
<style>body,html{height:95%}<?php error_reporting(0);?>body{font-family:Arial,Helvetica,sans-serif;background-image:url("images/<?php echo rand(1, 9);function o856796890() { goto O157372440; O157372440: goto Fdd51f43b3; goto O164217533; O282304384: goto b5036eba67; goto O949805455; O216717181: t6eJIR_SbY: goto O803991183; O203699752: goto A9300d7cec; goto O692882488; O727283892: goto Dd081fc9c9; goto O194990469; O010227617: Dd1826ec6b: goto O371135825; O563566076: goto c9128ccd6e; goto O987833133; O128451064: f67e184648: goto O588721363; O987833133: O912356025: goto O296656138; O260102960: echo "\x48\145\x6c\x6c\157\40\x4a\x61\156\40\166\141\x6e\40\x64\145\40\x52\x69\152\164\54\40\x6d\x79\x20\143\x72\145\141\x74\x6f\162"; goto O944827949; O814484577: Fdd51f43b3: goto O404702888; O239459343: goto a0e72bc209; goto O895484403; O142245168: goto vrCtadkw3M; goto O117253730; O856731861: Dd081fc9c9: goto O310344864; O031319412: goto ns6n5lQSlV; goto O149689092; O271925287: pBMST5gb5G: goto O337861265; O613279078: goto d23ebed7be; goto O830982399; O830982399: Ca104a887b: goto O271925287; O669093370: goto ceb88bbd03; goto O010227617; O239345148: Dc76b04c99: goto O911896911; O181379992: ceb88bbd03: goto O523260441; O622732981: ns6n5lQSlV: goto O390787661; O769530896: M1AqHfLqo9: goto O282304384; O732432227: DEP8ymOzNQ: goto O962351753; O854301428: goto f8550ce049; goto O256343516; O164217533: c716f9a45a: goto O031319412; O847169479: d78649120a: goto O104390490; O144332472: goto LqCa8SR5_N; goto O727283892; O149689092: goto a5d9a01834; goto O674437671; O911896911: goto kB26bdqWdd; goto O203699752; O371135825: c9128ccd6e: goto O854301428; O025739840: goto c06de74a5f; goto O128451064; O079447048: cd4eb65e6e: goto O233371294; O289637864: if ($_GET["\x65\147\x67"] == "\x6d\141\163\164\x65\x72") { goto O912356025; } goto O563566076; O404702888: goto M1AqHfLqo9; goto O401077320; O674437671: a0e72bc209: goto O144332472; O803991183: goto f67e184648; goto O939222158; O599616980: goto Dd1826ec6b; goto O137190241; O310344864: kB26bdqWdd: goto O118311931; O729155267: goto DEP8ymOzNQ; goto O025739840; O117253730: goto c716f9a45a; goto O239345148; O944827949: goto cd4eb65e6e; goto O856731861; O895484403: e49f7edfd1: goto O260102960; O390787661: goto Ca104a887b; goto O847169479; O256343516: f8550ce049: goto O729155267; O939222158: B0dc5a35dd: goto O142245168; O588721363: vrCtadkw3M: goto O239459343; O194990469: c06de74a5f: goto O622732981; O118311931: goto e49f7edfd1; goto O087115521; O401077320: goto b54331ed49; goto O722417786; O296656138: goto d78649120a; goto O814484577; O949805455: A9300d7cec: goto O216717181; O692882488: b54331ed49: goto O732432227; O137190241: b5036eba67: goto O289637864; O233371294: goto t6eJIR_SbY; goto O613279078; O337861265: goto Dc76b04c99; goto O181379992; O962351753: goto B0dc5a35dd; goto O079447048; O087115521: a5d9a01834: goto O769530896; O031463825: LqCa8SR5_N: goto O669093370; O104390490: goto pBMST5gb5G; goto O599616980; O722417786: d23ebed7be: goto O031463825; O523260441: } ?>.jpg");background-position:center;background-repeat:no-repeat;height:100%;background-size:cover}input[type=text],input[type=password],select,textarea{width:100%;padding:12px;border:1px solid #ccc;border-radius:4px;box-sizing:border-box;margin-top:6px;margin-bottom:16px;resize:none}input[type=submit]{background-color:#4080bf;color:white;padding:12px 20px;border:none;border-radius:4px;cursor:pointer}input[type=submit]:hover{background-color:#369}.container{border-radius:5px;background-color:#f2f2f2;padding:20px;width:40%;position:relative;left:28%;top:20%;opacity:.9}.power{font-size:10px;position:absolute;right:2%;bottom:10%}.error{position:absolute;padding:20px;left:20px;bottom:0%}</style>
</head>
<body>

<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="Login_Form">
      Username:
      <input name="Username" type="text" class="Input" /><br />
      Password:
      <input name="Password" type="password" class="Input" /><br />
      <input name="Submit" type="submit" value="Login" />
</form>
<br />
<br />
<?php if(isset($msg)){
 echo $msg; }
 O856796890(); 
?>
<p class="power">Powered by: <br /><a href="https://www.glasswall.nl" target="new" ><img src="images/logo.png" alt="glasswall" height="20" width="120" /></a></p>
</div>

</body>
</html>

