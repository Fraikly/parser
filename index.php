<?php

//$url="https://domsakhcom.ru/list?utm_source=rentsakhcom.ru&utm_campaign=mainmenu&utm_medium=cpc&page=1&search_query=eefe2913f21621701546f9e3f792f74c"; //domsakhom
//$url="https://yuzhno-sahalinsk.cian.ru/snyat/"; //cian
//$url="https://yuzhno-saxalinsk.domclick.ru/search?deal_type=rent&from=topline2020"; //domclick
$url='https://www.avito.ru/sahalinskaya_oblast/kvartiry/sdam/na_dlitelnyy_srok-ASgBAgICAkSSA8gQ8AeQUg?cd=1'; //avito

$proxy = "194.28.208.176:9453";
$proxy_auth = 'wrx88x:HgTtTa';

//$ua = 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.13 (KHTML, like Gecko) Chrome/0.A.B.C Safari/525.13';



$ch = curl_init();

//для авито
$header = array(
":authority: www.avito.ru",
":method: GET",
":path: /sahalinskaya_oblast/kvartiry/sdam/na_dlitelnyy_srok-ASgBAgICAkSSA8gQ8AeQUg?cd=1",
   " :scheme: https",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
//"accept-encoding: gzip, deflate, br",
"accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7",
"cache-control: no-cache",
"cookie: u=2tl06ufy.adyred.1drhzjdsvd70; luri=sahalinskaya_oblast; buyer_location_id=653430; abp=1; _gcl_au=1.1.91520556.1669380680; tmr_lvid=5b55c0da65bf244296ab386b032ab7ef; tmr_lvidTS=1669380681001; _ga=GA1.1.1106294291.1669380681; uxs_uid=dc99be50-6cbf-11ed-87b0-89cfdb83450b; _ym_uid=16693807401011556928; _ym_d=1669380740; isCriteoSetNew=true; f=5.10a94bb89dd075604b5abdd419952845a68643d4d8df96e9a68643d4d8df96e9a68643d4d8df96e9a68643d4d8df96e94f9572e6986d0c624f9572e6986d0c624f9572e6986d0c62ba029cd346349f36c1e8912fd5a48d02c1e8912fd5a48d0246b8ae4e81acb9fa143114829cf33ca746b8ae4e81acb9fa46b8ae4e81acb9fae992ad2cc54b8aa8b175a5db148b56e9bcc8809df8ce07f640e3fb81381f359178ba5f931b08c66a59b49948619279110df103df0c26013a2ebf3cb6fd35a0ac91e52da22a560f550df103df0c26013a7b0d53c7afc06d0bba0ac8037e2b74f92da10fb74cac1eab71e7cb57bbcb8e0f71e7cb57bbcb8e0f71e7cb57bbcb8e0f0df103df0c26013a037e1fbb3ea05095de87ad3b397f946b4c41e97fe93686adecb8388123cde3fbe04c1cd198727a0602c730c0109b9fbbc60ec9d2f66a8631c9fbdd7f5877c6d729aa4cecca288d6be2309e39baabdbde39cd92e6713f7a4d46b8ae4e81acb9fa46b8ae4e81acb9fa02c68186b443a7ac4c51f6e363721363380423af6da22f1c2da10fb74cac1eab2da10fb74cac1eab25037f810d2d41a8134ecdeb26beb8b53778cee096b7b985bf37df0d1894b088; ft='58dqcOBl0EgvMdl191KEBMPlxtp/IZX9Um500UXE+gX0ghxB6FQ1sJ+ZHmnKX4Re9EAagPJoFFqsjrsHP3AN2zpfYCVUWNOwJW8cJWWKXnyeUL1WCKietGCFZPl68cN5yRGC/Wud2RDo4nw5rdx4S8T++VZVqae7ciNvs6mv9R7lcOFxnwXFn9/h/cnvgv51'; SEARCH_HISTORY_IDS=1; _ga_9E363E7BES=GS1.1.1669380681.1.1.1669383368.59.0.0; buyer_laas_location=653430; _ym_isad=1; v=1669458770; sx=H4sIAAAAAAAC%2F1TQTXLiMBBA4btozaIl9Y%2Ba20gtKRCMAdsk4JTvPjULMsMFvnr1fhwk8V2DVVWsCXo3DNARsFYGEHT7H%2Ffl9u7Z2H9%2By3wIRZ7pOuFlvD%2FvK%2BeyHuIpup1rbu%2BZlZC8wLZzZMKs3kvUEtXHTFCbYIgefBb7leMtnG7gW23HJ83xs0FehzghlCv5q%2FyTkcVz2naOmdmqcFdWYmRtUlrUKgRmUvUl4%2Fcx8BKh5%2BUuVeYD2e18smnqrfXD4z9ZUAC3nVNMAq1by940RvNRJUDUbGLs22%2Fz7eHnMdFtwjR8HJfTY%2Fi4Zs7DZSwhyPTerH9vqEY0xFZ7N0spJC8hQhaTnKshv%2BTz6eovZb4PoeBxXlgvIwys6%2BNxGJc2vsuRt50zJEjScuFO1qEQeJRkiADMTeglk%2BXIYyt6t2leBvUU7TwrfdFaItG7nGjb%2FgQAAP%2F%2FXt%2F5mx0CAAA%3D; dfp_group=34; _ga_M29JC28873=GS1.1.1669458776.7.0.1669458776.60.0.0; _ym_visorc=b; tmr_detect=0%7C1669458782509; buyer_from_page=catalog",
"pragma: no-cache",
"sec-ch-ua: 'Google Chrome';v='107', 'Chromium';v='107', 'Not=A?Brand';v='24'",
"sec-ch-ua-mobile: ?0",
"sec-ch-ua-platform: 'Windows'",
"sec-fetch-dest: document",
"sec-fetch-mode: navigate",
"sec-fetch-site: same-origin",
"sec-fetch-user: ?1",
"upgrade-insecure-requests: 1",
"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36"

);

