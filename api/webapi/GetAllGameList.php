<?php
header("Access-Control-Allow-Origin: https://tashan.investment93.site");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
date_default_timezone_set('Asia/Kolkata');
$serviceNowTimeFormatted = date('Y-m-d H:i:s');

$jsonData = '{
      "data": {
        "popular": {
            "platformList": [
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "800",
                    "gameNameEn": "Aviator",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/800.png",
                    "imgUrl2": "",
                    "winOdds": 97.01
                },
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "100",
                    "gameNameEn": "Mines",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/100.png",
                    "imgUrl2": "",
                    "winOdds": 97.84
                },
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "105",
                    "gameNameEn": "Goal",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/105.png",
                    "imgUrl2": "",
                    "winOdds": 97.67
                },
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "902",
                    "gameNameEn": "WinGo",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/902.png",
                    "imgUrl2": "",
                    "winOdds": 96.07
                },
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "810",
                    "gameNameEn": "Cricket",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/810.png",
                    "imgUrl2": "",
                    "winOdds": 96.35
                },
                {
                    "vendorId": "23",
                    "vendorCode": "TB_Chess",
                    "gameCode": "811",
                    "gameNameEn": "Mines Pro",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/811.png",
                    "imgUrl2": "",
                    "winOdds": 97.97
                }
            ],
            "clicksTopList": [
                {
                    "vendorId": "17",
                    "vendorCode": "EVO_Electronic",
                    "gameCode": "alohaxmas0000000",
                    "gameNameEn": "Aloha! Christmas",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/EVO_Electronic/alohaxmas0000000.png",
                    "imgUrl2": "",
                    "winOdds": 96.50
                },
                {
                    "vendorId": "41",
                    "vendorCode": "G9",
                    "gameCode": "777res",
                    "gameNameEn": "Fruit 777",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/G9/777res.png",
                    "imgUrl2": "",
                    "winOdds": 97.82
                },
                {
                    "vendorId": "6",
                    "vendorCode": "JDB",
                    "gameCode": "14005",
                    "gameNameEn": "Mr. Bao",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/14005.png",
                    "imgUrl2": "",
                    "winOdds": 97.09
                },
                {
                    "vendorId": "18",
                    "vendorCode": "JILI",
                    "gameCode": "102",
                    "gameNameEn": "Roma X",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/102.png",
                    "imgUrl2": "",
                    "winOdds": 97.22
                },
                {
                    "vendorId": "4",
                    "vendorCode": "MG",
                    "gameCode": "SMG_25000Talons",
                    "gameNameEn": "25000 Talons",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/MG/SMG_25000Talons.png",
                    "imgUrl2": "",
                    "winOdds": 96.08
                },
                {
                    "vendorId": "5",
                    "vendorCode": "PG",
                    "gameCode": "101",
                    "gameNameEn": "Rise of Apollo",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/PG/101.png",
                    "imgUrl2": "",
                    "winOdds": 96.50
                },
                {
                    "vendorId": "12",
                    "vendorCode": "AG_Electronic",
                    "gameCode": "MA04",
                    "gameNameEn": "City of Fame",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/AG_Electronic/MA04.png",
                    "imgUrl2": "",
                    "winOdds": 96.70
                },
                {
                    "vendorId": "19",
                    "vendorCode": "Card365",
                    "gameCode": "567",
                    "gameNameEn": "Brust Ox",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/Card365/567.png",
                    "imgUrl2": "",
                    "winOdds": 96.51
                },
                {
                    "vendorId": "2",
                    "vendorCode": "CQ9",
                    "gameCode": "10",
                    "gameNameEn": "Lucky Bats",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/10.png",
                    "imgUrl2": "",
                    "winOdds": 96.89
                },
                {
                    "vendorId": "12",
                    "vendorCode": "AG_Electronic",
                    "gameCode": "MA01",
                    "gameNameEn": "Pool Party",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/AG_Electronic/MA01.png",
                    "imgUrl2": "",
                    "winOdds": 96.63
                },
                {
                    "vendorId": "21",
                    "vendorCode": "V8Card",
                    "gameCode": "3890",
                    "gameNameEn": "Four Cards Bull",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/V8Card/3890.png",
                    "imgUrl2": "",
                    "winOdds": 97.26
                },
                {
                    "vendorId": "2",
                    "vendorCode": "CQ9",
                    "gameCode": "105",
                    "gameNameEn": "Jumping Mobile",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/105.png",
                    "imgUrl2": "",
                    "winOdds": 96.85
                },
                {
                    "vendorId": "6",
                    "vendorCode": "JDB",
                    "gameCode": "14006",
                    "gameNameEn": "Billionaire",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/14006.png",
                    "imgUrl2": "",
                    "winOdds": 96.79
                },
                {
                    "vendorId": "41",
                    "vendorCode": "G9",
                    "gameCode": "CardSlots",
                    "gameNameEn": "Card slot",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/G9/CardSlots.png",
                    "imgUrl2": "",
                    "winOdds": 97.82
                },
                {
                    "vendorId": "5",
                    "vendorCode": "PG",
                    "gameCode": "100",
                    "gameNameEn": "Candy Bonanza",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/PG/100.png",
                    "imgUrl2": "",
                    "winOdds": 97.89
                },
                {
                    "vendorId": "4",
                    "vendorCode": "MG",
                    "gameCode": "SMG_108HeroesWaterMargin",
                    "gameNameEn": "108 Heroes Water Margin",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/MG/SMG_108HeroesWaterMargin.png",
                    "imgUrl2": "",
                    "winOdds": 97.33
                },
                {
                    "vendorId": "2",
                    "vendorCode": "CQ9",
                    "gameCode": "102",
                    "gameNameEn": "Fruity Carnival",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/102.png",
                    "imgUrl2": "",
                    "winOdds": 97.66
                },
                {
                    "vendorId": "19",
                    "vendorCode": "Card365",
                    "gameCode": "561",
                    "gameNameEn": "3 Cards",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/Card365/561.png",
                    "imgUrl2": "",
                    "winOdds": 97.89
                }
            ],
            "clicksVideoTopList": [
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_1",
                    "gameNameEn": "Baccarat",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_1.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_11",
                    "gameNameEn": "Three Cards",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_11.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_14",
                    "gameNameEn": "Sedie",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_14.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_16",
                    "gameNameEn": "Three Face",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_16.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_2",
                    "gameNameEn": "InBaccarat",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_2.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_3",
                    "gameNameEn": "DragonTiger",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_3.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_4",
                    "gameNameEn": "Roulette",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_4.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_41",
                    "gameNameEn": "Blockchain Baccarat",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_41.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                },
                {
                    "vendorId": "7",
                    "vendorCode": "DG",
                    "gameCode": "1_42",
                    "gameNameEn": "Blockchain DragonTiger",
                    "imgUrl": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/DG/1_42.png",
                    "imgUrl2": "",
                    "winOdds": 0.0
                }
            ]
        },
        "sport": [
            {
                "slotsTypeID": 25,
                "slotsName": "Wickets9",
                "vendorId": 25,
                "vendorCode": "Wickets9",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_2025032917372331c9.png"
            },
            {
                "slotsTypeID": 8,
                "slotsName": "CMD",
                "vendorId": 8,
                "vendorCode": "CMD",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_202503291809584w6e.png"
            },
            {
                "slotsTypeID": 14,
                "slotsName": "SaBa",
                "vendorId": 14,
                "vendorCode": "SaBa",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173656ob4x.png"
            },
            {
                "slotsTypeID": 15,
                "slotsName": "IM",
                "vendorId": 15,
                "vendorCode": "IM",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173714ixbo.png"
            }
        ],
        "video": [
            {
                "slotsTypeID": 26,
                "slotsName": "WM_Video",
                "vendorId": 26,
                "vendorCode": "WM_Video",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173602rb29.png"
            },
            {
                "slotsTypeID": 27,
                "slotsName": "SEXY_Video",
                "vendorId": 27,
                "vendorCode": "SEXY_Video",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173612986o.png"
            },
            {
                "slotsTypeID": 38,
                "slotsName": "MG_Video",
                "vendorId": 38,
                "vendorCode": "MG_Video",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173623yf27.png"
            },
            {
                "slotsTypeID": 7,
                "slotsName": "DG",
                "vendorId": 7,
                "vendorCode": "DG",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173526caxt.png"
            },
            {
                "slotsTypeID": 10,
                "slotsName": "AG_Video",
                "vendorId": 10,
                "vendorCode": "AG_Video",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173539q3xa.png"
            },
            {
                "slotsTypeID": 16,
                "slotsName": "EVO_Video",
                "vendorId": 16,
                "vendorCode": "EVO_Video",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173551ij2u.png"
            }
        ],
        "slot": [
            {
                "slotsTypeID": 18,
                "slotsName": "JILI",
                "vendorId": 18,
                "vendorCode": "JILI",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_2025032918122982w9.png"
            },
            {
                "slotsTypeID": 41,
                "slotsName": "G9",
                "vendorId": 41,
                "vendorCode": "G9",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329181523v91l.png"
            },
            {
                "slotsTypeID": 2,
                "slotsName": "CQ9",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_202503291811288w4n.png"
            },
            {
                "slotsTypeID": 4,
                "slotsName": "MG",
                "vendorId": 4,
                "vendorCode": "MG",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_202503291811381ifr.png"
            },
            {
                "slotsTypeID": 5,
                "slotsName": "PG",
                "vendorId": 5,
                "vendorCode": "PG",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_2025032918114674pf.png"
            },
            {
                "slotsTypeID": 6,
                "slotsName": "JDB",
                "vendorId": 6,
                "vendorCode": "JDB",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329181154v9qc.png"
            },
            {
                "slotsTypeID": 12,
                "slotsName": "AG_Electronic",
                "vendorId": 12,
                "vendorCode": "AG_Electronic",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329181206nlc2.png"
            },
            {
                "slotsTypeID": 17,
                "slotsName": "EVO_Electronic",
                "vendorId": 17,
                "vendorCode": "EVO_Electronic",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329181218ooet.png"
            }
        ],
        "chess": [
            {
                "slotsTypeID": 19,
                "slotsName": "Card365",
                "vendorId": 19,
                "vendorCode": "Card365",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173756qxy5.png"
            },
            {
                "slotsTypeID": 21,
                "slotsName": "V8Card",
                "vendorId": 21,
                "vendorCode": "V8Card",
                "state": 1,
                "vendorImg": "https://ossimg.tashanedc.com/Tashanwin/vendorlogo/vendorlogo_20250329173808g9cj.png"
            }
        ],
        "fish": [
            {
                "gameID": "82",
                "gameNameEn": "Happy Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/82.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "289",
                "gameNameEn": "Ocean King Jackpot",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/289.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "AT01",
                "gameNameEn": "OneShotFishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/AT01.png",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "AB3",
                "gameNameEn": "Paradise",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/AB3.png",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "AT05",
                "gameNameEn": "LuckyFishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/AT05.png",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "GO02",
                "gameNameEn": "Hero Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/GO02.png",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7001",
                "gameNameEn": "Dragon Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7001.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7002",
                "gameNameEn": "Dragon Fishing II",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7002.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7003",
                "gameNameEn": "CaiShen Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7003.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7004",
                "gameNameEn": "Shade Dragons Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7004.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7005",
                "gameNameEn": "Fishing YiLuFa",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7005.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7006",
                "gameNameEn": "DragonMaster",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7006.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7007",
                "gameNameEn": "Fishing Disco",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7007.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "7009",
                "gameNameEn": "Spirit Tide Legend",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/7009.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "1",
                "gameNameEn": "Royal Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/1.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "119",
                "gameNameEn": "All-star Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/119.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "20",
                "gameNameEn": "Bombing Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/20.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "212",
                "gameNameEn": "Dinosaur Tycoon II",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/212.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "GO05",
                "gameNameEn": "Onestick Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/CQ9/GO05.png",
                "vendorId": 2,
                "vendorCode": "CQ9",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "32",
                "gameNameEn": "Jack Pot Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/32.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "42",
                "gameNameEn": "Dinosaur Tycoon",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/42.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "464",
                "gameNameEn": "Fortune King Jackpot",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/464.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "60",
                "gameNameEn": "Dragon Fortune",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/60.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "71",
                "gameNameEn": "Boom Legend",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/71.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "74",
                "gameNameEn": "Mega Fishing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/74.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            }
        ],
        "flash": [
            {
                "gameID": "800",
                "gameNameEn": "Aviator",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/800.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "100",
                "gameNameEn": "Mines",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/100.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "105",
                "gameNameEn": "Goal",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/105.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "902",
                "gameNameEn": "WinGo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/902.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "810",
                "gameNameEn": "Cricket",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/810.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "811",
                "gameNameEn": "Mines Pro",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/811.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "801",
                "gameNameEn": "Aviator-1Min",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/801.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "903",
                "gameNameEn": "DragonTiger",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/903.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "114",
                "gameNameEn": "HorseRacing",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/114.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "109",
                "gameNameEn": "Coinflip",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/109.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "224",
                "gameNameEn": "Go Rush",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/224.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "229",
                "gameNameEn": "Mines",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/229.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "236",
                "gameNameEn": "Wheel",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/236.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "232",
                "gameNameEn": "Tower",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/232.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "233",
                "gameNameEn": "HILO",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/233.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "aviator",
                "gameNameEn": "Aviator",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/aviator.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "mines",
                "gameNameEn": "Mines",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/mines.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "mini-roulette",
                "gameNameEn": "Mini Roulette",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/mini-roulette.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "multikeno",
                "gameNameEn": "Keno 80",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/multikeno.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "plinko",
                "gameNameEn": "Plinko",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/plinko.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "balloon",
                "gameNameEn": "Balloon",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/balloon.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "dice",
                "gameNameEn": "Dice",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/dice.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "goal",
                "gameNameEn": "Goal",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/goal.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "hi-lo",
                "gameNameEn": "Hi Lo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/hi-lo.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "hotline",
                "gameNameEn": "Hotline",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/hotline.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "keno",
                "gameNameEn": "Keno",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/SPRIBE/keno.png",
                "vendorId": 20,
                "vendorCode": "SPRIBE",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "273",
                "gameNameEn": "Keno Super Chance",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/273.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "441",
                "gameNameEn": "Fortune Gems Scratch",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/441.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "442",
                "gameNameEn": "Go For Champion",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/442.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "459",
                "gameNameEn": "Crash Touchdown",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/459.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "235",
                "gameNameEn": "Limbo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JILI/235.png",
                "vendorId": 18,
                "vendorCode": "JILI",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "9009",
                "gameNameEn": "King Of Football",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/9009.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "9014",
                "gameNameEn": "Mines",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/9014.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "9016",
                "gameNameEn": "Goal",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/9016.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "9017",
                "gameNameEn": "HiLo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/JDB/9017.png",
                "vendorId": 6,
                "vendorCode": "JDB",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "101",
                "gameNameEn": "Hilo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/101.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "102",
                "gameNameEn": "Dice",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/102.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "103",
                "gameNameEn": "Plinko",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/103.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "104",
                "gameNameEn": "Mini Roulette",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/104.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "110",
                "gameNameEn": "Limbo",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/110.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "111",
                "gameNameEn": "Cryptos",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/111.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "112",
                "gameNameEn": "Triple",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/112.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "113",
                "gameNameEn": "Pharaoh",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/113.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "106",
                "gameNameEn": "Keno",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/106.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "107",
                "gameNameEn": "Hotline",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/107.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "108",
                "gameNameEn": "Space Dice",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/108.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "115",
                "gameNameEn": "TeenPatti",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/115.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "118",
                "gameNameEn": "DrawPoker",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/118.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "119",
                "gameNameEn": "Treasure",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/119.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "500",
                "gameNameEn": "Bomb Wave",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/500.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "501",
                "gameNameEn": "Treasure Wave",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/501.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "502",
                "gameNameEn": "Goal Wave",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/502.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "503",
                "gameNameEn": "Coin Wave",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/503.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "904",
                "gameNameEn": "WinGo 1Min",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/904.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "905",
                "gameNameEn": "WinGo 3Min",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/905.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "906",
                "gameNameEn": "WinGo 5Min",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/906.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "812",
                "gameNameEn": "Javelin",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/812.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            },
            {
                "gameID": "900",
                "gameNameEn": "Keno80",
                "img": "https://ossimg.tashanedc.com/Tashanwin/gamelogo/TB_Chess/900.png",
                "vendorId": 23,
                "vendorCode": "TB_Chess",
                "imgUrl2": "",
                "customGameType": 0
            }
        ],
        "lottery": [
            {
                "id": 1,
                "categoryCode": "Win Go",
                "categoryName": "WinGo\u5f69\u7968",
                "state": 1,
                "sort": 55,
                "categoryImg": "https://ossimg.tashanedc.com/Tashanwin/lotterycategory/lotterycategory_20250412120719dqfv.png",
                "wingoAmount": null,
                "k3Amount": null,
                "fiveDAmount": null,
                "trxWingoAmount": null
            },
            {
                "id": 2,
                "categoryCode": "K3",
                "categoryName": "K3\u5f69\u7968",
                "state": 1,
                "sort": 44,
                "categoryImg": "https://ossimg.tashanedc.com/Tashanwin/lotterycategory/lotterycategory_2025041212074073ug.png",
                "wingoAmount": null,
                "k3Amount": null,
                "fiveDAmount": null,
                "trxWingoAmount": null
            },
            {
                "id": 3,
                "categoryCode": "5D",
                "categoryName": "5D\u5f69\u7968",
                "state": 1,
                "sort": 33,
                "categoryImg": "https://ossimg.tashanedc.com/Tashanwin/lotterycategory/lotterycategory_2025041212080195lo.png",
                "wingoAmount": null,
                "k3Amount": null,
                "fiveDAmount": null,
                "trxWingoAmount": null
            },
            {
                "id": 4,
                "categoryCode": "Trx Win Go",
                "categoryName": "TrxWinGo\u5f69\u7968",
                "state": 1,
                "sort": 22,
                "categoryImg": "https://ossimg.tashanedc.com/Tashanwin/lotterycategory/lotterycategory_20250412120818j8wq.png",
                "wingoAmount": null,
                "k3Amount": null,
                "fiveDAmount": null,
                "trxWingoAmount": null
            }
        ],
        "awardRecordList": []
    },
    "code": 0,
    "msg": "Succeed",
    "msgCode": 0,
    "serviceNowTime": "' . $serviceNowTimeFormatted . '"
}';

$data = json_decode($jsonData, true);

$response = json_encode($data, JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $response;

?>