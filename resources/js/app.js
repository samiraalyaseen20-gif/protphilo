document.addEventListener('DOMContentLoaded', () => {
    initCustomCursor();
    initScrollReveal();
    init3DTilt();
});

/* ==========================================================================
   1. CUSTOM GLOWING CURSOR (Mutmiz Brand Optimized)
   ========================================================================== */
function initCustomCursor() {
    const dot = document.createElement('div');
    const outline = document.createElement('div');
    dot.className = 'custom-cursor-dot';
    outline.className = 'custom-cursor-outline';
    document.body.appendChild(dot);
    document.body.appendChild(outline);

    let mouseX = 0, mouseY = 0;
    let outlineX = 0, outlineY = 0;

    window.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        dot.style.left = `${mouseX}px`;
        dot.style.top = `${mouseY}px`;
    });

    function updateCursor() {
        const easing = 0.15;
        outlineX += (mouseX - outlineX) * easing;
        outlineY += (mouseY - outlineY) * easing;

        outline.style.left = `${outlineX}px`;
        outline.style.top = `${outlineY}px`;

        requestAnimationFrame(updateCursor);
    }
    updateCursor();

    // Hover interactions
    const interactiveElements = document.querySelectorAll('a, button, input, textarea, [role="button"], .tilt-card, .mutmiz-btn, .interactive-card');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => {
            dot.style.transform = 'translate(-50%, -50%) scale(1.8)';
            dot.style.backgroundColor = '#ff4d80'; // Pink accent on hover
            outline.style.transform = 'translate(-50%, -50%) scale(1.5)';
            outline.style.borderColor = '#7c3aed'; // Purple brand on hover
            outline.style.borderWidth = '2px';
        });
        el.addEventListener('mouseleave', () => {
            dot.style.transform = 'translate(-50%, -50%) scale(1)';
            dot.style.backgroundColor = '#7c3aed'; // Back to purple
            outline.style.transform = 'translate(-50%, -50%) scale(1)';
            outline.style.borderColor = 'rgba(124, 58, 237, 0.4)';
            outline.style.borderWidth = '1.5px';
        });
    });

    document.addEventListener('mouseleave', () => {
        dot.style.opacity = '0';
        outline.style.opacity = '0';
    });
    document.addEventListener('mouseenter', () => {
        dot.style.opacity = '1';
        outline.style.opacity = '1';
    });
}

/* ==========================================================================
   2. SCROLL REVEAL (INTERSECTION OBSERVER)
   ========================================================================== */
function initScrollReveal() {
    const revealElements = document.querySelectorAll('.reveal-init');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('reveal-active');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(el => observer.observe(el));
}

/* ==========================================================================
   3. 3D CARD TILT EFFECT
   ========================================================================== */
function init3DTilt() {
    const cards = document.querySelectorAll('.tilt-card');

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = ((centerY - y) / centerY) * 10;
            const rotateY = ((x - centerX) / centerX) * 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.02, 1.02, 1.02)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
            card.style.transition = 'transform 0.5s ease';
        });

        card.addEventListener('mouseenter', () => {
            card.style.transition = 'none';
        });
    });
}
