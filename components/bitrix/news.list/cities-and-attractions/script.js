document.addEventListener('DOMContentLoaded', function() {
    var cityElements = document.getElementsByClassName('city-name');
    Array.prototype.filter.call(cityElements, function(city){
        city.onclick = function() {
            var attractions = city.nextElementSibling;
            attractions.style.display = (attractions.style.display == 'none') ? '' : 'none';
        };
    })
});