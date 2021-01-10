<!DOCTYPE html>
<!-- 中文设置为lang="zh-cn" -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 最佳的兼容模式方案 -->
    <meta http-equiv="X-UA-Copatible" content="IE=Edge,chrome=1">
    <title>WEB_VIEW制作</title>
    <!-- 项目描述： -->
    <meta name="description" content="">
    <!-- 搜索关键字： -->
    <meta name="keywords" content="">
    <!-- 项目标签图标： -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./js/swiper/css/swiper.min.css">
    <!-- <link rel="stylesheet" href="./font/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="./font/iconfont/iconfont.css">
</head>

<body>
    <div class="container">
        <header class="clearfix">
            <h1 class="logo pull-left">
                <a href="index.php" title="朗朗口腔" target="_blank">
                    <img src="./images/logo.jpg" alt="朗朗口腔">
                </a>
            </h1>
            <div class="pull-right">
                <div class="pull-right">
                    <div class="menu-link clearfix">
                        <div class="lang">
                            中文
                            <ul>
                                <a href="" title="中文">中文</a>
                                <a href="" title="英文">英文</a>
                            </ul>
                        </div>
                        <span class="link"></span>
                        <a href="tel:0755-86566573" title="0755-86566573">0755-86566573</a>
                        <span class="link"></span>
                        <a href="index.php" title="朗朗口腔集团官网">朗朗口腔集团官网</a>
                    </div>
                    <nav>
                        <ul class="clearfix">
                            <li>
                                <a href="index.php" title="首页">首页</a>
                                <ul>
                                    <li><a href="" title="郎郎简介">郎郎简介</a></li>
                                    <li><a href="" title="郎朗优势">郎朗优势</a></li>
                                    <li><a href="" title="核心团结">核心团结</a></li>
                                    <li><a href="" title="郎朗历程">郎朗历程</a></li>
                                </ul>
                            </li>
                            <li class="current">
                                <a href="" title="走进朗朗">走进朗朗</a>
                                <ul>
                                    <li><a href="" title="郎郎简介">郎郎简介</a></li>
                                    <li><a href="" title="郎朗优势">郎朗优势</a></li>
                                    <li><a href="" title="企业荣誉">企业荣誉</a></li>
                                    <li><a href="" title="团队风采">团队风采</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php" title="资讯动态">资讯动态</a>
                                <ul>
                                    <li><a href="" title="行业动态">行业动态</a></li>
                                    <li><a href="" title="郎朗资讯">郎朗资讯</a></li>
                                    <li><a href="" title="媒体报道">媒体报道</a></li>
                                    <li><a href="" title="公益活动">公益活动</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php" title="合作伙伴">合作伙伴</a>
                                <ul>
                                    <li><a href="" title="门诊列表">门诊列表</a></li>
                                    <li><a href="" title="门诊详情">门诊详情</a></li>
                                    <li><a href="" title="交通指引">交通指引</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php" title="辅助功能">辅助功能</a>
                                <ul>
                                    <li><a href="" title="公众号指引">公众号指引</a></li>
                                    <li><a href="" title="交通指南">交通指南</a></li>
                                    <li><a href="" title="在线客服">在线客服</a></li>
                                    <li><a href="" title="一键拨号">一键拨号</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="index.php" title="联系我们">联系我们</a>
                                <ul>
                                    <li><a href="" title="联系我们">联系我们</a></li>
                                    <li><a href="" title="加入我们">加入我们</a></li>
                                    <li><a href="" title="在线留言">在线留言</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>
    <!-- 幻灯片 start -->
    <div id="slide-wrap">
        <div class="slide-content">
            <ul class="clearfix">
                <li><img src="images/img.jpg" width="100%" alt="认真学习web前端"></li>
                <li><img src="images/img.jpg" width="100%" alt="认真学习web前端"></li>
                <li><img src="images/img.jpg" width="100%" alt="认真学习web前端"></li>
            </ul>
        </div>
        <ul class="slide-nav">
            <a href="javascript: void(0);" class="current"></a>
            <a href="javascript: void(0);"></a>
            <a href="javascript: void(0);"></a>
        </ul>
        <span class="slide-prev"><i class="iconfont icon-zuo"></i></span>
        <span class="slide-next"><i class="iconfont icon-you"></i></span>
    </div>
    <!-- 幻灯片 end -->

    <!-- 内容区 start -->
    <div class="container">
        <!-- 朗朗口腔 start -->
        <section>
            <header>
                <div class="main-column padding-top-90 padding-bottom-70">
                    <h3>朗朗口腔</h3>
                    <p>
                        呵护牙齿健康 创造美好未来
                        <span></span>
                        care for teeth to create a better future
                    </p>
                </div>
            </header>
            <div class="info-list">
                <div id="infowListWrap"></div>
                <a href="" class="more-link" title="查看更多">查看更多</a>
            </div>
        </section>
        <!-- 朗朗口腔 end -->

        <!-- 朗朗公益 start -->
        <section class="welfare">
            <header>
                <div class="main-column padding-top-53 padding-bottom-53">
                <h3>朗朗公益</h3>
                <p>
                    呵护牙齿健康 创造美好未来
                    <span></span>
                    care for teeth to create a better future
                </p>
                </div>
            </header>
            <div class="wlefare-wrap" id="welfareWrap"></div>
        </section>
        <!-- 朗朗公益 end -->
    </div>
    <!-- 医生模块 start -->
    <section class="doctor">
        <header class="hide">
            <div>
                <h3>朗朗医生</h3>
                <p>
                    呵护牙齿健康 创造美好未来
                    <span></span>
                    care for teeth to create a better future
                </p>
            </div>
        </header>
        <div class="container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic004.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more border-none">
                                    查看更多
                                    <i class="iconfont icon-iconset0416"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic004.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more border-none">
                                    查看更多
                                    <i class="iconfont icon-iconset0416"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">

                        <div class="doctor-slide-item clearfix doctor-info">
                            <div class="img">
                                <span class="name">方晓珍</span>
                                <img src="images/pic004.jpg" alt="方晓珍">
                            </div>
                            <div class="content">
                                <h4 class="title">牙周主诊医师</h4>
                                <span class="txt">擅长：仿真陶瓷牙修复、牙周系统治疗、残根残冠的保存治疗等。</span>
                                <i class="line"></i>
                                <p class="dec">国内知名大学口腔医学学士，曾就职于高端私人齿科工作室，从事口腔事业10余年，对口腔各类常见疾病的临床治疗积累了丰富经验。积极学习新技术的临床应用，不断进修提升，精通牙体保存治疗。数次参加北京医科大学牙周学习研究项目、香港大学牙周学习研究项目。技术上追求完美，坚持 “微创无痛治疗” 原则，深受患者的信赖！</p>
                                <a href="" class="link-more border-none">
                                    
                                    查看更多
                                    <i class="iconfont icon-iconset0416"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Add Pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                <!-- Add Arrows -->
                <!-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> -->
            </div>
            <div class="opposite"><div class="swiper-pagination doctor-swiper-pagination"></div></div>


        
        </div>
    </section>
    <!-- 医生模块 end -->

    
    <!-- 咨询模块 start -->
    <div class="container">
        <section>
            <header>
                <div class="main-column padding-top-53 padding-bottom-40">
                    <h3>资讯动态</h3>
                    <p>
                        呵护牙齿健康 创造美好未来
                        <span></span>
                        care for teeth to create a better future
                    </p>
                </div>
            </header>
            <ul class="tab-menu"></ul>
            <!-- 行业动态 -->
            <div id="tab-content-wrap">
                <div id="Industry">
                </div>
                <!-- 朗朗资讯 -->
                <div id="information" style="display:none"></div>
                <!-- 媒体报道 -->
                <div id="media" style="display:none"></div>
                <!-- 公益活动 -->
                <div id="activities" style="display:none"></div>
            </div>
            
        </section>
    </div>
    <!-- 咨询模块 end -->
    <footer>
        <div class="container">
            <div class="clearfix">
                <div class="pull-left">
                    <address class="footer-contact-info">
                        <h5>朗朗医疗投资有限公司</h5>
                        <p>集团总部热线 ： <a href="tel:4000-890-608" title="4000-890-608">4000-890-608</a></p>
                        <p>集团总部地址 : 广东省深圳市南山区高新南一道3号富诚大厦三楼</p>
                    </address>
                    <ul class="share clearfix">
                        <a href="" class="sing-share">
                            <p>
                                <img src="images/code.jpg" alt="">
                            </p>
                            <!-- <i class="fa fa-weibo" aria-hidden="true"></i> -->
                            <i class="iconfont icon-weibo"></i>
                        </a>
                        <a href="" class="wechart-share">
                            <p>
                                <img src="images/code.jpg" alt="">
                            </p>
                            <!-- <i class="fa fa-weixin" aria-hidden="true"></i> -->
                            <i class="iconfont icon-weixin"></i>
                        </a>
                    </ul>
                </div>
                <div class="pull-right">
                    <ul class="footer-menu clearfix">
                        <dl>
                            <dt><a href="" title="走进郎朗">走进郎朗</a></dt>
                            <dd><a href="" title="郎朗简介">郎朗简介</a></dd>
                            <dd><a href="" title="郎朗优势">郎朗优势</a></dd>
                            <dd><a href="" title="企业荣誉">企业荣誉</a></dd>
                            <dd><a href="" title="团队风采">团队风采</a></dd>
                        </dl>
                        <dl>
                            <dt><a href="" title="资讯动态">资讯动态</a></dt>
                            <dd><a href="" title="行业动态">行业动态</a></dd>
                            <dd><a href="" title="郎朗资讯">郎朗资讯</a></dd>
                            <dd><a href="" title="媒体报道">媒体报道</a></dd>
                            <dd><a href="" title="公益活动">公益活动</a></dd>
                        </dl>
                        <dl>
                            <dt><a href="" title="合作伙伴">合作伙伴</a></dt>
                            <dd><a href="" title="门诊列表">门诊列表</a></dd>
                            <dd><a href="" title="门诊详情">门诊详情</a></dd>
                            <dd><a href="" title="交通指引">交通指引</a></dd>
                        </dl>
                        <dl>
                            <dt><a href="" title="辅助功能">辅助功能</a></dt>
                            <dd><a href="" title="公众号指引">公众号指引</a></dd>
                            <dd><a href="" title="交通指南">交通指南</a></dd>
                            <dd><a href="" title="在线客服">在线客服</a></dd>
                            <dd><a href="" title="一键拨号">一键拨号</a></dd>
                        </dl>
                        <dl>
                            <dt><a href="" title="联系我们">联系我们</a></dt>
                            <dd><a href="" title="联系我们">联系我们</a></dd>
                            <dd><a href="" title="加入我们">加入我们</a></dd>
                            <dd><a href="" title="在线留言">在线留言</a></dd>
                        </dl>
                        <dl>
                            <img src="images/code.jpg" alt="认真学习web前端">
                            <p class="text-center">微信公众号</p>
                        </dl>
                    </ul>
                </div>
            </div>
            <div id="copyright">@ 2005 - 2016 朗朗口腔医疗投资有限公司,版权所有 粤ICP各08130115号-1</div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/swiper/js/swiper.min.js"></script>
    <script src="js/common.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/indexNewsAjax.js"></script>
    <script src="js/doctorSwiper.js"></script>
    <script>
        loadingMsg({
            id: 'infowListWrap',
            message: '加载中',
            icon:  'icon-jiazai'
        })
        loadingMsg({
            id: 'welfareWrap',
            message: '加载中',
            icon:  'icon-jiazai'
        })
        $.ajax({
            url: "./data/index.php", //请求的url地址
            dataType: "json", //返回格式为json
            async: false, //请求是否异步，默认为异步，这也是ajax重要特性
            cache: false, // 是否读取缓存
            data: {
                categoryId: 123456
            }, //参数值
            type: "POST",   //请求方式 GET明文\POST密文
            beforeSend: function() {
                //请求前的处理
            },
            success: function(req) {    //请求成功时处理
                let infoListWrap = document.getElementById('infowListWrap');
                // console.log(infoListWrap)
                // 判断数据是否存在
                if(!req.data || req.data.length === 0){
                    // console.log(111)
                    loadingMsg({
                        id: 'infowListWrap',
                        message: '当前数据为空'
                    })
                    // infoListWrap.innerHTML = `<div class="loading-wait">当前没有数据</div>`;
                    return false
                }
                // console.log(req.data)
                // 字符串
                // 处理数据
                let ul = '<ul class="clearfix">'
                // [data, data, data]
                req.data.forEach(item=> {
                    // console.log(item)
                    ul += `<figure>
                        <a  href="newsDetail.php?id=${item.id}">
                        <img src="${item.imgUrl}" alt="${item.title}" title="${item.title}">
                        <figcaption>${item.title}</figcaption>
                        <p>${item.dec}</p>
                        </a>
                    </figure>`
                })
                ul += '</ul>'
                // 请求成功后处理视图DOM渲染
                infoListWrap.innerHTML = ul
                // setTimeout(function() {
                //     infoListWrap.innerHTML = ul
                // }, 2000);
                // console.log(ul)
            },
            complete: function() {
                //请求完成的处理
            },
            error: function() {
                //请求出错处理
            }
        });
        $.ajax({
            url: "./data/index.php", //请求的url地址
            dataType: "json", //返回格式为json
            async: false, //请求是否异步，默认为异步，这也是ajax重要特性
            cache: false, // 是否读取缓存
            data: {
                module: 'welfare',
                categoryId: 10000
            }, //参数值
            type: "POST",   //请求方式 GET明文\POST密文
            beforeSend: function() {
                //请求前的处理
            },
            success: function(req) {    //请求成功时处理
                let welfareWrap = document.getElementById('welfareWrap');
                // 判断数据是否存在
                if(!req.data || req.data.length === 0){
                    // console.log(111)
                    loadingMsg({
                        id: 'welfareWrap',
                        message: '当前数据为空'
                    })
                    // infoListWrap.innerHTML = `<div class="loading-wait">当前没有数据</div>`;
                    return false
                }
                // console.log(req.data)
                let data = req.data
                let html = ''
                // 处理第一个
                html += `<div class="row">
                    <div class="content-flex">
                        <div class="content-flex-big">
                            <img src="${data[0].imgUrl}" alt="${data[0].title}">
                        </div>
                        <div class="content-flex-small" style="background-color: #${data[0].bgColor};">
                            <div class="content-dec">
                                <h4 class="title">${data[0].title}</h4>
                                <time datetime="${data[0].date}" pubdate="${data[0].date}">${data[0].date}</time>
                                <i class="line"></i>
                                <a href="" class="link-more">
                                    查看更多
                                    <i class="iconfont icon-iconset0416"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>`

                req.data.forEach((item, index) => {
                    // if(index == 0) { return; }
                    if(index != 0) {
                        html += `
                            <div class="row">
                                <div class="content-flex">
                                    <div class="content-flex-big ${item.color}" style="background-color: #${item.bgColor};">
                                        <div class="content-dec padding-top-50">
                                            <h4 class="title">${item.title}</h4>
                                            <time datetime="${item.date}" pubdate="${item.date}">${item.date}</time>
                                            <i class="line"></i>
                                            <p class="dec">${item.dec}</p>
                                            <a href="" class="link-more">
                                                查看更多
                                                <i class="iconfont icon-iconset0416"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="content-flex-small">
                                        <img src="${item.imgUrl}" alt="${item.title}">
                                    </div>
                                </div>
                            </div>`
                    }
                })

                welfareWrap.innerHTML = html
            },
            complete: function() {
                //请求完成的处理
            },
            error: function() {
                //请求出错处理
            }
        });
    </script>
</body>

</html>
