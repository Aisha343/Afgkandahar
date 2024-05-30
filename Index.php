<html>
<body>
<?php
$cz='{
	"pages":[
		{
			"url": "https://www.site-shot.com/",
			"content": null,
			"urlSettings": {
				"operation": "GET",
				"encoding": "utf8",
				"headers": {},
				"data": null
			},
			"renderType": "jpg",
           "overseerScript": '."'".'await page.waitForNavigation({waitUntil:"domcontentloaded"});   await page.type("input[type=text]","https://heylink.me/Kdrjournalist/",{delay:100}); \ page.click("button[type=submit]");'."'".',
			"outputAsJson": true,
			"requestSettings": {
				"ignoreImages": false,
				"disableJavascript": false,
				"userAgent": "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/534.34 (KHTML, like Gecko) Safari/534.34 PhantomJS/2.0.0 (PhantomJsCloud.com/2.0.1)",
				"authentication": {
					"userName": "guest",
					"password": "guest"
				},
				"xssAuditingEnabled": false,
				"webSecurityEnabled": false,
				"resourceWait": 25000,
				"resourceTimeout": 50000,
				"maxWait": 50000,
				"waitInterval": 3000,
				"stopOnError": false,
				"resourceModifier": [],
				"customHeaders": {},
				"clearCache": false,
				"clearCookies": false,
				"cookies": [],
				"deleteCookies": []
			},
			"suppressJson": [
				"events.value.resourceRequest.headers",
				"events.value.resourceResponse.headers",
				"frameData.content",
				"frameData.childFrames"
			],
			"renderSettings": {
				"quality": 70,
				"pdfOptions": {
					"border": null,
					"footer": {
						"firstPage": null,
						"height": "1cm",
						"lastPage": null,
						"onePage": null,
						"repeating": "%pageNum%/%numPages%"
					},
					"format": "letter",
					"header": null,
					"height": null,
					"orientation": "portrait",
					"width": null
				},
				"clipRectangle": null,
				"renderIFrame": null,
				"viewport": {
					"height": 1280,
					"width": 1280
				},
				"zoomFactor": 1,
				"passThroughHeaders": false
			},
			"scripts": {
				"domReady": [],
				"loadFinished": []
			}
		}
	],
	"proxy":false
}';

function base64_to_jpeg( $base64_string, $output_file ) {
    $ifp = fopen( $output_file, "wb" ); 
    fwrite( $ifp, base64_decode( $base64_string) ); 
    fclose( $ifp ); 
    return( $output_file ); 
}
$i=0;
//while( true){
$url = 'http://PhantomJScloud.com/api/browser/v2/a-demo-key-with-low-quota-per-ip-address/';
$payload = $cz;
$options = array(
    'http' => array(
        'header'  => "Content-type: application/json\r\n",
        'method'  => 'POST',
        'content' => $payload
    )
);


$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);


//if ($result === FALSE) {  Handle error }
$obj = json_decode( $result );
$base64Enc = $obj->{"content"}->{"data"};
echo "<img src='data:image/jpeg;base64,$base64Enc' />";
echo "[$i]=> success your linkvertise\n";
$i++;
//}

?>
</body>
</html>
