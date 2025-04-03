// 在文件开头添加调试代码
console.log('Charts.js loaded');

// 初始化所有图表
let lineChart, pieChart, barChart, radarChart, trendChart;

// 确保在 DOM 加载完成后再初始化图表
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing charts...');
    initCharts();  // 先初始化
    updateData();  // 再更新数据
});

function initCharts() {
    console.log('Initializing charts...');
    
    const lineChartDom = document.getElementById('lineChart');
    const pieChartDom = document.getElementById('pieChart');
    const barChartDom = document.getElementById('barChart');
    const radarChartDom = document.getElementById('radarChart');
    const trendChartDom = document.getElementById('trendChart');
    
    if (!lineChartDom || !pieChartDom || !barChartDom || !radarChartDom || !trendChartDom) {
        console.error('Some chart containers are missing!');
        return;
    }

    try {
        // 使用深色主题初始化
        lineChart = echarts.init(lineChartDom, null, {
            renderer: 'canvas',
            backgroundColor: '#2A2A2A'
        });
        pieChart = echarts.init(pieChartDom, null, {
            renderer: 'canvas',
            backgroundColor: '#2A2A2A'
        });
        barChart = echarts.init(barChartDom, null, {
            renderer: 'canvas',
            backgroundColor: '#2A2A2A'
        });
        radarChart = echarts.init(radarChartDom, null, {
            renderer: 'canvas',
            backgroundColor: '#2A2A2A'
        });
        trendChart = echarts.init(trendChartDom, null, {
            renderer: 'canvas',
            backgroundColor: '#2A2A2A'
        });
        
        console.log('Charts initialized successfully');
        
        // 添加窗口调整事件处理
        window.addEventListener('resize', function() {
            lineChart && lineChart.resize();
            pieChart && pieChart.resize();
            barChart && barChart.resize();
            radarChart && radarChart.resize();
            trendChart && trendChart.resize();
        });
        
    } catch (error) {
        console.error('Error initializing charts:', error);
    }
}

// 更新数据的主函数
function updateData() {
    console.log('Updating data...');
    const year = document.getElementById('yearSelect').value;
    console.log('Selected year:', year);

    // 确保所有图表都已初始化
    if (!lineChart || !pieChart || !barChart || !radarChart || !trendChart) {
        console.warn('Charts not initialized, initializing now...');
        initCharts();
    }

    // 确保在图表初始化后再更新数据
    if (lineChart && pieChart && barChart && radarChart && trendChart) {
        try {
            updateLineChart(year);
            updatePieChart(year);
            updateBarChart(year);
            updateRadarChart(year);
            updateTrendChart(year);
            console.log('All charts updated successfully');
        } catch (error) {
            console.error('Error updating charts:', error);
        }
    } else {
        console.error('Failed to initialize charts');
    }
}

// 添加折线图更新函数
function updateLineChart(year) {
    console.log('Updating treemap for year:', year);
    
    // 处理数据为树形图格式
    const treeData = [];
    const productSales = {};
    
    // 计算每个产品的销售总额
    salesData
        .filter(item => item.year === year)
        .forEach(item => {
            if (!productSales[item.product]) {
                productSales[item.product] = 0;
            }
            productSales[item.product] += item.sales;
        });
    
    // 转换为树形图数据格式
    Object.entries(productSales).forEach(([product, value]) => {
        treeData.push({
            name: product,
            value: value,
            children: []
        });
    });

    const option = {
        backgroundColor: '#2A2A2A',
        title: {
            text: '产品销售分布',
            left: 'center',
            top: 10,
            textStyle: {
                color: '#E0E0E0',
                fontSize: 16,
                fontWeight: 'normal'
            }
        },
        tooltip: {
            formatter: function(params) {
                const value = params.value.toLocaleString('zh-CN');
                return `${params.name}<br/>销售额: ¥${value}`;
            }
        },
        series: [{
            type: 'treemap',
            data: treeData,
            width: '95%',
            height: '90%',
            top: '8%',
            roam: false,        // 禁用缩放和平移
            nodeClick: false,   // 禁用点击事件
            drillDownIcon: '',  // 移除下钻图标
            label: {
                show: true,
                formatter: function(params) {
                    return `${params.name}\n¥${(params.value/10000).toFixed(1)}w`;
                },
                color: '#fff',
                fontSize: 14
            },
            breadcrumb: {
                show: false    // 禁用面包屑导航
            },
            itemStyle: {
                borderColor: '#2A2A2A',
                borderWidth: 1,
                gapWidth: 2
            },
            emphasis: {         // 添加鼠标悬停效果
                itemStyle: {
                    borderColor: '#fff',
                    borderWidth: 1,
                    shadowBlur: 10,
                    shadowColor: 'rgba(0,0,0,0.5)'
                }
            },
            levels: [{
                itemStyle: {
                    borderColor: '#2A2A2A',
                    borderWidth: 1,
                    gapWidth: 2
                }
            }],
            visualMap: {
                type: 'continuous',
                min: 0,
                max: Math.max(...Object.values(productSales)),
                inRange: {
                    color: [
                        '#1a3a34',  // 深色
                        '#2d5a4c',
                        '#397055',
                        '#40A070',  // 主题色
                        '#6eb893'   // 亮色
                    ]
                }
            }
        }]
    };
    
    if (lineChart) {
        lineChart.setOption(option);
    }
}