////циан
//$header = array(
//':authority: yuzhno-sahalinsk.cian.ru',
//':method: GET',
//':path: /snyat/',
//':scheme: https',
//'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
//'accept-encoding: gzip, deflate, br',
//'accept-language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
//'cache-control: no-cache',
//'cookie: _CIAN_GK=f3a0025d-a613-4b2a-892b-03b84a6d0cee; session_region_id=5069; adb=1; login_mro_popup=1; sopr_utm=%7B%22utm_source%22%3A+%22direct%22%2C+%22utm_medium%22%3A+%22None%22%7D; uxfb_usertype=searcher; _ga=GA1.2.909198554.1669380418; _gid=GA1.2.1090788000.1669380418; _ym_uid=1669380418657952062; _ym_d=1669380418; tmr_lvid=057560fc1957966ab6d2a259f41ae3f2; tmr_lvidTS=1669380418443; uxs_uid=402abf10-6cbf-11ed-a095-3f7d7a55eaa0; afUserId=87d7c471-8453-46e0-9984-a5990d673b58-p; AF_SYNC=1669380420692; cookie_agreement_accepted=1; session_main_town_region_id=5069; _gcl_au=1.1.1999219047.1669380479; rrpvid=495282788004715; rcuid=6378b9af4527bbec0bbbda95; __cf_bm=3bu0JxoMb0PdceN_1jE4tUW6YPlk0HFBC3lG9VzB810-1669458738-0-Aa7Nx3tR//OLnvu3Uu/fArvNAZhwe1tTX2+FM8WvDHK9n/v7hB1tg8BYxqJnsVjAynf1oTOUYjEwhtyMI4+cSUk=; sopr_session=9f1f57fc3bb0493d; _ym_isad=1; _ym_visorc=b; _gpVisits={"isFirstVisitDomain":true,"todayD":"Sat%20Nov%2026%202022","idContainer":"10002511"}; _dc_gtm_UA-30374201-1=1; tmr_detect=1%7C1669459476030; _gp10002511={"hits":2,"vc":1,"ac":1,"a6":1}',
//'pragma: no-cache',
//'sec-ch-ua: "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
//'sec-ch-ua-mobile: ?0',
//'sec-ch-ua-platform: "Windows"',
//'sec-fetch-dest: document',
//'sec-fetch-mode: navigate',
//'sec-fetch-site: none',
//'sec-fetch-user: ?1',
//'upgrade-insecure-requests: 1',
//'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36'
//
//);

