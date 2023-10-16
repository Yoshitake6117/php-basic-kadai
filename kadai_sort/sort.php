<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP課題_sort</title>
 </head>
 
 <body>
     <p>
         <?php
         
         $nums = [15, 4, 18, 23, 10] ;

         function sort_2way( $array, $order) {
          if( $order === true) {
            //昇順ソート
            echo '昇順にソートします。';
            echo '<br>' ;
 
            sort( $array ) ;

          } else {
            //降順ソート
            echo '降順にソートします。';
            echo '<br>' ;

            rsort( $array ) ;
          }

          // 並べ替え後の出力
          foreach( $array as $num ) {
            echo $num ;
            echo '<br>';
          }
         }

         //昇順ソート
         sort_2way( $nums, true) ;

         //降順ソート
         sort_2way( $nums, false) ;

         ?>
     </p>
 </body>
 
 </html>