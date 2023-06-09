import "./bootstrap";
import * as Popper from "@popperjs/core";

window.Popper = Popper;

import "bootstrap";
import Splide from '@splidejs/splide'
import {AutoScroll} from '@splidejs/splide-extension-auto-scroll'

import "../scss/root.scss";


// let center = { lat: -12.205303744007317, lng: -76.9311833216125 }
// let map = new window['google'].maps.Map(document.getElementById('map'), {
//     center: center,
//     zoom: 15
// })
// let marker = new window['google'].maps.Marker({
//     position: center,
//     map: map,
//     draggable: true,
//     title: 'Arrastrar a la ubicación',
//     optimized: false
// })
// marker.addListener('drag', function (event) {
//     // $("#lat-field").val(event.latLng.lat());
//     // $("#lon-field").val(event.latLng.lng());
//     center = { lat: event.latLng.lat(), lng: event.latLng.lng() }
// })

document.addEventListener('DOMContentLoaded', () => {
    const splideEl = document.querySelector('#splide-element')
    if (splideEl) {
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
        }).mount({AutoScroll})
    }

    const splideEspecialtyEl = document.querySelector('#splide-specialty')
    if (splideEspecialtyEl) {
        new Splide(splideEspecialtyEl, {
            type: 'loop',
            drag: 'free',
            focus: 'center',
            perPage: 8,
            fixedWidth: '14rem',
            autoScroll: {
                speed: .5,
            },
            pagination: false,
        }).mount({AutoScroll})
    }

    console.log(window.location.hash)

    const navItems = [].slice.call(document.querySelectorAll('[data-action="nav-smooth"]'))
    for (let navItem of navItems) {
        navItem.addEventListener('click', (e) => {
            e.preventDefault()

            const {action, target} = navItem.dataset
            if (window.location.pathname !== navItem.pathname) {
                window.location.href = `/#${target}`
            } else {
                const nodeTarget = document.getElementById(target)
                const box = nodeTarget.getBoundingClientRect()
                console.log(box.top)
                window.scrollTo({
                    top: box.top,
                    behavior: 'smooth'
                })
            }
        })
    }
})

