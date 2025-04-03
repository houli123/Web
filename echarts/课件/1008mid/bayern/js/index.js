var second = echarts.init(document.getElementById('second'));
var three = echarts.init(document.getElementById('three'));
var four = echarts.init(document.getElementById('four'));
var five = echarts.init(document.getElementById('five'));
var big_data = [{// 淘汰赛的具体对阵信息
    name: '欧冠 2020',
    children: [{
        name: '拜仁慕尼黑（冠军）',
        children: [
            {
                name: '拜仁慕尼黑',
                children: [
                    {
                        name: '拜仁慕尼黑',
                        children: [
                            {
                                name: '拜仁慕尼黑',
                                children: [
                                    { name: '拜仁慕尼黑' },
                                    { name: '切尔西' },

                                ]
                            },
                            {
                                name: '巴塞罗那',
                                children: [
                                    { name: '巴塞罗那' },
                                    { name: '那不勒斯' },

                                ]
                            },

                        ]
                    },
                    {
                        name: '里昂',
                        children: [
                            {
                                name: '里昂',
                                children: [
                                    { name: '里昂' },
                                    { name: '尤文图斯' },

                                ]
                            },
                            {
                                name: '曼城', children: [
                                    { name: '曼城' },
                                    { name: '皇家马德里' },

                                ]
                            },

                        ]
                    },

                ]
            },
            {
                name: '巴黎圣日耳曼',
                children: [
                    {
                        name: '巴黎圣日耳曼',
                        children: [
                            {
                                name: '巴黎圣日耳曼',
                                children: [
                                    { name: '巴黎圣日耳曼' },
                                    { name: '多特蒙德' },

                                ]
                            },
                            {
                                name: '亚特兰大',
                                children: [
                                    { name: '亚特兰大' },
                                    { name: '瓦伦西亚' },

                                ]
                            },

                        ]
                    },
                    {
                        name: '莱比锡红牛',
                        children: [
                            {
                                name: '莱比锡红牛',
                                children: [
                                    { name: '莱比锡红牛' },
                                    { name: '托特纳姆热刺' },

                                ]
                            },
                            {
                                name: '马德里竞技',
                                children: [
                                    { name: '马德里竞技' },
                                    { name: '利物浦' },

                                ]
                            },

                        ]
                    },

                ]
            }
        ]
    },]
}]
var big_data2 = [{
    name: '欧冠 2020',
    children: [
        {
            name: '十六强名单',
            children: [
                { name: '拜仁慕尼黑' },
                { name: '巴黎圣日耳曼' },
                { name: '曼城' },
                { name: '皇家马德里' },
                { name: '尤文图斯' },
                { name: '利物浦' },
                { name: '巴塞罗那' },
                { name: '莱比锡红牛' },
                { name: '托特纳姆热刺' },
                { name: '亚特兰大' },
                { name: '那不勒斯' },
                { name: '马德里竞技' },
                { name: '多特蒙德' },
                { name: '里昂' },
                { name: '切尔西' },

            ]
        }, {
            name: '小组赛名单',
            children: [{
                name: 'A组',
                children: [
                    { name: '巴黎圣日耳曼' },
                    { name: '皇家马德里' },
                    { name: '布鲁日' },
                    { name: '加拉塔萨雷' }
                ]
            }, {
                name: 'B组',
                children: [
                    { name: '拜仁慕尼黑' },
                    { name: '热刺' },
                    { name: '奥林匹亚科斯' },
                    { name: '贝尔格莱德红星' }
                ]
            }, {
                name: 'C组',
                children: [
                    { name: '曼城' },
                    { name: '亚特兰大' },
                    { name: '顿涅茨克矿工' },
                    { name: '萨格勒布迪纳摩' }
                ]
            }, {
                name: 'D组',
                children: [
                    { name: '尤文图斯' },
                    { name: '马德里竞技' },
                    { name: '勒沃库森' },
                    { name: '莫斯科火车头' }
                ]
            },
            {
                name: 'E组',
                children: [
                    { name: '利物浦' },
                    { name: '那不勒斯' },
                    { name: '萨尔茨堡' },
                    { name: '亨克' }
                ]
            },
            {
                name: 'F组',
                children: [
                    { name: '巴萨' },
                    { name: '多特蒙德' },
                    { name: '国际米兰' },
                    { name: '布拉格斯拉维亚' }
                ]
            },]
        }]
}]

