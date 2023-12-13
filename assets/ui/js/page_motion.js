


// ScrollReveal().reveal('.motion_item', { delay: 250 });
// ScrollReveal().reveal('.motion_item', { duration: 500 });
// ScrollReveal().reveal('.motion_item', { delay: 375, reset: true });

// Is the same as...

ScrollReveal().reveal('.motion_item_left', {
    scale: 0.1,
    distance: '70px',
    origin: 'left',
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_right', {
    scale: 0.1,
    distance: '70px',
    origin: 'right',
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_top', {
    scale: 0.1,
    distance: '60px',
    origin: 'top',
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_bottom', {
    scale: 0.1,
    distance: '60px',
    origin: 'bottom',
    duration: 700,
    reset: true
});
