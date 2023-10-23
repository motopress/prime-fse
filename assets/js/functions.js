
document.addEventListener("DOMContentLoaded", function(event) {

    const advancedHeadingBlocks = document.querySelectorAll('.wp-block-getwid-advanced-heading.is-style-repeating-text');

    advancedHeadingBlocks.forEach(block => {
        const heading = block.querySelector('.wp-block-getwid-advanced-heading__content');

        if(heading) {

            const text = heading.textContent + ' ';

            heading.innerHTML = '<span data-text=" ' + text.repeat(5) + '">' + heading.innerHTML + '</span>';
            heading.classList.add('should-animate');
        }
    });

});