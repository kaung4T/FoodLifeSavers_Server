


// ScrollReveal().reveal('.motion_item', { delay: 250 });
// ScrollReveal().reveal('.motion_item', { duration: 500 });
// ScrollReveal().reveal('.motion_item', { delay: 375, reset: true });

// Is the same as...

ScrollReveal().reveal('.motion_item_left', {
    scale: 0.1,

    distance: '70px',
    origin: 'left',
    delay: 100,
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_right', {
    scale: 0.1,

    distance: '70px',
    origin: 'right',
    delay: 100,
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_top', {
    scale: 0.1,

    distance: '60px',
    origin: 'top',
    delay: 300,
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_bottom', {
    scale: 0.1,
    distance: '60px',
    origin: 'bottom',
    delay: 300,
    duration: 700,
    reset: true
});