////домклик
//$header = array(
//   'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
//'Accept-Encoding: gzip, deflate, br',
//'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7',
//'Cache-Control: no-cache',
//'Connection: keep-alive',
//'Cookie: currentRegionGuid=2787f1cb-a204-46ba-946b-eadf10e43782; currentLocalityGuid=428e267d-6c80-4826-8c5c-ed295062c8b8; ns_session=6a5b7e43-db8c-52ad-be7c-ef9e62204397; ftgl_cookie_id=92e0851048d6367fd82edb9239f9925d; _ym_uid=16693805621011627577; _ym_d=1669380562; _gcl_au=1.1.1600174960.1669380562; RETENTION_COOKIES_NAME=b107854b84eb43689e749fb78d1b92ca:svos8BioFVbxaQCTUWahdXDhudo; sessionId=fe790f6ae0034f368e744b50cbdfe842:PQV5x4_31ED1_G2FpRNG157Wq2k; UNIQ_SESSION_ID=1ba9e506bd524bb68830a4f7f57a7a4b:DV9bLx_QJqC39AKsARSgDrGZvlE; _gid=GA1.2.1569646306.1669380563; regionName=428e267d-6c80-4826-8c5c-ed295062c8b8:%D0%AE%D0%B6%D0%BD%D0%BE-%D0%A1%D0%B0%D1%85%D0%B0%D0%BB%D0%B8%D0%BD%D1%81%D0%BA; iap.uid=7fba57809e7d45b18e2dfbdaa672d79c; ___dmpkit___=4ff1e689-13e5-46f4-8922-843b9e6efc77; tmr_lvid=8a1af1ea0b79c336f5414f8492f91331; tmr_lvidTS=1669380563522; region={%22data%22:{%22name%22:%22%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%22%2C%22kladr%22:%2277%22%2C%22guid%22:%221d1463ae-c80f-4d19-9331-a1b68a85b553%22}%2C%22isAutoResolved%22:true}; regionAlert=1; adtech_uid=5ef38413-be4e-4532-a68b-76ddb9c5d711%3Adomclick.ru; top100_id=t1.4513750.681885486.1669380564513; currentSubDomain=yuzhno-saxalinsk; dtCookie=v_4_srv_13_sn_7C3B8C1552977E931E7CF1719C16C6C7_perc_100000_ol_0_mul_1_app-3Aa90421fc39b1dbac_1_app-3A37d82a95eb231749_0_app-3Aca312da39d5a5d07_1_rcs-3Acss_0; cookieAlert=1; _ym_isad=1; qrator_jsid=1669456572.320.hGQJS2fFBeue47Pm-9vg3vqj3i4bv88ja004iebjajt6aohjh; _ga_NP4EQL89WF=GS1.1.1669456576.2.1.1669460143.60.0.0; _dc_gtm_UA-70398634-1=1; _ga=GA1.2.1131949403.1669380562; _dc_gtm_UA-21169438-1=1; _visitId=e13feb92-a9bc-44a9-90f8-a9584b9d07b8-c3dfe9e05bcc57d2; last_visit=1669449345140%3A%3A1669460145140; tmr_detect=1%7C1669460145383; t3_sid_4513750=s1.1768297976.1669456579030.1669460197015.2.47; tmr_reqNum=38',
//'Host: yuzhno-saxalinsk.domclick.ru',
//'Pragma: no-cache',
//'sec-ch-ua: "Google Chrome";v="107", "Chromium";v="107", "Not=A?Brand";v="24"',
//'sec-ch-ua-mobile: ?0',
//'sec-ch-ua-platform: "Windows"',
//'Sec-Fetch-Dest: document',
//'Sec-Fetch-Mode: navigate',
//'Sec-Fetch-Site: none',
//'Sec-Fetch-User: ?1',
//'Upgrade-Insecure-Requests: 1',
//'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36'
//
//);




curl_setopt($ch, CURLOPT_URL,trim($url));//подключение url

//curl_setopt($ch, CURLOPT_USERAGENT, $ua);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);//https
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_PROXY, $proxy);       //прокси
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxy_auth);


curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, $header);
curl_setopt($ch, CURLOPT_TIMEOUT,15);



$result = curl_exec($ch);

if($result==false){
    print_r("ERROR". "<br>") ;
    print_r(curl_error($ch). "<br>") ;
    print_r("curl_errno = ". curl_errno($ch). "<br>") ;
}

//$result= json_decode($result, true);

echo "<pre>";
var_dump($result);
echo "</pre>";

curl_close($ch);


//require_once __DIR__ . "phpQuery-onefile.php";
//$pq = phpQuery::newDocument($result);
//$data = array();
//$listLinks = $pq->find('.iva-item-content-rejJg .iva-item-body-KLUuy .iva-item-titleStep-pdebR a');
//foreach ($listLinks as $link){
//    $data[] = pq($link)->attr('href');
//}
//var_dump($data);

