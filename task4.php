//текст 3 элемента <li>

$('div > li').eq(2).click(function () {
    console.log($(this).text())
});