var option1 = {
    title: {
        text: '2020年欧冠淘汰赛赛程',
        left: 'center'
    },
    tooltip: {},// 提示框组件
    series: [{
        edgeShape: 'polyline', // 边的形状，使用折线
        edgeForkPosition: '63%', // 边的分支位置
        type: 'tree', // 树状图
        data: big_data, 
        top: '12%', 
        left: '7%',
        bottom: '5%', 
        right: '20%',
        symbolSize: 7, 
        initialTreeDepth: 5, // 初始展开层级
        lineStyle: {
            width: 2, 
            color: '#ccc'
        },
        label: {
            textStyle:{
                fontSize:'16px',
                fontWeight:'700'
            },
            position: 'right'
        }
    }]

};
var option1_1 = {
    title: {
        text: '2020年欧冠小组赛赛程',
        left: 'center'
    },
    tooltip: {},
    series: [{
        edgeShape: 'polyline',// 边的形状，使用折线
        edgeForkPosition: '60%',// 边的分支位置
        type: 'tree',
        data: big_data2,
        top: '12%',
        left: '7%',
        bottom: '5%',
        right: '20%',
        symbolSize: 7,
        initialTreeDepth: 3, // 初始展开层级
        lineStyle: {
            width: 2,
            color: '#ccc'
        },
        label: {
            position: 'right'
        }
    }]

};
var tree_dom=document.getElementById('first')
var first = echarts.init(tree_dom);
first.setOption(option1,true);// 设置初始选项为淘汰赛赛程
var toggle = true;
const btn_dom=document.getElementById('btn')
btn_dom.addEventListener('click', function () {
    echarts.dispose(tree_dom);// 销毁当前图表
    var first = echarts.init(tree_dom);
    toggle = !toggle;
    if (toggle) {
       btn_dom.textContent ='切换小组赛'
        first.setOption(option1, true);// 设置为淘汰赛赛程
    } else {
       btn_dom.textContent='切换淘汰赛'
        first.setOption(option1_1, true);// 设置为小组赛赛程
    }
});


