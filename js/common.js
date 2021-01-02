function loadingMsg(params){
    let wrap = document.getElementById(params.id);
    console.log(params);
    wrap.innerHTML = 
        `<div class="loading-wait">
            ${params.message}
            <div class="loading-icon"><i class="iconfont ${params.icon}"></i></div>
        </div>`
    
}