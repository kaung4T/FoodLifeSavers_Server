


// ScrollReveal().reveal('.motion_item', { delay: 250 });
// ScrollReveal().reveal('.motion_item', { duration: 500 });
// ScrollReveal().reveal('.motion_item', { delay: 375, reset: true });

// Is the same as...

ScrollReveal().reveal('.motion_item_left', {
    scale: 1.4,
    distance: '260px',
    origin: 'left',
    duration: 700,
    reset: true
});

ScrollReveal().reveal('.motion_item_right', {
    scale: 1.4,
    distance: '260px',
    origin: 'right',
    duration: 700,
    reset: true
});