var option2 = {
    title: {
        text: '2020年欧冠各队进球数',
        left: 'center'
    },
    tooltip: {},
    xAxis: {
        type: 'category',// 类目轴
        data: ['拜仁慕尼黑', '巴黎圣日耳曼', '莱比锡红牛', '奥林匹克里昂', '巴塞罗那',
            '曼城', '尤文图斯', '切尔西', '马德里竞技', '国际米兰',
            '皇家马德里', '那不勒斯', '多特蒙德', '热刺', '利物浦'],
        name: '球队',
        axisLabel: { interval: 0, rotate: 30 },
        // boundaryGap: false,
        axisTick: {
            alignWithLabel: true  // 使短竖线与标签对齐
        },

    },
    yAxis: {
        type: 'value',
        name: '进球数'
    },
    series: [{
        name: '进球数',
        type: 'bar',
        data: [43, 26, 21, 25, 25,
            28, 22, 24, 10, 16,
            17, 14, 14, 18, 14],
        itemStyle: {
            color: function (params) {
                // 根据球队名称返回对应的颜色
                var colors = {
                    '拜仁慕尼黑': '#A50034',
                    '巴黎圣日耳曼': '#0056A0',
                    '莱比锡红牛': '#C8102E',
                    '奥林匹克里昂': '#A50034',
                    '巴塞罗那': '#A500A1',
                    '曼城': '#6CABDD',
                    '尤文图斯': '#000000',
                    '切尔西': '#003DA5',
                    '马德里竞技': '#A500A1',
                    '国际米兰': '#002D72',
                    '皇家马德里': '#F6E02D',
                    '那不勒斯': '#0095D9',
                    '多特蒙德': '#F6E02D',
                    '热刺': '#A500A1',
                    '利物浦': '#C8102E'
                };
                return colors[params.name] || '#000';
            }
        }
    }],
    graphic: [  //用于在图表中添加自定义的图形元素
        // 为每个球队添加 logo
        {
            type: 'image',
            id: 'image1',
            style: {
                image: '../bayern/img/fc/bayren.png', 
                width: 25,  
                height: 25, 
            },
            left: '76',
            top: '19%', 
            z: 10
        },
        {
            type: 'image',
            id: 'image2',
            style: {
                image: '../bayern/img/fc/pari.png',
                width: 25,
                height: 25,
            },
            left: '113',
            top: '37%',
            z: 10
        },
        {
            type: 'image',
            id: 'image3',
            style: {
                image: '../bayern/img/fc/rb.png',
                width: 25,
                height: 25,
            },
            left: '150',
            top: '43%',
            z: 10
        },
        {
            type: 'image',
            id: 'image4',
            style: {
                image: '../bayern/img/fc/riang.png',
                width: 25,
                height: 25,
            },
            left: '188',
            top: '38%',
            z: 10
        },
        {
            type: 'image',
            id: 'image5',
            style: {
                image: '../bayern/img/fc/fcb.png',
                width: 25,
                height: 25,
            },
            left: '225',
            top: '38%',
            z: 10
        },
        {
            type: 'image',
            id: 'image6',
            style: {
                image: '../bayern/img/fc/mancity.png',
                width: 25,
                height: 25,
            },
            left: '263',
            top: '34%',
            z: 10
        },
        {
            type: 'image',
            id: 'image7',
            style: {
                image: '../bayern/img/fc/juve.png',
                width: 23,
                height: 23,
            },
            left: '300',
            top: '41%',
            z: 10
        },
        {
            type: 'image',
            id: 'image8',
            style: {
                image: '../bayern/img/fc/chelsea.png',
                width: 25,
                height: 25,
            },
            left: '338',
            top: '39%',
            z: 10
        },
        {
            type: 'image',
            id: 'image9',
            style: {
                image: '../bayern/img/fc/majing.png',
                width: 25,
                height: 25,
            },
            left: '375',
            top: '54%',
            z: 10
        },
        {
            type: 'image',
            id: 'image10',
            style: {
                image: '../bayern/img/fc/intel.png',
                width: 25,
                height: 25,
            },
            left: '412',
            top: '48%',
            z: 10
        },
        {
            type: 'image',
            id: 'image11',
            style: {
                image: '../bayern/img/fc/realmadri.png',
                width: 23,
                height: 25,
            },
            left: '451',
            top: '46%',
            z: 10
        },
        {
            type: 'image',
            id: 'image12',
            style: {
                image: '../bayern/img/fc/naplesi.png',
                width: 25,
                height: 25,
            },
            left: '487',
            top: '50%',
            z: 10
        },
        {
            type: 'image',
            id: 'image13',
            style: {
                image: '../bayern/img/fc/bvb.png',
                width: 25,
                height: 25,
            },
            left: '524',
            top: '50%',
            z: 10
        },
        {
            type: 'image',
            id: 'image14',
            style: {
                image: '../bayern/img/fc/totte.png',
                width: 22,
                height: 25,
            },
            left: '563',
            top: '45%',
            z: 10
        },
        {
            type: 'image',
            id: 'image15',
            style: {
                image: '../bayern/img/fc/lwp.png',
                width: 25,
                height: 25,
            },
            left: '599',
            top: '49%',
            z: 10
        },
    ]
};


