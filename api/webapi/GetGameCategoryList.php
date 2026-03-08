<?php
	include "../../conn.php";
			
	header('Content-Type: application/json; charset=utf-8');
	header('Strict-Transport-Security: max-age=31536000');
	header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
	header('Access-Control-Allow-Credentials: true');
	$origin = isset($_SERVER['HTTP_ORIGIN']) ? $_SERVER['HTTP_ORIGIN'] : '';
	header('Access-Control-Allow-Origin: ' . $origin);
	header('vary: Origin');
	
	date_default_timezone_set("Asia/Kolkata");
	$shnunc = date("Y-m-d H:i:s");
	$res = [
		'code' => 11,
		'msg' => 'Method not allowed',
		'msgCode' => 12,
		'serviceNowTime' => $shnunc,
	];
	$shonubody = file_get_contents("php://input");
	$shonupost = json_decode($shonubody, true);
	if ($_SERVER['REQUEST_METHOD'] != 'GET') {		
		if (isset($shonupost['language']) && isset($shonupost['random']) && isset($shonupost['signature']) && isset($shonupost['timestamp'])) {
			$language = htmlspecialchars(mysqli_real_escape_string($conn, $shonupost['language']));
			$random = htmlspecialchars(mysqli_real_escape_string($conn, $shonupost['random']));
			$signature = htmlspecialchars(mysqli_real_escape_string($conn, $shonupost['signature']));
			$shonustr = '{"language":'.$language.',"random":"'.$random.'"}';
			$shonusign = strtoupper(md5($shonustr));
			if($shonusign == $signature){
				$data = [
					[
						'id' => 9,
						'typeNameCode' => 9309,
						'categoryCode' => 'BigAward',
						'categoryName' => '电子大奖',
						'state' => 1,
						'sort' => 98,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092600jsn4.png',
					],
					[
						'id' => 4,
						'typeNameCode' => 9304,
						'categoryCode' => 'Slot',
						'categoryName' => '电子游戏',
						'state' => 1,
						'sort' => 88,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092552pj7d.png',
					],
					[
						'id' => 1,
						'typeNameCode' => 9301,
						'categoryCode' => 'Lottery',
						'categoryName' => '彩票',
						'state' => 1,
						'sort' => 78,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092542sh85.png',
					],
					[
						'id' => 8,
						'typeNameCode' => 9308,
						'categoryCode' => 'Flash',
						'categoryName' => '小游戏',
						'state' => 1,
						'sort' => 68,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092452swfv.png',
					],
					[
						'id' => 3,
						'typeNameCode' => 9303,
						'categoryCode' => 'Fish',
						'categoryName' => '捕鱼游戏',
						'state' => 1,
						'sort' => 58,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092502uryl.png',
					],
					[
						'id' => 6,
						'typeNameCode' => 9306,
						'categoryCode' => 'Video',
						'categoryName' => '视讯游戏',
						'state' => 1,
						'sort' => 48,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092524eyc6.png',
					],
					[
						'id' => 5,
						'typeNameCode' => 9305,
						'categoryCode' => 'Sport',
						'categoryName' => '体育游戏',
						'state' => 1,
						'sort' => 5,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092533461f.png',
					],
					[
						'id' => 7,
						'typeNameCode' => 9307,
						'categoryCode' => 'Chess',
						'categoryName' => '棋牌游戏',
						'state' => 1,
						'sort' => 3,
						'categoryImg' => 'https://ossimg.diuacting.com/DiuWin/gamecategory/gamecategory_20240722092510alv1.png',
					],
				];

				$res['data'] = $data;
				$res['code'] = 0;
				$res['msg'] = 'Succeed';
				$res['msgCode'] = 0;
				http_response_code(200);
				echo json_encode($res);
			}
			else{
				$res['code'] = 5;
				$res['msg'] = 'Wrong signature';
				$res['msgCode'] = 3;
				http_response_code(200);
				echo json_encode($res);
			}
		}
		else{
			$res['code'] = 7;
			$res['msg'] = 'Param is Invalid';
			$res['msgCode'] = 6;
			http_response_code(200);
			echo json_encode($res);
		}		
	} else {		
		http_response_code(405);
		echo json_encode($res);
	}
?>
