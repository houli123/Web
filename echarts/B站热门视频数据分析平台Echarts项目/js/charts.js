// =============== =============== ===============
// =============== =============== ===============
// =============== 数据处理函数 ===============

// 处理动指标数据（柱状图）
// 处理柱状图的数据
function barProcess(data) {
    const categoryStats = {};
    
    // 统计每个分区的视频数量
    data.forEach(item => {
        // 如果没有分区信息，则跳过该项
        if (!item.分区) return;
        
        // 获取当前项的分区
        const category = item.分区;
        // 如果该分区尚未在统计中，则初始化
        if (!categoryStats[category]) {
            categoryStats[category] = {
                count: 0,  // 视频数量
                totalPlay: 0  // 总播放量
            };
        }
        // 增加视频数量
        categoryStats[category].count++;
        // 累加总播放量
        categoryStats[category].totalPlay += parseInt(item.播放);
    });

    // 转换为数组并按视频数量排序
    const sortedData = Object.entries(categoryStats)  //将categoryStats对象转换为一个包含键值对的数组
        .map(([category, stats]) => ({  //为每个元素创建一个新的对象
            category,
            count: stats.count,
            totalPlay: stats.totalPlay,
            avgPlay: Math.round(stats.totalPlay / stats.count)
        }))
        .sort((a, b) => b.count - a.count);  //如果b.count大于a.count，则b会被排在a前面。

    return {
        Allcategories: sortedData.map(item => item.category),  //所有类别名称的数组
        videoCount: sortedData.map(item => item.count),  //视频数量的数组
        avgPlayCount: sortedData.map(item => item.avgPlay)  //类别平均播放量的数组
    };
}

// 处理用户行为转化数据（热力图）
function heatmapProcess(data) {
    // 定义排名区间
    const rankRanges = [
        '1-10', '11-20', '21-30', '31-40', '41-50',
        // '51-60', '61-70', '71-80', '81-90', '91-100'
    ];

    // 统计每个分区在不同排名区间的视频数量
    const categoryStats = {};
    
    data.forEach(item => {
        if (!item.分区) return;
        
        const category = item.分区;
        const rank = parseInt(item.全站排行榜最高排名);
        
        if (!categoryStats[category]) {
            categoryStats[category] = {
                counts: new Array(5).fill(0),  //初始化一个长度为5的数组counts（用于存储每个排名区间的视频数量）
                total: 0  // 添加数统计
            };
        }
        
        // 根据排名填入对应区间
        if (rank > 0) {  // 只统计有排名的视频
            const rangeIndex = Math.floor((rank - 1) / 5);
            if (rangeIndex < 5) {
                categoryStats[category].counts[rangeIndex]++;
                categoryStats[category].total++;  // 累计总数
            }
        }
    });

    // 按照视频总数排序分区
    const sortedCategories = Object.entries(categoryStats)
        .sort((a, b) => b[1].total - a[1].total)  // 降序排列
        .map(entry => entry[0]);

    // 转换为热力图数据格式
    const heatmapData = [];
    sortedCategories.forEach((category, i) => {
        categoryStats[category].counts.forEach((count, j) => {
            if (count > 0) {  // 只添加有数据的点
                heatmapData.push([j, i, count]);
            }
        });
    });

    return {
        Allcategories: sortedCategories,  // 返回排序后的分区列表
        rankRanges: rankRanges,  //排名区间数组。
        data: heatmapData  //热力图的数据数组，每个元素代表一个数据点
    };
}

// 处理分区分布数据（气泡图）
function bubbleProcess(data) {
    const categories = {};
    data.forEach(item => {
        // 跳过空分区
        if (!item.分区) return;
        
        const category = item.分区;
        if (!categories[category]) {
            categories[category] = {
                videos: 0,  //视频数videos、播放量play、点赞数like和收藏数fav。
                play: 0,
                like: 0,
                fav: 0
            };
        }
        categories[category].videos++;
        categories[category].play += parseInt(item.播放);
        categories[category].like += parseInt(item.点赞);
        categories[category].fav += parseInt(item.收藏);
    });

    // 生成颜色映射
    const colors = {};
    Object.keys(categories).forEach(key => {
        colors[key] = {
            '生活': '#ff85c0',
            '影视': '#40a9ff',
            '游戏': '#ffd666',
            '动画': '#ff9c6e',
            '美食': '#73d13d',
            '时尚': '#ff85c0',
            '音乐': '#95de64',
            '动物圈': '#69c0ff',
            '资讯': '#40a9ff',
            '娱乐': '#ffc069',
            '知识': '#b37feb',
            '鬼畜': '#9254de',
            '数码': '#36cfc9',
            '舞蹈': '#69c0ff',
            '国创': '#ff7a45'
        }[key];
    });

    // 转换为气泡图数据格式并按播放量排序
    const bubbleData = Object.entries(categories)
        .map(([category, stats]) => ({
            value: [
                stats.play,
                stats.like,
                stats.fav
            ],
            category: category,
            play: stats.play,
            like: stats.like,
            fav: stats.fav
        }))
        .sort((a, b) => b.play - a.play);  // 按播放量降序排序

    return {
        data: bubbleData,
        colors: colors
    };
}

