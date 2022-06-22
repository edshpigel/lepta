# Lepta
[lepta.info](https://lepta.info/)
## Описание файлов
Загружены только gulp-файлы и тема сайта 

1. В файле [acf-fields.php](acf/acf-fields.php) находятся все произвольные поля настренные в плагине ACF, для управления контентом сайта 
2. Стоит обратить внимание на [реализацию карту с адресами секонд-хендов](https://lepta.info/second-hands/#addresses). Код в файле: [addresses.php](src/wp-content/themes/theme/template-parts/blocks/second-hands/addresses.php) 
3. В панели управления сайтом реализован выбор любых фигур для вывода на страницу: [figure.php](https://github.com/edshpigel/lepta/blob/5aed2e0529b8f4b78094850b9257807425cd47f7/src/wp-content/themes/theme/include/figure.php#L510) (сейчас бы я сделал иначе и лучше, но код я не трогал, оставил как есть)
