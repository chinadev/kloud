Kloud是一个整合LazyPHP和Tonic的Rest服务专用框架。

主要特点
================================

* 足够小和简单，20个函数、30个文件。
* 专注于REST服务，没有任何无关功能。
* 针对云环境设计，兼容VPS、SAE、BAE（得等我拿到3.0公测权限）。
* 对KloudFlow（一个正在设计中的持续集成、自动化测试和实时部署流程）的完美支持。
* 喜大普奔的MIT协议。

简单的使用说明
================================
* 修改config.YAML里边的appname和version
* 把代码发布到SinaAppEngine上
* 访问 /version/1234 查看输入，如果输出是json数据，那么恭喜你，部署成功了
* 查看 resource/version.class.php 里边是一个典型REST方法示例，在方法内，可以使用LazyPHP的相关函数，如get_line。
* 如果要添加新的接口，创建新的Class就可以了。注意Tonic通过方法和Class上的注释来定义请求URL的。
* 关于Tonic，可以阅读它的文档 http://www.peej.co.uk/tonic/