// 处理综合评估数据（雷达图）
function radarProcess(data) {
    const categoryStats = {};
    data.forEach(item => {
        const category = item.分区 || '其他';
        if (!categoryStats[category]) {
            categoryStats[category] = {
                videos: 0,  //包括视频数videos、播放量play、点赞数like、投币数coin、收藏数fav和分享数share。
                play: 0,
                like: 0,
                coin: 0,
                fav: 0,
                share: 0
            };
        }
        const stats = categoryStats[category];
        stats.videos++;
        stats.play += parseInt(item.播放);
        stats.like += parseInt(item.点赞);
        stats.coin += parseInt(item.硬币);
        stats.fav += parseInt(item.收藏);
        stats.share += parseInt(item.分享);
    });

    const maxValues = {  //用于存储每个统计指标的最大值
        play: 0,
        likeRate: 0,
        coinRate: 0,
        favRate: 0,
        shareRate: 0
    };

    const categories = Object.keys(categoryStats);
    const radarData = categories.map(category => {
        const stats = categoryStats[category];
        const likeRate = (stats.like / stats.play) * 100;
        const coinRate = (stats.coin / stats.play) * 100;
        const favRate = (stats.fav / stats.play) * 100;
        const shareRate = (stats.share / stats.play) * 100;

        maxValues.play = Math.max(maxValues.play, stats.play);
        maxValues.likeRate = Math.max(maxValues.likeRate, likeRate);
        maxValues.coinRate = Math.max(maxValues.coinRate, coinRate);
        maxValues.favRate = Math.max(maxValues.favRate, favRate);
        maxValues.shareRate = Math.max(maxValues.shareRate, shareRate);

        return {
            name: category,
            value: [
                stats.play,
                likeRate,
                coinRate,
                favRate,
                shareRate
            ]
        };
    });

    // 适当放大最大值使图表更美观
    maxValues.play = Math.ceil(maxValues.play * 1.2);
    maxValues.likeRate = Math.ceil(maxValues.likeRate * 1.2);
    maxValues.coinRate = Math.ceil(maxValues.coinRate * 1.2);
    maxValues.favRate = Math.ceil(maxValues.favRate * 1.2);
    maxValues.shareRate = Math.ceil(maxValues.shareRate * 1.2);

    return {
        categories,
        data: radarData,
        maxValues
    };
}

// =============== =============== ===============
// =============== =============== ===============
// =============== =============== ===============
// =============== =============== ===============
// =============== =============== ===============
// =============== =============== ===============
// =============== 图表初始化和配置 ===============


