//Remember to install php

<?php
    //trainer stats vars
    $entryDate = $_POST['entryDate'];
    $exp = $_POST['exp'];
    $caught = $_POST['caught'];
    $seen = $_POST['seen'];

    //medal stats vars
    $jogger = $_POST['jogger'];
    $kanto = $_POST['kanto'];
    $collector = $_POST['collector'];
    $scientist = $_POST['scientist'];
    $breeder = $_POST['breeder'];
    $backpacker = $_POST['backpacker'];
    $sightseer = $_POST['sightseer'];
    $fisher = $_POST['fisher'];
    $battleGirl = $_POST['battleGirl'];
    $aceTrainer = $_POST['aceTrainer'];
    $youngster = $_POST['youngster'];
    $pikachu = $_POST['pikachu'];
    $unown = $_POST['unown'];
    $johto = $_POST['johto'];
    $champion = $_POST['champion'];
    $battleLegend = $_POST['battleLegend'];
    $berryMaster = $_POST['berryMaster'];
    $gymLeader = $_POST['gymLeader'];
    $hoenn = $_POST['hoenn'];
    $ranger = $_POST['ranger'];
    $idol = $_POST['idol'];
    $gentleman = $_POST['gentleman'];
    $pilot = $_POST['pilot'];
    $sinnoh = $_POST['sinnoh'];
    $greatlv = $_POST['greatlv'];
    $ultralv = $_POST['ultralv'];
    $masterlv = $_POST['masterlv'];
    $cameraman = $_POST['cameraman'];
    $unova = $_POST['unova'];
    $purifer = $_POST['purifer'];
    $hero = $_POST['hero'];
    $ultraHero = $_POST['ultraHero'];
    $bestbuddy = $_POST['bestbuddy'];
    $wayfarer = $_POST['wayfarer'];
    $successor = $_POST['successor'];
    $mega = $_POST['mega'];
    $rs = $_POST['rs'];
    $rsduo = $_POST['rsduo'];
    $triathlete = $_POST['triathlete'];
    $picnicker = $_POST['picnicker'];
    $kalos = $_POST['kalos'];
    $friendfinder = $_POST['friendfinder'];
    $raidexpert = $_POST['raidexpert'];

    //type stats vars
    $schoolkid = $_POST['schoolkid'];
    $blackbelt = $_POST['blackbelt'];
    $birdkeeper = $_POST['birdkeeper'];
    $punkgirl = $_POST['punkgirl'];
    $ruinmaniac = $_POST['ruinmaniac'];
    $hiker = $_POST['hiker'];
    $bugcatcher = $_POST['bugcatcher'];
    $hexmaniac = $_POST['hexmaniac'];
    $railstaff = $_POST['railstaff'];
    $kindler = $_POST['kindler'];
    $swimmer = $_POST['swimmer'];
    $gardener = $_POST['gardener'];
    $rocker = $_POST['rocker'];
    $psychic = $_POST['psychic'];
    $skier = $_POST['skier'];
    $dragontamer = $_POST['dragontamer'];
    $delinquent = $_POST['delinquent'];
    $fairytail = $_POST['fairytail'];

