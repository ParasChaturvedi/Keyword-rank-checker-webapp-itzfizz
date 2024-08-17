<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>SEO Keyword Rank Checker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <!-- <div id="header">
        <div id="logo">
            <img src=https://itzfizz.b-cdn.net/wp-content/uploads/2022/07/cropped-itzfizzlogo.png" alt="Logo">
                </div>
        <div id="navigation">
            <ul>
                <li><a href="https://itzfizz.com/about">About</a></li>
                <li class="dropdown">
                    <a href="#">Resources</a>
                    <ul>
                        <li><a href="https://itzfizz.com/blog">Blog</a></li>
                        <li><a href="https://itzfizz.com/digital-marketing-glossary">Glossary</a></li>
                    </ul>
                </li>
                <li><a href="https://itzfizz.com/contact">Contact</a></li>
            </ul>
            <a href="https://itzfizz.com/get-started" id="cta">Get Started</a>
        </div>
    </div> -->
	<section id="section-1">
		<div class="primary-heading">
			<h1>Keyword Rank Checker </h1>
			<h2>See where you rank for any keyword in 216 locations. </h2>
		</div>
    <div class="main">
		
<form action="" method="POST">

	<input name="query" type="text" placeholder="Enter Keyword" size="40" required/ class="label">
	<input name="domain" type="text" placeholder="Domain Name" size="40" required/ class="label2">
	<label for="gl" >Country:</label>
	<select name="gl" class="label3">
		<?php
		$countryOptions = array(
			'us' => 'United States',
			'af' => 'Afghanistan',
			'al' => 'Albania',
			'dz' => 'Algeria',
			'as' => 'American Samoa',
'ad' => 'Andorra',
'ao' => 'Angola',
'ai' => 'Anguilla',
'aq' => 'Antarctica',
'ag' => 'Antigua and Barbuda',
'ar' => 'Argentina',
'am' => 'Armenia',
'aw' => 'Aruba',
'au' => 'Australia',
'at' => 'Austria',
'az' => 'Azerbaijan',
'bs' => 'Bahamas',
'bh' => 'Bahrain',
'bd' => 'Bangladesh',
'bb' => 'Barbados',
'by' => 'Belarus',
'be' => 'Belgium',
'bz' => 'Belize',
'bj' => 'Benin',
'bm' => 'Bermuda',
'bt' => 'Bhutan',
'bo' => 'Bolivia',
'ba' => 'Bosnia and Herzegovina',
'bw' => 'Botswana',
'bv' => 'Bouvet Island',
'br' => 'Brazil',
'io' => 'British Indian Ocean Territory',
'bn' => 'Brunei Darussalam',
'bg' => 'Bulgaria',
'bf' => 'Burkina Faso',
'bi' => 'Burundi',
'kh' => 'Cambodia',
'cm' => 'Cameroon',
'ca' => 'Canada',
'cv' => 'Cape Verde',
'ky' => 'Cayman Islands',
'cf' => 'Central African Republic',
'td' => 'Chad',
'cl' => 'Chile',
'cn' => 'China',
'cx' => 'Christmas Island',
'cc' => 'Cocos (Keeling) Islands',
'co' => 'Colombia',
'km' => 'Comoros',
'cg' => 'Congo',
'cd' => 'Congo, the Democratic Republic of the',
'ck' => 'Cook Islands',
'cr' => 'Costa Rica',
'ci' => 'Cote Divoire',
'hr' => 'Croatia',
'cu' => 'Cuba',
'cy' => 'Cyprus',
'cz' => 'Czech Republic',
'dk' => 'Denmark',
'dj' => 'Djibouti',
'dm' => 'Dominica',
'do' => 'Dominican Republic',
'ec' => 'Ecuador',
'eg' => 'Egypt',
'sv' => 'El Salvador',
'gq' => 'Equatorial Guinea',
'er' => 'Eritrea',
'ee' => 'Estonia',
'et' => 'Ethiopia',
'fk' => 'Falkland Islands (Malvinas)',
'fo' => 'Faroe Islands',
'fj' => 'Fiji',
'fi' => 'Finland',
'fr' => 'France',
'gf' => 'French Guiana',
'pf' => 'French Polynesia',
'tf' => 'French Southern Territories',
'ga' => 'Gabon',
'gm' => 'Gambia',
'ge' => 'Georgia',
'de' => 'Germany',
'gh' => 'Ghana',
'gi' => 'Gibraltar',
'gr' => 'Greece',
'gl' => 'Greenland',
'gd' => 'Grenada',
'gp' => 'Guadeloupe',
'gu' => 'Guam',
'gt' => 'Guatemala',
'gn' => 'Guinea',
'gw' => 'Guinea-Bissau',
'gy' => 'Guyana',
'ht' => 'Haiti',
'hm' => 'Heard Island and Mcdonald Islands',
'va' => 'Holy See (Vatican City State)',
'hn' => 'Honduras',
'hk' => 'Hong Kong',
'hu' => 'Hungary',
'is' => 'Iceland',
'in' => 'India',
'id' => 'Indonesia',
'ir' => 'Iran, Islamic Republic of',
'iq' => 'Iraq',
'ie' => 'Ireland',
'il' => 'Israel',
'it' => 'Italy',
'jm' => 'Jamaica',
'jp' => 'Japan',
'jo' => 'Jordan',
'kz' => 'Kazakhstan',
'ke' => 'Kenya',
'ki' => 'Kiribati',
'kp' => 'Korea, Democratic People Republic of',
'kr' => 'Korea, Republic of',
'kw' => 'Kuwait',
'kg' => 'Kyrgyzstan',
'la' => 'Lao People Democratic Republic',
'lv' => 'Latvia',
'lb' => 'Lebanon',
'ls' => 'Lesotho',
'lr' => 'Liberia',
'ly' => 'Libyan Arab Jamahiriya',
'li' => 'Liechtenstein',
'lt' => 'Lithuania',
'lu' => 'Luxembourg',
'mo' => 'Macao',
'mk' => 'Macedonia, the Former Yugosalv Republic of',
'mg' => 'Madagascar',
'mw' => 'Malawi',
'my' => 'Malaysia',
'mv' => 'Maldives',
'ml' => 'Mali',
'mt' => 'Malta',
'mh' => 'Marshall Islands',
'mq' => 'Martinique',
'mr' => 'Mauritania',
'mu' => 'Mauritius',
'yt' => 'Mayotte',
'mx' => 'Mexico',
'fm' => 'Micronesia, Federated States of',
'md' => 'Moldova, Republic of',
'mc' => 'Monaco',
'mn' => 'Mongolia',
'ms' => 'Montserrat',
'ma' => 'Morocco',
'mz' => 'Mozambique',
'mm' => 'Myanmar',
'na' => 'Namibia',
'nr' => 'Nauru',
'np' => 'Nepal',
'nl' => 'Netherlands',
'an' => 'Netherlands Antilles',
'nc' => 'New Caledonia',
'nz' => 'New Zealand',
'ni' => 'Nicaragua',
'ne' => 'Niger',
'ng' => 'Nigeria',
'nu' => 'Niue',
'nf' => 'Norfolk Island',
'mp' => 'Northern Mariana Islands',
'no' => 'Norway',
'om' => 'Oman',
'pk' => 'Pakistan',
'pw' => 'Palau',
'ps' => 'Palestinian Territory, Occupied',
'pa' => 'Panama',
'pg' => 'Papua New Guinea',
'py' => 'Paraguay',
'pe' => 'Peru',
'ph' => 'Philippines',
'pn' => 'Pitcairn',
'pl' => 'Poland',
'pt' => 'Portugal',
'pr' => 'Puerto Rico',
'qa' => 'Qatar',
're' => 'Reunion',
'ro' => 'Romania',
'ru' => 'Russian Federation',
'rw' => 'Rwanda',
'sh' => 'Saint Helena',
'kn' => 'Saint Kitts and Nevis',
'lc' => 'Saint Lucia',
'pm' => 'Saint Pierre and Miquelon',
'vc' => 'Saint Vincent and the Grenadines',
'ws' => 'Samoa',
'sm' => 'San Marino',
'st' => 'Sao Tome and Principe',
'sa' => 'Saudi Arabia',
'sn' => 'Senegal',
'cs' => 'Serbia and Montenegro',
'sc' => 'Seychelles',
'sl' => 'Sierra Leone',
'sg' => 'Singapore',
'sk' => 'Slovakia',
'si' => 'Slovenia',
'sb' => 'Solomon Islands',
'so' => 'Somalia',
'za' => 'South Africa',
'gs' => 'South Georgia and the South Sandwich Islands',
'es' => 'Spain',
'lk' => 'Sri Lanka',
'sd' => 'Sudan',
'sr' => 'Suriname',
'sj' => 'Svalbard and Jan Mayen',
'sz' => 'Swaziland',
'se' => 'Sweden',
'ch' => 'Switzerland',
'sy' => 'Syrian Arab Republic',
'tw' => 'Taiwan, Province of China',
'tj' => 'Tajikistan',
'tz' => 'Tanzania, United Republic of',
'th' => 'Thailand',
'tl' => 'Timor-Leste',
'tg' => 'Togo',
'tk' => 'Tokelau',
'to' => 'Tonga',
'tt' => 'Trinidad and Tobago',
'tn' => 'Tunisia',
'tr' => 'Turkey',
'tm' => 'Turkmenistan',
'tc' => 'Turks and Caicos Islands',
'tv' => 'Tuvalu',
'ug' => 'Uganda',
'ua' => 'Ukraine',
'ae' => 'United Arab Emirates',
'uk' => 'United Kingdom',
'um' => 'United States Minor Outlying Islands',
'uy' => 'Uruguay',
'uz' => 'Uzbekistan',
'vu' => 'Vanuatu',
've' => 'Venezuela',
'vn' => 'Viet Nam',
'vg' => 'Virgin Islands, British',
'vi' => 'Virgin Islands, U.S.',
'wf' => 'Wallis and Futuna',
'eh' => 'Western Sahara',
'ye' => 'Yemen',
'zm' => 'Zambia',
			// Add more country options here
			'zw' => 'Zimbabwe'
		);

		foreach ($countryOptions as $code => $name) {
			echo '<option value="' . $code . '">' . $name . '</option>';
		}
		?>
	</select>
	
	<label for="hl">Language:</label>
	<select name="hl" class="label4">
		<?php
		$languageOptions = array(
			'en' => 'English',
			'af' => 'Afrikaans',
			'sq' => 'Albanian',
			'sm' => 'Amharic',
'ar' => 'Arabic',
'az' => 'Azerbaijani',
'eu' => 'Basque',
'be' => 'Belarusian',
'bn' => 'Bengali',
'bh' => 'Bihari',
'bs' => 'Bosnian',
'bg' => 'Bulgarian',
'ca' => 'Catalan',
'zh-CN' => 'Chinese (Simplified)',
'zh-TW' => 'Chinese (Traditional)',
'hr' => 'Croatian',
'cs' => 'Czech',
'da' => 'Danish',
'nl' => 'Dutch',
'eo' => 'Esperanto',
'et' => 'Estonian',
'fo' => 'Faroese',
'fi' => 'Finnish',
'fr' => 'French',
'fy' => 'Frisian',
'gl' => 'Galician',
'ka' => 'Georgian',
'de' => 'German',
'el' => 'Greek',
'gu' => 'Gujarati',
'iw' => 'Hebrew',
'hi' => 'Hindi',
'hu' => 'Hungarian',
'is' => 'Icelandic',
'id' => 'Indonesian',
'ia' => 'Interlingua',
'ga' => 'Irish',
'it' => 'Italian',
'ja' => 'Japanese',
'jw' => 'Javanese',
'kn' => 'Kannada',
'ko' => 'Korean',
'la' => 'Latin',
'lv' => 'Latvian',
'lt' => 'Lithuanian',
'mk' => 'Macedonian',
'ms' => 'Malay',
'ml' => 'Malayam',
'mt' => 'Maltese',
'mr' => 'Marathi',
'ne' => 'Nepali',
'no' => 'Norwegian',
'nn' => 'Norwegian (Nynorsk)',
'oc' => 'Occitan',
'fa' => 'Persian',
'pl' => 'Polish',
'pt-BR' => 'Portuguese (Brazil)',
'pt-PT' => 'Portuguese (Portugal)',
'pa' => 'Punjabi',
'ro' => 'Romanian',
'ru' => 'Russian',
'gd' => 'Scots Gaelic',
'sr' => 'Serbian',
'si' => 'Sinhalese',
'sk' => 'Slovak',
'sl' => 'Slovenian',
'es' => 'Spanish',
'su' => 'Sudanese',
'sw' => 'Swahili',
'sv' => 'Swedish',
'tl' => 'Tagalog',
'ta' => 'Tamil',
'te' => 'Telugu',
'th' => 'Thai',
'ti' => 'Tigrinya',
'tr' => 'Turkish',
'uk' => 'Ukrainian',
'ur' => 'Urdu',
'uz' => 'Uzbek',
'vi' => 'Vietnamese',
'cy' => 'Welsh',
'xh' => 'Xhosa',
			// Add more language options here
			'nl' => 'Dutch'
		);

		foreach ($languageOptions as $code => $name) {
			echo '<option value="' . $code . '">' . $name . '</option>';
		}
		?>
		
	</select>
	
	<label for="pages">Check within</label>