// 初始化所有图表
$.getJSON('bilibili_popular.json', function(data) {
    // 动态生成分区映射
    const Allcategories = {};
    data.forEach(item => {
        if (item.分区) {
            Allcategories[item.分区] = item.分区;
        }
    });

    // 初始化图表实例
    const bar = echarts.init(document.getElementById('bar'));
    const heatmap = echarts.init(document.getElementById('heatmap'));
    const bubble = echarts.init(document.getElementById('bubble')); 
    const radar = echarts.init(document.getElementById('radar'));

    // 处理数据
    const barData = barProcess(data);
    const heatmapData = heatmapProcess(data);
    const bubbleData = bubbleProcess(data);
    const radarData = radarProcess(data);

    // 将柱形图和气泡图进行connect
    echarts.connect([bar, bubble]);

    // 配置堆叠柱状图
    const barOption = {
        title: {
            text: '',
            left: 'center',
            textStyle: {
                color: '#fff'
            }
        },
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow'
            },
            formatter: function(params) {
                const videoCount = params[0].value;
                const avgPlay = params[1].value;
                return `${params[0].name}<br/>
                        热门视频数: ${videoCount}个<br/>
                        平均播放量: ${(avgPlay/10000).toFixed(1)}万`;
            }
        },
        legend: {
            data: ['视频数量', '平均播放量'],
            top: '5%',
            textStyle: {
                color: '#fff'
            }
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '15%',
            containLabel: true
        },
        xAxis: {
            type: 'category',
            data: barData.Allcategories,
            axisLabel: {
                color: '#fff',
                interval: 0,
                rotate: 45
            }
        },
        yAxis: [
            {
                type: 'value',
                name: '视频数量',
                nameTextStyle: {
                    color: '#fff'
                },
                axisLabel: {
                    color: '#fff',
                    formatter: '{value}个'
                },
                splitLine: {
                    lineStyle: {
                        color: 'rgba(255,255,255,0.1)'
                    }
                }
            },
            {
                type: 'value',
                name: '平均播放量',
                nameTextStyle: {
                    color: '#fff'
                },
                axisLabel: {
                    color: '#fff',
                    formatter: value => (value/10000).toFixed(0) + 'w'
                },
                splitLine: {
                    show: false
                }
            }
        ],
        series: [
            {
                name: '视频数量',
                type: 'bar',
                data: barData.videoCount,
                itemStyle: {
                    color: '#69c0ff'
                }
            },
            {
                name: '平均播放量',
                type: 'line',
                yAxisIndex: 1,
                data: barData.avgPlayCount,
                itemStyle: {
                    color: '#ff85c0'
                },
                symbolSize: 8
            }
        ]
    };

    // 渲染堆叠柱状图
    bar.setOption(barOption);

    // 配置热力图
    const heatmapOption = {
        title: {
            text: '',
            left: 'center',
            textStyle: {
                color: '#fff'
            }
        },
        tooltip: {
            position: 'top',
            formatter: function(params) {
                return `分区: ${heatmapData.Allcategories[params.value[1]]}<br/>
                        排名区间: ${heatmapData.rankRanges[params.value[0]]}<br/>
                        视频数量: ${params.value[2]}个`;
            }
        },
        grid: {
            left: '3%',
            right: '7%',
            bottom: '15%',
            top: '3%',
            containLabel: true
        },
        xAxis: {
            type: 'category',
            data: heatmapData.rankRanges,
            splitArea: {
                show: true
            },
            axisLabel: {
                color: '#fff',
                rotate: 45
            }
        },
        yAxis: {
            type: 'category',
            data: heatmapData.Allcategories,
            splitArea: {
                show: true
            },
            axisLabel: {
                color: '#fff'
            }
        },
        visualMap: {
            min: 0,
            max: 10,
            calculable: true,
            orient: 'horizontal',
            left: 'center',
            bottom: '0%',
            itemWidth: 30,
            itemHeight: 550,
            textStyle: {
                color: '#fff'
            },
            inRange: {
                color: [
                    
                    'rgba(74, 144, 226, 0.1)',    // 浅蓝
                    'rgba(74, 144, 226, 0.3)',
                    'rgba(74, 144, 226, 0.5)',
                    'rgba(74, 144, 226, 0.7)',
                    'rgba(74, 144, 226, 0.9)',     // 深蓝
                    // 'rgba(247, 89, 171, 0.3)',     // 浅粉
                    // 'rgba(247, 89, 171, 0.5)',
                    'rgba(247, 89, 171, 0.7)',
                    // 'rgba(247, 89, 171, 0.8)',
                    // 'rgba(247, 89, 171, 0.9)',     // 深粉
                    // 'rgba(247, 89, 171, 1)'        // 纯粉
                ]
            }
        },
        series: [{
            name: '视频分布',
            type: 'heatmap',
            data: heatmapData.data,
            label: {
                show: true,
                color: '#fff'
            },
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }]
    };

    // 渲染热力图
    heatmap.setOption(heatmapOption);

    // 配置气泡图
    const bubbleOption = {
        title: {
            text: '',
            left: 'center',
            textStyle: {
                color: '#fff'
            }
        },
        legend: {
            right: '10%',
            top: '3%',
            textStyle: {
                color: '#fff'
            }
        },
        tooltip: {
            trigger: 'item',
            formatter: function(params) {
                return `分区: ${params.data.category}<br/>
                        播放量: ${(params.data.play/100000000).toFixed(2)}亿<br/> 
                        点赞量: ${(params.data.like/10000).toFixed(0)}w<br/>
                        收藏量: ${(params.data.fav/10000).toFixed(0)}w`;
            }//toFixed是保留指定的小数位数
        },
        xAxis: {
            type: 'value',
            name: '播放量',
            nameTextStyle: { color: '#fff' },
            axisLabel: {
                color: '#fff',
                formatter: value => (value / 100000000).toFixed(2) + '亿'
            },
            splitLine: {
                lineStyle: { color: 'rgba(255,255,255,0.1)' }
            }
        },
        yAxis: [
            {
                type: 'value',
                name: '点赞量',
                nameTextStyle: { color: '#fff' },
                axisLabel: {
                    color: '#fff',
                    formatter: value => (value / 10000).toFixed(0) + 'w'
                },
                splitLine: {
                    lineStyle: { color: 'rgba(255,255,255,0.1)' }
                }
            }
        ],
        series: [
            {
                type: 'scatter',
                data: bubbleData.data,
                symbolSize: function(data) {
                    const size = Math.sqrt(data[2] / 1000);
                    return Math.min(Math.max(size, 8), 40); //确保气泡大小在8到40之间。
                },
                itemStyle: {
                    color: function(params) {
                        return bubbleData.colors[params.data.category];
                    },
                    opacity: 0.6,
                    borderColor: 'rgba(255,255,255,0.2)',
                    borderWidth: 1
                },
                emphasis: {
                    focus: 'series',
                    scale: true,
                    itemStyle: {
                        opacity: 0.9,
                        borderColor: '#fff',
                        borderWidth: 2
                    }
                }
            }
        ],
        dataZoom: [
            {
                type: 'inside',
                xAxisIndex: 0,
                filterMode: 'empty'
            },
            {
                type: 'inside',
                yAxisIndex: 0,
                filterMode: 'empty'
            }
        ]
    };

    // 渲染气泡图
    bubble.setOption(bubbleOption);

    // 配置雷达图
    const radarOption = {
        title: {
            text: '',
            left: 'center',
            textStyle: {
                color: '#fff'
            }
        },
        tooltip: {
            trigger: 'item',
            formatter: function(params) {
                const data = params.value;
                return `${params.name}<br/>
                        播放量: ${(data[0]/100000000).toFixed(2)}亿<br/>
                        点赞率: ${data[1].toFixed(2)}%<br/>
                        投币率: ${data[2].toFixed(2)}%<br/>
                        收藏率: ${data[3].toFixed(2)}%<br/>
                        分享率: ${data[4].toFixed(2)}%`;
            }
        },
        legend: {
            type: 'scroll',  // 可滚动的图例
            orient: 'vertical', // 垂直布局
            right: '5%',     // 靠右显示
            top: 'middle',   // 垂直居中
            textStyle: {
                color: '#fff'
            },
            selector: [      // 添加图例筛选
                {
                    type: 'all',
                    title: '全选'
                },
                {
                    type: 'inverse',
                    title: '反选'
                }
            ]
        },
        radar: {
            indicator: [
                { name: '播放量', max: radarData.maxValues.play },
                { name: '点赞率', max: radarData.maxValues.likeRate, axisLabel: {formatter: '{value}%'} },
                { name: '投币率', max: radarData.maxValues.coinRate, axisLabel: {formatter: '{value}%'} },
                { name: '收藏率', max: radarData.maxValues.favRate, axisLabel: {formatter: '{value}%'} },
                { name: '分享率', max: radarData.maxValues.shareRate, axisLabel: {formatter: '{value}%'} }
            ],
            shape: 'circle',
            splitNumber: 5,
            axisName: {
                color: '#fff',
                formatter: function(value, indicator) {
                    return `${value}\n(${indicator.max.toFixed(0)}${value.includes('率')?'%':''})`;
                }
            },
            splitLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.1)'
                }
            },
            splitArea: {
                show: false
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(255, 255, 255, 0.1)'
                }
            }
        },
        series: [{
            type: 'radar',
            data: radarData.data,
            symbol: 'none',
            lineStyle: {
                width: 1,
                opacity: 0.6
            },
            areaStyle: {
                opacity: 0.2
            },
            emphasis: {
                areaStyle: {
                    opacity: 0.4
                },
                lineStyle: {
                    width: 2
                }
            }
        }]
    };

    // 渲染雷达图
    radar.setOption(radarOption);

});

// 窗口大小改变时重新调整图表大小
window.addEventListener('resize', function() {
    var charts = document.querySelectorAll('.chart');
    charts.forEach(function(chartDom) {
        var chart = echarts.getInstanceByDom(chartDom);
        if (chart) {
            chart.resize();
        }
    });
});

