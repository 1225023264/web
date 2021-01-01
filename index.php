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
    
    <div class="container">

        <!-- 朗朗口腔 start -->
        <div class="main-column padding-top-90 padding-bottom-70">
            <h3>朗朗口腔</h3>
            <p>
                呵护牙齿健康 创造美好未来
                <span></span>
                care for teeth to create a better future
            </p>
        </div>
        <div class="info-list">
        <div id="infowListWrap"></div>
            <a href="" class="more-link" title="查看更多">查看更多</a>
        </div>
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
            <div class="wlefare-wrap clearfix">
                <div class="row">
                    <div class="content-big">
                        <img src="images/pic001.jpg" alt="爱能养老院活动">
                    </div>
                    <div class="content-small" style="background-color: #eae9e4;">
                        <div class="content-dec  padding-top-38">
                            <h4 class="title">美吉姆早教义诊活动</h4>
                            <time datetime="2016-09-17" pubdate="2016-09-17 12:00:00">2016-09-17</time>
                            <i class="line"></i>
                            <a href="" class="link-more" title="查看更多">
                                查看更多
                                <i class="iconfont icon-iconset0416"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="content-big">
                        <div class="content-dec padding-top-50">
                            <h4 class="title">美吉姆早教义诊活动</h4>
                            <time datetime="2016-09-17" pubdate="2016-09-17 12:00:00">2016-09-17</time>
                            <i class="line"></i>
                            <p class="dec">在“牙齿健康从娃娃抓起”大型美吉姆公益义诊活动现场，参与活动的朗朗口腔辽宁分公司儿童口腔专家王阳有着丰富的临床治疗经验，包括儿童龋病、儿童口腔外科、儿童错颌畸形早期矫治等，囊括了儿童口腔健康的各个方面。王医生现场对孩子们进行了细致的口腔检查</p>
                            <a href="" class="link-more" title="查看更多">
                                查看更多
                                <i class="iconfont icon-iconset0416"></i>
                            </a>
                        </div>
                    </div>
                    <div class="content-small">
                        <img src="images/pic002.jpg" alt="美吉姆早教义诊活动">
                    </div>
                </div>
                <div class="row">
                    <div class="content-small">
                        <img src="images/pic003.jpg" alt="">
                    </div>
                    <div class="content-big color-white" style="background-color: #e03854;">
                        <div class="content-dec padding-top-46">
                            <h4 class="title">商业城公益捐赠活动</h4>
                            <time datetime="2016-09-17" pubdate="2016-09-17 12:00:00">2016-09-17</time>
                            <i class="line"></i>
                            <p class="dec">朗朗口腔辽宁分公司于2016年9月17日在沈阳核心商圈中街商业城举办公益助残捐赠活动，本次共计为辽宁省残疾人福利基金会捐助善款184500元，朗朗口腔辽宁分公司CEO张显威、总经理杜忠华、原省委宣传部副部长葛本亮、辽宁省残联秘书长胡雅菊、商业城总经理刘丽</p>
                            <a href="" class="link-more" title="查看更多">
                                查看更多
                                <i class="iconfont icon-iconset0416"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- 朗朗公益 end -->

    </div>
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
    <script src="js/common.js"></script>
    <script src="js/banner.js"></script>
    <script>
        loadingMsg({
            wrap: 'infowListWrap',
            message: '加载中',
            icon:  'icon-jiazai'
        })
        $.ajax({
            url: "./data/index.php", //请求的url地址
            dataType: "json", //返回格式为json
            async: true, //请求是否异步，默认为异步，这也是ajax重要特性
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
                        wrap: 'infowListWrap',
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
    </script>
</body>

</html>