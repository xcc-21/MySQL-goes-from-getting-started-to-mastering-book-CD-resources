![image-20220625215019496](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625215019496.png)

# 1.介绍

> 实训的项目为**博雅互动企业网站**，教程的方式也是以实战而编写的，也是一些常用到的，完成项目足矣~现在我们来选择吃饭的家伙：

- 浏览器：我推荐这两个：<u>chrome</u>和<u>edge</u>,这两个浏览器大致相同，也是社会主流，而我这里是edge

- 开发工具：<u>Vscode</u>和<u>Hbuilder</u>我用Hbuilder，为什么呢？因为Vscode后面也是需要Hbuilder的插件，我这里很干脆利落。

- 开发语言：制作这个项目只需用到HTML，CSS，JavaScript。

  ## 1.1 开发语言

  > - [ ] 我们前面介绍的HTML必备

  > - [ ] CSS:网页中样式/外观/美化jua
  >
  >   我们看看小米网站，给人一种舒服的感觉![image-20220626072254216](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626072254216.png)
  >
  >   删掉CSS之后，没有了上面好看
  >
  >   ![image-20220626072924009](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626072924009.png)我们发现网络不流畅也会出现这种情况，没加载出CSS的原因

  > - [ ] JavaScript:网页中行为/交互/动效：可以点击下一张，进行人点击下一个机器执行下一个的交互行为
  >
  >   <img src="C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626073448513.png" alt="image-20220626073448513" style="zoom:50%;" />
  >
  >   右下禁用JS后，怎么点击也不管用了
  >
  >   ![image-20220626073918260](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626073918260.png)
  >
  >   再看一组，没有勾选禁用JavaScript
  >
  >   ![image-20220626074214525](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626074214734.png)
  >
  >   禁用后的
  >
  >   ![image-20220626074246378](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626074246378.png)

  JS和CSS他们之间的关系缺一都可以，没js我可以纯静态展示，缺CSS 美观也够看，但是缺HTML，JS和CSS就没用了。例如：房子，地基最重要，没了地基上面的都是摆设。

  ## 1.2为什么选择这些？

  拿HTML来说，大家可能会有疑虑，我来一一解决；

  ![image-20220625221452429](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625221452429.png)

1. 单词恐惧：HTML英文单词也就七八个，很多都是文档格式，比如：<h2>是标题，<p>段落，<img>图片 ,<video>音频，<body>英文意思是身体，它在<head>里面，等等...有很多都是见名知意的存在。

   ![图1](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625222317239.png)

2. 要不要背：完全不需要，看上图，这是默认的HTML最初语法，仔细看，很多都是有闭合标签像：<body></body>,"/"表示闭合标签，后面还会详细讲到，不懂完全🆗。

3. 难不难：我们看一个百度百科页面，我们看到有上千行代码，仔细看看，其实他们都有很多重复的，都是不断的以重载方式编写，所以，很简单！

   ![image-20220625223343378](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625223343378.png)

## 1.3为什么学？

> 所以的企业招聘web开发工程师都是从下面所选择的

- 前端开发岗位必备能力  ：可以看到下面这张应聘广告，取自boos直聘一家华为技术有限公式对前端的要求；还有很多，可以自己去网上看看。

  ![image-20220625224709242](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625224709242.png)

- 从事互联网行业都需要懂：拿网络来讲，下图1看到有个IP地址【112.80.248.76】，有人会问，这是什么？![image-20220625225239762](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625225239762.png)

  我们拿IP  112.80.248.76到网站上在域名那里输入就会发现可以直达百度百科页面，这是IP

  ![image-20220625225644704](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625225644704.png)

  这是https://www.baidu.com域名《—而你也可以点击这里直达到百度

  ![image-20220625230509293](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625230509293.png)

  然后又会说，这个这个有什么关系呢？我们再来看，我的只有域名（可以改，可永久使用），没有单独的IP（不能手动改，连接网络产生新的IP），是不是发现IP搜索起来很麻烦，不易记，而你看上面一张图域名 https:// 可以，但为什么?学了前端就知道了。

  ![image-20220625230114831](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220625230114831.png)

