<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Format table</title>
    <script>
        function areas(r, a) {
            let pi = Math.PI; 
            let radio = r * r;
  
            let inside = pi * radio;
            let outside = (radio/2) * (a * (pi/180) - Math.sin( a * (pi/180) ) )

            console.log(inside);
            console.log(outside);
        }

        areas(10, 90);
        //let [inside, outside] = areas(10, 90);
        //console.log(inside + " " + outside);
    </script>
  </head>
  <body>
      <div style="position: fixed; display: block; z-index: 1000; top: 0px; left: 0px; background-color: #FFF; border: 2px solid #000; width: 100%; padding: 10px;" >
            <?php
            function symbolicToOctal(string $permString) : int
            {   
                $totalPerm = 9;
                $sum = 0;
                $num = 0;
                $flag = 1;
                $str_value = "";

                for( $i=0 ; $i<$totalPerm ; $i++ ){
                    switch( substr($permString, $i, 1 ) ){
                        case "r":  $num = 4; break;              
                        case "w":  $num = 2; break;
                        case "x":  $num = 1; break;
                        case "-":  $num = 0; break;
                    }
                    $sum += $num;
                    
                    if( $flag == 3 ){
                        $str_value .= strval($sum);
                        
                        $sum = 0;
                        $flag = 1;
                    } else {
                        $flag++;
                    }
                }

                return intval($str_value);
            }       

            echo symbolicToOctal("rwxr-x-w-");

            function sortByPriceAscending(string $jsonString) : string
            {
                $array = json_decode( $jsonString, true);
                usort( $array, 'sortByPrice');

                return json_encode($array);
            }

            function sortByPrice( $a, $b){
                if( $a['price'] > $b['price'] ){
                    return 1;
                } else if( $a['price'] == $b['price'] ) {
                    return (($a['name'] > $b['name']) ? 1 : -1);        
                } else {
                    return -1;
                }
            }   
            echo sortByPriceAscending('[{"name":"eggs","price":1},{"name":"coffee","price":9.99},{"name":"rice","price":4.04}]');

            function getIdsByMessage(string $xml, string $message) : array
            {
                $xml = simplexml_load_string($xml);
                $msgIds = array();

                foreach ($xml->entry as $entry) {
                    if ($entry->message == $message) {
                        array_push($msgIds, (int)$entry['id']);
                    }
                }

                return $msgIds;
            }

            $xml = <<<XML
            <?xml version="1.0" encoding="UTF-8"?>
            <log>
            <entry id="1">
                <message>Application started</message>
            </entry>
            <entry id="2">
                <message>Application ended</message>
            </entry>
            </log>
            XML;
            print_r(getIdsByMessage($xml, 'Application ended'));

            
            function filterNumbersFromArray(array &$arr) : void
            {
                foreach($arr as $element => $index) {

                    if( is_numeric( $index ) ) {
                        unset($arr[$element]);
                    }
                }
            }

            $arr = [1, 'a', 'b', 2];
            filterNumbersFromArray($arr);
            print_r(array_values($arr));
            ?>
          </div>
    <table>
      <thead>
        <tr><th>Rank</th><th>Name</th></tr>
      </thead>
      <tbody>
        <tr><td>1.</td><td>New York</td></tr>
        <tr><td>2.</td><td>Los Angeles</td></tr>
        <tr><td>3.</td><td>Chicago</td></tr>
        <tr><td>4.</td><td>Houston</td></tr>
      </tbody>
    </table>
  </body>
</html>