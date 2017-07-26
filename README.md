### 模拟登录页面暴力破解
---
> 环境为php7+mysql

* `with-captcha`和`without-captcha`为源代码文件夹，分别为有验证码和无验证码
* 在`./with-captcha/`或`./without-captcha/`中conn.php中设置数据库连接信息
* `database.sql`为数据库文件，导入，数据库名默认为login（可以设置）
* `payload.txt`为暴力破解所用字典（只用了十几条数据）