- 职业发展，职业晋级

- 了解产品开发原理：和移动开发做app，比如安卓应用和苹果应用，产品原理都是一样的，当你学了HTML后，了解到了互联网底层怎么做到的事情，其实你也知道了前面百度IP和域名讲了一些原理，后面会慢慢知晓。

## 1.4是什么？

> 我们把它一一分解：
>
> 1. 超文本标记语言：（Hyper Text Markup Language）简写HTML
>
> 2. 超：图片、音频、视频、链接（淘宝网页无非就是这些）
>
>    ![image-20220626065907789](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626065907789.png)
>
> 3. 文本：文本
>
> 4. 标记：单词、描述东西
>
> 5. 语言：一门语言
>
> 6. 网页中的结构：知道网页上的结构，你就可以随心所欲的修改任何数据了，不需要通过PS篡改内容
>
>    ![image-20220626071545376](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626071545376.png)

所以HTNML当中它是带有图片，音频，视频，链接文本的一门描述性的语言

# 2.HTML

复制的时候，有的复制还收费，随便一篇电子书，我们是复制不了的![image-20220626080445357](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626080445357.png)

我们试着使用再域名前面加 read：意思是进入到阅读模式

![image-20220626080549542](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626080549542.png)

回车，然后可以复制和朗读了

![image-20220626080802914](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626080802914.png)

