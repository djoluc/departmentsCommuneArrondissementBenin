<?php

public static function isSessionTokenMatch():bool{
        $str1 = filter_input(INPUT_GET, "c", FILTER_SANITIZE_STRING);
        $str2 = isset($_SESSION[self::SESSION_USER_TOKEN])?$_SESSION[self::SESSION_USER_TOKEN]:"";
        
        if(strlen($str1) != strlen($str2)) {
            
            return false;
            
        } else {
            
            $res = $str1 ^ $str2;
            $ret = 0;
            for($i = strlen($res) - 1; $i >= 0; $i--){
                $ret |= ord($res[$i]);
            }
            
            return !$ret;
        }
    }


    
    public static function deconnectUser($userId, $redirect = false){
        if(!self::isSessionTokenMatch()){
            throw new \Exception("Opération impossible");
        }
        
        $userDataSource = new \DJOLUC\RegisterBundle\Model\Frontend\UserDataSource();
        $authenticationEngineDataSource = new \DJOLUC\RegisterBundle\Model\Frontend\AuthenticationEngineDataSource();
        $authenticationEngineDataSource->updateUserOnlineStatus($userId, FALSE);
        
        $_SESSION = array();
        
        if(\session_destroy()){
            $userIdentifier = \filter_input(INPUT_COOKIE, self::COOKIE_USER_IDENTIFIER, FILTER_SANITIZE_STRING);
            $userPass = \filter_input(INPUT_COOKIE, self::COOKIE_USER_PASS, FILTER_SANITIZE_STRING);
        
            if(!empty($userIdentifier)){
                \setcookie(self::COOKIE_USER_IDENTIFIER, "", -1, "/");
                \setcookie(self::COOKIE_USER_PASS, "", -1, "/");
            }
        }
        
        if($redirect){
            \header('Location: /', true);
        }
    }

