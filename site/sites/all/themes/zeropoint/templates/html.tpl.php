<?php
	global $base_url;
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" version="XHTML+RDFa 1.0" dir="<?php print $language->dir; ?>"
  <?php print $rdf_namespaces ?>>
  <head profile="<?php print $grddl_profile ?>">
    <title><?php print $head_title ?></title>
    <meta name="ver" content="zp7-1.12"/>
    <meta http-equiv="X-UA-Compatible" content="edge" />
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
    <!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
    <!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
    <!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <!-- <link href="<?php // print $base_url; ?>/sites/all/themes/zeropoint/bootstrap/less/bootstrap.css" rel="stylesheet" type="text/css" media="all"></link> -->
    <link href="http://fnt.webink.com/wfs/webink.css/?project=9A808E5A-3FCD-4CCA-94EB-621649737250&fonts=C2D20D0C-20D5-34EA-EBC3-5505D3F19057:f=AltoProExCon-LightItalic,5DD1A08F-E08C-456F-FB29-61CA507CEAB4:f=AktivGrotesk-Light,00AC4E64-6F6B-73AC-A617-BF560BFA84CE:f=AktivGrotesk-Hairline,5AFAB79E-F42A-6106-43DC-E9CF6B4B3F51:f=AltoPro-Bold,D270FD56-9FCB-6872-64DA-DAF211E8885D:f=AktivGrotesk-HairlineItalic,0937E22E-86C3-7D75-A62A-77CD81126806:f=AdelleSans-SemiBoldItalic,0946D83D-2E29-0BA0-B89F-9D55EBA74087:f=AltoProExCon-Thin,A678D579-2838-835A-221F-78A0CC000825:f=AltoPro-NormalItalic,2C0D7763-5177-E03A-E6B7-ADDB78F3A1CD:f=AltoPro-ExtraLightItalic,7D131907-C6B3-B3DA-FD64-05434AD7C242:f=AltoProExCon-Bold,8FA6AF8B-6567-8F94-5FBF-1507E28E8D66:f=AltoProExCon-NormalItalic,F51E0A45-8462-EE8C-7F19-E5DE76777764:f=AltoProExCon-BlackItalic,6BF117A9-C47B-562D-47BE-5D5B3B34EE0F:f=AltoPro-ThinItalic,5E820058-7465-4DA1-4BD6-0A1584A7F5E3:f=AdelleSans-ThinItalic,90A45BC8-DC4D-860E-6732-601DF07F68A0:f=AltoProExCon-ExtraLightItalic,3D9D8F6E-3277-A735-C126-2CC8CED527E2:f=AltoPro-Thin,0454C3FD-6206-9AB1-8FC7-52A41E1F6AB8:f=AdelleSans-ExtraBold,A9F1ADF8-A1F8-6FBD-CF74-FEDA8359FEAF:f=AltoPro-Light,A219BE1F-A479-3A73-B6C9-3C4BA6EDD334:f=AltoProExCon-ThinItalic,36091B84-0309-838D-72E7-BD4D64FBCB67:f=AltoPro-Black" rel="stylesheet" type="text/css"/><link href="http://fnt.webink.com/wfs/webink.css/?project=9A808E5A-3FCD-4CCA-94EB-621649737250&fonts=D3AE0269-6B2D-C503-71DF-F51FA085FB3F:f=AktivGrotesk-BoldItalic,F2CFCA4D-8BA4-34C3-542D-D244B6E0762C:f=AltoPro-BlackItalic,6A86C6E4-DCA9-4693-4A43-99899922B28C:f=AltoPro-BoldItalic,0FADB216-0D3C-8408-E038-E17BCDD59B3D:f=AdelleSans-ExtraBoldItalic,76F08458-8B7B-23F4-7D8E-754470E151DF:f=AltoProExCon-ExtraLight,35439AB4-AE5C-6414-19AF-3BEAA3F5D579:f=AktivGrotesk-Regular,29AEAE82-9A63-C919-5496-92FEA65ACA5E:f=AdelleSans-Thin,74C76D1E-ED43-7B7B-1FBD-BE4ABADE337E:f=AltoPro-LightItalic,49084C4C-16B8-3BE4-468D-A83E50D809C7:f=AktivGrotesk-Medium,711B2DEA-9711-C5A0-F489-79997F6FA9D9:f=AltoProExCon-ExtraBold,939848D0-04C3-4B6F-F127-AF02B4E01452:f=AdelleSans-Italic,47ABC6AD-B610-5729-B7DD-F77D73A46F25:f=AltoProExCon-ExtraBoldItalic,0E7DE3C3-8B20-CD02-B702-F90CEE60C548:f=AdelleSans-LightItalic,EC97E04B-F755-5466-CB30-5CA81AC8657C:f=AktivGrotesk-XBold,A47C7099-7C76-E7E1-6EE7-370D55DBB9DB:f=AltoProExCon-BoldItalic,7BCAE332-1645-925C-42BA-1BE08D80ADB4:f=AktivGrotesk-BlackItalic,49646B82-9FB1-6969-0323-3FF1B7EA2F84:f=AktivGrotesk-Black,FFE46CD9-0AEF-4C04-9D03-61D96C54B387:f=AltoProExCon-Black,8B38A321-E20E-4486-97D0-6F9310AB73F6:f=AltoProExCon-Medium,F5431921-A5D5-51D8-5381-DDFE52A00A35:f=AltoProExCon-SemiBoldItalic" rel="stylesheet" type="text/css"/><link href="http://fnt.webink.com/wfs/webink.css/?project=9A808E5A-3FCD-4CCA-94EB-621649737250&fonts=0EFF2364-9D58-0735-E88C-990B2756000B:f=AdelleSans-Bold,49E90CB6-0944-72CE-A0E7-8D521C8E676C:f=AdelleSans-Light,885CAC5B-6C8F-E0F0-3D6F-516396CC79E8:f=AltoProExCon-MediumItalic,70A9E718-0548-60AD-8E69-A79B8B6BAC4D:f=AltoProExCon-Light,82238A4F-BD47-F1E6-A790-9B61B9AE2AB5:f=AktivGrotesk-ThinItalic,903FAEEB-FC13-E5EB-251E-BBA65D42C275:f=AltoPro-MediumItalic,A0370440-8CAB-A8B4-8836-3E29615A7892:f=AdelleSans-BoldItalic,FE989403-0D08-EA80-5CB7-A8ACD0C0FB66:f=AltoPro-SemiBold,32CDB364-F6F7-9ECA-2507-E2F105107DAE:f=AltoPro-ExtraLight,916E167A-E7A8-0634-4302-DCB4DCCCA4E3:f=AltoPro-Normal,646F65BB-7FDB-DF82-711F-897188F11EE8:f=AdelleSans-SemiBold,A2BCA951-65BD-7319-2274-B7412780FCF3:f=AltoPro-ExtraBoldItalic,FBA61642-F080-70BE-1C80-543B6C5714AC:f=AltoPro-ExtraBold,1D5A1728-B074-70D3-E0A9-27A9CA680FC1:f=AltoProExCon-Normal,3A37CA8C-33C3-9B2C-FC1E-09498B74B40B:f=AktivGrotesk-XBoldItalic,355018A0-6A06-C9CE-0565-307FC0A74626:f=AktivGrotesk-MediumItalic,F2AD75C9-966D-62CB-2963-873ECEF3C72D:f=AltoPro-SemiBoldItalic,55CD9F30-B0D5-724D-32DA-38F204134B8F:f=AdelleSans-Heavy,1176510B-8371-226C-F4C1-A50E8F873A71:f=AdelleSans-Regular,42B58F43-3202-B582-62EA-F37810F63280:f=AdelleSans-HeavyItalic" rel="stylesheet" type="text/css"/><link href="http://fnt.webink.com/wfs/webink.css/?project=9A808E5A-3FCD-4CCA-94EB-621649737250&fonts=188BC00F-56B9-D141-CACA-6C44670AB9C2:f=AktivGrotesk-LightItalic,6A731DEA-219D-CF57-9893-8DE078AC2D3E:f=AktivGrotesk-Thin,CD6652B9-C61A-F4C0-53F5-E2A0EBC487B4:f=AktivGrotesk-Bold,BC831C2C-E7D1-550A-BEFF-30D4302F3196:f=AltoPro-Medium,C7D9F041-C1F2-9B83-8E00-036972DB1DB4:f=AktivGrotesk-Italic,B605C6F8-F954-B403-C08D-6E8F21F316C5:f=AltoProExCon-SemiBold" rel="stylesheet" type="text/css"/>
    <!-- Included CSS Files (Compressed) -->
    <!-- <link rel="stylesheet" href="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/stylesheets/foundation.min.css">
    <link rel="stylesheet" href="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/stylesheets/main.css">
    <link rel="stylesheet" href="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/stylesheets/app.css"> -->
    <link rel="stylesheet" href="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/stylesheets/all.css">
    <script src="<?php print $base_url; ?>/sites/all/themes/zeropoint/js/jquery.js"></script>
    <script src="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/javascripts/modernizr.foundation.js"></script>
    <script src="<?php print $base_url; ?>/sites/all/themes/zeropoint/js/integral.js"></script>
    <script src="<?php print $base_url; ?>/sites/all/themes/zeropoint/js/jquery-scrollspy.js"></script>
    <link rel="stylesheet" href="<?php print $base_url; ?>/sites/all/themes/zeropoint/base2013/ligature.css"> 
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
    <!-- IE Fix for HTML5 Tags -->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body id="<?php print $body_id; ?>" class="<?php print $classes; ?>" <?php print $attributes;?>>
      <?php print $page_top; ?>
      <?php print $page; ?>
      <?php print $page_bottom; ?>
      <?php print $page_b; ?>
  </body>
</html>