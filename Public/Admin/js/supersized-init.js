jQuery(function ($) {
    $.supersized({

        // Functionality
        slide_interval: 4000,    // 长度之间的过渡
        transition: 1,    // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right,
        // 7-Carousel Left
        transition_speed: 1000,    // 过渡速度
        performance: 1,    // 0-正常, 1-混合 速度/质量, 2-优化图像质量, 3-优化变化速度 （仅适用于Firefox和IE，不是WebKit）

        // Size & Position
        min_width: 0,    //允许最小宽度（后缀像素）
        min_height: 0,    // 允许最小高度（后缀像素）
        vertical_center: 1,    // 垂直中心背景
        horizontal_center: 1,    // 水平中心背景
        fit_always: 0,    // 图像永远不会超过浏览器的宽度或高度（忽略最小尺寸）
        fit_portrait: 1,    // 图片将不超过浏览器的高度
        fit_landscape: 0,    // 图片将不超过浏览器的宽度

        // Components
        slide_links: "blank",    // 每个幻灯片的个别环节（选择: false, 'num', 'name', 'blank'）
        slides: [    // 加载图片的路径
            {image: ADMIN_IMG_URL+'login/backgrounds/1.jpg'},
            {image: ADMIN_IMG_URL+'login/backgrounds/2.jpg'},
            {image: ADMIN_IMG_URL+'login/backgrounds/3.jpg'},
            {image: ADMIN_IMG_URL+'login/backgrounds/4.jpg'}
        ]

    });

});