<select name="pages" id="pages">
	<?php
	$options = array(
		"1" => "First results page",
		"2" => "First 2 result pages",
		"5" => "First 5 pages"
	);
	foreach ($options as $value => $text) {
		echo "<option value=\"$value\">$text</option>";
	}
	?>
</select>
	<input type="submit" value="Check Ranking!"/>
</form>
<!-- <div class="ghjk">
<p>For example,<br />keyword <span style="text-decoration: underline;">research</span> and <span style="text-decoration: underline;">itzfizz.com</span></p>
</div> -->
<!-- <div class="my-div">
  <img src="https://itzfizz.com/wp-content/uploads/2023/06/image-36.png" alt="Description of the image">
</div> -->

</div>
<img src="Group 1000003120.png" alt="" class="bg-backdrop">
</section>

	<?php
if (isset($_POST["domain"]) && isset($_POST["query"])){


	$GOOGLE_API_KEY = 'AIzaSyBFwqOfg4gqPxYiN2XgEV-lfk9QoJgZvWg';
	$GOOGLE_CSE_CX = '51c6ee8b88c89435e';


	$query = urlencode($_POST["query"]);
	$domain = $_POST["domain"];

	//gl - google host - https://developers.google.com/custom-search/docs/xml_results_appendices#countryCodes
	//hl - user language - https://developers.google.com/custom-search/docs/xml_results_appendices#interfaceLanguages
	//pages - how many pages should the search extend


	$pages = isset($_POST["pages"])?$_POST["pages"]:1;
	$gl = isset($_POST["gl"])?$_POST["gl"]:"us";
	$hl = isset($_POST["hl"])?$_POST["hl"]:"en";



	$found = false;
	echo "<ul>";
	for ($page = 1;$page <= $pages && $found == false;$page++){
		$apiurl = sprintf('https://www.googleapis.com/customsearch/v1?q=%s&cx=%s&key=%s&hl=%s&gl=%s&start=%d',$query,$GOOGLE_CSE_CX,$GOOGLE_API_KEY,$hl,$gl,($page-1)*10+1);
		// echo $apiurl;
		$json = file_get_contents($apiurl);
		// $json = file_get_contents('http://localhost/wordpress/serp-checker/test.json');
		$obj = json_decode($json);

		
		foreach ($obj->items as $idx=>$item) {
			if (strpos($item->link, $domain) ){
				$found = true;
				echo "<li>";
			} else{
				echo "<li class='other'>";
			}
				echo "<span class='rank'>".($idx + ($page-1)*10 +1)."</span>";
				echo "<span class='title'>".$item->htmlTitle."</span>";
				echo "<span class='link'>".$item->link."<small>&#x25BC;</small></span>";
				echo "<span class='snippet'>".$item->htmlSnippet."</span>";
				echo "</li>";
			
		}
	}
	if ($found !== true){
		echo "<li>";
			echo "<span class='title'>".$domain." not found</span>";
		echo "</li>";
	}
	echo "</ul>";

}
?>
	<!-- <?php include 'result.php'; ?> -->
	
	
