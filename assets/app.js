import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/scss/main.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

// Import necessary images
function importAll(r) {
    return r.keys().map(r);
  }
  
  importAll(require.context('./images', false, /\.(png|jpe?g|svg)$/));
