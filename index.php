<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>PHP 动态时间测试</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; }
        #timer { font-size: 2rem; color: #007bff; font-weight: bold; }
    </style>
</head>
<body>

    <h1>PHP 环境测试页面</h1>

    <?php
    // 1. 基础输出，确认 PHP 引擎在工作
    echo "<p>PHP 引擎状态：<span style='color:green;'>正常运行中</span></p>";
    
    // 2. 获取服务器初始时间（传递给 JS 保持同步）
    $initialTime = date('Y-m-d H:i:s');
    ?>

    <p>当前服务器时间：</p>
    <div id="timer"><?php echo $initialTime; ?></div>

    <script>
        // 每隔 1000 毫秒（1秒）执行一次函数
        setInterval(function() {
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            
            // 格式化为 YYYY-MM-DD HH:MM:SS
            const timeString = `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
            
            // 更新页面内容
            document.getElementById('timer').innerText = timeString;
        }, 1000);
    </script>

</body>
</html>