option3 = {
    title: {
        text: '莱万多夫斯基 2020 欧冠进球数据',
        left: 'center'
    },
    tooltip: {
        trigger: 'axis',// 触发类型，坐标轴触发
        formatter: function (params) {
            return params[0].name + '<br />进球数: ' + params[0].value;   // 自定义提示框内容
        }
    },
    xAxis: {
        type: 'category',
        data: [
            '小组赛第1场', '小组赛第2场', '小组赛第3场', 
            '小组赛第4场', '小组赛第5场', '1/8决赛第1场', 
            '1/8决赛第2场', '1/4决赛', '半决赛'
        ],
        boundaryGap: false, // 类目起始和结束两端空白策略
        axisLabel: { interval: 0, rotate: 30 }
    },
    yAxis: {
        type: 'value',
        name: '进球数',
        min: 0
    },
    series: [
        {
            name: '进球数',
            type: 'line',  
            areaStyle: {},  
            data: [1, 2, 2, 1, 4, 1, 2, 1, 1],  // 进球数据
            smooth: true,  
            itemStyle: {
                color: '#c23531'
            }
        }
    ]
};
option4 = {
    title: {
        text: '拜仁慕尼黑在2020年欧冠各阶段进球数',
        left: 'center'
    },
    tooltip: {
        trigger: 'item',
        formatter: '{a} <br/>{b} : {c} ({d}%)'
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        bottom: 'bottom'
    },
    series: [
        {
            name: '进球数',
            type: 'pie',
            radius: [30, '71%'],
            center: ['50%', '50%'],
            roseType: 'area',  //将饼图转换为南丁格尔玫瑰图
            itemStyle: {
                borderRadius: 8
            },
            data: [
                { value: 24, name: '小组赛' },
                { value: 7, name: '十六强' },
                { value: 8, name: '四强' },
                { value: 1, name: '决赛' }
            ],
            label: {
                formatter: '{b}: {c}'
            },
            emphasis: {
                itemStyle: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};
// option4 = {
//     title: {
//         text: '拜仁慕尼黑在2020年欧冠各阶段进球数',
//         left: 'center'
//     },
//     tooltip: {
//         trigger: 'item'// 触发类型，数据项图形触发
//     },
//     legend: {
//         orient: 'vertical',
//         left: 'left',
//         bottom: 'bottom'
//     },
//     series: [
//         {
//             name: '进球数',
//             type: 'pie',
//             radius: '50%',
//             data: [
//                 { value: 24, name: '小组赛' },
//                 { value: 7, name: '十六强' },
//                 { value: 8, name: '四强' },
//                 { value: 1, name: '决赛' }
//             ],
//             emphasis: {
//                 itemStyle: {
//                     shadowBlur: 10,// 阴影模糊程度
//                     shadowOffsetX: 0,// 阴影水平偏移
//                     shadowColor: 'rgba(0, 0, 0, 0.5)'
//                 }
//             }
//         }
//     ]

// };
var indicators = [
    { name: '进球数', max: 2 },
    { name: '控球率 (%)', max: 100 },
    { name: '射正数', max: 15 },
    { name: '黄牌', max: 5 },
    { name: '角球数', max: 10 }
];

var data = [
    {
        name: '拜仁慕尼黑',
        value: [1, 52, 12, 3, 6],
        itemStyle: { color: '#ff0000' } // 红色
    },
    {
        name: '巴黎圣日耳曼',
        value: [0, 48, 5, 2, 4],
        itemStyle: { color: '#0000ff' } // 蓝色
    }
];
option5 = {
    title: {
        text: '2020年欧冠决赛各项数据',
        left: 'center'
    },
    tooltip: {
        trigger: 'item'
    },
    legend: {
        data: ['拜仁慕尼黑', '巴黎圣日耳曼'],
        bottom: '5%',
        textStyle: {
            color: '#000'
        }
    },
    radar: {
        indicator: indicators,// 指标数据
        shape: 'circle',// 雷达图形状
        radius: '60%', // 缩小雷达图的半径
    },
    series: [{
        name: '比赛数据对比',
        type: 'radar', // 指定类型为雷达图
        data: data,
        areaStyle: {
            opacity: 0.5
        }
    }]


};
second.setOption(option2);
three.setOption(option3);
four.setOption(option4);
five.setOption(option5);
