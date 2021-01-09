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
            menuHtml += `<a href="javascript: void(0);" onclick="loadNewsData({_this: this, id: ${item.id}})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`
            // menuHtml += `<a href="javascript: void(0);" onclick="loadNewsData(this, ${item.id})" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`

        })
        // 菜单
        tagMenu.innerHTML = menuHtml
        
    },
    complete: function() {
        //请求完成的处理
    },
    error: function(res) {
        //请求出错处理
    }
});


function loadNewsData(params) {
    // console.log(params)

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
            console.log(req)
        },
        complete: function() {
            //请求完成的处理
        },
        error: function(res) {
            //请求出错处理
        }
    });
    









    let aItem = tagMenu.children;

    // 清除所有的高光
    for(let i = 0; i < aItem.length; i++){
        aItem[i].className = ''
    }
    // 当前栏目高光
    params._this.className = 'current';
    // params['_this'].className = 'current';
}
// function loadNewsData(obj, id) {
//     let aItem = tagMenu.children;

//     // 清除所有的高光
//     for(let i = 0; i < aItem.length; i++){
//         aItem[i].className = ''
//     }
//     // 当前栏目高光
//     obj.className = 'current';
// }