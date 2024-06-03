new Swiper('[data-services-swiper]', {
    spaceBetween: 24,
    speed: 1000,
    navigation: {
        nextEl: '[data-services-swiper-button-next]',
        prevEl: '[data-services-swiper-button-prev]',
    },
    breakpoints: {
        320: {
            slidesPerView: 1.07,
            spaceBetween: 24,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 24,
        },
    }
});

new Swiper('[data-we-have-swiper]', {
    slidesPerGroup: 2,
    spaceBetween: 24,
    speed: 1000,
    breakpoints: {
        320: {
            slidesPerView: 2.2,
            spaceBetween: 24,
        },
    }
});


const sliderGallery = new Swiper('[data-popup-products-gallery-swiper]', {
    speed: 1000,
    breakpoints: {
        320: {
            slidesPerView: 10,
        },
        1440: {
            slidesPerView: 12,
        },
    }
});

new Swiper('[data-popup-products-swiper]', {
    spaceBetween: 20,
    slidesPerView: 1,
    speed: 1000,
    pagination: {
        el: '[data-popup-products-swiper-pagination]',
    },
    navigation: {
        nextEl: '[data-popup-products-swiper-button-next]',
        prevEl: '[data-popup-products-swiper-button-prev]',
    },
    thumbs: {
        swiper: sliderGallery,
    }
});


document.addEventListener('click', e => {
    const btn = e.target.closest('.close[data-header-btn-open-menu]');
    const menu = e.target.closest('.active[data-header-menu]');

    if (!btn && !menu) {
        const wrapper = document.querySelector('[data-header]');
        const btn_ = wrapper.querySelector('[data-header-btn-open-menu]');
        const menu_ = wrapper.querySelector('[data-header-menu]');

        btn_.classList.remove('close');
        menu_.classList.remove('active');
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-header-btn-open-menu]');

    if (btn) {
        const wrapper = btn.closest('[data-header]');
        const menu = wrapper.querySelector('[data-header-menu]');

        btn.classList.toggle('close');
        menu.classList.toggle('active');
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('.active[data-success-container]');

        wrapper.classList.remove('active');
        if (container) container.classList.remove('active');
        if (successContainer) successContainer.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-btn-submit]');

    if (btn) {
        e.preventDefault();
        const wrapper = btn.closest('.active[data-popup-wrapper]');
        const container = wrapper.querySelector('.active[data-popup-container]');
        const successContainer = wrapper.querySelector('[data-success-container]');

        container.classList.remove('active');
        successContainer.classList.add('active');
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-order-popup]');

    if (btn) {
        const popupID = btn.getAttribute('data-order-popup');
        const wrapper = document.querySelector(`[data-popup-wrapper="${popupID}"]`);
        const container = wrapper.querySelector('[data-popup-container]');

        wrapper.classList.add('active');
        container.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-products-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.active[data-popup-products]');

        wrapper.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-products-open-button]');

    if (btn) {
        const popupID = btn.getAttribute('data-popup-products-open-button');
        const wrapper = document.querySelector(`[data-popup-products="${popupID}"]`);
        const alPPopups = document.querySelectorAll('.active[data-popup-products]');

        alPPopups.forEach(item => {
            item.classList.remove('active');
        })
        wrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


