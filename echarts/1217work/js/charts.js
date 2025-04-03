// 初始化所有图表
$.getJSON('heart.json', function(data) {
    // 处理数据
    const processedData = data.map(item => ({
        age: parseInt(item.Age),
        gender: item.Sex === 'M' ? 1 : 0,  // 将 'M'/'F' 转换为 1/0
        maxHR: parseInt(item.MaxHR),
        chestPainType: item.ChestPainType,
        cholesterol: parseInt(item.Cholesterol),
        restingBP: parseInt(item.RestingBP)
    }));

    // 初始化所有图表
    initScatterChart(processedData);
    initHeatmapChart(processedData);
    initRadarChart(processedData);
    initSankeyChart(processedData);

    // 连接所有图表实现联动
    const charts = [];
    $('.chart').each(function() {
        const chart = echarts.getInstanceByDom(this);
        if (chart) {
            charts.push(chart);
        }
    });
    // echarts.connect(charts);
}).fail(function(jqXHR, textStatus, errorThrown) {
    console.error('加载数据失败:', textStatus);
    console.error('错误详情:', errorThrown);
});

// 窗口大小改变时重新调整图表大小
$(window).resize(function() {
    $('.chart').each(function() {
        const chart = echarts.getInstanceByDom(this);
        if (chart) {
            chart.resize();
        }
    });
});

// 散点图初始化函数
function initScatterChart(data) {
    const scatterChart = echarts.init(document.getElementById('scatterChart'));
    
    const option = {
        backgroundColor: 'transparent',
        tooltip: {
            trigger: 'item',
            backgroundColor: 'rgba(255,255,255,0.8)',
            borderColor: '#4a90e2',
            borderWidth: 1,
            textStyle: {
                color: '#333'
            },
            formatter: function(params) {
                return `年龄: ${params.data[0]} 岁<br/>
                        最大心率: ${params.data[1]} bpm<br/>
                        性别: ${params.data[2] === 1 ? '男' : '女'}`;
            }
        },
        legend: {
            data: ['男性', '女性'],
            textStyle: {
                color: '#fff'
            },
            top: 15
        },
        grid: {
            left: '10%',
            right: '10%',
            top: '15%',
            bottom: '12%'
        },
        xAxis: {
            type: 'value',
            name: '年龄',
            nameTextStyle: {
                color: '#fff',
                padding: [0, 0, 0, 20]
            },
            min: 25,
            max: 85,
            splitLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.1)'
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.3)'
                }
            },
            axisLabel: {
                color: 'rgba(255,255,255,0.7)'
            }
        },
        yAxis: {
            type: 'value',
            name: '最大心率 (bpm)',
            nameTextStyle: {
                color: '#fff',
                padding: [0, 0, 20, 0]
            },
            min: 60,
            max: 200,
            splitLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.1)'
                }
            },
            axisLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.3)'
                }
            },
            axisLabel: {
                color: 'rgba(255,255,255,0.7)'
            }
        },
        dataZoom: [
            {
                type: 'inside',
                xAxisIndex: 0,
                filterMode: 'empty'
            },
            {
                type: 'slider',
                xAxisIndex: 0,
                height: 20,
                bottom: '2%',
                borderColor: 'transparent',
                backgroundColor: 'rgba(255,255,255,0.1)',
                fillerColor: 'rgba(74,144,226,0.3)',
                handleStyle: {
                    color: '#4a90e2'
                },
                textStyle: {
                    color: '#fff'
                }
            }
        ],
        series: [
            {
                name: '男性',
                type: 'scatter',
                data: data.filter(item => item.gender === 1)
                    .map(item => [item.age, item.maxHR, item.gender]),
                symbolSize: 10,
                itemStyle: {
                    color: '#4a90e2',
                    opacity: 0.8
                },
                emphasis: {
                    itemStyle: {
                        opacity: 1,
                        shadowBlur: 10,
                        shadowColor: '#4a90e2'
                    }
                }
            },
            {
                name: '女性',
                type: 'scatter',
                data: data.filter(item => item.gender === 0)
                    .map(item => [item.age, item.maxHR, item.gender]),
                symbolSize: 10,
                itemStyle: {
                    color: '#ff69b4',
                    opacity: 0.8
                },
                emphasis: {
                    itemStyle: {
                        opacity: 1,
                        shadowBlur: 10,
                        shadowColor: '#ff69b4'
                    }
                }
            }
        ]
    };

    scatterChart.setOption(option);

    // 窗口大小改变时，图表自适应
    window.addEventListener('resize', () => {
        scatterChart.resize();
    });

    // 点击事件处理
    scatterChart.on('click', function(params) {
        const age = params.data[0];
        // 筛选出年龄段 ±5岁的数据
        const filteredData = data.filter(item => 
            Math.abs(item.age - age) <= 5
        );
        
        // 更新图表，只显示筛选后的数据
        const newOption = {
            series: [
                {
                    name: '男性',
                    data: filteredData.filter(item => item.gender === 1)
                        .map(item => [item.age, item.maxHR, item.gender])
                },
                {
                    name: '女性',
                    data: filteredData.filter(item => item.gender === 0)
                        .map(item => [item.age, item.maxHR, item.gender])
                }
            ]
        };
        scatterChart.setOption(newOption);
    });

    // 双击恢复所有数据
    scatterChart.on('dblclick', function() {
        const newOption = {
            series: [
                {
                    name: '男性',
                    data: data.filter(item => item.gender === 1)
                        .map(item => [item.age, item.maxHR, item.gender])
                },
                {
                    name: '女性',
                    data: data.filter(item => item.gender === 0)
                        .map(item => [item.age, item.maxHR, item.gender])
                }
            ]
        };
        scatterChart.setOption(newOption);
    });
}