<!-- 	
	  <footer class="footer">
    <div class="footer-logo">
      <img src="https://itzfizz.com/wp-content/uploads/2022/07/cropped-itzfizzlogo.png" alt="Logo">
       <div class="logo-list">
        <a href="https://www.linkedin.com/company/itzfizzz/"><img src="https://itzfizz.com/wp-content/uploads/2023/06/linkedin-1.png" alt="Logo 1"></a>
        <a href="https://www.instagram.com/itzfizz_digital/"><img src="https://itzfizz.com/wp-content/uploads/2023/06/instagram-1.png" alt="Logo 2"></a>
        <a href="https://www.youtube.com/@itzfizz_digital"><img src="https://itzfizz.com/wp-content/uploads/2023/06/youtube.png" alt="Logo 3"></a>
        <a href="https://www.facebook.com/itzfizz.digital"><img src="https://itzfizz.com/wp-content/uploads/2023/06/facebook.png" alt="Logo 4"></a>
      </div>
      
      <p>&copy; 2023 My Website. All rights reserved.</p>
    </div>
   <ul class="footer-list">
        
        <li><a href="https://itzfizz.com/terms-of-service">Terms of Service</a></li>
        <li><a href="https://itzfizz.com/privacy-policy">Privacy Policy</a></li>
        <li><a href="https://itzfizz.com/seo-analyzer/">SEO Checker</a></li>
        <li><a href="https://itzfizz.com/guest-blogging-guidelines">Guest Blog</a></li>
        <li><a href="https://itzfizz.com/contact">Contact</a></li>
      </ul>
    </div>
  </footer> -->
</body>
</html>