// 添加饼图更新函数
function updatePieChart(year) {
    console.log('Updating pie chart for year:', year);
    
    // 按产品类别汇总销售数据
    const productSales = {};
    salesData.forEach(item => {
        if (item.year === year) {
            productSales[item.product] = (productSales[item.product] || 0) + item.sales;
        }
    });

    const pieData = Object.entries(productSales).map(([name, value]) => ({
        name,
        value
    }));

    const option = {
        title: {
            text: '产品类别分布',
            textStyle: { color: '#fff' }
        },
        tooltip: {
            trigger: 'item',
            formatter: '{a} <br/>{b}: {c} ({d}%)'
        },
        legend: {
            orient: 'vertical',
            right: 10,
            top: 'center',
            textStyle: { color: '#fff' }
        },
        series: [{
            name: '销售额',
            type: 'pie',
            radius: ['40%', '70%'],
            avoidLabelOverlap: false,
            itemStyle: {
                borderRadius: 10,
                borderColor: '#fff',
                borderWidth: 2
            },
            label: {
                show: false
            },
            emphasis: {
                label: {
                    show: true,
                    fontSize: '20',
                    fontWeight: 'bold'
                }
            },
            labelLine: {
                show: false
            },
            data: pieData
        }]
    };
    
    if (pieChart) {
        console.log('Setting pie chart option');
        pieChart.setOption(option);
    } else {
        console.error('Pie chart not initialized');
    }
}

// 更新柱状图函数
function updateBarChart(year) {
    console.log('Updating funnel chart for year:', year);
    
    // 按地区汇总销售数据
    const regionSales = {};
    salesData.forEach(item => {
        if (item.year === year) {
            regionSales[item.region] = (regionSales[item.region] || 0) + item.sales;
        }
    });

    // 转换为漏斗图数据格式并排序
    const funnelData = Object.entries(regionSales)
        .map(([name, value]) => ({ name, value }))
        .sort((a, b) => b.value - a.value);

    const option = {
        title: {
            text: '区域销售漏斗',
            textStyle: { color: '#fff' }
        },
        tooltip: {
            trigger: 'item',
            formatter: '{b}: {c}'
        },
        legend: {
            data: funnelData.map(item => item.name),
            textStyle: { color: '#fff' }
        },
        series: [{
            name: '销售漏斗',
            type: 'funnel',
            left: '10%',
            right: '10%',
            top: '15%',
            bottom: '10%',
            width: '80%',
            min: 0,
            max: Math.max(...funnelData.map(item => item.value)),
            minSize: '0%',
            maxSize: '100%',
            sort: 'descending',
            gap: 2,
            label: {
                show: true,
                position: 'inside',
                formatter: '{b}: {c}'
            },
            labelLine: {
                length: 10,
                lineStyle: {
                    width: 1,
                    type: 'solid'
                }
            },
            itemStyle: {
                borderColor: '#fff',
                borderWidth: 1
            },
            emphasis: {
                label: {
                    fontSize: 20
                }
            },
            data: funnelData
        }]
    };
    
    if (barChart) {
        barChart.setOption(option);
    }
}

// 添加新的图表更新函数
function updateRadarChart(year) {
    const option = {
        title: {
            text: '销售指标分析',
            textStyle: { color: '#fff' }
        },
        radar: {
            indicator: [
                { name: '销售额', max: 100 },
                { name: '客户满意度', max: 100 },
                { name: '市场份额', max: 100 },
                { name: '增长率', max: 100 },
                { name: '利润率', max: 100 }
            ],
            splitArea: {
                areaStyle: {
                    color: ['rgba(255,255,255,0.05)']
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.2)'
                }
            }
        },
        series: [{
            type: 'radar',
            data: [
                {
                    value: [80, 85, 70, 75, 65],
                    name: '实际表现',
                    areaStyle: {
                        opacity: 0.3
                    }
                }
            ]
        }]
    };
    radarChart.setOption(option);
}

function updateTrendChart(year) {
    const option = {
        title: {
            text: '季度业绩趋势',
            textStyle: { color: '#fff' }
        },
        tooltip: {
            trigger: 'axis'
        },
        xAxis: {
            type: 'category',
            data: ['Q1', 'Q2', 'Q3', 'Q4'],
            axisLabel: { color: '#fff' }
        },
        yAxis: {
            type: 'value',
            axisLabel: { color: '#fff' }
        },
        series: [{
            data: [320, 420, 380, 450],
            type: 'line',
            smooth: true,
            markPoint: {
                data: [
                    {type: 'max', name: '最大值'},
                    {type: 'min', name: '最小值'}
                ]
            }
        }]
    };
    trendChart.setOption(option);
}