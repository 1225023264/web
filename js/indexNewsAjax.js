let tagMenu = document.getElementsByClassName('tab-menu')[0];
// console.log(tagMenu)

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
            menuHtml += `<a data-type="${item.type}" data-request="false" href="javascript: void(0);" onclick="loadNewsData({_this: this, id: ${item.id}, index: ${index}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
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
    let getRequest = params._this.getAttribute('data-request')
    // console.log(getRequet)
    // 分类类型
    let categoryType = params._this.getAttribute('data-type')
    // 获取内容区域
    let tabContentWrap = document.getElementById('tab-content-wrap').children;
    // 当前的内容区
    let currentContent = null;
    // 获取分类菜单
    let aItem = tagMenu.children;
    // 显示指定的内容区域
    for (let i = 0; i < tabContentWrap.length; i++) {
        // 隐藏所有的对象
        tabContentWrap[i].style.display = 'none'
        // 获取ID
        let id = tabContentWrap[i].id
        // console.log(id)
        // 匹配对象
        if (categoryType === id) {
            // console.log(id)
            tabContentWrap[i].style.display = 'block'
            currentContent = tabContentWrap[i]
        }
        
    }
    // tabContentWrap[params.index] && ( tabContentWrap[params.index].style.display = 'block' )
    // if (tabContentWrap[params.index]) { tabContentWrap[params.index].style.display = 'block' }
    
    // console.log(tabContentWrap)
    // 分类高光
    
    // 清除所有的高光
    for(let i = 0; i < aItem.length; i++){ aItem[i].className = '' }
    // 当前栏目高光
    params._this.className = 'current';

    // 请求数据
    if(getRequest === 'true' || !currentContent){ return false }
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
            let data = req.data

            let itemHtml = `<div class="news-row-wrap gutter-15 index-news-list padding-top-73 padding-bottom-102"><div class="row-wrap-col">`

            data.forEach(item => {
                let time = item.time.split(' ');
                // console.log(time)

                itemHtml += `<div class="col-item-3"><div class="item">
                                <div class="img-cover" style="background-image: url(${item.imgUrl})">
                                    <img src="images/blank/indexNews.png" alt="${item.title}" width="100%">
                                </div>
                                <div class="figure-content padding-top-24">
                                    <h4 class="title">${item.title}</h4>
                                    <time datetime="${item.time}" pubdate="${time[0]}">${time[0]}</time>
                                    <i class="line"></i>
                                    <p class="dec">${item.dec}</p>
                                    <a href="" class="link-more">
                                        查看更多
                                        <i class="iconfont icon-iconset0416"></i>
                                    </a>
                                </div>
                            </div></div>`
            });
                    
            itemHtml += `</div></div>`
            currentContent && ( currentContent.innerHTML = itemHtml )
            // tabContentWrap[params.index] && ( tabContentWrap[params.index].innerHTML = itemHtml )
            // if (tabContentWrap[params.index]) { tabContentWrap[params.index].innerHTML = itemHtml }
            
            // 请求成功修改标识
            params._this.setAttribute('data-request','true')



        },
        complete: function() {
            //请求完成的处理
        },
        error: function(res) {
            //请求出错处理
        }
    });
        


}