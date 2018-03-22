importScripts('https://storage.googleapis.com/workbox-cdn/releases/3.0.0/workbox-sw.js');


if (workbox) {
  console.log(`Yay! Workbox is loaded 🎉`);
} else {
  console.log(`Boo! Workbox didn't load 😬`);
}

workbox.routing.registerRoute(
  new RegExp('.'),
  workbox.strategies.networkFirst()
);

self.addEventListener('notificationclose', function(e) {
  var notification = e.notification;
  var primaryKey = notification.data.primaryKey;

  console.log('Closed notification: ' + primaryKey);
});

self.addEventListener('notificationclick', function(e) {
  var notification = e.notification;
  var primaryKey = notification.data.primaryKey;
  var action = e.action;

  if (action === 'close') {
    notification.close();
  } else {
    clients.openWindow('index.php');
    notification.close();
  }
});

self.addEventListener('push', function(e) {
  var options = {
    body: 'Electrabel INC. Amout of 50€',
    icon: 'assets/img/android-chrome-96x96.png',
    vibrate: [100, 50, 100],
    data: {
      dateOfArrival: Date.now(),
      primaryKey: '2'
    },
    actions: [
      {action: 'explore', title: 'Pay',
        icon: 'assets/img/checkmark.png'},
      {action: 'close', title: 'Close',
        icon: 'assets/img/xmark.png'},
    ]
  };
  e.waitUntil(
    self.registration.showNotification('You received a new bill', options)
  );
});
