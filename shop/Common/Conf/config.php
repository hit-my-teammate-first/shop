<?php
return array(
        //'SHOW_PAGE_TRACE' =>true, 
  
        //默认分组设置
	'DEFAULT_MODULE'   =>'Home',          //默认分组
        'MODULE_ALLOW_LIST'=>array('Home','Admin'), //定义可供访问的分组
        
        //Smarty模板引擎切换E',
        'TMPL_ENGINE_TYPE'      =>  'Smarty',
    
        'TMPL_CACHE_ON' => false,//禁止模板编译缓存 
        'HTML_CACHE_ON' => false,//禁止静态缓存 
        
        //数据库连接
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'db2',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'sw_',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'COO_KIE'               => 'q63himgk@gj^kf'    //cookie加密干扰项
);