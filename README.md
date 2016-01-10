### BMI


### 安装

1.在 `composer.json` 的 require里 加入


```
"sunnyday/bmi": "^1.0"

```


2.执行 `composer update`


3.在config/app.php 的 `providers` 数组加入一条


```
Sunnyday\BMI\BMIServiceProvider::class,

```