array (
  0 => 
  array (
    'name' => 'BORGOU',
    'id' => '1',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'BEMBEREKE',
        'id' => '1',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BEROUBOUAY',
            'id' => '158',
          ),
          1 => 
          array (
            'name' => 'BOUANRI',
            'id' => '159',
          ),
          2 => 
          array (
            'name' => 'GAMIA',
            'id' => '160',
          ),
          3 => 
          array (
            'name' => 'INA',
            'id' => '161',
          ),
          4 => 
          array (
            'name' => 'BEMBEREKE',
            'id' => '162',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'KALALE',
        'id' => '2',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BASSO',
            'id' => '163',
          ),
          1 => 
          array (
            'name' => 'BOUCA',
            'id' => '164',
          ),
          2 => 
          array (
            'name' => 'DERASSI',
            'id' => '165',
          ),
          3 => 
          array (
            'name' => 'DUNKASSA',
            'id' => '166',
          ),
          4 => 
          array (
            'name' => 'PEONGA',
            'id' => '167',
          ),
          5 => 
          array (
            'name' => 'KALALE',
            'id' => '168',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'N\'DALI',
        'id' => '3',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BORI',
            'id' => '169',
          ),
          1 => 
          array (
            'name' => 'GBEGOUROU',
            'id' => '170',
          ),
          2 => 
          array (
            'name' => 'OUENOU',
            'id' => '171',
          ),
          3 => 
          array (
            'name' => 'SIRAROU',
            'id' => '172',
          ),
          4 => 
          array (
            'name' => 'N\'DALI',
            'id' => '173',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'NIKKI',
        'id' => '4',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BIRO',
            'id' => '174',
          ),
          1 => 
          array (
            'name' => 'GNONKOUROKALI',
            'id' => '175',
          ),
          2 => 
          array (
            'name' => 'OUENOU',
            'id' => '176',
          ),
          3 => 
          array (
            'name' => 'SEREKALI',
            'id' => '177',
          ),
          4 => 
          array (
            'name' => 'SUYA',
            'id' => '178',
          ),
          5 => 
          array (
            'name' => 'TASSO',
            'id' => '179',
          ),
          6 => 
          array (
            'name' => 'NIKKI',
            'id' => '180',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'PARAKOU',
        'id' => '5',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => '1ER ARRONDISSEMENT',
            'id' => '181',
          ),
          1 => 
          array (
            'name' => '2EME ARRONDISSEMENT',
            'id' => '182',
          ),
          2 => 
          array (
            'name' => '3EME ARRONDISSEMENT',
            'id' => '183',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'PERERE',
        'id' => '6',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'GUINAGOUROU',
            'id' => '184',
          ),
          1 => 
          array (
            'name' => 'KPEBIE',
            'id' => '185',
          ),
          2 => 
          array (
            'name' => 'PANE',
            'id' => '186',
          ),
          3 => 
          array (
            'name' => 'PERERE',
            'id' => '187',
          ),
          4 => 
          array (
            'name' => 'GNINSY',
            'id' => '540',
          ),
          5 => 
          array (
            'name' => 'SONTOU',
            'id' => '541',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'SINENDE',
        'id' => '7',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'FO-BOURE',
            'id' => '188',
          ),
          1 => 
          array (
            'name' => 'SEKERE',
            'id' => '189',
          ),
          2 => 
          array (
            'name' => 'SIKKI',
            'id' => '190',
          ),
          3 => 
          array (
            'name' => 'SINENDE',
            'id' => '191',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'TCHAOUROU',
        'id' => '8',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ALAFIAROU',
            'id' => '192',
          ),
          1 => 
          array (
            'name' => 'BETEROU',
            'id' => '193',
          ),
          2 => 
          array (
            'name' => 'GORO',
            'id' => '194',
          ),
          3 => 
          array (
            'name' => 'KIKA',
            'id' => '195',
          ),
          4 => 
          array (
            'name' => 'SANSON',
            'id' => '196',
          ),
          5 => 
          array (
            'name' => 'TCHATCHOU',
            'id' => '197',
          ),
          6 => 
          array (
            'name' => 'TCHAOUROU',
            'id' => '198',
          ),
        ),
      ),
    ),
  ),
  1 => 
  array (
    'name' => 'LIBORI',
    'id' => '2',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'BANIKOARA',
        'id' => '9',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'FOUNOUGO',
            'id' => '1',
          ),
          1 => 
          array (
            'name' => 'GOMPAROU',
            'id' => '2',
          ),
          2 => 
          array (
            'name' => 'GOUMORI',
            'id' => '3',
          ),
          3 => 
          array (
            'name' => 'KOKEY',
            'id' => '4',
          ),
          4 => 
          array (
            'name' => 'KOKIBOROU',
            'id' => '5',
          ),
          5 => 
          array (
            'name' => 'OUNET',
            'id' => '6',
          ),
          6 => 
          array (
            'name' => 'SOMPEROUKOU',
            'id' => '7',
          ),
          7 => 
          array (
            'name' => 'SOROKO',
            'id' => '8',
          ),
          8 => 
          array (
            'name' => 'TOURA',
            'id' => '9',
          ),
          9 => 
          array (
            'name' => 'BANIKOARA',
            'id' => '10',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'GOGOUNOU',
        'id' => '10',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BAGOU',
            'id' => '11',
          ),
          1 => 
          array (
            'name' => 'GOUNAROU',
            'id' => '12',
          ),
          2 => 
          array (
            'name' => 'SORI',
            'id' => '13',
          ),
          3 => 
          array (
            'name' => 'SOUGOU-KPAN-TROSSI',
            'id' => '14',
          ),
          4 => 
          array (
            'name' => 'WARA',
            'id' => '15',
          ),
          5 => 
          array (
            'name' => 'GOGOUNOU',
            'id' => '16',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'KANDI',
        'id' => '11',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ANGARADEBOU',
            'id' => '17',
          ),
          1 => 
          array (
            'name' => 'BENSEKOU',
            'id' => '18',
          ),
          2 => 
          array (
            'name' => 'DONWARI',
            'id' => '19',
          ),
          3 => 
          array (
            'name' => 'KASSAKOU',
            'id' => '20',
          ),
          4 => 
          array (
            'name' => 'SAAH',
            'id' => '21',
          ),
          5 => 
          array (
            'name' => 'SAM',
            'id' => '22',
          ),
          6 => 
          array (
            'name' => 'SONSORO',
            'id' => '23',
          ),
          7 => 
          array (
            'name' => 'KANDI 1',
            'id' => '24',
          ),
          8 => 
          array (
            'name' => 'KANDI 2',
            'id' => '25',
          ),
          9 => 
          array (
            'name' => 'KANDI 3',
            'id' => '26',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'KARIMAMA',
        'id' => '12',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BIRNI LAFIA',
            'id' => '27',
          ),
          1 => 
          array (
            'name' => 'BOGO-BOGO',
            'id' => '28',
          ),
          2 => 
          array (
            'name' => 'KOMPA',
            'id' => '29',
          ),
          3 => 
          array (
            'name' => 'MONSEY',
            'id' => '30',
          ),
          4 => 
          array (
            'name' => 'KARIMAMA',
            'id' => '31',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'MALANVILLE',
        'id' => '13',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'GAROU',
            'id' => '32',
          ),
          1 => 
          array (
            'name' => 'GUENE',
            'id' => '33',
          ),
          2 => 
          array (
            'name' => 'MADECALI',
            'id' => '34',
          ),
          3 => 
          array (
            'name' => 'TOUMBOUTOU',
            'id' => '35',
          ),
          4 => 
          array (
            'name' => 'MALANVILLE',
            'id' => '36',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'SEGBANA',
        'id' => '14',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'LIBANTE',
            'id' => '37',
          ),
          1 => 
          array (
            'name' => 'LIBOUSSOU',
            'id' => '38',
          ),
          2 => 
          array (
            'name' => 'LOUGOU',
            'id' => '39',
          ),
          3 => 
          array (
            'name' => 'SOKOTINDJI',
            'id' => '40',
          ),
          4 => 
          array (
            'name' => 'SEGBANA',
            'id' => '41',
          ),
        ),
      ),
    ),
  ),
  2 => 
  array (
    'name' => 'ATACORA',
    'id' => '3',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'BOUKOUMBE',
        'id' => '15',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DIPOLI',
            'id' => '42',
          ),
          1 => 
          array (
            'name' => 'KORONTIERE',
            'id' => '43',
          ),
          2 => 
          array (
            'name' => 'KOUSSOUCOINGOU',
            'id' => '44',
          ),
          3 => 
          array (
            'name' => 'MANTA',
            'id' => '45',
          ),
          4 => 
          array (
            'name' => 'NATA',
            'id' => '46',
          ),
          5 => 
          array (
            'name' => 'TABOTA',
            'id' => '47',
          ),
          6 => 
          array (
            'name' => 'BOUKOUMBE',
            'id' => '48',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'COBLY',
        'id' => '16',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DATORI',
            'id' => '49',
          ),
          1 => 
          array (
            'name' => 'KOUNTORI',
            'id' => '50',
          ),
          2 => 
          array (
            'name' => 'TAPOGA',
            'id' => '51',
          ),
          3 => 
          array (
            'name' => 'COBLY',
            'id' => '52',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'KEROU',
        'id' => '17',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BRIGNAMARO',
            'id' => '53',
          ),
          1 => 
          array (
            'name' => 'FIROU',
            'id' => '54',
          ),
          2 => 
          array (
            'name' => 'KAOBAGOU',
            'id' => '55',
          ),
          3 => 
          array (
            'name' => 'KEROU',
            'id' => '56',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'KOUANDE',
        'id' => '18',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BIRNI',
            'id' => '57',
          ),
          1 => 
          array (
            'name' => 'CHABI-COUMA',
            'id' => '58',
          ),
          2 => 
          array (
            'name' => 'FOO-TANCE',
            'id' => '59',
          ),
          3 => 
          array (
            'name' => 'GUILMARO',
            'id' => '60',
          ),
          4 => 
          array (
            'name' => 'OROUKAYO',
            'id' => '61',
          ),
          5 => 
          array (
            'name' => 'KOUANDE',
            'id' => '62',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'MATERI',
        'id' => '19',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DASSARI',
            'id' => '63',
          ),
          1 => 
          array (
            'name' => 'GOUANDE',
            'id' => '64',
          ),
          2 => 
          array (
            'name' => 'NODI',
            'id' => '65',
          ),
          3 => 
          array (
            'name' => 'TANTEGA',
            'id' => '66',
          ),
          4 => 
          array (
            'name' => 'TCHANHOUNCOSSI',
            'id' => '67',
          ),
          5 => 
          array (
            'name' => 'MATERI',
            'id' => '68',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'NATITINGOU',
        'id' => '20',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'KOTOPOUNGA',
            'id' => '69',
          ),
          1 => 
          array (
            'name' => 'KOUABA',
            'id' => '70',
          ),
          2 => 
          array (
            'name' => 'KOUANDATA',
            'id' => '71',
          ),
          3 => 
          array (
            'name' => 'PERMA',
            'id' => '72',
          ),
          4 => 
          array (
            'name' => 'TCHOUMI-TCHOUMI',
            'id' => '73',
          ),
          5 => 
          array (
            'name' => 'NATITINGOU I',
            'id' => '74',
          ),
          6 => 
          array (
            'name' => 'NATITINGOU II',
            'id' => '75',
          ),
          7 => 
          array (
            'name' => 'NATITINGOU III',
            'id' => '76',
          ),
          8 => 
          array (
            'name' => 'PEPORIYAKOU',
            'id' => '77',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'OUASSA-PEHUNCO',
        'id' => '21',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'GNEMASSON',
            'id' => '78',
          ),
          1 => 
          array (
            'name' => 'TOBRE',
            'id' => '79',
          ),
          2 => 
          array (
            'name' => 'PEHUNCO',
            'id' => '80',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'TANGUIETA',
        'id' => '22',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'COTIAKOU',
            'id' => '81',
          ),
          1 => 
          array (
            'name' => 'N\'DAHONTA',
            'id' => '82',
          ),
          2 => 
          array (
            'name' => 'TAIACOU',
            'id' => '83',
          ),
          3 => 
          array (
            'name' => 'TANONGOU',
            'id' => '84',
          ),
          4 => 
          array (
            'name' => 'TANGUIETA',
            'id' => '85',
          ),
        ),
      ),
      8 => 
      array (
        'name' => 'TOUKOUNTOUNA',
        'id' => '23',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'KOUARFA',
            'id' => '86',
          ),
          1 => 
          array (
            'name' => 'TAMPEGRE',
            'id' => '87',
          ),
          2 => 
          array (
            'name' => 'TOUKOUNTOUNA',
            'id' => '88',
          ),
        ),
      ),
    ),
  ),
  3 => 
  array (
    'name' => 'DONGA',
    'id' => '4',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'BASSILA',
        'id' => '24',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ALEDJO',
            'id' => '309',
          ),
          1 => 
          array (
            'name' => 'MANIGRI',
            'id' => '310',
          ),
          2 => 
          array (
            'name' => 'PENESSOULOU',
            'id' => '311',
          ),
          3 => 
          array (
            'name' => 'BASSILA',
            'id' => '312',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'COPARGO',
        'id' => '25',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ANANDANA',
            'id' => '313',
          ),
          1 => 
          array (
            'name' => 'PABEGOU',
            'id' => '314',
          ),
          2 => 
          array (
            'name' => 'SINGRE',
            'id' => '315',
          ),
          3 => 
          array (
            'name' => 'COPARGO',
            'id' => '316',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'DJOUGOU',
        'id' => '26',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BAREI',
            'id' => '317',
          ),
          1 => 
          array (
            'name' => 'BARIENOU',
            'id' => '318',
          ),
          2 => 
          array (
            'name' => 'BELLEFOUNGOU',
            'id' => '319',
          ),
          3 => 
          array (
            'name' => 'BOUGOU',
            'id' => '320',
          ),
          4 => 
          array (
            'name' => 'KOLOCONDE',
            'id' => '321',
          ),
          5 => 
          array (
            'name' => 'ONKLOU',
            'id' => '322',
          ),
          6 => 
          array (
            'name' => 'PARTAGO',
            'id' => '323',
          ),
          7 => 
          array (
            'name' => 'PELEBINA',
            'id' => '324',
          ),
          8 => 
          array (
            'name' => 'SEROU',
            'id' => '325',
          ),
          9 => 
          array (
            'name' => 'DJOUGOU I',
            'id' => '326',
          ),
          10 => 
          array (
            'name' => 'DJOUGOU II',
            'id' => '327',
          ),
          11 => 
          array (
            'name' => 'DJOUGOU III',
            'id' => '328',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'OUAKE',
        'id' => '27',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BADJOUDE',
            'id' => '329',
          ),
          1 => 
          array (
            'name' => 'KOMDE',
            'id' => '330',
          ),
          2 => 
          array (
            'name' => 'SEMERE 1',
            'id' => '331',
          ),
          3 => 
          array (
            'name' => 'SEMERE 2',
            'id' => '332',
          ),
          4 => 
          array (
            'name' => 'TCHALINGA',
            'id' => '333',
          ),
          5 => 
          array (
            'name' => 'OUAKE',
            'id' => '334',
          ),
        ),
      ),
    ),
  ),
  4 => 
  array (
    'name' => 'ZOU',
    'id' => '5',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'ABOMEY',
        'id' => '28',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGBOKPA',
            'id' => '462',
          ),
          1 => 
          array (
            'name' => 'DETOHOU',
            'id' => '463',
          ),
          2 => 
          array (
            'name' => 'SEHOUN',
            'id' => '464',
          ),
          3 => 
          array (
            'name' => 'ZOUNZONME',
            'id' => '465',
          ),
          4 => 
          array (
            'name' => 'DJEGBE',
            'id' => '466',
          ),
          5 => 
          array (
            'name' => 'HOUNLI',
            'id' => '467',
          ),
          6 => 
          array (
            'name' => 'VIDOLE',
            'id' => '468',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'AGBANGNIZOUN',
        'id' => '29',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADAHONDJIGON',
            'id' => '522',
          ),
          1 => 
          array (
            'name' => 'ADINGNINGON',
            'id' => '523',
          ),
          2 => 
          array (
            'name' => 'AGBANGNIZOUN',
            'id' => '524',
          ),
          3 => 
          array (
            'name' => 'KINTA',
            'id' => '525',
          ),
          4 => 
          array (
            'name' => 'KPOTA',
            'id' => '526',
          ),
          5 => 
          array (
            'name' => 'LISSAZOUNME',
            'id' => '527',
          ),
          6 => 
          array (
            'name' => 'SAHE',
            'id' => '528',
          ),
          7 => 
          array (
            'name' => 'SIWE',
            'id' => '529',
          ),
          8 => 
          array (
            'name' => 'TANVE',
            'id' => '530',
          ),
          9 => 
          array (
            'name' => 'ZOUNGOUDO',
            'id' => '531',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'BOHICON',
        'id' => '30',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGONGOINTO',
            'id' => '469',
          ),
          1 => 
          array (
            'name' => 'AVOGBANNA',
            'id' => '470',
          ),
          2 => 
          array (
            'name' => 'GNIDJAZOUN',
            'id' => '471',
          ),
          3 => 
          array (
            'name' => 'LISSEZOUN',
            'id' => '472',
          ),
          4 => 
          array (
            'name' => 'OUASSAHO',
            'id' => '473',
          ),
          5 => 
          array (
            'name' => 'PASSAGON',
            'id' => '474',
          ),
          6 => 
          array (
            'name' => 'SACLO',
            'id' => '475',
          ),
          7 => 
          array (
            'name' => 'SODOHOME',
            'id' => '476',
          ),
          8 => 
          array (
            'name' => 'BOHICON I',
            'id' => '477',
          ),
          9 => 
          array (
            'name' => 'BOHICON II',
            'id' => '478',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'COVE',
        'id' => '31',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'HOUEKO',
            'id' => '479',
          ),
          1 => 
          array (
            'name' => 'ADOGBE',
            'id' => '480',
          ),
          2 => 
          array (
            'name' => 'GOUNLI',
            'id' => '481',
          ),
          3 => 
          array (
            'name' => 'HOUIN-HOUNSO',
            'id' => '482',
          ),
          4 => 
          array (
            'name' => 'LAINTA-COGBE',
            'id' => '483',
          ),
          5 => 
          array (
            'name' => 'NAOGON',
            'id' => '484',
          ),
          6 => 
          array (
            'name' => 'SOLI',
            'id' => '485',
          ),
          7 => 
          array (
            'name' => 'ZOGBA',
            'id' => '486',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'DJIDJA',
        'id' => '32',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGONDJI',
            'id' => '487',
          ),
          1 => 
          array (
            'name' => 'AGOUNA',
            'id' => '488',
          ),
          2 => 
          array (
            'name' => 'DAN',
            'id' => '489',
          ),
          3 => 
          array (
            'name' => 'DOHOUIME',
            'id' => '490',
          ),
          4 => 
          array (
            'name' => 'GOBAIX',
            'id' => '491',
          ),
          5 => 
          array (
            'name' => 'HOUTO',
            'id' => '492',
          ),
          6 => 
          array (
            'name' => 'MONSOUROU',
            'id' => '493',
          ),
          7 => 
          array (
            'name' => 'MOUGNON',
            'id' => '494',
          ),
          8 => 
          array (
            'name' => 'OUMBEGAME',
            'id' => '495',
          ),
          9 => 
          array (
            'name' => 'SETTO',
            'id' => '496',
          ),
          10 => 
          array (
            'name' => 'ZOUNKON',
            'id' => '497',
          ),
          11 => 
          array (
            'name' => 'DJIDJA CENTRE',
            'id' => '498',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'OUINHI',
        'id' => '33',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DASSO',
            'id' => '499',
          ),
          1 => 
          array (
            'name' => 'SAGON',
            'id' => '500',
          ),
          2 => 
          array (
            'name' => 'TOHOUES',
            'id' => '501',
          ),
          3 => 
          array (
            'name' => 'OUINHI CENTRE',
            'id' => '502',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'ZA-KPOTA',
        'id' => '34',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ALLAHE',
            'id' => '503',
          ),
          1 => 
          array (
            'name' => 'ASSANLIN',
            'id' => '504',
          ),
          2 => 
          array (
            'name' => 'HOUNGOME',
            'id' => '505',
          ),
          3 => 
          array (
            'name' => 'KPAKPAME',
            'id' => '506',
          ),
          4 => 
          array (
            'name' => 'KPOZOUN',
            'id' => '507',
          ),
          5 => 
          array (
            'name' => 'ZA-TANTA',
            'id' => '508',
          ),
          6 => 
          array (
            'name' => 'ZEKO',
            'id' => '509',
          ),
          7 => 
          array (
            'name' => 'ZA-KPOTA',
            'id' => '510',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'ZAGNANADO',
        'id' => '35',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGONLI-HOUEGBO',
            'id' => '532',
          ),
          1 => 
          array (
            'name' => 'BANAME',
            'id' => '533',
          ),
          2 => 
          array (
            'name' => 'DON-TAN',
            'id' => '534',
          ),
          3 => 
          array (
            'name' => 'DOVI',
            'id' => '535',
          ),
          4 => 
          array (
            'name' => 'KPEDEKPO',
            'id' => '536',
          ),
          5 => 
          array (
            'name' => 'ZAGNANADO',
            'id' => '537',
          ),
        ),
      ),
      8 => 
      array (
        'name' => 'ZOGBODOMEY',
        'id' => '36',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AKIZA',
            'id' => '511',
          ),
          1 => 
          array (
            'name' => 'AVLAME',
            'id' => '512',
          ),
          2 => 
          array (
            'name' => 'CANA I',
            'id' => '513',
          ),
          3 => 
          array (
            'name' => 'CANA II',
            'id' => '514',
          ),
          4 => 
          array (
            'name' => 'DOME',
            'id' => '515',
          ),
          5 => 
          array (
            'name' => 'KOUSSOUKPA',
            'id' => '516',
          ),
          6 => 
          array (
            'name' => 'KPOKISSA',
            'id' => '517',
          ),
          7 => 
          array (
            'name' => 'MASSI',
            'id' => '518',
          ),
          8 => 
          array (
            'name' => 'TANWE-HESSOU',
            'id' => '519',
          ),
          9 => 
          array (
            'name' => 'ZOUKOU',
            'id' => '520',
          ),
          10 => 
          array (
            'name' => 'ZOGBODOMEY CENTRE',
            'id' => '521',
          ),
        ),
      ),
    ),
  ),
  5 => 
  array (
    'name' => 'COLLINES',
    'id' => '6',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'BANTE',
        'id' => '37',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGOUA',
            'id' => '199',
          ),
          1 => 
          array (
            'name' => 'AKPASSI',
            'id' => '200',
          ),
          2 => 
          array (
            'name' => 'ATOKOLIBE',
            'id' => '201',
          ),
          3 => 
          array (
            'name' => 'BOBE',
            'id' => '202',
          ),
          4 => 
          array (
            'name' => 'GOUKA',
            'id' => '203',
          ),
          5 => 
          array (
            'name' => 'KOKO',
            'id' => '204',
          ),
          6 => 
          array (
            'name' => 'LOUGBA',
            'id' => '205',
          ),
          7 => 
          array (
            'name' => 'PIRA',
            'id' => '206',
          ),
          8 => 
          array (
            'name' => 'BANTE',
            'id' => '207',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'DASSA-ZOUME',
        'id' => '38',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AKOFFODJOULE',
            'id' => '208',
          ),
          1 => 
          array (
            'name' => 'GBAFFO',
            'id' => '209',
          ),
          2 => 
          array (
            'name' => 'KERE',
            'id' => '210',
          ),
          3 => 
          array (
            'name' => 'KPINGNI',
            'id' => '211',
          ),
          4 => 
          array (
            'name' => 'LEMA',
            'id' => '212',
          ),
          5 => 
          array (
            'name' => 'PAOUINGNAN',
            'id' => '213',
          ),
          6 => 
          array (
            'name' => 'SOCLOGBO',
            'id' => '214',
          ),
          7 => 
          array (
            'name' => 'TRE',
            'id' => '215',
          ),
          8 => 
          array (
            'name' => 'DASSA I',
            'id' => '216',
          ),
          9 => 
          array (
            'name' => 'DASSA II',
            'id' => '217',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'GLAZOUE',
        'id' => '39',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AKLAMPA',
            'id' => '218',
          ),
          1 => 
          array (
            'name' => 'ASSANTE',
            'id' => '219',
          ),
          2 => 
          array (
            'name' => 'GOME',
            'id' => '220',
          ),
          3 => 
          array (
            'name' => 'KPAKPAZA',
            'id' => '221',
          ),
          4 => 
          array (
            'name' => 'MAGOUMI',
            'id' => '222',
          ),
          5 => 
          array (
            'name' => 'OUEDEME',
            'id' => '223',
          ),
          6 => 
          array (
            'name' => 'SOKPONTA',
            'id' => '224',
          ),
          7 => 
          array (
            'name' => 'THIO',
            'id' => '225',
          ),
          8 => 
          array (
            'name' => 'ZAFFE',
            'id' => '226',
          ),
          9 => 
          array (
            'name' => 'GLAZOUE',
            'id' => '227',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'OUESSE',
        'id' => '40',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'CHALLA-OGOI',
            'id' => '228',
          ),
          1 => 
          array (
            'name' => 'DJEGBE',
            'id' => '229',
          ),
          2 => 
          array (
            'name' => 'GBANLIN',
            'id' => '230',
          ),
          3 => 
          array (
            'name' => 'IKEMON',
            'id' => '231',
          ),
          4 => 
          array (
            'name' => 'KILIBO',
            'id' => '232',
          ),
          5 => 
          array (
            'name' => 'LAMINOU',
            'id' => '233',
          ),
          6 => 
          array (
            'name' => 'ODOUGBA',
            'id' => '234',
          ),
          7 => 
          array (
            'name' => 'TOUI',
            'id' => '235',
          ),
          8 => 
          array (
            'name' => 'OUESSE',
            'id' => '236',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'SAVALOU',
        'id' => '41',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DJALLOUKOU',
            'id' => '237',
          ),
          1 => 
          array (
            'name' => 'DOUME',
            'id' => '238',
          ),
          2 => 
          array (
            'name' => 'GOBADA',
            'id' => '239',
          ),
          3 => 
          array (
            'name' => 'KPATABA',
            'id' => '240',
          ),
          4 => 
          array (
            'name' => 'LAHOTAN',
            'id' => '241',
          ),
          5 => 
          array (
            'name' => 'LEMA',
            'id' => '242',
          ),
          6 => 
          array (
            'name' => 'LOGOZOHE',
            'id' => '243',
          ),
          7 => 
          array (
            'name' => 'MONKPA',
            'id' => '244',
          ),
          8 => 
          array (
            'name' => 'OTTOLA',
            'id' => '245',
          ),
          9 => 
          array (
            'name' => 'OUESSE',
            'id' => '246',
          ),
          10 => 
          array (
            'name' => 'TCHETTI',
            'id' => '247',
          ),
          11 => 
          array (
            'name' => 'SAVALOU-AGA',
            'id' => '248',
          ),
          12 => 
          array (
            'name' => 'SAVALOU-AGBADO',
            'id' => '249',
          ),
          13 => 
          array (
            'name' => 'SAVALOU-ATTAKE',
            'id' => '250',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'SAVE',
        'id' => '42',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BESSE',
            'id' => '251',
          ),
          1 => 
          array (
            'name' => 'KABOUA',
            'id' => '252',
          ),
          2 => 
          array (
            'name' => 'OFFE',
            'id' => '253',
          ),
          3 => 
          array (
            'name' => 'OKPARA',
            'id' => '254',
          ),
          4 => 
          array (
            'name' => 'SAKIN',
            'id' => '255',
          ),
          5 => 
          array (
            'name' => 'ADIDO',
            'id' => '256',
          ),
          6 => 
          array (
            'name' => 'BONI',
            'id' => '257',
          ),
          7 => 
          array (
            'name' => 'PLATEAU',
            'id' => '258',
          ),
        ),
      ),
    ),
  ),
  6 => 
  array (
    'name' => 'MONO',
    'id' => '7',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'ATHIEME',
        'id' => '43',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADOHOUN',
            'id' => '346',
          ),
          1 => 
          array (
            'name' => 'ATCHANNOU',
            'id' => '347',
          ),
          2 => 
          array (
            'name' => 'DEDEKPOE',
            'id' => '348',
          ),
          3 => 
          array (
            'name' => 'KPINNOU',
            'id' => '349',
          ),
          4 => 
          array (
            'name' => 'ATHIEME',
            'id' => '350',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'BOPA',
        'id' => '44',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGBODJI',
            'id' => '351',
          ),
          1 => 
          array (
            'name' => 'BADAZOUIN',
            'id' => '352',
          ),
          2 => 
          array (
            'name' => 'GBAKPODJI',
            'id' => '353',
          ),
          3 => 
          array (
            'name' => 'LOBOGO',
            'id' => '354',
          ),
          4 => 
          array (
            'name' => 'POSSOTOME',
            'id' => '355',
          ),
          5 => 
          array (
            'name' => 'YEGODOE',
            'id' => '356',
          ),
          6 => 
          array (
            'name' => 'BOPA',
            'id' => '357',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'COME',
        'id' => '45',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGATOGBO',
            'id' => '358',
          ),
          1 => 
          array (
            'name' => 'AKODEHA',
            'id' => '359',
          ),
          2 => 
          array (
            'name' => 'OUEDEME-PEDAH',
            'id' => '360',
          ),
          3 => 
          array (
            'name' => 'OUMAKO',
            'id' => '361',
          ),
          4 => 
          array (
            'name' => 'COME',
            'id' => '362',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'GRAND-POPO',
        'id' => '46',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADJAHA',
            'id' => '363',
          ),
          1 => 
          array (
            'name' => 'AGOUE',
            'id' => '364',
          ),
          2 => 
          array (
            'name' => 'AVLO',
            'id' => '365',
          ),
          3 => 
          array (
            'name' => 'DJANGLANMEY',
            'id' => '366',
          ),
          4 => 
          array (
            'name' => 'GBEHOUE',
            'id' => '367',
          ),
          5 => 
          array (
            'name' => 'SAZUE',
            'id' => '368',
          ),
          6 => 
          array (
            'name' => 'GRAND-POPO',
            'id' => '369',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'HOUEYOGBE',
        'id' => '47',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DAHE',
            'id' => '370',
          ),
          1 => 
          array (
            'name' => 'DOUTOU',
            'id' => '371',
          ),
          2 => 
          array (
            'name' => 'HONHOUE',
            'id' => '372',
          ),
          3 => 
          array (
            'name' => 'ZOUNGBONOU',
            'id' => '373',
          ),
          4 => 
          array (
            'name' => 'HOUEYOGBE',
            'id' => '374',
          ),
          5 => 
          array (
            'name' => 'SE',
            'id' => '375',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'LOKOSSA',
        'id' => '48',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGAME',
            'id' => '376',
          ),
          1 => 
          array (
            'name' => 'HOUIN',
            'id' => '377',
          ),
          2 => 
          array (
            'name' => 'KOUDO',
            'id' => '378',
          ),
          3 => 
          array (
            'name' => 'OUEDEME-ADJA',
            'id' => '379',
          ),
          4 => 
          array (
            'name' => 'LOKOSSA',
            'id' => '380',
          ),
        ),
      ),
    ),
  ),
  7 => 
  array (
    'name' => 'COUFFO',
    'id' => '8',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'APLAHOUE',
        'id' => '49',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ATOMEY',
            'id' => '259',
          ),
          1 => 
          array (
            'name' => 'AZOVE',
            'id' => '260',
          ),
          2 => 
          array (
            'name' => 'DEKPO-CENTRE',
            'id' => '261',
          ),
          3 => 
          array (
            'name' => 'GODOHOU',
            'id' => '262',
          ),
          4 => 
          array (
            'name' => 'KISSAMEY',
            'id' => '263',
          ),
          5 => 
          array (
            'name' => 'LONKLY',
            'id' => '264',
          ),
          6 => 
          array (
            'name' => 'APLAHOUE',
            'id' => '265',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'DJAKOTOMEY',
        'id' => '50',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADJINTIMEY',
            'id' => '266',
          ),
          1 => 
          array (
            'name' => 'BETOUMEY',
            'id' => '267',
          ),
          2 => 
          array (
            'name' => 'GOHOMEY',
            'id' => '268',
          ),
          3 => 
          array (
            'name' => 'HOUEGAMEY',
            'id' => '269',
          ),
          4 => 
          array (
            'name' => 'KINKINHOUE',
            'id' => '270',
          ),
          5 => 
          array (
            'name' => 'KOKOHOUE',
            'id' => '271',
          ),
          6 => 
          array (
            'name' => 'KPOBA',
            'id' => '272',
          ),
          7 => 
          array (
            'name' => 'SOKOUHOUE',
            'id' => '273',
          ),
          8 => 
          array (
            'name' => 'DJAKOTOMEY I',
            'id' => '274',
          ),
          9 => 
          array (
            'name' => 'DJAKOTOMEY II',
            'id' => '275',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'DOGBO',
        'id' => '51',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AYOMI',
            'id' => '276',
          ),
          1 => 
          array (
            'name' => 'DEVE',
            'id' => '277',
          ),
          2 => 
          array (
            'name' => 'HONTON',
            'id' => '278',
          ),
          3 => 
          array (
            'name' => 'LOKOGOHOUE',
            'id' => '279',
          ),
          4 => 
          array (
            'name' => 'MADJRE',
            'id' => '280',
          ),
          5 => 
          array (
            'name' => 'TOTCHANGNI CENTRE',
            'id' => '281',
          ),
          6 => 
          array (
            'name' => 'TOTA',
            'id' => '282',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'KLOUEKANMEY',
        'id' => '52',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADJAHONME',
            'id' => '283',
          ),
          1 => 
          array (
            'name' => 'AHOGBEYA',
            'id' => '284',
          ),
          2 => 
          array (
            'name' => 'AYAHOHOUE',
            'id' => '285',
          ),
          3 => 
          array (
            'name' => 'DJOTTO',
            'id' => '286',
          ),
          4 => 
          array (
            'name' => 'HONDJIN',
            'id' => '287',
          ),
          5 => 
          array (
            'name' => 'LANTA',
            'id' => '288',
          ),
          6 => 
          array (
            'name' => 'TCHIKPE',
            'id' => '289',
          ),
          7 => 
          array (
            'name' => 'KLOUEKANME',
            'id' => '290',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'LALO',
        'id' => '53',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADOUKANDJI',
            'id' => '291',
          ),
          1 => 
          array (
            'name' => 'AHODJINNAKO',
            'id' => '292',
          ),
          2 => 
          array (
            'name' => 'AHOMADEGBE',
            'id' => '293',
          ),
          3 => 
          array (
            'name' => 'BANIGBE',
            'id' => '294',
          ),
          4 => 
          array (
            'name' => 'GNIZOUNME',
            'id' => '295',
          ),
          5 => 
          array (
            'name' => 'HLASSAME',
            'id' => '296',
          ),
          6 => 
          array (
            'name' => 'LOKOGBA',
            'id' => '297',
          ),
          7 => 
          array (
            'name' => 'TCHITO',
            'id' => '298',
          ),
          8 => 
          array (
            'name' => 'TOHOU',
            'id' => '299',
          ),
          9 => 
          array (
            'name' => 'ZALLI',
            'id' => '300',
          ),
          10 => 
          array (
            'name' => 'LALO',
            'id' => '301',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'TOVIKLIN',
        'id' => '54',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADJIDO',
            'id' => '302',
          ),
          1 => 
          array (
            'name' => 'AVEDJIN',
            'id' => '303',
          ),
          2 => 
          array (
            'name' => 'DOKO',
            'id' => '304',
          ),
          3 => 
          array (
            'name' => 'HOUEDOGLI',
            'id' => '305',
          ),
          4 => 
          array (
            'name' => 'MISSINKO',
            'id' => '306',
          ),
          5 => 
          array (
            'name' => 'TANNOU-GOLA',
            'id' => '307',
          ),
          6 => 
          array (
            'name' => 'TOVIKLIN',
            'id' => '308',
          ),
        ),
      ),
    ),
  ),
  8 => 
  array (
    'name' => 'OUEME',
    'id' => '9',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'ADJARRA',
        'id' => '55',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGLOGBE',
            'id' => '381',
          ),
          1 => 
          array (
            'name' => 'HONVIE',
            'id' => '382',
          ),
          2 => 
          array (
            'name' => 'MALANHOUI',
            'id' => '383',
          ),
          3 => 
          array (
            'name' => 'MEDEDJONOU',
            'id' => '384',
          ),
          4 => 
          array (
            'name' => 'ADJARRA 1',
            'id' => '385',
          ),
          5 => 
          array (
            'name' => 'ADJARRA 2',
            'id' => '386',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'ADJOHOUN',
        'id' => '56',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AKPADANOU',
            'id' => '387',
          ),
          1 => 
          array (
            'name' => 'AWONOU',
            'id' => '388',
          ),
          2 => 
          array (
            'name' => 'AZOWLISSE',
            'id' => '389',
          ),
          3 => 
          array (
            'name' => 'DEME',
            'id' => '390',
          ),
          4 => 
          array (
            'name' => 'GANGBAN',
            'id' => '391',
          ),
          5 => 
          array (
            'name' => 'KODE',
            'id' => '392',
          ),
          6 => 
          array (
            'name' => 'TOGBOTA',
            'id' => '393',
          ),
          7 => 
          array (
            'name' => 'ADJOHOUN',
            'id' => '394',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'AGUEGUES',
        'id' => '57',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AVAGBODJI',
            'id' => '395',
          ),
          1 => 
          array (
            'name' => 'HOUEDOME',
            'id' => '396',
          ),
          2 => 
          array (
            'name' => 'ZOUNGAME',
            'id' => '397',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'AKPRO-MISSERETE',
        'id' => '58',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'GOME-SOTA',
            'id' => '398',
          ),
          1 => 
          array (
            'name' => 'KATAGON',
            'id' => '399',
          ),
          2 => 
          array (
            'name' => 'VAKON',
            'id' => '400',
          ),
          3 => 
          array (
            'name' => 'ZOUNGBOME',
            'id' => '401',
          ),
          4 => 
          array (
            'name' => 'AKPRO-MISSERETE',
            'id' => '402',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'AVRANKOU',
        'id' => '59',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ATCHOUKPA',
            'id' => '403',
          ),
          1 => 
          array (
            'name' => 'DJOMON',
            'id' => '404',
          ),
          2 => 
          array (
            'name' => 'GBOZOUME',
            'id' => '405',
          ),
          3 => 
          array (
            'name' => 'KOUTI',
            'id' => '406',
          ),
          4 => 
          array (
            'name' => 'OUANHO',
            'id' => '407',
          ),
          5 => 
          array (
            'name' => 'SADO',
            'id' => '408',
          ),
          6 => 
          array (
            'name' => 'AVRANKOU',
            'id' => '409',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'BONOU',
        'id' => '60',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AFFAME',
            'id' => '410',
          ),
          1 => 
          array (
            'name' => 'ATCHONSA',
            'id' => '411',
          ),
          2 => 
          array (
            'name' => 'DAME-WOGON',
            'id' => '412',
          ),
          3 => 
          array (
            'name' => 'HOUNVIGUE',
            'id' => '413',
          ),
          4 => 
          array (
            'name' => 'BONOU',
            'id' => '414',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'DANGBO',
        'id' => '61',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'DEKIN',
            'id' => '415',
          ),
          1 => 
          array (
            'name' => 'GBEKO',
            'id' => '416',
          ),
          2 => 
          array (
            'name' => 'HOUEDOMEY',
            'id' => '417',
          ),
          3 => 
          array (
            'name' => 'HOZIN',
            'id' => '418',
          ),
          4 => 
          array (
            'name' => 'KESSOUNOU',
            'id' => '419',
          ),
          5 => 
          array (
            'name' => 'ZOUNGUE',
            'id' => '420',
          ),
          6 => 
          array (
            'name' => 'DANGBO',
            'id' => '421',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'PORTO-NOVO',
        'id' => '62',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => '1ER ARRONDISSEMENT',
            'id' => '422',
          ),
          1 => 
          array (
            'name' => '2EME ARRONDISSEMENT',
            'id' => '423',
          ),
          2 => 
          array (
            'name' => '3EME ARRONDISSEMENT',
            'id' => '424',
          ),
          3 => 
          array (
            'name' => '4EME ARRONDISSEMENT',
            'id' => '425',
          ),
          4 => 
          array (
            'name' => '5EME ARRONDISSEMENT',
            'id' => '426',
          ),
        ),
      ),
      8 => 
      array (
        'name' => 'SEME-PODJI',
        'id' => '63',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGBLANGANDAN',
            'id' => '427',
          ),
          1 => 
          array (
            'name' => 'AHOLOUYEME',
            'id' => '428',
          ),
          2 => 
          array (
            'name' => 'DJEREGBE',
            'id' => '429',
          ),
          3 => 
          array (
            'name' => 'EKPE',
            'id' => '430',
          ),
          4 => 
          array (
            'name' => 'TOHOUE',
            'id' => '431',
          ),
          5 => 
          array (
            'name' => 'SEME-PODJI',
            'id' => '432',
          ),
        ),
      ),
    ),
  ),
  9 => 
  array (
    'name' => 'PLATEAU',
    'id' => '10',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'ADJA-OUERE',
        'id' => '64',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'IKPINLE',
            'id' => '433',
          ),
          1 => 
          array (
            'name' => 'KPOULOU',
            'id' => '434',
          ),
          2 => 
          array (
            'name' => 'MASSE',
            'id' => '435',
          ),
          3 => 
          array (
            'name' => 'OKO-AKARE',
            'id' => '436',
          ),
          4 => 
          array (
            'name' => 'TATONNONKON',
            'id' => '437',
          ),
          5 => 
          array (
            'name' => 'ADJA-OUERE',
            'id' => '438',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'IFANGNI',
        'id' => '65',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'BANIGBE',
            'id' => '439',
          ),
          1 => 
          array (
            'name' => 'DAAGBE',
            'id' => '440',
          ),
          2 => 
          array (
            'name' => 'KO-KOUMOLOU',
            'id' => '441',
          ),
          3 => 
          array (
            'name' => 'LAGBE',
            'id' => '442',
          ),
          4 => 
          array (
            'name' => 'TCHAADA',
            'id' => '443',
          ),
          5 => 
          array (
            'name' => 'IFANGNI',
            'id' => '444',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'KETOU',
        'id' => '66',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADAKPLAME',
            'id' => '445',
          ),
          1 => 
          array (
            'name' => 'IDIGNY',
            'id' => '446',
          ),
          2 => 
          array (
            'name' => 'KPANKOU',
            'id' => '447',
          ),
          3 => 
          array (
            'name' => 'ODOMETA',
            'id' => '448',
          ),
          4 => 
          array (
            'name' => 'OKPOMETA',
            'id' => '449',
          ),
          5 => 
          array (
            'name' => 'KETOU',
            'id' => '450',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'POBE',
        'id' => '67',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AHOYEYE',
            'id' => '451',
          ),
          1 => 
          array (
            'name' => 'IGANA',
            'id' => '452',
          ),
          2 => 
          array (
            'name' => 'ISSABA',
            'id' => '453',
          ),
          3 => 
          array (
            'name' => 'TOWE',
            'id' => '454',
          ),
          4 => 
          array (
            'name' => 'POBE',
            'id' => '455',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'SAKETE',
        'id' => '68',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGUIDI',
            'id' => '456',
          ),
          1 => 
          array (
            'name' => 'ITA-DJEBOU',
            'id' => '457',
          ),
          2 => 
          array (
            'name' => 'TAKON',
            'id' => '458',
          ),
          3 => 
          array (
            'name' => 'YOKO',
            'id' => '459',
          ),
          4 => 
          array (
            'name' => 'SAKETE 1',
            'id' => '460',
          ),
          5 => 
          array (
            'name' => 'SAKETE 2',
            'id' => '461',
          ),
        ),
      ),
    ),
  ),
  10 => 
  array (
    'name' => 'LITTORAL',
    'id' => '11',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'COTONOU',
        'id' => '69',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => '1ER ARRONDISSEMENT',
            'id' => '335',
          ),
          1 => 
          array (
            'name' => '2EME ARRONDISSEMENT',
            'id' => '336',
          ),
          2 => 
          array (
            'name' => '4EME ARRONDISSEMENT',
            'id' => '337',
          ),
          3 => 
          array (
            'name' => '5EME ARRONDISSEMENT',
            'id' => '338',
          ),
          4 => 
          array (
            'name' => '6EME ARRONDISSEMENT',
            'id' => '339',
          ),
          5 => 
          array (
            'name' => '7EME ARRONDISSEMENT',
            'id' => '340',
          ),
          6 => 
          array (
            'name' => '8EME ARRONDISSEMENT',
            'id' => '341',
          ),
          7 => 
          array (
            'name' => '10EME ARRONDISSEMENT',
            'id' => '342',
          ),
          8 => 
          array (
            'name' => '11EME ARRONDISSEMENT',
            'id' => '343',
          ),
          9 => 
          array (
            'name' => '12EME ARRONDISSEMENT',
            'id' => '344',
          ),
          10 => 
          array (
            'name' => '13EME ARRONDISSEMENT',
            'id' => '345',
          ),
          11 => 
          array (
            'name' => '3EME ARRONDISSEMENT',
            'id' => '538',
          ),
          12 => 
          array (
            'name' => '9EME ARRONDISSEMENT',
            'id' => '539',
          ),
        ),
      ),
    ),
  ),
  11 => 
  array (
    'name' => 'ATLANTIQUE',
    'id' => '12',
    'communes' => 
    array (
      0 => 
      array (
        'name' => 'ABOMEY-CALAVI',
        'id' => '70',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AKASSATO',
            'id' => '89',
          ),
          1 => 
          array (
            'name' => 'GODOMEY',
            'id' => '90',
          ),
          2 => 
          array (
            'name' => 'GOLO-DJIGBE',
            'id' => '91',
          ),
          3 => 
          array (
            'name' => 'KPANROUN',
            'id' => '92',
          ),
          4 => 
          array (
            'name' => 'TOGBA',
            'id' => '93',
          ),
          5 => 
          array (
            'name' => 'ABOMEY-CALAVI',
            'id' => '94',
          ),
          6 => 
          array (
            'name' => 'HEVIE',
            'id' => '542',
          ),
          7 => 
          array (
            'name' => 'OUEDO',
            'id' => '543',
          ),
          8 => 
          array (
            'name' => 'ZINVIE',
            'id' => '544',
          ),
        ),
      ),
      1 => 
      array (
        'name' => 'ALLADA',
        'id' => '71',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGBANOU',
            'id' => '95',
          ),
          1 => 
          array (
            'name' => 'AHOUANNONZOUN',
            'id' => '96',
          ),
          2 => 
          array (
            'name' => 'ATTOGON',
            'id' => '97',
          ),
          3 => 
          array (
            'name' => 'AVAKPA',
            'id' => '98',
          ),
          4 => 
          array (
            'name' => 'AYOU',
            'id' => '99',
          ),
          5 => 
          array (
            'name' => 'HINVI',
            'id' => '100',
          ),
          6 => 
          array (
            'name' => 'LISSEGAZOUN',
            'id' => '101',
          ),
          7 => 
          array (
            'name' => 'LON-AGONMEY',
            'id' => '102',
          ),
          8 => 
          array (
            'name' => 'SEKOU',
            'id' => '103',
          ),
          9 => 
          array (
            'name' => 'TOKPA',
            'id' => '104',
          ),
          10 => 
          array (
            'name' => 'ALLADA CENTRE',
            'id' => '105',
          ),
          11 => 
          array (
            'name' => 'TOGOUDO',
            'id' => '106',
          ),
        ),
      ),
      2 => 
      array (
        'name' => 'KPOMASSE',
        'id' => '72',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGANMALOME',
            'id' => '107',
          ),
          1 => 
          array (
            'name' => 'AGBANTO',
            'id' => '108',
          ),
          2 => 
          array (
            'name' => 'AGONKANME',
            'id' => '109',
          ),
          3 => 
          array (
            'name' => 'DEDOME',
            'id' => '110',
          ),
          4 => 
          array (
            'name' => 'DEKANME',
            'id' => '111',
          ),
          5 => 
          array (
            'name' => 'SEGBEYA',
            'id' => '112',
          ),
          6 => 
          array (
            'name' => 'SEGBOHOUE',
            'id' => '113',
          ),
          7 => 
          array (
            'name' => 'TOKPA-DOME',
            'id' => '114',
          ),
          8 => 
          array (
            'name' => 'KPOMASSE CENTRE',
            'id' => '115',
          ),
        ),
      ),
      3 => 
      array (
        'name' => 'OUIDAH',
        'id' => '73',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AVLEKETE',
            'id' => '116',
          ),
          1 => 
          array (
            'name' => 'DJEGBADJI',
            'id' => '117',
          ),
          2 => 
          array (
            'name' => 'GAKPE',
            'id' => '118',
          ),
          3 => 
          array (
            'name' => 'HOUAKPE-DAHO',
            'id' => '119',
          ),
          4 => 
          array (
            'name' => 'PAHOU',
            'id' => '120',
          ),
          5 => 
          array (
            'name' => 'SAVI',
            'id' => '121',
          ),
          6 => 
          array (
            'name' => 'OUIDAH I',
            'id' => '122',
          ),
          7 => 
          array (
            'name' => 'OUIDAH II',
            'id' => '123',
          ),
          8 => 
          array (
            'name' => 'OUIDAH III',
            'id' => '124',
          ),
          9 => 
          array (
            'name' => 'OUIDAH IV',
            'id' => '125',
          ),
        ),
      ),
      4 => 
      array (
        'name' => 'SO-AVA',
        'id' => '74',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AHOMEY-LOKPO',
            'id' => '126',
          ),
          1 => 
          array (
            'name' => 'GANVIE 1',
            'id' => '127',
          ),
          2 => 
          array (
            'name' => 'GANVIE 2',
            'id' => '128',
          ),
          3 => 
          array (
            'name' => 'HOUEDO-AGUEKON',
            'id' => '129',
          ),
          4 => 
          array (
            'name' => 'VEKKY',
            'id' => '130',
          ),
          5 => 
          array (
            'name' => 'SO-AVA',
            'id' => '131',
          ),
          6 => 
          array (
            'name' => 'DEKANMEY',
            'id' => '545',
          ),
        ),
      ),
      5 => 
      array (
        'name' => 'TOFFO',
        'id' => '75',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AGUE',
            'id' => '132',
          ),
          1 => 
          array (
            'name' => 'COLLI',
            'id' => '133',
          ),
          2 => 
          array (
            'name' => 'COUSSI',
            'id' => '134',
          ),
          3 => 
          array (
            'name' => 'DAME',
            'id' => '135',
          ),
          4 => 
          array (
            'name' => 'DJANGLANME',
            'id' => '136',
          ),
          5 => 
          array (
            'name' => 'HOUEGBO',
            'id' => '137',
          ),
          6 => 
          array (
            'name' => 'KPOME',
            'id' => '138',
          ),
          7 => 
          array (
            'name' => 'SEHOUE',
            'id' => '139',
          ),
          8 => 
          array (
            'name' => 'SEY',
            'id' => '140',
          ),
          9 => 
          array (
            'name' => 'TOFFO',
            'id' => '141',
          ),
        ),
      ),
      6 => 
      array (
        'name' => 'TORI-BOSSITO',
        'id' => '76',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'AVAME',
            'id' => '142',
          ),
          1 => 
          array (
            'name' => 'AZOHOUE-ALIHO',
            'id' => '143',
          ),
          2 => 
          array (
            'name' => 'AZOHOUE-CADA',
            'id' => '144',
          ),
          3 => 
          array (
            'name' => 'TORI-CADA',
            'id' => '145',
          ),
          4 => 
          array (
            'name' => 'TORI-GARE',
            'id' => '146',
          ),
          5 => 
          array (
            'name' => 'TORI-BOSSITO',
            'id' => '147',
          ),
        ),
      ),
      7 => 
      array (
        'name' => 'ZE',
        'id' => '77',
        'arrondissements' => 
        array (
          0 => 
          array (
            'name' => 'ADJAN',
            'id' => '148',
          ),
          1 => 
          array (
            'name' => 'DAWE',
            'id' => '149',
          ),
          2 => 
          array (
            'name' => 'DODJI-BATA',
            'id' => '150',
          ),
          3 => 
          array (
            'name' => 'HEKANME',
            'id' => '151',
          ),
          4 => 
          array (
            'name' => 'KOUNDOKPOE',
            'id' => '152',
          ),
          5 => 
          array (
            'name' => 'SEDJE-DENOU',
            'id' => '153',
          ),
          6 => 
          array (
            'name' => 'SEDJE-HOUEGOUDO',
            'id' => '154',
          ),
          7 => 
          array (
            'name' => 'TANGBO',
            'id' => '155',
          ),
          8 => 
          array (
            'name' => 'YOKPO',
            'id' => '156',
          ),
          9 => 
          array (
            'name' => 'ZE',
            'id' => '157',
          ),
          10 => 
          array (
            'name' => 'DJIGBE',
            'id' => '546',
          ),
        ),
      ),
    ),
  ),
);
