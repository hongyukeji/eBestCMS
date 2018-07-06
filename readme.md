eBestCMS
===============================
> 鸿宇科技有限公司是一家以信息技术服务为主导、立足于高科技领域的前沿，专业致力于网络Web开发及应用的高科技企业。本着“质量第一、诚信为本”的朴素经营理念，以务实创新的精神不断进行开拓实践和探索进取。

[![Latest Stable Version](https://poser.pugx.org/hongyukeji/ebestcms/v/stable.png)](https://packagist.org/packages/hongyukeji/ebestcms)
[![Total Downloads](https://poser.pugx.org/hongyukeji/ebestcms/downloads.png)](https://packagist.org/packages/hongyukeji/ebestcms)

## 安装与更新

* 运营版：
```
composer create-project hongyukeji/ebestcms ebestcms
```

* 开发版：
```
composer create-project hongyukeji/ebestcms ebestcms dev-master
```

## 运行环境

* PHP版本：>= 7.1.3
* MySQL版本：>= 5.1

## PHP扩展

* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension
* Ctype PHP Extension
* JSON PHP Extension

## 系统开发

* 公司名称：鸿宇科技有限公司
* 公司官网：www.hongyuvip.com
* 系统框架：Laravel5.5 LTS
* 核心技术：PHP7、Html5、Css3、JavaScript ES6、jQuery、Ajax、MySQL、VueJS、Bootstrap
* 开发工具：PhpStorm、Navicat for MySQL、PhotoShop CS6、
* 开发团队：Shadow（项目总监）、Spider（代码审计）、Free(数据库建模)、Wind（PHP后端开发）、Flower（前端UI设计）、Boy(Html5前端开发)
* 项目支持：感谢所有支持鸿宇团队的朋友！

## 系统维护

* Http： www.hongyuvip.com
* Author：Shadow
* Email：admin@hongyuvip.com
* QQ：1527200768
* Phone：13952101395

## 伪静态

* Apache
Laravel包含一个文件，用于在路径中没有前端控制器的情况下提供URL 。
在为Apache服务Laravel之前，请务必启用该模块，以便服务器将该文件保存。
public/.htaccess index.php mod_rewrite .htaccess
```
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^ index.php [L]
```

* Nginx
如果您使用Nginx，您的站点vhost.conf配置中的以下指令将会将所有请求都引导到前台控制器：index.php
```
location / {
    try_files $uri $uri/ /index.php?$query_string;
}
```