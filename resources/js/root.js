import "./bootstrap";
import * as Popper from "@popperjs/core";

window.Popper = Popper;

import "bootstrap";
import Splide from '@splidejs/splide'
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll'

import "../scss/root.scss";

new Splide('#splide-element', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    perPage: 6,
    arrows: false,
    pagination: false,
    autoHeight: true,
    autoScroll: {
        speed: 0.4
    },
    breakpoints: {
        1200: {
            perPage: 5
        },
        992: {
            perPage: 4
        },
        768: {
            perPage: 4
        },
        576: {
            perPage: 3
        }
    }
}).mount({ AutoScroll })


let center = { lat: -12.205303744007317, lng: -76.9311833216125 }
let map = new window['google'].maps.Map(document.getElementById('map'), {
    center: center,
    zoom: 15
})
let marker = new window['google'].maps.Marker({
    position: center,
    map: map,
    draggable: true,
    title: 'Arrastrar a la ubicación',
    optimized: false
})
marker.addListener('drag', function (event) {
    // $("#lat-field").val(event.latLng.lat());
    // $("#lon-field").val(event.latLng.lng());
    center = { lat: event.latLng.lat(), lng: event.latLng.lng() }
})
