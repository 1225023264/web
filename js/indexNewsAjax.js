let tagMenu = document.getElementsByClassName('tab-menu')[0];
console.log(tagMenu)

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
        // "Content-type": "multipart/form-data; charset=utf-8"     // 使用表单上传文件时
        // 'Content-Type': 'application/x-www-form-urlencoded'  // multipart/form-data;boundary=--xxxxxxx   application/json
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
            menuHtml += `<a href="javascript: void(0);" onclick="loadNewsData(this)" class="${className}" title="${item.categoryName}">${item.categoryName}</a>`

            // console.log(item)
        })
        // 菜单
        tagMenu.innerHTML = menuHtml
        






        // console.log(tagMenu)
        // console.log(req)
    },
    complete: function() {
        //请求完成的处理
    },
    error: function(res) {
        //请求出错处理
    }
});


function loadNewsData(obj) {
    let aItem = tagMenu.children;
    // let aItem = document.getElementsByClassName('tab-menu')[0].children;

    // 清除所有的高光
    for(let i = 0; i < aItem.length; i++){
        aItem[i].className = ''
    }
    // 当前栏目高光
    obj.className = 'current';
    // console.log(aItem[2])
    // alert(11111)
}