[还可以下载音乐]([(11条消息) 利用浏览器开发者工具下载歌曲_吃饭了～的博客-CSDN博客_网页f12下载歌曲](https://blog.csdn.net/weixin_45597271/article/details/114582942))我的用QQ音乐来实验，首先F12，打开开发者，在网页菜单栏选择网络，然后子菜单就选择媒体（这种操作主要是在元素查找.mp3查询不到的另一种方法）

![image-20220626091940650](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626091940650.png)

## 2.1.创建项目文件

我们创建一个项目，

![image-20220626075432164](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626075432164.png)

创建成功

![image-20220626081424380](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626081424380.png)

然后在test项目右击 新建-》选8.html文件

![image-20220626081516952](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626081516952.png)

我的HTML名为test.html，模板选择默认的-》创建

![image-20220626081715408](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626081715408.png)

创建好了之后，就是下图，因为我们选择模块的时候是默认的

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		
	</body>
</html>
```

所以它会给我们写好的html结构，如果想自己敲可以在上图的时候选择空白文件。

## 2.2.我的第一个网页

紧接上面的操作，我们在<body>写一个hello world </body>

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
        
		hello world!
        
	</body>
</html>
```

![image-20220626082744990](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626082744990.png)

**这个*提示没有保存**，Ctrl+s或者点击左上角菜单文件保存，看效果

![image-20220626083133703](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626083133703.png)

如果你的预览会出错，应该是没网络的原因，没有安装相应的插件，有个临时的方法，就是在项目test右击

![image-20220626083800766](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626083800766.png)

看结果

![image-20220626083847179](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626083847179.png)

# 3.HTML

## 3.1.语法

### 开始和结束

打招呼第一句:<吃了吗?>  以 </吃了吗?>结束（有个/）

```html
<吃了吗？>
	<找女朋友吗？></找女朋友了吗？>
		<你也没人要吗?></你也没人要吗?>
</吃了吗？>
```

这就是HTML的一个对话，有<u>开始就要有结束</u>；以**成对方式**出现

### 闭合标签

但是有几个是没有结束标签，比如<!DOCTYPE html>和<meta>，有的人看到了可能会觉得，啊~这有的要，有的不要，好乱呐；放心，像下面这些，很少标签是不用加的。

![image-20220626094252058](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626094252058.png)

```html
<!DOCTYPE html><!-- 声明一个HTML5的文件 -->
```

### 注释

```html
行注释：<!-- 声明一个HTML5的文件 -->
多行注释：<!-- 	
		注释内容
		-->
```

![image-20220626100207144](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626100207144.png)

注释在网页里面是看不到的，所以😏；下图是百度的网页，它也有注释需要打开源代码检查控制台才能看到

![image-20220626101037868](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626101037868.png)

### 框架

<title></tiytle>


我们来实验一下，看看title的效果

![image-20220626102244214](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626102244214.png)

源代码及注释：

```html
<!-- 注释内容 快捷键Ctr+/ -->
<!DOCTYPE html><!-- 声明一个HTML5的文件 -->
<html>	<!-- 开始html -->
	<head>	<!-- 网页头部 -->
		<meta charset="utf-8">  <!--翻译官-->
		<title>百度两下</title><!-- 名字 -->
	</head>	<!-- 结束头部 -->
	<body>
		hello world
	<!-- Ctrl+s 保存 -->
	</body>
</html><!-- 结束html -->

```

## 3.2.文字

> 思维导图：
>
> ![image-20220626111725162](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626111725162.png)



### 标题

h1一级标题

```html
<h1 >古诗</h1>
```

效果：

![image-20220626104123326](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626104123326.png)

### 段落

```
<p>
		锄禾日当午，汗滴禾下土
		谁之盘中餐，粒粒皆辛苦
</p>
```

文字加粗倾斜效果，作用都一样，建议使用<storg>加粗和<em>倾斜，而&nbsp；是空格的含义

![image-20220626113338537](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626113338537.png)

## 3.3.图片

> 思维导图![image-20220626111634399](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626111634399.png)

```html
<img src"图片路径">
```

我们可以用tab补全，或者选择下面的预选

![image-20220626105336134](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626105336134.png)

我们看到图片太大，都看不到了

![image-20220626105809185](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626105809185.png)

加入参数修改图片参数大小【宽weight】，【高height】，😃可以看个够了

![image-20220626110322894](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626110322894.png)

还有一些很好的提示参数：alt，图片出错，有是网络慢，还有就是图片路径不正确（这里就是路径问题）

![image-20220626110827979](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626110827979.png)

还有一个不常用的属性，title，[查看更多](https://www.w3school.com.cn/)

![image-20220626111459137](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626111459137.png)

### 路径

HTML有2种路径的写法：**相对路径**和**绝对路径**。

> 如何正确引用一个文件。比如，怎样在一个HTML网页中引用另外一个HTML网页作为超链接(hyperlink)？怎样在一个网页中插入一张图片？......
>
> 如果你在引用文件时(如加入超链接，或者插入图片等)，使用了错误的文件路径，就会导致引用失效(无法浏览链接文件，或无法显示插入的图片等)。

- 相对路径：是从当前路径开始的路径，假如当前路径为E:\Html\test\img要描述上述路径，只需输入xjj.webp

  ![image-20220626112922453](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626112922453.png)

- 绝对路径：是从盘符开始的路径，形如

  ```
  E:\Html\test\img
  ```

  HTML的绝对路径指带域名的文件的完整路径。表示<u>源文件</u>所在目录的上上级目录，以此类推。正确地引用文件，我们需要学习一下HTML路径。[详细点解这]([相对路径_百度百科 (baidu.com)](https://baike.baidu.com/item/相对路径/479926?fr=aladdin))

  <img src="C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626112703028.png" alt="image-20220626112703028" style="zoom:33%;" />

  有时候我们是会把它们放到文件里

  ![image-20220626152356410](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626152356410.png)我们看下图，我需要查看图片，我要点开img，我要在代码中怎么表示呢

  ![image-20220626152620918](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626152620918.png)

  看图，在图形化界面中的步骤是：上一步->进入到img文件，命令行就是../img，如果在很多文件夹的下面，可以使用多个../形式进行上一步操作

  ![image-20220626152954241](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626152954241.png)

  还有一种情况，相当简单，直接进入到img文件就行

  ![image-20220626153446508](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626153446508.png)

## 3.4.音频

![image-20220626125431839](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626125431839.png)

```html
<audio src="音频地址"  controls="controls"></audio>
```

音频名字用英文，虽然在本机上不会出现问题，但是在服务器上却会出错。音频它播放需要一个控件【controls="controls"】,看图

![image-20220626123524150](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626123524150.png)

## 3.5.视频

视频的语法和音频一样，可以给它们加入宽高属性

```html
<video src="an.mp4" ></video>
```

![image-20220626131035080](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626131035080.png)

## 3.6.链接

链接就是从一个网页跳转到另一个网页，或者从开头直达结尾这么一个跳转效果

![image-20220626154443719](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626154443719.png)

```html
语法：
<a href="链接地址"></a>
```

### 外链

![image-20220626155009514](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626155009514.png)

没显示原因是因为没有给个提示：

![image-20220626155352961](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626155352961.png)

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>这是A页面</h1>
		
		<a href="https://www.baidu.com">点我去百度</a>
	</body>
</html>
```

发现只要写其它网页的链接地址就（我这里是baidu，也可以是京东...）可以访问到其它服务器上的网页，

### 内链

然后我们再试试访问本机服务器的内容：

![image-20220626160308629](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626160308629.png)

如果我需要让它们相互跳转可以在B.html中写入A.html的链接：

![image-20220626160630717](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626160630717.png)

既然可以放网页链接，那可不可以放图片或者视频链接？答案是：可以。

![image-20220626161731394](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626161731394.png)

源代码：

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>这是B页面</h1>
		<img src="图片地址" width="100px">
		<br>
		<a href="链接地址">链接</a>
	</body>
</html>
```

![image-20220626162458642](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626162458642.png)

如果我想要多个链接怎么办？我们可以把需要链接的放入到</a>链接结束之前：

![image-20220626162934016](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626162934016.png)

看鼠标由箭头变成一个手指，说明链接的区域可以点解的。还有就是打开链接是新窗口打开

还是自身的一个打开方式，默认的是自身打开target="___self_"

```html
<a href="B.html" target="_blank">去B</a>
```

![image-20220626165612744](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626165612744.png)

### 锚点

目录为什么可以这样跳呢，原理就是锚点

![image-20220626170206573](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626170206573.png)

我直接拿网页源代码看看，第一步：设置锚点，链接写入ID

![image-20220626170957423](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626170957423.png)

```html
语法：
<a href="#1"> 跳转到结尾</a>
```

第二步：元素加上对应ID名字

```html
p是个段落，加上ID名字
<p id="1">我是结尾</p>
```

![image-20220626171208258](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626171208258.png)

然后看看结果

![image-20220626171642093](C:\Users\萧\AppData\Roaming\Typora\typora-user-images\image-20220626171642093.png)

我们也可以自己在结尾加个链接跳转到目录，顺序相反；我这里是<p>段落，也可以在<body>或<head>。

想要源代码自己试一下，这些内容都是为了制造滚动条，不然看不到效果

```html
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<a href="#1"> 跳转到结尾</a>
		<p>我是p6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？
6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？
<img src="../img/xjj.webp">
6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？6月25日，海口一男生高考取得900分成绩，被清华北大联系录取，引发人们的关注。这位男生高考查分时，捂住屏幕不敢看，当看到自己的高考成绩为900分时，家人欢呼雀跃。面对两大顶尖学府的邀请，他会做出什么样的选择呢？l
</p>
		<br><br>
		<br>
		<audio src="../mp3/yy.mp3" controls="controls"></audio>>

		
		<p id="1">我是结尾</p>
	</body>
</html>
```

# 我的网页设计
