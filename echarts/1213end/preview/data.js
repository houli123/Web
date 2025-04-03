// 生成模拟数据
function generateData() {
    const years = ['2021', '2022', '2023'];
    const products = ['电子产品', '服装', '食品', '家具', '图书'];
    const regions = ['华东', '华南', '华北', '西南', '东北', '西北'];
    
    let data = [];
    
    // 生成1000+条数据
    for (let i = 0; i < 1200; i++) {
        const year = years[Math.floor(Math.random() * years.length)];
        const month = String(Math.floor(Math.random() * 12) + 1).padStart(2, '0');
        const product = products[Math.floor(Math.random() * products.length)];
        const region = regions[Math.floor(Math.random() * regions.length)];
        const sales = Math.floor(Math.random() * 10000) + 1000;
        
        data.push({
            date: `${year}-${month}`,
            year: year,
            product: product,
            region: region,
            sales: sales
        });
    }
    
    return data;
}

const salesData = generateData(); 