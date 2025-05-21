const CACHE_NAME = 'compassist-v1';
const ASSETS = [
  '/',
  '/index.html',
  '/assort.html',
  '/css/assort.css',
  '/mat/CompAssist.svg'
];

self.addEventListener('install', (e) => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(ASSETS))
  );
});

self.addEventListener('fetch', (e) => {
  e.respondWith(
    caches.match(e.request)
      .then(response => response || fetch(e.request))
  );
});