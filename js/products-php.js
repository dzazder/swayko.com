/**
 * SWAYKO - Products Page JavaScript (PHP version)
 */

document.addEventListener('DOMContentLoaded', () => {
    const productsGrid = document.getElementById('productsGrid');
    const filterButtons = document.querySelectorAll('.filter-btn');
    
    // Store all product cards
    const allProductCards = productsGrid ? Array.from(productsGrid.querySelectorAll('.product-card')) : [];
    
    // Filter buttons
    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');
            
            // Update active state
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            // Filter products
            filterProducts(filter);
        });
    });
    
    // Filter products by category
    function filterProducts(category) {
        allProductCards.forEach((card, index) => {
            const cardCategory = card.getAttribute('data-category');
            
            if (category === 'all' || cardCategory === category) {
                card.style.display = '';
                // Re-animate
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 50);
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    // Animate cards on load
    function animateCards() {
        allProductCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    }
    
    // Initial animation
    if (allProductCards.length > 0) {
        animateCards();
    }
});

