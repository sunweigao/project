var app = getApp()  
Page({  
  data: {  
      /*imgUrls: [  
       {  
         link:'/pages/index/index',  
          url:'../../images/banner1.jpg'   
       },{  
          link:'/pages/index/index',  
          url:'../../images/banner2.jpg'   
       },{  
          link:'/pages/index/index',  
          url:'../../images/banner3.jpg'   
       }   
    ],*/
    navs: [{icon: "../../images/nav01.png", name: "大聚会"},
           {icon: "../../images/nav02.png", name: "海外购"},
           {icon: "../../images/nav03.png",  name: "超市百货"},
           {icon: "../../images/nav04.png",  name: "厂家直销"},
           {icon: "../../images/nav05.png",  name: "美食娱乐"}],
     kehu: [{icon: "../../images/scyh1.png",  name: "海绵包包"},
           {icon: "../../images/scyh2.png", name:"韩国代购"},
           {icon: "../../images/scyh3.png", name:"ARC潮店"},
           {icon: "../../images/scyh4.png", name: "欧力女装"}],
 Selected:[{icon:"../../images/d_sp_01.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
          {icon:"../../images/d_sp_02.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
          {icon:"../../images/d_sp_03.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
          {icon:"../../images/d_sp_04.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
          {icon:"../../images/d_sp_05.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
          {icon:"../../images/d_sp_06.png",name:"百搭学院风英伦背包单双肩包 ￥1.00 $176.00"}],
    indicatorDots: true,  
    autoplay: true,  
    interval: 5000,  
    duration: 1000,  
    userInfo: {}  
  },  
  onLoad: function () {  
    var that=this
    console.log('onLoad test'); 
    //轮播图
        wx.request({
            url: 'http://www.gaozi.com/Month11/weixin/jingxi/laravel/public/index.php',
            method: 'GET',
            data: {},
            header: {
                'Accept':'application/json'
            },
            success: function(res) {
                that.setData({
                    images: res.data
                })
            }
        }) 
  }
  
}) 
