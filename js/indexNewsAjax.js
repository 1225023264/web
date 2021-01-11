let tagMenu = document.getElementsByClassName('tab-menu')[0];
// console.log(tagMenu)
// 储存数据
let dataItem = {}

$.ajax({
    url: "./data/newsCategory.php", //请求的url地址
    dataType: "json", //返回格式为json
    async: false, //请求是否异步，默认为异步，这也是ajax重要特性
    cache: false, // 是否读取缓存
    timeout: 5000, // 设置超时
    data: JSON.stringify({ // json对象转字符串
        module: 'news'
    }), //参数值
    // ajax请求头类型
    headers: { 
        "Content-type": "application/json; charset=utf-8"
    }, 
    type: "POST",   //请求方式 GET明文\POST密文
    beforeSend: function() {
        //请求前的处理
    },
    success: function(req) {    //请求成功时处理
        // let tagMenu = document.getElementsByClassName('tab-menu')[0];
        let data = req.data
        let menuHtml = ''

        data.forEach((item, index) => {
            let className = ''
            if(index === 0) { className = 'current'; }
            menuHtml += `<a data-type="${item.type}" href="javascript: void(0);" onclick="loadNewsData({_this: this, id: ${item.id}, index: ${index}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
            // menuHtml += `<a href="javascript: void(0);" onclick="loadNewsData(this, ${item.id})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`

        })
        // 菜单
        tagMenu.innerHTML = menuHtml

        // 默认读取第一个分类的数据
        loadNewsData({_this: tagMenu.children[0], id: data[0].id, index: 0})
    },
    complete: function() {
        //请求完成的处理
    },
    error: function(res) {
        //请求出错处理
    }
});


function loadNewsData(params) {
    // alert(params.index)
    // 获取自定义属性 getAttribute方法 ('data-request')传一个变量是获取，setAttribute方法('data-request','true')传两个变量是设置
    // 获取request标识，判断是否已请求成功数据，true为请求成功，false未请求
    let categoryType = params._this.getAttribute('data-type')
    // console.log(categoryType)
    // 获取内容区域
    let tabContentWrap = document.getElementById('tab-content-wrap');
    // console.log(tabContentWrap)
    // 获取分类菜单
    let aItem = tagMenu.children;
    // 分类高光
    // 清除所有的高光
    for(let i = 0; i < aItem.length; i++){ aItem[i].className = '' }
    // 当前栏目高光
    params._this.className = 'current';
    // 获取储存的数据
    let data = dataItem[categoryType]
    undefined == false
    if (data) { 
        tabContent(data, tabContentWrap)
        return false 
    }
    // 请求数据
    $.ajax({
        url: "./data/indexNews.php", //请求的url地址
        dataType: "json", //返回格式为json
        // async: false, //请求是否异步，默认为异步，这也是ajax重要特性
        // cache: false, // 是否读取缓存
        timeout: 5000, // 设置超时
        data: JSON.stringify({ // json对象转字符串
            categoryId: params.id
        }), //参数值
        // ajax请求头类型
        headers: { 
            "Content-type": "application/json; charset=utf-8"
        }, 
        type: "POST",   //请求方式 GET明文\POST密文
        beforeSend: function() {
            //请求前的处理
        },
        success: function(req) {    //请求成功时处理
            // console.log(req)
            let data = req.data;
            tabContent(data, tabContentWrap)
            // 储存数据
            // console.log(req.data)
            // console.log(categoryType)
            dataItem[categoryType] = req.data
            // console.log(dataItem)
        },
        complete: function() {
            //请求完成的处理
        },
        error: function(res) {
            //请求出错处理
        }
    });
        
}

function tabContent(data, content){
    let itemHtml = `<div class="news-wrap"><div class="box clearfix">`
        data.forEach(item => {
            let time = item.time.split(' ');
            itemHtml += `<div class="item">
                            <img src="${item.imgUrl}" alt="${item.title}">
                            <h4 class="title">${item.title}</h4>
                            <time datetime="${item.time}" pubdate="${time[0]}">${time[0]}</time>
                            <i class="line"></i>
                            <p class="dec">${item.dec}</p>
                            <a href="" class="link-more border-none">
                                查看更多
                                <i class="iconfont icon-iconset0416"></i>
                            </a>
                        </div>`
        });
                
        itemHtml += `</div></div>`

        content.innerHTML = itemHtml
}