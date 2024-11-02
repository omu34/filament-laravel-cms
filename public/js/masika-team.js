function swipeCards() {
    return {
        cards: [
            {
                id: 1,
                image: '../images/masika.jpg',
                title: 'Alex Masika',
                description: 'Senior Partner.',
                price: 8.99,
                link: 'skmasika@gmail.com',
            },
            {
                id: 2,
                image: '../images/koross.jpg',
                title: 'Ann Koross',
                description: 'Now Jurist at ELC.',
                link: 'skmasika@gmail.com',
                // link: 'https://lqrs.com'
            },
            {
                id: 3,
                image: '../images/pius.jpg',
                title: 'Dr. Pius Wanjala',
                description: 'Partner.',
                // price: 4.99,
               link: 'skmasika@gmail.com'
            },
            {
                id: 4,
                image: '../images/nelson.jpg',
                title: 'Nelson Kuya',
                description: 'Legal Assistant.',
                // price: 7.99,
                link: 'skmasika@gmail.com'
            },
            {
                id: 5,
                image: '../images/tomas.jpg',
                title: 'Thomas Opunga',
                description: 'Associate Lawyer.',
                // price: 6.49,
               link: 'skmasika@gmail.com'
            },
            {
                id: 6,
                image: '../images/pius.jpg',
                title: 'Dr. Pius Wanjala',
                description: 'Partner.',
                // price: 3.99,
                link: 'skmasika@gmail.com'
            },
            {
                id: 7,
                image: '../images/nelson.jpg',
                title: 'Nelson Kuya',
                description: 'Legal Assistant.',
                // price: 3.99,
               link: 'skmasika@gmail.com'
            }
        ],
        addToCart(product) {
            // Implement your add to cart logic here
            console.log('Adding to cart:', product);
        }
    };
}