/*
    //irl-event vars
    $gofest2017 = $_POST['gofest2017'];
    $pikaoutbreak2017 = $_POST['pikaoutbreak2017'];
    $sz_eu_sep2017 = $_POST['sz_eu_sep2017'];
    $sz_eu_oct2017a = $_POST['sz_eu_oct2017a'];
    $sz_eu_sep2017b = $_POST['sz_eu_sep2017b'];
    $gofest2018 = $_POST['gofest2018'];
    $sw_jap_2018 = $_POST['sw_jap_2018'];
    $sw_korea_2018 = $_POST['sw_korea_2018'];
    $sw_jap_2019a = $_POST['sw_jap_2019a'];
    $sw_jap_2019b = $_POST['sw_jap_2019b'];
    $sz_yokosuka = $_POST['sz_yokosuka'];
    $sz_montreal = $_POST['sz_montreal'];
    $sz_stlouis = $_POST['sz_stlouis'];
    $sz_liverpool = $_POST['sz_liverpool'];
    $sz_philadelphia = $_POST['sz_philadelphia'];
    $cx_liverpool = $_POST['cx_liverpool'];
    $cx_philadelphia = $_POST['cx_philadelphia'];
    $gofest_2020 = $_POST['gofest_2020'];
    $spotlight2020a = $_POST['spotlight2020a'];
    $spotlight2020b = $_POST['spotlight2020b'];
    $spotlight2020c = $_POST['spotlight2020c'];
    $kanto_red = $_POST['kanto_red'];
    $kanto_green = $_POST['kanto_green'];
    $gofest2021 = $_POST['gofest2021'];

    //ingame-event vars
    $c_discovery = $_POST['c_discovery'];
    $d_investigate = $_POST['d_investigate'];
    $i_illusions = $_POST['i_illusions'];
    $t_tap = $_POST['t_tap'];
    $sw_2020 = $_POST['sw_2020'];
    $sw_2021 = $_POST['sw_2021'];
    $level40 = $_POST['level40'];
    $tcg1 = $_POST['tcg1'];

    //collector badge vars
    $fifth_anniversary = $_POST['fifth_anniversary'];
    $slow_discovery = $_POST['slow_discovery'];
    $friendship_day = $_POST['friendship_day'];
    $spring2021 = $_POST['spring2021'];
    $kanto_league = $_POST['kanto_league'];
    $kanto_fuchsia = $_POST['kanto_fuchsia'];
    $kanto_cerulean = $_POST['kanto_cerulean'];
    $kanto_pewter = $_POST['kanto_pewter'];
    $kanto_pallet = $_POST['kanto_pallet'];
    $kanto_raid = $_POST['kanto_raid'];
    $kanto_research = $_POST['kanto_research'];
    $kanto_evolve = $_POST['kanto_evolve'];
    $kanto_green_trade = $_POST['kanto_green_trade'];
    $kanto_green_incense = $_POST['kanto_green_incense'];
    $kanto_red_trade = $_POST['kanto_red_trade'];
    $kanto_red_incense = $_POST['kanto_red_incense'];
    $valentines2021 = $_POST['valentines2021'];
    $johto_collection = $_POST['johto_collection'];
    $hoenn_collection = $_POST['hoenn_collection'];
    $sinnoh_collection = $_POST['sinnoh_collection'];
    $unova_collection = $_POST['unova_collection'];
*/

    //database connection vars
    $servername = "localhost";
    $username = "id16936081_michaelsault";
    $password = "vJ](i1![jchEOqtg";
    $database = "id16936081_trainer_stats";

    $conn = mysqli_connect($servername, $username, $password, $database); // connect and select the database at the same time;
    
    
    // prints connection error if needed
    if(!$conn){
        die("did not connect");
    }

    $sql_ts = mysqli_query($conn, "INSERT INTO trainer_stats (userID, entryDate, xp, caught, seen) VALUES(0001, '$entryDate', $exp, $caught, $seen)");

    if(!$sql_ts){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }

    $sql_gp = mysqli_query($conn, "INSERT INTO gameplay_stats (userID, jogger, kanto, collector, scientist, breeder, backpacker, sightseer, fisher, `battle girl`, `ace trainer`, youngster, `pikachu fan`, unown, johto, champion, `battle legend`, `berry master`, `gym leader`, hoenn, `pokemon ranger`, idol, gentleman, pilot, sinnoh, `gl veteran`, `ul veteran`, `ml veteran`, cameraman, unova, purifier, hero, `ultra hero`, `best buddy`, wayfarer, successor, `mega evolution`, `rising star`, `rising star duo`, triathlete, picnicker, kalos, `friend finder`, `raid expert`) VALUES(0001, $jogger, $kanto, $collector, $scientist, $breeder, $backpacker, $sightseer, $fisher, $battleGirl, $aceTrainer, $youngster, $pikachu, $unown, $johto, $champion, $battleLegend, $berryMaster, $gymLeader, $hoenn, $ranger, $idol, $gentleman, $pilot, $sinnoh, $greatlv, $ultralv, $masterlv, $cameraman, $unova, $purifer, $hero, $ultraHero, $bestbuddy, $wayfarer, $successor, $mega, $rs, $rsduo, $triathlete, $picnicker, $kalos, $friendfinder, $raidexpert)");

    if(!$sql_gp){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }

    $sql_type = mysqli_query($conn, "INSERT INTO type_stats (userID, schoolkid, blackbelt, birdkeeper, punkgirl, ruinmaniac, hiker, bugcatcher, hexmaniac, railstaff, kindler, swimmer, garderner, rocker, psychic, skier, dragontamer, delinquent, fairytailgirl) VALUES(0001, $schoolkid, $blackbelt, $birdkeeper, $punkgirl, $ruinmaniac, $hiker, $bugcatcher, $hexmaniac, $railstaff, $kindler, $swimmer, $gardener, $rocker, $psychic, $skier, $dragontamer, $delinquent, $fairytail)");

    
    if(!$sql_type){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }
/*
    $sql_irl = mysqli_query($conn, "INSERT INTO `event_medals`(`userID`, `indexID`, `gofest2017`, `pikaoutbreak2017`, `sz_eu_sep2017`, `sz_eu_oct2017a`, `sz_eu_sep2017b`, `gofest2018`, `sw_jap_2018`, `sw_korea_2018`, `sw_jap_2019a`, `sw_jap_2019b`, `sz_yokosuka`, `sz_montreal`, `sz_stlouis`, `sz_liverpool`, `sz_philadelphia`, `cx_liverpool`, `cx_philadelphia`, `gofest_2020`, `spotlight2020a`, `spotlight2020b`, `spotlight2020c`, `kanto_red`, `kanto_green`, `gofest2021`) VALUES");

    if(!$sql_irl){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }

    $sql_in_game = mysqli_query($conn, "INSERT INTO `in_game_event_medals`(`userID`, `indexID`, `c_discovery`, `d_investigate`, `i_illusions`, `t_tap`, `sw_2020`, `sw_2021`, `level40`, `tcg1`) VALUES");

    if(!$sql_in_game){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }

    $sql_collector = mysqli_query($conn, "INSERT INTO `elite_collector`(`userID`, `indexID`, `fifth_anniversary`, `slow_discovery`, `friendship_day`, `spring2021`, `kanto_league`, `kanto_fuchsia`, `kanto_cerulean`, `kanto_pewter`, `kanto_pallet`, `kanto_raid`, `kanto_research`, `kanto_evolve`, `kanto_green_trade`, `kanto_greem_incense`, `kanto_red_trade`, `kanto_red_incense`, `valentines2021`, `johto_collection`, `hoenn_collection`, `sinnoh_collection`, `unova_collection`) VALUES");

    if(!$sql_collector){ //prints query error if needed
        mysqli_error($conn);
        die("errror with insert".mysqli_error($conn)); //provides querry error message
    }
*/

    mysqli_close($conn); //disconnects from the MySQL server

?>