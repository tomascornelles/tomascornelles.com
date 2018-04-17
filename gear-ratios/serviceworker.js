importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.0.0-alpha.6/workbox-sw.js');

workbox.precaching.precacheAndRoute([
  {
    "url": "logo-negro.svg",
    "revision": "ff1c832025faf6ebb36c3385ee1434c5"
  },
  {
    "url": "android-icon-48x48.png",
    "revision": "931389ae9534e0116433ba245d7ccbd2"
  },
  {
    "url": "android-icon-96x96.png",
    "revision": "fcbfa0e31cbe00db1e7e333b0b4085a9"
  },
  {
    "url": "android-icon-192x192.png",
    "revision": "15bbfa9c5eda938db344c081acc21160"
  }
]);

self.addEventListener('install', event => {
  const urls = [
    'https://cdn.ampproject.org/v0.js',
    'https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js',
    'https://cdn.ampproject.org/v0/amp-bind-0.1.js',
    'https://cdn.ampproject.org/v0/amp-form-0.1.js',
    'logo-negro.svg',
    'android-icon-48x48.png',
    'android-icon-96x96.png',
    'android-icon-192x192.png',
    'index.html',
    '/'
  ];
  const cacheName = workbox.core.cacheNames.runtime;
  event.waitUntil(caches.open(cacheName).then((cache) => cache.addAll(urls)));
});

workbox.routing.registerRoute(/(index|\/articles\/)(.*)html|(.*)\/$/, args => {
  return workbox.strategies.networkFirst().handle(args).then(response => {
    return response;
  });
});

workbox.routing.registerRoute(/\.(?:js|css|png|gif|jpg|svg)$/,
  workbox.strategies.cacheFirst()
);

workbox.routing.registerRoute(/(.*)cdn\.ampproject\.org(.*)/,
  workbox.strategies.staleWhileRevalidate()
);
