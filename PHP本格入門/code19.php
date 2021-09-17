<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>オブジェクト指向</title>
</head>

<body>
    <?php

    // タスククラス
    class Task
    {
        // タスク名
        public $name;

        // 優先度
        public $priority;

        // 進行度
        public $progress;

        // タスクが完了したかを取得するメソッド
        public function isCompleted(): bool
        {
            return $this->progress >= 100; // $progressが100以上なら真を返す
        }
    }
    ?>
</body>

</html>
