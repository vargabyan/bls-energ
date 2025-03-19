new Swiper('[data-services-swiper]', {
    spaceBetween: 24,
    speed: 1000,
    navigation: {
        nextEl: '[data-services-swiper-button-next]',
        prevEl: '[data-services-swiper-button-prev]',
    },
    pagination: {
        el: '[data-services-swipe-pagination]',
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

document.querySelectorAll('[data-wrapper-for-type-one-swiper]').forEach(eachSlider => {
    new Swiper(eachSlider.querySelector('[data-type-one-swiper]'), {
        spaceBetween: 24,
        speed: 1000,
        navigation: {
            nextEl: eachSlider.querySelector('[data-type-one-swiper-button-next]'),
            prevEl: eachSlider.querySelector('[data-type-one-swiper-button-prev]'),
        },
        pagination: {
            el: eachSlider.querySelector('[data-type-one-swipe-pagination]'),
        },
        breakpoints: {
            320: {
                slidesPerView: 1.05,
                spaceBetween: 8,
            },
            992: {
                slidesPerView: 1.2,
                spaceBetween: 24,
            },
            1200: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
        }
    });
})

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
    spaceBetween: 10,
    slidesPerView: 3.9,
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

new Swiper('[data-project-swiper]', {
    spaceBetween: 20,
    slidesPerView: 1,
    speed: 1000,
    pagination: {
        el: '[data-project-swiper-pagination]',
    },
    navigation: {
        nextEl: '[data-project-swiper-button-next]',
        prevEl: '[data-project-swiper-button-prev]',
    },
});


Fancybox.bind(`[data-fancybox="gallery"]`, {});


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
    const wrapper = e.target.closest('.active[data-popup-wrapper]');

    if (e.target === wrapper) {
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
    const btn = e.target.closest('[data-open-popup-we-have]');

    if (btn) {
        const popupID = btn.getAttribute('data-open-popup-we-have');
        const wrapper = document.querySelector(`[data-popup-wrapper-we-have="${popupID}"]`);
        const container = wrapper.querySelector('[data-popup-container]');

        wrapper.classList.add('active');
        container.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-open-popup-services]');

    if (btn) {
        const popupID = btn.getAttribute('data-open-popup-services');
        const wrapper = document.querySelector(`[data-popup-wrapper-services="${popupID}"]`);
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


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-popup-video-btn-close]');

    if (btn && !btn.classList.contains('active')) {
        const wrapper = btn.closest('.active[data-popup-video-wrapper]');

        wrapper.remove();
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('.active[data-popup-video-btn-close]');

    if (btn) {
        const wrapper = btn.closest('.active.full-screen[data-popup-video-wrapper]');
        const btnFullscreen = wrapper.querySelector('[data-vide-btn-fullscreen]');
        const video = wrapper.querySelector('.active[data-popup-video]');

        wrapper.classList.remove('full-screen');
        btn.classList.remove('active');
        btnFullscreen.classList.add('active');
        video.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('click', e => {
    const btn = e.target.closest('.active[data-vide-btn-fullscreen]');

    if (btn) {
        const wrapper = btn.closest('[data-popup-video-wrapper]');
        const btnClose = wrapper.querySelector('[data-popup-video-btn-close]');
        const video = wrapper.querySelector('[data-popup-video]');

        wrapper.classList.add('full-screen');
        btnClose.classList.add('active');
        video.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
        btn.classList.remove('active');
    }
})


//  youtube vide start
const tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function onYouTubeIframeAPIReady() {
    const player = new YT.Player('player', { // 'play
        videoId: 'HS4NomdUwTQ',
        playerVars: {
            'controls': 1,
            'autoplay': 1,
            'mute': 1,
        },
        events: {
            'onReady': onPlayerReady,
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}

//  youtube vide end


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-btn-select-city-btn]');

    if (btn) {
        const modalWrapper = document.querySelector('[data-popup-select-city]');

        modalWrapper.classList.add('active');
        document.querySelector('body').style['overflow'] = 'hidden';
    }
})
document.addEventListener('click', e => {
    const input = e.target.closest('[data-popup-select-input]');

    if (input) {
        const modalWrapper = input.closest('[data-popup-select-city]');
        const allBtnOpen = document.querySelectorAll('[data-btn-select-city-value]');

        allBtnOpen.forEach( btnOpen => {
            btnOpen.textContent = input.querySelector('input').value;
        })
        modalWrapper.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})
document.addEventListener('input', e => {
    const input = e.target.closest('[data-popup-select-search-input]');

    if (input) {
        const modalWrapper = input.closest('[data-popup-select-city]');
        const formItems = modalWrapper.querySelectorAll('[data-popup-select-input]');
        const reg = new RegExp(`^${input.value.trim().toUpperCase()}`);
        const notFound = modalWrapper.querySelector('[data-popup-search-not-found]');

        Object.values(formItems).forEach( item => {
            if (reg.test(item.textContent.trim().toUpperCase())) {
                item.style['display'] = 'flex';
            } else {
                item.style['display'] = 'none';
            }
        })

        const hasText = Object.values(formItems).some(item => reg.test(item.textContent.trim().toUpperCase()))
        if (!hasText) {
            notFound.classList.add('active');
        } else {
            notFound.classList.remove('active');
        }
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-collapse-item-question]');

    if (btn) {
        const wrapper = btn.closest('[data-collapse-items-wrapper]');
        const item = btn.closest('[data-collapse-item]');
        const allItem = wrapper.querySelectorAll('[data-collapse-item]');

        allItem.forEach(each => {
            const question = each.querySelector('[data-collapse-item-question]');
            const answer = each.querySelector('[data-collapse-item-answer]');

            if (item !== each) {
                question.classList.remove('active');
                answer.classList.remove('active');
            } else {
                question.classList.toggle('active');
                answer.classList.toggle('active');
            }
        })
    }
})


document.addEventListener('click', e => {
    const btn = e.target.closest('[data-ask-city-btn-yes]');

    if (btn) {
        const wrapper = btn.closest('[data-ask-city]');

        wrapper.classList.remove('active');
        document.querySelector('body').style['overflow'] = '';
    }
})

document.addEventListener('click', e => {
    const btn = e.target.closest('[data-ask-city-btn-no]');

    if (btn) {
        const selectCity = document.querySelector('[data-popup-select-city]');
        const askCity = btn.closest('[data-ask-city]');

        askCity.classList.remove('active');
        selectCity.classList.add('active');
        document.querySelector('body').style['overflow'] = '';
    }
})


document.addEventListener('scroll', () => {
    const scrollElement = document.querySelector('[data-scroll-element]');

    if (scrollElement && window.innerWidth > 992) {
        const layout = scrollElement.closest('[data-layout]');
        const layoutContent = layout.querySelector('[data-layout-content]');
        const locationLayoutContent = layoutContent.getBoundingClientRect()
        const offsetScreenOfTop = 30;

        layoutContent.style['height'] = 'max-content';

        if (locationLayoutContent.top <= 0 && (Math.round(locationLayoutContent.bottom) - scrollElement.offsetHeight) >= 0) {
            scrollElement.style['marginTop'] = `${(window.scrollY - layout.offsetTop) + offsetScreenOfTop}px`;

        } else if (Math.round(locationLayoutContent.bottom) - scrollElement.offsetHeight <= 0) {
            scrollElement.style['marginTop'] = `${locationLayoutContent.height - scrollElement.offsetHeight}px`;

        } else {
            scrollElement.style['marginTop'] = '0';
        }
    }
})