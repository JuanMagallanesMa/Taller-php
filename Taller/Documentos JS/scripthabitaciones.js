   function adjustOpacity() {
            var slider = document.getElementById('opacity-slider');
            var images = document.getElementsByClassName('image-opacity');
            for (var i = 0; i < images.length; i++) {
                images[i].style.opacity = slider.value / 100;
            }
        }
