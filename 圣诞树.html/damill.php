<?php
	#计算iv
	$res = base64_decode('SViwUgFvCiB7G%2FpTQ5qWPLUDssWD3wt%2F3BmfW3vrSW5XPFxtBjebsqFvo7pXWhD%2FMb67MtSsywfUql6YYN%2FhMg%3D%3D');	//这里放burp放回的base64数据
	$iv = base64_decode(urldecode('sxrr9ZNXXBtCjyiEfdcSPw%3D%3D')); //这里放cookie中的iv
	$plaintext = 'a:2:{s:8:"userna';
	$new_iv = '';
	for ($i = 0; $i < 16; $i ++){
		$new_iv = $new_iv . chr(ord($iv[$i]) ^ ord($res[$i]) ^ ord($plaintext[$i]));
	}
	echo urlencode(base64_encode($new_iv));
?>
