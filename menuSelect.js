const months = document.querySelectorAll('ul li a');
const monthInput = document.querySelector('#month');

months.forEach(month => {
    month.addEventListener('click', () => {
        monthInput.value = month.getAttribute('data-month');
    });
});