// 添加热力图初始化函数
function initHeatmapChart(data) {
    const heatmapChart = echarts.init(document.getElementById('heatmapChart'));
    
    // 定义胸痛类型和血压范围
    const chestPainTypes = ['ATA', 'NAP', 'ASY', 'TA'];
    const bpRanges = [
        '90-110', '111-130', '131-150', 
        '151-170', '171-190', '191+'
    ];

    // 计算每个组合的数量和风险程度
    function calculateRiskMatrix() {
        const matrix = [];
        const details = {};  // 存储详细信息

        // 首先验证数据的有效性
        const validData = data.filter(item => 
            item && 
            typeof item.restingBP === 'number' && 
            !isNaN(item.restingBP) &&
            item.chestPainType
        );

        bpRanges.forEach((bpRange, i) => {
            chestPainTypes.forEach((type, j) => {
                // 解析血压范围
                let [min, max] = bpRange.split('-').map(v => parseInt(v));
                // 处理特殊情况 '191+'
                if (isNaN(max)) {
                    max = Infinity;
                }

                // 筛选符合条件的数据
                const filtered = validData.filter(item => 
                    item.chestPainType === type &&
                    item.restingBP >= min &&
                    item.restingBP <= max
                );

                // 计算风险值（这里用数量作为风险指标）
                const count = filtered.length;
                
                // 计算平均值，避免除以零的情况
                const avgHR = count > 0 
                    ? Math.round(filtered.reduce((sum, item) => sum + item.maxHR, 0) / count)
                    : 0;
                const avgAge = count > 0
                    ? Math.round(filtered.reduce((sum, item) => sum + item.age, 0) / count)
                    : 0;

                // 存储详细信息
                details[`${i}-${j}`] = {
                    type: type,
                    bpRange: bpRange,
                    count: count,
                    avgHR: avgHR,
                    avgAge: avgAge
                };

                matrix.push([j, i, count]); // 注意：这里交换了i和j的位置，使热力图方向更直观
            });
        });

        return { matrix, details };
    }

    const { matrix, details } = calculateRiskMatrix();

    const option = {
        backgroundColor: 'transparent',
        tooltip: {
            position: 'top',
            formatter: function (params) {
                const detail = details[`${params.data[1]}-${params.data[0]}`];
                return `胸痛类型: ${detail.type}<br/>
                        血压范围: ${detail.bpRange} mmHg<br/>
                        患者数量: ${detail.count}<br/>
                        平均心率: ${detail.avgHR} bpm<br/>
                        平均年龄: ${detail.avgAge} 岁`;
            }
        },
        grid: {
            left: '15%',
            right: '10%',
            top: '10%',
            bottom: '15%'
        },
        xAxis: {
            type: 'category',
            data: chestPainTypes,
            splitArea: {
                show: true
            },
            axisLabel: {
                color: '#fff'
            },
            name: '胸痛类型',
            nameLocation: 'middle',
            nameGap: 30,
            nameTextStyle: {
                color: '#fff',
                fontSize: 14
            }
        },
        yAxis: {
            type: 'category',
            data: bpRanges,
            splitArea: {
                show: true
            },
            axisLabel: {
                color: '#fff'
            },
            name: '血压范围 (mmHg)',
            nameLocation: 'middle',
            nameGap: 50,
            nameTextStyle: {
                color: '#fff',
                fontSize: 14
            }
        },
        visualMap: {
            min: 0,
            max: Math.max(...matrix.map(item => item[2])),
            calculable: true,
            orient: 'horizontal',
            left: 'center',
            bottom: '0%',
            textStyle: {
                color: '#fff'
            },
            inRange: {
                color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', 
                       '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
            }
        },
        series: [{
            name: '风险分布',
            type: 'heatmap',
            data: matrix,
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

    heatmapChart.setOption(option);

    // 窗口大小改变时，图表自适应
    window.addEventListener('resize', () => {
        heatmapChart.resize();
    });

    // 点击事件处理
    heatmapChart.on('click', function(params) {
        const detail = details[`${params.data[1]}-${params.data[0]}`];
        // 可以在这里添加更详细的信息展示，比如弹窗等
        console.log('详细信息:', detail);
    });
}

// 添加雷达图初始化函数
function initRadarChart(data) {
    const radarChart = echarts.init(document.getElementById('radarChart'));
    
    // 定义指标维度和计算方法
    const dimensions = [
        { name: '年龄风险', max: 100 },
        { name: '血压风险', max: 100 },
        { name: '心率风险', max: 100 },
        { name: '胆固醇风险', max: 100 }
    ];

    // 计算风险分数
    function calculateRiskScores(patient) {
        // 年龄风险（30-80岁为基准）
        const ageRisk = Math.min(100, Math.max(0, 
            ((patient.age - 30) / (80 - 30)) * 100
        ));

        // 血压风险（90-200为基准）
        const bpRisk = Math.min(100, Math.max(0,
            ((patient.restingBP - 90) / (200 - 90)) * 100
        ));

        // 心率风险（60-200为基准）
        const hrRisk = Math.min(100, Math.max(0,
            (Math.abs(patient.maxHR - 130) / 70) * 100
        ));

        // 胆固醇风险（150-500为基准）
        const cholRisk = Math.min(100, Math.max(0,
            ((patient.cholesterol - 150) / (500 - 150)) * 100
        ));

        return [
            Math.round(ageRisk),
            Math.round(bpRisk),
            Math.round(hrRisk),
            Math.round(cholRisk)
        ];
    }

    // 选择初始显示的患者（示例：选择三个不同风险水平的患者）
    const selectedPatients = [
        data[0],  // 第一个患者
        data[Math.floor(data.length / 2)],  // 中间的患者
        data[data.length - 1]  // 最后一个患者
    ];

    const option = {
        backgroundColor: 'transparent',
        legend: {
            data: ['患者A', '患者B', '患者C'],
            textStyle: {
                color: '#fff'
            },
            top: 15
        },
        tooltip: {
            trigger: 'item',
            backgroundColor: 'rgba(255,255,255,0.8)',
            borderColor: '#4a90e2',
            textStyle: {
                color: '#333'
            },
            formatter: function(params) {
                const indicators = dimensions.map(d => d.name);
                return params.name + '<br/>' + 
                    params.value.map((val, index) => 
                        `${indicators[index]}: ${val}%`
                    ).join('<br/>');
            }
        },
        radar: {
            indicator: dimensions,
            shape: 'circle',
            splitNumber: 5,
            axisName: {
                color: '#fff'
            },
            splitLine: {
                lineStyle: {
                    color: 'rgba(255,255,255,0.2)'
                }
            },
            splitArea: {
                show: true,
                areaStyle: {
                    color: ['rgba(255,255,255,0.02)', 'rgba(255,255,255,0.05)']
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
            data: selectedPatients.map((patient, index) => ({
                name: `患者${String.fromCharCode(65 + index)}`,
                value: calculateRiskScores(patient),
                itemStyle: {
                    color: index === 0 ? '#4a90e2' : 
                           index === 1 ? '#ff69b4' : '#ffd700'
                },
                areaStyle: {
                    opacity: 0.3
                },
                lineStyle: {
                    width: 2
                }
            }))
        }]
    };

    radarChart.setOption(option);

    // 窗口大小改变时，图表自适应
    window.addEventListener('resize', () => {
        radarChart.resize();
    });

    // 添加患者选择功能
    let currentPatientIndex = 3; // 从第4个患者开始
    
    radarChart.on('click', function() {
        // 循环选择下一个患者
        currentPatientIndex = (currentPatientIndex + 1) % data.length;
        const newPatient = data[currentPatientIndex];
        
        // 更新图表数据
        const newOption = {
            series: [{
                data: [
                    ...option.series[0].data.slice(0, -1), // 保留前两个患者
                    {
                        name: '新患者',
                        value: calculateRiskScores(newPatient),
                        itemStyle: {
                            color: '#ffd700'
                        },
                        areaStyle: {
                            opacity: 0.3
                        },
                        lineStyle: {
                            width: 2
                        }
                    }
                ]
            }]
        };
        
        radarChart.setOption(newOption);
    });
}

// 添加桑基图初始化函数
function initSankeyChart(data) {
    const sankeyChart = echarts.init(document.getElementById('sankeyChart'));
    
    // 定义节点类别
    const categories = {
        symptoms: ['胸痛', '高血压', '高心率', '高胆固醇'],
        severity: ['轻度', '中度', '重度'],
        risk: ['低风险', '中风险', '高风险']
    };

    // 计算患者症状严重程度
    function calculateSeverity(patient) {
        const severities = {
            chestPain: patient.chestPainType === 'ASY' ? 2 : 
                       patient.chestPainType === 'ATA' ? 1 : 0,
            bp: patient.restingBP > 160 ? 2 :
                patient.restingBP > 140 ? 1 : 0,
            hr: patient.maxHR > 160 ? 2 :
                patient.maxHR > 140 ? 1 : 0,
            chol: patient.cholesterol > 300 ? 2 :
                  patient.cholesterol > 200 ? 1 : 0
        };
        return severities;
    }

    // 生成节点和链接数据
    function generateSankeyData() {
        const nodes = [];
        const links = [];
        
        // 添加所有节点
        categories.symptoms.forEach(s => nodes.push({ name: s }));
        categories.severity.forEach(s => nodes.push({ name: s }));
        categories.risk.forEach(r => nodes.push({ name: r }));

        // 计算链接值
        const linkValues = {};
        
        data.forEach(patient => {
            const severities = calculateSeverity(patient);
            
            // 症状到严重程度的链接
            Object.entries(severities).forEach(([symptom, severity]) => {
                const symptomName = {
                    chestPain: '胸痛',
                    bp: '高血压',
                    hr: '高心率',
                    chol: '高胆固醇'
                }[symptom];
                
                const severityName = categories.severity[severity];
                const key = `${symptomName}-${severityName}`;
                linkValues[key] = (linkValues[key] || 0) + 1;
            });

            // 计算总体风险等级
            const riskScore = Object.values(severities).reduce((a, b) => a + b, 0);
            const riskLevel = riskScore >= 6 ? '高风险' :
                            riskScore >= 3 ? '中风险' : '低风险';

            // 严重程度到风险的链接
            categories.severity.forEach(severity => {
                const key = `${severity}-${riskLevel}`;
                if (Object.values(severities).includes(categories.severity.indexOf(severity))) {
                    linkValues[key] = (linkValues[key] || 0) + 1;
                }
            });
        });
        // 生成链接数据
        Object.entries(linkValues).forEach(([key, value]) => {
            const [source, target] = key.split('-');
            links.push({
                source: source,
                target: target,
                value: value
            });
        });

        return { nodes, links };
    }

    const { nodes, links } = generateSankeyData();

    const option = {
        backgroundColor: 'transparent',
        tooltip: {
            trigger: 'item',
            triggerOn: 'mousemove',
            backgroundColor: 'rgba(255,255,255,0.8)',
            borderColor: '#4a90e2',
            textStyle: {
                color: '#333'
            }
        },
        series: [{
            type: 'sankey',
            data: nodes,
            links: links,
            emphasis: {
                focus: 'adjacency'
            },
            levels: [{
                depth: 0,
                itemStyle: {
                    color: '#4a90e2'
                },
                lineStyle: {
                    color: 'gradient',
                    opacity: 0.6
                }
            }, {
                depth: 1,
                itemStyle: {
                    color: '#ff69b4'
                },
                lineStyle: {
                    color: 'gradient',
                    opacity: 0.6
                }
            }, {
                depth: 2,
                itemStyle: {
                    color: '#ffd700'
                },
                lineStyle: {
                    color: 'gradient',
                    opacity: 0.6
                }
            }],
            label: {
                color: '#fff',
                fontSize: 12,
                fontWeight: 'bold'
            },
            lineStyle: {
                curveness: 0.5
            }
        }]
    };

    sankeyChart.setOption(option);

    // 窗口大小改变时，图表自适应
    window.addEventListener('resize', () => {
        sankeyChart.resize();
    });

    // 添加交互：突出显示特定路径
    sankeyChart.on('mouseover', function(params) {
        if (params.dataType === 'node') {
            const newOption = {
                series: [{
                    data: nodes.map(node => ({
                        ...node,
                        itemStyle: {
                            opacity: node.name === params.name ? 1 : 0.3
                        }
                    })),
                    links: links.map(link => ({
                        ...link,
                        lineStyle: {
                            opacity: link.source === params.name || link.target === params.name ? 0.8 : 0.1
                        }
                    }))
                }]
            };
            sankeyChart.setOption(newOption);
        }
    });

    // 恢复正常显示
    sankeyChart.on('mouseout', function() {
        sankeyChart.setOption(option);
    });
}

