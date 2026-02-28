<?php
// 1. 基础输出，确认 PHP 引擎在工作
echo "<h1>PHP 环境测试页面</h1>";
echo "<p>恭喜！PHP 运行正常。</p>";

// 2. 显示当前时间
echo "<p>当前服务器时间: " . date('Y-m-d H:i:s') . "</p>";

// 3. 检查 PHP 版本
echo "<p>当前 PHP 版本: " . phpversion() . "</p>";

// 4. 一个快速的调试面板，展示系统核心信息
echo "<h3>环境详情:</h3>";
echo "<ul>";
echo "<li><strong>服务器软件:</strong> " . $_SERVER['SERVER_SOFTWARE'] . "</li>";
echo "<li><strong>PHP 运行模式:</strong> " . php_sapi_name() . "</li>";
echo "</ul>";

// 5. 著名的 phpinfo() 函数，查看所有配置（开发阶段非常有用）
// 如果你不想看到超长的配置列表，可以把下面这行注释掉
phpinfo();
?>