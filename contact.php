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
    <link rel="stylesheet" href="./font/iconfont/iconfont.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=YVvpY3X0UuzV1OcpmPvOd32qBgCxGSKY"></script>
</head>

<body>
    <!-- 头部 start -->
    <?php include('header.php')?>
    <!-- 头部 end -->

    <!-- 面包屑 start-->
    <?php include('crumbs.php')?>
    <!-- 面包屑 end-->
    
    <!-- 内容 start-->
    <div class="container">
        <!--百度地图容器-->
        <div class="baidu-map" id="map"></div>
        <div class="content-wrap">
            <div class="info">
                <h4 class="title">朗朗医疗投资限公司</h4>
                <span>集团总部招商热线：</span>
                <a class="telphone" href="tel:0755-56566573">0755-56566573</a>
                <p>
                    <strong>地址</strong><br />
                    深圳商山区（科技园）高新南一道3号富诚大厦三楼
                </p>
                <p>
                    <strong>联系人：</strong>王经理
                </p>
                <p>
                    <strong>邮箱</strong><br />
                    wanghb@langlangdentalcom
                </p>
                <p>
                    <strong>网址</strong><br />
                    www.langlangdental.com
                </p>
            </div>
            <div class="message-form">
                <p class="title">合赢未来 · 共创伟业 Win-win cooperation for bright future</p>
                <form action="">
                    <div class="news-row-wrap gutter-16">
                        <div class="row-wrap-col">
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input type="text" id="name" placeholder="姓名">
                                </div>    
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input type="text" id="mobile" placeholder="手机号">
                                </div>    
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input type="email" id="email" placeholder="邮箱">
                                </div>    
                            </div>
                            <div class="col-item-12">
                                <div class="input-item">
                                    <textarea rows="5" id="text" placeholder="内容"></textarea>
                                </div>  
                            </div>
                            <div class="col-item-4">
                                <div class="input-item">
                                    <input type="text" id="code" placeholder="验证码">
                                </div>    
                            </div>
                            <div class="col-item-4">
                                <!-- src中的图片是后台返回回来的一个链接地址 -->
                                <img src="images/message-code.jpg" alt=""> 
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="checkForm()">提交</button>
                </form>
            </div>
        </div>
    </div>
    <div class="jobs-banner">
        <h4>加入我们</h4>
        <p>尽揽天下英才 共展宏图伟业</p>
        <span>opportunity seldom joins us</span>
    </div>
    <div class="container">
        <div class="jobs-list" id="jobsList" onclick="aaa()">
            <section class="show">
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地址：<strong>深圳</strong></span><span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br>
                    任职资格<br>
                    1，财务，会计专业，持有会计证；<br>
                    2，具有一年以上工作经验；<br>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br>
                    4，工作认真，态度端正。<br>
                    职能类别：会计 财务助理/文员<br>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span><span>手机：<a href="tel:186-6582-2617（梁小姐）">186-6582-2617（梁小姐）</a></span><span>座机：<a href="tel:0755-86566573转6019">0755-86566573转6019</a></span>            
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地址：<strong>深圳</strong></span><span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br>
                    任职资格<br>
                    1，财务，会计专业，持有会计证；<br>
                    2，具有一年以上工作经验；<br>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br>
                    4，工作认真，态度端正。<br>
                    职能类别：会计 财务助理/文员<br>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span><span>手机：<a href="tel:186-6582-2617（梁小姐）">186-6582-2617（梁小姐）</a></span><span>座机：<a href="tel:0755-86566573转6019">0755-86566573转6019</a></span>            
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地址：<strong>深圳</strong></span><span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br>
                    任职资格<br>
                    1，财务，会计专业，持有会计证；<br>
                    2，具有一年以上工作经验；<br>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br>
                    4，工作认真，态度端正。<br>
                    职能类别：会计 财务助理/文员<br>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span><span>手机：<a href="tel:186-6582-2617（梁小姐）">186-6582-2617（梁小姐）</a></span><span>座机：<a href="tel:0755-86566573转6019">0755-86566573转6019</a></span>            
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地址：<strong>深圳</strong></span><span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br>
                    任职资格<br>
                    1，财务，会计专业，持有会计证；<br>
                    2，具有一年以上工作经验；<br>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br>
                    4，工作认真，态度端正。<br>
                    职能类别：会计 财务助理/文员<br>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span><span>手机：<a href="tel:186-6582-2617（梁小姐）">186-6582-2617（梁小姐）</a></span><span>座机：<a href="tel:0755-86566573转6019">0755-86566573转6019</a></span>            
                    </div>
                </div>
            </section>
            <section>
                <header>
                    <div class="mark" data-type="mark"></div>
                    <span>工作地址：<strong>深圳</strong></span><span>工作岗位：<strong>财务</strong></span>
                </header>
                <div class="content">
                    岗位职责：<br>
                    负责公司日常财务的记录汇总，统计报表。淘宝天猫商城的日常发票开具，审核打单。有淘宝，京东，等等电商公司的日常工作经验优先，<br>
                    任职资格<br>
                    1，财务，会计专业，持有会计证；<br>
                    2，具有一年以上工作经验；<br>
                    3，熟悉操作财务软件，Excel，Word，ERP等办公软件；<br>
                    4，工作认真，态度端正。<br>
                    职能类别：会计 财务助理/文员<br>
                    <a href="mailto:liangy@langlangdental.com" class="button">立即申请</a>
                    <div class="info">
                        <span>邮箱：<a href="mailto:liangy@langlangdental.com">liangy@langlangdental.com</a></span><span>手机：<a href="tel:186-6582-2617（梁小姐）">186-6582-2617（梁小姐）</a></span><span>座机：<a href="tel:0755-86566573转6019">0755-86566573转6019</a></span>            
                    </div>
                </div>
            </section>
        </div>
        <div class="pagination padding-top-120">
            <a href="javascript: void(0)">1</a><span>2</span><a href="javascript: void(0)">3</a><a href="javascript: void(0)">4</a><a href="javascript: void(0)">5</a><a href="javascript: void(0)">6</a>
        </div>
    </div>
    <!-- 内容 end-->
    


    <!-- 底部 start -->
    <?php include('footer.php')?>
    <!-- 底部 end -->

    <script>    
    // jobs内容显示隐藏
    /**
     * 1、标签内嵌  如果和获取dom对象方式同时存在时会被覆盖
     */
    function aaa() {
        alert(1111)
    }
    /**
     * 2、获取DOM对象，传统绑定 绑定覆盖前一个  如果子元素需要绑定很多东西的话,不要使用这种方式，消耗很大性能，占内存，建议用事件注册的方式做
     */
    let jobsList = document.getElementById('jobsList');
    jobsList.onclick = function(){
        alert(22222)
    }
    jobsList.onclick = function(){
        alert(33333)
    }
    /**
     * 3、事件注册 = 事件委托  不会被其他绑定方式影响，依次执行  用事件注册的方式来做，子元素不用绑定事件，只绑定父元素一个事件，然后替换子元素就可以了，父级不用替换，永远只有一个东西
     */
    jobsList.addEventListener('click', function(a){
        console.log(a.target.tagName)
        let target = a.target
        let targetType = target.getAttribute('data-type');
        let targetName = target.tagName.toLowerCase()
        let hasClassName = ''
        // alert(targetName)
        if (targetType == 'mark' && targetName == 'div') {
            hasClassName = target.parentNode.parentNode.className
            console.log(hasClassName)
            if (hasClassName) {
                target.parentNode.parentNode.className = ''
            } else {
                target.parentNode.parentNode.className = 'show'
            }
            alert(targetName)
        }
    })
    jobsList.addEventListener('click', function(){
        alert(55555)
    })



    // 表单验证
    function checkForm() {
        // alert(111111)
        let name = document.getElementById('name');
        let mobile = document.getElementById('mobile');
        let email = document.getElementById('email');
        let text = document.getElementById('text');
        let code = document.getElementById('code');

        // if (!name.value || name.value == '') {
        //     alert('姓名不能为空！！')
        //     return false;
        // }
        if (!name.value) {
            alert('姓名不能为空！！')
            return false;
        }
        if (!mobile.value) {
            alert('手机号码不能为空！！')
            return false; 
        } 
        if(!(/^1[3-9]\d{9}$/.test(mobile.value))){ 
            alert("手机号码有误，请重新输入");  
            return false; 
        } 
        // if (!email.value) {
        //     alert('姓名不能为空！！')
        //     return false;
        // }
        // if (!text.value) {
        //     alert('姓名不能为空！！')
        //     return false;
        // }
        // if (!code.value) {
        //     alert('姓名不能为空！！')
        //     return false;
        // }
        // ajax
        alert('111')
    }
    </script>
    
    <script>
        //创建和初始化地图函数：
        function initMap() {
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
            addMapOverlay();//向地图添加覆盖物
        }
        function createMap() {
            map = new BMap.Map("map");
            map.centerAndZoom(new BMap.Point(113.960948, 22.54424), 19);
        }
        function setMapEvent() {
            map.enableScrollWheelZoom();
            map.enableKeyboard();
            map.enableDragging();
            map.enableDoubleClickZoom()
        }
        function addClickHandler(target, window) {
            target.addEventListener("click", function () {
                target.openInfoWindow(window);
            });
        }
        function addMapOverlay() {
            var markers = [
                { content: "电话：13700000000</br>地址：", title: "富诚科技大厦", imageOffset: { width: 0, height: 3 }, position: { lat: 22.544357, lng: 113.960961 } }
            ];
            for (var index = 0; index < markers.length; index++) {
                var point = new BMap.Point(markers[index].position.lng, markers[index].position.lat);
                var marker = new BMap.Marker(point, {
                    icon: new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png", new BMap.Size(20, 25), {
                        imageOffset: new BMap.Size(markers[index].imageOffset.width, markers[index].imageOffset.height)
                    })
                });
                var label = new BMap.Label(markers[index].title, { offset: new BMap.Size(25, 5) });
                var opts = {
                    width: 200,
                    title: markers[index].title,
                    enableMessage: false
                };
                var infoWindow = new BMap.InfoWindow(markers[index].content, opts);
                marker.setLabel(label);
                addClickHandler(marker, infoWindow);
                map.addOverlay(marker);
            };
        }
        //向地图添加控件
        function addMapControl() {
            var scaleControl = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_BOTTOM_LEFT });
            scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
            map.addControl(scaleControl);
            var navControl = new BMap.NavigationControl({ anchor: BMAP_ANCHOR_TOP_LEFT, type: BMAP_NAVIGATION_CONTROL_LARGE });
            map.addControl(navControl);
            var overviewControl = new BMap.OverviewMapControl({ anchor: BMAP_ANCHOR_BOTTOM_RIGHT, isOpen: true });
            map.addControl(overviewControl);
        }
        var map;
        initMap();
    </script>

</body>

</html>