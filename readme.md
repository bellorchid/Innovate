# API 文档

<!-- create time: 2015-06-01 10:12:28  -->

<!-- This file is created from $MARBOO_HOME/.media/starts/default.md
本文件由 $MARBOO_HOME/.media/starts/default.md 复制而来 -->
###网站域名：bellorchid.xyz

**Students：所有学生的信息**

```
Method:GET

请求地址：/api_students

字段：学号(id),姓名(name),头像url地址(icon),个人照片url地址(photo),邮箱(email),电话(tel),技术标签(tags),详细介绍(resume);
```

**Student Details**

```
Method:GET

请求地址：/api_student/{user_id} 

需要参数：user_id

字段：学号(id),姓名(name),头像url地址(icon),个人照片url地址(photo),邮箱(email),电话(tel),技术标签(tags),详细介绍(resume),一句话介绍(description),项目列表id(projects);

```

**Projects**

```
Method:GET

请求地址：/api_projects

需要参数：无

字段：项目编号(id),项目名称(name),项目地址(address),演示地址(demo),项目一句话介绍(abs),项目详细介绍(detail),项目成员(members);
```

**Project detail**

```
Method:GET

请求地址：/api_project/{project_id}

需要参数：project_id

字段:项目名称(name),项目地址(address),演示地址(demo),项目一句话介绍(abs),项目详细介绍(detail),项目成员（members，这是一个二维数组转化成的json，一般不需要进一步处理就可以使用）;
```
## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)


