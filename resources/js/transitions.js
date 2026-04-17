function buildChartSVG() {
    const chart = document.getElementById('chart');
    const svg = document.getElementById('chart-svg');
    if (!chart || !svg) return;

    svg.innerHTML = '';

    const columns = chart.querySelectorAll('[data-height]');
    const OFFSET = 32; 
    const DOT_R = 7;
    const chartRect = chart.getBoundingClientRect();
    const points = [];

    columns.forEach(col => {
        const rect = col.getBoundingClientRect();
        
        if (rect.width > 0 && rect.height > 0) {
            const pct = parseInt(col.dataset.height) / 100;
            const colHeight = rect.height * pct;
            const cx = rect.left - chartRect.left + rect.width / 2;
            const cy = rect.height - colHeight - OFFSET;

            points.push({ cx, cy });
        }
    });

    if (points.length < 2) return;

    let d = `M ${points[0].cx} ${points[0].cy}`;
    for (let i = 1; i < points.length; i++) {
        const prev = points[i - 1];
        const curr = points[i];
        const cpX = (prev.cx + curr.cx) / 2;
        d += ` C ${cpX} ${prev.cy}, ${cpX} ${curr.cy}, ${curr.cx} ${curr.cy}`;
    }

    const tempPath = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    tempPath.setAttribute('d', d);
    svg.appendChild(tempPath);
    const pathLen = tempPath.getTotalLength();
    svg.removeChild(tempPath);

    svg.innerHTML = `
        <defs>
            <filter id="glow">
                <feGaussianBlur stdDeviation="3" result="blur"/>
                <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
            </filter>
        </defs>
        <path
            d="${d}"
            fill="none"
            stroke="#111827"
            stroke-width="2.5"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-dasharray="${pathLen}"
            stroke-dashoffset="${pathLen}"
            style="animation: drawLine 1.4s cubic-bezier(0.4,0,0.2,1) 0.5s forwards;"
        />
        ${points.map((p, i) => `
            <circle
                cx="${p.cx}" cy="${p.cy}" r="${DOT_R}"
                fill="#f97316"
                filter="url(#glow)"
                style="opacity:0; transform-origin:${p.cx}px ${p.cy}px; 
                animation: popIn 0.5s cubic-bezier(0.34,1.56,0.64,1) ${0.8 + i * 0.12}s forwards;"
            />
        `).join('')}
    `;
}

window.addEventListener('load', () => setTimeout(buildChartSVG, 100));
window.addEventListener('resize', buildChartSVG);

