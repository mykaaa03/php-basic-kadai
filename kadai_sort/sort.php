<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        $nums = [15, 4, 18, 23, 10 ];

        function sort_2way($nums, $order) {
            if ($order) {
                echo '昇順でソートします。<br>';
                sort($nums);
            } else {
                echo '降順でソートします。<br>';
                rsort($nums);
            }
            foreach($nums as $num) {
                echo $num . '<br>';
            }
        }

        // 昇順
        sort_2way($nums, true);
        // 降順
        sort_2way($nums, false);
        ?>   

    </p>
</body>

</html>